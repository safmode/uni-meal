<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard - UniMeal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />
    <style>
        body { margin: 0; }
        .bg-soft-pink { background-color: #FFC0CB; }
        #heroPoster {
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }
        .opacity-0 { opacity: 0; }
        .translate-y-2 { transform: translateY(0.5rem); }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded m-4">
        {{ session('success') }}
    </div>
@endif

<!-- ✅ HEADER (centered) -->
<div class="bg-soft-pink shadow text-white">
    <header class="p-4 flex justify-between items-center max-w-screen-xl mx-auto">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/unimeal_logo.png') }}" alt="UniMeal Logo" class="h-10">
            <span class="text-white font-semibold">Welcome, {{ Auth::guard('student')->user()->name }}</span>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('orders.history') }}" class="bg-pink-600 hover:bg-pink-700 text-white font-semibold py-2 px-4 rounded">📦 Track My Orders</a>
            <form action="{{ route('logout') }}" method="POST">@csrf
                <button type="submit" class="bg-pink-600 hover:bg-pink-700 text-white font-semibold py-2 px-4 rounded">🚪 Logout</button>
            </form>
        </div>
    </header>
</div>

<!-- ✅ Full-width Responsive Hero Poster -->
<section class="relative w-full overflow-hidden">
    <img id="heroPoster"
         src="{{ asset('images/poster1.png') }}"
         alt="UniMeal Banner"
         class="w-full h-[50vh] object-cover transition-all duration-700 ease-in-out">

    <!-- Arrows -->
    <button onclick="prevSlide()" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white bg-pink-600 hover:bg-pink-700 p-2 rounded-full shadow z-10">&#10094;</button>
    <button onclick="nextSlide()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white bg-pink-600 hover:bg-pink-700 p-2 rounded-full shadow z-10">&#10095;</button>

    <!-- Dots -->
    <div class="absolute bottom-4 w-full flex justify-center gap-3">
        <div class="dot w-3 h-3 rounded-full bg-pink-300 hover:bg-pink-500 cursor-pointer transition" onclick="showSlide(0)" id="dot-0"></div>
        <div class="dot w-3 h-3 rounded-full bg-pink-300 hover:bg-pink-500 cursor-pointer transition" onclick="showSlide(1)" id="dot-1"></div>
        <div class="dot w-3 h-3 rounded-full bg-pink-300 hover:bg-pink-500 cursor-pointer transition" onclick="showSlide(2)" id="dot-2"></div>
    </div>
</section>

<!-- ✅ Popular Categories -->
<section class="mb-10 mt-6">
    <h2 class="text-2xl font-semibold mb-4 text-center text-pink-700">UniMeal Popular Categories 🤩</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 px-4">
        @foreach (['Drinks', 'Pizza', 'Mee', 'Nasi', 'Soup'] as $category)
            <div class="flex flex-col items-center bg-white p-4 rounded shadow border border-gray-200 transform hover:scale-105 hover:bg-pink-100 transition duration-300">
                <div class="w-20 h-20 mb-2">
                    <img src="{{ asset('images/categories/' . strtolower($category) . '.jpeg') }}"
                         alt="{{ $category }}"
                         class="w-full h-full object-cover rounded">
                </div>
                <span class="text-lg font-bold text-pink-700">{{ $category }}</span>
            </div>
        @endforeach
    </div>
</section>

<!-- ✅ Mahallah Section -->
<main class="p-6 max-w-screen-xl mx-auto">
    <h2 class="text-2xl font-semibold mb-4 text-center">Select Your Mahallah Cafeteria</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach (['Siddiq','Aminah','Ruqayyah','Halimah','Hafsa','Bilal'] as $mahallah)
            <a href="{{ url('/cafeteria/' . strtolower($mahallah)) }}"
               class="block bg-white p-4 rounded shadow border border-gray-200 text-center transform hover:scale-105 hover:bg-pink-50 transition duration-300">
                <img src="{{ asset('images/' . strtolower($mahallah) . '.png') }}"
                     alt="{{ $mahallah }} Logo"
                     class="mx-auto w-24 h-24 object-cover rounded mb-3">
                <h3 class="text-lg font-bold text-pink-700">{{ $mahallah }} Cafeteria</h3>
                <p class="text-sm text-gray-600">Order your meals here</p>
            </a>
        @endforeach
    </div>
</main>

<!-- ✅ Bottom Posters -->
<div class="w-full mt-6 max-w-screen-xl mx-auto">
    <img src="{{ asset('images/poster3.png') }}" class="w-full object-cover rounded mb-4" alt="Poster 3">
    <img src="{{ asset('images/poster5.png') }}" class="w-full object-cover rounded" alt="Poster 5">
</div>

<!-- ✅ JS for Hero Slideshow -->
<script>
    const heroPosters = [
        "{{ asset('images/poster1.png') }}",
        "{{ asset('images/poster2.png') }}",
        "{{ asset('images/poster8.png') }}"
    ];

    let current = 0;
    let timer;

    function showSlide(index) {
        clearInterval(timer);
        const img = document.getElementById('heroPoster');
        img.classList.add('opacity-0', 'translate-y-2');
        setTimeout(() => {
            img.src = heroPosters[index];
            img.classList.remove('opacity-0', 'translate-y-2');
            current = index;
            highlightDot();
            startSlideshow();
        }, 400);
    }

    function nextSlide() {
        showSlide((current + 1) % heroPosters.length);
    }

    function prevSlide() {
        showSlide((current - 1 + heroPosters.length) % heroPosters.length);
    }

    function highlightDot() {
        heroPosters.forEach((_, i) => {
            const dot = document.getElementById('dot-' + i);
            dot.classList.toggle('bg-pink-600', i === current);
            dot.classList.toggle('bg-pink-300', i !== current);
        });
    }

    function startSlideshow() {
        timer = setInterval(() => nextSlide(), 5000);
    }

    document.addEventListener("DOMContentLoaded", () => {
        highlightDot();
        startSlideshow();
    });
</script>

</body>
</html>
