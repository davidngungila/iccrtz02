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
            }
            .faq-item:hover {
                background: rgba(99, 102, 241, 0.02);
            }
            .faq-question {
                cursor: pointer;
                transition: all 0.3s ease;
            }
            .faq-question:hover {
                color: #6366f1;
            }
            .faq-answer {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease, padding 0.3s ease;
            }
            .faq-answer.open {
                max-height: 500px;
                padding-top: 1rem;
                padding-bottom: 1rem;
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
            }
            .category-badge:hover {
                transform: translateY(-1px);
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            }
            .search-highlight {
                background: linear-gradient(120deg, #fef3c7 0%, #fef3c7 100%);
                background-size: 100% 100%;
                animation: highlight 0.5s ease;
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
        </style>
    </head>
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ 
        mobileMenuOpen: false,
        searchQuery: '',
        selectedCategory: 'all',
        expandedItems: new Set(),
        categories: [
            { id: 'all', name: 'All Categories', icon: 'ph-grid', color: 'bg-slate-100 text-slate-700' },
            { id: 'membership', name: 'Membership', icon: 'ph-users', color: 'bg-blue-100 text-blue-700' },
            { id: 'events', name: 'Events', icon: 'ph-calendar', color: 'bg-green-100 text-green-700' },
            { id: 'donations', name: 'Donations', icon: 'ph-heart', color: 'bg-red-100 text-red-700' },
            { id: 'spiritual', name: 'Spiritual', icon: 'ph-cross', color: 'bg-purple-100 text-purple-700' },
            { id: 'technical', name: 'Technical', icon: 'ph-devices', color: 'bg-orange-100 text-orange-700' },
            { id: 'legal', name: 'Legal', icon: 'ph-scales', color: 'bg-indigo-100 text-indigo-700' }
        ],
        faqs: [
            {
                id: 1,
                category: 'membership',
                question: 'How do I become a member of ICCRTZ?',
                answer: 'To become a member of ICCRTZ, you need to be a university student or young adult who shares our Christian values. You can apply online through our registration form, attend an orientation session, and complete the membership approval process. Membership is subject to approval by the local chapter leadership.',
                tags: ['registration', 'join', 'application']
            },
            {
                id: 2,
                category: 'membership',
                question: 'What are the membership requirements?',
                answer: 'Membership requirements include: being at least 18 years old, being a university student or young adult, agreeing with our statement of faith, committing to our code of conduct, and paying annual membership fees (if applicable). You must also provide valid identification and complete the membership application form.',
                tags: ['requirements', 'eligibility', 'fees']
            },
            {
                id: 3,
                category: 'events',
                question: 'How can I register for ICCRTZ events?',
                answer: 'You can register for ICCRTZ events through our website, mobile app, or by contacting your local chapter. Most events require pre-registration and may have registration fees. Early registration is recommended as events often have limited capacity. Payment can be made online, mobile money, or at our offices.',
                tags: ['registration', 'events', 'payment']
            },
            {
                id: 4,
                category: 'events',
                question: 'Are ICCRTZ events open to non-members?',
                answer: 'Most ICCRTZ events are open to both members and non-members, though members may receive priority registration or discounted rates. Some exclusive events may be limited to members only. Check the specific event details for eligibility requirements and pricing information.',
                tags: ['events', 'non-members', 'pricing']
            },
            {
                id: 5,
                category: 'donations',
                question: 'How can I make a donation to ICCRTZ?',
                answer: 'Donations can be made through multiple channels: online via our website using credit/debit cards, mobile money transfers (M-Pesa, Tigo Pesa), bank transfers, or in person at our offices. We accept one-time donations and recurring monthly contributions. All donations are tax-deductible where applicable.',
                tags: ['donations', 'payment', 'tax']
            },
            {
                id: 6,
                category: 'donations',
                question: 'How are my donations used?',
                answer: 'Your donations support various ICCRTZ activities including: organizing conferences and events, supporting local chapters, providing leadership training, funding community service projects, maintaining our facilities, and supporting our missionary work. Annual financial reports are available to members showing how funds are allocated.',
                tags: ['donations', 'usage', 'transparency']
            },
            {
                id: 7,
                category: 'spiritual',
                question: 'What is the spiritual focus of ICCRTZ?',
                answer: 'ICCRTZ focuses on Catholic charismatic spirituality, emphasizing personal relationship with Jesus Christ, baptism in the Holy Spirit, spiritual gifts, evangelization, and community building. We combine traditional Catholic teachings with charismatic expression through worship, prayer, and spiritual formation programs.',
                tags: ['spirituality', 'catholic', 'charismatic']
            },
            {
                id: 8,
                category: 'spiritual',
                question: 'Do I need to be Catholic to join ICCRTZ?',
                answer: 'While ICCRTZ is a Catholic organization, we welcome all Christians who respect our Catholic identity and values. Non-Catholic members are expected to participate respectfully in Catholic practices and understand that our teachings and activities are based on Catholic doctrine and traditions.',
                tags: ['catholic', 'interdenominational', 'faith']
            },
            {
                id: 9,
                category: 'technical',
                question: 'How do I access the ICCRTZ mobile app?',
                answer: 'The ICCRTZ mobile app is available for free download on both iOS (App Store) and Android (Google Play Store). Search for "ICCR Tanzania" to find the official app. You\'ll need to create an account using your membership details to access all features.',
                tags: ['mobile', 'app', 'technology']
            },
            {
                id: 10,
                category: 'technical',
                question: 'What should I do if I forget my password?',
                answer: 'If you forget your password, click the "Forgot Password" link on the login page. Enter your email address, and we\'ll send you instructions to reset your password. For security reasons, password reset links expire after 24 hours. If you don\'t receive the email, check your spam folder.',
                tags: ['password', 'login', 'security']
            },
            {
                id: 11,
                category: 'legal',
                question: 'How is my personal information protected?',
                answer: 'We protect your personal information according to our Privacy Policy and applicable data protection laws. We use secure servers, encryption, and access controls to safeguard your data. We only collect information necessary for our services and never sell or share your personal information with third parties without your consent.',
                tags: ['privacy', 'data', 'security']
            },
            {
                id: 12,
                category: 'legal',
                question: 'What are ICCRTZ\'s terms and conditions?',
                answer: 'Our Terms & Conditions govern your use of ICCRTZ services, membership participation, and event attendance. They outline your rights and responsibilities, our obligations, privacy practices, and dispute resolution procedures. You must agree to these terms to use our services.',
                tags: ['terms', 'conditions', 'legal']
            },
            {
                id: 13,
                category: 'membership',
                question: 'Can I transfer my membership to another chapter?',
                answer: 'Yes, you can transfer your membership to another ICCRTZ chapter if you relocate or wish to join a different chapter. Contact your current chapter leadership to initiate the transfer process. The receiving chapter will need to approve the transfer, and there may be a small administrative fee.',
                tags: ['transfer', 'chapter', 'relocation']
            },
            {
                id: 14,
                category: 'events',
                question: 'What should I bring to ICCRTZ conferences?',
                answer: 'For ICCRTZ conferences, bring: Bible, notebook, pen, comfortable clothing, personal items, and any required registration confirmation. Some conferences may have specific requirements listed in the event details. Check the conference information packet for any special items needed.',
                tags: ['conferences', 'preparation', 'requirements']
            },
            {
                id: 15,
                category: 'donations',
                question: 'Can I specify how my donation should be used?',
                answer: 'Yes, you can specify how you\'d like your donation to be used (e.g., specific projects, local chapter, general fund). While we try to honor donor preferences, we reserve the right to redirect funds to where they\'re most needed for the organization\'s mission.',
                tags: ['donations', 'specification', 'projects']
            },
            {
                id: 16,
                category: 'spiritual',
                question: 'Does ICCRTZ offer spiritual counseling?',
                answer: 'Yes, ICCRTZ offers spiritual counseling through trained leaders and pastoral care teams. This includes prayer support, spiritual guidance, and counseling for personal challenges. All counseling is confidential and provided according to Catholic spiritual direction principles.',
                tags: ['counseling', 'spiritual', 'support']
            },
            {
                id: 17,
                category: 'technical',
                question: 'How do I report technical issues with the website?',
                answer: 'Report technical issues by emailing support@iccrtz.org or using the contact form on our website. Include details about the problem, your browser/device information, and screenshots if possible. We typically respond within 24-48 hours during business days.',
                tags: ['support', 'technical', 'issues']
            },
            {
                id: 18,
                category: 'legal',
                question: 'What is ICCRTZ\'s refund policy?',
                answer: 'Refund policies vary by event and service. Generally, event registrations are refundable up to 7 days before the event, minus a processing fee. Donations are typically non-refundable unless required by law. Specific refund terms are provided during registration and in our Terms & Conditions.',
                tags: ['refunds', 'policy', 'cancellations']
            }
        ],
        init() {
            this.$watch('searchQuery', () => this.filterFAQs());
            this.$watch('selectedCategory', () => this.filterFAQs());
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
            return this.faqs.filter(faq => {
                const matchesCategory = this.selectedCategory === 'all' || faq.category === this.selectedCategory;
                const matchesSearch = !this.searchQuery || 
                    faq.question.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                    faq.answer.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                    faq.tags.some(tag => tag.toLowerCase().includes(this.searchQuery.toLowerCase()));
                return matchesCategory && matchesSearch;
            });
        },
        getCategoryColor(categoryId) {
            const category = this.categories.find(cat => cat.id === categoryId);
            return category ? category.color : 'bg-slate-100 text-slate-700';
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
    }" x-init="initScrollListener()">
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
                            Find answers to common questions about ICCRTZ membership, events, donations, and more.
                        </p>
                        
                        <!-- Search Bar -->
                        <div class="max-w-2xl mx-auto mb-8">
                            <div class="relative">
                                <input type="text" 
                                       x-model="searchQuery"
                                       placeholder="Search FAQs..." 
                                       class="w-full px-6 py-4 pl-14 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50 focus:bg-white/20 transition-all">
                                <i class="ph ph-magnifying-glass absolute left-5 top-4 text-white/70 text-xl"></i>
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
                            Click on any question to reveal the answer. Can't find what you're looking for? 
                            <a href="{{ url('contact') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">Contact us</a>.
                        </p>
                    </div>

                    <!-- FAQ Items -->
                    <div class="space-y-2">
                        <template x-for="faq in filterFAQs()" :key="faq.id">
                            <div class="faq-item bg-white rounded-xl border border-slate-200 overflow-hidden">
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
                                        <template x-for="tag in faq.tags" :key="tag">
                                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded" x-text="tag"></span>
                                        </template>
                                        <i class="ph ph-chevron-down text-slate-400 transition-transform duration-300"
                                           :class="isExpanded(faq.id) ? 'rotate-180' : ''"></i>
                                    </div>
                                </button>
                                <div class="faq-answer px-6 text-slate-600" 
                                     :class="isExpanded(faq.id) ? 'open' : ''">
                                    <p x-text="faq.answer"></p>
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
                            Our team is here to help you with any additional questions or concerns.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Contact Support -->
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-indigo-200 transition-colors">
                                <i class="ph ph-envelope text-indigo-600 text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Email Support</h3>
                            <p class="text-slate-600 mb-4">Get help via email for detailed questions and support.</p>
                            <a href="{{ url('contact') }}" class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-800 font-semibold">
                                <i class="ph ph-arrow-right"></i>
                                Contact Us
                            </a>
                        </div>

                        <!-- Visit Office -->
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-green-200 transition-colors">
                                <i class="ph ph-map-pin text-green-600 text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Visit Our Office</h3>
                            <p class="text-slate-600 mb-4">Meet with our team in person for immediate assistance.</p>
                            <div class="text-sm text-slate-600">
                                <div class="mb-2">P.O. Box 1234, Mbeya</div>
                                <div>Monday - Friday, 9:00 AM - 5:00 PM</div>
                            </div>
                        </div>

                        <!-- Call Us -->
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-200 transition-colors">
                                <i class="ph ph-phone text-purple-600 text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Phone Support</h3>
                            <p class="text-slate-600 mb-4">Call us for urgent questions and immediate assistance.</p>
                            <div class="text-sm text-slate-600">
                                <div class="mb-2">+255 712 345 678</div>
                                <div>+255 713 456 789</div>
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
                        <p class="text-xl text-slate-600">Quick access to frequently searched topics</p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <a href="#" class="bg-white rounded-xl p-6 border border-slate-200 hover:border-indigo-300 hover:shadow-lg transition-all group">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                                <i class="ph ph-users text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-2">Membership</h3>
                            <p class="text-sm text-slate-600">Join ICCRTZ and become part of our community</p>
                        </a>

                        <a href="#" class="bg-white rounded-xl p-6 border border-slate-200 hover:border-green-300 hover:shadow-lg transition-all group">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-green-200 transition-colors">
                                <i class="ph ph-calendar text-green-600 text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-2">Events</h3>
                            <p class="text-sm text-slate-600">Register for conferences and activities</p>
                        </a>

                        <a href="#" class="bg-white rounded-xl p-6 border border-slate-200 hover:border-red-300 hover:shadow-lg transition-all group">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors">
                                <i class="ph ph-heart text-red-600 text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-2">Donations</h3>
                            <p class="text-sm text-slate-600">Support our mission and programs</p>
                        </a>

                        <a href="#" class="bg-white rounded-xl p-6 border border-slate-200 hover:border-purple-300 hover:shadow-lg transition-all group">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-purple-200 transition-colors">
                                <i class="ph ph-cross text-purple-600 text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-slate-900 mb-2">Spiritual Life</h3>
                            <p class="text-sm text-slate-600">Grow in faith and spiritual formation</p>
                        </a>
                    </div>
                </div>
            </section>
        </main>

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
    </body>
</html>
