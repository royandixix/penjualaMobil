<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    @vite('resources/css/app.css')
    @vite('resources/js/login.js')
</head>
<body class="bg-gradient-to-br from-blue-50 to-gray-200 flex items-center justify-center min-h-screen">

    <!-- Form Login -->
    <div class="bg-white p-8 rounded-xl shadow-2xl w-96 transform transition-all duration-300 hover:scale-105 hover:shadow-3xl">
        <h2 class="text-3xl font-bold mb-4 text-blue-600 text-center">Login User</h2>
        <p class="text-sm text-gray-500 mb-6 text-center">Selamat Datang Kembali</p>
        
        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Nama User</label>
                <input type="text" name="name" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none shadow-md transition duration-300 hover:shadow-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Alamat Email</label>
                <input type="email" name="email" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none shadow-md transition duration-300 hover:shadow-lg">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-1">Password</label>
                <input type="password" name="password" 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none shadow-md transition duration-300 hover:shadow-lg">
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" 
                    class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-5 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transform transition duration-300 hover:scale-105 shadow-lg">
                    Login
                </button>
                <button id="openModal" type="button" 
                    class="bg-gradient-to-r from-yellow-300 to-yellow-400 text-black px-5 py-2 rounded-lg hover:from-yellow-400 hover:to-yellow-500 transform transition duration-300 hover:scale-105 shadow-lg">
                    Registrasi
                </button>
            </div>
        </form>
    </div>

    <!-- Modal Registrasi -->
    <div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 hidden transition-opacity duration-300">
        <div class="bg-white p-8 rounded-lg shadow-2xl w-11/12 sm:w-96 transform scale-90 transition-all duration-300">
            <h2 class="text-2xl font-bold mb-4 text-blue-600 text-center">Registrasi User</h2>
            <button id="closeModal" 
                class="absolute top-3 right-3 text-gray-500 hover:text-red-500 transition text-2xl">✖</button>
            
            <form>
                <label class="block text-gray-700 mb-2 font-semibold">Username</label>
                <input type="text" 
                    class="w-full mb-4 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none shadow-md transition duration-300 hover:shadow-lg">

                <label class="block text-gray-700 mb-2 font-semibold">Email</label>
                <input type="email" 
                    class="w-full mb-4 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none shadow-md transition duration-300 hover:shadow-lg">

                <label class="block text-gray-700 mb-2 font-semibold">Nomor Telepon</label>
                <input type="tel" 
                    class="w-full mb-6 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none shadow-md transition duration-300 hover:shadow-lg">

                <button type="submit" 
                    class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white px-5 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transform transition duration-300 hover:scale-105 shadow-lg">
                    Registrasi
                </button>
            </form>
        </div>
    </div>

    <!-- JavaScript untuk Modal -->
    <script src="{{ asset('js/login') }}"></script>

</body>
</html>
