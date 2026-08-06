<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSI Jawa Tengah</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/image.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/image.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* ==========================================================================
   PERSI JATENG — Design Tokens & Theme
   ========================================================================== */

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
</head>

<body>

    <!-- Top Strip -->
    <div class="top-strip py-2 d-none d-md-block">
        <div class="container-persi d-flex justify-content-between align-items-center">
            <div class="d-flex gap-4">
                <a href="#"><svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                        <path d="M4 6h16v12H4V6Zm0 0 8 7 8-7" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg> persi_jateng@yahoo.co.id</a>
                <a href="#"><svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8Z"
                            stroke="currentColor" stroke-width="1.6" />
                    </svg> (024)-8453713</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span>Perhimpunan Rumah Sakit Seluruh Indonesia</span><span class="opacity-50">|</span><a
                    href="#">Jawa Tengah</a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="persi-navbar navbar navbar-expand-lg sticky-top py-2" id="persiNavbar">
        <div class="container-persi">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <!-- Logo PERSI - Huruf P dengan gaya institutional -->
                <div class="">
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
                    <li class="nav-item"><a class="nav-link persi-nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link persi-nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Tentang Kami</a>
                        <ul class="dropdown-menu shadow border-0" style="border-radius:14px;">
                            <li><a class="dropdown-item py-2" href="#visi-misi">Visi &amp; Misi</a></li>
                            <li><a class="dropdown-item py-2" href="#struktur-organisasi">Struktur Pengurus</a></li>
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
                    <li class="nav-item"><a class="nav-link persi-nav-link" href="#">RS Anggota</a></li>
                    <li class="nav-item"><a class="nav-link persi-nav-link" href="#">E-Library</a></li>
                    <li class="nav-item"><a class="nav-link persi-nav-link" href="#">Kontak</a></li>
                </ul>
                <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-sm border-0"><svg width="19" height="19" viewBox="0 0 24 24"
                            fill="none">
                            <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2" />
                            <path d="m20 20-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg></button>
                    <a href="{{route('login')}}" class="btn-persi btn-persi-primary">Portal Anggota</a>
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
            <a class="persi-nav-link py-3 border-bottom" href="#">Beranda</a>

            <!-- Dropdown Tentang Kami (Mobile) -->
            <div class="dropdown-mobile border-bottom">
                <a class="persi-nav-link py-3 d-flex justify-content-between align-items-center" href=""
                    data-bs-toggle="collapse" data-bs-target="#mobileTentangKami" aria-expanded="false">
                    Tentang Kami
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="chevron-icon">
                        <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
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
                <a class="persi-nav-link py-3 d-flex justify-content-between align-items-center" href=""
                    data-bs-toggle="collapse" data-bs-target="#mobileInformasi" aria-expanded="false">
                    Informasi
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="chevron-icon">
                        <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
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

    <main>

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
                            <a href="{{route('login')}}" class="btn-persi btn-persi-primary">Bergabung Sebagai Anggota <svg
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
                            {{-- <div class="hero-badge-card">
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
                                        <rect x="3" y="5" width="18" height="16" rx="2"
                                            stroke="currentColor" stroke-width="1.8" />
                                        <path d="M3 10h18M8 3v4M16 3v4" stroke="currentColor" stroke-width="1.8"
                                            stroke-linecap="round" />
                                    </svg></div>
                                <h3 class="font-display">Agenda Kegiatan</h3>
                                <p>Jadwal rapat, seminar, dan kegiatan rutin PERSI Wilayah Jawa Tengah.</p>
                                <span class="arrow-link">Selanjutnya <svg width="15" height="15"
                                        viewBox="0 0 24 24" fill="none">
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
                                <span class="arrow-link">Selanjutnya <svg width="15" height="15"
                                        viewBox="0 0 24 24" fill="none">
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
                                        <path d="M4 19a2.5 2.5 0 0 1 2.5-2.5H20" stroke="currentColor"
                                            stroke-width="1.8" />
                                    </svg></div>
                                <h3 class="font-display">E-Library &amp; Materi</h3>
                                <p>Unduh materi FGD, regulasi, dan publikasi resmi PERSI Jawa Tengah.</p>
                                <span class="arrow-link">Selanjutnya <svg width="15" height="15"
                                        viewBox="0 0 24 24" fill="none">
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
        </section>

        <!-- VISI & MISI Section -->
        <section id="visi-misi" class="section-py bg-white">
            <div class="container-persi">
                <div class="text-center mb-5 reveal is-visible">
                    <span class="section-eyebrow">Visi &amp; Misi</span>
                    <h2 class="section-title font-display">Arah dan Tujuan PERSI Jawa Tengah</h2>
                </div>
                <div class="row g-4">
                    <!-- Visi -->
                    <div class="col-lg-5 reveal is-visible">
                        <div class="visi-card">
                            <div class="icon-badge"><svg width="28" height="28" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M12 2 3 6v6c0 5 3.8 9.4 9 10 5.2-.6 9-5 9-10V6l-9-4Z"
                                        stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                    <path d="M9 13l2 2 4-4" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></div>
                            <h3 class="font-display">Visi</h3>
                            <p style="font-size:1rem;color:var(--ink-900);font-weight:500;">PERSI sebagai organisasi
                                perumahsakitan yang handal dan mampu menjadi induk dan tumpuan bagi Rumah Sakit di Jawa
                                Tengah.</p>
                        </div>
                    </div>
                    <!-- Misi -->
                    <div class="col-lg-7 reveal is-visible">
                        <div class="visi-card">
                            <div class="icon-badge"><svg width="28" height="28" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M3 8l9-5 9 5-9 5-9-5Z" stroke="currentColor" stroke-width="1.8"
                                        stroke-linejoin="round" />
                                    <path d="M3 13v6l9 5 9-5v-6" stroke="currentColor" stroke-width="1.8"
                                        stroke-linejoin="round" />
                                    <path d="M3 8v6l9 5 9-5V8" stroke="currentColor" stroke-width="1.8"
                                        stroke-linejoin="round" />
                                </svg></div>
                            <h3 class="font-display">Misi</h3>
                            <ol style="padding-left:20px;margin-bottom:0;">
                                <li style="margin-bottom:8px;">Memperjuangkan kepentingan anggota PERSI yang terkait :
                                    Pemerintah, Swasta maupun Masyarakat</li>
                                <li style="margin-bottom:8px;">Membentuk dan mengembangkan networking antara anggota
                                    dengan teknologi informasi</li>
                                <li style="margin-bottom:8px;">Meningkatkan Profesionalisme dalam pengelolaan rumah
                                    sakit
                                    menuju masyarakat sehat</li>
                                <li style="margin-bottom:8px;">Melakukan analisis strategis yang meningkatkan mutu
                                    anggota PERSI dan saling menguntungkan</li>
                                <li style="margin-bottom:0;">Mendorong rumah sakit di Jawa Tengah dalam meningkatkan
                                    mutu hingga setaraf dengan Rumah Sakit di Asia Pasifik</li>
                            </ol>
                        </div>
                    </div>
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
                        </div>
                        <div class="org-card">
                            <div class="jabatan">Alat Kesehatan, Farmasi dan HTA</div>
                            <div class="nama">Ketua: drg. Erwita Dinarsari, MARS</div>
                            <div class="gelar">Sekretaris: dr. Alice Sutedjo Lisa, MKM</div>
                        </div>
                        <div class="org-card">
                            <div class="jabatan">Data, Informasi dan Transformasi Digital RS</div>
                            <div class="nama">Ketua: dr. Kelvin Kurniawan M.Kes</div>
                            <div class="gelar">Sekretaris: dr. Dyah Winastuti, M.Kes</div>
                        </div>
                        <div class="org-card">
                            <div class="jabatan">Humas dan Komunikasi Publik</div>
                            <div class="nama">Ketua: dr. Hilal Ariadi, M.Kes, FISQua</div>
                            <div class="gelar">Sekretaris: dr. Ivo Devi Kristyani, M.Si. Med., Sp.B, FINACS</div>
                        </div>
                        <div class="org-card">
                            <div class="jabatan">Penunjang Medis, Nonmedis dan Kesiapsiagaan Bencana</div>
                            <div class="nama">Ketua: Dr. dr. Mochamad Abdul Hakam, Sp.PD, FINASIM</div>
                            <div class="gelar">Sekretaris: Ns. Kurnia Yuliastuti, M.Kep</div>
                        </div>
                        <div class="org-card">
                            <div class="jabatan">Mutu, Keselamatan Pasien dan Tata Kelola RS</div>
                            <div class="nama">Ketua: dr. Yuswanti, MHSc, FISQua</div>
                            <div class="gelar">Sekretaris: dr. Sri Mulyani, Sp.A, M.Kes, FISQua</div>
                        </div>
                        <div class="org-card">
                            <div class="jabatan">Penelitian, Pengembangan dan Jejaring Strategis</div>
                            <div class="nama">Ketua: dr. Prihatin Iman Nugroho, Sp.P, M.Kes, FISR</div>
                            <div class="gelar">Sekretaris: dr. Santi Kristiani, Sp.PK</div>
                        </div>
                        <div class="org-card">
                            <div class="jabatan">SDM dan Pendidikan Berkelanjutan</div>
                            <div class="nama">Ketua: Ir. Vivi Vira Viridianti, M.Kes, DHM, MH, C.Med.Sp.Kes</div>
                            <div class="gelar">Sekretaris: drg. Kriswidiati, M.Kes</div>
                        </div>
                        <div class="org-card">
                            <div class="jabatan">Hukum, Advokasi, Mediasi dan Penguatan Organisasi</div>
                            <div class="nama">Ketua: KBP P Dr. drg. Jaka Kusnanta Wahyuntara, Sp.BMMF, Subsp.
                                TMF-TMJ(K), SH, MH, CMC CCD, FISQua</div>
                            <div class="gelar">Sekretaris: dr. Bianti Hastuti Machroes, MH, Sp.FM</div>
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
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 reveal is-visible">
                        <h4 class="org-section-title">Komisariat Eks-Karesidenan Kedu</h4>
                        <div class="org-card">
                            <div class="jabatan">Ketua</div>
                            <div class="nama">dr. Mohamad Riyatno, M.Kes</div>
                            <div class="gelar">Sekretaris: dr. Tolkha Amaruddin, M. Kes, Sp.THT-BKL., C.Med, Sp.Kes
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 reveal is-visible">
                        <h4 class="org-section-title">Komisariat Eks-Karesidenan Pati</h4>
                        <div class="org-card">
                            <div class="jabatan">Ketua</div>
                            <div class="nama">dr. Boedi Setiawan, MM</div>
                            <div class="gelar">Sekretaris: dr. Indah Rosiana, MARS, FISQua</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 reveal is-visible">
                        <h4 class="org-section-title">Komisariat Eks-Karesidenan Pekalongan</h4>
                        <div class="org-card">
                            <div class="jabatan">Ketua</div>
                            <div class="nama">dr. Bonis Edi Artoko, MPH</div>
                            <div class="gelar">Sekretaris: dr. Arief Darmawan, Sp.PD., MARS, C.Med.Sp.Kes, FISQua
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 reveal is-visible">
                        <h4 class="org-section-title">Komisariat Eks-Karesidenan Semarang</h4>
                        <div class="org-card">
                            <div class="jabatan">Ketua</div>
                            <div class="nama">dr. Agus Ujianto, M.Si.Med, Sp.B</div>
                            <div class="gelar">Sekretaris: dr. M. Arif Rida, M.M.R.</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 reveal is-visible">
                        <h4 class="org-section-title">Komisariat Eks-Karesidenan Surakarta</h4>
                        <div class="org-card">
                            <div class="jabatan">Ketua</div>
                            <div class="nama">dr. Arief Budiman, MSi.Med. Sp.B.MH. MARS, FINACS</div>
                            <div class="gelar">Sekretaris: Yunus, S.Kep.Ners., MARS., FISQua</div>
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
                                            <path d="M12 22s7-6.5 7-12a7 7 0 1 0-14 0c0 5.5 7 12 7 12Z"
                                                stroke="currentColor" stroke-width="1.8" />
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
                                style="color:#fff;border-color:rgba(255,255,255,0.35);">Hubungi Sekretariat</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="persi-footer">
        <div class="container-persi">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        {{-- <div
                            style="width:42px;height:42px;border-radius:12px;background:rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center;color:#fff;font-family:var(--font-display);font-weight:800;font-size:1.2rem;">
                            P</div> --}}
                            <img src="{{ asset('img/persi-logo.png') }}" alt="Logo PERSI Jateng" width="44" height="44"
                            style="border-radius:12px;">
                            <span class="font-display fw-bold text-white fs-5">PERSI JATENG</span>
                    </div>
                    <p style="font-size:0.9rem;max-width:38ch;">Perhimpunan Rumah Sakit Seluruh Indonesia Wilayah Jawa
                        Tengah — mitra strategis rumah sakit dalam mewujudkan pelayanan kesehatan yang aman, bermutu,
                        dan terjangkau.</p>
                    <div class="d-flex gap-2 mt-4">
                        <a href="#" class="footer-social"><svg width="16" height="16"
                                viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor"
                                    stroke-width="1.8" />
                                <circle cx="12" cy="12" r="4" stroke="currentColor"
                                    stroke-width="1.8" />
                                <circle cx="17.5" cy="6.5" r="1" fill="currentColor" />
                            </svg></a>
                        <a href="#" class="footer-social"><svg width="16" height="16"
                                viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="5" width="20" height="14" rx="4" stroke="currentColor"
                                    stroke-width="1.8" />
                                <path d="M10 9.5v5l4.5-2.5-4.5-2.5Z" fill="currentColor" />
                            </svg></a>
                        <a href="#" class="footer-social"><svg width="16" height="16"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M14 9h2V6h-2c-2 0-3.5 1.5-3.5 3.5V11H8v3h2.5v6h3v-6H16l.5-3h-3V9.7c0-.4.3-.7.5-.7Z"
                                    fill="currentColor" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>Organisasi</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#visi-misi">Visi &amp; Misi</a></li>
                        <li><a href="#struktur-organisasi">Pengurus</a></li>
                        <li><a href="#">RS Anggota</a></li>
                        <li><a href="#">AD-ART Persi Jateng</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>Layanan</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#">Agenda</a></li>
                        <li><a href="#">Formulir Layanan</a></li>
                        <li><a href="#">E-Library</a></li>
                        <li><a href="#">Regulasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Sekretariat</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2" style="font-size:0.9rem;">
                        <li class="d-flex gap-2"><svg width="16" height="16" viewBox="0 0 24 24"
                                fill="none" class="flex-shrink-0 mt-1">
                                <path d="M12 22s7-6.5 7-12a7 7 0 1 0-14 0c0 5.5 7 12 7 12Z" stroke="currentColor"
                                    stroke-width="1.6" />
                            </svg> RSUP Dr. Kariadi Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244</li>
                        <li class="d-flex gap-2"><svg width="16" height="16" viewBox="0 0 24 24"
                                fill="none" class="flex-shrink-0 mt-1">
                                <path d="M4 6h16v12H4V6Zm0 0 8 7 8-7" stroke="currentColor" stroke-width="1.6" />
                            </svg>  persi_jateng@yahoo.co.id</li>
                        <li class="d-flex gap-2"><svg width="16" height="16" viewBox="0 0 24 24"
                                fill="none" class="flex-shrink-0 mt-1">
                                <path
                                    d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8Z"
                                    stroke="currentColor" stroke-width="1.4" />
                            </svg> (024)-8453713</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom d-flex flex-wrap justify-content-between gap-2">
                <span>&copy; 2026 PERSI Wilayah Jawa Tengah. Seluruh hak cipta dilindungi.</span>
                <span class="d-flex gap-3"><a href="#">Kebijakan Privasi</a><a href="#">Syarat &amp;
                        Ketentuan</a></span>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button id="backToTop" class="back-to-top" aria-label="Kembali ke atas">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M12 19V5M5 12l7-7 7 7" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>

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

</body>

</html>
