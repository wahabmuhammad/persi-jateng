@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    {{-- <section class="hero-section position-relative">
        <div class="hero-bg-kawung kawung-texture" aria-hidden="true"></div>
        <div class="container-persi">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6 reveal is-visible">
                    <span class="hero-eyebrow mb-4"><span class="dot"></span> Perhimpunan Rumah Sakit Seluruh
                        Indonesia</span>
                    <h1 class="hero-title font-display mt-3 mb-4">Menguatkan <span class="accent-underline">rumah
                            sakit</span> Jawa Tengah yang aman, bermutu, dan berdaya saing</h1>
                    <p class="hero-lede mb-4">PERSI Wilayah Jawa Tengah menghimpun rumah sakit se-Jawa Tengah untuk
                        berkolaborasi dalam advokasi kebijakan, peningkatan mutu layanan, dan pengembangan sumber
                        daya perumahsakitan di 35 kabupaten/kota.</p>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="{{ route('login') }}" class="btn-persi btn-persi-primary">Bergabung Sebagai Anggota <svg
                                width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg></a>
                        <a href="#visi-misi" class="btn-persi btn-persi-outline">Visi &amp; Misi</a>
                    </div>
                    <div class="hero-stats">
                        <div class="hero-stat">
                            <div class="num" data-counter data-counter-to="250">250</div>
                            <div class="label">RS Anggota</div>
                        </div>
                        <div class="hero-stat">
                            <div class="num" data-counter data-counter-to="35">35</div>
                            <div class="label">Kab / Kota</div>
                        </div>
                        <div class="hero-stat">
                            <div class="num" data-counter data-counter-to="40">40</div>
                            <div class="label">Tahun Mengabdi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 reveal is-visible">
                    <div class="position-relative">
                        <div class="hero-media">
                            <img src="{{ asset('img/img_beranda.jpeg') }}" alt="Pelantikan Pengurus">
                            <div class="hero-media-caption"><strong>Pengurus PERSI Wilayah Jawa
                                    Tengah</strong>Semarang, Jawa Tengah</div>
                        </div>
                        <div class="hero-badge-card">
                                <div class="icon-wrap"><svg width="20" height="20" viewBox="0 0 24 24"
                                        fill="none">
                                        <path d="M12 2 3 6v6c0 5 3.8 9.4 9 10 5.2-.6 9-5 9-10V6l-9-4Z"
                                            stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                        <path d="m9 12 2 2 4-4" stroke="currentColor" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></div>
                                <div>
                                    <div class="fw-bold font-display" style="font-size:0.95rem;">Terakreditasi</div>
                                    <div class="text-muted-custom" style="font-size:0.78rem;">Standar Kemenkes RI
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Quick Links -->
    {{-- <section class="section-py">
        <div class="container-persi">
            <div class="row g-4">
                <div class="col-md-4 reveal is-visible">
                    <a href="#" class="text-decoration-none">
                        <div class="quick-link-card">
                            <div class="quick-link-icon"><svg width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect x="3" y="5" width="18" height="16" rx="2" stroke="currentColor"
                                        stroke-width="1.8" />
                                    <path d="M3 10h18M8 3v4M16 3v4" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" />
                                </svg></div>
                            <h3 class="font-display">Agenda Kegiatan</h3>
                            <p>Jadwal rapat, seminar, dan kegiatan rutin PERSI Wilayah Jawa Tengah.</p>
                            <span class="arrow-link">Selanjutnya <svg width="15" height="15" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 reveal is-visible">
                    <a href="#" class="text-decoration-none">
                        <div class="quick-link-card">
                            <div class="quick-link-icon"><svg width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M7 3h8l4 4v14H7V3Z" stroke="currentColor" stroke-width="1.8"
                                        stroke-linejoin="round" />
                                    <path d="M10 12h6M10 16h6M10 8h2" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" />
                                </svg></div>
                            <h3 class="font-display">Formulir Layanan</h3>
                            <p>Ajukan permintaan layanan, surat rekomendasi, dan administrasi keanggotaan.</p>
                            <span class="arrow-link">Selanjutnya <svg width="15" height="15" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 reveal is-visible">
                    <a href="#" class="text-decoration-none">
                        <div class="quick-link-card">
                            <div class="quick-link-icon"><svg width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v16H6.5A2.5 2.5 0 0 0 4 21.5v-16Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                    <path d="M4 19a2.5 2.5 0 0 1 2.5-2.5H20" stroke="currentColor" stroke-width="1.8" />
                                </svg></div>
                            <h3 class="font-display">E-Library &amp; Materi</h3>
                            <p>Unduh materi FGD, regulasi, dan publikasi resmi PERSI Jawa Tengah.</p>
                            <span class="arrow-link">Selanjutnya <svg width="15" height="15" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Stats Strip -->
    {{-- <section class="container-persi">
        <div class="stats-strip reveal is-visible">
            <div class="row g-4">
                <div class="col-6 col-md-3 stat-item">
                    <div class="stat-num"><span data-counter data-counter-to="250">0</span>+</div>
                    <div class="stat-label">Rumah Sakit Anggota</div>
                </div>
                <div class="col-6 col-md-3 stat-item">
                    <div class="stat-num"><span data-counter data-counter-to="35">0</span></div>
                    <div class="stat-label">Kabupaten / Kota</div>
                </div>
                <div class="col-6 col-md-3 stat-item">
                    <div class="stat-num"><span data-counter data-counter-to="40">0</span></div>
                    <div class="stat-label">Tahun Berkiprah</div>
                </div>
                <div class="col-6 col-md-3 stat-item">
                    <div class="stat-num"><span data-counter data-counter-to="120">0</span>+</div>
                    <div class="stat-label">Program &amp; Pelatihan / Tahun</div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- VISI & MISI Section -->

    <!-- Hero Section -->

    <section class="hero-section position-relative">
        <div class="hero-bg-kawung kawung-texture" aria-hidden="true"></div>
        <div class="container-persi">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6 reveal is-visible">
                    <span class="hero-eyebrow mb-4"><span class="dot"></span> Perhimpunan Rumah Sakit Seluruh
                        Indonesia</span>
                    <h1 class="hero-title font-display mt-3 mb-4">Menguatkan <span class="accent-underline">rumah
                            sakit</span> Jawa Tengah yang aman, bermutu, dan berdaya saing</h1>
                    <p class="hero-lede mb-4">PERSI Wilayah Jawa Tengah menghimpun rumah sakit se-Jawa Tengah untuk
                        berkolaborasi dalam advokasi kebijakan, peningkatan mutu layanan, dan pengembangan sumber
                        daya perumahsakitan di 35 kabupaten/kota.</p>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="{{ route('login') }}" class="btn-persi btn-persi-primary">Bergabung Sebagai Anggota <svg
                                width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg></a>
                        <a href="#visi-misi" class="btn-persi btn-persi-outline">Visi &amp; Misi</a>
                    </div>
                    <div class="hero-stats">
                        <div class="hero-stat">
                            <div class="num" data-counter data-counter-to="{{ $totalRS ?? 250 }}">0</div>
                            <div class="label">RS Anggota</div>
                        </div>
                        <div class="hero-stat">
                            <div class="num" data-counter data-counter-to="{{ $totalKota ?? 35 }}">0</div>
                            <div class="label">Kab / Kota</div>
                        </div>
                        <div class="hero-stat">
                            <div class="num" data-counter data-counter-to="40">40</div>
                            <div class="label">Tahun Mengabdi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 reveal is-visible">
                    <div class="position-relative">
                        <div class="hero-media">
                            <img src="{{ asset('img/img_beranda.jpeg') }}" alt="Pelantikan Pengurus">
                            <div class="hero-media-caption"><strong>Pengurus PERSI Wilayah Jawa
                                    Tengah</strong>Semarang, Jawa Tengah</div>
                        </div>
                        {{-- <div class="hero-badge-card">
                            <div class="icon-wrap"><svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2 3 6v6c0 5 3.8 9.4 9 10 5.2-.6 9-5 9-10V6l-9-4Z" stroke="currentColor"
                                        stroke-width="1.8" stroke-linejoin="round" />
                                    <path d="m9 12 2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></div>
                            <div>
                                <div class="fw-bold font-display" style="font-size:0.95rem;">Terakreditasi</div>
                                <div class="text-muted-custom" style="font-size:0.78rem;">Standar Kemenkes RI
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="section-py">
        <div class="container-persi">
            <div class="row g-4">
                <div class="col-md-4 reveal is-visible">
                    <a href="#" class="text-decoration-none">
                        <div class="quick-link-card">
                            <div class="quick-link-icon"><svg width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect x="3" y="5" width="18" height="16" rx="2" stroke="currentColor"
                                        stroke-width="1.8" />
                                    <path d="M3 10h18M8 3v4M16 3v4" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" />
                                </svg></div>
                            <h3 class="font-display">Agenda Kegiatan</h3>
                            <p>Jadwal rapat, seminar, dan kegiatan rutin PERSI Wilayah Jawa Tengah.</p>
                            <span class="arrow-link">Selanjutnya <svg width="15" height="15" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 reveal is-visible">
                    <a href="#" class="text-decoration-none">
                        <div class="quick-link-card">
                            <div class="quick-link-icon"><svg width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M7 3h8l4 4v14H7V3Z" stroke="currentColor" stroke-width="1.8"
                                        stroke-linejoin="round" />
                                    <path d="M10 12h6M10 16h6M10 8h2" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" />
                                </svg></div>
                            <h3 class="font-display">Formulir Layanan</h3>
                            <p>Ajukan permintaan layanan, surat rekomendasi, dan administrasi keanggotaan.</p>
                            <span class="arrow-link">Selanjutnya <svg width="15" height="15" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 reveal is-visible">
                    <a href="#" class="text-decoration-none">
                        <div class="quick-link-card">
                            <div class="quick-link-icon"><svg width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v16H6.5A2.5 2.5 0 0 0 4 21.5v-16Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                    <path d="M4 19a2.5 2.5 0 0 1 2.5-2.5H20" stroke="currentColor" stroke-width="1.8" />
                                </svg></div>
                            <h3 class="font-display">E-Library &amp; Materi</h3>
                            <p>Unduh materi FGD, regulasi, dan publikasi resmi PERSI Jawa Tengah.</p>
                            <span class="arrow-link">Selanjutnya <svg width="15" height="15" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <section class="container-persi">
        <div class="stats-strip"
            style="background:var(--sage-800);border-radius:var(--radius-lg);padding:40px 30px;color:#fff;position:relative;overflow:hidden;">
            <div class="row g-4">
                <div class="col-6 col-md-3 stat-item" style="position:relative;z-index:1;text-align:center;">
                    <div class="stat-num"
                        style="font-family:var(--font-display);font-weight:800;font-size:clamp(1.9rem,3vw,2.6rem);color:var(--brass-400);line-height:1;">
                        <span data-counter data-counter-to="{{ $totalRS ?? 250 }}">0</span>
                        +
                    </div>
                    <div class="stat-label" style="font-size:0.82rem;color:#d7e2d1;margin-top:6px;letter-spacing:0.02em;">
                        Rumah Sakit Anggota</div>
                </div>
                <div class="col-6 col-md-3 stat-item" style="position:relative;z-index:1;text-align:center;">
                    <div class="stat-num"
                        style="font-family:var(--font-display);font-weight:800;font-size:clamp(1.9rem,3vw,2.6rem);color:var(--brass-400);line-height:1;">
                        <span data-counter data-counter-to="{{ $totalKota ?? 42 }}">0</span>
                    </div>
                    <div class="stat-label" style="font-size:0.82rem;color:#d7e2d1;margin-top:6px;letter-spacing:0.02em;">
                        Kabupaten / Kota</div>
                </div>
                <div class="col-6 col-md-3 stat-item" style="position:relative;z-index:1;text-align:center;">
                    <div class="stat-num"
                        style="font-family:var(--font-display);font-weight:800;font-size:clamp(1.9rem,3vw,2.6rem);color:var(--brass-400);line-height:1;">
                        <span data-counter data-counter-to="40">0</span>
                    </div>
                    <div class="stat-label" style="font-size:0.82rem;color:#d7e2d1;margin-top:6px;letter-spacing:0.02em;">
                        Tahun Berkiprah</div>
                </div>
                <div class="col-6 col-md-3 stat-item" style="position:relative;z-index:1;text-align:center;">
                    <div class="stat-num"
                        style="font-family:var(--font-display);font-weight:800;font-size:clamp(1.9rem,3vw,2.6rem);color:var(--brass-400);line-height:1;">
                        <span data-counter data-counter-to="120">0</span>
                        +
                    </div>
                    <div class="stat-label" style="font-size:0.82rem;color:#d7e2d1;margin-top:6px;letter-spacing:0.02em;">
                        Program &amp; Pelatihan / Tahun</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sambutan Section -->
    <section class="section-py bg-white">
        <div class="container-persi">
            <div class="text-center mb-5 reveal is-visible">
                <span class="section-eyebrow">Sambutan</span>
                <h2 class="section-title font-display">Sambutan dari Ketua PERSI dan Ketua Makersi Jawa Tengah</h2>
                <p class="text-muted mt-2" style="max-width:560px;margin-inline:auto;">Menyambut peluncuran Website PERSI
                    Jawa Tengah sebagai media informasi dan komunikasi resmi organisasi.</p>
            </div>

            <div class="row g-4">
                <!-- Sambutan Ketua PERSI -->
                <div class="col-lg-6 reveal is-visible">
                    <div class="sambutan-card"
                        style="background:var(--surface);border-radius:var(--radius-lg);border:1px solid var(--line);overflow:hidden;height:100%;transition:transform 0.3s ease,box-shadow 0.3s ease;">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <div class="p-3 text-center h-100 d-flex flex-column justify-content-center align-items-center"
                                    style="background:var(--sage-50);min-height:200px;">
                                    <div class="foto-wrapper"
                                        style="width:130px;height:130px;border-radius:50%;overflow:hidden;border:4px solid var(--sage-300);margin-bottom:12px;">
                                        <img src="{{ asset('img/foto_ketua_persi.jpeg') }}" alt="Ketua PERSI"
                                            style="width:100%;height:100%;object-fit:cover;"
                                            onerror="this.src='https://ui-avatars.com/api/?name=Edi+Sumarwanto&background=547144&color=fff&size=130'">
                                    </div>
                                    <h5 class="font-display mb-0" style="font-size:1rem;">Dr. drg. Edi Sumarwanto, MM,
                                        MH.Kes</h5>
                                    <p class="text-muted small mb-0" style="font-size:0.75rem;">Ketua PERSI Wilayah Jawa
                                        Tengah</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="p-4 d-flex flex-column h-100">
                                    <div class="mb-2">
                                        <span class="badge"
                                            style="background:var(--sage-100);color:var(--sage-700);font-weight:600;font-size:0.65rem;text-transform:uppercase;letter-spacing:0.06em;padding:4px 12px;border-radius:var(--radius-pill);">Sambutan</span>
                                    </div>
                                    <h4 class="font-display" style="font-size:1.15rem;margin-bottom:8px;">Sambutan Ketua
                                        PERSI</h4>
                                    <p
                                        style="color:var(--text-muted);font-size:0.9rem;line-height:1.7;flex:1;display:-webkit-box;-webkit-line-clamp:6;-webkit-box-orient:vertical;overflow:hidden;">
                                        {{ Str::limit(strip_tags($sambutan['ketua_persi']['sambutan']), 300) }}
                                    </p>
                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        <span class="text-muted" style="font-size:0.78rem;"><i
                                                class="bi bi-calendar3 me-1"></i>
                                            {{ $sambutan['ketua_persi']['tanggal'] }}</span>
                                        <a href="{{ route('sambutan.detail', 'ketua_persi') }}"
                                            class="btn-persi btn-persi-outline"
                                            style="font-size:0.82rem;padding:6px 18px;">
                                            Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sambutan Ketua MAKERSI -->
                <div class="col-lg-6 reveal is-visible">
                    <div class="sambutan-card"
                        style="background:var(--surface);border-radius:var(--radius-lg);border:1px solid var(--line);overflow:hidden;height:100%;transition:transform 0.3s ease,box-shadow 0.3s ease;">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <div class="p-3 text-center h-100 d-flex flex-column justify-content-center align-items-center"
                                    style="background:var(--sage-50);min-height:200px;">
                                    <div class="foto-wrapper"
                                        style="width:130px;height:130px;border-radius:50%;overflow:hidden;border:4px solid var(--sage-300);margin-bottom:12px;">
                                        <img src="{{ asset('img/foto_ketua_makersi.jpeg') }}" alt="Ketua MAKERSI"
                                            style="width:100%;height:100%;object-fit:cover;"
                                            onerror="this.src='https://ui-avatars.com/api/?name=Cahyono+Hadi&background=547144&color=fff&size=130'">
                                    </div>
                                    <h5 class="font-display mb-0" style="font-size:1rem;">DR. dr. Cahyono Hadi, SpOG,
                                        Subsp FER, S.H, MARS</h5>
                                    <p class="text-muted small mb-0" style="font-size:0.75rem;">Ketua MAKERSI Jawa Tengah
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="p-4 d-flex flex-column h-100">
                                    <div class="mb-2">
                                        <span class="badge"
                                            style="background:var(--sage-100);color:var(--sage-700);font-weight:600;font-size:0.65rem;text-transform:uppercase;letter-spacing:0.06em;padding:4px 12px;border-radius:var(--radius-pill);">Sambutan</span>
                                    </div>
                                    <h4 class="font-display" style="font-size:1.15rem;margin-bottom:8px;">Sambutan Ketua
                                        MAKERSI</h4>
                                    <p
                                        style="color:var(--text-muted);font-size:0.9rem;line-height:1.7;flex:1;display:-webkit-box;-webkit-line-clamp:6;-webkit-box-orient:vertical;overflow:hidden;">
                                        {{ Str::limit(strip_tags($sambutan['ketua_makersi']['sambutan']), 300) }}
                                    </p>
                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        <span class="text-muted" style="font-size:0.78rem;"><i
                                                class="bi bi-calendar3 me-1"></i>
                                            {{ $sambutan['ketua_makersi']['tanggal'] }}</span>
                                        <a href="{{ route('sambutan.detail', 'ketua_makersi') }}"
                                            class="btn-persi btn-persi-outline"
                                            style="font-size:0.82rem;padding:6px 18px;">
                                            Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section id="visi-misi" class="section-py">
        <div class="container-persi">
            <div class="text-center mb-5 reveal is-visible">
                <span class="section-eyebrow">Visi &amp; Misi</span>
                <h2 class="section-title font-display">Arah dan Tujuan PERSI Jawa Tengah</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-5 reveal is-visible">
                    <div class="visi-card"
                        style="background:var(--surface);border-radius:var(--radius-lg);padding:32px 28px;border:1px solid var(--line);height:100%;transition:transform 0.22s ease,box-shadow 0.22s ease;">
                        <div class="icon-badge"
                            style="width:48px;height:48px;border-radius:14px;background:var(--sage-100);color:var(--sage-700);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2 3 6v6c0 5 3.8 9.4 9 10 5.2-.6 9-5 9-10V6l-9-4Z" stroke="currentColor"
                                    stroke-width="1.8" stroke-linejoin="round" />
                                <path d="M9 13l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="font-display" style="font-size:1.1rem;margin-bottom:10px;">Visi</h3>
                        <p style="color:var(--ink-900);font-size:1rem;font-weight:500;line-height:1.7;">PERSI sebagai
                            organisasi perumahsakitan yang handal dan mampu menjadi induk dan tumpuan bagi Rumah Sakit di
                            Jawa Tengah.</p>
                    </div>
                </div>
                <div class="col-lg-7 reveal is-visible">
                    <div class="visi-card"
                        style="background:var(--surface);border-radius:var(--radius-lg);padding:32px 28px;border:1px solid var(--line);height:100%;transition:transform 0.22s ease,box-shadow 0.22s ease;">
                        <div class="icon-badge"
                            style="width:48px;height:48px;border-radius:14px;background:var(--sage-100);color:var(--sage-700);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                                <path d="M3 8l9-5 9 5-9 5-9-5Z" stroke="currentColor" stroke-width="1.8"
                                    stroke-linejoin="round" />
                                <path d="M3 13v6l9 5 9-5v-6" stroke="currentColor" stroke-width="1.8"
                                    stroke-linejoin="round" />
                                <path d="M3 8v6l9 5 9-5V8" stroke="currentColor" stroke-width="1.8"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="font-display" style="font-size:1.1rem;margin-bottom:10px;">Misi</h3>
                        <ol
                            style="padding-left:20px;margin-bottom:0;color:var(--text-muted);font-size:0.92rem;line-height:1.7;">
                            <li style="margin-bottom:8px;">Memperjuangkan kepentingan anggota PERSI yang terkait :
                                Pemerintah, Swasta maupun Masyarakat</li>
                            <li style="margin-bottom:8px;">Membentuk dan mengembangkan networking antara anggota dengan
                                teknologi informasi</li>
                            <li style="margin-bottom:8px;">Meningkatkan Profesionalisme dalam pengelolaan rumah sakit
                                menuju masyarakat sehat</li>
                            <li style="margin-bottom:8px;">Melakukan analisis strategis yang meningkatkan mutu anggota
                                PERSI dan saling menguntungkan</li>
                            <li style="margin-bottom:0;">Mendorong rumah sakit di Jawa Tengah dalam meningkatkan mutu
                                hingga setaraf dengan Rumah Sakit di Asia Pasifik</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Agenda Section -->
    <section class="section-py bg-white">
        <div class="container-persi">
            <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-3 reveal is-visible">
                <div>
                    <span class="section-eyebrow">Agenda</span>
                    <h2 class="section-title font-display">Kegiatan PERSI Jateng</h2>
                </div>
                <a href="{{ route('agenda.index') }}" class="btn-persi btn-persi-outline">
                    Lihat Semua Agenda <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach ($agendaItems as $item)
                    <div class="col-md-4 reveal is-visible">
                        <a href="{{ $item['link'] }}" class="text-decoration-none">
                            <div class="agenda-card-home"
                                style="background:var(--surface);border-radius:var(--radius-md);border:1px solid var(--line);padding:24px 22px;height:100%;transition:transform 0.22s ease,box-shadow 0.22s ease,border-color 0.22s ease;">
                                <div class="d-flex align-items-start justify-content-between mb-2">
                                    <span class="badge"
                                        style="background:{{ $item['type'] == 'seminar' ? 'var(--brass-400)' : ($item['type'] == 'workshop' ? 'var(--sage-600)' : 'var(--sage-800)') }};color:{{ $item['type'] == 'seminar' ? 'var(--ink-900)' : '#fff' }};font-weight:700;font-size:0.65rem;text-transform:uppercase;letter-spacing:0.06em;padding:4px 12px;border-radius:var(--radius-pill);">
                                        {{ ucfirst($item['type']) }}
                                    </span>
                                    @if ($item['highlight'])
                                        <span class="badge"
                                            style="background:#dc3545;color:#fff;font-weight:700;font-size:0.6rem;text-transform:uppercase;letter-spacing:0.06em;padding:3px 10px;border-radius:var(--radius-pill);animation:pulse-badge 2s ease-in-out infinite;">
                                            <i class="bi bi-broadcast me-1"></i> Live
                                        </span>
                                    @endif
                                </div>
                                <h4 class="font-display"
                                    style="font-size:1.05rem;margin-bottom:4px;color:var(--ink-900);">{{ $item['title'] }}
                                </h4>
                                <p class="text-muted" style="font-size:0.88rem;margin-bottom:12px;">
                                    {{ $item['subtitle'] }}</p>
                                <div style="font-size:0.82rem;color:var(--text-muted);">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <i class="bi bi-calendar3" style="color:var(--sage-500);width:16px;"></i>
                                        <span>{{ $item['date'] }}</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <i class="bi bi-clock" style="color:var(--sage-500);width:16px;"></i>
                                        <span>{{ $item['time'] }}</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-geo-alt" style="color:var(--sage-500);width:16px;"></i>
                                        <span>{{ $item['location'] }}</span>
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 border-top" style="border-color:var(--line);">
                                    <span class="text-sage-600 fw-semibold"
                                        style="font-size:0.85rem;display:inline-flex;align-items:center;gap:4px;">
                                        Detail <i class="bi bi-chevron-right"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-py">
        <div class="container-persi">
            <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-3 reveal is-visible">
                <div>
                    <span class="section-eyebrow">Berita</span>
                    <h2 class="section-title font-display">Informasi Terkini</h2>
                </div>
                <a href="#" class="btn-persi btn-persi-outline">
                    Lihat Semua Berita <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach ($beritaItems as $berita)
                    <div class="col-md-4 reveal is-visible">
                        <a href="{{ $berita['link'] }}" class="text-decoration-none">
                            <div class="news-card"
                                style="background:var(--surface);border-radius:var(--radius-md);overflow:hidden;border:1px solid var(--line);height:100%;transition:transform 0.22s ease,box-shadow 0.22s ease;">
                                <div class="thumb"
                                    style="aspect-ratio:16/10;overflow:hidden;background:var(--sage-100);">
                                    <img src="{{ $berita['image'] }}" alt="{{ $berita['title'] }}"
                                        style="width:100%;height:100%;object-fit:cover;transition:transform 0.4s ease;">
                                </div>
                                <div class="body" style="padding:18px 20px 22px;">
                                    <span class="cat"
                                        style="font-family:var(--font-mono);font-size:0.68rem;text-transform:uppercase;letter-spacing:0.05em;color:var(--sage-600);font-weight:700;">{{ $berita['category'] }}</span>
                                    <h4 class="font-display"
                                        style="font-size:1.02rem;margin:8px 0 10px;line-height:1.35;color:var(--ink-900);">
                                        {{ $berita['title'] }}</h4>
                                    <p
                                        style="color:var(--text-muted);font-size:0.88rem;line-height:1.6;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
                                        {{ $berita['excerpt'] }}</p>
                                    <span class="date" style="font-size:0.78rem;color:var(--text-muted);"><i
                                            class="bi bi-calendar3 me-1"></i>{{ $berita['date'] }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- STRUKTUR ORGANISASI Section -->
    <section id="struktur-organisasi" class="section-py">
        <div class="container-persi">
            <div class="text-center mb-5 reveal is-visible">
                <span class="section-eyebrow">Struktur Organisasi</span>
                <h2 class="section-title font-display">Pengurus PERSI &amp; MAKERSI Wilayah Jawa Tengah<br><span
                        style="font-size:0.65em;color:var(--text-muted);font-weight:400;">Periode Tahun 2025-2029
                        | SK No. 024/SKB/PERSI/II/2026</span></h2>
            </div>

            <div class="row g-4">
                <!-- Pelindung & Dewan Penasehat -->
                <div class="col-lg-4 reveal is-visible">
                    <h4 class="org-section-title">Pelindung</h4>
                    <div class="org-card">
                        <div class="jabatan">Pelindung</div>
                        <div class="nama">Gubernur Jawa Tengah</div>
                    </div>

                    <h4 class="org-section-title">Dewan Penasehat</h4>
                    <div class="org-card">
                        <div class="jabatan">Ketua</div>
                        <div class="nama">Kepala Dinas Kesehatan Provinsi Jawa Tengah</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Anggota</div>
                        <div class="nama">dr. Agus Suryanto, Sp.PD-KP, FCCP, MARS, MH</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Anggota</div>
                        <div class="nama">dr. Djoko Widyarto JS, DHM, MH.Kes</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Anggota</div>
                        <div class="nama">dr. Agus Akhmadi, M.Kes</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Anggota</div>
                        <div class="nama">dr. Daniel Budi Wibowo, M.Kes, FISQua</div>
                    </div>
                </div>

                <!-- Inti Pengurus -->
                <div class="col-lg-4 reveal is-visible">
                    <h4 class="org-section-title">Pengurus Inti</h4>
                    <div class="org-card" style="border-left-color:var(--brass-500);">
                        <div class="jabatan">Ketua</div>
                        <div class="nama">Dr. drg. Edi Sumarwanto, MM, MH.Kes</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Wakil Ketua 1</div>
                        <div class="nama">dr. Rini Susilowati, M.Kes., M.M., M.H., FISQua</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Wakil Ketua 2</div>
                        <div class="nama">drg. Farichah Hanum, M.Kes</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Wakil Ketua 3</div>
                        <div class="nama">dr. Masyhudi AM, M.Kes</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Wakil Ketua 4</div>
                        <div class="nama">dr. Bugar Wijiseno, MARS., FISQua</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Sekretaris</div>
                        <div class="nama">dr. Telogo Wismo Agung Durmanto</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Sekretaris 1</div>
                        <div class="nama">Dr. drg. Kusuma Arbianti, MM</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Sekretaris 2</div>
                        <div class="nama">dr. Ong Felin Sinaga, MKM, FISQua</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Bendahara</div>
                        <div class="nama">dr. Endang Agustinar, M.Kes</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Wakil Bendahara</div>
                        <div class="nama">Miftachul Izah, SE., M.Kes</div>
                    </div>
                </div>

                <!-- Kompartemen -->
                <div class="col-lg-4 reveal is-visible">
                    <h4 class="org-section-title">Kompartemen</h4>

                    <div class="org-card">
                        <div class="jabatan">Pembiayaan dan Sistem Jaminan Kesehatan</div>
                        <div class="nama">Ketua: dr. Pujianto, M.Kes</div>
                        <div class="gelar">Sekretaris: dr. Susi Herawati, M.Kes, FISQua</div>
                        <div class="gelar">Anggota : 1. dr. Alek Jusran, M.Kes</div>
                        <div class="gelar"> 2. dr. Nonot Mulyono, M.Kes</div>
                        <div class="gelar">3. dr. Any Rusydiani, M.Kes</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Alat Kesehatan, Farmasi dan HTA</div>
                        <div class="nama">Ketua: drg. Erwita Dinarsari, MARS</div>
                        <div class="gelar">Sekretaris: dr. Alice Sutedjo Lisa, MKM</div>
                        <div class="gelar">Anggota : 1. dr. Haryadi Ibnu Junaedi, Sp.B, FINACS</div>
                        <div class="gelar">3. Apt. Heru Dwi Purnomo, M.Sc</div>
                        <div class="gelar">2. dr. Sri Pratomo, Sp.B, FinaCS, FICS, CHAE, CPCCP</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Data, Informasi dan Transformasi Digital RS</div>
                        <div class="nama">Ketua: dr. Kelvin Kurniawan M.Kes</div>
                        <div class="gelar">Sekretaris: dr. Dyah Winastuti, M.Kes</div>
                        <div class="gelar">Anggota : 1. drg. Gustantyo Wahyu Wibowo, Sp.KG, FICD, FWSI</div>
                        <div class="gelar">2. dr. M. Riza Setiawan, MOSH, FISQua</div>
                        <div class="gelar">3. drg. Afaf, MM</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Humas dan Komunikasi Publik</div>
                        <div class="nama">Ketua: dr. Hilal Ariadi, M.Kes, FISQua</div>
                        <div class="gelar">Sekretaris: dr. Ivo Devi Kristyani, M.Si. Med., Sp.B, FINACS</div>
                        <div class="gelar">Anggota : 1. dr. Aditya Nugraha, M.Biomed, M.M., C.M.C, AAAK, CHIA</div>
                        <div class="gelar">2. Dr. (Cand.) dr. Anita Widi Hastuti, Sp.THT-BKL., MH, MARS, FRSPH,FISQua.
                        </div>
                        <div class="gelar">3. drg. Endang Nuriyati</div>
                        <div class="gelar">4. Ns. Nugroho Lazuardi, S.Kep, M.Kep</div>

                    </div>
                    <div class="org-card">
                        <div class="jabatan">Penunjang Medis, Nonmedis dan Kesiapsiagaan Bencana</div>
                        <div class="nama">Ketua: Dr. dr. Mochamad Abdul Hakam, Sp.PD, FINASIM</div>
                        <div class="gelar">Sekretaris: Ns. Kurnia Yuliastuti, M.Kep</div>
                        <div class="gelar">Anggota : 1. dr. Sarwoko Oetomo, MMR, FISQua</div>
                        <div class="gelar">2. dr. Aris Munandar, M.H</div>
                        <div class="gelar">3. dr. Aswin Wikantama, Sp.An., M.A.R.S., FISQua</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Mutu, Keselamatan Pasien dan Tata Kelola RS</div>
                        <div class="nama">Ketua: dr. Yuswanti, MHSc, FISQua</div>
                        <div class="gelar">Sekretaris: dr. Sri Mulyani, Sp.A, M.Kes, FISQua</div>
                        <div class="gelar">Anggota : 1. dr. Elfira Fawzia, MARS, FISQua</div>
                        <div class="gelar">2. dr. Ahmad Syaifuddin, M.Kes</div>
                        <div class="gelar">3. dr. Zaki Mubarok, M.M</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Penelitian, Pengembangan dan Jejaring Strategis</div>
                        <div class="nama">Ketua: dr. Prihatin Iman Nugroho, Sp.P, M.Kes, FISR</div>
                        <div class="gelar">Sekretaris: dr. Santi Kristiani, Sp.PK</div>
                        <div class="gelar">Anggota : 1. Dr. dr. Abdul Hakam, M.Si.Med., Sp.A</div>
                        <div class="gelar">2. Ns. Sri Wuri Handayani, S.Kep., MM., MH.,C.Med.,Sp.Kes., FISQua</div>
                        <div class="gelar">3. dr. Amrozi Taufik, M.Kes</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">SDM dan Pendidikan Berkelanjutan</div>
                        <div class="nama">Ketua: Ir. Vivi Vira Viridianti, M.Kes, DHM, MH, C.Med.Sp.Kes</div>
                        <div class="gelar">Sekretaris: drg. Kriswidiati, M.Kes</div>
                        <div class="gelar">Anggota : 1. dr. Dedi Prasetya, Sp.BA, MMR, FIAPS</div>
                        <div class="gelar">2. Yuda Ayu Timorita, S.Kep, Ns, M.Kep, FISQua, CHAE, CHMEE, CHCEE</div>
                        <div class="gelar">3. dr. Ahmad Shohibul Birry, MSI, MMR</div>
                        <div class="gelar">4. drg. Francisca Assisi Titis Pamungkas, M.M</div>
                    </div>
                    <div class="org-card">
                        <div class="jabatan">Hukum, Advokasi, Mediasi dan Penguatan Organisasi</div>
                        <div class="nama">Ketua: KBP P Dr. drg. Jaka Kusnanta Wahyuntara, Sp.BMMF, Subsp.
                            TMF-TMJ(K), SH, MH, CMC CCD, FISQua</div>
                        <div class="gelar">Sekretaris: dr. Bianti Hastuti Machroes, MH, Sp.FM</div>
                        <div class="gelar">Anggota : 1. dr. Zulfachmi Wahab, Sp.PD-KHOM. FINASIM</div>
                        <div class="gelar">2. dr. Akbar Kurniawan, M.Kes, M.H.</div>
                        <div class="gelar">3. Dr. dr. Kinik Darsono, M.Med.Ed, FISQua</div>
                        <div class="gelar">4. dr. Zaenal Muttaqin, MARS</div>
                    </div>
                </div>
            </div>

            <!-- Komisariat -->
            <div class="row g-4 mt-3">
                <div class="col-md-6 col-lg-4 reveal is-visible">
                    <h4 class="org-section-title">Komisariat Eks-Karesidenan Banyumas</h4>
                    <div class="org-card">
                        <div class="jabatan">Ketua</div>
                        <div class="nama">dr. Widyana Grehastuti, Sp.OG, MSi.Med</div>
                        <div class="gelar">Sekretaris: dr. Muhammad Miftahuddin, MARS</div>
                        <div class="gelar">Anggota : dr. Widayanto, M.Kes</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal is-visible">
                    <h4 class="org-section-title">Komisariat Eks-Karesidenan Kedu</h4>
                    <div class="org-card">
                        <div class="jabatan">Ketua</div>
                        <div class="nama">dr. Mohamad Riyatno, M.Kes</div>
                        <div class="gelar">Sekretaris: dr. Tolkha Amaruddin, M. Kes, Sp.THT-BKL., C.Med, Sp.Kes</div>
                        <div class="gelar">Anggota : 1. dr. R. Danang Sananto Sasongko, M.M</div>
                        <div class="gelar">2. dr. Achirudin Timora, Sp.N, MMR</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal is-visible">
                    <h4 class="org-section-title">Komisariat Eks-Karesidenan Pati</h4>
                    <div class="org-card">
                        <div class="jabatan">Ketua</div>
                        <div class="nama">dr. Boedi Setiawan, MM</div>
                        <div class="gelar">Sekretaris: dr. Indah Rosiana, MARS, FISQua</div>
                        <div class="gelar">Anggota : 1. dr. Bambang Santoso, MM</div>
                        <div class="gelar">2. drg. M. Tryanza Maulana, MM., MARS., MMu., FISQua, CHMEE. CHCEE</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal is-visible">
                    <h4 class="org-section-title">Komisariat Eks-Karesidenan Pekalongan</h4>
                    <div class="org-card">
                        <div class="jabatan">Ketua</div>
                        <div class="nama">dr. Bonis Edi Artoko, MPH</div>
                        <div class="gelar">Sekretaris: dr. Arief Darmawan, Sp.PD., MARS, C.Med.Sp.Kes, FISQua</div>
                        <div class="gelar">Anggota : 1. dr. lmam Prasetyo, M.Kes, FlSQua</div>
                        <div class="gelar">2. dr. Ali Budiarto, M.M., M.K.M.</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal is-visible">
                    <h4 class="org-section-title">Komisariat Eks-Karesidenan Semarang</h4>
                    <div class="org-card">
                        <div class="jabatan">Ketua</div>
                        <div class="nama">dr. Agus Ujianto, M.Si.Med, Sp.B</div>
                        <div class="gelar">Sekretaris: dr. M. Arif Rida, M.M.R.</div>
                        <div class="gelar">Anggota : 1. dr. Hasti Wulandari, M.K.M.</div>
                        <div class="gelar">2. dr. Nugroho Aris Kusuma, M.Kes</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal is-visible">
                    <h4 class="org-section-title">Komisariat Eks-Karesidenan Surakarta</h4>
                    <div class="org-card">
                        <div class="jabatan">Ketua</div>
                        <div class="nama">dr. Arief Budiman, MSi.Med. Sp.B.MH. MARS, FINACS</div>
                        <div class="gelar">Sekretaris: Yunus, S.Kep.Ners., MARS., FISQua</div>
                        <div class="gelar">Anggota : 1. dr. Udayanti Proborini, M.Kes</div>
                        <div class="gelar">2. dr. Setyarini, M.Kes, FlSQua</div>
                    </div>
                </div>
            </div>

            <!-- MAKERSI -->
            <div class="row mt-4">
                <div class="col-12 reveal is-visible">
                    <h4 class="org-section-title">Majelis Kehormatan Etik Rumah Sakit Indonesia (MAKERSI)</h4>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="org-card" style="border-left-color:var(--brass-500);">
                                <div class="jabatan">Ketua</div>
                                <div class="nama">Dr. dr. Cahyono Hadi, SH, Sp.O.G, Subsp. FER, MARS</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="org-card">
                                <div class="jabatan">Sekretaris</div>
                                <div class="nama">dr. Agus Setiyo Hadipurwanto, M.Kes</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="org-card">
                                <div class="jabatan">Anggota</div>
                                <div class="nama" style="font-size:0.9rem;">dr. Wahyu Indianto, MH<br>
                                    Dr. dr. Rasipin, M.Kes, MARS, FISQua<br>
                                    dr. Singgih Setyono, M.Kes, MMR<br>
                                    Dr. dr. M.C. Inge Hartini, M.Kes<br>
                                    drg. Albertus Fredi Susanto, Sp.Pros., S.H., MH.Kes</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Agenda & Berita -->
    <section class="section-py bg-white">
        <div class="container-persi">
            <div class="d-flex justify-content-between align-items-end mb-5 flex-wrap gap-3 reveal is-visible">
                <div><span class="section-eyebrow">Informasi Terkini</span>
                    <h2 class="section-title font-display">Agenda &amp; Berita PERSI Jateng</h2>
                </div>
                <a href="#" class="btn-persi btn-persi-outline">Lihat Semua Berita</a>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 reveal is-visible">
                    <div class="event-banner">
                        <div>
                            <span class="badge-live">Segera Berlangsung</span>
                            <h3 class="font-display">Seminar Nasional PERSI XXII &amp; Hospital Expo XXXVIII 2026
                            </h3>
                            <p class="mt-2 mb-0" style="color:#d7e2d1;font-size:0.9rem;">"Rumah Sakit Tumbuh dan
                                Tangguh di Era Kecerdasan Artifisial"</p>
                            <div class="meta">
                                <span><svg width="15" height="15" viewBox="0 0 24 24" fill="none">
                                        <rect x="3" y="5" width="18" height="16" rx="2"
                                            stroke="currentColor" stroke-width="1.8" />
                                        <path d="M3 10h18" stroke="currentColor" stroke-width="1.8" />
                                    </svg> 7–10 Oktober 2026</span>
                                <span><svg width="15" height="15" viewBox="0 0 24 24" fill="none">
                                        <path d="M12 22s7-6.5 7-12a7 7 0 1 0-14 0c0 5.5 7 12 7 12Z" stroke="currentColor"
                                            stroke-width="1.8" />
                                        <circle cx="12" cy="10" r="2.5" stroke="currentColor"
                                            stroke-width="1.8" />
                                    </svg> ICE BSD, Tangerang</span>
                            </div>
                        </div>
                        <a href="#" class="btn-persi btn-persi-accent mt-4 justify-content-center">Info
                            Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-4 reveal is-visible">
                            <a href="#" class="text-decoration-none">
                                <div class="news-card">
                                    <div class="thumb"><img
                                            src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=80"
                                            alt=""></div>
                                    <div class="body"><span class="cat">Regulasi</span>
                                        <h4 class="font-display">Update Standar Akreditasi Rumah Sakit 2026: Apa
                                            yang Berubah</h4><span class="date">28 Jul 2026</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 reveal is-visible">
                            <a href="#" class="text-decoration-none">
                                <div class="news-card">
                                    <div class="thumb"><img
                                            src="https://images.unsplash.com/photo-1551076805-e1869033e561?w=800&q=80"
                                            alt=""></div>
                                    <div class="body"><span class="cat">Kegiatan</span>
                                        <h4 class="font-display">Rakerwil PERSI Jateng Bahas Penguatan Layanan
                                            Rujukan</h4><span class="date">15 Jul 2026</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 reveal is-visible">
                            <a href="#" class="text-decoration-none">
                                <div class="news-card">
                                    <div class="thumb"><img
                                            src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&q=80"
                                            alt=""></div>
                                    <div class="body"><span class="cat">Mutu &amp; Keselamatan</span>
                                        <h4 class="font-display">Pelatihan Patient Safety Angkatan XIV Dibuka untuk
                                            RS Anggota</h4><span class="date">02 Jul 2026</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wilayah Marquee -->
    <section class="section-py pt-0">
        <div class="container-persi text-center mb-4 reveal is-visible">
            <span class="section-eyebrow">Jangkauan Wilayah</span>
            <h2 class="section-title font-display">Hadir di 35 Kabupaten/Kota Jawa Tengah</h2>
        </div>
        <div class="wilayah-marquee overflow-hidden reveal is-visible">
            <div class="wilayah-marquee-track">
                <span class="wilayah-chip">PERSI Cabang Semarang</span>
                <span class="wilayah-chip">PERSI Cabang Surakarta</span>
                <span class="wilayah-chip">PERSI Cabang Magelang</span>
                <span class="wilayah-chip">PERSI Cabang Pekalongan</span>
                <span class="wilayah-chip">PERSI Cabang Tegal</span>
                <span class="wilayah-chip">PERSI Cabang Salatiga</span>
                <span class="wilayah-chip">PERSI Cabang Purwokerto</span>
                <span class="wilayah-chip">PERSI Cabang Kudus</span>
                <span class="wilayah-chip">PERSI Cabang Klaten</span>
                <span class="wilayah-chip">PERSI Cabang Sukoharjo</span>
                <span class="wilayah-chip">PERSI Cabang Kebumen</span>
                <span class="wilayah-chip">PERSI Cabang Cilacap</span>
                <span class="wilayah-chip">PERSI Cabang Semarang</span>
                <span class="wilayah-chip">PERSI Cabang Surakarta</span>
                <span class="wilayah-chip">PERSI Cabang Magelang</span>
                <span class="wilayah-chip">PERSI Cabang Pekalongan</span>
                <span class="wilayah-chip">PERSI Cabang Tegal</span>
                <span class="wilayah-chip">PERSI Cabang Salatiga</span>
                <span class="wilayah-chip">PERSI Cabang Purwokerto</span>
                <span class="wilayah-chip">PERSI Cabang Kudus</span>
                <span class="wilayah-chip">PERSI Cabang Klaten</span>
                <span class="wilayah-chip">PERSI Cabang Sukoharjo</span>
                <span class="wilayah-chip">PERSI Cabang Kebumen</span>
                <span class="wilayah-chip">PERSI Cabang Cilacap</span>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section-py">
        <div class="container-persi">
            <div class="cta-band reveal is-visible">
                <div class="kawung-texture position-absolute top-0 start-0 w-100 h-100" style="opacity:0.5;">
                </div>
                <div class="position-relative">
                    <h2 class="font-display mx-auto" style="max-width:640px;font-size:clamp(1.5rem,3vw,2.1rem);">
                        Wujudkan rumah sakit yang tumbuh dan tangguh bersama PERSI Jateng</h2>
                    <p class="mx-auto mt-3 mb-4" style="max-width:520px;">Dapatkan akses advokasi kebijakan,
                        pelatihan mutu, dan jejaring 250+ rumah sakit se-Jawa Tengah.</p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="#" class="btn-persi btn-persi-accent">Daftar Keanggotaan</a>
                        <a href="#" class="btn-persi btn-persi-outline"
                            style="color:#18d50bb2;border-color:rgba(255,255,255,0.35);">Hubungi Sekretariat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
