<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kibo Capital') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles

          <!-- Fonts -->
          <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased bg-gray-50">
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = window.pageYOffset > 50"
            :class="{ 'bg-white shadow-md': scrolled, 'bg-transparent': !scrolled }"
            class="fixed w-full z-50 transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                        <img class="h-12 w-auto" src="{{ asset('/logo/logo.png') }}" alt="Kibo Capital Logo">
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-kibo-dark hover:text-kibo-blue transition-colors duration-200 font-medium">Home</a>
                    <a href="{{ route('about') }}" class="text-kibo-dark hover:text-kibo-blue transition-colors duration-200 font-medium">About</a>
                    <a href="{{ route('services') }}" class="text-kibo-dark hover:text-kibo-blue transition-colors duration-200 font-medium">Services</a>
                    <a href="{{ route('portfolio') }}" class="text-kibo-dark hover:text-kibo-blue transition-colors duration-200 font-medium">Portfolio</a>
                    <a href="{{ route('team') }}" class="text-kibo-dark hover:text-kibo-blue transition-colors duration-200 font-medium">Team</a>
                    <a href="{{ route('testimonials') }}" class="text-kibo-dark hover:text-kibo-blue transition-colors duration-200 font-medium">Testimonials</a>
                    <a href="{{ route('blog') }}" class="text-kibo-dark hover:text-kibo-blue transition-colors duration-200 font-medium">Blog</a>
                    <a href="{{ route('contact') }}" class="btn-primary">Contact Us</a>
                </nav>
                
                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="open = !open" class="p-2 rounded-md text-kibo-dark hover:text-kibo-blue focus:outline-none">
                        <svg :class="{'hidden': open, 'block': !open}" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg :class="{'block': open, 'hidden': !open}" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="md:hidden bg-white shadow-lg rounded-b-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-kibo-dark hover:bg-kibo-light">Home</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-kibo-dark hover:bg-kibo-light">About</a>
                <a href="{{ route('services') }}" class="block px-3 py-2 rounded-md text-base font-medium text-kibo-dark hover:bg-kibo-light">Services</a>
                <a href="{{ route('portfolio') }}" class="block px-3 py-2 rounded-md text-base font-medium text-kibo-dark hover:bg-kibo-light">Portfolio</a>
                <a href="{{ route('team') }}" class="block px-3 py-2 rounded-md text-base font-medium text-kibo-dark hover:bg-kibo-light">Team</a>
                <a href="{{ route('testimonials') }}" class="block px-3 py-2 rounded-md text-base font-medium text-kibo-dark hover:bg-kibo-light">Testimonials</a>
                <a href="{{ route('blog') }}" class="block px-3 py-2 rounded-md text-base font-medium text-kibo-dark hover:bg-kibo-light">Blog</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium bg-kibo-blue text-white">Contact Us</a>
            </div>
        </div>
    </header>

    <main>
     @yield('main-section')
    </main>

    <footer class="bg-kibo-dark text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Logo & Description -->
            <div>
                <img class="h-12 w-auto mb-6" src="{{ asset('/logo/logo.png') }}" alt="Kibo Capital Limited Logo">
                <p class="text-gray-300 mb-6">
                    Kibo Capital Limited is a premier civil and building contractor, delivering high-quality construction and infrastructure projects with integrity, professionalism, and pride.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <!-- Facebook -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <!-- Twitter -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <!-- Instagram -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white transition-colors">Services</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Projects</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Our Services -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Our Services</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Building Construction</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Civil Infrastructure</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Renovation & Refurbishment</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Project Management</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Quality & Safety Assurance</a></li>
                </ul>
            </div>

            <!-- Contact Details -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="h-6 w-6 mr-2 text-kibo-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-gray-300">
                            Pamba / Sokoine Drive, Block No 106<br>
                            P.O. Box 76619, Dar es Salaam
                        </span>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-6 w-6 mr-2 text-kibo-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-gray-300">+255 768 091 176 | +255 22 211 0535</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-6 w-6 mr-2 text-kibo-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-gray-300">kibocapitallimited@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-12 pt-8 text-center">
            <p class="text-gray-300">&copy; {{ date('Y') }} Kibo Capital Limited. All rights reserved.</p>
        </div>
    </div>
</footer>


    @livewireScripts
    
    <script>
        // Intersection Observer for scroll animations
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>