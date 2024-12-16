@extends('layouts.main') 

@section('content')
<div class="flex justify-center min-h-screen bg-gray-100">
    <div class="max-w-4xl w-full bg-white rounded-lg shadow-lg p-8">
        <!-- Detail Mobil -->
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Detail Mobil</h2>

        <!-- Gambar Mobil -->
        <div class="mb-6">
            <!-- Use asset() to reference the image -->
            <img src="{{ asset('images/download.jpeg') }}" alt="Mobil Fortuner" class="w-full h-auto rounded-lg shadow-lg mb-4">
        </div>

        <!-- Info Mobil -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-600">Merek: Fortuner</h3>
            <p class="text-gray-500">Kode Mobil: 0815</p>
            <p class="text-gray-500">Model: Jacob Marcus</p>
            <p class="text-gray-500">Tahun: 2023</p>
            <p class="text-gray-500">Harga: Rp. 2.000.000.000</p>
            <p class="text-gray-500">Status: Aktif</p>
        </div>

        <!-- Tombol Logout -->
        <div class="mt-6 text-right">
            <a href="#" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-600">
                Logout
            </a>
        </div>
    </div>
</div>
@endsection
