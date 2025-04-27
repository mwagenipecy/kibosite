<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div>
    <!-- Hero Section -->
    <section class="relative pt-40 pb-20 bg-gradient-to-r from-kibo-dark to-kibo-blue text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="mb-6 animate-slide-down">
                    <span class="inline-block bg-kibo-gold text-white px-3 py-1 rounded-full text-sm font-medium">
                        {{ $categories[$article['category']] }}
                    </span>
                </div>
                
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 animate-slide-down">{{ $article['title'] }}</h1>
                
                <div class="flex items-center mb-6 animate-slide-up">
                    <img src="{{ asset($article['author_image']) }}" alt="{{ $article['author'] }}" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-white">{{ $article['author'] }}</h4>
                        <div class="flex items-center text-sm text-gray-300">
                            <span>{{ $article['published_at'] }}</span>
                            <span class="mx-2">•</span>
                            <span>{{ $article['read_time'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Main Content Area -->
                <div class="lg:w-2/3">
                    <div class="prose prose-lg max-w-none animate-on-scroll">
                        <!-- Featured Image -->
                        <div class="mb-8 rounded-lg overflow-hidden shadow-lg">
                            <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}" class="w-full h-auto">
                        </div>
                        
                        <!-- Article Content -->
                        <div class="article-content">
                            {!! $article['content'] !!}
                        </div>
                        
                        <!-- Tags -->
                        @if(isset($article['tags']) && count($article['tags']) > 0)
                            <div class="mt-12 pt-6 border-t border-gray-200">
                                <h3 class="text-xl font-bold text-kibo-dark mb-4">Topics</h3>
                                <div class="flex flex-wrap">
                                    @foreach($article['tags'] as $tag)
                                        <span class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full m-1">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        
                        <!-- Author Bio -->
                        <div class="mt-12 pt-6 border-t border-gray-200">
                            <div class="flex items-start">
                                <img src="{{ asset($article['author_image']) }}" alt="{{ $article['author'] }}" class="w-16 h-16 rounded-full mr-4">
                                <div>
                                    <h3 class="text-lg font-bold text-kibo-dark">{{ $article['author'] }}</h3>
                                    <p class="text-kibo-blue mb-2">{{ $article['author_position'] }}</p>
                                    <p class="text-gray-600">Financial expert with extensive experience in {{ strtolower($categories[$article['category']]) }} and related fields. Committed to helping clients navigate complex financial landscapes with clarity and confidence.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Share Links -->
                        <div class="mt-12 pt-6 border-t border-gray-200">
                            <h3 class="text-xl font-bold text-kibo-dark mb-4">Share This Article</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-blue-400 text-white p-2 rounded-full hover:bg-blue-500 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.059 10.059 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-blue-800 text-white p-2 rounded-full hover:bg-blue-900 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M7.799 5.698c.589 0 1.12.051 1.606.156 2.356.52 3.961 2.668 3.961 5.195 0 2.136-1.209 3.597-2.884 4.979-1.612 1.33-3.849 2.605-6.698 3.299-.161-.282-.295-.959-.154-1.614.14-.637.537-2.1.793-2.719 0 0-.189-.371-.559-1.711.107-.184.21-.354.301-.514.471-.83 1.119-1.97 1.805-3.027.172.347.398.69.661.981a7.85 7.85 0 00-.126 1.39c0 1.408.782 2.082 1.752 2.082.892 0 1.464-.6 1.464-1.334 0-.738-.47-1.357-1.235-1.787-.816-.461-1.773-.969-1.773-2.143 0-1.121.817-2.033 2.086-2.033m11.678 7.021c-.594.301-1.262.475-1.962.475-3.041 0-5.514-2.459-5.514-5.492 0-3.032 2.473-5.492 5.514-5.492a5.53 5.53 0 013.489 1.24l.746-1.289a6.984 6.984 0 00-4.381-1.538c-3.827 0-6.94 3.098-6.94 6.909 0 3.812 3.113 6.909 6.94 6.909 2.049 0 3.883-.882 5.166-2.286l-.747-1.289a5.507 5.507 0 01-2.311 1.853m-3.336-8.253c0-1.101-.862-1.993-1.95-1.993s-1.95.892-1.95 1.993c0 1.1.862 1.993 1.95 1.993s1.95-.892 1.95-1.993m-3.343 7.574c-.388-.391-.388-1.025 0-1.415.388-.391 1.018-.39 1.406 0 .388.39.388 1.024 0 1.415-.388.39-1.018.39-1.406 0m5.269-.001c-.193-.195-.193-.512 0-.707.193-.195.509-.195.702 0 .194.195.194.512 0 .707-.193.195-.509.195-.702 0"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-green-600 text-white p-2 rounded-full hover:bg-green-700 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20 3H4a1 1 0 00-1 1v16a1 1 0 001 1h16a1 1 0 001-1V4a1 1 0 00-1-1zm-1 11h-4v4h-2v-4H9v-2h4V8h2v4h4v2z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:w-1/3 mt-12 lg:mt-0">
                    <!-- Author Card -->
                    <div class="bg-gray-50 rounded-lg shadow-md p-6 mb-8 animate-on-scroll">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset($article['author_image']) }}" alt="{{ $article['author'] }}" class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <h3 class="text-lg font-bold text-kibo-dark">{{ $article['author'] }}</h3>
                                <p class="text-kibo-blue">{{ $article['author_position'] }}</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Expert in {{ strtolower($categories[$article['category']]) }} with a passion for helping clients achieve their financial goals through personalized strategies and education.</p>
                        <a href="{{ route('team') }}" class="text-kibo-blue font-medium flex items-center hover:text-kibo-gold transition-colors">
                            View Profile
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Related Articles -->
                    @if(count($relatedArticles) > 0)
                        <div class="bg-white rounded-lg shadow-md p-6 mb-8 animate-on-scroll">
                            <h3 class="text-xl font-bold text-kibo-dark mb-4">Related Articles</h3>
                            <div class="space-y-6">
                                @foreach($relatedArticles as $relatedArticle)
                                    <div class="flex items-start">
                                        <img src="{{ asset($relatedArticle['image']) }}" alt="{{ $relatedArticle['title'] }}" class="w-20 h-20 object-cover rounded mr-4 flex-shrink-0">
                                        <div>
                                            <a href="{{ route('blog.post', $relatedArticle['slug']) }}" class="font-medium text-kibo-dark hover:text-kibo-blue transition-colors">
                                                {{ $relatedArticle['title'] }}
                                            </a>
                                            <div class="text-xs text-gray-500 mt-1">{{ $relatedArticle['published_at'] }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    
                    <!-- Categories -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-8 animate-on-scroll">
                        <h3 class="text-xl font-bold text-kibo-dark mb-4">Categories</h3>
                        <ul class="space-y-2">
                            @foreach($categories as $key => $category)
                                <li>
                                    <a href="{{ route('blog', ['activeCategory' => $key]) }}" class="flex items-center justify-between text-gray-600 hover:text-kibo-blue transition-colors py-2 border-b border-gray-100">
                                        <span>{{ $category }}</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Newsletter Signup -->
                    <div class="bg-kibo-blue rounded-lg shadow-md p-6 text-white animate-on-scroll">
                        <h3 class="text-xl font-bold mb-4">Subscribe to Our Newsletter</h3>
                        <p class="text-blue-100 mb-4">Stay updated with our latest insights and analysis delivered directly to your inbox.</p>
                        
                        <form class="space-y-4">
                            <div>
                                <input type="email" placeholder="Your email address" class="w-full px-4 py-3 rounded-md bg-white bg-opacity-20 border border-blue-300 border-opacity-30 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-white">
                            </div>
                            <button type="submit" class="w-full bg-white text-kibo-blue font-semibold px-4 py-3 rounded-md hover:bg-opacity-90 transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Ready to Take the Next Step?</h2>
                <p class="text-xl text-gray-600 mb-8 animate-on-scroll">
                    Our advisors are ready to help you implement the strategies discussed in this article through personalized financial planning.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 animate-on-scroll">
                    <a href="{{ route('contact') }}" class="inline-block bg-kibo-blue text-white font-semibold px-8 py-4 rounded-md hover:bg-opacity-90 transition-colors">
                        Schedule a Consultation
                    </a>
                    <a href="{{ route('blog') }}" class="inline-block bg-white text-kibo-dark border border-gray-300 font-semibold px-8 py-4 rounded-md hover:bg-gray-50 transition-colors">
                        Explore More Articles
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>


</div>
