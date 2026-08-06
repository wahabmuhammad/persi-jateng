<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of articles.
     */
    public function index(Request $request)
    {
        $query = Article::with(['category', 'user'])
            ->where('is_published', true);

        // Filter by category
        if ($request->has('category') && $request->category != '') {
            $query->where('category_id', $request->category);
        }

        // Search
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('excerpt', 'LIKE', "%{$search}%")
                  ->orWhere('content', 'LIKE', "%{$search}%");
            });
        }

        // Filter by date
        if ($request->has('period') && $request->period != '') {
            switch ($request->period) {
                case 'week':
                    $query->where('created_at', '>=', now()->subWeek());
                    break;
                case 'month':
                    $query->where('created_at', '>=', now()->subMonth());
                    break;
                case 'year':
                    $query->where('created_at', '>=', now()->subYear());
                    break;
            }
        }

        $articles = $query->latest()
            ->paginate(9)
            ->withQueryString();

        $categories = Category::where('is_active', true)->get();
        
        // Popular articles (most viewed)
        $popularArticles = Article::where('is_published', true)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('web.articles.index', compact('articles', 'categories', 'popularArticles'));
    }

    /**
     * Display the specified article.
     */
    public function show($slug)
    {
        $article = Article::with(['category', 'user'])
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        // Increment view count
        $article->increment('views');

        // Get related articles (same category)
        $relatedArticles = Article::where('category_id', $article->category_id)
            ->where('id', '!=', $article->id)
            ->where('is_published', true)
            ->latest()
            ->take(4)
            ->get();

        // Get popular articles
        $popularArticles = Article::where('is_published', true)
            ->where('id', '!=', $article->id)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('web.articles.detail', compact(
            'article', 
            'relatedArticles', 
            'popularArticles'
        ));
    }

    /**
     * Load more articles via AJAX.
     */
    public function loadMore(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 6;
        
        $articles = Article::where('is_published', true)
            ->latest()
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get();
            
        $hasMore = Article::where('is_published', true)
            ->count() > ($page * $perPage);

        $html = '';
        foreach ($articles as $article) {
            $html .= view('web.partials.article-card', compact('article'))->render();
        }

        return response()->json([
            'html' => $html,
            'hasMore' => $hasMore
        ]);
    }
}