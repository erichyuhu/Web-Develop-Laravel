<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function portfolio()
    {
        // 3 Data Dummy Portofolio
        $portfolios = [
            [
                'title' => 'Web Equipment Inventory', 
                'image' => 'images/invent.png', 
                'desc' => 'Aplikasi manajemen inventaris alat dengan fitur peminjaman barang dan penjadwalan ketersediaan stok.', 
                'tech' => 'PHP, Bootstrap, BAAS'
            ],
            [
                'title' => 'Android Countdown Timer', 
                'image' => 'images/timer.jpg', 
                'desc' => 'Aplikasi mobile untuk mengontrol timer LED jarak jauh yang dilengkapi dengan fitur manajemen preset waktu.', 
                'tech' => 'Kotlin, Android Studio',
                'crop' => true
            ],
            [
                'title' => 'Self-Hosted Home Server', 
                'image' => 'images/casa.png', 
                'desc' => 'Infrastruktur server mandiri menggunakan Btrfs RAID 1, layanan berbasis Docker, dan jaringan remote aman via Tailscale.', 
                'tech' => 'Ubuntu, CasaOS, Docker, Networking'
            ]
        ];

        return view('pages.portfolio', compact('portfolios'));
    }

    private function getblogs()
    {   
        return[
            [
            'id' => 1,
            'title' => 'Tips Tuning Akustik Ruangan Menggunakan Smaart v9',
            'date' => '15 Nov 2026',
            'category' => 'Audio Engineering',
            'summary' => 'Panduan dasar membaca fase dan magnitude untuk live sound.',
            'image' => 'images/smaart.png'
            ],
            [
            'id' => 2,
            'title' => 'Membangun Otomatisasi Workflow dengan n8n & Telegram',
            'date' => '02 Nov 2026',
            'category' => 'IT Infrastructure',
            'summary' => 'Cara menghubungkan trigger WhatsApp bot dengan notifikasi Telegram.', 'image' => 'images/n8n.png'
            ],
            [
            'id' => 3,
            'title' => 'Review: ASRock X870 Steel Legend WiFi untuk PC Build',
            'date' => '20 Okt 2026',
            'category' => 'Hardware',
            'summary' => 'Performa motherboard ini saat dipasangkan dengan AMD Ryzen 7 7800X3D.','image' => 'images/mobo.png'
            ],
            [
            'id' => 4,
            'title' => 'Menerapkan Arsitektur MVC pada Proyek Web',
            'date' => '10 Okt 2026',
            'category' => 'Web Development',
            'summary' => 'Pentingnya memisahkan logika data dan antarmuka dalam kerja tim.', 'image' => 'images/invent.png'
            ],
            [
            'id' => 5,
            'title' => 'Pentingnya Manajemen Jaringan menggunakan Ruijie Reyee',
            'date' => '01 Okt 2026',
            'category' => 'Networking',
            'summary' => 'Mengatur gateway dan VLAN untuk keamanan akses remote server.', 'image' => 'images/ruijie.png',
            ],
        ];
    }

    public function blog()
    {
        $blogs = $this->getBlogs();
        return view('pages.blog', compact('blogs'));
    }

    public function blogDetail($id)
    {
        $blog = collect($this->getBlogs())->firstWhere('id', (int) $id);

        if (!$blog) {
            abort(404);
        }

        return view('pages.blog_detail', compact('blog'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}