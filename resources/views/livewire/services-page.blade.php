<div>
    {{-- Be like water. --}}

    <div>
    <!-- Hero Section -->
    <section class="relative pt-40 pb-20 bg-gradient-to-r from-kibo-dark to-kibo-blue text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        
        <!-- Animated shapes -->
        <div class="absolute top-1/4 left-5 w-24 h-24 bg-kibo-gold opacity-20 rounded-full mix-blend-overlay animate-pulse"></div>
        <div class="absolute bottom-1/4 right-10 w-32 h-32 bg-kibo-blue opacity-20 rounded-full mix-blend-overlay animate-pulse" style="animation-delay: 1s;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-slide-down">Our Services</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up leading-relaxed">
                    Comprehensive financial solutions tailored to your unique needs and goals.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">EXPERT SOLUTIONS</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Comprehensive Financial Services</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    At Kibo Capital, we provide a full spectrum of financial services designed to address your unique needs and help you achieve your most important goals.
                </p>
            </div>
            
            <!-- Service Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <div class="h-48 bg-gray-100 relative overflow-hidden">
                        <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" class="w-full h-auto rounded-lg shadow-lg">
                        <div class="absolute inset-0 bg-gradient-to-t from-kibo-dark to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="text-xl font-bold text-white">{{ $service['title'] }}</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">{{ $service['shortDescription'] }}</p>
                        <button wire:click="setActiveTab('{{ $service['id'] }}')" class="text-kibo-blue font-medium flex items-center transition-colors hover:text-kibo-gold">
                            Learn More
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Service Details Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">EXPLORE IN DEPTH</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Our Service Details</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    Discover the comprehensive features and benefits of our financial services designed to meet your unique needs.
                </p>
            </div>
            
            <!-- Service Tabs -->
            <div class="mb-8 border-b border-gray-200 animate-on-scroll">
                <div class="flex flex-wrap -mb-px overflow-x-auto">
                    @foreach($services as $service)
                    <button wire:click="setActiveTab('{{ $service['id'] }}')" class="inline-block py-4 px-4 md:px-6 text-sm md:text-base font-medium {{ $activeTab === $service['id'] ? 'text-kibo-blue border-b-2 border-kibo-blue' : 'text-gray-500 hover:text-kibo-dark hover:border-gray-300 border-b-2 border-transparent' }} transition-colors duration-200">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"></path>
                            </svg>
                            <span>{{ $service['title'] }}</span>
                        </div>
                    </button>
                    @endforeach
                </div>
            </div>
            
            <!-- Active Service Content -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center animate-on-scroll">
                <div class="lg:col-span-5">
                    <div class="relative">
                        <img src="{{ asset($activeService['image'] ?? '') }}" alt="{{ $activeService['title'] ?? 'Service' }}" class="w-full h-auto rounded-lg shadow-lg">
                        <div class="absolute -bottom-6 -right-6 bg-kibo-gold text-white p-5 rounded-lg shadow-lg hidden md:block">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $activeService['icon'] ?? '' }}"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-7">
                    <h3 class="text-3xl font-bold text-kibo-dark mb-4">{{ $activeService['title'] ?? 'Service Details' }}</h3>
                    <p class="text-gray-600 mb-6">{{ $activeService['description'] ?? 'Service description' }}</p>
                    
                    <div class="space-y-4 mb-8">
                        @if(isset($activeService['features']))
                            @foreach($activeService['features'] as $feature)
                            <div class="flex items-start">
                                <div class="bg-kibo-blue rounded-full w-6 h-6 flex items-center justify-center text-white mt-1 mr-3 flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-kibo-dark mb-1">{{ $feature['title'] }}</h4>
                                    <p class="text-gray-600">{{ $feature['description'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    
                    <a href="{{ route('contact') }}" class="btn-primary">{{ $activeService['cta'] ?? 'Contact Us' }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">HOW WE WORK</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Our Service Process</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    We follow a structured approach to ensure we deliver exceptional financial solutions tailored to your unique needs.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($process as $step)
                <div class="relative bg-gray-50 rounded-lg p-8 shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <div class="absolute -top-5 -left-5 bg-kibo-blue text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold shadow-lg">
                        {{ $step['number'] }}
                    </div>
                    <h4 class="text-xl font-semibold text-kibo-dark mb-4 mt-4">{{ $step['title'] }}</h4>
                    <p class="text-gray-600">{{ $step['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">COMMON QUESTIONS</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Frequently Asked Questions</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    Find answers to common questions about our services and approach to financial management.
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto" x-data="{ openFaq: null }">
                <div class="space-y-6">
                    @foreach($faqs as $index => $faq)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden animate-on-scroll" x-data="{ id: {{ $index }} }">
                        <button 
                            @click="openFaq === id ? openFaq = null : openFaq = id" 
                            class="flex justify-between items-center w-full p-6 text-left"
                        >
                            <h4 class="text-lg font-semibold text-kibo-dark">{{ $faq['question'] }}</h4>
                            <svg 
                                class="w-6 h-6 text-kibo-blue transition-transform duration-200" 
                                :class="{'rotate-180': openFaq === id}"
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div 
                            x-show="openFaq === id" 
                            x-transition:enter="transition ease-out duration-200" 
                            x-transition:enter-start="opacity-0 transform -translate-y-4" 
                            x-transition:enter-end="opacity-100 transform translate-y-0" 
                            x-transition:leave="transition ease-in duration-150" 
                            x-transition:leave-start="opacity-100 transform translate-y-0" 
                            x-transition:leave-end="opacity-0 transform -translate-y-4" 
                            class="px-6 pb-6"
                        >
                            <p class="text-gray-600">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-kibo-dark text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                    <div class="lg:col-span-2">
                        <h2 class="text-3xl font-bold mb-4 animate-on-scroll">Ready to Get Started?</h2>
                        <p class="text-xl text-gray-300 animate-on-scroll">
                            Contact us today to schedule a complimentary consultation with one of our financial advisors.
                        </p>
                    </div>
                    <div class="animate-on-scroll">
                        <a href="{{ route('contact') }}" class="inline-block w-full lg:w-auto text-center bg-kibo-gold hover:bg-opacity-90 text-white font-semibold px-8 py-4 rounded-md transition-colors">
                            Schedule a Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


</div>