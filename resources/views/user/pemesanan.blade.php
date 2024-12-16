@extends('layouts.main')

@section('title', 'pemesanan')

@section('content')
    <div id="content" class="grid gap-6">
        @for ($i = 0; $i < 3; $i++)
            <div class="card-hover flex bg-white rounded-lg p-6 gap-4 shadow-lg transition-transform duration-300">
                <div class="w-1/3 h-40 bg-gray-300 rounded-lg hover:opacity-90 transition duration-300"></div>

                <div class="flex-1">
                    <p class="text-gray-700 leading-relaxed mb-4">
                        "Selamat datang di situs kami! Temukan berbagai pilihan mobil terbaik dengan kualitas unggul dan harga bersaing."
                    </p>
                    <div class="flex gap-3">
                        <button onclick="showToast('Beli Mobil')"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                            Beli
                        </button>
                        <button onclick="showToast('Detail Mobil')"
                            class="bg-yellow-400 text-gray-800 px-4 py-2 rounded hover:bg-yellow-500 transition duration-300">
                            Detail Mobil
                        </button>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <script>
        function showToast(message) {
            const toast = document.createElement('div');
            toast.textContent = message + " berhasil diklik!";
            toast.className = "fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-lg z-50 animate-bounce";
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        }
    </script>
@endsection
