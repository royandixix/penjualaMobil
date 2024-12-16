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
        

        <!-- Sales Information -->
        <h2 class="text-2xl font-bold text-gray-700 mb-6">Sales Information</h2>
        <div class="grid grid-cols-4 gap-6 mb-8">
            <div class="p-4 bg-white rounded-lg shadow-lg text-center">
                <h3 class="text-gray-600">Total Pengguna</h3>
                <p class="text-3xl font-bold text-blue-500">10</p>
            </div>
            
            <div class="p-4 bg-white rounded-lg shadow-lg text-center">
                <h3 class="text-gray-600">Total Mobil Dibeli</h3>
                <p class="text-3xl font-bold text-blue-500">15</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-lg text-center">
                <h3 class="text-gray-600">Total Pembayaran</h3>
                <p class="text-gray-500">End Date</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-lg">
                <h3 class="text-gray-600 mb-2">End Date</h3>
                <input type="date" class="w-full border rounded-lg p-2" />
            </div>
        </div>
        

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <table class="w-full text-left">
                <!-- Add Data Button -->
        <div class="mb-6 text-right">
            <a href="/admin/tambah">
             <button class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">
                 Tambah Data@extends('layouts.main')

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
                         <!-- Sales Information -->
                         <h2 class="text-2xl font-bold text-gray-700 mb-6">Sales Information</h2>
                         <div class="grid grid-cols-4 gap-6 mb-8">
                             <div class="p-4 bg-white rounded-lg shadow-lg text-center">
                                 <h3 class="text-gray-600">Total Pengguna</h3>
                                 <p class="text-3xl font-bold text-blue-500">10</p>
                             </div>
                             <div class="p-4 bg-white rounded-lg shadow-lg text-center">
                                 <h3 class="text-gray-600">Total Mobil Dibeli</h3>
                                 <p class="text-3xl font-bold text-blue-500">15</p>
                             </div>
                             <div class="p-4 bg-white rounded-lg shadow-lg text-center">
                                 <h3 class="text-gray-600">Total Pembayaran</h3>
                                 <p class="text-gray-500">End Date</p>
                             </div>
                             <div class="p-4 bg-white rounded-lg shadow-lg">
                                 <h3 class="text-gray-600 mb-2">End Date</h3>
                                 <input type="date" class="w-full border rounded-lg p-2" />
                             </div>
                         </div>
                 
                         <!-- Add Data Button (aligned left) -->
                         <div class="mb-6 text-left">
                             <a href="/admin/tambah">
                                 <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                                     Tambah Data
                                 </button>
                             </a>
                         </div>
                 
                         <!-- Table -->
                         <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                             <table class="w-full text-left">
                                 <thead>
                                     <tr class="border-b bg-blue-50 text-gray-700">
                                         <th class="p-4">Kode Mobil</th>
                                         <th class="p-4">Merek</th>
                                         <th class="p-4">Mode</th>
                                         <th class="p-4">Tahun</th>
                                         <th class="p-4">Harga</th>
                                         <th class="p-4">Status</th>
                                         <th class="p-4">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @for ($i = 0; $i < 8; $i++)
                                     <tr class="border-b hover:bg-gray-50">
                                         <td class="p-4 text-blue-500">0815</td>
                                         <td class="p-4">Fortuner</td>
                                         <td class="p-4">Jacob Marcus</td>
                                         <td class="p-4">2023</td>
                                         <td class="p-4">Rp. 2.000.000.00</td>
                                         <td class="p-4">Aktif</td>
                                         <td class="p-4">
                                             <button class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600 mr-2">
                                                 Edit
                                             </button>
                                             <button class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-red-600">
                                                 Hapus
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
                 
             </button>
            </a>
         </div>
                <thead>
                    <tr class="border-b bg-blue-50 text-gray-700">
                        <th class="p-4">Kode Mobil</th>
                        <th class="p-4">Merek</th>
                        <th class="p-4">Mode</th>
                        <th class="p-4">Tahun</th>
                        <th class="p-4">Harga</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 8; $i++)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4 text-blue-500">0815</td>
                        <td class="p-4">Fortuner</td>
                        <td class="p-4">Jacob Marcus</td>
                        <td class="p-4">2023</td>
                        <td class="p-4">Rp. 2.000.000.00</td>
                        <td class="p-4">Aktif</td>
                        <td class="p-4">
                            <button class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600 mr-2">
                                Edit
                            </button>
                            <button class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">
                                Hapus
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
