<div class="card h-100 shadow-sm hover-lift border-0">
    @if($article->image)
        <img src="{{ asset('storage/' . $article->image) }}" 
             class="card-img-top" 
             alt="{{ $article->title }}" 
             style="height: 200px; object-fit: cover;">
    @else
        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
            <i class="fas fa-image fa-3x text-muted"></i>
        </div>
    @endif
    <div class="card-body">
        @if($article->category)
            <span class="badge bg-primary mb-2">{{ $article->category->name }}</span>
        @endif
        <h5 class="card-title text-primary">{{ Str::limit($article->title, 50) }}</h5>
        <div class="text-muted small mb-2">
            <i class="fas fa-clock me-1"></i> {{ $article->created_at->format('d M Y') }}
            @if($article->user)
                <span class="mx-1">|</span>
                <i class="fas fa-user me-1"></i> {{ $article->user->name }}
            @endif
        </div>
        <p class="card-text">{{ Str::limit($article->excerpt ?? strip_tags($article->content), 100) }}</p>
        <a href="{{ route('articles.show', $article->slug) }}" class="text-teal text-decoration-none fw-semibold">
            Baca <i class="fas fa-arrow-right ms-1"></i>
        </a>
    </div>
</div>