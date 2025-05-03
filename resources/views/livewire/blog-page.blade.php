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
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-slide-down">Construction Insights & Updates</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up leading-relaxed">
                    Latest industry news, project highlights, and expert engineering guidance from our team at Kibo Capital Limited.
                </p>
                
                <!-- Search bar -->
                <div class="max-w-2xl mx-auto mt-8 animate-fade-in">
                    <div class="relative">
                        <input 
                            wire:model.debounce.300ms="searchQuery" 
                            type="text" 
                            placeholder="Search projects, articles, and guides..." 
                            class="w-full px-6 py-4 bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-full border border-white border-opacity-30 text-white placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-kibo-gold"
                        >
                        <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>


 
        <!-- Featured Project Highlight -->
        @if($featuredArticle)
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-1/2 animate-on-scroll">
                            <span class="inline-block bg-kibo-blue bg-opacity-10 text-kibo-blue px-3 py-1 rounded-full text-sm font-medium mb-4">
                                {{ $categories[$featuredArticle['category']] }}
                            </span>
                            <h2 class="text-3xl md:text-4xl font-bold text-kibo-dark mb-4">
                                {{ $featuredArticle['title'] }}
                            </h2>
                            <p class="text-gray-600 mb-6">
                                {{ $featuredArticle['excerpt'] }}
                            </p>
                            
                            <div class="flex items-center mb-6">
                                <img src="{{ asset($featuredArticle['author_image'] ? '/profile/icon.avif' :'/profile/icon.avif') }}" alt="{{ $featuredArticle['author'] }}" class="w-12 h-12 rounded-full mr-4">
                                <div>
                                    <h4 class="font-semibold text-kibo-dark">{{ $featuredArticle['author'] }}</h4>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <span>Completed on {{ $featuredArticle['published_at'] }}</span>
                                        <span class="mx-2">•</span>
                                        <span>{{ $featuredArticle['read_time'] }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <a href="{{ route('blog.post', $featuredArticle['slug']) }}" class="inline-block bg-kibo-blue text-white font-semibold px-6 py-3 rounded-md hover:bg-opacity-90 transition-colors">
                                View Project Details
                            </a>
                        </div>
                        
                        <div class="md:w-1/2 animate-on-scroll">
                            <div class="relative rounded-lg overflow-hidden shadow-xl">
                                <img src="{{ asset($featuredArticle['image'] ? '/service/im2.jpg': '/service/im2.jpg') }}" alt="{{ $featuredArticle['title'] }}" class="w-full h-auto">
                                <div class="absolute top-0 right-0 bg-kibo-gold text-white py-2 px-4 font-medium">
                                    Featured
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif


    <!-- Project Categories & Showcase -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Main Showcase Area -->
                <div class="lg:w-3/4">
                    <!-- Category Filters -->
                    <div class="flex flex-wrap mb-12 animate-on-scroll overflow-x-auto pb-2">
                        @foreach($categories as $key => $category)
                            <button 
                                wire:click="setActiveCategory('{{ $key }}')" 
                                class="px-5 py-2 mr-2 mb-2 rounded-full text-sm font-medium {{ $activeCategory === $key ? 'bg-kibo-blue text-white' : 'bg-white text-kibo-dark hover:bg-gray-100' }} transition-colors duration-200"
                            >
                                {{ $category }}
                            </button>
                        @endforeach
                    </div>
                    
                    <!-- Projects Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                        @forelse($paginatedArticles as $project)
                            <div class="bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                                <a href="{{ route('blog.post', $project['slug']) }}" class="block">
                                    <div class="relative h-48">
                                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover">
                                        <div class="absolute top-0 left-0 bg-kibo-blue bg-opacity-10 text-kibo-blue m-4 px-2 py-1 rounded-full text-xs font-medium">
                                            {{ $categories[$project['category']] }}
                                        </div>
                                    </div>
                                </a>
                                
                                <div class="p-6">
                                    <a href="{{ route('blog.post', $project['slug']) }}" class="block">
                                        <h3 class="text-xl font-bold text-kibo-dark mb-2 hover:text-kibo-blue transition-colors">{{ $project['title'] }}</h3>
                                    </a>
                                    
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $project['excerpt'] }}</p>
                                    
                                    <div class="flex items-center justify-between text-xs text-gray-500">
                                        <span>Completed: {{ $project['published_at'] }}</span>
                                        <span>Status: completed</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full py-12 text-center">
                                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="text-xl font-semibold text-gray-600 mb-2">No projects found</h3>
                                <p class="text-gray-500">Try selecting a different category or search term.</p>
                            </div>
                        @endforelse
                    </div>
                    
                    <!-- Pagination -->
                    @if($paginatedArticles->hasPages())
                        <div class="animate-on-scroll py-4">
                            {{ $paginatedArticles->links() }}
                        </div>
                    @endif
                </div>
                
                <!-- Sidebar -->
                <div class="lg:w-1/4 space-y-8">
                    <!-- Key Sectors -->
                    <div class="bg-white rounded-lg shadow-md p-6 animate-on-scroll">
                        <h3 class="text-xl font-bold text-kibo-dark mb-4">Key Sectors</h3>
                        <div class="flex flex-wrap">
                            @foreach($popularTopics as $topic)
                                <span class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full m-1">
                                    {{ $topic }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Recent Projects -->
                    <div class="bg-white rounded-lg shadow-md p-6 animate-on-scroll">
                        <h3 class="text-xl font-bold text-kibo-dark mb-4">Recent Projects</h3>
                        <div class="space-y-4">
                            @foreach($latestArticles as $project)
                                <div class="flex items-start">
                                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-16 h-16 object-cover rounded mr-3 flex-shrink-0">
                                    <div>
                                        <a href="{{ route('projects.show', $project['slug']) }}" class="font-medium text-kibo-dark hover:text-kibo-blue transition-colors">
                                            {{ $project['title'] }}
                                        </a>
                                        <div class="text-xs text-gray-500 mt-1">Completed: {{ $project['published_at'] }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                   <!-- Newsletter Signup -->
                <div class="bg-kibo-blue rounded-lg shadow-md p-6 text-white animate-on-scroll">
                    <h3 class="text-xl font-bold mb-4">Join Our Mailing List</h3>
                    <p class="text-blue-100 mb-4">
                        Receive exclusive project updates, construction insights, and company news straight to your inbox.
                    </p>
                    
                    <form class="space-y-4">
                        <div>
                            <input 
                                type="email" 
                                placeholder="Enter your email address" 
                                class="w-full px-4 py-3 rounded-md bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-white"
                            >
                        </div>
                        <button 
                            type="submit" 
                            class="w-full bg-white text-kibo-blue font-semibold px-4 py-3 rounded-md hover:bg-opacity-90 transition-colors"
                        >
                            Subscribe Now
                        </button>
                    </form>
                </div>




                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-kibo-dark text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6 animate-on-scroll">Have Questions About Your Financial Future?</h2>
                <p class="text-xl text-gray-300 mb-8 animate-on-scroll">
                    Our team of expert advisors is ready to help you navigate your financial journey with personalized strategies.
                </p>
                <div class="animate-on-scroll">
                    <a href="{{ route('contact') }}" class="inline-block bg-kibo-gold text-white font-semibold px-8 py-4 rounded-md hover:bg-opacity-90 transition-colors">
                        Schedule a Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

</div>
