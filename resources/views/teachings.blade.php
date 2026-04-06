<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Teachings | Catholic Charismatic Tanzania – Universities Fellowship</title>

        <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Manrope', sans-serif; }
            .font-serif { font-family: 'Playfair Display', serif; }
            .glass { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(15px); }
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
        </style>
    </head>
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false, selectedCategory: 'all' }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">

            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-slate-900 to-slate-800 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center max-w-4xl mx-auto">
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Teachings</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Deepen <span class="text-slate-300">Your Faith</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Explore our comprehensive collection of Catholic teachings, spiritual formation resources, 
                            and leadership development materials designed to nurture your faith journey.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="#featured" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-book-open mr-2"></i> Featured Teachings
                            </a>
                            <a href="#categories" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                                <i class="ph ph-grid-four mr-2"></i> Browse Categories
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Teachings -->
            <section id="featured" class="py-20 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Featured</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Featured Teachings</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Discover our most popular and impactful teachings on faith, leadership, and spiritual growth.
                        </p>
                    </div>

                    <div class="swiper featuredSwiper mb-12">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                                    <div class="aspect-video bg-slate-200 relative">
                                        <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457152/0104_64_bu7rig.jpg" alt="Teaching" class="w-full h-full object-cover">
                                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                            Featured
                                        </div>
                                        <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm">
                                            <i class="ph ph-play mr-1"></i> 45 min
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Spiritual Formation</span>
                                        <h3 class="text-xl font-bold text-slate-900 mb-3">The Power of Prayer in Student Life</h3>
                                        <p class="text-slate-600 leading-relaxed mb-4">
                                            Discover how prayer can transform your university experience and deepen your relationship with God.
                                        </p>
                                        <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                            <span><i class="ph ph-user mr-1"></i> Fr. John Mwanga</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Dec 10, 2024</span>
                                        </div>
                                        <a href="#" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                            Watch Teaching
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                                    <div class="aspect-video bg-slate-200 relative">
                                        <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457151/0204_21_mugaed.jpg" alt="Teaching" class="w-full h-full object-cover">
                                        <div class="absolute top-4 left-4 bg-slate-800 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                            Popular
                                        </div>
                                        <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm">
                                            <i class="ph ph-play mr-1"></i> 32 min
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Leadership</span>
                                        <h3 class="text-xl font-bold text-slate-900 mb-3">Catholic Leadership in Modern Times</h3>
                                        <p class="text-slate-600 leading-relaxed mb-4">
                                            Learn how to lead with integrity and faith in today's challenging world.
                                        </p>
                                        <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                            <span><i class="ph ph-user mr-1"></i> Grace Joseph</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Dec 8, 2024</span>
                                        </div>
                                        <a href="#" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                            Watch Teaching
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                                    <div class="aspect-video bg-slate-200 relative">
                                        <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457162/0104_33_gh3ckn.jpg" alt="Teaching" class="w-full h-full object-cover">
                                        <div class="absolute top-4 left-4 bg-slate-700 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                            New
                                        </div>
                                        <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm">
                                            <i class="ph ph-play mr-1"></i> 28 min
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Bible Study</span>
                                        <h3 class="text-xl font-bold text-slate-900 mb-3">Understanding the Beatitudes</h3>
                                        <p class="text-slate-600 leading-relaxed mb-4">
                                            A deep dive into Jesus' teachings on blessedness and how they apply to student life.
                                        </p>
                                        <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                            <span><i class="ph ph-user mr-1"></i> Michael Kimario</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Dec 5, 2024</span>
                                        </div>
                                        <a href="#" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                            Watch Teaching
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination mt-8"></div>
                    </div>
                </div>
            </section>

            <!-- Categories -->
            <section id="categories" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Categories</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Teaching Categories</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Browse our teachings organized by topic to find exactly what you need for your spiritual journey.
                        </p>
                    </div>

                    <!-- Category Filter -->
                    <div class="flex flex-wrap justify-center gap-3 mb-12">
                        <button @click="selectedCategory = 'all'" 
                                :class="selectedCategory === 'all' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-900'"
                                class="px-6 py-3 rounded-full font-semibold transition-all">
                            All Teachings
                        </button>
                        <button @click="selectedCategory = 'spiritual'" 
                                :class="selectedCategory === 'spiritual' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-900'"
                                class="px-6 py-3 rounded-full font-semibold transition-all">
                            Spiritual Formation
                        </button>
                        <button @click="selectedCategory = 'leadership'" 
                                :class="selectedCategory === 'leadership' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-900'"
                                class="px-6 py-3 rounded-full font-semibold transition-all">
                            Leadership
                        </button>
                        <button @click="selectedCategory = 'bible'" 
                                :class="selectedCategory === 'bible' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-900'"
                                class="px-6 py-3 rounded-full font-semibold transition-all">
                            Bible Study
                        </button>
                        <button @click="selectedCategory = 'sacraments'" 
                                :class="selectedCategory === 'sacraments' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-900'"
                                class="px-6 py-3 rounded-full font-semibold transition-all">
                            Sacraments
                        </button>
                        <button @click="selectedCategory = 'prayer'" 
                                :class="selectedCategory === 'prayer' ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-900'"
                                class="px-6 py-3 rounded-full font-semibold transition-all">
                            Prayer & Worship
                        </button>
                    </div>

                    <!-- Teaching Grid -->
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all"
                             x-show="selectedCategory === 'all' || selectedCategory === 'spiritual'">
                            <div class="aspect-video bg-slate-200 relative">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457145/0204_44_adnyre.jpg" alt="Teaching" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm">
                                    <i class="ph ph-play mr-1"></i> 25 min
                                </div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Spiritual Formation</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Growing in Holiness</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Practical steps for growing in personal holiness during your university years.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-user mr-1"></i> Sr. Grace Joseph</span>
                                    <span><i class="ph ph-calendar mr-1"></i> Nov 28, 2024</span>
                                </div>
                                <a href="#" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Watch Teaching
                                </a>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all"
                             x-show="selectedCategory === 'all' || selectedCategory === 'leadership'">
                            <div class="aspect-video bg-slate-200 relative">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457124/0304_sauiub.jpg" alt="Teaching" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm">
                                    <i class="ph ph-play mr-1"></i> 38 min
                                </div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Leadership</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Servant Leadership</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Biblical principles of leadership that focus on service and humility.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-user mr-1"></i> Fr. Michael Kimario</span>
                                    <span><i class="ph ph-calendar mr-1"></i> Nov 25, 2024</span>
                                </div>
                                <a href="#" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Watch Teaching
                                </a>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all"
                             x-show="selectedCategory === 'all' || selectedCategory === 'bible'">
                            <div class="aspect-video bg-slate-200 relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Teaching" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm">
                                    <i class="ph ph-play mr-1"></i> 42 min
                                </div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Bible Study</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">The Prodigal Son</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Understanding God's mercy and forgiveness through this powerful parable.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-user mr-1"></i> Anna Mwalimu</span>
                                    <span><i class="ph ph-calendar mr-1"></i> Nov 22, 2024</span>
                                </div>
                                <a href="#" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Watch Teaching
                                </a>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all"
                             x-show="selectedCategory === 'all' || selectedCategory === 'sacraments'">
                            <div class="aspect-video bg-slate-200 relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Teaching" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm">
                                    <i class="ph ph-play mr-1"></i> 35 min
                                </div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Sacraments</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">The Eucharist</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Deepening your understanding and appreciation of the source and summit of our faith.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-user mr-1"></i> Fr. John Mwanga</span>
                                    <span><i class="ph ph-calendar mr-1"></i> Nov 20, 2024</span>
                                </div>
                                <a href="#" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Watch Teaching
                                </a>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all"
                             x-show="selectedCategory === 'all' || selectedCategory === 'prayer'">
                            <div class="aspect-video bg-slate-200 relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Teaching" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm">
                                    <i class="ph ph-play mr-1"></i> 30 min
                                </div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Prayer & Worship</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Charismatic Prayer</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Understanding and experiencing the gifts of the Holy Spirit in prayer.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-user mr-1"></i> Grace Joseph</span>
                                    <span><i class="ph ph-calendar mr-1"></i> Nov 18, 2024</span>
                                </div>
                                <a href="#" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Watch Teaching
                                </a>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all"
                             x-show="selectedCategory === 'all' || selectedCategory === 'spiritual'">
                            <div class="aspect-video bg-slate-200 relative">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457145/0204_44_adnyre.jpg" alt="Teaching" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm">
                                    <i class="ph ph-play mr-1"></i> 28 min
                                </div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Spiritual Formation</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Discerning God's Will</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Practical guidance for discerning God's calling in your life and career.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-user mr-1"></i> Michael Kimario</span>
                                    <span><i class="ph ph-calendar mr-1"></i> Nov 15, 2024</span>
                                </div>
                                <a href="#" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Watch Teaching
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Resources Section -->
            <section class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Resources</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Additional Resources</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Download study guides, prayer books, and other materials to support your spiritual growth.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                        <div class="bg-white rounded-3xl p-6 text-center shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-book text-white text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Bible Study Guides</h3>
                            <p class="text-slate-600 text-sm mb-4">Comprehensive guides for personal and group Bible study</p>
                            <a href="#" class="text-slate-900 font-semibold text-sm hover:text-slate-700">
                                Download <i class="ph ph-download"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-3xl p-6 text-center shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-prayer text-white text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Prayer Books</h3>
                            <p class="text-slate-600 text-sm mb-4">Collection of Catholic prayers and devotions</p>
                            <a href="#" class="text-slate-900 font-semibold text-sm hover:text-slate-700">
                                Download <i class="ph ph-download"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-3xl p-6 text-center shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="w-16 h-16 bg-slate-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-notebook text-white text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Study Notes</h3>
                            <p class="text-slate-600 text-sm mb-4">Notes from recent teachings and conferences</p>
                            <a href="#" class="text-slate-900 font-semibold text-sm hover:text-slate-700">
                                Download <i class="ph ph-download"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-3xl p-6 text-center shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="w-16 h-16 bg-slate-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-music-notes text-white text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Worship Songs</h3>
                            <p class="text-slate-600 text-sm mb-4">Lyrics and chords for fellowship worship</p>
                            <a href="#" class="text-slate-900 font-semibold text-sm hover:text-slate-700">
                                Download <i class="ph ph-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        @include('components.footer')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Featured Teachings Swiper
                const featuredSwiper = new Swiper('.featuredSwiper', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                    },
                });

                // Smooth scrolling
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    });
                });
            });
        </script>
    </body>
</html>
