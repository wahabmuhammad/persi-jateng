<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of events.
     */
    public function index(Request $request)
    {
        $query = Event::where('is_published', true);

        // Filter by type
        if ($request->has('type') && $request->type != '') {
            $query->where('type', $request->type);
        }

        // Filter by date range
        if ($request->has('period') && $request->period != '') {
            switch ($request->period) {
                case 'upcoming':
                    $query->where('date', '>=', now());
                    break;
                case 'past':
                    $query->where('date', '<', now());
                    break;
                case 'this_month':
                    $query->whereMonth('date', now()->month)
                          ->whereYear('date', now()->year);
                    break;
                case 'next_month':
                    $nextMonth = now()->addMonth();
                    $query->whereMonth('date', $nextMonth->month)
                          ->whereYear('date', $nextMonth->year);
                    break;
            }
        }

        // Search
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhere('location', 'LIKE', "%{$search}%");
            });
        }

        // Default: show upcoming events
        if (!$request->has('period') || $request->period == '') {
            $query->where('date', '>=', now());
        }

        $events = $query->orderBy('date', 'asc')
            ->paginate(9)
            ->withQueryString();

        // Get event types for filter
        $eventTypes = Event::select('type')
            ->distinct()
            ->whereNotNull('type')
            ->pluck('type');

        return view('web.events.index', compact('events', 'eventTypes'));
    }

    /**
     * Display the specified event.
     */
    public function show($id)
    {
        $event = Event::where('id', $id)
            ->where('is_published', true)
            ->firstOrFail();

        // Increment view count
        $event->increment('views');

        // Get related events
        $relatedEvents = Event::where('id', '!=', $event->id)
            ->where('is_published', true)
            ->where('date', '>=', now())
            ->orderBy('date', 'asc')
            ->take(4)
            ->get();

        return view('web.events.detail', compact('event', 'relatedEvents'));
    }

    /**
     * Get upcoming events for AJAX.
     */
    public function upcoming(Request $request)
    {
        $limit = $request->get('limit', 5);
        
        $events = Event::where('date', '>=', now())
            ->where('is_published', true)
            ->orderBy('date', 'asc')
            ->take($limit)
            ->get();

        $html = view('web.partials.upcoming-events', compact('events'))->render();

        return response()->json([
            'html' => $html,
            'count' => $events->count()
        ]);
    }

    /**
     * Get event calendar data.
     */
    public function calendar(Request $request)
    {
        $month = $request->get('month', now()->month);
        $year = $request->get('year', now()->year);

        $events = Event::where('is_published', true)
            ->whereMonth('date', $month)
            ->whereYear('date', $year)
            ->get()
            ->groupBy(function($event) {
                return $event->date->format('Y-m-d');
            });

        $calendar = [];
        foreach ($events as $date => $items) {
            $calendar[$date] = [
                'count' => $items->count(),
                'events' => $items->map(function($item) {
                    return [
                        'id' => $item->id,
                        'title' => $item->title,
                        'time' => $item->time,
                        'location' => $item->location
                    ];
                })
            ];
        }

        return response()->json($calendar);
    }

    /**
     * Export events to ICS calendar.
     */
    public function exportIcs($id)
    {
        $event = Event::findOrFail($id);
        
        $icsContent = "BEGIN:VCALENDAR\n";
        $icsContent .= "VERSION:2.0\n";
        $icsContent .= "PRODID:-//PERSI Jateng//Event//EN\n";
        $icsContent .= "BEGIN:VEVENT\n";
        $icsContent .= "UID:" . uniqid() . "@persijateng.or.id\n";
        $icsContent .= "DTSTAMP:" . now()->format('Ymd\THis') . "\n";
        $icsContent .= "DTSTART:" . $event->date->format('Ymd') . "T" . str_replace(':', '', $event->time) . "\n";
        $icsContent .= "SUMMARY:" . $event->title . "\n";
        $icsContent .= "DESCRIPTION:" . strip_tags($event->description) . "\n";
        $icsContent .= "LOCATION:" . $event->location . "\n";
        $icsContent .= "END:VEVENT\n";
        $icsContent .= "END:VCALENDAR";

        return response($icsContent)
            ->header('Content-Type', 'text/calendar')
            ->header('Content-Disposition', 'attachment; filename="event-' . $event->id . '.ics"');
    }
}