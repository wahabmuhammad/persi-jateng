<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'PERSI Jawa Tengah')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/image.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/image.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --sage-50: #F4F7F2;
            --sage-100: #E6EDE2;
            --sage-200: #CCDBC3;
            --sage-300: #A9C29A;
            --sage-400: #86A874;
            --sage-500: #688C57;
            --sage-600: #547144;
            --sage-700: #435B37;
            --sage-800: #35472C;
            --sage-900: #253320;
            --brass-400: #D9A94E;
            --brass-500: #C4933A;
            --brass-600: #A67728;
            --cream: #FBF9F4;
            --paper: #FFFFFF;
            --ink-900: #1E2A1D;
            --ink-700: #3B463A;
            --ink-500: #6B7669;
            --ink-300: #A9B2A6;
            --line: #E2E7DE;
            --bg: var(--cream);
            --surface: var(--paper);
            --primary: var(--sage-600);
            --primary-dark: var(--sage-800);
            --accent: var(--brass-500);
            --text: var(--ink-900);
            --text-muted: var(--ink-500);
            --font-display: "Sora", "Segoe UI", sans-serif;
            --font-body: "Inter", "Segoe UI", sans-serif;
            --font-mono: "JetBrains Mono", ui-monospace, monospace;
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 22px;
            --radius-pill: 999px;
            --shadow-sm: 0 2px 8px rgba(37, 51, 32, 0.06);
            --shadow-md: 0 8px 24px rgba(37, 51, 32, 0.10);
            --shadow-lg: 0 20px 48px rgba(37, 51, 32, 0.16);
            --container: 1240px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            color: var(--text);
            background: var(--bg);
            -webkit-font-smoothing: antialiased;
        }

        h1,
        h2,
        h3,
        h4,
        .font-display {
            font-family: var(--font-display);
            color: var(--ink-900);
            font-weight: 700;
            letter-spacing: -0.01em;
        }

        .text-muted-custom {
            color: var(--text-muted) !important;
        }

        .font-mono {
            font-family: var(--font-mono);
        }

        a {
            color: var(--sage-700);
        }

        a:hover {
            color: var(--sage-800);
        }

        .container-persi {
            width: 100%;
            max-width: var(--container);
            margin-inline: auto;
            padding-inline: 20px;
        }

        ::selection {
            background: var(--sage-300);
            color: var(--ink-900);
        }

        .kawung-texture {
            background-image:
                radial-gradient(circle at 1px 1px, rgba(104, 140, 87, 0.16) 1.5px, transparent 1.5px);
            background-size: 26px 26px;
        }

        /* Buttons */
        .btn-persi {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: var(--font-display);
            font-weight: 600;
            font-size: 0.95rem;
            padding: 12px 24px;
            border-radius: var(--radius-pill);
            border: 1.5px solid transparent;
            transition: transform 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease, color 0.18s ease;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-persi:active {
            transform: translateY(1px);
        }

        .btn-persi-primary {
            background: var(--sage-700);
            color: #fff;
            box-shadow: var(--shadow-sm);
        }

        .btn-persi-primary:hover {
            background: var(--sage-800);
            color: #fff;
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .btn-persi-outline {
            background: transparent;
            color: var(--sage-800);
            border-color: var(--sage-300);
        }

        .btn-persi-outline:hover {
            background: var(--sage-50);
            border-color: var(--sage-500);
            color: var(--sage-800);
            transform: translateY(-2px);
        }

        .btn-persi-accent {
            background: var(--brass-500);
            color: var(--ink-900);
        }

        .btn-persi-accent:hover {
            background: var(--brass-600);
            color: var(--ink-900);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Navbar */
        .persi-navbar {
            background: rgba(251, 249, 244, 0.92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid transparent;
            transition: box-shadow 0.25s ease, border-color 0.25s ease, background-color 0.25s ease;
        }

        .persi-navbar.is-scrolled {
            border-color: var(--line);
            box-shadow: var(--shadow-sm);
        }

        .persi-navbar .navbar-brand-title {
            font-family: var(--font-display);
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--ink-900);
            line-height: 1.05;
        }

        .persi-navbar .navbar-brand-sub {
            font-size: 0.68rem;
            letter-spacing: 0.06em;
            color: var(--sage-600);
            text-transform: uppercase;
            font-weight: 600;
        }

        .persi-nav-link {
            font-family: var(--font-display);
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--ink-700) !important;
            padding: 8px 14px !important;
            border-radius: var(--radius-pill);
            transition: background 0.18s ease, color 0.18s ease;
            position: relative;
        }

        .persi-nav-link:hover,
        .persi-nav-link.active {
            color: var(--sage-800) !important;
            background: var(--sage-100);
        }

        .top-strip {
            background: linear-gradient(90deg, var(--sage-800), var(--sage-600));
            color: #eef3ea;
            font-size: 0.8rem;
        }

        .top-strip a {
            color: #eef3ea;
            text-decoration: none;
        }

        .top-strip a:hover {
            color: var(--brass-400);
        }

        /* Hero */
        .hero-section {
            position: relative;
            overflow: hidden;
            padding-top: 64px;
            padding-bottom: 56px;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: var(--font-mono);
            font-size: 0.72rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--sage-700);
            background: var(--sage-100);
            border: 1px solid var(--sage-200);
            padding: 6px 14px;
            border-radius: var(--radius-pill);
        }

        .hero-eyebrow .dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--accent);
            animation: pulse-dot 2s ease-in-out infinite;
        }

        @keyframes pulse-dot {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(1.3);
            }
        }

        .hero-title {
            font-size: clamp(2.1rem, 4vw, 3.35rem);
            line-height: 1.08;
        }

        .hero-title .accent-underline {
            position: relative;
            white-space: nowrap;
        }

        .hero-title .accent-underline::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0.06em;
            height: 0.28em;
            background: var(--sage-300);
            z-index: -1;
            border-radius: 3px;
        }

        .hero-lede {
            font-size: 1.08rem;
            color: var(--text-muted);
            max-width: 46ch;
        }

        .hero-stats {
            display: flex;
            gap: 28px;
            flex-wrap: wrap;
        }

        .hero-stat .num {
            font-family: var(--font-display);
            font-weight: 800;
            font-size: 1.6rem;
            color: var(--sage-800);
            line-height: 1;
        }

        .hero-stat .label {
            font-size: 0.76rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .hero-media {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            aspect-ratio: 4 / 3.1;
        }

        .hero-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 6s ease;
        }

        .hero-media:hover img {
            transform: scale(1.05);
        }

        .hero-media::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(30, 42, 29, 0) 55%, rgba(20, 29, 18, 0.55) 100%);
        }

        .hero-media-caption {
            position: absolute;
            left: 18px;
            bottom: 16px;
            right: 18px;
            color: #fff;
            z-index: 2;
            font-size: 0.85rem;
        }

        .hero-media-caption strong {
            display: block;
            font-family: var(--font-display);
            font-size: 0.98rem;
        }

        .hero-badge-card {
            position: absolute;
            bottom: -22px;
            left: -22px;
            background: #fff;
            border-radius: var(--radius-md);
            padding: 14px 18px;
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 12px;
            z-index: 3;
        }

        @media (max-width: 991.98px) {
            .hero-badge-card {
                display: none;
            }
        }

        .hero-badge-card .icon-wrap {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--sage-100);
            color: var(--sage-700);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-bg-kawung {
            position: absolute;
            inset: 0;
            z-index: -1;
        }

        /* Quick Links */
        .quick-link-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            padding: 28px 26px;
            height: 100%;
            transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
        }

        .quick-link-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
            border-color: var(--sage-300);
        }

        .quick-link-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: var(--sage-800);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .quick-link-card:hover .quick-link-icon {
            background: var(--accent);
            color: var(--ink-900);
            transform: rotate(-6deg) scale(1.05);
        }

        .quick-link-card h3 {
            font-size: 1.15rem;
            margin-bottom: 6px;
        }

        .quick-link-card p {
            color: var(--text-muted);
            font-size: 0.92rem;
            margin-bottom: 18px;
        }

        .quick-link-card .arrow-link {
            font-family: var(--font-display);
            font-weight: 600;
            font-size: 0.88rem;
            color: var(--sage-800);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .quick-link-card .arrow-link svg {
            transition: transform 0.18s ease;
        }

        .quick-link-card:hover .arrow-link svg {
            transform: translateX(4px);
        }

        /* Stats strip */
        .stats-strip {
            background: var(--sage-800);
            border-radius: var(--radius-lg);
            padding: 40px 30px;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .stats-strip::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle at 1px 1px, rgba(255, 255, 255, 0.10) 1.5px, transparent 1.5px);
            background-size: 26px 26px;
        }

        .stats-strip .stat-item {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .stats-strip .stat-num {
            font-family: var(--font-display);
            font-weight: 800;
            font-size: clamp(1.9rem, 3vw, 2.6rem);
            color: var(--brass-400);
            line-height: 1;
        }

        .stats-strip .stat-label {
            font-size: 0.82rem;
            color: #d7e2d1;
            margin-top: 6px;
            letter-spacing: 0.02em;
        }

        /* Section headers */
        .section-eyebrow {
            font-family: var(--font-mono);
            font-size: 0.72rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--sage-600);
            font-weight: 600;
        }

        .section-title {
            font-size: clamp(1.5rem, 2.6vw, 2.1rem);
            margin-top: 6px;
        }

        .section-py {
            padding-block: 72px;
        }

        .sambutan-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
        }

        .sambutan-card .foto-wrapper img {
            transition: transform 0.4s ease;
        }

        .sambutan-card:hover .foto-wrapper img {
            transform: scale(1.05);
        }

        @media (max-width: 767.98px) {
            .section-py {
                padding-block: 48px;
            }
        }

        /* Visi Misi Cards */
        .visi-card {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 32px 28px;
            border: 1px solid var(--line);
            height: 100%;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .visi-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
        }

        .visi-card .icon-badge {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: var(--sage-100);
            color: var(--sage-700);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
        }

        .visi-card h3 {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .visi-card p,
        .visi-card li {
            color: var(--text-muted);
            font-size: 0.92rem;
            line-height: 1.7;
        }

        .visi-card ul {
            padding-left: 20px;
            margin-bottom: 0;
        }

        .visi-card ul li {
            margin-bottom: 6px;
        }

        /* Event banner */
        .event-banner {
            border-radius: var(--radius-lg);
            overflow: hidden;
            position: relative;
            background: linear-gradient(160deg, var(--sage-800) 0%, var(--sage-600) 100%);
            color: #fff;
            min-height: 100%;
            padding: 30px 28px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: var(--shadow-md);
        }

        .event-banner .badge-live {
            align-self: flex-start;
            background: var(--brass-400);
            color: var(--ink-900);
            font-family: var(--font-mono);
            font-size: 0.7rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 5px 12px;
            border-radius: var(--radius-pill);
            font-weight: 700;
        }

        .event-banner h3 {
            color: #fff;
            font-size: 1.4rem;
            margin-top: 14px;
        }

        .event-banner .meta {
            font-size: 0.85rem;
            color: #d7e2d1;
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 16px;
        }

        .event-banner .meta span {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* News cards */
        .news-card {
            background: var(--surface);
            border-radius: var(--radius-md);
            overflow: hidden;
            border: 1px solid var(--line);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            height: 100%;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .news-card .thumb {
            aspect-ratio: 16/10;
            overflow: hidden;
            background: var(--sage-100);
        }

        .news-card .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .news-card:hover .thumb img {
            transform: scale(1.07);
        }

        .news-card .body {
            padding: 18px 20px 22px;
        }

        .news-card .cat {
            font-family: var(--font-mono);
            font-size: 0.68rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--sage-600);
            font-weight: 700;
        }

        .news-card h4 {
            font-size: 1.02rem;
            margin: 8px 0 10px;
            line-height: 1.35;
        }

        .news-card .date {
            font-size: 0.78rem;
            color: var(--text-muted);
        }

        /* Wilayah / region strip */
        .wilayah-chip {
            border: 1px solid var(--line);
            background: var(--surface);
            border-radius: var(--radius-pill);
            padding: 8px 16px;
            font-size: 0.84rem;
            color: var(--ink-700);
            transition: all 0.18s ease;
            white-space: nowrap;
        }

        .wilayah-chip:hover {
            background: var(--sage-700);
            color: #fff;
            border-color: var(--sage-700);
            transform: translateY(-3px);
        }

        .wilayah-marquee-track {
            display: flex;
            gap: 12px;
            width: max-content;
            animation: marquee 34s linear infinite;
        }

        .wilayah-marquee:hover .wilayah-marquee-track {
            animation-play-state: paused;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* Struktur Organisasi */
        .org-card {
            background: var(--surface);
            border-radius: var(--radius-md);
            padding: 20px 24px;
            border-left: 4px solid var(--sage-500);
            margin-bottom: 12px;
            transition: background 0.2s ease;
        }

        .org-card:hover {
            background: var(--sage-50);
        }

        .org-card .jabatan {
            font-size: 0.78rem;
            color: var(--sage-600);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .org-card .nama {
            font-family: var(--font-display);
            font-weight: 600;
            font-size: 1rem;
            color: var(--ink-900);
        }

        .org-card .gelar {
            font-size: 0.82rem;
            color: var(--text-muted);
        }

        .org-section-title {
            font-family: var(--font-display);
            font-weight: 700;
            font-size: 1.15rem;
            color: var(--sage-700);
            margin-top: 28px;
            margin-bottom: 16px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--sage-200);
        }

        /* CTA band */
        .cta-band {
            background: var(--sage-900);
            border-radius: var(--radius-lg);
            padding: 56px 40px;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-band h2 {
            color: #fff;
        }

        .cta-band p {
            color: #cfdac9;
        }

        /* Footer */
        .persi-footer {
            background: var(--sage-900);
            color: #cfdac9;
            padding-top: 64px;
        }

        .persi-footer h5 {
            color: #fff;
            font-family: var(--font-display);
            font-size: 0.95rem;
            margin-bottom: 18px;
        }

        .persi-footer a {
            color: #b7c7b0;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .persi-footer a:hover {
            color: var(--brass-400);
        }

        .persi-footer .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            margin-top: 44px;
            padding: 20px 0;
            font-size: 0.82rem;
            color: #94a68d;
        }

        .footer-social {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: background 0.18s ease, transform 0.18s ease;
        }

        .footer-social:hover {
            background: var(--brass-500);
            color: var(--ink-900);
            transform: translateY(-3px);
        }

        /* Reveal */
        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Back to top */
        .back-to-top {
            position: fixed;
            right: 22px;
            bottom: 22px;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: var(--sage-800);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-md);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.25s ease;
            z-index: 1000;
            border: none;
        }

        .back-to-top.is-visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            background: var(--accent);
            color: var(--ink-900);
        }

        /* Chevron rotation animation for mobile dropdown */
        .dropdown-mobile .chevron-icon {
            transition: transform 0.25s ease;
        }

        .dropdown-mobile [aria-expanded="true"] .chevron-icon {
            transform: rotate(180deg);
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- Top Strip -->
    <div class="top-strip py-2 d-none d-md-block">
        <div class="container-persi d-flex justify-content-between align-items-center">
            <div class="d-flex gap-4">
                <a href="#"><i class="bi bi-envelope"></i> persi_jateng@yahoo.co.id</a>
                <a href="#"><i class="bi bi-telephone"></i> (024)-8453713</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span>Perhimpunan Rumah Sakit Seluruh Indonesia</span>
                <span class="opacity-50">|</span>
                <a href="#">Portal Anggota</a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="persi-navbar navbar navbar-expand-lg sticky-top py-2" id="persiNavbar">
        <div class="container-persi">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <div>
                    <img src="{{ asset('img/persi-logo.png') }}" alt="Logo PERSI Jateng" width="44" height="44"
                        style="border-radius:12px;">
                </div>
                <span class="d-flex flex-column">
                    <span class="navbar-brand-title">PERSI JATENG</span>
                    <span class="navbar-brand-sub">Wilayah Jawa Tengah</span>
                </span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#persiOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-flex">
                <ul class="navbar-nav mx-auto gap-1">
                    <li class="nav-item"><a
                            class="nav-link persi-nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link persi-nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Tentang Kami</a>
                        <ul class="dropdown-menu shadow border-0" style="border-radius:14px;">
                            <li><a class="dropdown-item py-2" href="{{ route('home') }}#visi-misi">Visi &amp; Misi</a>
                            </li>
                            <li><a class="dropdown-item py-2" href="{{ route('home') }}#struktur-organisasi">Struktur
                                    Pengurus</a></li>
                            <li><a class="dropdown-item py-2" href="#">AD-ART Persi Jateng</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link persi-nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Informasi</a>
                        <ul class="dropdown-menu shadow border-0" style="border-radius:14px;">
                            <li><a class="dropdown-item py-2" href="#">Berita</a></li>
                            <li><a class="dropdown-item py-2" href="#">Agenda</a></li>
                            <li><a class="dropdown-item py-2" href="#">Informasi Penting</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a
                            class="nav-link persi-nav-link {{ request()->routeIs('rs-anggota.*') ? 'active' : '' }}"
                            href="{{ route('rs-anggota.index') }}">RS Anggota</a></li>
                    <li class="nav-item"><a class="nav-link persi-nav-link" href="#">E-Library</a></li>
                    <li class="nav-item"><a class="nav-link persi-nav-link" href="#">Kontak</a></li>
                </ul>
                <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-sm border-0"><i class="bi bi-search" style="font-size:1.2rem;"></i></button>
                    <a href="#" class="btn-persi btn-persi-primary">Portal Anggota</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Mobile -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="persiOffcanvas">
        <div class="offcanvas-header border-bottom">
            <span class="navbar-brand-title">PERSI Jateng</span>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column gap-1">
            <a class="persi-nav-link py-3 border-bottom" href="{{ route('home') }}">Beranda</a>

            <!-- Dropdown Tentang Kami (Mobile) -->
            <div class="dropdown-mobile border-bottom">
                <a class="persi-nav-link py-3 d-flex justify-content-between align-items-center" href="#"
                    data-bs-toggle="collapse" data-bs-target="#mobileTentangKami" aria-expanded="false">
                    Tentang Kami
                    <i class="bi bi-chevron-down chevron-icon" style="transition:transform 0.25s ease;"></i>
                </a>
                <div class="collapse ps-3 pb-2" id="mobileTentangKami">
                    <a class="d-block py-2" href="#visi-misi"
                        style="color:var(--text-muted);text-decoration:none;font-size:0.9rem;">Visi &amp; Misi</a>
                    <a class="d-block py-2" href="#struktur-organisasi"
                        style="color:var(--text-muted);text-decoration:none;font-size:0.9rem;">Struktur Pengurus</a>
                    <a class="d-block py-2" href="#"
                        style="color:var(--text-muted);text-decoration:none;font-size:0.9rem;">AD-ART Persi Jateng</a>
                </div>
            </div>

            <!-- Dropdown Informasi (Mobile) -->
            <div class="dropdown-mobile border-bottom">
                <a class="persi-nav-link py-3 d-flex justify-content-between align-items-center" href="#"
                    data-bs-toggle="collapse" data-bs-target="#mobileInformasi" aria-expanded="false">
                    Informasi
                    <i class="bi bi-chevron-down chevron-icon" style="transition:transform 0.25s ease;"></i>
                </a>
                <div class="collapse ps-3 pb-2" id="mobileInformasi">
                    <a class="d-block py-2" href="#"
                        style="color:var(--text-muted);text-decoration:none;font-size:0.9rem;">Berita</a>
                    <a class="d-block py-2" href="#"
                        style="color:var(--text-muted);text-decoration:none;font-size:0.9rem;">Agenda</a>
                    <a class="d-block py-2" href="#"
                        style="color:var(--text-muted);text-decoration:none;font-size:0.9rem;">Informasi Penting</a>
                </div>
            </div>

            <a class="persi-nav-link py-3 border-bottom" href="#">RS Anggota</a>
            <a class="persi-nav-link py-3 border-bottom" href="#">E-Library</a>
            <a class="persi-nav-link py-3 border-bottom" href="#">Kontak</a>
            <a href="#" class="btn-persi btn-persi-primary mt-3 justify-content-center">Portal Anggota</a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="persi-footer" style="background:var(--sage-900);color:#cfdac9;padding-top:64px;">
        <div class="container-persi">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div>
                            <img src="{{ asset('img/persi-logo.png') }}" alt="Logo PERSI Jateng" width="44"
                                height="44" style="border-radius:12px;">
                        </div>
                        <span class="font-display fw-bold text-white fs-5">PERSI Jateng</span>
                    </div>
                    <p style="font-size:0.9rem;max-width:38ch;">Perhimpunan Rumah Sakit Seluruh Indonesia Wilayah Jawa
                        Tengah — mitra strategis rumah sakit dalam mewujudkan pelayanan kesehatan yang aman, bermutu,
                        dan terjangkau.</p>
                    <div class="d-flex gap-2 mt-4">
                        <a href="https://www.instagram.com/persiwilayahjateng/" class="footer-social"
                            style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;color:#fff;transition:background 0.18s ease,transform 0.18s ease;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="footer-social"
                            style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;color:#fff;transition:background 0.18s ease,transform 0.18s ease;">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="#" class="footer-social"
                            style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;color:#fff;transition:background 0.18s ease,transform 0.18s ease;">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h5 style="color:#fff;font-family:var(--font-display);font-size:0.95rem;margin-bottom:18px;">
                        Organisasi</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#visi-misi" style="color:#b7c7b0;text-decoration:none;font-size:0.9rem;">Visi
                                &amp;
                                Misi</a></li>
                        <li><a href="#struktur-organisasi"
                                style="color:#b7c7b0;text-decoration:none;font-size:0.9rem;">Pengurus</a></li>
                        <li><a href="#" style="color:#b7c7b0;text-decoration:none;font-size:0.9rem;">RS
                                Anggota</a></li>
                        <li><a href="#" style="color:#b7c7b0;text-decoration:none;font-size:0.9rem;">Sejarah</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h5 style="color:#fff;font-family:var(--font-display);font-size:0.95rem;margin-bottom:18px;">
                        Layanan</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#" style="color:#b7c7b0;text-decoration:none;font-size:0.9rem;">Agenda</a>
                        </li>
                        <li><a href="#" style="color:#b7c7b0;text-decoration:none;font-size:0.9rem;">Formulir
                                Layanan</a></li>
                        <li><a href="#"
                                style="color:#b7c7b0;text-decoration:none;font-size:0.9rem;">E-Library</a></li>
                        <li><a href="#"
                                style="color:#b7c7b0;text-decoration:none;font-size:0.9rem;">Regulasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 style="color:#fff;font-family:var(--font-display);font-size:0.95rem;margin-bottom:18px;">
                        Sekretariat</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2" style="font-size:0.9rem;">
                        <li class="d-flex gap-2"><i class="bi bi-geo-alt mt-1"></i> RSUP Dr. Kariadi Jl. DR. Sutomo
                            No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244</li>
                        <li class="d-flex gap-2"><i class="bi bi-envelope mt-1"></i> persi_jateng@yahoo.co.id
                        </li>
                        <li class="d-flex gap-2"><i class="bi bi-telephone mt-1"></i> (024)-8453713</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom d-flex flex-wrap justify-content-between gap-2"
                style="border-top:1px solid rgba(255,255,255,0.08);margin-top:44px;padding:20px 0;font-size:0.82rem;color:#94a68d;">
                <span>&copy; {{ date('Y') }} PERSI Wilayah Jawa Tengah. Seluruh hak cipta dilindungi.</span>
                <span class="d-flex gap-3"><a href="#" style="color:#94a68d;text-decoration:none;">Kebijakan
                        Privasi</a><a href="#" style="color:#94a68d;text-decoration:none;">Syarat &amp;
                        Ketentuan</a></span>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button id="backToTop" class="back-to-top" aria-label="Kembali ke atas"
        style="position:fixed;right:22px;bottom:22px;width:46px;height:46px;border-radius:50%;background:var(--sage-800);color:#fff;border:none;box-shadow:var(--shadow-md);opacity:0;visibility:hidden;transform:translateY(10px);transition:all 0.25s ease;z-index:1000;">
        <i class="bi bi-chevron-up" style="font-size:1.4rem;"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        /**
         * PERSI Jateng — Landing Page Interactions
         */
        (function() {
            'use strict';

            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            // Navbar shadow
            const navbar = document.getElementById('persiNavbar');
            const backToTop = document.getElementById('backToTop');

            function onScroll() {
                const scrolled = window.scrollY > 12;
                if (navbar) navbar.classList.toggle('is-scrolled', scrolled);
                if (backToTop) backToTop.classList.toggle('is-visible', window.scrollY > 480);
            }
            document.addEventListener('scroll', onScroll, {
                passive: true
            });
            onScroll();

            if (backToTop) {
                backToTop.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: prefersReducedMotion ? 'auto' : 'smooth'
                    });
                });
            }

            // Reveal
            const revealEls = document.querySelectorAll('.reveal');
            if (prefersReducedMotion) {
                revealEls.forEach((el) => el.classList.add('is-visible'));
            } else if ('IntersectionObserver' in window) {
                const revealObserver = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                const delay = entry.target.getAttribute('data-reveal-delay') || 0;
                                setTimeout(() => entry.target.classList.add('is-visible'), Number(delay));
                                revealObserver.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.15,
                        rootMargin: '0px 0px -40px 0px'
                    }
                );
                revealEls.forEach((el) => revealObserver.observe(el));
            } else {
                revealEls.forEach((el) => el.classList.add('is-visible'));
            }

            // Counter animation
            const counters = document.querySelectorAll('[data-counter]');

            function animateCounter(el) {
                const target = parseInt(el.getAttribute('data-counter-to'), 10) || 0;
                if (prefersReducedMotion) {
                    el.textContent = target;
                    return;
                }
                const duration = 1400;
                const start = performance.now();
                const startVal = 0;

                function tick(now) {
                    const progress = Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    const value = Math.round(startVal + (target - startVal) * eased);
                    el.textContent = value;
                    if (progress < 1) requestAnimationFrame(tick);
                    else el.textContent = target;
                }
                requestAnimationFrame(tick);
            }

            if ('IntersectionObserver' in window && counters.length) {
                const counterObserver = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                animateCounter(entry.target);
                                counterObserver.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.5
                    }
                );
                counters.forEach((el) => counterObserver.observe(el));
            }

            // Close mobile offcanvas
            document.querySelectorAll('#persiOffcanvas a').forEach((link) => {
                link.addEventListener('click', () => {
                    const offcanvasEl = document.getElementById('persiOffcanvas');
                    if (window.bootstrap && offcanvasEl) {
                        const instance = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);
                        instance.hide();
                    }
                });
            });
        })();
    </script>

    @stack('scripts')
</body>

</html>
