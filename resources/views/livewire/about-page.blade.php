<div>
<div>
    <!-- Hero Section -->
    <section class="relative pt-40 pb-20 bg-gradient-to-r from-kibo-dark to-kibo-blue text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        
        <!-- Animated shapes -->
        <div class="absolute top-1/4 left-5 w-24 h-24 bg-kibo-gold opacity-20 rounded-full mix-blend-overlay animate-pulse"></div>
        <div class="absolute bottom-1/4 right-10 w-32 h-32 bg-kibo-blue opacity-20 rounded-full mix-blend-overlay animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/4 w-16 h-16 bg-white opacity-10 rounded-full mix-blend-overlay animate-pulse" style="animation-delay: 2s;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-slide-down">About Kibo Capital</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up leading-relaxed">
                    Your trusted partner in wealth management and investment solutions for over 25 years.
                </p>
                <div class="flex justify-center space-x-4 animate-fade-in">
                    <a href="#story" class="btn-secondary">Our Story</a>
                    <a href="#team" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-md hover:bg-white hover:text-kibo-dark transition-all">Meet Our Team</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach($stats as $stat)
                <div class="text-center animate-on-scroll">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-kibo-blue rounded-full text-white mb-4 shadow-lg transform transition-all duration-300 hover:scale-110">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-kibo-dark mb-1">{{ $stat['value'] }}</div>
                    <div class="text-gray-600">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <div class="mb-8 animate-on-scroll">
                        <h2 class="text-kibo-blue text-lg font-semibold mb-2">OUR MISSION</h2>
                        <h3 class="text-3xl font-bold text-kibo-dark mb-6">Building Financial Success Together</h3>
                        <p class="text-gray-600 mb-4">
                            At Kibo Capital, our mission is to empower our clients to achieve their financial goals through personalized investment strategies, innovative solutions, and unwavering commitment to their success.
                        </p>
                        <p class="text-gray-600">
                            We strive to build lasting relationships based on trust, transparency, and exceptional service, guiding our clients through every stage of their financial journey.
                        </p>
                    </div>
                    
                    <div class="animate-on-scroll">
                        <h2 class="text-kibo-blue text-lg font-semibold mb-2">OUR VISION</h2>
                        <h3 class="text-3xl font-bold text-kibo-dark mb-6">Setting New Standards in Wealth Management</h3>
                        <p class="text-gray-600">
                            We envision Kibo Capital as the premier wealth management firm, known for our client-centered approach, innovative investment strategies, and commitment to making a positive impact in the communities we serve.
                        </p>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2 animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('images/about/mission-vision.jpg') }}" alt="Kibo Capital Mission & Vision" class="rounded-lg shadow-xl w-full">
                        <div class="absolute -bottom-6 -right-6 bg-kibo-gold text-white p-6 rounded-lg shadow-lg">
                            <div class="text-4xl font-bold">25+</div>
                            <div class="text-sm">Years of Excellence</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section id="story" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">OUR JOURNEY</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">The Kibo Capital Story</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    From our humble beginnings to becoming a trusted name in investment management, our journey reflects our commitment to excellence and client success.
                </p>
            </div>
            
            <!-- Timeline -->
            <div class="relative">
                <!-- Vertical line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-kibo-blue"></div>
                
                <div class="space-y-12">
                    @foreach($milestones as $index => $milestone)
                    <div class="relative">
                        <!-- Dot -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 rounded-full bg-kibo-gold border-4 border-white shadow-lg"></div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                            <!-- Year -->
                            <div class="{{ $index % 2 == 0 ? 'md:text-right md:pr-16' : 'md:order-2 md:text-left md:pl-16' }} animate-on-scroll">
                                <div class="md:hidden text-kibo-blue font-bold text-2xl mb-2">{{ $milestone['year'] }}</div>
                                <div class="hidden md:block text-kibo-blue font-bold text-4xl">{{ $milestone['year'] }}</div>
                            </div>
                            
                            <!-- Content -->
                            <div class="{{ $index % 2 == 0 ? 'md:order-2 md:text-left md:pl-16' : 'md:text-right md:pr-16' }} animate-on-scroll">
                                <h4 class="text-xl font-semibold text-kibo-dark mb-2">{{ $milestone['title'] }}</h4>
                                <p class="text-gray-600">{{ $milestone['description'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">GUIDING PRINCIPLES</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Our Core Values</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    These fundamental principles guide our decisions, shape our culture, and define how we serve our clients.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <div class="bg-kibo-blue rounded-full w-16 h-16 flex items-center justify-center text-white mb-6 shadow-md">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-kibo-dark">Integrity</h3>
                    <p class="text-gray-600">
                        We adhere to the highest ethical standards, placing our clients' interests first and maintaining complete transparency in all interactions.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <div class="bg-kibo-blue rounded-full w-16 h-16 flex items-center justify-center text-white mb-6 shadow-md">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-kibo-dark">Excellence</h3>
                    <p class="text-gray-600">
                        We strive for excellence in everything we do, from investment strategies to client service, constantly raising the bar for ourselves.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <div class="bg-kibo-blue rounded-full w-16 h-16 flex items-center justify-center text-white mb-6 shadow-md">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-kibo-dark">Client Focus</h3>
                    <p class="text-gray-600">
                        We build lasting relationships with our clients, taking the time to understand their unique needs, goals, and financial aspirations.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <div class="bg-kibo-blue rounded-full w-16 h-16 flex items-center justify-center text-white mb-6 shadow-md">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-kibo-dark">Innovation</h3>
                    <p class="text-gray-600">
                        We embrace change and continuously seek innovative solutions to meet the evolving financial needs of our clients in a dynamic global economy.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <div class="bg-kibo-blue rounded-full w-16 h-16 flex items-center justify-center text-white mb-6 shadow-md">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-kibo-dark">Global Perspective</h3>
                    <p class="text-gray-600">
                        We maintain a global outlook, identifying investment opportunities across markets and asset classes worldwide to optimize portfolio performance.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md transform transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <div class="bg-kibo-blue rounded-full w-16 h-16 flex items-center justify-center text-white mb-6 shadow-md">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-kibo-dark">Community Impact</h3>
                    <p class="text-gray-600">
                        We believe in giving back to the communities where we live and work, supporting initiatives that create positive social change and sustainable development.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section id="team" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">THE EXPERTS</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Our Leadership Team</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    Meet the experienced professionals who guide our investment strategies and ensure exceptional service for our clients.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($team as $member)
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 hover:-translate-y-2 group animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}" class="w-full h-72 object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-kibo-dark to-transparent opacity-0 group-hover:opacity-70 transition-all duration-300"></div>
                        
                        <!-- Social media icons -->
                        <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                            <a href="{{ $member['linkedin'] }}" class="bg-white text-kibo-blue p-2 rounded-full hover:bg-kibo-blue hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <a href="{{ $member['twitter'] }}" class="bg-white text-kibo-blue p-2 rounded-full hover:bg-kibo-blue hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1 text-kibo-dark">{{ $member['name'] }}</h3>
                        <div class="text-kibo-blue font-medium mb-4">{{ $member['position'] }}</div>
                        <p class="text-gray-600">{{ $member['bio'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('team') }}" class="btn-primary animate-on-scroll">Meet Our Full Team</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">CLIENT EXPERIENCES</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">What Our Clients Say</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    Don't just take our word for it - hear directly from our clients about their experience working with Kibo Capital.
                </p>
            </div>
            
        <div class="swiper-container animate-on-scroll">
            <div class="swiper-wrapper">
                @foreach($testimonials as $testimonial)
                <div class="swiper-slide bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="text-lg font-semibold text-kibo-dark">{{ $testimonial['name'] }}</h4>
                            <div class="text-sm text-gray-600">{{ $testimonial['position'] }}</div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"{{ $testimonial['quote'] }}"</p>
                </div>
                @endforeach
            </div>
            <!-- Navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new Swiper('.swiper-container', {
                    loop: true,
                    autoplay: {
                        delay: 5000,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
            });
        </script>
        
        </div>
