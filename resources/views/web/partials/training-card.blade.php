<div class="card h-100 shadow-sm hover-lift">
    <div class="card-body">
        <span class="badge bg-{{ $training->type == 'online' ? 'info' : 'primary' }} mb-2">
            <i class="fas fa-{{ $training->type == 'online' ? 'laptop' : 'building' }} me-1"></i>
            {{ $training->type ?? 'Offline' }}
        </span>
        <h5 class="card-title text-primary">{{ Str::limit($training->title, 50) }}</h5>
        <div class="text-muted small">
            <div><i class="fas fa-calendar-day me-1"></i> {{ $training->start_date->format('d M Y') }}</div>
            @if($training->end_date)
                <div><i class="fas fa-calendar-day me-1"></i> Sampai {{ $training->end_date->format('d M Y') }}</div>
            @endif
            @if($training->instructor)
                <div><i class="fas fa-user-tie me-1"></i> {{ $training->instructor }}</div>
            @endif
        </div>
        <div class="mt-2">
            @if($training->price > 0)
                <span class="fw-bold text-primary">Rp {{ number_format($training->price, 0, ',', '.') }}</span>
            @else
                <span class="badge bg-success">Gratis</span>
            @endif
            @if($training->quota)
                <span class="badge bg-secondary float-end">
                    <i class="fas fa-users me-1"></i> {{ $training->participants_count ?? 0 }}/{{ $training->quota }}
                </span>
            @endif
        </div>
        <div class="mt-3">
            <a href="{{ route('trainings.show', $training->id) }}" class="btn btn-teal btn-sm w-100">
                <i class="fas fa-info-circle me-1"></i>Detail & Daftar
            </a>
        </div>
    </div>
</div>