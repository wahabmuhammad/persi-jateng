@extends('layouts.app')

@section('title', 'Undangan - PERSI Jawa Tengah')

@section('content')
<!-- Breadcrumb -->
<div class="py-3" style="background:var(--sage-50);border-bottom:1px solid var(--line);">
    <div class="container-persi">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size:0.9rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none" style="color:var(--sage-600);">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('agenda.index') }}" class="text-decoration-none" style="color:var(--sage-600);">Agenda</a></li>
                <li class="breadcrumb-item active" style="color:var(--ink-700);" aria-current="page">Undangan</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Header -->
<section class="py-4" style="background:var(--sage-800);">
    <div class="container-persi">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="font-display text-white" style="font-size:clamp(1.5rem,2.5vw,2.2rem);">{{ $undangan['judul'] }}</h1>
                <p class="text-white-50 mt-2" style="font-size:1.05rem;">{{ $undangan['tema'] }}</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <a href="{{ route('agenda.stream-pdf') }}" class="btn-persi btn-persi-accent" target="_blank">
                    <i class="bi bi-file-pdf me-1"></i> Lihat PDF Asli
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Isi Undangan -->
<section class="py-5">
    <div class="container-persi">
        <div class="row g-4">
            <!-- Konten Utama -->
            <div class="col-lg-8">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm" style="border:1px solid var(--line);">
                    <!-- Kop Surat -->
                    <div class="text-center border-bottom pb-4 mb-4">
                        <div class="d-flex align-items-center justify-content-center gap-3">
                            <div style="width:60px;height:60px;border-radius:12px;background:var(--sage-700);display:flex;align-items:center;justify-content:center;color:#fff;font-family:var(--font-display);font-weight:800;font-size:1.6rem;">P</div>
                            <div>
                                <h4 class="font-display mb-0" style="font-size:1.3rem;">PERSI JAWA TENGAH</h4>
                                <p class="text-muted small mb-0">Perhimpunan Rumah Sakit Seluruh Indonesia</p>
                            </div>
                        </div>
                    </div>

                    <!-- Nomor Surat -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="fw-semibold">Nomor: 241/PERSI JATENG/VII/2026</span>
                        <span class="text-muted">Semarang, 13 Juli 2026</span>
                    </div>

                    <!-- Perihal -->
                    <div class="mb-4">
                        <h5 class="font-display">Perihal: <span class="fw-bold">{{ $undangan['judul'] }}</span></h5>
                        <p class="text-muted" style="font-size:0.95rem;">Kepada Yth. Direktur / Kepala Rumah Sakit Anggota PERSI Wilayah Jawa Tengah</p>
                    </div>

                    <!-- Isi -->
                    <div class="mb-4" style="font-size:0.98rem;line-height:1.8;text-align:justify;">
                        <p>Dengan Hormat,</p>
                        <p>Berdasarkan AD-ART PERSI Tahun 2024, PERSI memiliki tujuan untuk mewujudkan pelayanan rumah sakit yang profesional, berorientasi pada mutu dan keselamatan pasien, serta mampu bersaing di tingkat Internasional dengan cara memfasilitasi, memberdayakan, mengadvokasi, mengkonsolidasi serta melindungi hak anggota PERSI.</p>
                        <p>Sehubungan dengan hal tersebut, PERSI Wilayah Jawa Tengah akan menyelenggarakan kegiatan <strong>Pertemuan Tahunan dan Pameran Perumahsakitan PERSI Jateng Tahun 2026</strong> dengan tema:</p>
                    </div>

                    <!-- Tema Box -->
                    <div class="p-4 rounded-3 mb-4" style="background:var(--sage-50);border-left:4px solid var(--brass-500);">
                        <h3 class="font-display text-center" style="font-size:1.2rem;color:var(--sage-800);">
                            "{{ $undangan['tema'] }}"
                        </h3>
                    </div>

                    <div class="mb-4" style="font-size:0.98rem;line-height:1.8;">
                        <p>pada:</p>
                        <div class="d-flex flex-wrap gap-4 mb-3 p-3 rounded-3" style="background:var(--surface);border:1px solid var(--line);">
                            <div><i class="bi bi-calendar3 text-sage-600 me-1"></i> <strong>Hari/Tanggal:</strong> {{ $undangan['tanggal'] }}</div>
                            <div><i class="bi bi-geo-alt text-sage-600 me-1"></i> <strong>Tempat:</strong> {{ $undangan['tempat'] }}</div>
                            <div><i class="bi bi-pin-map text-sage-600 me-1"></i> {{ $undangan['alamat'] }}</div>
                        </div>
                    </div>

                    <!-- Seminar -->
                    <div class="mb-4">
                        <h5 class="font-display" style="color:var(--sage-700);">1. SEMINAR</h5>
                        <div class="p-3 rounded-3" style="background:var(--sage-50);border:1px solid var(--line);">
                            <div class="row g-2">
                                <div class="col-md-4"><strong>Tanggal:</strong> {{ $undangan['seminar']['tanggal'] }}</div>
                                <div class="col-md-4"><strong>Kuota:</strong> {{ $undangan['seminar']['kuota'] }}</div>
                                <div class="col-md-4"><strong>Kontribusi:</strong> {{ $undangan['seminar']['biaya'] }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Workshop -->
                    <div class="mb-4">
                        <h5 class="font-display" style="color:var(--sage-700);">2. WORKSHOP</h5>
                        <div class="table-responsive">
                            <table class="table table-hover table-sm" style="font-size:0.88rem;">
                                <thead style="background:var(--sage-100);">
                                    <tr>
                                        <th>Workshop</th>
                                        <th>Tema</th>
                                        <th>Tanggal</th>
                                        <th>Kuota</th>
                                        <th>Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($undangan['workshop'] as $ws)
                                    <tr>
                                        <td><span class="fw-semibold">{{ $ws['nama'] }}</span></td>
                                        <td>{{ $ws['tema'] }}</td>
                                        <td>{{ $ws['tanggal'] }}</td>
                                        <td>{{ $ws['kuota'] }}</td>
                                        <td>{{ $ws['biaya'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted small mt-2"><em>*) Workshop 1-3: 21 Agustus 2026 | Workshop 4-6: 22 Agustus 2026</em></p>
                    </div>

                    <!-- Transfer -->
                    <div class="p-4 rounded-3 mb-4" style="background:var(--sage-50);border:1px solid var(--line);">
                        <h6 class="font-display mb-2"><i class="bi bi-bank me-2"></i>Transfer Kontribusi ke:</h6>
                        <div class="row g-2">
                            <div class="col-md-4"><strong>Bank:</strong> {{ $undangan['bank']['nama'] }}</div>
                            <div class="col-md-4"><strong>No. Rekening:</strong> {{ $undangan['bank']['nomor'] }}</div>
                            <div class="col-md-4"><strong>a.n.</strong> {{ $undangan['bank']['atas_nama'] }}</div>
                        </div>
                    </div>

                    <!-- Link Pendaftaran -->
                    <div class="p-3 rounded-3 mb-4" style="background:var(--surface);border:1px dashed var(--sage-400);">
                        <p class="mb-1"><i class="bi bi-link-45deg me-1"></i> <strong>Link Pendaftaran:</strong></p>
                        <a href="{{ $undangan['link_pendaftaran'] }}" target="_blank" class="text-break" style="color:var(--sage-600);">{{ $undangan['link_pendaftaran'] }}</a>
                    </div>

                    <!-- Kontak -->
                    <div class="mb-4">
                        <h6 class="font-display"><i class="bi bi-headset me-2"></i>Kontak Panitia:</h6>
                        <ul class="list-unstyled">
                            @foreach($undangan['kontak'] as $kontak)
                            <li><i class="bi bi-whatsapp me-1" style="color:#25D366;"></i> {{ $kontak['nama'] }} - <a href="https://wa.me/{{ str_replace('+', '', $kontak['wa']) }}" target="_blank" style="color:var(--sage-600);">{{ $kontak['wa'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Penutup -->
                    <div class="border-top pt-4 mt-4">
                        <p>Demikian kami sampaikan, atas perhatian dan partisipasi aktif Bapak/ Ibu, diucapkan Terima Kasih.</p>
                    </div>

                    <!-- Tanda Tangan -->
                    <div class="row mt-4 pt-3 border-top">
                        <div class="col-md-6 text-center">
                            <p class="mb-0">Hormat Kami,</p>
                            <p class="fw-bold mb-0">Ketua PERSI Wilayah Jawa Tengah</p>
                            <br>
                            <br>
                            <p class="fw-bold">Dr. drg. Edi Sumarwanto, MM, MH.Kes</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <p class="mb-0">Ketua Panitia</p>
                            <p class="fw-bold mb-0">Pertemuan Tahunan dan Pameran Perumahsakitan</p>
                            <br>
                            <br>
                            <p class="fw-bold">drg. Erwita Dinarsari, MARS</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="bg-white p-4 rounded-4 shadow-sm sticky-top" style="border:1px solid var(--line);top:100px;">
                    <h5 class="font-display mb-3"><i class="bi bi-file-pdf me-2" style="color:var(--sage-500);"></i>Dokumen</h5>
                    <a href="{{ route('agenda.stream-pdf') }}" target="_blank" class="d-block p-3 rounded-3 text-decoration-none mb-3" style="background:var(--sage-50);border:1px solid var(--line);transition:all 0.2s ease;">
                        <div class="d-flex align-items-center gap-3">
                            <div style="font-size:2rem;color:var(--sage-600);"><i class="bi bi-file-pdf"></i></div>
                            <div>
                                <div class="fw-semibold" style="font-size:0.9rem;">Undangan Resmi</div>
                                <div class="text-muted" style="font-size:0.75rem;">PDF • 241/PERSI JATENG/VII/2026</div>
                            </div>
                            <div class="ms-auto"><i class="bi bi-download"></i></div>
                        </div>
                    </a>

                    <hr>

                    <h6 class="font-display">Info Cepat</h6>
                    <ul class="list-unstyled" style="font-size:0.88rem;">
                        <li class="d-flex justify-content-between py-1 border-bottom">
                            <span class="text-muted">Seminar</span>
                            <span class="fw-semibold">Rp 2.500.000</span>
                        </li>
                        <li class="d-flex justify-content-between py-1 border-bottom">
                            <span class="text-muted">Workshop (1-3)</span>
                            <span class="fw-semibold">Rp 1.100.000</span>
                        </li>
                        <li class="d-flex justify-content-between py-1 border-bottom">
                            <span class="text-muted">Workshop (4-6)</span>
                            <span class="fw-semibold">Rp 1.000.000</span>
                        </li>
                    </ul>

                    <a href="{{ $undangan['link_pendaftaran'] }}" target="_blank" class="btn-persi btn-persi-primary w-100 justify-content-center mt-2">
                        <i class="bi bi-box-arrow-up-right"></i> Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection