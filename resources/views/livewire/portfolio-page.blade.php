<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}


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
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-slide-down">Our Portfolio</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up leading-relaxed">
                    Discover our flagship civil and building engineering projects across East Africa—delivered on time, on budget, and built to last.
                </p>
            </div>
        </div>
    </section>


    <!-- Investment Stats -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @foreach($investmentStats as $stat)
                <div class="animate-on-scroll">
                    <div class="text-4xl font-bold text-kibo-dark mb-2">{{ $stat['value'] }}</div>
                    <div class="text-gray-600">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Investment Philosophy -->
   
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="animate-on-scroll">
                        <div class="relative">
                            <img src="{{ asset('/service/im3.jpg') }}" alt="Construction Philosophy" class="rounded-lg shadow-xl">
                            
                            <div class="absolute -bottom-8 -right-8 bg-kibo-gold text-white p-6 rounded-lg shadow-lg hidden md:block">
                                <div class="text-4xl font-bold">25+</div>
                                <div class="text-sm">Years of Excellence</div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">OUR PHILOSOPHY</h2>
                        <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Construction Philosophy</h3>
                        
                        <p class="text-gray-600 mb-6 animate-on-scroll">
                            At Kibo Capital Limited, our construction approach combines meticulous planning with hands-on engineering expertise. We partner with clients from concept through completion to ensure every detail is executed to the highest standards.
                        </p>
                        
                        <p class="text-gray-600 mb-8 animate-on-scroll">
                            Specializing in civil and building projects across infrastructure, commercial, and residential sectors, we emphasize safety, quality, and sustainable practices. Our process is driven by proactive collaboration, rigorous quality control, and community impact.
                        </p>
                        
                        <div class="space-y-4 animate-on-scroll">
                            <div class="flex items-start">
                                <div class="bg-kibo-blue rounded-full w-10 h-10 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg text-kibo-dark mb-1">Quality & Craftsmanship</h4>
                                    <p class="text-gray-600">We enforce strict quality controls and leverage skilled craftsmanship to deliver durable, superior structures.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-kibo-blue rounded-full w-10 h-10 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg text-kibo-dark mb-1">Safety-First Mindset</h4>
                                    <p class="text-gray-600">We prioritize workplace safety and risk mitigation at every phase, maintaining zero-incident standards across all sites.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-kibo-blue rounded-full w-10 h-10 flex items-center justify-center text-white mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg text-kibo-dark mb-1">Collaborative Planning</h4>
                                    <p class="text-gray-600">We engage closely with clients, stakeholders, and subcontractors to align objectives, optimize schedules, and adapt to evolving needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Featured Projects -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center mb-16">
                    <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">PROJECT SPOTLIGHT</h2>
                    <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Featured Projects</h3>
                    <p class="text-lg text-gray-600 animate-on-scroll">
                        Take a closer look at a selection of our flagship civil and building engineering projects that showcase our expertise and commitment to excellence.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    @foreach($featuredInvestments as $index => $project)
                        @if($index < 2)
                            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                                <div class="relative h-64">
                                    <img src="{{ asset($project['image']) }}" alt="{{ $project['name'] }}" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-kibo-dark to-transparent opacity-60"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                        <h3 class="text-2xl font-bold">{{ $project['name'] }}</h3>
                                        <p class="text-gray-200">{{ $categories[$project['category']] }}</p>
                                    </div>
                                </div>
                                
                                <div class="p-6">
                                    <p class="text-gray-600 mb-6">{{ $project['description'] }}</p>
                                    
                                    <div class="grid grid-cols-2 gap-4 mb-6">
                                        @foreach($project['results'] as $label => $value)
                                            <div>
                                                <p class="text-sm text-gray-500">{{ $label }}</p>
                                                <p class="font-semibold text-kibo-dark">{{ $value }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                    @if($project['quote'])
                                        <blockquote class="border-l-4 border-kibo-blue pl-4 italic text-gray-600 mb-6">
                                            "{{ $project['quote'] }}"
                                            <footer class="mt-2 text-sm text-kibo-blue">— {{ $project['quote_author'] }}</footer>
                                        </blockquote>
                                    @endif
                                    
                                    <button wire:click="selectInvestment({{ $project['id'] }})" class="text-kibo-blue font-medium flex items-center hover:text-kibo-gold transition-colors">
                                        View Details
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Project Portfolio Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center mb-16">
                    <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">OUR PROJECTS</h2>
                    <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Project Portfolio</h3>
                    <p class="text-lg text-gray-600 animate-on-scroll">
                        Explore our diverse portfolio of building, civil infrastructure, renovation and turnkey projects delivered across East Africa.
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
                
                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($filteredInvestments as $investment)
                        <div class="bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                            <div class="relative h-48">
                                <img src="{{ asset($investment['image']) }}" alt="{{ $investment['name'] }}" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-kibo-dark to-transparent opacity-60"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                                    <h4 class="text-lg font-bold">{{ $investment['name'] }}</h4>
                                    <p class="text-sm text-gray-200">{{ $categories[$investment['category']] }}</p>
                                </div>
                            </div>
                            
                            <div class="p-4">
                                <p class="text-gray-600 mb-4">{{ $investment['description'] }}</p>
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    @foreach($investment['results'] as $label => $value)
                                        <div>
                                            <p class="text-sm text-gray-500">{{ $label }}</p>
                                            <p class="font-semibold text-kibo-dark">{{ $value }}</p>
                                        </div>
                                    @endforeach
                                </div>
                                <button wire:click="selectInvestment({{ $investment['id'] }})" class="text-kibo-blue font-medium flex items-center hover:text-kibo-gold transition-colors">
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


    </div>

</div>
