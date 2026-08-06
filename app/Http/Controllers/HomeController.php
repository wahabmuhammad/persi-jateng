<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        // Data untuk sambutan
        $sambutan = [
            'ketua_persi' => [
                'nama' => 'Dr. drg. Edi Sumarwanto, MM, MH.Kes',
                'jabatan' => 'Ketua PERSI Wilayah Jawa Tengah',
                'foto' => 'ketua-persi.jpg', // sesuaikan dengan nama file foto
                'sambutan' => 'Assalamu\'alaikum warahmatullahi wabarakatuh. Salam sejahtera bagi kita semua. Puji syukur ke hadirat Tuhan Yang Maha Esa, atas izin dan karunia-Nya, Website PERSI Jawa Tengah dapat diluncurkan sebagai media informasi dan komunikasi resmi organisasi di era digital. Website ini hadir sebagai wujud komitmen PERSI Jawa Tengah dalam membangun organisasi yang modern, transparan, dan responsif terhadap perkembangan zaman. Melalui platform ini, kami berharap seluruh rumah sakit anggota dapat dengan mudah mengakses informasi, berbagi pengetahuan, serta memperkuat kolaborasi dalam meningkatkan mutu pelayanan kesehatan di Jawa Tengah. Mari kita manfaatkan website ini sebagai sarana untuk saling belajar, berinovasi, dan bersama-sama mewujudkan rumah sakit yang aman, bermutu, dan berdaya saing. Selamat menggunakan Website PERSI Jawa Tengah, semoga bermanfaat bagi kita semua. Wassalamu\'alaikum warahmatullahi wabarakatuh.',
                'tanggal' => 'Semarang, 6 Agustus 2026'
            ],
            'ketua_makersi' => [
                'nama' => 'DR. dr. Cahyono Hadi, SpOG, Subsp FER, S.H, MARS',
                'jabatan' => 'Ketua MAKERSI Jawa Tengah',
                'foto' => 'ketua-makersi.jpg', // sesuaikan dengan nama file foto
                'sambutan' => 'Assalamu\'alaikum warahmatullahi wabarakatuh. Salam sejahtera bagi kita semua, MERDEKA! Yang saya hormati Ketua PERSI Jawa Tengah beserta seluruh jajaran pengurus, para pimpinan dan civitas hospitalia rumah sakit anggota PERSI Jawa Tengah, serta seluruh pengunjung website yang berbahagia. Pertama-tama marilah kita panjatkan puji syukur ke hadirat Tuhan Yang Maha Esa, karena atas limpahan rahmat-Nya kita dapat menyaksikan sebuah langkah penting dalam perjalanan PERSI Jawa Tengah, yaitu peluncuran Website PERSI Jawa Tengah sebagai media komunikasi dan pelayanan organisasi di era digital. Atas nama Majelis Kehormatan Etik Rumah Sakit (MAKERSI) Jawa Tengah, kami menyampaikan ucapan selamat dan apresiasi yang setinggi-tingginya kepada PERSI Jawa Tengah atas terwujudnya website ini. Semoga kehadirannya menjadi tonggak baru dalam membangun organisasi yang semakin modern, terbuka, responsif, dan bermanfaat bagi seluruh anggotanya maupun masyarakat luas.',
                'tanggal' => 'Semarang, 6 Agustus 2026'
            ]
        ];

        // Ambil data statistik rumah sakit
        $jsonPath = storage_path('public/data/rumah_sakit.json');
        $totalRS = 250;
        $totalKota = 42;

        if (File::exists($jsonPath)) {
            $jsonContent = File::get($jsonPath);
            $rumahSakit = json_decode($jsonContent, true);
            if (is_array($rumahSakit)) {
                $totalRS = count($rumahSakit);
                $kotaList = array_unique(array_column($rumahSakit, 'kota'));
                $totalKota = count($kotaList);
            }
        }

        return view('web.home', compact('sambutan', 'totalRS', 'totalKota'));
    }

    public function sambutanDetail($jenis)
    {
        $sambutan = [
            'ketua_persi' => [
                'nama' => 'Dr. drg. Edi Sumarwanto, MM, MH.Kes',
                'jabatan' => 'Ketua PERSI Wilayah Jawa Tengah',
                'foto' => 'foto_ketua_persi.jpeg',
                'title' => 'Sambutan Ketua PERSI Jawa Tengah',
                'subtitle' => 'Pada Peresmian Website PERSI Jawa Tengah',
                'tanggal' => 'Semarang, 6 Agustus 2026',
                'isi' => 'Assalamu’alaikum Warahmatullahi Wabarakatuh,

Salam Sejahtera bagi Kita Semua, Puji dan syukur senantiasa kita panjatkan ke hadirat Tuhan Yang Maha Esa, karena atas rahmat, karunia, dan izin-Nya, kita semua masih senantiasa diberikan kesehatan dan kekuatan untuk terus mengabdi pada dunia kesehatan di Indonesia.

Mengawali sapaan ini, atas nama pengurus Perhimpunan Rumah Sakit Seluruh Indonesia (PERSI) Wilayah Jawa Tengah, saya menyambut dengan rasa gembira, bangga, dan penuh rasa syukur atas aktifnya kembali website resmi PERSI. Kehadiran kembali portal digital ini bukanlah sekadar pelengkap administratif, melainkan sebuah lompatan strategis yang telah lama kita nantikan bersama untuk menjadikan platform ini sebagai pusat informasi perumahsakitan yang terpadu, andal, dan
responsif.

Bapak/Ibu pimpinan rumah sakit dan seluruh insan perumahsakitan yang saya banggakan, Kita semua sangat menyadari bahwa mengelola rumah sakit di era saat ini adalah sebuah tugas yang sangat menantang dan kompleks. Lanskap layanan kesehatan terus bergerak dinamis. Hampir setiap hari kita dihadapkan pada dinamika operasional yang membutuhkan pengambilan keputusan yang cepat dan tepat. Kita dihadapkan pada serangkaian regulasi baru dari pemerintah yang menuntut adaptasi sistemik secara terus-menerus. Di sisi lain, kita juga sama-sama merasakan bagaimana pola pembiayaan rumah sakit saat ini menjadi semakin sulit dan berliku.

Tantangan dalam mengelola arus kas (cash flow), menyesuaikan standar pelayanan operasional dengan penyesuaian pola tarif BPJS Kesehatan, hingga tuntutan untuk terus melakukan efisiensi tanpa mengorbankan mutu keselamatan pasien, adalah makanan kita sehari-hari. Berbagai tekanan ini sering kali membuat tata kelola rumah sakit menjadi sebuah uji ketahanan yang luar biasa bagi para direktur dan jajaran manajemen. 

Oleh karena itu, kita tidak bisa lagi berjalan sendiri-sendiri. Menghadapi tantangan yang masif ini, kita membutuhkan sinergi. Di sinilah letak urgensi dari reaktivasi website PERSI Jawa Tengah. Saya menaruh harapan yang sangat besar agar website ini dapat benar-benar dioptimalkan fungsinya
sebagai:
• Sarana Komunikasi dan Konsolidasi: Menjadi jembatan penghubung yang efektif antar-rumah sakit di seluruh penjuru Jawa Tengah, memfasilitasi pertukaran gagasan, dan mempererat solidaritas antar-anggota.
• Wadah Berbagi Pengalaman (Best Practices): Menjadi ruang bagi kita untuk saling berbagi strategi bertahan dan berkembang (survival and growth strategies). Pengalaman satu rumah sakit dalam mengelola efisiensi pembiayaan atau beradaptasi dengan sistem JKN, dapat menjadi pelajaran berharga bagi rumah sakit lainnya.
• Pusat Literasi dan Informasi Ilmiah: Melalui platform ini, berbagai literatur, pembaruan standar pelayanan medis, hingga pedoman tata kelola manajerial dapat diakses dengan mudah oleh seluruh anggota.
• Portal Publikasi Kegiatan: Menjadi papan informasi utama untuk menyebarluaskan agenda- agenda peningkatan kapasitas SDM, seperti informasi seminar, pelatihan, lokakarya (workshop), simposium, dan kegiatan ilmiah lainnya.
• Kanal Kajian Isu-isu Terkini: Menjadi media bagi kita untuk mendiskusikan isu-isu mutakhir perumahsakitan, baik di tingkat regional maupun nasional, sehingga PERSI Jawa Tengah dapat senantiasa hadir memberikan advokasi yang relevan bagi anggotanya.

Rekan-rekan sejawat sekalian, Di tengah badai perubahan regulasi dan sistem pembiayaan kesehatan, ketangguhan kita sedang diuji. Namun saya yakin, dengan kolaborasi, komunikasi yang terbuka, dan semangat untuk saling memajukan, tidak ada tantangan yang tidak bisa kita urai bersama. Saya mengajak seluruh pengurus, pimpinan rumah sakit, tenaga medis, tenaga kesehatan, serta seluruh elemen manajemen rumah sakit di Jawa Tengah untuk aktif memanfaatkan dan meramaikan website ini. Jadikan portal ini sebagai sarana interaktif yang hidup dan memberi manfaat nyata bagi operasional harian di tempat kita mengabdi.

Sebagai penutup, saya memanjatkan doa dan harapan besar, semoga PERSI bisa menjadi RUMAH BESAR kita bersama. Sebuah rumah yang hangat bagi para insan perumahsakitan untuk saling bernaung, saling menguatkan, belajar, tumbuh, dan berkembang menjadi semakin kuat demi mewujudkan pelayanan kesehatan yang paripurna dan berkeadilan bagi seluruh masyarakat Jawa
Tengah. 

Selamat datang di website PERSI. Mari melangkah bersama, bersinergi, dan terus berinovasi. Maju Terus Perumahsakitan Indonesia!

Wassalamu’alaikum Warahmatullahi Wabarakatuh.


Bandung, 6 Agustus 2026'
            ],
            'ketua_makersi' => [
                'nama' => 'DR. dr. Cahyono Hadi, SpOG, Subsp FER, S.H, MARS',
                'jabatan' => 'Ketua MAKERSI Jawa Tengah',
                'foto' => 'foto_ketua_makersi.jpeg',
                'title' => 'Sambutan Ketua Majelis Kehormatan Etik Rumah Sakit (MAKERSI) Jawa Tengah',
                'subtitle' => 'Pada Peresmian Website PERSI Jawa Tengah',
                'tanggal' => 'Semarang, 6 Agustus 2026',
                'isi' => 'Assalamu\'alaikum warahmatullahi wabarakatuh.

Salam sejahtera bagi kita semua,

MERDEKA!

Yang saya hormati Ketua PERSI Jawa Tengah beserta seluruh jajaran pengurus, para pimpinan dan civitas hospitalia rumah sakit anggota PERSI Jawa Tengah, serta seluruh pengunjung website yang berbahagia.

Pertama-tama marilah kita panjatkan puji syukur ke hadirat Tuhan Yang Maha Esa, karena atas limpahan rahmat-Nya kita dapat menyaksikan sebuah langkah penting dalam perjalanan PERSI Jawa Tengah, yaitu peluncuran Website PERSI Jawa Tengah sebagai media komunikasi dan pelayanan organisasi di era digital.

Atas nama Majelis Kehormatan Etik Rumah Sakit (MAKERSI) Jawa Tengah, kami menyampaikan ucapan selamat dan apresiasi yang setinggi-tingginya kepada PERSI Jawa Tengah atas terwujudnya website ini. Semoga kehadirannya menjadi tonggak baru dalam membangun organisasi yang semakin modern, terbuka, responsif, dan bermanfaat bagi seluruh anggotanya maupun masyarakat luas.

Di tengah perkembangan teknologi informasi yang sangat cepat, organisasi profesi dan organisasi rumah sakit tidak lagi cukup hanya mengandalkan komunikasi konvensional. Website harus menjadi pusat informasi, media edukasi, sarana koordinasi, ruang kolaborasi, sekaligus jembatan komunikasi antara PERSI Jawa Tengah dengan seluruh rumah sakit anggota, pemangku kepentingan, serta masyarakat.

Kami berharap website ini tidak hanya menyampaikan informasi organisasi, tetapi juga mampu menjadi sumber pengetahuan mengenai pelayanan rumah sakit, regulasi kesehatan, mutu pelayanan, keselamatan pasien, inovasi manajemen rumah sakit, hingga berbagai praktik baik (best practices) yang berkembang di Jawa Tengah.

Pengunjung web yang saya hormati,

Kita semua menyadari bahwa rumah sakit saat ini menghadapi tantangan yang jauh lebih kompleks dibandingkan sebelumnya. Kita memasuki era Litigious Society, ketika kesadaran masyarakat terhadap hak-haknya semakin tinggi dan setiap keputusan pelayanan kesehatan berpotensi menjadi perhatian publik maupun objek sengketa hukum. Di saat yang sama kita juga berada dalam era disrupsi digital, ketika kecerdasan buatan (Artificial Intelligence), digitalisasi pelayanan, rekam medis elektronik, telemedicine, dan berbagai inovasi teknologi menghadirkan peluang besar sekaligus tantangan etik yang tidak sederhana.

Belum lagi dinamika penyelenggaraan pelayanan kesehatan dalam era Jaminan Kesehatan Nasional (BPJS Kesehatan) yang menuntut rumah sakit mampu menjaga keseimbangan antara efisiensi, mutu pelayanan, keselamatan pasien, keberlanjutan finansial, serta kepatuhan terhadap etika dan regulasi.

Dalam situasi yang berubah cepat, tidak pasti dan penuh persaingan, etika rumah sakit tidak lagi menjadi pelengkap, melainkan fondasi tata kelola rumah sakit yang baik (Good Hospital Governance). Etika menjadi kompas yang menjaga agar setiap kebijakan, setiap keputusan, dan setiap inovasi teknologi tetap berorientasi pada nilai-nilai kemanusiaan, profesionalisme, keadilan, transparansi, serta penghormatan terhadap hak pasien.

Oleh karena itu, MAKERSI memandang bahwa Website PERSI Jawa Tengah memiliki potensi besar untuk menjadi ruang konsultasi, edukasi, dan berbagi pembelajaran mengenai etika rumah sakit. Kami berharap ke depan website ini dapat menyediakan kanal khusus yang memungkinkan rumah sakit anggota memperoleh informasi, referensi, maupun konsultasi terkait persoalan etik yang dihadapi dalam praktik pelayanan sehari-hari.

Dengan demikian, ketika muncul berbagai persoalan etik—baik terkait hubungan rumah sakit dengan pasien, tenaga kesehatan, perkembangan teknologi digital, kecerdasan buatan, tata kelola organisasi, maupun kebijakan pelayanan—rumah sakit memiliki ruang untuk berdiskusi, belajar, dan mencari solusi yang berlandaskan prinsip etik serta ketentuan peraturan perundang-undangan.

Kami percaya bahwa budaya etik tidak dibangun melalui sanksi semata, melainkan melalui komunikasi, edukasi, pendampingan, dan pembelajaran yang berkesinambungan. Website ini dapat menjadi salah satu instrumen penting untuk mewujudkan budaya tersebut.

Akhirnya, kami berharap Website PERSI Jawa Tengah terus berkembang menjadi platform digital yang hidup, dinamis, terpercaya, dan memberikan manfaat nyata bagi seluruh rumah sakit anggota serta masyarakat Jawa Tengah.

Mari kita jadikan transformasi digital bukan sekadar transformasi teknologi, tetapi juga transformasi nilai—membangun rumah sakit yang semakin profesional, berintegritas, beretika, adaptif terhadap perubahan, dan tetap menempatkan keselamatan serta martabat manusia sebagai tujuan utama pelayanan.

Selamat atas peluncuran Website PERSI Jawa Tengah.

"Di era perubahan dan persaingan, yang paling canggih bukanlah teknologi, melainkan kemampuan kita menjaga nilai-nilai etik di setiap keputusan pelayanan rumah sakit dengan mengacu pada keselamatan dan martabat pasien."

Semoga Tuhan yang Maha Esa senantiasa memberikan bimbingan dan keberkahan dalam setiap langkah pengabdian kita bagi pelayanan kesehatan Indonesia.

Wassalamu\'alaikum warahmatullahi wabarakatuh.'
            ]
        ];

        if (!isset($sambutan[$jenis])) {
            abort(404, 'Sambutan tidak ditemukan');
        }

        return view('web.sambutan-detail', ['data' => $sambutan[$jenis], 'jenis' => $jenis]);
    }
}
