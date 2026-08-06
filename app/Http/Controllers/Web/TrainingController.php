<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of trainings.
     */
    public function index(Request $request)
    {
        $query = Training::where('is_published', true);

        // Filter by type
        if ($request->has('type') && $request->type != '') {
            $query->where('type', $request->type);
        }

        // Filter by status
        if ($request->has('status') && $request->status != '') {
            $now = now();
            switch ($request->status) {
                case 'upcoming':
                    $query->where('start_date', '>', $now);
                    break;
                case 'ongoing':
                    $query->where('start_date', '<=', $now)
                          ->where('end_date', '>=', $now);
                    break;
                case 'completed':
                    $query->where('end_date', '<', $now);
                    break;
            }
        }

        // Filter by price
        if ($request->has('price') && $request->price != '') {
            if ($request->price == 'free') {
                $query->where('price', 0);
            } elseif ($request->price == 'paid') {
                $query->where('price', '>', 0);
            }
        }

        // Search
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhere('instructor', 'LIKE', "%{$search}%");
            });
        }

        // Default: show upcoming trainings
        if (!$request->has('status') || $request->status == '') {
            $query->where('start_date', '>=', now());
        }

        $trainings = $query->orderBy('start_date', 'asc')
            ->paginate(9)
            ->withQueryString();

        // Get training types for filter
        $trainingTypes = Training::select('type')
            ->distinct()
            ->whereNotNull('type')
            ->pluck('type');

        return view('web.trainings.index', compact('trainings', 'trainingTypes'));
    }

    /**
     * Display the specified training.
     */
    public function show($id)
    {
        $training = Training::where('id', $id)
            ->where('is_published', true)
            ->firstOrFail();

        // Increment view count
        $training->increment('views');

        // Get related trainings
        $relatedTrainings = Training::where('id', '!=', $training->id)
            ->where('is_published', true)
            ->where('start_date', '>=', now())
            ->orderBy('start_date', 'asc')
            ->take(4)
            ->get();

        return view('web.trainings.detail', compact('training', 'relatedTrainings'));
    }

    /**
     * Register for a training.
     */
    public function register(Request $request, $id)
    {
        $training = Training::findOrFail($id);
        
        // Check if registration is still open
        if ($training->registration_deadline && $training->registration_deadline < now()) {
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran telah ditutup'
            ]);
        }

        // Check quota
        if ($training->quota && $training->quota <= $training->participants_count) {
            return response()->json([
                'success' => false,
                'message' => 'Kuota telah penuh'
            ]);
        }

        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'institution' => 'nullable|string|max:255',
            'notes' => 'nullable|string'
        ]);

        // Create registration
        $registration = $training->registrations()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'institution' => $request->institution,
            'notes' => $request->notes,
            'registration_date' => now(),
            'status' => 'pending'
        ]);

        // Update participant count
        $training->increment('participants_count');

        // Send notification (example)
        // Mail::to($request->email)->send(new TrainingRegistrationMail($registration));

        return response()->json([
            'success' => true,
            'message' => 'Pendaftaran berhasil! Silakan cek email Anda.',
            'registration_id' => $registration->id
        ]);
    }

    /**
     * Get training schedule as JSON.
     */
    public function schedule(Request $request)
    {
        $month = $request->get('month', now()->month);
        $year = $request->get('year', now()->year);

        $trainings = Training::where('is_published', true)
            ->whereMonth('start_date', $month)
            ->whereYear('start_date', $year)
            ->get()
            ->map(function($training) {
                return [
                    'id' => $training->id,
                    'title' => $training->title,
                    'start_date' => $training->start_date->format('Y-m-d'),
                    'end_date' => $training->end_date->format('Y-m-d'),
                    'location' => $training->location,
                    'type' => $training->type,
                    'price' => $training->price,
                    'quota' => $training->quota,
                    'participants' => $training->participants_count
                ];
            });

        return response()->json($trainings);
    }
}