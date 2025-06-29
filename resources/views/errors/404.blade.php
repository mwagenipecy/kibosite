{{-- resources/views/errors/404.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        .kibo-blue { color: #1e40af; }
        .kibo-light { color: #60a5fa; }
        .bg-kibo-blue { background-color: #1e40af; }
        .bg-kibo-light { background-color: #60a5fa; }
        .hover\:bg-kibo-blue:hover { background-color: #1e40af; }
        .hover\:text-kibo-blue:hover { color: #1e40af; }
        .border-kibo-blue { border-color: #1e40af; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex items-center justify-center">
    
    <!-- 404 Error Section -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        
        <!-- Animated 404 -->
        <div x-data="{ animate: false }" x-init="setTimeout(() => animate = true, 300)" class="mb-8">
            <h1 class="text-8xl md:text-9xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-kibo-blue to-kibo-light mb-4"
                :class="{ 'animate-bounce': animate }">
                404
            </h1>
        </div>

        <!-- Error Message -->
        <div class="mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Oops! Page Not Found
            </h2>
            <p class="text-lg md:text-xl text-gray-600 mb-6 max-w-2xl mx-auto">
                The page you're looking for doesn't exist. It might have been moved, deleted, or you entered the wrong URL.
            </p>
        </div>

        <!-- Illustration -->
        <div class="mb-8">
            <div class="w-64 h-64 mx-auto mb-6 relative">
                <svg viewBox="0 0 200 200" class="w-full h-full">
                    <!-- Background Circle -->
                    <circle cx="100" cy="100" r="90" fill="none" stroke="#e5e7eb" stroke-width="2"/>
                    
                    <!-- Animated Search Icon -->
                    <g x-data="{ rotate: 0 }" x-init="setInterval(() => rotate += 10, 100)">
                        <circle cx="80" cy="80" r="25" fill="none" stroke="#1e40af" stroke-width="3" :transform="`rotate(${rotate} 100 100)`"/>
                        <line x1="100" y1="100" x2="120" y2="120" stroke="#1e40af" stroke-width="3" stroke-linecap="round" :transform="`rotate(${rotate} 100 100)`"/>
                    </g>
                    
                    <!-- Question Mark -->
                    <text x="100" y="140" text-anchor="middle" class="text-2xl font-bold fill-gray-400">?</text>
                </svg>
            </div>
        </div>

        <!-- Navigation Options -->
        <div class="space-y-6">
            <!-- Primary Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('home') }}" 
                   class="bg-kibo-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-kibo-blue/90 transition-all duration-200 transform hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Go to Homepage
                </a>
                
                <button onclick="history.back()" 
                        class="border-2 border-kibo-blue text-kibo-blue px-8 py-3 rounded-lg font-semibold hover:bg-kibo-blue hover:text-white transition-all duration-200 transform hover:scale-105">
                    <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Go Back
                </button>
            </div>

            <!-- Quick Navigation -->
            <div class="pt-8 border-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Quick Navigation</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto">
                    <a href="{{ route('about') }}" 
                       class="p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200 hover:bg-kibo-blue/5 group">
                        <div class="text-kibo-blue group-hover:text-kibo-blue/80 mb-2">
                            <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-700 group-hover:text-kibo-blue">About</div>
                    </a>

                    <a href="{{ route('services') }}" 
                       class="p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200 hover:bg-kibo-blue/5 group">
                        <div class="text-kibo-blue group-hover:text-kibo-blue/80 mb-2">
                            <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-700 group-hover:text-kibo-blue">Services</div>
                    </a>

                    <a href="{{ route('portfolio') }}" 
                       class="p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200 hover:bg-kibo-blue/5 group">
                        <div class="text-kibo-blue group-hover:text-kibo-blue/80 mb-2">
                            <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-700 group-hover:text-kibo-blue">Portfolio</div>
                    </a>

                    <a href="{{ route('contact') }}" 
                       class="p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200 hover:bg-kibo-blue/5 group">
                        <div class="text-kibo-blue group-hover:text-kibo-blue/80 mb-2">
                            <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="text-sm font-medium text-gray-700 group-hover:text-kibo-blue">Contact</div>
                    </a>
                </div>
            </div>

            <!-- Search Section -->
            <div class="pt-8">
                <div class="max-w-md mx-auto">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Looking for something specific?</label>
                    <form action="{{ route('home') }}" method="GET" class="flex">
                        <input type="text" 
                               name="search" 
                               placeholder="Search our website..." 
                               class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-kibo-blue focus:border-kibo-blue">
                        <button type="submit" 
                                class="bg-kibo-blue text-white px-6 py-2 rounded-r-lg hover:bg-kibo-blue/90 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <p class="text-gray-500 text-sm">
                If you believe this is an error, please 
                <a href="{{ route('contact') }}" class="text-kibo-blue hover:underline font-medium">contact us</a>
                and we'll help you find what you're looking for.
            </p>
        </div>
    </div>

    <!-- Background Animation -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div x-data="{ 
            particles: Array.from({length: 20}, (_, i) => ({
                id: i,
                x: Math.random() * 100,
                y: Math.random() * 100,
                delay: Math.random() * 5
            }))
        }">
            <template x-for="particle in particles" :key="particle.id">
                <div class="absolute w-2 h-2 bg-kibo-blue/10 rounded-full animate-ping"
                     :style="`left: ${particle.x}%; top: ${particle.y}%; animation-delay: ${particle.delay}s`">
                </div>
            </template>
        </div>
    </div>

</body>
</html>