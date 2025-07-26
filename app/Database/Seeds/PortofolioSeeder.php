<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time; // Untuk tanggal dan waktu

class PortofolioSeeder extends Seeder
{
    public function run()
    {
        // Mendapatkan instance dari tabel 'portofolio'
        $portofolioModel = new \App\Models\PortofolioModel();

        // Data dummy untuk 10 portofolio
        $data = [
            [
                'judul'     => 'Website E-commerce Modern',
                'deskripsi' => 'Pengembangan platform e-commerce responsif dengan fitur keranjang belanja, pembayaran online, dan manajemen produk.',
                'gambar'    => 'ecommerce_modern.jpg', // Ganti dengan nama file gambar yang relevan di public/uploads
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
            [
                'judul'     => 'Aplikasi Mobile Manajemen Proyek',
                'deskripsi' => 'Aplikasi mobile (Android & iOS) untuk memantau progres proyek, kolaborasi tim, dan alokasi tugas.',
                'gambar'    => 'mobile_project.jpg',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
            [
                'judul'     => 'Sistem Informasi Akademik',
                'deskripsi' => 'Sistem terintegrasi untuk pengelolaan data mahasiswa, jadwal kuliah, nilai, dan absensi di institusi pendidikan.',
                'gambar'    => 'sia_system.jpg',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
            [
                'judul'     => 'Dashboard Analitik Bisnis',
                'deskripsi' => 'Pembuatan dashboard interaktif untuk visualisasi data penjualan, tren pasar, dan metrik kinerja bisnis.',
                'gambar'    => 'business_dashboard.jpg',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
            [
                'judul'     => 'Website Profil Perusahaan Kreatif',
                'deskripsi' => 'Desain dan pengembangan website profil perusahaan dengan fokus pada estetika, user experience, dan branding.',
                'gambar'    => 'creative_profile.jpg',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
            [
                'judul'     => 'Portal Berita Online',
                'deskripsi' => 'Pembangunan portal berita dengan sistem manajemen konten (CMS) yang mudah digunakan dan fitur pencarian canggih.',
                'gambar'    => 'news_portal.jpg',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
            [
                'judul'     => 'Aplikasi Reservasi Hotel',
                'deskripsi' => 'Aplikasi web untuk reservasi kamar hotel, manajemen ketersediaan, dan integrasi pembayaran.',
                'gambar'    => 'hotel_reservation.jpg',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
            [
                'judul'     => 'Sistem Manajemen Inventori',
                'deskripsi' => 'Solusi software untuk melacak stok barang, mengelola pesanan, dan memprediksi kebutuhan inventori.',
                'gambar'    => 'inventory_system.jpg',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
            [
                'judul'     => 'Landing Page Kampanye Digital',
                'deskripsi' => 'Desain dan implementasi landing page yang dioptimalkan untuk konversi tinggi dalam kampanye pemasaran digital.',
                'gambar'    => 'landing_page.jpg',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
            [
                'judul'     => 'Integrasi API Layanan Keuangan',
                'deskripsi' => 'Pengembangan modul integrasi dengan berbagai API layanan keuangan untuk mempermudah transaksi dan pelaporan.',
                'gambar'    => 'finance_api.jpg',
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ],
        ];

        // Masukkan data ke tabel
        foreach ($data as $row) {
            $portofolioModel->insert($row);
        }

        $this->call('PortofolioSeeder'); // Memanggil seeder ini sendiri (opsional, bisa dihapus jika hanya ini yang dipanggil)
    }
}
