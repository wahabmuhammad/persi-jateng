@extends('layouts.app')

@section('title', $hospital['nama'] . ' - PERSI Jawa Tengah')

@section('content')
    <!-- Breadcrumb -->
    <div class="py-3" style="background:var(--sage-50);border-bottom:1px solid var(--line);">
        <div class="container-persi">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size:0.9rem;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none"
                            style="color:var(--sage-600);">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('rs-anggota.index') }}" class="text-decoration-none"
                            style="color:var(--sage-600);">RS Anggota</a></li>
                    <li class="breadcrumb-item active" style="color:var(--ink-700);" aria-current="page">
                        {{ $hospital['nama'] }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Detail RS -->
    <section class="py-5">
        <div class="container-persi">
            <div class="row g-4">
                <div class="col-lg-8">
                    <!-- Header -->
                    <div class="bg-white p-4 rounded-4 shadow-sm" style="border:1px solid var(--line);">
                        <div class="d-flex flex-wrap gap-2 align-items-start justify-content-between mb-3">
                            <div>
                                <span class="badge"
                                    style="background:var(--sage-100);color:var(--sage-700);font-weight:600;font-size:0.7rem;text-transform:uppercase;letter-spacing:0.06em;padding:4px 14px;border-radius:var(--radius-pill);">
                                    {{ $hospital['karesidenan'] }}
                                </span>
                                <span class="badge ms-1"
                                    style="background:var(--brass-400);color:var(--ink-900);font-weight:700;font-size:0.7rem;padding:4px 14px;border-radius:var(--radius-pill);">
                                    Kelas {{ $hospital['kelas'] }}
                                </span>
                                <span class="badge ms-1"
                                    style="background:var(--sage-50);color:var(--text-muted);font-weight:500;font-size:0.7rem;padding:4px 14px;border-radius:var(--radius-pill);border:1px solid var(--line);">
                                    {{ $hospital['no_anggota'] }}
                                </span>
                            </div>
                            <a href="{{ route('rs-anggota.index') }}" class="btn-persi btn-persi-outline"
                                style="font-size:0.85rem;padding:8px 18px;">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                        </div>

                        <h1 class="font-display" style="font-size:clamp(1.6rem,2.5vw,2.2rem);">{{ $hospital['nama'] }}</h1>
                        <p class="text-muted mb-0 d-flex align-items-center gap-2">
                            <i class="bi bi-geo-alt" style="color:var(--sage-500);"></i>
                            {{ $hospital['alamat'] }}, {{ $hospital['kota'] }}
                        </p>
                    </div>

                    <!-- Informasi Detail -->
                    <div class="bg-white p-4 rounded-4 shadow-sm mt-4" style="border:1px solid var(--line);">
                        <h5 class="font-display mb-3"><i class="bi bi-info-circle me-2"
                                style="color:var(--sage-500);"></i>Informasi Lengkap</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="info-item p-3 rounded-3"
                                    style="background:var(--sage-50);border:1px solid var(--line);">
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.65rem;letter-spacing:0.06em;">Nama Rumah Sakit</div>
                                    <div class="fw-semibold">{{ $hospital['nama'] }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item p-3 rounded-3"
                                    style="background:var(--sage-50);border:1px solid var(--line);">
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.65rem;letter-spacing:0.06em;">No. Anggota</div>
                                    <div class="fw-semibold font-mono">{{ $hospital['no_anggota'] }}</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="info-item p-3 rounded-3"
                                    style="background:var(--sage-50);border:1px solid var(--line);">
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.65rem;letter-spacing:0.06em;">Alamat</div>
                                    <div class="fw-semibold">{{ $hospital['alamat'] }}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item p-3 rounded-3"
                                    style="background:var(--sage-50);border:1px solid var(--line);">
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.65rem;letter-spacing:0.06em;">Kota</div>
                                    <div class="fw-semibold">{{ $hospital['kota'] }}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item p-3 rounded-3"
                                    style="background:var(--sage-50);border:1px solid var(--line);">
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.65rem;letter-spacing:0.06em;">Kelas</div>
                                    <div class="fw-semibold">{{ $hospital['kelas'] }}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item p-3 rounded-3"
                                    style="background:var(--sage-50);border:1px solid var(--line);">
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.65rem;letter-spacing:0.06em;">Karesidenan</div>
                                    <div class="fw-semibold">{{ $hospital['karesidenan'] }}</div>
                                </div>
                            </div>
                            @if (!empty($hospital['direktur_utama']))
                                <div class="col-md-12">
                                    <div class="info-item p-3 rounded-3"
                                        style="background:var(--sage-50);border:1px solid var(--line);">
                                        <div class="text-muted small text-uppercase fw-semibold"
                                            style="font-size:0.65rem;letter-spacing:0.06em;">Direktur Utama</div>
                                        <div class="fw-semibold">{{ $hospital['direktur_utama'] }}</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Sidebar - Kontak -->
                <div class="col-lg-4">
                    <div class="bg-white p-4 rounded-4 shadow-sm sticky-top"
                        style="border:1px solid var(--line);top:100px;">
                        <h5 class="font-display mb-3"><i class="bi bi-telephone me-2"
                                style="color:var(--sage-500);"></i>Kontak</h5>

                        @if (!empty($hospital['no_telepon']))
                            <div class="d-flex align-items-start gap-3 mb-3 p-2 rounded-3"
                                style="background:var(--sage-50);">
                                <i class="bi bi-telephone fs-5" style="color:var(--sage-500);"></i>
                                <div>
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.6rem;letter-spacing:0.06em;">Telepon</div>
                                    <div class="fw-semibold">{{ $hospital['no_telepon'] }}</div>
                                </div>
                            </div>
                        @endif

                        @if (!empty($hospital['no_fax']))
                            <div class="d-flex align-items-start gap-3 mb-3 p-2 rounded-3"
                                style="background:var(--sage-50);">
                                <i class="bi bi-printer fs-5" style="color:var(--sage-500);"></i>
                                <div>
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.6rem;letter-spacing:0.06em;">Fax</div>
                                    <div class="fw-semibold">{{ $hospital['no_fax'] }}</div>
                                </div>
                            </div>
                        @endif

                        @if (!empty($hospital['email']))
                            <div class="d-flex align-items-start gap-3 mb-3 p-2 rounded-3"
                                style="background:var(--sage-50);">
                                <i class="bi bi-envelope fs-5" style="color:var(--sage-500);"></i>
                                <div>
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.6rem;letter-spacing:0.06em;">Email</div>
                                    <div class="fw-semibold" style="word-break:break-all;">{{ $hospital['email'] }}</div>
                                </div>
                            </div>
                        @endif

                        @if (!empty($hospital['website']))
                            <div class="d-flex align-items-start gap-3 mb-3 p-2 rounded-3"
                                style="background:var(--sage-50);">
                                <i class="bi bi-globe2 fs-5" style="color:var(--sage-500);"></i>
                                <div>
                                    <div class="text-muted small text-uppercase fw-semibold"
                                        style="font-size:0.6rem;letter-spacing:0.06em;">Website</div>
                                    <div class="fw-semibold">
                                        <a href="https://{{ $hospital['website'] }}" target="_blank"
                                            style="color:var(--sage-600);text-decoration:none;">
                                            {{ $hospital['website'] }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <hr class="my-3">

                        <div class="text-center">
                            <a href="{{ route('rs-anggota.index') }}"
                                class="btn-persi btn-persi-primary w-100 justify-content-center">
                                <i class="bi bi-building"></i> Lihat Semua RS Anggota
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .info-item {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .info-item:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .sticky-top {
            transition: all 0.3s ease;
        }
    </style>
@endsection
