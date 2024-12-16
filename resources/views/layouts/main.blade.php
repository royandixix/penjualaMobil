<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Halaman Mobil')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }
        .card-hover:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    @include('layouts.partials.navbar')

    

    <!-- Konten Dinamis -->
    <div class="container mx-auto my-8 px-4">
        @yield('content')
    </div>

  
</body>
</html>
