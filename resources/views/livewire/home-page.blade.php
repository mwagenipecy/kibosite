 <!-- Hero Section with Enhanced Slideshow -->
 <div x-data="{ 
    currentSlide: 0, 
    totalSlides: {{ count($slides) }},
    autoSlide: true,
    slideInterval: null,
    startAutoSlide() {
        this.slideInterval = setInterval(() => {
            if (this.autoSlide) {
                this.nextSlide();
            }
        }, 5000);
    },
    stopAutoSlide() {
        this.autoSlide = false;
        clearInterval(this.slideInterval);
    },
    resumeAutoSlide() {
        this.autoSlide = true;
        this.startAutoSlide();
    },
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
    },
    prevSlide() {
        this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
    },
    setSlide(index) {
        this.currentSlide = index;
    }
}" 
x-init="startAutoSlide()" 
@mouseenter="stopAutoSlide()" 
@mouseleave="resumeAutoSlide()"
class="scroll-smooth">


 <section class="relative h-screen bg-black overflow-hidden">
        <!-- Slides Container -->
        <div class="relative h-full">
            @foreach($slides as $index => $slide)
                <div x-show="currentSlide === {{ $index }}"
                     x-transition:enter="transition-all duration-1000 ease-in-out"
                     x-transition:enter-start="opacity-0 scale-105"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition-all duration-1000 ease-in-out"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute inset-0 w-full h-full"
                     style="background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(30,58,138,0.6) 0%, rgba(0,0,0,0.7) 0%), url('{{ asset($slide['image']) }}'); background-size: cover; background-position: center; background-attachment: fixed;">
                    
                    <!-- Content -->
                    <div class="flex items-center justify-center h-full relative z-10">
                        <div class="text-center max-w-5xl px-4">
                            <div class="animate-slide-in-up">
                                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                                    <span class="bg-gradient-to-r from-white via-gray-200 to-kibo-gold bg-clip-text text-transparent">
                                        {{ $slide['title'] }}
                                    </span>
                                </h1>
                            </div>
                            
                            <div class="animate-slide-in-up animation-delay-300">
                                <p class="text-xl md:text-2xl lg:text-3xl text-gray-200 mb-8 font-light leading-relaxed max-w-4xl mx-auto">
                                    {{ $slide['subtitle'] }}
                                </p>
                            </div>
                            
                            <div class="animate-slide-in-up animation-delay-600 space-y-4 md:space-y-0 md:space-x-6 flex flex-col md:flex-row justify-center">
                                <a href="{{ route('contact') }}" 
                                   class="group relative overflow-hidden bg-kibo-blue hover:bg-kibo-blue/90 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                                    <span class="relative z-10">Get Started</span>
                                    <div class="absolute inset-0 bg-gradient-to-r from-kibo-gold to-kibo-blue opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                </a>
                                <a href="{{ route('about') }}" 
                                   class="group border-2 border-white text-white hover:bg-white hover:text-kibo-dark px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="absolute top-20 left-10 w-32 h-32 bg-kibo-gold/20 rounded-full blur-xl animate-float"></div>
                    <div class="absolute bottom-20 right-10 w-48 h-48 bg-kibo-blue/20 rounded-full blur-xl animate-float-delayed"></div>
                </div>
            @endforeach
        </div>

        <!-- Enhanced Navigation Controls -->
        <div class="absolute bottom-8 left-0 right-0 flex justify-center space-x-3 z-20">
            @foreach($slides as $index => $slide)
                <button @click="setSlide({{ $index }})" 
                        :class="currentSlide === {{ $index }} ? 'bg-kibo-gold w-8 h-3' : 'bg-white/50 hover:bg-white/70 w-3 h-3'"
                        class="rounded-full transition-all duration-300 backdrop-blur-sm">
                </button>
            @endforeach
        </div>

        <!-- Enhanced Arrow Controls -->
        <button @click="prevSlide()" 
                class="absolute left-6 top-1/2 transform -translate-y-1/2 bg-black/30 backdrop-blur-sm hover:bg-black/50 text-white p-4 rounded-full transition-all duration-300 group z-20">
            <svg class="w-6 h-6 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button @click="nextSlide()" 
                class="absolute right-6 top-1/2 transform -translate-y-1/2 bg-black/30 backdrop-blur-sm hover:bg-black/50 text-white p-4 rounded-full transition-all duration-300 group z-20">
            <svg class="w-6 h-6 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 animate-bounce z-20">
            <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
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
