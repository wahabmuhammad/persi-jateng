@extends('layouts.app')

@section('title', 'Agenda - PERSI Jawa Tengah')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section-inner position-relative"
        style="padding-top:40px;padding-bottom:40px;background:var(--sage-800);">
        <div class="kawung-texture position-absolute top-0 start-0 w-100 h-100" style="opacity:0.15;" aria-hidden="true"></div>
        <div class="container-persi position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="hero-eyebrow mb-3 d-inline-flex align-items-center gap-2"
                        style="background:rgba(255,255,255,0.15);color:#fff;border-color:rgba(255,255,255,0.2);">
                        <span class="dot" style="background:var(--brass-400);"></span>
                        Kalender Kegiatan
                    </span>
                    <h1 class="font-display text-white" style="font-size:clamp(1.8rem,3vw,2.8rem);">
                        Agenda &amp; Kegiatan<br>
                        <span style="color:var(--brass-400);">PERSI Jawa Tengah</span>
                    </h1>
                    <p class="text-white-50 mt-3 mb-0" style="max-width:560px;font-size:1.05rem;">
                        Pertemuan Tahunan dan Pameran Perumahsakitan PERSI Jateng Tahun 2026
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('agenda.undangan') }}" class="btn-persi btn-persi-accent">
                        <i class="bi bi-file-pdf me-1"></i> Lihat Undangan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Utama -->
    <section class="py-4" style="background:var(--surface);border-bottom:1px solid var(--line);">
        <div class="container-persi">
            <div class="row g-3 align-items-center">
                <div class="col-md-4">
                    <div class="d-flex align-items-center gap-3">
                        <div
                            style="width:48px;height:48px;border-radius:12px;background:var(--sage-100);color:var(--sage-700);display:flex;align-items:center;justify-content:center;font-size:1.4rem;">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div>
                            <div class="text-muted small text-uppercase fw-semibold"
                                style="font-size:0.7rem;letter-spacing:0.06em;">Tanggal</div>
                            <div class="fw-semibold">20 – 22 Agustus 2026</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center gap-3">
                        <div
                            style="width:48px;height:48px;border-radius:12px;background:var(--sage-100);color:var(--sage-700);display:flex;align-items:center;justify-content:center;font-size:1.4rem;">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <div class="text-muted small text-uppercase fw-semibold"
                                style="font-size:0.7rem;letter-spacing:0.06em;">Tempat</div>
                            <div class="fw-semibold">PATRA Hotel & Convention Semarang</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center gap-3">
                        <div
                            style="width:48px;height:48px;border-radius:12px;background:var(--sage-100);color:var(--sage-700);display:flex;align-items:center;justify-content:center;font-size:1.4rem;">
                            <i class="bi bi-tag"></i>
                        </div>
                        <div>
                            <div class="text-muted small text-uppercase fw-semibold"
                                style="font-size:0.7rem;letter-spacing:0.06em;">Tema</div>
                            <div class="fw-semibold" style="font-size:0.9rem;">Transformasi dan Keberlanjutan RS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Daftar Agenda -->
    <section class="py-5">
        <div class="container-persi">
            <!-- Seminar -->
            <div class="mb-5">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div style="width:6px;height:30px;border-radius:3px;background:var(--sage-600);"></div>
                    <h2 class="font-display mb-0" style="font-size:1.6rem;">
                        <i class="bi bi-megaphone me-2" style="color:var(--sage-500);"></i>Seminar
                    </h2>
                    <span class="badge"
                        style="background:var(--sage-100);color:var(--sage-700);font-weight:600;padding:6px 16px;border-radius:var(--radius-pill);">
                        {{ count($agenda['seminar']) }} Sesi
                    </span>
                </div>

                <div class="row g-4">
                    @foreach ($agenda['seminar'] as $index => $seminar)
                        <div class="col-lg-6">
                            <div class="agenda-card"
                                style="background:var(--surface);border-radius:var(--radius-md);border:1px solid var(--line);overflow:hidden;height:100%;transition:transform 0.25s ease,box-shadow 0.25s ease;">
                                <div class="card-header p-3"
                                    style="background:var(--sage-50);border-bottom:1px solid var(--line);">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <span class="badge"
                                                style="background:var(--brass-400);color:var(--ink-900);font-weight:700;font-size:0.7rem;padding:4px 12px;border-radius:var(--radius-pill);">
                                                Seminar {{ $index + 1 }}
                                            </span>
                                            <span class="badge ms-1"
                                                style="background:var(--sage-200);color:var(--sage-700);font-weight:600;font-size:0.65rem;padding:4px 12px;border-radius:var(--radius-pill);">
                                                <i class="bi bi-clock me-1"></i>{{ $seminar['waktu'] }}
                                            </span>
                                        </div>
                                        <span class="text-muted" style="font-size:0.78rem;"><i
                                                class="bi bi-geo-alt me-1"></i>{{ $seminar['ruang'] }}</span>
                                    </div>
                                    <div class="mt-1">
                                        <span class="text-muted" style="font-size:0.82rem;"><i
                                                class="bi bi-calendar3 me-1"></i>{{ $seminar['hari'] }}</span>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="font-display" style="font-size:1.05rem;margin-bottom:12px;">
                                        {{ $seminar['tema'] }}</h4>
                                    <ul class="list-unstyled mb-0" style="font-size:0.88rem;line-height:1.6;">
                                        @foreach ($seminar['subtema'] as $subtema)
                                            <li class="d-flex align-items-start gap-2 mb-2">
                                                <span style="color:var(--sage-500);">•</span>
                                                <span>{{ $subtema }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Workshop -->
            <div class="mb-5">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div style="width:6px;height:30px;border-radius:3px;background:var(--brass-500);"></div>
                    <h2 class="font-display mb-0" style="font-size:1.6rem;">
                        <i class="bi bi-tools me-2" style="color:var(--brass-500);"></i>Workshop
                    </h2>
                    <span class="badge"
                        style="background:var(--sage-100);color:var(--sage-700);font-weight:600;padding:6px 16px;border-radius:var(--radius-pill);">
                        {{ count($agenda['workshop']) }} Sesi
                    </span>
                </div>

                <div class="row g-4">
                    @foreach ($agenda['workshop'] as $index => $workshop)
                        {{-- @dd($workshop) --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="agenda-card"
                                style="background:var(--surface);border-radius:var(--radius-md);border:1px solid var(--line);overflow:hidden;height:100%;transition:transform 0.25s ease,box-shadow 0.25s ease;">
                                <div class="card-header p-3"
                                    style="background:var(--sage-50);border-bottom:1px solid var(--line);">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge"
                                                style="background:var(--sage-600);color:#fff;font-weight:700;font-size:0.7rem;padding:4px 12px;border-radius:var(--radius-pill);">
                                                Workshop {{ $index + 1 }}
                                            </span>
                                            @if (isset($workshop['status']) && $workshop['status'] === 'Full')
                                                <span class="badge"
                                                    style="background:#dc3545;color:#fff;font-weight:700;font-size:0.6rem;padding:3px 10px;border-radius:var(--radius-pill);animation:pulse-badge 2s ease-in-out infinite;">
                                                    <i class="bi bi-x-circle me-1"></i> FULL
                                                </span>
                                            @else
                                                <span class="badge"
                                                    style="background:#28a745;color:#fff;font-weight:600;font-size:0.6rem;padding:3px 10px;border-radius:var(--radius-pill);">
                                                    <i class="bi bi-check-circle me-1"></i> Tersedia
                                                </span>
                                            @endif
                                        </div>
                                        <span class="text-muted" style="font-size:0.7rem;"><i
                                                class="bi bi-people me-1"></i>{{ $workshop['ruang'] }}</span>
                                    </div>
                                    <div class="mt-1">
                                        <span class="text-muted" style="font-size:0.78rem;"><i
                                                class="bi bi-calendar3 me-1"></i>{{ $workshop['hari'] }}</span>
                                        <span class="text-muted ms-2" style="font-size:0.78rem;"><i
                                                class="bi bi-clock me-1"></i>{{ $workshop['waktu'] }}</span>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="font-display"
                                        style="font-size:0.95rem;margin-bottom:10px;line-height:1.4;">
                                        {{ $workshop['tema'] }}
                                        @if (isset($workshop['status']) && $workshop['status'] == 'full')
                                            <span
                                                style="font-size:0.7rem;color:#dc3545;font-weight:600;display:block;margin-top:4px;">
                                                <i class="bi bi-exclamation-triangle me-1"></i> Kuota telah penuh
                                            </span>
                                        @endif
                                    </h4>
                                    <ul class="list-unstyled mb-0" style="font-size:0.82rem;line-height:1.5;">
                                        @foreach ($workshop['subtema'] as $subtema)
                                            <li class="d-flex align-items-start gap-2 mb-1">
                                                <span style="color:var(--brass-500);">▸</span>
                                                <span>{{ $subtema }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Rapat Anggota -->
            <div>
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div style="width:6px;height:30px;border-radius:3px;background:var(--sage-800);"></div>
                    <h2 class="font-display mb-0" style="font-size:1.6rem;">
                        <i class="bi bi-people-fill me-2" style="color:var(--sage-700);"></i>Rapat Anggota Tahunan
                    </h2>
                </div>

                <div class="agenda-card"
                    style="background:var(--surface);border-radius:var(--radius-md);border:1px solid var(--line);overflow:hidden;">
                    <div class="card-header p-3" style="background:var(--sage-50);border-bottom:1px solid var(--line);">
                        <div class="d-flex flex-wrap gap-3 align-items-center">
                            <span class="badge"
                                style="background:var(--sage-800);color:#fff;font-weight:700;font-size:0.7rem;padding:6px 16px;border-radius:var(--radius-pill);">
                                <i class="bi bi-calendar3 me-1"></i>{{ $agenda['rapat_anggota']['hari'] }}
                            </span>
                            <span class="badge"
                                style="background:var(--sage-200);color:var(--sage-700);font-weight:600;font-size:0.7rem;padding:6px 16px;border-radius:var(--radius-pill);">
                                <i class="bi bi-clock me-1"></i>{{ $agenda['rapat_anggota']['waktu'] }}
                            </span>
                            <span class="text-muted" style="font-size:0.85rem;"><i
                                    class="bi bi-geo-alt me-1"></i>{{ $agenda['rapat_anggota']['ruang'] }}</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="font-display" style="font-size:1.15rem;margin-bottom:16px;">
                            {{ $agenda['rapat_anggota']['tema'] }}</h4>
                        <div class="row g-2">
                            @foreach ($agenda['rapat_anggota']['acara'] as $acara)
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-2 p-2 rounded-3"
                                        style="background:var(--sage-50);border:1px solid var(--line);">
                                        <span style="color:var(--sage-500);font-size:0.8rem;">✓</span>
                                        <span style="font-size:0.9rem;">{{ $acara }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wilayah Marquee -->
    <section class="section-py pt-0">
        <div class="container-persi text-center mb-4 reveal is-visible">
            <span class="section-eyebrow">Supported By:</span>
            <h2 class="section-title font-display">Acara ini didukung oleh</h2>
        </div>
        <div class="wilayah-marquee overflow-hidden reveal is-visible">
            <div class="wilayah-marquee-track">
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/vektor_ups.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/cv_triargakencana.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip" style="background:var(--sage-900);border:1px solid var(--line);">
                    <img src="{{ asset('img/sponsor/saranadar_alkesindo.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/andson_sarana.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/adn_medical.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/pt_dentalities.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/pt_dianlanggeng.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/first_medical.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/holan_medik.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/mentari_prima.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/polaris.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/samudra_indonesia.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/sanidata.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/sinarmu.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/solana_medika.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/solocone.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
                <span class="wilayah-chip">
                    <img src="{{ asset('img/sponsor/visimata_bima.png') }}" alt="Logo PERSI Jateng" 
                        style="height: 50px; object-fit: contain;">
                </span>
            </div>
        </div>
    </section>

    <style>
        .agenda-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
        }

        .hero-section-inner {
            background: linear-gradient(135deg, var(--sage-800) 0%, var(--sage-600) 100%);
        }

        @keyframes pulse-badge {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }
    </style>
@endsection
