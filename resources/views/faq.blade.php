<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>FAQ | Catholic Charismatic Tanzania – Universities Fellowship</title>

        <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Manrope', sans-serif; }
            .font-serif { font-family: 'Playfair Display', serif; }
            [x-cloak] { display: none !important; }
            .nav-link { font-size: 1.05rem; position: relative; }
            .nav-link::after {
                content: '';
                position: absolute;
                bottom: 1.5rem;
                left: 0;
                width: 0;
                height: 2px;
                background: linear-gradient(90deg, #0f172a 0%, #1e293b 100%);
                transition: width 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            }
            .nav-link:hover::after {
                width: 100%;
                animation: borderSlide 1s infinite linear;
                background: linear-gradient(90deg, #0f172a 25%, #1e293b 25%, #1e293b 50%, #0f172a 50%, #0f172a 75%, #1e293b 75%);
                background-size: 200% 100%;
            }
            @keyframes borderSlide {
                0% { background-position: 100% 0; }
                100% { background-position: -100% 0; }
            }
            .group:hover .mega-menu { opacity: 1; visibility: visible; transform: translateY(0); }
            .mega-menu {
                opacity: 0;
                visibility: hidden;
                transform: translateY(-10px);
                transition: all 0.3s ease;
            }
            .nav-border-animate {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, #0f172a 25%, #1e293b 25%, #1e293b 50%, #0f172a 50%, #0f172a 75%, #1e293b 75%);
                background-size: 200% 100%;
                animation: borderSlide 3s infinite linear;
            }
            .faq-item {
                border-bottom: 1px solid #e2e8f0;
                transition: all 0.3s ease;
                position: relative;
            }
            .faq-item:hover {
                background: rgba(99, 102, 241, 0.02);
                transform: translateX(4px);
            }
            .faq-item::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
                width: 3px;
                background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
                transform: scaleY(0);
                transition: transform 0.3s ease;
            }
            .faq-item:hover::before {
                transform: scaleY(1);
            }
            .faq-question {
                cursor: pointer;
                transition: all 0.3s ease;
                position: relative;
            }
            .faq-question:hover {
                color: #6366f1;
            }
            .faq-answer {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease, padding 0.4s ease, opacity 0.3s ease;
                opacity: 0;
            }
            .faq-answer.open {
                max-height: 800px;
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
                opacity: 1;
            }
            .category-badge {
                display: inline-flex;
                align-items: center;
                gap: 0.25rem;
                padding: 0.25rem 0.75rem;
                border-radius: 9999px;
                font-size: 0.75rem;
                font-weight: 500;
                transition: all 0.2s ease;
                position: relative;
                overflow: hidden;
            }
            .category-badge::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                animation: shimmer 3s infinite;
            }
            @keyframes shimmer {
                0% { left: -100%; }
                100% { left: 100%; }
            }
            .category-badge:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 16px -4px rgba(0, 0, 0, 0.1);
            }
            .search-highlight {
                background: linear-gradient(120deg, #fef3c7 0%, #fef3c7 100%);
                background-size: 100% 100%;
                animation: highlight 0.5s ease;
                padding: 2px 4px;
                border-radius: 4px;
            }
            @keyframes highlight {
                0% { background-size: 0% 100%; }
                100% { background-size: 100% 100%; }
            }
            .scroll-to-top {
                position: fixed;
                bottom: 2rem;
                right: 2rem;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 50;
            }
            .scroll-to-top.show {
                opacity: 1;
                visibility: visible;
            }
            .stats-card {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                position: relative;
                overflow: hidden;
            }
            .stats-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
                animation: shimmer 3s infinite;
            }
            .help-card {
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }
            .help-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
                transform: translateX(-100%);
                transition: transform 0.6s ease;
            }
            .help-card:hover::before {
                transform: translateX(100%);
            }
            .help-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            }
            .featured-faq {
                background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%);
                border: 2px solid #f59e0b;
                position: relative;
            }
            .featured-faq::after {
                content: '⭐';
                position: absolute;
                top: 1rem;
                right: 1rem;
                font-size: 1.5rem;
            }
            .related-links {
                display: flex;
                flex-wrap: wrap;
                gap: 0.5rem;
                margin-top: 1rem;
            }
            .related-link {
                background: rgba(99, 102, 241, 0.1);
                color: #6366f1;
                padding: 0.25rem 0.75rem;
                border-radius: 9999px;
                font-size: 0.875rem;
                transition: all 0.2s ease;
            }
            .related-link:hover {
                background: #6366f1;
                color: white;
                transform: translateY(-1px);
            }
            .rating-stars {
                display: flex;
                gap: 0.25rem;
                margin-top: 0.5rem;
            }
            .rating-stars .star {
                color: #fbbf24;
                font-size: 0.875rem;
            }
            .view-count {
                display: flex;
                align-items: gap: 0.5rem;
                color: #6b7280;
                font-size: 0.875rem;
                margin-top: 0.5rem;
            }
            .recent-searches {
                background: rgba(156, 163, 175, 0.1);
                border-radius: 0.5rem;
                padding: 0.75rem;
                margin-top: 1rem;
            }
            .recent-search-tag {
                background: white;
                color: #4b5563;
                padding: 0.25rem 0.5rem;
                border-radius: 0.25rem;
                font-size: 0.75rem;
                cursor: pointer;
                transition: all 0.2s ease;
            }
            .recent-search-tag:hover {
                background: #6366f1;
                color: white;
            }
            .quick-actions {
                position: fixed;
                bottom: 2rem;
                left: 2rem;
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
                z-index: 40;
            }
            .quick-action-btn {
                width: 3rem;
                height: 3rem;
                border-radius: 50%;
                background: white;
                border: 2px solid #e5e7eb;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: all 0.2s ease;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            }
            .quick-action-btn:hover {
                transform: scale(1.1);
                border-color: #6366f1;
                color: #6366f1;
            }
        </style>
    </head>
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="faqData()">
        @include('components.header')

        <main class="pt-24 lg:pt-28">
            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-indigo-900 via-purple-900 to-slate-900 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center">
                        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full mb-6">
                            <i class="ph ph-question text-xl"></i>
                            <span class="font-semibold">Frequently Asked Questions</span>
                        </div>
                        <h1 class="text-5xl lg:text-6xl font-bold mb-6 font-serif">FAQ</h1>
                        <p class="text-xl lg:text-2xl text-slate-200 max-w-4xl mx-auto leading-relaxed mb-8">
                            Find answers to common questions about ICCRTZ membership, events, donations, and more. Browse by category or search for specific topics.
                        </p>
                        
                        <!-- Search Bar -->
                        <div class="max-w-2xl mx-auto mb-8">
                            <div class="relative">
                                <input type="text" 
                                       x-model="searchQuery"
                                       @change="addToRecentSearches(searchQuery)"
                                       placeholder="Search FAQs..." 
                                       class="w-full px-6 py-4 pl-14 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50 focus:bg-white/20 transition-all">
                                <i class="ph ph-magnifying-glass absolute left-5 top-4 text-white/70 text-xl"></i>
                            </div>
                            
                            <!-- Recent Searches -->
                            <div x-show="recentSearches.length > 0" class="recent-searches">
                                <div class="text-xs text-white/70 mb-2">Recent searches:</div>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="search in recentSearches" :key="search">
                                        <span @click="searchQuery = search" class="recent-search-tag" x-text="search"></span>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white" x-text="faqs.length"></div>
                                <div class="text-sm text-white/70">Total FAQs</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white" x-text="categories.length"></div>
                                <div class="text-sm text-white/70">Categories</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white" x-text="faqs.reduce((sum, faq) => sum + faq.helpful, 0)"></div>
                                <div class="text-sm text-white/70">Helpful Votes</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white" x-text="faqs.reduce((sum, faq) => sum + faq.views, 0)"></div>
                                <div class="text-sm text-white/70">Total Views</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Categories Section -->
            <section class="py-12 bg-white border-b border-slate-200">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-wrap justify-center gap-3">
                        <template x-for="category in categories" :key="category.id">
                            <button @click="selectedCategory = category.id"
                                    :class="selectedCategory === category.id ? 'ring-2 ring-offset-2 ring-indigo-500' : ''"
                                    :class="category.color"
                                    class="category-badge flex items-center gap-2 font-medium">
                                <i :class="category.icon"></i>
                                <span x-text="category.name"></span>
                                <span class="bg-white/30 px-2 py-0.5 rounded-full text-xs" x-text="category.count"></span>
                            </button>
                        </template>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="py-16 bg-slate-50">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-slate-900 mb-4">Common Questions</h2>
                        <p class="text-lg text-slate-600">
                            Click on any question to reveal the answer. Found something helpful? 
                            <span class="text-indigo-600 font-semibold">Mark it as helpful!</span>
                        </p>
                    </div>

                    <!-- FAQ Items -->
                    <div class="space-y-2">
                        <template x-for="faq in filterFAQs()" :key="faq.id">
                            <div class="faq-item bg-white rounded-xl border border-slate-200 overflow-hidden"
                                 :class="featuredFAQs.includes(faq.id) ? 'featured-faq' : ''">
                                <button @click="toggleItem(faq.id)"
                                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                                    <div class="flex items-center gap-3 flex-1">
                                        <span :class="getCategoryColor(faq.category)" class="category-badge">
                                            <i :class="categories.find(cat => cat.id === faq.category)?.icon"></i>
                                            <span x-text="categories.find(cat => cat.id === faq.category)?.name"></span>
                                        </span>
                                        <span class="font-medium text-slate-900" x-text="faq.question"></span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <template x-for="tag in faq.tags.slice(0, 2)" :key="tag">
                                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded" x-text="tag"></span>
                                        </template>
                                        <div class="flex items-center gap-1 text-xs text-slate-500">
                                            <i class="ph ph-thumbs-up"></i>
                                            <span x-text="faq.helpful"></span>
                                        </div>
                                        <div class="flex items-center gap-1 text-xs text-slate-500">
                                            <i class="ph ph-eye"></i>
                                            <span x-text="faq.views"></span>
                                        </div>
                                        <i class="ph ph-chevron-down text-slate-400 transition-transform duration-300"
                                           :class="isExpanded(faq.id) ? 'rotate-180' : ''"></i>
                                    </div>
                                </button>
                                <div class="faq-answer px-6 text-slate-600" 
                                     :class="isExpanded(faq.id) ? 'open' : ''">
                                    <p x-text="faq.answer"></p>
                                    
                                    <!-- Related Links -->
                                    <div x-show="isExpanded(faq.id)" class="related-links">
                                        <template x-for="relatedId in faq.related" :key="relatedId">
                                            <template x-if="faqs.find(f => f.id === relatedId)">
                                                <span class="related-link" x-text="'Related: ' + faqs.find(f => f.id === relatedId).question.substring(0, 30) + '...'"></span>
                                            </template>
                                        </template>
                                    </div>
                                    
                                    <!-- Helpful Buttons -->
                                    <div x-show="isExpanded(faq.id)" class="flex items-center justify-between mt-4 pt-4 border-t border-slate-100">
                                        <div class="flex items-center gap-4">
                                            <button @click="markHelpful(faq.id)" class="flex items-center gap-2 text-green-600 hover:text-green-800 text-sm font-medium">
                                                <i class="ph ph-thumbs-up"></i>
                                                Helpful (<span x-text="faq.helpful"></span>)
                                            </button>
                                            <div class="rating-stars">
                                                <template x-for="i in 5" :key="i">
                                                    <i class="ph ph-star star" :class="i <= Math.floor(faq.helpful / 10) ? '' : 'opacity-30'"></i>
                                                </template>
                                            </div>
                                        </div>
                                        <div class="view-count">
                                            <i class="ph ph-eye"></i>
                                            <span x-text="faq.views + ' views'"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- No Results -->
                    <div x-show="filterFAQs().length === 0" class="text-center py-12">
                        <i class="ph ph-search text-6xl text-slate-300 mb-4"></i>
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">No FAQs Found</h3>
                        <p class="text-slate-600 mb-4">Try adjusting your search or browse all categories.</p>
                        <button @click="searchQuery = ''; selectedCategory = 'all'" 
                                class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                            Clear Filters
                        </button>
                    </div>
                </div>
            </section>

            <!-- Help Section -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-slate-900 mb-4">Still Have Questions?</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                            Our team is here to help you with any additional questions or concerns about ICCRTZ.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Contact Support -->
                        <div class="help-card bg-white rounded-xl p-8 border border-slate-200 text-center">
                            <div class="w-20 h-20 bg-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-envelope text-indigo-600 text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Email Support</h3>
                            <p class="text-slate-600 mb-6">Get help via email for detailed questions and support. We typically respond within 24-48 hours.</p>
                            <div class="space-y-2 text-sm text-slate-600 mb-6">
                                <div>✓ Detailed responses</div>
                                <div>✓ Document attachments</div>
                                <div>✓ Follow-up support</div>
                            </div>
                            <a href="{{ url('contact') }}" class="inline-flex items-center gap-2 bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors">
                                <i class="ph ph-arrow-right"></i>
                                Contact Us
                            </a>
                        </div>

                        <!-- Visit Office -->
                        <div class="help-card bg-white rounded-xl p-8 border border-slate-200 text-center">
                            <div class="w-20 h-20 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-map-pin text-green-600 text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Visit Our Office</h3>
                            <p class="text-slate-600 mb-6">Meet with our team in person for immediate assistance and personal guidance.</p>
                            <div class="space-y-2 text-sm text-slate-600 mb-6">
                                <div>✓ Face-to-face meetings</div>
                                <div>✓ Immediate assistance</div>
                                <div>✓ Personal counseling</div>
                            </div>
                            <div class="text-sm text-slate-600">
                                <div class="mb-2">P.O. Box 1234, Mbeya</div>
                                <div>Monday - Friday, 9:00 AM - 5:00 PM</div>
                                <div>+255 712 345 678</div>
                            </div>
                        </div>

                        <!-- Call Us -->
                        <div class="help-card bg-white rounded-xl p-8 border border-slate-200 text-center">
                            <div class="w-20 h-20 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-phone text-purple-600 text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Phone Support</h3>
                            <p class="text-slate-600 mb-6">Call us for urgent questions and immediate assistance during business hours.</p>
                            <div class="space-y-2 text-sm text-slate-600 mb-6">
                                <div>✓ Urgent inquiries</div>
                                <div>✅ Quick responses</div>
                                <div>✅ Direct assistance</div>
                            </div>
                            <div class="text-sm text-slate-600">
                                <div class="mb-2">Main: +255 712 345 678</div>
                                <div>Support: +255 713 456 789</div>
                                <div>Emergency: +255 714 567 890</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Popular Topics -->
            <section class="py-16 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-slate-900 mb-4">Popular Topics</h2>
                        <p class="text-xl text-slate-600">Quick access to frequently searched topics and trending questions</p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <a href="#" class="bg-white rounded-xl p-6 border border-slate-200 hover:border-indigo-300 hover:shadow-lg transition-all group">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                                <i class="ph ph-users text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-2">Membership</h3>
                            <p class="text-sm text-slate-600 mb-3">Join ICCRTZ and become part of our community</p>
                            <div class="text-xs text-blue-600 font-medium">12 FAQs →</div>
                        </a>

                        <a href="#" class="bg-white rounded-xl p-6 border border-slate-200 hover:border-green-300 hover:shadow-lg transition-all group">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-green-200 transition-colors">
                                <i class="ph ph-calendar text-green-600 text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-2">Events</h3>
                            <p class="text-sm text-slate-600 mb-3">Register for conferences and activities</p>
                            <div class="text-xs text-green-600 font-medium">8 FAQs →</div>
                        </a>

                        <a href="#" class="bg-white rounded-xl p-6 border border-slate-200 hover:border-red-300 hover:shadow-lg transition-all group">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors">
                                <i class="ph ph-heart text-red-600 text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-2">Donations</h3>
                            <p class="text-sm text-slate-600 mb-3">Support our mission and programs</p>
                            <div class="text-xs text-red-600 font-medium">6 FAQs →</div>
                        </a>

                        <a href="#" class="bg-white rounded-xl p-6 border border-slate-200 hover:border-purple-300 hover:shadow-lg transition-all group">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-purple-200 transition-colors">
                                <i class="ph ph-cross text-purple-600 text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-2">Spiritual Life</h3>
                            <p class="text-sm text-slate-600 mb-3">Grow in faith and spiritual formation</p>
                            <div class="text-xs text-purple-600 font-medium">8 FAQs →</div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Stats Section -->
            <section class="py-16 bg-gradient-to-r from-indigo-900 to-purple-900 text-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold mb-4">FAQ Statistics</h2>
                        <p class="text-xl text-indigo-100">See how our FAQ system helps our community</p>
                    </div>

                    <div class="grid md:grid-cols-4 gap-6">
                        <div class="stats-card rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold mb-2" x-text="faqs.length"></div>
                            <div class="text-indigo-100">Total FAQs</div>
                            <div class="text-sm text-indigo-200 mt-2">Comprehensive coverage</div>
                        </div>
                        <div class="stats-card rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold mb-2" x-text="faqs.reduce((sum, faq) => sum + faq.helpful, 0)"></div>
                            <div class="text-indigo-100">Helpful Votes</div>
                            <div class="text-sm text-indigo-200 mt-2">Community feedback</div>
                        </div>
                        <div class="stats-card rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold mb-2" x-text="faqs.reduce((sum, faq) => sum + faq.views, 0)"></div>
                            <div class="text-indigo-100">Total Views</div>
                            <div class="text-sm text-indigo-200 mt-2">Engagement metric</div>
                        </div>
                        <div class="stats-card rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold mb-2">98%</div>
                            <div class="text-indigo-100">Satisfaction</div>
                            <div class="text-sm text-indigo-200 mt-2">User satisfaction rate</div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <div class="quick-action-btn" @click="scrollToTop()" title="Scroll to top">
                <i class="ph ph-arrow-up"></i>
            </div>
            <div class="quick-action-btn" @click="searchQuery = ''; selectedCategory = 'all'" title="Clear filters">
                <i class="ph ph-funnel"></i>
            </div>
            <div class="quick-action-btn" @click="window.print()" title="Print FAQ">
                <i class="ph ph-printer"></i>
            </div>
        </div>

        <!-- Scroll to Top Button -->
        <button @click="scrollToTop()" 
                x-show="showScrollTop"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-2"
                class="scroll-to-top bg-indigo-600 text-white p-4 rounded-full shadow-lg hover:bg-indigo-700 transition-all">
            <i class="ph ph-arrow-up text-xl"></i>
        </button>

        @include('components.footer')
        
        <script>
            function faqData() {
                return {
                    mobileMenuOpen: false,
                    searchQuery: '',
                    selectedCategory: 'all',
                    expandedItems: new Set(),
                    featuredFAQs: [1, 7, 12, 17],
                    recentSearches: ['membership', 'events', 'donations', 'spiritual'],
                    categories: [
                        { id: 'all', name: 'All Categories', icon: 'ph-grid', color: 'bg-slate-100 text-slate-700', count: 0 },
                        { id: 'membership', name: 'Membership', icon: 'ph-users', color: 'bg-blue-100 text-blue-700', count: 0 },
                        { id: 'events', name: 'Events', icon: 'ph-calendar', color: 'bg-green-100 text-green-700', count: 0 },
                        { id: 'donations', name: 'Donations', icon: 'ph-heart', color: 'bg-red-100 text-red-700', count: 0 },
                        { id: 'spiritual', name: 'Spiritual', icon: 'ph-cross', color: 'bg-purple-100 text-purple-700', count: 0 },
                        { id: 'technical', name: 'Technical', icon: 'ph-devices', color: 'bg-orange-100 text-orange-700', count: 0 },
                        { id: 'legal', name: 'Legal', icon: 'ph-scales', color: 'bg-indigo-100 text-indigo-700', count: 0 }
                    ],
                    faqs: [
                        {
                            id: 1,
                            category: 'membership',
                            question: 'How do I become a member of ICCRTZ?',
                            answer: 'To become a member of ICCRTZ, you need to be a university student or young adult who shares our Christian values. The process involves: 1) Completing the online registration form with your personal details, 2) Attending an orientation session at your local chapter, 3) Completing the membership approval process which includes an interview with chapter leadership, 4) Paying the annual membership fee (if applicable), and 5) Receiving your membership card and welcome package. The entire process typically takes 2-3 weeks to complete.',
                            tags: ['registration', 'join', 'application'],
                            helpful: 45,
                            views: 234,
                            related: [2, 3, 13]
                        },
                        {
                            id: 2,
                            category: 'membership',
                            question: 'What are the membership requirements and benefits?',
                            answer: 'Membership requirements include: being at least 18 years old, being a university student or young adult (up to 35 years), agreeing with our statement of faith, committing to our code of conduct, and paying annual membership fees of TSh 5,000. Benefits include: access to all ICCRTZ events at discounted rates, free spiritual counseling, leadership training opportunities, networking with other Christian students, access to our digital resources library, participation in community service projects, and eligibility for leadership positions within the organization.',
                            tags: ['requirements', 'eligibility', 'fees', 'benefits'],
                            helpful: 38,
                            views: 189,
                            related: [1, 13, 16]
                        },
                        {
                            id: 3,
                            category: 'events',
                            question: 'How can I register for ICCRTZ events and what are the payment options?',
                            answer: 'You can register for ICCRTZ events through multiple channels: 1) Online via our website using the registration form, 2) Mobile app available on iOS and Android, 3) Contacting your local chapter leadership, 4) WhatsApp registration by sending your details to +255 712 345 678. Payment options include: Credit/Debit cards (Visa, Mastercard), Mobile money (M-Pesa, Tigo Pesa, Airtel Money), Bank transfers to our CRDB account, Cash payments at our offices, and In-person at chapter meetings. Early bird discounts of 20% are available for registrations made 30 days before events.',
                            tags: ['registration', 'events', 'payment', 'discounts'],
                            helpful: 52,
                            views: 312,
                            related: [4, 14, 18]
                        },
                        {
                            id: 4,
                            category: 'events',
                            question: 'Are ICCRTZ events open to non-members and what are the pricing differences?',
                            answer: 'Most ICCRTZ events are open to both members and non-members, but there are significant benefits for members. Members typically receive 30-50% discounts on registration fees, priority registration for popular events, and access to member-only sessions. Non-members pay full price: Conferences TSh 10,000-50,000, Workshops TSh 5,000-20,000, Retreats TSh 15,000-30,000. Some exclusive events like leadership retreats and advanced training sessions are limited to members only. Check the specific event details for exact pricing and eligibility requirements.',
                            tags: ['events', 'non-members', 'pricing', 'discounts'],
                            helpful: 41,
                            views: 267,
                            related: [3, 18, 14]
                        },
                        {
                            id: 5,
                            category: 'donations',
                            question: 'What are the different ways to donate to ICCRTZ and how are funds used?',
                            answer: 'Donation methods include: Online via our website (credit/debit cards, PayPal), Mobile money (M-Pesa, Tigo Pesa, Airtel Money), Bank transfers (CRDB, NBC, NMB), In-person at our offices, During events and conferences, Standing order arrangements for monthly giving. Funds are used for: 40% - Event organization and conferences, 25% - Local chapter support and operations, 15% - Leadership training programs, 10% - Community service projects, 5% - Missionary work and evangelization, 5% - Administrative costs. Annual financial reports are available to all members showing detailed fund allocation.',
                            tags: ['donations', 'payment', 'usage', 'transparency'],
                            helpful: 48,
                            views: 198,
                            related: [6, 15, 16]
                        },
                        {
                            id: 6,
                            category: 'donations',
                            question: 'Can I specify how my donation should be used and are donations tax-deductible?',
                            answer: 'Yes, you can specify how your donation should be used. Options include: General fund (unrestricted), Specific projects (e.g., building fund, mission trip), Local chapter support, Scholarship fund, Evangelization programs. While we try to honor donor preferences, we reserve the right to redirect funds to where they\'re most needed for the organization\'s mission. All donations are tax-deductible under Tanzanian law. We provide official receipts for tax purposes and annual giving statements for donors who give regularly. For large donations (over TSh 100,000), we can provide personalized acknowledgment letters.',
                            tags: ['donations', 'specification', 'tax', 'receipts'],
                            helpful: 35,
                            views: 145,
                            related: [5, 15, 6]
                        },
                        {
                            id: 7,
                            category: 'spiritual',
                            question: 'What is the spiritual focus and core beliefs of ICCRTZ?',
                            answer: 'ICCRTZ focuses on Catholic charismatic spirituality, emphasizing: Personal relationship with Jesus Christ as Lord and Savior, Baptism in the Holy Spirit and spiritual gifts, The authority of Scripture and Catholic Tradition, The power of prayer and intercession, Evangelization and sharing the Gospel, Community building and fellowship, Service to others through charitable works, Personal holiness and moral living, Respect for Church hierarchy and teachings, Unity among all Christians. We combine traditional Catholic teachings with charismatic expression through vibrant worship, prayer meetings, and spiritual formation programs.',
                            tags: ['spirituality', 'catholic', 'charismatic', 'beliefs'],
                            helpful: 67,
                            views: 423,
                            related: [8, 16, 17]
                        },
                        {
                            id: 8,
                            category: 'spiritual',
                            question: 'Do I need to be Catholic to join ICCRTZ and what are the expectations?',
                            answer: 'While ICCRTZ is a Catholic organization, we welcome all Christians who respect our Catholic identity and values. Non-Catholic members are expected to: Respect Catholic teachings and traditions, Participate respectfully in Catholic practices (Mass, sacraments, devotions), Support our Catholic mission and evangelization efforts, Not promote teachings contrary to Catholic doctrine, Understand that leadership positions may require Catholic affiliation. We encourage ecumenical dialogue and cooperation with other Christian denominations while maintaining our Catholic identity. All members are expected to grow in their personal relationship with Christ regardless of their denominational background.',
                            tags: ['catholic', 'interdenominational', 'faith', 'expectations'],
                            helpful: 58,
                            views: 367,
                            related: [7, 17, 9]
                        },
                        {
                            id: 9,
                            category: 'spiritual',
                            question: 'What spiritual formation programs and resources does ICCRTZ offer?',
                            answer: 'ICCRTZ offers comprehensive spiritual formation programs including: Weekly Bible study groups, Monthly prayer meetings and healing services, Quarterly spiritual retreats and conferences, Leadership formation and discipleship programs, Spiritual counseling and direction, Small group fellowship meetings, Online spiritual resources and courses, Annual spiritual gifts workshops, Personal mentoring relationships, Community service and outreach opportunities. Resources include: Digital library with books and articles, Video teachings and testimonies, Prayer request system, Spiritual gifts assessment tools, Online courses on Catholic teachings, Downloadable study guides and materials.',
                            tags: ['spiritual', 'formation', 'resources', 'programs'],
                            helpful: 62,
                            views: 289,
                            related: [7, 8, 16]
                        },
                        {
                            id: 10,
                            category: 'technical',
                            question: 'How do I access and use the ICCRTZ mobile app and website features?',
                            answer: 'The ICCRTZ mobile app is available for free on iOS (App Store) and Android (Google Play Store). Features include: Event registration and ticketing, Online donation processing, Prayer request submission, Member directory and networking, Spiritual resources library, Event calendar and reminders, Push notifications for important updates, Live streaming of events, Small group meeting coordination, Volunteer opportunity signup. To access all features, create an account using your membership details. The website offers the same features plus additional resources and detailed information about our programs and activities.',
                            tags: ['mobile', 'app', 'website', 'features'],
                            helpful: 44,
                            views: 178,
                            related: [11, 17, 14]
                        },
                        {
                            id: 11,
                            category: 'technical',
                            question: 'What should I do if I forget my password or have technical issues?',
                            answer: 'If you forget your password: Click "Forgot Password" on the login page, Enter your registered email address, Check your email for reset instructions (check spam folder), Click the reset link and create a new password, Log in with your new password. For technical issues: Email support@iccrtz.org with details about the problem, Include screenshots if possible, Specify your browser/device information, We respond within 24-48 hours during business days. For urgent issues, call +255 712 345 678 during office hours (9 AM - 5 PM, Monday-Friday). Common issues include login problems, payment processing errors, event registration difficulties, and mobile app crashes.',
                            tags: ['password', 'login', 'support', 'technical'],
                            helpful: 39,
                            views: 156,
                            related: [10, 18, 14]
                        },
                        {
                            id: 12,
                            category: 'legal',
                            question: 'How does ICCRTZ protect my personal information and what are my privacy rights?',
                            answer: 'We protect your personal information according to our Privacy Policy and Tanzanian data protection laws: Secure servers with SSL encryption, Limited access to personal data, Regular security audits and updates, Data retention policies, No sharing with third parties without consent, Right to access your personal information, Right to correct inaccurate information, Right to delete your account and data, Right to opt-out of marketing communications. We collect only necessary information for our services and implement industry-standard security measures. You can request a copy of your data or make corrections by contacting our privacy officer at privacy@iccrtz.org.',
                            tags: ['privacy', 'data', 'security', 'rights'],
                            helpful: 53,
                            views: 234,
                            related: [13, 18, 16]
                        },
                        {
                            id: 13,
                            category: 'legal',
                            question: 'What are ICCRTZ\'s terms and conditions and membership obligations?',
                            answer: 'Our Terms & Conditions govern your use of ICCRTZ services and include: Agreement with our statement of faith and values, Commitment to our code of conduct, Respect for church leadership and authority, Proper use of ICCRTZ name and resources, No unauthorized commercial activities, Compliance with event rules and regulations, Respect for other members and guests, No disruptive or harmful behavior, Proper use of digital platforms and social media, Financial transparency and accountability. Membership obligations include: Active participation in chapter activities, Payment of membership fees on time, Support of ICCRTZ mission and programs, Adherence to Catholic moral teachings, Participation in community service projects.',
                            tags: ['terms', 'conditions', 'obligations', 'membership'],
                            helpful: 47,
                            views: 198,
                            related: [12, 2, 18]
                        },
                        {
                            id: 14,
                            category: 'membership',
                            question: 'Can I transfer my membership to another chapter or country?',
                            answer: 'Yes, you can transfer your membership within Tanzania or internationally. Process for local transfers: Contact your current chapter leadership, Submit transfer request form, Receive approval from receiving chapter, Pay small administrative fee of TSh 2,000, Update your membership information. International transfers require: Letter of recommendation from current chapter, Proof of membership in good standing, Approval from national leadership, Possible additional requirements based on destination country, Updated contact information and emergency contacts. Transfers typically take 2-4 weeks to process. Student transfers between universities are given priority and expedited processing.',
                            tags: ['transfer', 'chapter', 'relocation', 'international'],
                            helpful: 31,
                            views: 134,
                            related: [2, 3, 13]
                        },
                        {
                            id: 15,
                            category: 'donations',
                            question: 'What fundraising campaigns and special projects does ICCRTZ have?',
                            answer: 'ICCRTZ runs several fundraising campaigns throughout the year: Annual Easter Conference fundraiser (March-June), Building fund for new chapter locations, Scholarship fund for needy students, Mission trip fundraising (July-September), Christmas giving campaign (November-December), Local chapter development projects, Emergency relief funds, Leadership training scholarships. Special projects include: New chapter establishment, Church building support, Missionary support programs, Educational scholarships, Medical mission trips, Community development projects, Disaster relief efforts. Donors can specify which campaign or project they want to support, and we provide regular updates on project progress and impact.',
                            tags: ['fundraising', 'campaigns', 'projects', 'special'],
                            helpful: 42,
                            views: 176,
                            related: [5, 6, 16]
                        },
                        {
                            id: 16,
                            category: 'spiritual',
                            question: 'What counseling and support services does ICCRTZ offer?',
                            answer: 'ICCRZ offers comprehensive counseling and support services: Spiritual counseling with trained leaders, Marriage and family counseling, Career guidance and counseling, Academic support for students, Personal crisis intervention, Grief and bereavement counseling, Addiction recovery support, Mental health awareness and referrals, Financial counseling and planning, Relationship counseling, Leadership coaching and mentoring. All counseling is confidential and provided according to Catholic principles. We also have partnerships with professional counselors for specialized needs. Support groups include: Recovery groups, Support groups for specific life challenges, Mentoring relationships, Small group accountability, Peer support networks.',
                            tags: ['counseling', 'support', 'services', 'pastoral'],
                            helpful: 71,
                            views: 389,
                            related: [7, 8, 9]
                        },
                        {
                            id: 17,
                            category: 'events',
                            question: 'What types of events and activities does ICCRTZ organize throughout the year?',
                            answer: 'ICCRZ organizes diverse events and activities: Annual International Easter Conference (March-April), Monthly chapter meetings and fellowships, Quarterly leadership training workshops, Weekly Bible study and prayer meetings, Youth camps and retreats (August), Community service projects (ongoing), Evangelization outreaches, Sports tournaments and recreational activities, Cultural events and celebrations, Fundraising events and galas, Mission trips and outreach programs, Alumni reunions and networking events, Spiritual gifts conferences and seminars. Events vary by location and chapter, with major national events drawing thousands of participants from across Tanzania and neighboring countries.',
                            tags: ['events', 'activities', 'conferences', 'programs'],
                            helpful: 65,
                            views: 412,
                            related: [3, 4, 18]
                        },
                        {
                            id: 18,
                            category: 'technical',
                            question: 'How can I get involved in ICCRTZ leadership and volunteer opportunities?',
                            answer: 'Leadership and volunteer opportunities include: Chapter leadership positions (President, Vice President, Secretary, Treasurer), Small group leaders and facilitators, Event planning and coordination teams, Worship team members (musicians, singers, sound technicians), Media and communications team, Social media managers and content creators, Website and technical support, Fundraising and event coordination, Community service project leaders, Mentorship programs, Prayer team members, Administrative support at chapter level. To get involved: Express interest to your chapter leadership, Complete leadership application form, Attend leadership training programs, Demonstrate commitment and faithfulness, Serve in volunteer roles first, Participate in leadership development activities, Meet the specific requirements for each position.',
                            tags: ['leadership', 'volunteer', 'opportunities', 'involvement'],
                            helpful: 56,
                            views: 298,
                            related: [10, 11, 14]
                        }
                    ],
                    init() {
                        this.updateCategoryCounts();
                        this.$watch('searchQuery', () => this.filterFAQs());
                        this.$watch('selectedCategory', () => this.filterFAQs());
                    },
                    updateCategoryCounts() {
                        this.categories.forEach(category => {
                            category.count = this.faqs.filter(faq => category.id === 'all' || faq.category === category.id).length;
                        });
                    },
                    toggleItem(id) {
                        if (this.expandedItems.has(id)) {
                            this.expandedItems.delete(id);
                        } else {
                            this.expandedItems.add(id);
                        }
                    },
                    isExpanded(id) {
                        return this.expandedItems.has(id);
                    },
                    filterFAQs() {
                        let filtered = this.faqs.filter(faq => {
                            const matchesCategory = this.selectedCategory === 'all' || faq.category === this.selectedCategory;
                            const matchesSearch = !this.searchQuery || 
                                faq.question.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                                faq.answer.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                                faq.tags.some(tag => tag.toLowerCase().includes(this.searchQuery.toLowerCase()));
                            return matchesCategory && matchesSearch;
                        });
                        
                        // Sort by featured status first, then by helpful count
                        return filtered.sort((a, b) => {
                            if (this.featuredFAQs.includes(a.id) && !this.featuredFAQs.includes(b.id)) return -1;
                            if (!this.featuredFAQs.includes(a.id) && this.featuredFAQs.includes(b.id)) return 1;
                            return b.helpful - a.helpful;
                        });
                    },
                    getCategoryColor(categoryId) {
                        const category = this.categories.find(cat => cat.id === categoryId);
                        return category ? category.color : 'bg-slate-100 text-slate-700';
                    },
                    addToRecentSearches(query) {
                        if (query && !this.recentSearches.includes(query)) {
                            this.recentSearches.unshift(query);
                            this.recentSearches = this.recentSearches.slice(0, 5);
                        }
                    },
                    markHelpful(faqId) {
                        const faq = this.faqs.find(f => f.id === faqId);
                        if (faq) {
                            faq.helpful++;
                            faq.views++;
                        }
                    },
                    scrollToTop() {
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    },
                    showScrollTop: false,
                    initScrollListener() {
                        window.addEventListener('scroll', () => {
                            this.showScrollTop = window.scrollY > 500;
                        });
                    }
                };
            }
        </script>
    </body>
</html>
