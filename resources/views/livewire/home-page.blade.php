<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <!-- Hero Section with Slideshow -->
    <section class="relative h-screen bg-black">
        <!-- Slides -->
        @foreach($slides as $index => $slide)
            <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out {{ $currentSlide === $index ? 'opacity-100' : 'opacity-0' }}"
                 style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset($slide['image']) }}'); background-size: cover; background-position: center;">
                <div class="flex items-center justify-center h-full">
                    <div class="text-center max-w-3xl px-4">
                        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 animate-slide-down">{{ $slide['title'] }}</h1>
                        <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up">{{ $slide['subtitle'] }}</p>
                        <div class="animate-fade-in">
                            <a href="{{ route('contact') }}" class="btn-primary mr-4">Get Started</a>
                            <a href="{{ route('about') }}" class="btn-secondary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Slide Navigation Controls -->
        <div class="absolute bottom-10 left-0 right-0 flex justify-center space-x-3">
            @foreach($slides as $index => $slide)
                <button wire:click="setSlide({{ $index }})" 
                        class="w-3 h-3 rounded-full transition-all {{ $currentSlide === $index ? 'bg-kibo-gold w-6' : 'bg-gray-400 hover:bg-gray-300' }}">
                </button>
            @endforeach
        </div>

        <!-- Arrow Controls -->
        <button wire:click="prevSlide" class="absolute left-5 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white p-3 rounded-full transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>


        </section>

    <!-- Services Section -->
    <!-- Services Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="section-title animate-on-scroll">Our Services</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto animate-on-scroll">
                        We deliver comprehensive construction and civil engineering services to transform your visions into reality.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md transition-transform hover:-translate-y-2 animate-on-scroll">
                        <div class="bg-kibo-blue rounded-full w-16 h-16 flex items-center justify-center mb-6 text-white">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Building Construction</h3>
                        <p class="text-gray-600 mb-4">
                            Expert planning and execution of residential, commercial, and industrial building projects.
                        </p>
                        <a href="{{ route('services') }}" class="text-kibo-blue font-medium hover:underline">Learn More →</a>
                    </div>
                    
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md transition-transform hover:-translate-y-2 animate-on-scroll">
                        <div class="bg-kibo-blue rounded-full w-16 h-16 flex items-center justify-center mb-6 text-white">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Renovation & Refreshment</h3>
                        <p class="text-gray-600 mb-4">
                            Upgrading existing structures with quality finishes and modern design solutions.
                        </p>
                        <a href="{{ route('services') }}" class="text-kibo-blue font-medium hover:underline">Learn More →</a>
                    </div>
                    
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md transition-transform hover:-translate-y-2 animate-on-scroll">
                        <div class="bg-kibo-blue rounded-full w-16 h-16 flex items-center justify-center mb-6 text-white">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Civil Infrastructure</h3>
                        <p class="text-gray-600 mb-4">
                            Design and development of roads, bridges, and public utilities that stand the test of time.
                        </p>
                        <a href="{{ route('services') }}" class="text-kibo-blue font-medium hover:underline">Learn More →</a>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <a href="{{ route('services') }}" class="btn-primary animate-on-scroll">View All Services</a>
                </div>
            </div>
        </section>




     
        <!-- About Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="relative">
                            <img src="{{ asset('/image/ima.jpg') }}" alt="About Kibo Capital" class="rounded-lg shadow-lg w-full animate-on-scroll">
                            <div class="absolute -bottom-6 -right-6 bg-kibo-gold text-white p-6 rounded-lg shadow-lg animate-on-scroll">
                                <div class="text-4xl font-bold">25+</div>
                                <div class="text-sm">Years of Excellence</div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h2 class="section-title animate-on-scroll">About Kibo Capital Limited</h2>
                        <p class="text-lg text-gray-600 mb-6 animate-on-scroll">
                            At Kibo Capital Limited, we’re more than just a contractor – we’re your partners in civil and building engineering excellence. With over 25 years of experience, we’ve delivered high-quality residential, commercial, and infrastructure projects across both public and private sectors.
                        </p>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex items-start animate-on-scroll">
                                <div class="bg-kibo-blue rounded-full w-10 h-10 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Comprehensive Construction Services</h3>
                                    <p class="text-gray-600">End-to-end management of building projects, from initial design through final handover.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start animate-on-scroll">
                                <div class="bg-kibo-blue rounded-full w-10 h-10 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Innovative Engineering Solutions</h3>
                                    <p class="text-gray-600">We apply cutting-edge techniques and materials to deliver cost-effective, sustainable infrastructure.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start animate-on-scroll">
                                <div class="bg-kibo-blue rounded-full w-10 h-10 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Safety & Quality Assurance</h3>
                                    <p class="text-gray-600">Our commitment to the highest safety standards and craftsmanship ensures every project exceeds expectations.</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{ route('about') }}" class="btn-primary animate-on-scroll">Discover Our Journey</a>
                    </div>
                </div>
            </div>
        </section>




      
<!-- Testimonials Section -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="section-title animate-on-scroll">What Our Clients Say</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto animate-on-scroll">
        Hear from our satisfied clients about their experience partnering with Kibo Capital Limited.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="bg-gray-50 p-8 rounded-lg shadow-md animate-on-scroll">
        <div class="flex items-center mb-4 space-x-1 text-kibo-gold">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 mb-6">
          "Kibo Capital delivered our office complex ahead of schedule without compromising quality. Their professionalism and attention to detail are unmatched."
        </p>
        <div class="flex items-center">
          <img src="{{ asset('/profile/5856.jpg') }}" alt="Eng. Michael Nyerere" class="w-12 h-12 rounded-full mr-4">
          <div>
            <h4 class="font-semibold">Eng. Michael Nyerere</h4>
            <p class="text-sm text-gray-500">Project Manager, Tanzania Revenue Authority</p>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-gray-50 p-8 rounded-lg shadow-md animate-on-scroll">
        <div class="flex items-center mb-4 space-x-1 text-kibo-gold">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 mb-6">
          "Their expertise in civil infrastructure transformed our highway expansion project. We highly recommend Kibo Capital for any large-scale engineering works."
        </p>
        <div class="flex items-center">
          <img src="{{ asset('/profile/5856.jpg') }}" alt="John Mwinyi" class="w-12 h-12 rounded-full mr-4">
          <div>
            <h4 class="font-semibold">Mr. John Mwinyi</h4>
            <p class="text-sm text-gray-500">Director, City Roads Authority</p>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-gray-50 p-8 rounded-lg shadow-md animate-on-scroll">
        <div class="flex items-center mb-4 space-x-1 text-kibo-gold">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 mb-6">
          "From initial design through final handover, Kibo Capital exceeded our expectations. Their commitment to safety and transparent communication made the process seamless."
        </p>
        <div class="flex items-center">
          <img src="{{ asset('/profile/5856.jpg') }}" alt="Amina Faraji" class="w-12 h-12 rounded-full mr-4">
          <div>
            <h4 class="font-semibold">Ms. Amina Faraji</h4>
            <p class="text-sm text-gray-500">CEO, Alpha Properties Ltd.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
</div>
