<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Event;
use App\Models\Training;
use App\Models\Figure;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 4 berita terbaru yang dipublish
        $articles = Article::with(['category', 'user'])
            ->where('is_published', true)
            ->latest()
            ->take(4)
            ->get();
            
        // Ambil 3 event terdekat
        $events = Event::where('date', '>=', now())
            ->where('is_published', true)
            ->orderBy('date', 'asc')
            ->take(3)
            ->get();
            
        // Ambil 3 pelatihan terdekat
        $trainings = Training::where('start_date', '>=', now())
            ->where('is_published', true)
            ->orderBy('start_date', 'asc')
            ->take(3)
            ->get();
            
        // Ambil figur aktif
        $figure = Figure::where('is_active', true)
            ->first();

        // Ambil kategori untuk filter
        $categories = Category::where('is_active', true)->get();

        // Statistik quick count
        $stats = [
            'articles' => Article::where('is_published', true)->count(),
            'events' => Event::where('is_published', true)->count(),
            'trainings' => Training::where('is_published', true)->count(),
            'hospitals' => 127, // Contoh data statis
        ];

        return view('web.home', compact(
            'articles', 
            'events', 
            'trainings', 
            'figure', 
            'categories',
            'stats'
        ));
    }

    // Untuk AJAX load more events
    public function loadMoreEvents(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 3;
        
        $events = Event::where('date', '>=', now())
            ->where('is_published', true)
            ->orderBy('date', 'asc')
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get();
            
        $hasMore = Event::where('date', '>=', now())
            ->where('is_published', true)
            ->count() > ($page * $perPage);

        $html = '';
        foreach ($events as $event) {
            $html .= view('web.partials.event-card', compact('event'))->render();
        }

        return response()->json([
            'html' => $html,
            'hasMore' => $hasMore
        ]);
    }
}