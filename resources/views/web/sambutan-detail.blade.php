@extends('layouts.app')

@section('title', $data['title'] . ' - PERSI Jawa Tengah')

@section('content')
    <!-- Breadcrumb -->
    <div class="py-3" style="background:var(--sage-50);border-bottom:1px solid var(--line);">
        <div class="container-persi">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size:0.9rem;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none"
                            style="color:var(--sage-600);">Beranda</a></li>
                    <li class="breadcrumb-item active" style="color:var(--ink-700);" aria-current="page">Sambutan</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Header Sambutan -->
    <section class="py-4" style="background:var(--sage-800);">
        <div class="container-persi">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge mb-2"
                        style="background:rgba(255,255,255,0.15);color:#fff;font-weight:600;font-size:0.7rem;text-transform:uppercase;letter-spacing:0.06em;padding:6px 16px;border-radius:var(--radius-pill);">
                        <i class="bi bi-chat-quote me-1"></i> Sambutan
                    </span>
                    <h1 class="font-display text-white" style="font-size:clamp(1.8rem,3vw,2.8rem);">{{ $data['title'] }}
                    </h1>
                    <p class="text-white-50 mt-2" style="font-size:1.05rem;">{{ $data['subtitle'] }}</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('home') }}" class="btn-persi btn-persi-outline"
                        style="color:#fff;border-color:rgba(255,255,255,0.3);font-size:0.85rem;padding:8px 20px;">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Isi Sambutan -->
    <section class="py-5">
        <div class="container-persi">
            <div class="row g-4">
                <!-- Konten Utama -->
                <div class="col-lg-8">
                    <div class="bg-white p-5 rounded-4 shadow-sm" style="border:1px solid var(--line);">
                        <div class="d-flex align-items-center gap-4 mb-4 pb-4" style="border-bottom:1px solid var(--line);">
                            <div class="foto-wrapper"
                                style="width:100px;height:100px;border-radius:50%;overflow:hidden;border:4px solid var(--sage-300);flex-shrink:0;">
                                <img src="{{ asset('img/' . $data['foto']) }}" alt="{{ $data['nama'] }}"
                                    style="width:100%;height:100%;object-fit:cover;"
                                    onerror="this.src='https://ui-avatars.com/api/?name='+encodeURIComponent('{{ $data['nama'] }}')+'&background=547144&color=fff&size=100'">
                            </div>
                            <div>
                                <h3 class="font-display mb-1" style="font-size:1.3rem;">{{ $data['nama'] }}</h3>
                                <p class="text-muted mb-0">{{ $data['jabatan'] }}</p>
                                <span class="text-muted" style="font-size:0.82rem;"><i class="bi bi-calendar3 me-1"></i>
                                    {{ $data['tanggal'] }}</span>
                            </div>
                        </div>

                        <div class="sambutan-content" style="font-size:1.02rem;line-height:1.9;color:var(--text);">
                            @php
                                $paragraphs = explode("\n\n", $data['isi']);
                            @endphp
                            @foreach ($paragraphs as $paragraph)
                                @if (trim($paragraph))
                                    <p style="margin-bottom:1.2rem;">{!! nl2br(e(trim($paragraph))) !!}</p>
                                @endif
                            @endforeach
                        </div>

                        <!-- Kutipan Penutup (khusus MAKERSI) -->
                        @if ($jenis == 'ketua_makersi')
                            <div class="mt-4 p-4 rounded-3"
                                style="background:var(--sage-50);border-left:4px solid var(--brass-500);">
                                <p class="mb-0" style="font-size:1.02rem;font-style:italic;color:var(--ink-700);">
                                    <i class="bi bi-quote me-2" style="color:var(--brass-500);"></i>
                                    "Di era perubahan dan persaingan, yang paling canggih bukanlah teknologi, melainkan
                                    kemampuan kita menjaga nilai-nilai etik di setiap keputusan pelayanan rumah sakit dengan
                                    mengacu pada keselamatan dan martabat pasien."
                                </p>
                            </div>
                        @endif

                        <div class="mt-4 pt-3" style="border-top:1px solid var(--line);">
                            <div class="d-flex gap-2">
                                <span class="text-muted" style="font-size:0.82rem;"><i class="bi bi-share me-1"></i>
                                    Bagikan:</span>
                                <a href="#" class="text-decoration-none text-muted" style="font-size:0.9rem;"
                                    onclick="window.open('https://wa.me/?text={{ urlencode($data['title'] . ' - ' . route('sambutan.detail', $jenis)) }}', '_blank')"><i
                                        class="bi bi-whatsapp"></i></a>
                                <a href="#" class="text-decoration-none text-muted" style="font-size:0.9rem;"
                                    onclick="window.open('https://twitter.com/intent/tweet?text={{ urlencode($data['title']) }}&url={{ urlencode(route('sambutan.detail', $jenis)) }}', '_blank')"><i
                                        class="bi bi-twitter-x"></i></a>
                                <a href="#" class="text-decoration-none text-muted" style="font-size:0.9rem;"
                                    onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('sambutan.detail', $jenis)) }}', '_blank')"><i
                                        class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="bg-white p-4 rounded-4 shadow-sm sticky-top"
                        style="border:1px solid var(--line);top:100px;">
                        <h5 class="font-display mb-3"><i class="bi bi-info-circle me-2"
                                style="color:var(--sage-500);"></i>Tentang Penulis</h5>

                        <div class="text-center mb-3">
                            <div class="foto-wrapper"
                                style="width:120px;height:120px;border-radius:50%;overflow:hidden;border:3px solid var(--sage-300);margin:0 auto 12px;">
                                <img src="{{ asset('img/' . $data['foto']) }}" alt="{{ $data['nama'] }}"
                                    style="width:100%;height:100%;object-fit:cover;"
                                    onerror="this.src='https://ui-avatars.com/api/?name='+encodeURIComponent('{{ $data['nama'] }}')+'&background=547144&color=fff&size=120'">
                            </div>
                            <h6 class="font-display mb-0">{{ $data['nama'] }}</h6>
                            <p class="text-muted small">{{ $data['jabatan'] }}</p>
                        </div>

                        <hr>

                        <h6 class="font-display mb-3" style="font-size:0.95rem;">Sambutan Lainnya</h6>
                        @if ($jenis == 'ketua_persi')
                            <a href="{{ route('sambutan.detail', 'ketua_makersi') }}"
                                class="d-block p-3 rounded-3 text-decoration-none mb-2"
                                style="background:var(--sage-50);border:1px solid var(--line);transition:all 0.2s ease;">
                                <div class="d-flex align-items-center gap-3">
                                    <div style="width:45px;height:45px;border-radius:50%;overflow:hidden;flex-shrink:0;">
                                        <img src="{{ asset('img/foto_ketua_makersi.jpeg') }}" alt="Ketua MAKERSI"
                                            style="width:100%;height:100%;object-fit:cover;"
                                            onerror="this.src='https://ui-avatars.com/api/?name=Cahyono+Hadi&background=547144&color=fff&size=45'">
                                    </div>
                                    <div>
                                        <div class="fw-semibold" style="font-size:0.85rem;">Sambutan Ketua MAKERSI</div>
                                        <div class="text-muted" style="font-size:0.75rem;">DR. dr. Cahyono Hadi, SpOG,
                                            Subsp FER, S.H, MARS</div>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('sambutan.detail', 'ketua_persi') }}"
                                class="d-block p-3 rounded-3 text-decoration-none mb-2"
                                style="background:var(--sage-50);border:1px solid var(--line);transition:all 0.2s ease;">
                                <div class="d-flex align-items-center gap-3">
                                    <div style="width:45px;height:45px;border-radius:50%;overflow:hidden;flex-shrink:0;">
                                        <img src="{{ asset('img/foto_ketua_persi.jpeg') }}" alt="Ketua PERSI"
                                            style="width:100%;height:100%;object-fit:cover;"
                                            onerror="this.src='https://ui-avatars.com/api/?name=Edi+Sumarwanto&background=547144&color=fff&size=45'">
                                    </div>
                                    <div>
                                        <div class="fw-semibold" style="font-size:0.85rem;">Sambutan Ketua PERSI</div>
                                        <div class="text-muted" style="font-size:0.75rem;">Dr. drg. Edi Sumarwanto, MM,
                                            MH.Kes</div>
                                    </div>
                                </div>
                            </a>
                        @endif

                        <hr>

                        <a href="{{ route('home') }}" class="btn-persi btn-persi-primary w-100 justify-content-center"
                            style="font-size:0.88rem;">
                            <i class="bi bi-house"></i> Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .sambutan-content p {
            text-indent: 2em;
        }

        .sambutan-content p:first-of-type {
            text-indent: 0;
        }

        .sticky-top {
            transition: all 0.3s ease;
        }

        .sambutan-content {
            white-space: pre-wrap;
        }
    </style>
@endsection
