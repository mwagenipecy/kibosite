<div>
<div>
    <!-- Hero Section -->
    <section class="relative pt-40 pb-20 bg-gradient-to-r from-kibo-dark to-kibo-blue text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        
        <!-- Animated shapes -->
        <div class="absolute top-1/4 left-5 w-24 h-24 bg-kibo-gold opacity-20 rounded-full mix-blend-overlay animate-pulse"></div>
        <div class="absolute bottom-1/4 right-10 w-32 h-32 bg-kibo-blue opacity-20 rounded-full mix-blend-overlay animate-pulse" style="animation-delay: 1s;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-slide-down">Client Testimonials</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up leading-relaxed">
                    Hear directly from our clients about their experience working with Kibo Capital.
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Video Testimonials -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">CLIENT STORIES</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Featured Testimonials</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    Watch our clients share their experiences working with Kibo Capital and how our services have made a difference in their financial lives.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @foreach($featuredVideos as $testimonial)
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <div class="relative aspect-w-16 aspect-h-9">
                        <!-- In a real implementation, replace with actual video embed -->
                        <div class="bg-gray-200 w-full h-full flex items-center justify-center">
                            <div class="text-center p-4">
                                <div class="w-16 h-16 bg-kibo-blue rounded-full flex items-center justify-center mx-auto mb-2 text-white">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                </div>
                                <p class="text-gray-600">Video Testimonial</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold text-kibo-dark">{{ $testimonial['name'] }}</h4>
                                <p class="text-sm text-gray-600">{{ $testimonial['position'] }}</p>
                            </div>
                        </div>
                        <p class="text-gray-600 line-clamp-3 mb-4">{{ $testimonial['content'] }}</p>
                        <button wire:click="selectTestimonial({{ $testimonial['id'] }})" class="text-kibo-blue font-medium flex items-center hover:text-kibo-gold transition-colors">
                            Read Full Testimonial
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Client Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">CLIENT FEEDBACK</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">What Our Clients Say</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    Our clients' success is our greatest achievement. Here's what they have to say about working with Kibo Capital.
                </p>
            </div>
            
            <!-- Category Filters -->
            <div class="flex flex-wrap justify-center mb-12 animate-on-scroll">
                @foreach($categories as $key => $category)
                    <button 
                        wire:click="setActiveCategory('{{ $key }}')" 
                        class="px-6 py-2 m-1 rounded-full {{ $activeCategory === $key ? 'bg-kibo-blue text-white' : 'bg-white text-kibo-dark hover:bg-gray-100' }} transition-colors duration-200"
                    >
                        {{ $category }}
                    </button>
                @endforeach
            </div>
            
            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($filteredTestimonials as $testimonial)
                    <div class="bg-white rounded-lg shadow-md p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold text-kibo-dark">{{ $testimonial['name'] }}</h4>
                                <p class="text-sm text-gray-600">{{ $testimonial['position'] }}</p>
                                <p class="text-xs text-gray-500">{{ $testimonial['location'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= $testimonial['rating'] ? 'text-kibo-gold' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                        
                        <p class="text-gray-600 line-clamp-4 mb-4">{{ $testimonial['content'] }}</p>
                        
                        <button wire:click="selectTestimonial({{ $testimonial['id'] }})" class="text-kibo-blue font-medium flex items-center hover:text-kibo-gold transition-colors">
                            Read More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Selected Testimonial Modal -->
    <div 
        x-data="{ open: @entangle('selectedTestimonial').defer }" 
        x-show="open" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 overflow-y-auto" 
        style="display: none;"
    >
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div 
                x-show="open" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity" 
                aria-hidden="true"
            >
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Modal panel -->
            <div 
                x-show="open" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="inline-block w-full max-w-3xl my-8 overflow-hidden text-left align-middle transition-all transform bg-white rounded-lg shadow-xl"
            >
                @if($selectedTestimonial)
                <div class="relative">
                    <!-- Close button -->
                    <button 
                        @click="open = false" 
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 focus:outline-none"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    
                    <div class="p-6 sm:p-8">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center mb-6">
                            <img src="{{ asset($selectedTestimonial['image']) }}" alt="{{ $selectedTestimonial['name'] }}" class="w-16 h-16 rounded-full mr-4 mb-4 sm:mb-0">
                            <div>
                                <h3 class="text-xl font-bold text-kibo-dark">{{ $selectedTestimonial['name'] }}</h3>
                                <p class="text-kibo-blue">{{ $selectedTestimonial['position'] }}</p>
                                <p class="text-gray-600">{{ $selectedTestimonial['location'] }}</p>
                                
                                <div class="flex items-center mt-2">
                                    @for($i = 1; $i <= 5; $i++)
                                        <svg class="w-5 h-5 {{ $i <= $selectedTestimonial['rating'] ? 'text-kibo-gold' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        
                        @if($selectedTestimonial['videoId'])
                        <div class="mb-6 aspect-w-16 aspect-h-9 bg-gray-100 rounded-lg overflow-hidden">
                            <!-- In a real implementation, replace with actual video embed -->
                            <div class="flex items-center justify-center">
                                <div class="text-center p-4">
                                    <div class="w-16 h-16 bg-kibo-blue rounded-full flex items-center justify-center mx-auto mb-2 text-white">
                                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-600">Video Testimonial</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        <div class="prose max-w-none">
                            <blockquote class="text-lg text-gray-600 italic border-l-4 border-kibo-blue pl-4 py-2 mb-6">
                                "{{ $selectedTestimonial['content'] }}"
                            </blockquote>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h4 class="font-semibold text-kibo-dark mb-2">Services Utilized:</h4>
                            <span class="inline-block bg-kibo-blue bg-opacity-10 text-kibo-blue px-3 py-1 rounded-full text-sm font-medium">
                                {{ $categories[$selectedTestimonial['category']] }}
                            </span>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Client Satisfaction Stats -->
    <section class="py-16 bg-kibo-dark text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="animate-on-scroll">
                    <div class="text-4xl font-bold mb-2">97%</div>
                    <div class="text-lg text-gray-300">Client Satisfaction</div>
                </div>
                <div class="animate-on-scroll">
                    <div class="text-4xl font-bold mb-2">92%</div>
                    <div class="text-lg text-gray-300">Client Retention Rate</div>
                </div>
                <div class="animate-on-scroll">
                    <div class="text-4xl font-bold mb-2">500+</div>
                    <div class="text-lg text-gray-300">Satisfied Clients</div>
                </div>
                <div class="animate-on-scroll">
                    <div class="text-4xl font-bold mb-2">25+</div>
                    <div class="text-lg text-gray-300">Years of Excellence</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Experience the Kibo Capital Difference</h2>
                <p class="text-xl text-gray-600 mb-8 animate-on-scroll">
                    Join our satisfied clients and discover how our financial expertise can help you achieve your goals.
                </p>
                <div class="animate-on-scroll">
                    <a href="{{ route('contact') }}" class="inline-block bg-kibo-blue text-white font-semibold px-8 py-4 rounded-md hover:bg-opacity-90 transition-colors">
                        Schedule a Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

</div>
