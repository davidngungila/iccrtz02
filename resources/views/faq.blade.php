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
            body { 
                font-family: 'Manrope', sans-serif; 
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
                min-height: 100vh;
            }
            .font-serif { font-family: 'Playfair Display', serif; }
            [x-cloak] { display: none !important; }
            
            .gradient-bg {
                background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            }
            
            .card-shadow {
                box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            
            .faq-item {
                background: white;
                border-radius: 1rem;
                margin-bottom: 1rem;
                overflow: hidden;
                transition: all 0.3s ease;
                border: 1px solid #e2e8f0;
            }
            
            .faq-item:hover {
                box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            
            .faq-item.active {
                border-color: #3b82f6;
                box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.2), 0 10px 10px -5px rgba(59, 130, 246, 0.1);
            }
            
            .category-card {
                background: white;
                border-radius: 1rem;
                padding: 1.5rem;
                border: 1px solid #e2e8f0;
                transition: all 0.3s ease;
                cursor: pointer;
            }
            
            .category-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
                border-color: #3b82f6;
            }
            
            .category-card.active {
                background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
                color: white;
                border-color: #3b82f6;
            }
            
            .search-container {
                position: relative;
                max-width: 600px;
                margin: 0 auto;
            }
            
            .search-input {
                width: 100%;
                padding: 1rem 3rem 1rem 1rem;
                border-radius: 2rem;
                border: 2px solid #e2e8f0;
                font-size: 1rem;
                transition: all 0.3s ease;
            }
            
            .search-input:focus {
                outline: none;
                border-color: #3b82f6;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            }
            
            .search-icon {
                position: absolute;
                right: 1rem;
                top: 50%;
                transform: translateY(-50%);
                color: #64748b;
            }
            
            @media (max-width: 768px) {
                .category-card {
                    padding: 1rem;
                }
            }
        </style>
    </head>
    <body class="antialiased" x-data="{ 
        activeCategory: 'general',
        searchQuery: '',
        expandedItems: [],
        
        faqData: {
            general: [
                {
                    id: 1,
                    question: 'What is ICCRTZ?',
                    answer: 'ICCRTZ stands for Catholic Charismatic Tanzania – Universities Fellowship. We are a Catholic charismatic organization focused on spiritual renewal, leadership development, and community building among university students and young adults across Tanzania.',
                    icon: 'ph ph-info'
                },
                {
                    id: 2,
                    question: 'When was ICCRTZ founded?',
                    answer: 'ICCRTZ was established to bring together Catholic university students for spiritual growth, fellowship, and service. Our organization has grown to include chapters in universities across Tanzania.',
                    icon: 'ph ph-calendar'
                },
                {
                    id: 3,
                    question: 'What is the mission of ICCRTZ?',
                    answer: 'Our mission is to nurture spiritual growth, develop leadership skills, and build community among Catholic university students through prayer, fellowship, education, and service.',
                    icon: 'ph ph-target'
                },
                {
                    id: 4,
                    question: 'How can I join ICCRTZ?',
                    answer: 'You can join ICCRTZ by registering on our website, attending local chapter meetings, or participating in our events. Visit the registration page or contact your local university chapter for more information.',
                    icon: 'ph ph-user-plus'
                }
            ],
            membership: [
                {
                    id: 5,
                    question: 'Who can become a member of ICCRTZ?',
                    answer: 'ICCRTZ membership is open to Catholic university students, young adults, and those interested in spiritual growth and community service. You must be at least 18 years old and agree to our code of conduct.',
                    icon: 'ph ph-users'
                },
                {
                    id: 6,
                    question: 'What are the membership requirements?',
                    answer: 'Members must be practicing Catholics, regularly attend meetings, participate in activities, and uphold our Christian values. Annual membership fees may apply for certain programs.',
                    icon: 'ph ph-clipboard-text'
                },
                {
                    id: 7,
                    question: 'What are the benefits of membership?',
                    answer: 'Members enjoy spiritual growth opportunities, leadership training, community fellowship, access to events and resources, mentorship programs, and networking opportunities with other Catholic students.',
                    icon: 'ph ph-gift'
                },
                {
                    id: 8,
                    question: 'Can I join if I\'m not a university student?',
                    answer: 'While our focus is on university students, we welcome young adults and supporters who align with our mission. Some programs may have specific requirements.',
                    icon: 'ph ph-graduation-cap'
                }
            ],
            events: [
                {
                    id: 9,
                    question: 'What types of events does ICCRTZ organize?',
                    answer: 'We organize conferences, retreats, leadership summits, youth camps, workshops, prayer meetings, community service projects, and social events throughout the year.',
                    icon: 'ph ph-calendar'
                },
                {
                    id: 10,
                    question: 'How can I register for events?',
                    answer: 'Event registration is available through our website. Simply navigate to the Events page, select your desired event, and complete the registration form. Early registration is recommended as spaces may be limited.',
                    icon: 'ph ph-pencil'
                },
                {
                    id: 11,
                    question: 'Are there costs for attending events?',
                    answer: 'Some events are free while others require registration fees to cover costs. Fees vary depending on the event type, duration, and location. Scholarships may be available for those with financial constraints.',
                    icon: 'ph ph-currency-btz'
                },
                {
                    id: 12,
                    question: 'What should I bring to events?',
                    answer: 'Bring your Bible, notebook, pen, and an open heart. For overnight events, pack appropriate clothing, toiletries, and any required medications. Specific packing lists are provided for each event.',
                    icon: 'ph ph-backpack'
                }
            ],
            spiritual: [
                {
                    id: 13,
                    question: 'What spiritual activities does ICCRTZ offer?',
                    answer: 'We offer daily prayer meetings, Bible study groups, retreats, spiritual direction, charismatic prayer services, healing ministries, and formation programs.',
                    icon: 'ph ph-hands-praying'
                },
                {
                    id: 14,
                    question: 'Do I need to be charismatic to join?',
                    answer: 'No, ICCRTZ welcomes all Catholics interested in spiritual growth. While we incorporate charismatic elements, our focus is on authentic Catholic faith and personal relationship with God.',
                    icon: 'ph ph-heart'
                },
                {
                    id: 15,
                    question: 'How often are prayer meetings held?',
                    answer: 'Prayer meetings are typically held weekly at local chapters. Major prayer events and conferences are scheduled throughout the year. Check your local chapter schedule for specific times.',
                    icon: 'ph ph-clock'
                },
                {
                    id: 16,
                    question: 'Can I receive spiritual counseling?',
                    answer: 'Yes, we offer spiritual counseling and direction through trained leaders and priests. Contact your local chapter to arrange a meeting with a spiritual advisor.',
                    icon: 'ph ph-chat-circle'
                }
            ],
            leadership: [
                {
                    id: 17,
                    question: 'What leadership opportunities are available?',
                    answer: 'Members can serve as chapter leaders, event coordinators, ministry heads, prayer group leaders, and various other leadership roles. Training and mentorship are provided.',
                    icon: 'ph ph-crown'
                },
                {
                    id: 18,
                    question: 'How can I become a leader in ICCRTZ?',
                    answer: 'Start by actively participating in your local chapter, express interest to current leaders, complete leadership training programs, and demonstrate commitment to our values and mission.',
                    icon: 'ph ph-trophy'
                },
                {
                    id: 19,
                    question: 'What training is provided for leaders?',
                    answer: 'We offer comprehensive leadership training including spiritual formation, organizational skills, communication, event planning, pastoral care, and Catholic leadership principles.',
                    icon: 'ph ph-graduation-cap'
                },
                {
                    id: 20,
                    question: 'Are there leadership camps or programs?',
                    answer: 'Yes, we organize annual leadership camps, summits, and training programs. These include intensive training, practical experience, and networking opportunities.',
                    icon: 'ph ph-campsite'
                }
            ],
            support: [
                {
                    id: 21,
                    question: 'How can I support ICCRTZ financially?',
                    answer: 'You can support us through donations, sponsorships, and partnerships. Visit our donation page or contact our finance team for more information on giving opportunities.',
                    icon: 'ph ph-hand-heart'
                },
                {
                    id: 22,
                    question: 'Can I volunteer with ICCRTZ?',
                    answer: 'Absolutely! We welcome volunteers for events, programs, administrative tasks, and various ministries. Contact your local chapter or fill out our volunteer form.',
                    icon: 'ph ph-hand-raising'
                },
                {
                    id: 23,
                    question: 'How can I partner with ICCRTZ?',
                    answer: 'We partner with churches, organizations, and businesses that align with our mission. Contact our partnership team to explore collaboration opportunities.',
                    icon: 'ph ph-handshake'
                },
                {
                    id: 24,
                    question: 'What resources does ICCRTZ need?',
                    answer: 'We need prayer support, financial contributions, volunteer time, expertise in various areas, venue partnerships, and material resources for our programs.',
                    icon: 'ph ph-package'
                }
            ]
        },
        
        init() {
            // Initialize with first item expanded
            this.expandedItems = [1];
        },
        
        getFilteredFAQs() {
            const category = this.faqData[this.activeCategory] || [];
            if (!this.searchQuery) return category;
            
            return category.filter(item => 
                item.question.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                item.answer.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
        },
        
        toggleItem(itemId) {
            const index = this.expandedItems.indexOf(itemId);
            if (index > -1) {
                this.expandedItems.splice(index, 1);
            } else {
                this.expandedItems.push(itemId);
            }
        },
        
        isExpanded(itemId) {
            return this.expandedItems.includes(itemId);
        },
        
        setCategory(category) {
            this.activeCategory = category;
            this.expandedItems = [];
        }
    }">
        @include('components.header')

        <main class="pt-24 lg:pt-28 pb-16">
            <!-- Hero Section -->
            <section class="gradient-bg text-white py-16 lg:py-20">
                <div class="max-w-4xl mx-auto px-6 text-center">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <i class="ph ph-question text-xl"></i>
                        <span class="text-sm font-medium">Help & Support</span>
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6 font-serif">Frequently Asked Questions</h1>
                    <p class="text-lg lg:text-xl text-slate-200 leading-relaxed max-w-3xl mx-auto">
                        Find answers to common questions about ICCRTZ, our programs, membership, and activities. Can't find what you're looking for? Feel free to contact us.
                    </p>
                </div>
            </section>

            <!-- Search Section -->
            <section class="max-w-4xl mx-auto px-6 py-8">
                <div class="search-container">
                    <input 
                        type="text" 
                        x-model="searchQuery"
                        placeholder="Search FAQs..."
                        class="search-input">
                    <i class="ph ph-magnifying-glass search-icon text-xl"></i>
                </div>
                <div x-show="searchQuery" class="text-center mt-4">
                    <p class="text-slate-600">
                        Found <span class="font-bold text-blue-600" x-text="getFilteredFAQs().length"></span> results
                        <template x-if="searchQuery && getFilteredFAQs().length === 0">
                            <span class="text-amber-600">. Try different keywords.</span>
                        </template>
                    </p>
                </div>
            </section>

            <!-- Categories -->
            <section class="max-w-4xl mx-auto px-6 py-8">
                <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">Browse by Category</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <template x-for="(category, key) in {
                        general: { name: 'General', icon: 'ph ph-info', color: 'blue' },
                        membership: { name: 'Membership', icon: 'ph ph-users', color: 'green' },
                        events: { name: 'Events', icon: 'ph ph-calendar', color: 'purple' },
                        spiritual: { name: 'Spiritual Life', icon: 'ph ph-hands-praying', color: 'amber' },
                        leadership: { name: 'Leadership', icon: 'ph ph-crown', color: 'red' },
                        support: { name: 'Support Us', icon: 'ph ph-hand-heart', color: 'indigo' }
                    }" :key="key">
                        <div 
                            @click="setCategory(key)"
                            :class="activeCategory === key ? 'active' : ''"
                            class="category-card text-center">
                            <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3"
                                 :class="activeCategory === key ? 'bg-white/20' : ''">
                                <i :class="category.icon" class="text-xl"
                                   :class="activeCategory === key ? 'text-white' : 'text-slate-600'"></i>
                            </div>
                            <h3 class="font-semibold" x-text="category.name"></h3>
                        </div>
                    </template>
                </div>
            </section>

            <!-- FAQ Items -->
            <section class="max-w-4xl mx-auto px-6 py-8">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">
                        <template x-if="searchQuery">
                            Search Results
                        </template>
                        <template x-if="!searchQuery">
                            <template x-for="(category, key) in {
                                general: 'General',
                                membership: 'Membership',
                                events: 'Events',
                                spiritual: 'Spiritual Life',
                                leadership: 'Leadership',
                                support: 'Support Us'
                            }" :key="key">
                                <span x-show="activeCategory === key" x-text="category"></span>
                            </template>
                        </template>
                    </h2>
                    <p class="text-slate-600">
                        <span x-text="getFilteredFAQs().length"></span> questions found
                    </p>
                </div>

                <div class="space-y-4">
                    <template x-for="faq in getFilteredFAQs()" :key="faq.id">
                        <div class="faq-item" :class="{ 'active': isExpanded(faq.id) }">
                            <button 
                                @click="toggleItem(faq.id)"
                                class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                                <div class="flex items-center gap-3 flex-1">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i :class="faq.icon" class="text-blue-600"></i>
                                    </div>
                                    <h3 class="font-semibold text-slate-900" x-text="faq.question"></h3>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm text-slate-500">Click to expand</span>
                                    <i class="ph ph-chevron-down text-slate-400 transition-transform"
                                       :class="{ 'rotate-180': isExpanded(faq.id) }"></i>
                                </div>
                            </button>
                            <div x-show="isExpanded(faq.id)" 
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 transform -translate-y-4"
                                 x-transition:enter-end="opacity-100 transform translate-y-0"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100 transform translate-y-0"
                                 x-transition:leave-end="opacity-0 transform -translate-y-4"
                                 class="px-6 pb-4">
                                <div class="pl-13 pr-6">
                                    <p class="text-slate-600 leading-relaxed" x-text="faq.answer"></p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- No Results -->
                <div x-show="getFilteredFAQs().length === 0" class="text-center py-12">
                    <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ph ph-question text-slate-400 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-2">No FAQs Found</h3>
                    <p class="text-slate-600 mb-6">Try searching with different keywords or browse our categories.</p>
                    <button @click="searchQuery = ''" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        Clear Search
                    </button>
                </div>
            </section>

            <!-- Still Have Questions -->
            <section class="max-w-4xl mx-auto px-6 py-12">
                <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ph ph-chat-circle text-blue-600 text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Still Have Questions?</h2>
                    <p class="text-slate-600 mb-6 max-w-2xl mx-auto">
                        Can't find the answer you're looking for? Our team is here to help. Reach out to us through any of the following channels:
                    </p>
                    <div class="grid md:grid-cols-3 gap-4 mb-8">
                        <div class="bg-white rounded-lg p-4">
                            <i class="ph ph-envelope text-blue-600 text-xl mb-2"></i>
                            <h3 class="font-semibold text-slate-800 mb-1">Email</h3>
                            <p class="text-sm text-slate-600">info@iccrtz.org</p>
                        </div>
                        <div class="bg-white rounded-lg p-4">
                            <i class="ph ph-phone text-blue-600 text-xl mb-2"></i>
                            <h3 class="font-semibold text-slate-800 mb-1">Phone</h3>
                            <p class="text-sm text-slate-600">+255 712 345 678</p>
                        </div>
                        <div class="bg-white rounded-lg p-4">
                            <i class="ph ph-map-pin text-blue-600 text-xl mb-2"></i>
                            <h3 class="font-semibold text-slate-800 mb-1">Visit Us</h3>
                            <p class="text-sm text-slate-600">Archdiocese of Mbeya</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ url('contact') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                            Contact Us
                        </a>
                        <a href="{{ url('register') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg hover:bg-slate-50 transition-colors font-medium border border-blue-200">
                            Join ICCRTZ
                        </a>
                    </div>
                </div>
            </section>

            <!-- Quick Links -->
            <section class="max-w-4xl mx-auto px-6 py-8">
                <div class="bg-white rounded-xl card-shadow p-6">
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Quick Links</h3>
                    <div class="grid md:grid-cols-4 gap-4">
                        <a href="{{ url('about') }}" class="flex items-center gap-2 text-slate-600 hover:text-blue-600 transition-colors">
                            <i class="ph ph-info"></i>
                            <span>About Us</span>
                        </a>
                        <a href="{{ url('events') }}" class="flex items-center gap-2 text-slate-600 hover:text-blue-600 transition-colors">
                            <i class="ph ph-calendar"></i>
                            <span>Events</span>
                        </a>
                        <a href="{{ url('register') }}" class="flex items-center gap-2 text-slate-600 hover:text-blue-600 transition-colors">
                            <i class="ph ph-user-plus"></i>
                            <span>Register</span>
                        </a>
                        <a href="{{ url('contact') }}" class="flex items-center gap-2 text-slate-600 hover:text-blue-600 transition-colors">
                            <i class="ph ph-envelope"></i>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </section>
        </main>

        @include('components.footer')
    </body>
</html>
