<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{
    public function index()
    {
        // Data Agenda berdasarkan PDF
        $agenda = [
            'seminar' => [
                [
                    'hari' => 'Kamis, 20 Agustus 2026',
                    'waktu' => '07.30 - 12.30 WIB',
                    'ruang' => 'Ballroom Rama Shinta',
                    'tema' => 'Seminar I: "Masa depan Pendanaan Kesehatan: Pemerintah versus Swasta"',
                    'subtema' => [
                        'Tantangan pembiayaan pelayanan pasien JKN masa kini dan mendatang - dr. Mahesa Paranadipa Maikel, M.H., MARS (Anggota DJSN)',
                        'Masa depan pembiayaan pasien asuransi dengan adanya KAPJ - Iwan Pasila, S.Si, M.Sc (Deputi Komisioner OJK)',
                        'Best Practice Ketahanan Finansial RS dengan Optimalisasi Pembiayaan JKN - Dr. dr. Anita Widi Hastuti, Sp.THT-BKL., M.H., M.A.R.S., FRSPH., FISQua (Direktur RS PKU Muhammadiyah Gombong)',
                        'Best Practice Ketahanan Finansial RS dengan Optimalisasi Pembiayaan Non-JKN - Octdy Hendrawan Wulantara (Chief Strategy Officer PT UNISIA Medika Farma)'
                    ]
                ],
                [
                    'hari' => 'Jumat, 21 Agustus 2026',
                    'waktu' => '08.30 - 16.00 WIB',
                    'ruang' => 'Ballroom Rama Shinta',
                    'tema' => 'Seminar II: "Strategy Digitalisasi dalam Smart Hospital"',
                    'subtema' => [
                        'Digitalisasi dalam Membangun Ketahanan Finansial - dr. M Lutfan Lazuardi, MKes, PhD (Kepala Departemen HPM FK-KMK UGM)',
                        'Mentransformasikan Humas dan AI Marketing Rumah Sakit Menjadi Revenue dan Trust Drive - Anjari Umarjianto SKom, SH, MARS (Ketua Umum PERHUMASRI)',
                        'Digitalisasi & Integrasi Sistem Guna Mendukung Patient Experience yang Optimal - dr. Alice Sutedjo Lisa, MKM (Direktur RS SMC Telogorejo Semarang)',
                        'Mengakselerasi Mutu Pelayanan melalui Penggunaan Digitalisasi dan Teknologi Kecerdasan Buatan (AI) - Dr. dr. Kinik Darsono, M.Med.Ed, FISQua (Direktur RSUD Gemolong Sragen)',
                        'Implementasi Tim Tanggap Insiden Keamanan Siber di Rumah Sakit - Dr. Lukman Nul Hakim, S.E., M.M. (Direktur Keamanan Siber dan Sandi Pembangunan Manusia, BSSN)'
                    ]
                ],
                [
                    'hari' => 'Jumat, 21 Agustus 2026',
                    'waktu' => '14.00 - 16.00 WIB',
                    'ruang' => 'Ballroom Rama Shinta',
                    'tema' => 'Seminar III: "Mengoptimalkan Mutu Layanan untuk Memaksimalkan Patient Experience"',
                    'subtema' => [
                        'Strategi Memaksimalkan Patient Experience di Rumah Sakit - Dr. dr. Andreasta Meliala, M.Kes, MAS (Direktur Pusat Kebijakan dan Manajemen Kesehatan FKKMK UGM)',
                        'Mengembangkan Pelayanan Unggulan untuk Mendukung Ketahanan Finansial - dr. R. Danang Sananto Sasongko, M.M (Direktur RSUD KRT Setjonegoro Wonosobo)',
                        'Sharing Pengalaman dalam Implementasi Patient Experience di Rumah Sakit - dr. H. Rachim Dinata Marsidi, Sp.B., FINAC., M.Kes (Direktur Utama RS Hasan Sadikin Bandung)'
                    ]
                ],
                [
                    'hari' => 'Sabtu, 22 Agustus 2026',
                    'waktu' => '08.30 - 12.00 WIB',
                    'ruang' => 'Ballroom Rama Shinta',
                    'tema' => 'Seminar IV: "Digitalisasi, Kecerdasan Buatan dan Etik Rumah Sakit"',
                    'subtema' => [
                        'Peran Strategis MAKERSI dalam Mengawal RS Anggota PERSI Mengantisipasi Permasalahan Etik dan Hukum - Dr. dr. Cahyono Hadi, SH, Sp.OG (K) Supsp FER, MARS (Ketua MAKERSI Jawa Tengah)',
                        'Pemanfaatan Teknologi Digital dan Kecerdasan Buatan dalam Pelayanan dan Marketing RS Ditinjau dari Sisi Etik Rumah Sakit - Prof. Dr. drg. Jaka Kusnanta Wahyuntara, Sp.BM(K), SH, MH, CMC, FISQua (Ketua Kompartemen Hukum PERSI Jateng)',
                        'Penggunaan Kecerdasan Buatan dalam Meningkatkan Mutu Layanan Ditinjau dari Kacamata Hukum - Dr. dr. Setyo Trisnadi,SH, Sp.KF (Wakil Dekan 1 FK UDINUS Semarang)',
                        'Program Nasional: Pelaksanaan PPRA di Rumah Sakit - dr. Rudi Yuwono Raharjo, SpBA, Subsp.D.A(K), FIAPS (Ketua Tim PPRA RS Kariadi Semarang)'
                    ]
                ]
            ],
            'workshop' => [
                [
                    'hari' => 'Jumat, 21 Agustus 2026',
                    'waktu' => '08.00 - 16.00 WIB',
                    'ruang' => 'Ruang Srikandi (50 peserta)',
                    'tema' => 'Workshop I: "Optimalisasi Pendapatan RS Melalui Penggunaan AI dalam Manajemen Klaim Peserta BPJS Kesehatan"',
                    'subtema' => [
                        'Manajemen Klaim JKN dan Sharing RS Pengguna Program Medminutes - dr. Samsul Anwar, M.M. (Direktur RSUD dr. Soetrasno Rembang)',
                        'Peran AI dalam Manajemen Klaim JKN - Kemal Falatehan, B.Eng, M.Sc, MBA (Direktur PT Imperial Teknologi Indonesia)',
                        'Optimalisasi Pendapatan RS Melalui Program Medminutes - Choirunnisa Hapsari, B. ICT (Direktur MedMinutes)',
                        'Praktik Penggunaan Program Medminutes - Choirunnisa Hapsari, B. ICT (Direktur MedMinutes)'
                    ]
                ],
                [
                    'hari' => 'Jumat, 21 Agustus 2026',
                    'waktu' => '08.00 - 16.00 WIB',
                    'ruang' => 'Ruang Arimbi 1 (35 peserta)',
                    'tema' => 'Workshop II: "Penyusunan Unit Cost Pelayanan Pasien BPJS Kesehatan"',
                    'subtema' => [
                        'Konsep Dasar Unit Cost Pelayanan Pasien BPJS Kesehatan - dr. M. Asro Abdih Y., Sp.U, MBA (Direktur RS Muhammadiyah Lamongan)',
                        'Metode Perhitungan Unit Cost dan Pengelompokan Biaya - dr. M. Asro Abdih Y., Sp.U, MBA (Direktur RS Muhammadiyah Lamongan)',
                        'Simulasi Penyusunan Unit Cost Pasien BPJS Kesehatan - dr. M. Asro Abdih Y., Sp.U, MBA (Direktur RS Muhammadiyah Lamongan)',
                        'Evaluasi Hasil dan Penyusunan Rencana Tindak Lanjut - dr. M. Asro Abdih Y., Sp.U, MBA (Direktur RS Muhammadiyah Lamongan)'
                    ]
                ],
                [
                    'hari' => 'Jumat, 21 Agustus 2026',
                    'waktu' => '08.00 - 16.00 WIB',
                    'ruang' => 'Ruang Arimbi 2 (35 peserta)',
                    'tema' => 'Workshop III: "Peran PPA dalam Patient Experience"',
                    'subtema' => [
                        'PPA dan Konsep Patient Experience - Dr. dr. Andreasta Meliala, M.Kes, MAS (Direktur Pusat Kebijakan dan Manajemen Kesehatan FKKMK UGM)',
                        'Pengukuran Kualitas Pelayanan dan Kepuasan Pasien - dr. H. Rachim Dinata Marsidi, Sp.B, FINAC, M.Kes (Direktur Utama RS Hasan Sadikin Bandung)',
                        'Kolaborasi dan Transformasi Interprofessional PPA dalam Menciptakan Patient Experience - dr. H. Rachim Dinata Marsidi, Sp.B, FINAC, M.Kes',
                        'Tips dan Trik dalam Implementasi Patient Experience - dr. H. Rachim Dinata Marsidi, Sp.B, FINAC, M.Kes'
                    ]
                ],
                [
                    'hari' => 'Sabtu, 22 Agustus 2026',
                    'waktu' => '08.00 - 14.00 WIB',
                    'ruang' => 'Ruang Arimbi 1 (35 peserta)',
                    'tema' => 'Workshop IV: "Efisiensi Supply Chain Farmasi"',
                    'subtema' => [
                        'Strategi Pengadaan Obat & Alkes yang Tangguh dan Efisien - Yuliana Setyarini, S. Farm, Apt., M.K.M. (RS Kariadi Semarang)',
                        'Manajemen Stok & Forecasting Cerdas untuk Mencegah Kekosongan Obat dan Obat Expired - Yuliana Setyarini, S. Farm, Apt., M.K.M.',
                        'Sinkronisasi Klaim JKN: Mencegah Tekor Akibat Klaim Tertolak - Dr. Benny Purwanto, MARS (Presdir PT KSH)',
                        'Membangun SOP dan Sistem Digital untuk Supply Chain Farmasi yang Tahan Guncangan - Dr. Benny Purwanto, MARS'
                    ]
                ],
                [
                    'hari' => 'Sabtu, 22 Agustus 2026',
                    'waktu' => '08.00 - 14.00 WIB',
                    'ruang' => 'Ruang Arimbi 2 (35 peserta)',
                    'tema' => 'Workshop V: "Zero Harm Hospital: Strategi Pencegahan dan Penanganan Kejadian Sentinel oleh PPA"',
                    'subtema' => [
                        'Konsep Zero Harm Hospital dan Budaya Keselamatan Pasien - dr. Arjati W. Daud, MARS, FISQua, CERG, ORGP, QRMA, CGRCP',
                        'Investigasi dan Pelaporan Kejadian Sentinel serta Root Cause Analysis (RCA) - dr. Arjati W. Daud, MARS, FISQua, CERG, ORGP, QRMA, CGRCP',
                        'Manajemen Insiden Keselamatan Pasien dan Strategi Tindak Lanjut Pasca Sentinel - dr. Arjati W. Daud, MARS, FISQua, CERG, ORGP, QRMA, CGRCP',
                        'Optimalisasi Peran Komite Medis, Komite Keperawatan, dan Komite Tenaga Kesehatan pada Kasus Sentinel - dr. Arjati W. Daud, MARS, FISQua, CERG, ORGP, QRMA, CGRCP'
                    ]
                ],
                [
                    'hari' => 'Sabtu, 22 Agustus 2026',
                    'waktu' => '08.00 - 14.00 WIB',
                    'ruang' => 'Ruang Srikandi (50 peserta)',
                    'tema' => 'Workshop VI: "Clinical Pathway yang Cost Effective"',
                    'subtema' => [
                        'Bridging the Gap: Mentransformasikan Panduan Praktik Klinis/PPK menjadi Clinical Pathway yang Efisien - Dr. dr. Ediansyah, MARS, MM (Direktur RS An Nisa Tangerang)',
                        'Penerapan Formularium RS berbasis Cost-Effectiveness Analysis/CEA dalam Penyusunan Clinical Pathway - Dr. dr. Ediansyah, MARS, MM',
                        'Clinical Costing Mastery: Menghitung Unit Cost dan Menyelaraskan CP dengan Tarif INA-CBGs - Dr. dr. Ediansyah, MARS, MM',
                        'Smart Clinical Pathway: Integrasi CP ke dalam Rekam Medis Elektronik (RME) untuk Kendali Biaya Real-Time - Dr. dr. Ediansyah, MARS, MM'
                    ]
                ]
            ],
            'rapat_anggota' => [
                'hari' => 'Kamis, 20 Agustus 2026',
                'waktu' => '13.30 - 16.30 WIB',
                'ruang' => 'Ballroom Rama Shinta',
                'tema' => 'Rapat Anggota Tahunan: "Strategi Ketahanan dan Transformasi Rumah Sakit di Tengah Turbulensi dan Krisis Pembiayaan JKN"',
                'acara' => [
                    'Sambutan Ketua PERSI Jawa Tengah - Dr. drg. Edi Sumarwanto, MM, MH.Kes',
                    'Sambutan Ketua MAKERSI Jawa Tengah - Dr. dr. Cahyono Hadi, SH. SpOG subsp FER, MARS',
                    'Executive Sharing Session - Dirangkum dari usulan RS Anggota PERSI Jateng',
                    'Forum Strategis Direktur RS - Tanggapan/Usulan dari 6 Komisariat (Banyumas, Kedu, Pati, Pekalongan, Semarang, Surakarta)',
                    'Executive Summary - Rekomendasi untuk PERSI Pusat'
                ]
            ]
        ];

        return view('agenda.index', compact('agenda'));
    }

    public function undangan()
    {
        // Data undangan
        $undangan = [
            'judul' => 'UNDANGAN SEMINAR, WORKSHOP & RAPAT ANGGOTA',
            'tema' => 'TRANSFORMASI DAN KEBERLANJUTAN RUMAH SAKIT MENUJU TANGGUH FINANSIAL, UNGGUL PELAYANAN DAN SIAP DIGITAL',
            'tanggal' => 'Kamis – Sabtu, 20 – 22 Agustus 2026',
            'tempat' => 'PATRA Hotel & Convention Semarang',
            'alamat' => 'Jl. Sisingamangaraja, Semarang',
            'seminar' => [
                'tanggal' => '20 – 22 Agustus 2026',
                'kuota' => '350 peserta',
                'biaya' => 'Rp 2.500.000'
            ],
            'workshop' => [
                [
                    'nama' => 'Workshop I',
                    'tema' => 'Optimalisasi Pendapatan RS Melalui Penggunaan AI dalam Manajemen Klaim Peserta BPJS Kesehatan',
                    'tanggal' => '21 Agustus 2026',
                    'kuota' => '50 peserta',
                    'biaya' => 'Rp 1.100.000'
                ],
                [
                    'nama' => 'Workshop II',
                    'tema' => 'Penyusunan Unit Cost Pelayanan Pasien BPJS Kesehatan',
                    'tanggal' => '21 Agustus 2026',
                    'kuota' => '35 peserta',
                    'biaya' => 'Rp 1.100.000'
                ],
                [
                    'nama' => 'Workshop III',
                    'tema' => 'Peran PPA dalam Patient Experience',
                    'tanggal' => '21 Agustus 2026',
                    'kuota' => '35 peserta',
                    'biaya' => 'Rp 1.100.000'
                ],
                [
                    'nama' => 'Workshop IV',
                    'tema' => 'Efisiensi Supply Chain Farmasi',
                    'tanggal' => '22 Agustus 2026',
                    'kuota' => '35 peserta',
                    'biaya' => 'Rp 1.000.000'
                ],
                [
                    'nama' => 'Workshop V',
                    'tema' => 'Zero Harm Hospital: Strategi Pencegahan dan Penanganan Kejadian Sentinel oleh PPA',
                    'tanggal' => '22 Agustus 2026',
                    'kuota' => '35 peserta',
                    'biaya' => 'Rp 1.000.000'
                ],
                [
                    'nama' => 'Workshop VI',
                    'tema' => 'Clinical Pathway yang Cost Effective',
                    'tanggal' => '22 Agustus 2026',
                    'kuota' => '50 peserta',
                    'biaya' => 'Rp 1.000.000'
                ]
            ],
            'bank' => [
                'nama' => 'Bank Mandiri KCP RS Kariadi Semarang',
                'nomor' => '135 00 13367519',
                'atas_nama' => 'PERSI DAERAH JAWA TENGAH'
            ],
            'link_pendaftaran' => 'https://bit.ly/PertemuanTahunanPERSIITG2026',
            'kontak' => [
                ['nama' => 'Ambar Susanti, S.Sos', 'wa' => '+62 858-0903-2687'],
                ['nama' => 'Marina Kristiyanti, SE', 'wa' => '+62 817-373-033']
            ]
        ];

        return view('agenda.undangan', compact('undangan'));
    }

    public function streamPdf()
    {
        // $pdfPath = storage_path('public/pdf/241. FINAL UNDANGAN PESERTA SEMINAR, WORKSHOP & RAPAT ANGGOTA PD PERTEMUAN TAHUNAN PERSI WIL JATENG 2026 + Flyer.pdf');
        // // dd($pdfPath);

        // // if (!File::exists($pdfPath)) {
        // //     abort(404, 'File PDF tidak ditemukan. Pastikan file undangan sudah diupload ke storage/app/public/pdf/');
        // // }

        return view('agenda.streampdf', [
            'pdfUrl' => asset('/pdf/241. FINAL UNDANGAN PESERTA SEMINAR, WORKSHOP & RAPAT ANGGOTA PD PERTEMUAN TAHUNAN PERSI WIL JATENG 2026 + Flyer.pdf')
        ]);
    }
}
