@extends('layouts.app')

@section('title', 'RS Anggota - PERSI Jawa Tengah')

@section('content')
    <!-- Breadcrumb -->
    <div class="py-3" style="background:var(--sage-50);border-bottom:1px solid var(--line);">
        <div class="container-persi">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size:0.9rem;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none"
                            style="color:var(--sage-600);">Beranda</a></li>
                    <li class="breadcrumb-item active" style="color:var(--ink-700);" aria-current="page">RS Anggota</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero Section -->
    <section class="hero-section-inner position-relative"
        style="padding-top:40px;padding-bottom:40px;background:var(--sage-800);">
        <div class="hero-bg-kawung kawung-texture position-absolute top-0 start-0 w-100 h-100" style="opacity:0.15;"
            aria-hidden="true"></div>
        <div class="container-persi position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="hero-eyebrow mb-3 d-inline-flex align-items-center gap-2"
                        style="background:rgba(255,255,255,0.15);color:#fff;border-color:rgba(255,255,255,0.2);">
                        <span class="dot" style="background:var(--brass-400);"></span>
                        Database Rumah Sakit
                    </span>
                    <h1 class="font-display text-white" style="font-size:clamp(1.8rem,3vw,2.8rem);">
                        Rumah Sakit Anggota<br>
                        <span style="color:var(--brass-400);">PERSI Jawa Tengah</span>
                    </h1>
                    <p class="text-white-50 mt-3 mb-0" style="max-width:560px;font-size:1.05rem;">
                        Terdapat <strong class="text-white">{{ $total }}</strong> rumah sakit anggota yang tersebar
                        di
                        <strong class="text-white">35</strong> kota/kabupaten di seluruh Jawa Tengah.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <div class="d-inline-flex gap-2 bg-white bg-opacity-10 p-3 rounded-4">
                        <div class="text-center px-3">
                            <div class="text-white font-display fw-800" style="font-size:1.6rem;">{{ $total }}</div>
                            <div class="text-white-50"
                                style="font-size:0.7rem;text-transform:uppercase;letter-spacing:0.06em;">Total RS</div>
                        </div>
                        <div class="vr text-white-50"></div>
                        <div class="text-center px-3">
                            <div class="text-white font-display fw-800" style="font-size:1.6rem;">35
                            </div>
                            <div class="text-white-50"
                                style="font-size:0.7rem;text-transform:uppercase;letter-spacing:0.06em;">Kab/Kota</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-4"
        style="background:var(--paper);border-bottom:1px solid var(--line);position:sticky;top:72px;z-index:100;">
        <div class="container-persi">
            <form method="GET" action="{{ route('rs-anggota.index') }}" class="row g-2 align-items-end">
                <div class="col-md-3">
                    <label for="search" class="form-label text-muted small fw-semibold text-uppercase"
                        style="font-size:0.7rem;letter-spacing:0.06em;">Cari RS</label>
                    <input type="text" name="search" id="search" class="form-control form-control-sm"
                        placeholder="Nama atau kota..." value="{{ request('search') }}"
                        style="border-radius:var(--radius-pill);border-color:var(--line);padding:8px 16px;">
                </div>
                <div class="col-md-2">
                    <label for="kota" class="form-label text-muted small fw-semibold text-uppercase"
                        style="font-size:0.7rem;letter-spacing:0.06em;">Kota</label>
                    <select name="kota" id="kota" class="form-select form-select-sm"
                        style="border-radius:var(--radius-pill);border-color:var(--line);">
                        <option value="">Semua Kota</option>
                        @foreach ($kotaList as $k)
                            <option value="{{ $k }}" {{ request('kota') == $k ? 'selected' : '' }}>
                                {{ $k }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="karesidenan" class="form-label text-muted small fw-semibold text-uppercase"
                        style="font-size:0.7rem;letter-spacing:0.06em;">Karesidenan</label>
                    <select name="karesidenan" id="karesidenan" class="form-select form-select-sm"
                        style="border-radius:var(--radius-pill);border-color:var(--line);">
                        <option value="">Semua</option>
                        @foreach ($karesidenanList as $k)
                            <option value="{{ $k }}" {{ request('karesidenan') == $k ? 'selected' : '' }}>
                                {{ $k }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="kelas" class="form-label text-muted small fw-semibold text-uppercase"
                        style="font-size:0.7rem;letter-spacing:0.06em;">Kelas</label>
                    <select name="kelas" id="kelas" class="form-select form-select-sm"
                        style="border-radius:var(--radius-pill);border-color:var(--line);">
                        <option value="">Semua Kelas</option>
                        @foreach ($kelasList as $k)
                            <option value="{{ $k }}" {{ request('kelas') == $k ? 'selected' : '' }}>Kelas
                                {{ $k }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 d-flex gap-2">
                    <button type="submit" class="btn-persi btn-persi-primary flex-grow-1 justify-content-center"
                        style="font-size:0.85rem;padding:10px 20px;">
                        <i class="bi bi-search"></i> Filter
                    </button>
                    <a href="{{ route('rs-anggota.index') }}" class="btn-persi btn-persi-outline"
                        style="font-size:0.85rem;padding:10px 20px;">
                        <i class="bi bi-arrow-counterclockwise"></i>
                    </a>
                </div>
            </form>
        </div>
    </section>

    <!-- Daftar Rumah Sakit -->
    <section class="py-5">
        <div class="container-persi">
            @if (count($paginatedData) > 0)
                <div class="row g-4">
                    @foreach ($paginatedData as $rs)
                        <div class="col-lg-6 col-xl-4">
                            <div class="card-rs h-100"
                                style="background:var(--paper);border-radius:var(--radius-md);border:1px solid var(--line);overflow:hidden;transition:transform 0.25s ease, box-shadow 0.25s ease;">
                                <div class="card-rs-header p-4 pb-3" style="border-bottom:1px solid var(--line);">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <span class="badge"
                                                style="background:var(--sage-100);color:var(--sage-700);font-weight:600;font-size:0.65rem;text-transform:uppercase;letter-spacing:0.06em;padding:4px 12px;border-radius:var(--radius-pill);">
                                                {{ $rs['karesidenan'] }}
                                            </span>
                                            <span class="badge ms-1"
                                                style="background:var(--brass-400);color:var(--ink-900);font-weight:700;font-size:0.65rem;padding:4px 10px;border-radius:var(--radius-pill);">
                                                Kelas {{ $rs['kelas'] }}
                                            </span>
                                        </div>
                                        <span class="font-mono text-muted"
                                            style="font-size:0.7rem;">{{ $rs['no_anggota'] }}</span>
                                    </div>
                                    <h3 class="font-display mt-2 mb-1" style="font-size:1.1rem;line-height:1.3;">
                                        <a href="{{ route('rs-anggota.show', $rs['no']) }}"
                                            class="text-dark text-decoration-none hover-underline">
                                            {{ $rs['nama'] }}
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center gap-2 text-muted" style="font-size:0.85rem;">
                                        <i class="bi bi-geo-alt" style="color:var(--sage-500);"></i>
                                        <span>{{ $rs['kota'] }}</span>
                                    </div>
                                </div>
                                <div class="card-rs-body p-4 pt-3" style="font-size:0.88rem;">
                                    <div class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-house-door mt-1" style="color:var(--sage-500);width:16px;"></i>
                                        <span class="text-muted">{{ $rs['alamat'] }}</span>
                                    </div>
                                    @if (!empty($rs['direktur_utama']))
                                        <div class="d-flex align-items-start gap-2 mb-2">
                                            <i class="bi bi-person mt-1" style="color:var(--sage-500);width:16px;"></i>
                                            <span class="text-muted">{{ $rs['direktur_utama'] }}</span>
                                        </div>
                                    @endif
                                    <div class="d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-telephone mt-1" style="color:var(--sage-500);width:16px;"></i>
                                        <span class="text-muted">{{ $rs['no_telepon'] }}</span>
                                    </div>
                                    @if (!empty($rs['email']))
                                        <div class="d-flex align-items-start gap-2">
                                            <i class="bi bi-envelope mt-1" style="color:var(--sage-500);width:16px;"></i>
                                            <span class="text-muted text-truncate"
                                                style="max-width:200px;">{{ $rs['email'] }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-rs-footer p-3 pt-0 border-0">
                                    <a href="{{ route('rs-anggota.show', $rs['no']) }}" class="btn btn-sm w-100"
                                        style="background:var(--sage-50);color:var(--sage-700);border-radius:var(--radius-pill);font-weight:600;transition:all 0.2s ease;border:1px solid var(--line);">
                                        <i class="bi bi-info-circle"></i> Detail Rumah Sakit
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if ($totalPages > 1)
                    <div class="d-flex justify-content-between align-items-center mt-5 pt-3"
                        style="border-top:1px solid var(--line);">
                        <div class="text-muted" style="font-size:0.88rem;">
                            Menampilkan {{ ($currentPage - 1) * $perPage + 1 }} -
                            {{ min($currentPage * $perPage, $total) }} dari {{ $total }} RS
                        </div>
                        <nav>
                            <ul class="pagination mb-0">
                                <li class="page-item {{ $currentPage <= 1 ? 'disabled' : '' }}">
                                    <a class="page-link"
                                        href="{{ request()->fullUrlWithQuery(['page' => $currentPage - 1]) }}"
                                        style="border-radius:var(--radius-pill);color:var(--sage-700);border-color:var(--line);">
                                        <i class="bi bi-chevron-left"></i>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $totalPages; $i++)
                                    @if ($i == 1 || $i == $totalPages || ($i >= $currentPage - 2 && $i <= $currentPage + 2))
                                        <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                            <a class="page-link" href="{{ request()->fullUrlWithQuery(['page' => $i]) }}"
                                                style="{{ $i == $currentPage ? 'background:var(--sage-700);border-color:var(--sage-700);color:#fff;' : 'color:var(--sage-700);border-color:var(--line);' }}border-radius:var(--radius-pill);">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @elseif($i == $currentPage - 3 || $i == $currentPage + 3)
                                        <li class="page-item disabled"><span class="page-link"
                                                style="border-color:var(--line);border-radius:var(--radius-pill);">…</span>
                                        </li>
                                    @endif
                                @endfor
                                <li class="page-item {{ $currentPage >= $totalPages ? 'disabled' : '' }}">
                                    <a class="page-link"
                                        href="{{ request()->fullUrlWithQuery(['page' => $currentPage + 1]) }}"
                                        style="border-radius:var(--radius-pill);color:var(--sage-700);border-color:var(--line);">
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                @endif
            @else
                <div class="text-center py-5">
                    <div style="font-size:4rem;color:var(--sage-300);">🏥</div>
                    <h3 class="font-display mt-3">Tidak ada rumah sakit ditemukan</h3>
                    <p class="text-muted">Coba ubah filter pencarian Anda</p>
                    <a href="{{ route('rs-anggota.index') }}" class="btn-persi btn-persi-primary mt-2">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset Filter
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Additional CSS for card hover effect -->
    <style>
        .card-rs:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
        }

        .hover-underline:hover {
            text-decoration: underline !important;
            color: var(--sage-700) !important;
        }

        .hero-section-inner {
            background: linear-gradient(135deg, var(--sage-800) 0%, var(--sage-600) 100%);
        }

        .page-item.active .page-link {
            background: var(--sage-700) !important;
            border-color: var(--sage-700) !important;
            color: #fff !important;
        }

        .page-link:hover:not(.active) {
            background: var(--sage-50) !important;
            border-color: var(--sage-300) !important;
        }

        /* Sticky filter on scroll */
        @media (max-width: 767.98px) {
            .py-4 {
                padding-top: 12px !important;
                padding-bottom: 12px !important;
            }

            .py-4 .row {
                gap: 8px;
            }

            .py-4 .col-md-3,
            .py-4 .col-md-2 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .py-4 .col-md-3.d-flex {
                flex-wrap: wrap;
            }
        }
    </style>
@endsection

@push('scripts')
    <script>
        // Auto-submit form on select change
        document.querySelectorAll('select').forEach(function(select) {
            select.addEventListener('change', function() {
                this.closest('form').submit();
            });
        });
    </script>
@endpush
