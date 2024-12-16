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
        <h2 class="text-2xl font-bold text-gray-700 mb-6">Hubungi Penjual</h2>

        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <table class="w-full text-left border">
                <thead>
                    <tr class="bg-blue-50">
                        <th class="p-4 border">No</th>
                        <th class="p-4 border">Nama Penjual</th>
                        <th class="p-4 border">Nomor WhatsApp</th>
                        <th class="p-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 5; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 border">{{ $i }}</td>
                        <td class="p-4 border">Penjual {{ $i }}</td>
                        <td class="p-4 border">+62 812 3456 789</td>
                        <td class="p-4 border">
                            <a href="https://wa.me/628123456789" target="_blank" 
                                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                                Hubungi
                            </a>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
