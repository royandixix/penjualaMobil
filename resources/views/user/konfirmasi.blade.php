@extends('layouts.main')

@section('content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-lg">
        <div class="p-6">
            <h2 class="text-2xl font-semibold text-gray-700">Selamat Datang Admin</h2>
        </div>
        <ul class="mt-6">
            <li class="mb-4">
                <a href="#" class="block text-gray-700 font-medium hover:text-blue-500 hover:bg-gray-100 rounded p-2">
                    Konfirmasi Pembayaran
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="block text-gray-700 font-medium hover:text-blue-500 hover:bg-gray-100 rounded p-2">
                    Laporan Transaksi
                </a>
            </li>
            <li>
                <a href="#" class="block text-gray-700 font-medium hover:text-blue-500 hover:bg-gray-100 rounded p-2">
                    Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <!-- Title -->
        <h2 class="text-2xl font-bold text-gray-700 mb-6">Konfirmasi Pembayaran</h2>

        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <table class="w-full text-left border">
                <thead>
                    <tr class="bg-blue-50">
                        <th class="p-4 border">No</th>
                        <th class="p-4 border">Nama Pembeli</th>
                        <th class="p-4 border">Kode Transaksi</th>
                        <th class="p-4 border">Jumlah Pembayaran</th>
                        <th class="p-4 border">Status</th>
                        <th class="p-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 5; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 border">{{ $i }}</td>
                        <td class="p-4 border">Pembeli {{ $i }}</td>
                        <td class="p-4 border">TX00{{ $i }}</td>
                        <td class="p-4 border">Rp. 1.000.000</td>
                        <td class="p-4 border text-yellow-500">Menunggu Konfirmasi</td>
                        <td class="p-4 border">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                                Konfirmasi
                            </button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
