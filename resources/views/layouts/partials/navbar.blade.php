<nav class="bg-white shadow-lg p-4 sticky top-0 z-20">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Judul Navbar -->
        <h1 class="text-2xl font-extrabold text-blue-600 flex items-center gap-2">
            🚗 <span>Selamat Datang</span>
        </h1>

        <!-- Link Navigasi dan Search -->
        <div class="flex items-center justify-end flex-grow gap-8 mr-16">
            <!-- Teks Menu -->
            <a href="#content" 
               class="text-gray-700 hover:text-blue-600 font-semibold transition-transform transform hover:scale-110 duration-300">
                Cari Mobil
            </a>
            <!-- Search Bar -->
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Cari mobil..." 
                    class="border border-gray-300 rounded-full py-1 px-4 pl-1 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-shadow duration-300"
                />
                <!-- Icon Search -->
                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        
                </div>
            </div>

            <!-- Teks Menu -->
            <a href="#footer" 
               class="text-gray-700 hover:text-blue-600 font-semibold transition-transform transform hover:scale-110 duration-300">
                Tentang Kami
            </a>
        </div>

        <!-- Tombol Login -->
        <a href="#login" 
           class="bg-blue-600 text-white px-4 py-1 rounded-full hover:bg-blue-500 font-semibold shadow-md transition-transform transform hover:scale-105 duration-300">
            Login Dulu
        </a>
    </div>
</nav>
