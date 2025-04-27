<div>
<div>
    <!-- Hero Section -->
    <section class="relative pt-40 pb-20 bg-gradient-to-r from-kibo-dark to-kibo-blue text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-slide-down">Contact Us</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-slide-up leading-relaxed">
                    Get in touch with our team to discuss how we can help you achieve your financial goals.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Information -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div class="animate-on-scroll">
                    <h2 class="text-3xl font-bold text-kibo-dark mb-6">Get In Touch</h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Whether you have questions about our services, want to schedule a consultation, or are interested in joining our team, we're here to help.
                    </p>
                    
                    <div class="bg-gray-50 rounded-lg p-8 shadow-md mb-8">
                        <h3 class="text-xl font-semibold text-kibo-dark mb-4">Headquarters</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-kibo-blue mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <div>
                                    <p class="text-gray-600">123 Financial District, Suite 500<br>New York, NY 10005</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-kibo-blue mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <div>
                                    <p class="text-gray-600">+1 (212) 555-7890</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-kibo-blue mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <p class="text-gray-600">contact@kibocapital.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-kibo-blue mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <div>
                                    <p class="text-gray-600">Monday-Friday: 9:00 AM - 5:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                        <div class="h-72">
                            <!-- Replace with an actual map integration in production -->
                            <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                                <p class="text-gray-600">Map Integration Here</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="animate-on-scroll">
                    <div class="bg-gray-50 rounded-lg p-8 shadow-md">
                        <h2 class="text-3xl font-bold text-kibo-dark mb-6">Send Us a Message</h2>
                        
                        @if($successMessage)
                            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                                <p>{{ $successMessage }}</p>
                            </div>
                        @endif
                        
                        <form wire:submit.prevent="submit">
                            <div class="space-y-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                                    <input wire:model="name" type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-kibo-blue focus:border-kibo-blue">
                                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                                        <input wire:model="email" type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-kibo-blue focus:border-kibo-blue">
                                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                        <input wire:model="phone" type="tel" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-kibo-blue focus:border-kibo-blue">
                                        @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service of Interest *</label>
                                    <select wire:model="service" id="service" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-kibo-blue focus:border-kibo-blue">
                                        <option value="">Select a Service</option>
                                        @foreach($services as $serviceOption)
                                            <option value="{{ $serviceOption }}">{{ $serviceOption }}</option>
                                        @endforeach
                                    </select>
                                    @error('service') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message *</label>
                                    <textarea wire:model="message" id="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-kibo-blue focus:border-kibo-blue"></textarea>
                                    @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                
                                <div>
                                    <button type="submit" class="w-full bg-kibo-blue hover:bg-opacity-90 text-white font-semibold py-3 px-6 rounded-md transition-colors">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Offices -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-kibo-blue text-lg font-semibold mb-2 animate-on-scroll">GLOBAL PRESENCE</h2>
                <h3 class="text-3xl font-bold text-kibo-dark mb-6 animate-on-scroll">Our Offices Worldwide</h3>
                <p class="text-lg text-gray-600 animate-on-scroll">
                    With offices strategically located around the world, we provide comprehensive financial services with a global perspective.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($offices as $office)
                <div class="bg-white rounded-lg shadow-md p-8 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg animate-on-scroll">
                    <h3 class="text-2xl font-bold text-kibo-dark mb-4">{{ $office['city'] }}</h3>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-kibo-blue mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div>
                                <p class="text-gray-600">{!! $office['address'] !!}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-kibo-blue mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div>
                                <p class="text-gray-600">{{ $office['phone'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-kibo-blue mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div>
                                <p class="text-gray-600">{{ $office['email'] }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-kibo-blue mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div>
                                <p class="text-gray-600">{{ $office['hours'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-kibo-dark text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-4 animate-on-scroll">Join Our Newsletter</h2>
                        <p class="text-xl text-gray-300 animate-on-scroll">
                            Stay updated with our latest financial insights and company news.
                        </p>
                    </div>
                    <div class="animate-on-scroll">
                        <form class="flex flex-col sm:flex-row gap-4">
                            <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-kibo-gold">
                            <button type="submit" class="bg-kibo-gold hover:bg-opacity-90 text-white font-semibold px-6 py-3 rounded-md transition-colors whitespace-nowrap">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</div>
