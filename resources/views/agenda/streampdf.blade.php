@extends('layouts.app')

@section('title', 'Stream Undangan PDF - PERSI Jawa Tengah')

@section('content')
    <!-- Breadcrumb -->
    <div class="py-3" style="background:var(--sage-50);border-bottom:1px solid var(--line);">
        <div class="container-persi">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size:0.9rem;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none"
                            style="color:var(--sage-600);">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('agenda.index') }}" class="text-decoration-none"
                            style="color:var(--sage-600);">Agenda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('agenda.undangan') }}" class="text-decoration-none"
                            style="color:var(--sage-600);">Undangan</a></li>
                    <li class="breadcrumb-item active" style="color:var(--ink-700);" aria-current="page">Stream PDF</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- PDF Viewer -->
    <section class="py-4">
        <div class="container-persi">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="font-display" style="font-size:1.4rem;">
                    <i class="bi bi-file-pdf me-2" style="color:var(--sage-600);"></i>
                    Undangan Seminar, Workshop & Rapat Anggota
                </h2>
                <div class="d-flex gap-2">
                    <a href="{{ route('agenda.undangan') }}" class="btn-persi btn-persi-outline"
                        style="font-size:0.85rem;padding:8px 18px;">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <a href="{{ $pdfUrl }}" download class="btn-persi btn-persi-primary"
                        style="font-size:0.85rem;padding:8px 18px;">
                        <i class="bi bi-download"></i> Download
                    </a>
                </div>
            </div>

            <div class="pdf-viewer-container"
                style="border:1px solid var(--line);border-radius:var(--radius-md);overflow:hidden;background:var(--surface);">
                <iframe src="{{ $pdfUrl }}" style="width:100%;height:80vh;min-height:600px;border:none;"
                    frameborder="0">
                    Browser Anda tidak mendukung tampilan PDF.
                    <a href="{{ $pdfUrl }}" download>Download PDF</a>
                </iframe>
            </div>

            <div class="mt-3 text-muted text-center" style="font-size:0.85rem;">
                <i class="bi bi-info-circle me-1"></i>
                Jika PDF tidak tampil, silakan
                <a href="{{ $pdfUrl }}" download style="color:var(--sage-600);">download file PDF</a>
                atau gunakan browser dengan dukungan PDF viewer.
            </div>
        </div>
    </section>
@endsection
