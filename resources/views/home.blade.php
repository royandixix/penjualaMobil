@extends('layouts.main')

@section('content')
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-96 rounded-lg shadow-lg" style="background-image: url('images/download.jpeg');">
        <!-- Image as Background -->
        <img src="{{ asset('images/download.jpeg') }}" alt="Mobil Fortuner" class="w-full h-auto rounded-lg shadow-lg mb-4 hidden">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center rounded-lg">
            <div class="text-center text-white px-6">
                <h1 class="text-5xl font-bold mb-4">Selamat Datang di Dealer Mobil</h1>
                <p class="text-lg mb-6 max-w-2xl mx-auto">
                    Temukan mobil impian Anda dengan mudah, berkualitas, dan harga terbaik.
                </p>
                <a href="#mobil-terbaru" class="bg-yellow-400 text-gray-800 py-2 px-6 rounded-full font-semibold hover:bg-yellow-300 transition duration-300">
                    Lihat Mobil Terbaru
                </a>
            </div>
        </div>
    </section>

    <!-- Image and Text Section -->
    <div class="mt-8 flex flex-col lg:flex-row items-center lg:items-start">
        <!-- Image -->
        <div class="w-full lg:w-1/2 mb-6 lg:mb-0">
            <img src="{{ asset('images/download.jpeg') }}" alt="Mobil Fortuner" class="w-full h-auto rounded-lg shadow-lg mb-4">
        </div>

        <!-- Text -->
        <div class="w-full lg:w-1/2 lg:pl-8 text-left">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Sistem Informasi Dealer Mobil</h2>
            <p class="text-gray-600 mb-4">
                Sistem Informasi Dealer Mobil kami dirancang untuk memberikan kemudahan kepada pelanggan dalam mencari, memilih, dan membeli mobil impian mereka. Dengan antarmuka yang ramah pengguna, Anda dapat dengan cepat menemukan informasi tentang berbagai jenis mobil yang tersedia.
            </p>
            <p class="text-gray-600 mb-4">
                Fitur utama dari sistem kami mencakup:
            </p>
            <ul class="list-disc list-inside text-gray-600 mb-4">
                <li>Pencarian mobil berdasarkan merk, tipe, dan harga.</li>
                <li>Informasi detail spesifikasi setiap mobil.</li>
                <li>Fitur test drive online untuk memudahkan reservasi.</li>
                <li>Proses pembelian yang cepat dan transparan.</li>
                <li>Dukungan layanan pelanggan 24/7 untuk semua kebutuhan Anda.</li>
            </ul>
            <p class="text-gray-600 mb-4">
                Dengan sistem ini, kami berkomitmen untuk memberikan pengalaman pembelian yang terbaik dan terpercaya. Anda dapat dengan mudah mengakses informasi, membandingkan mobil, dan menentukan pilihan terbaik sesuai kebutuhan.
            </p>
            <p class="text-gray-600">
                Hubungi tim kami sekarang untuk mengetahui penawaran spesial atau memulai proses pembelian mobil impian Anda!
            </p>
            <!-- Login Button -->
            <div class="mt-6">
                <a href="/login">
                    <button class="bg-blue-600 text-white py-2 px-6 rounded-lg font-semibold hover:bg-blue-500 transition duration-300 shadow-lg">
                        Login Dulu
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
