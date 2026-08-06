<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Event;
use App\Models\Training;
use App\Models\Figure;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    /**
     * Show about page.
     */
    public function about()
    {
        // Get organization structure
        $figures = Figure::where('is_active', true)
            ->where('type', 'structure')
            ->orderBy('order')
            ->get();

        // Get board members
        $boardMembers = Figure::where('is_active', true)
            ->where('type', 'board')
            ->orderBy('order')
            ->get();

        // Get achievements
        $achievements = [
            [
                'icon' => 'fa-award',
                'title' => 'Penghargaan Pelayanan Kesehatan',
                'year' => '2025',
                'description' => 'Penghargaan dari Kementerian Kesehatan RI'
            ],
            [
                'icon' => 'fa-trophy',
                'title' => 'Best Hospital Association',
                'year' => '2024',
                'description' => 'Penghargaan dari WHO Indonesia'
            ],
            [
                'icon' => 'fa-medal',
                'title' => 'Inovasi Digital Kesehatan',
                'year' => '2023',
                'description' => 'Penghargaan dari Kominfo'
            ]
        ];

        // Get partner hospitals count
        $hospitalCount = 127;
        
        // Get member stats
        $memberStats = [
            'hospitals' => $hospitalCount,
            'doctors' => 4500,
            'nurses' => 7800,
            'staff' => 12000
        ];

        return view('web.about', compact(
            'figures', 
            'boardMembers', 
            'achievements', 
            'memberStats'
        ));
    }

    /**
     * Show contact page.
     */
    public function contact()
    {
        // Get contact information
        $contactInfo = [
            'address' => 'Jl. Pahlawan No. 45, Semarang, Jawa Tengah 50134',
            'phone' => '(024) 1234-5678',
            'email' => 'info@persijateng.or.id',
            'whatsapp' => '0812-3456-7890',
            'office_hours' => 'Senin - Jumat: 08.00 - 16.00 WIB',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d...'
        ];

        return view('web.contact', compact('contactInfo'));
    }

    /**
     * Handle contact form submission.
     */
    public function sendContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Save to database (if you have Contact model)
        // Contact::create($request->all());

        // Send email notification
        try {
            // Mail::to('admin@persijateng.or.id')->send(new ContactMail($request->all()));
            // Mail::to($request->email)->send(new ContactAutoReply($request->all()));
        } catch (\Exception $e) {
            // Log error but don't fail
            Log::error('Contact email error: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Pesan Anda telah terkirim. Kami akan merespon dalam 1x24 jam.'
        ]);
    }

    /**
     * Show gallery page.
     */
    public function gallery()
    {
        // Get gallery items (if you have Gallery model)
        // $galleries = Gallery::where('is_active', true)->paginate(12);
        
        $galleries = [
            [
                'id' => 1,
                'title' => 'Seminar Nasional PERSI 2025',
                'image' => 'gallery/seminar-2025.jpg',
                'category' => 'Event'
            ],
            [
                'id' => 2,
                'title' => 'Kunjungan Kerja ke Rumah Sakit',
                'image' => 'gallery/kunjungan-rs.jpg',
                'category' => 'Kegiatan'
            ]
        ];

        $categories = ['Event', 'Kegiatan', 'Pelatihan', 'Kunjungan'];

        return view('web.gallery', compact('galleries', 'categories'));
    }

    /**
     * Handle newsletter subscription.
     */
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Email sudah terdaftar atau tidak valid'
            ], 422);
        }

        // Save subscriber
        // Subscriber::create(['email' => $request->email]);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil berlangganan newsletter!'
        ]);
    }

    /**
     * Download file or document.
     */
    public function download($type, $id)
    {
        // Example: download training materials, event brochures, etc.
        // $file = Document::where('type', $type)->findOrFail($id);
        
        // return response()->download(storage_path('app/public/' . $file->path));
        
        return response()->json([
            'message' => 'File download akan segera dimulai'
        ]);
    }

    /**
     * Sitemap generator.
     */
    public function sitemap()
    {
        // Generate XML sitemap
        $pages = [
            '/',
            '/berita',
            '/agenda',
            '/pelatihan',
            '/tentang',
            '/kontak'
        ];

        $articles = Article::where('is_published', true)->get();
        $events = Event::where('is_published', true)->get();
        $trainings = Training::where('is_published', true)->get();

        return response()->view('web.sitemap', compact('pages', 'articles', 'events', 'trainings'))
            ->header('Content-Type', 'text/xml');
    }
}