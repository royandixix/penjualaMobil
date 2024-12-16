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
                    Manajemen Mobil
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="block text-gray-700 font-medium hover:text-blue-500 hover:bg-gray-100 rounded p-2">
                    Pengguna
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="block text-gray-700 font-medium hover:text-blue-500 hover:bg-gray-100 rounded p-2">
                    Iklan Mobil
                </a>
            </li>
            <li class="mb-4">
                <a href="#" class="block text-gray-700 font-medium hover:text-blue-500 hover:bg-gray-100 rounded p-2">
                    Laporan dan Statistik
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
        <h2 class="text-2xl font-bold text-gray-700 mb-6">Edit Data Mobil</h2>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <form action="/mobil/update" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Kode Mobil</label>
                        <input type="text" name="kode_mobil" class="w-full border rounded-lg p-2" placeholder="Masukkan kode mobil">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Merek</label>
                        <input type="text" name="merek" class="w-full border rounded-lg p-2" placeholder="Masukkan merek mobil">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Mode</label>
                        <input type="text" name="mode" class="w-full border rounded-lg p-2" placeholder="Masukkan mode mobil">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Tahun</label>
                        <input type="number" name="tahun" class="w-full border rounded-lg p-2" placeholder="Masukkan tahun mobil">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Harga</label>
                        <input type="text" name="harga" class="w-full border rounded-lg p-2" placeholder="Masukkan harga mobil">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Status</label>
                        <select name="status" class="w-full border rounded-lg p-2">
                            <option value="Aktif">Aktif</option>
                            <option value="Nonaktif">Nonaktif</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end space-x-4">
                    <!-- Update Button -->
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
                        Update
                    </button>
                    <!-- Kembali Button (Redirect to Admin Dashboard) -->
                    <a href="/admin/dashboard" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 inline-block">
                        Kembali
                    </a>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection
