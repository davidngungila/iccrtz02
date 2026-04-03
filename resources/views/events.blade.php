<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Events & Programs | Catholic Charismatic Tanzania – Universities Fellowship</title>

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
            .video-container {
                position: relative;
                padding-bottom: 56.25%;
                height: 0;
                overflow: hidden;
                max-width: 100%;
            }
            .video-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .live-badge {
                animation: pulse 2s infinite;
            }
            @keyframes pulse {
                0% { opacity: 1; }
                50% { opacity: 0.5; }
                100% { opacity: 1; }
            }
        </style>
    </head>
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">

            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center max-w-4xl mx-auto">
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Events & Programs</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Grow <span class="text-slate-300">Together</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Join our transformative events and programs designed to deepen your faith, develop your leadership skills, 
                            and build lasting connections with fellow Catholic students and alumni.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="#upcoming" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-calendar mr-2"></i> Upcoming Events
                            </a>
                            <a href="#livestream" class="px-8 py-4 bg-red-600 text-white font-bold rounded-full hover:bg-red-700 transition-all">
                                <i class="ph ph-broadcast mr-2"></i> Watch Live
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Live Streaming Section -->
            <section id="livestream" class="py-16 bg-gradient-to-br from-red-50 to-purple-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-red-600 text-white px-4 py-2 rounded-full text-sm font-bold mb-4">
                            <span class="w-2 h-2 bg-white rounded-full live-badge"></span>
                            LIVE STREAMING
                        </div>
                        <h2 class="text-4xl font-bold text-slate-900 mb-4">Watch Events Live</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                            Can't attend in person? Join us live on YouTube! All our major events are streamed for our global audience.
                        </p>
                    </div>

                    <!-- Featured Live Event -->
                    <div class="bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden mb-12">
                        <div class="bg-gradient-to-r from-red-600 to-purple-600 text-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="bg-white text-red-600 px-3 py-1 rounded-full text-sm font-bold">LIVE NOW</span>
                                        <span class="bg-white/20 px-3 py-1 rounded-full text-sm font-semibold">ICCR 2026</span>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-2">ICCR INTERNATIONAL EASTER CONFERENCE 2026</h3>
                                    <p class="text-white/90">Archdiocese of Mbeya, Tanzania • March 31 - April 5, 2026</p>
                                </div>
                                <div class="text-right">
                                    <div class="text-3xl font-bold">1,250+</div>
                                    <div class="text-sm text-white/80">Watching Live</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="grid gap-6 lg:grid-cols-2">
                                <!-- Main Live Stream -->
                                <div>
                                    <h4 class="text-lg font-bold text-slate-900 mb-4">Main Conference Stream</h4>
                                    <div class="video-container rounded-xl overflow-hidden shadow-lg mb-4">
                                        <iframe src="https://www.youtube.com/embed/1mV8lItaZlY" 
                                                frameborder="0" 
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                allowfullscreen>
                                        </iframe>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-red-600 rounded-full live-badge"></span>
                                            <span class="text-slate-600">Day 5 - Final Session</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <i class="ph ph-eye text-slate-400"></i>
                                            <span class="text-slate-600">1.2K viewers</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Additional Streams -->
                                <div>
                                    <h4 class="text-lg font-bold text-slate-900 mb-4">Conference Sessions</h4>
                                    <div class="space-y-4">
                                        <!-- Day 4 -->
                                        <div class="bg-slate-50 rounded-xl p-4">
                                            <div class="flex items-start gap-3">
                                                <div class="video-container rounded-lg overflow-hidden flex-shrink-0 w-32 h-18">
                                                    <iframe src="https://www.youtube.com/embed/a_TDzfg9Pgc" 
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                            allowfullscreen>
                                                    </iframe>
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="font-semibold text-slate-900 mb-1">Day 4 - Relationship Seminar</h5>
                                                    <p class="text-sm text-slate-600 mb-2">with Ev. A. Kanuti</p>
                                                    <div class="flex items-center gap-3 text-xs text-slate-500">
                                                        <span><i class="ph ph-clock"></i> 2:45:39</span>
                                                        <span><i class="ph ph-eye"></i> 856 views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Holy Mass -->
                                        <div class="bg-slate-50 rounded-xl p-4">
                                            <div class="flex items-start gap-3">
                                                <div class="video-container rounded-lg overflow-hidden flex-shrink-0 w-32 h-18">
                                                    <iframe src="https://www.youtube.com/embed/Y6jFbe8N5cI" 
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                            allowfullscreen>
                                                    </iframe>
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="font-semibold text-slate-900 mb-1">Thursday Holy Mass</h5>
                                                    <p class="text-sm text-slate-600 mb-2">International Easter Conference</p>
                                                    <div class="flex items-center gap-3 text-xs text-slate-500">
                                                        <span><i class="ph ph-clock"></i> 2:39:59</span>
                                                        <span><i class="ph ph-eye"></i> 1.2K views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Day 3 Healing -->
                                        <div class="bg-slate-50 rounded-xl p-4">
                                            <div class="flex items-start gap-3">
                                                <div class="video-container rounded-lg overflow-hidden flex-shrink-0 w-32 h-18">
                                                    <iframe src="https://www.youtube.com/embed/Gah1V3DPhRQ" 
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                            allowfullscreen>
                                                    </iframe>
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="font-semibold text-slate-900 mb-1">Day 3 - Healing of Family Tree</h5>
                                                    <p class="text-sm text-slate-600 mb-2">International Easter Conference</p>
                                                    <div class="flex items-center gap-3 text-xs text-slate-500">
                                                        <span><i class="ph ph-clock"></i> 1:45:22</span>
                                                        <span><i class="ph ph-eye"></i> 945 views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Conference Videos Grid -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-slate-900 mb-6">Complete Conference Sessions</h3>
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                            <!-- Eucharist Adoration -->
                            <div class="bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/tylTppFpWF8" 
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-slate-900 mb-2">Eucharist Adoration</h4>
                                    <p class="text-sm text-slate-600 mb-2">IBADA YA KUABUDU EKARIST</p>
                                    <div class="flex items-center gap-3 text-xs text-slate-500">
                                        <span><i class="ph ph-eye"></i> 678 views</span>
                                        <span><i class="ph ph-clock"></i> 1:23:45</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Bishop Teaching -->
                            <div class="bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/A_O5Heqledw" 
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-slate-900 mb-2">Bishop Gervas Nyaisonga</h4>
                                    <p class="text-sm text-slate-600 mb-2">Archdiocese of Mbeya Teaching</p>
                                    <div class="flex items-center gap-3 text-xs text-slate-500">
                                        <span><i class="ph ph-eye"></i> 1.1K views</span>
                                        <span><i class="ph ph-clock"></i> 4:23:07</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Doing Great Exploits -->
                            <div class="bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/yJ1xwLTidKk" 
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-slate-900 mb-2">Doing Great Exploits</h4>
                                    <p class="text-sm text-slate-600 mb-2">Mwalimu Kanuti Teaching</p>
                                    <div class="flex items-center gap-3 text-xs text-slate-500">
                                        <span><i class="ph ph-eye"></i> 892 views</span>
                                        <span><i class="ph ph-clock"></i> 2:15:30</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Conference Main -->
                            <div class="bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/PgIJm42OJhw" 
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-slate-900 mb-2">Conference Main</h4>
                                    <p class="text-sm text-slate-600 mb-2">International Easter Conference 2026</p>
                                    <div class="flex items-center gap-3 text-xs text-slate-500">
                                        <span><i class="ph ph-eye"></i> 2.3K views</span>
                                        <span><i class="ph ph-clock"></i> 3:45:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Conference Videos -->
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                        <!-- Day 3 Complete -->
                        <div class="bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/Rax72Zy8Gx4" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-semibold text-slate-900 mb-2">Day 3 Complete</h4>
                                <p class="text-sm text-slate-600 mb-2">International Easter Conference</p>
                                <div class="flex items-center gap-3 text-xs text-slate-500">
                                    <span><i class="ph ph-eye"></i> 567 views</span>
                                    <span><i class="ph ph-clock"></i> 4:12:15</span>
                                </div>
                            </div>
                        </div>

                        <!-- St Mary's Schools -->
                        <div class="bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=225&fit=crop" alt="St Mary's International Schools" class="w-full h-32 object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-2 left-2 right-2">
                                    <h4 class="font-semibold text-white text-sm mb-1">St Mary's International Schools</h4>
                                    <p class="text-xs text-white/90">Educational Excellence</p>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-3 text-xs text-slate-500">
                                    <span><i class="ph ph-graduation-cap"></i> Education</span>
                                    <span><i class="ph ph-map-pin"></i> Mbeya</span>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Content 1 -->
                        <div class="bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1573865526739-1064fec7a7bf?w=400&h=225&fit=crop" alt="Conference Worship" class="w-full h-32 object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-2 left-2 right-2">
                                    <h4 class="font-semibold text-white text-sm mb-1">Conference Worship</h4>
                                    <p class="text-xs text-white/90">Praise & Worship Sessions</p>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-3 text-xs text-slate-500">
                                    <span><i class="ph ph-music-notes"></i> Worship</span>
                                    <span><i class="ph ph-clock"></i> Daily</span>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Content 2 -->
                        <div class="bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=400&h=225&fit=crop" alt="Conference Fellowship" class="w-full h-32 object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-2 left-2 right-2">
                                    <h4 class="font-semibold text-white text-sm mb-1">Fellowship & Networking</h4>
                                    <p class="text-xs text-white/90">Community Building</p>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-3 text-xs text-slate-500">
                                    <span><i class="ph ph-users"></i> Community</span>
                                    <span><i class="ph ph-heart"></i> Fellowship</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Event -->
            <section class="py-16 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-slate-900 mb-4">Featured Events</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                            Don't miss out on our signature events that bring together thousands of believers for transformational experiences.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Easter Conference -->
                        <div class="group bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold z-10">
                                <span class="w-2 h-2 bg-white rounded-full live-badge inline-block mr-1"></span>
                                LIVE NOW
                            </div>
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&h=400&fit=crop" alt="International Easter Conference" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-900 text-white px-3 py-1 rounded-full text-sm font-semibold">Mar 31 - Apr 5, 2026</div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-red-100 text-red-700 rounded text-xs font-bold mb-3">Major Conference</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">International Easter Conference 2026</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Join thousands of believers for this transformative conference featuring renowned speakers, worship sessions, and spiritual renewal.
                                </p>
                                <div class="space-y-2 mb-4">
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-slate-500"><i class="ph ph-map-pin mr-1"></i> Mbeya City Stadium</span>
                                        <span class="text-slate-500"><i class="ph ph-users mr-1"></i> 5,000+ expected</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-slate-500"><i class="ph ph-clock mr-1"></i> 9:00 AM - 6:00 PM</span>
                                        <span class="text-slate-500"><i class="ph ph-broadcast mr-1"></i> Live Stream</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="flex items-center gap-2 text-green-800 text-sm mb-2">
                                        <i class="ph ph-broadcast"></i>
                                        <span class="font-semibold">Conference is LIVE! Watch online or join in Mbeya</span>
                                    </div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="font-semibold text-slate-700">Live Attendance</span>
                                        <span class="font-bold text-green-600">1,250+ joined</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-green-600 h-2 rounded-full animate-pulse" style="width: 62.5%"></div>
                                    </div>
                                </div>
                                <a href="#livestream" class="w-full bg-red-600 text-white px-4 py-3 rounded-full font-bold hover:bg-red-700 transition-all text-center">
                                    🔴 Join Live Stream
                                </a>
                            </div>
                        </div>

                        <!-- Night of Praise -->
                        <div class="group bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="absolute top-4 right-4 bg-slate-900 text-white px-3 py-1 rounded-full text-sm font-bold z-10">
                                DECEMBER
                            </div>
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Night of Praise" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-900 text-white px-3 py-1 rounded-full text-sm font-semibold">Dec 15-16, 2026</div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Annual Event</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Night of Praise</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    An electrifying night of worship featuring top gospel artists, powerful ministry, and life-transforming encounters.
                                </p>
                                <div class="space-y-2 mb-4">
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-slate-500"><i class="ph ph-map-pin mr-1"></i> Dar es Salaam</span>
                                        <span class="text-slate-500"><i class="ph ph-users mr-1"></i> 5,000+ expected</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-slate-500"><i class="ph ph-clock mr-1"></i> 6:00 PM - 2:00 AM</span>
                                        <span class="text-slate-500"><i class="ph ph-music-notes mr-1"></i> Live Concert</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="font-semibold text-slate-700">Registration Open</span>
                                        <span class="font-bold text-slate-600">2,100/5,000</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-slate-900 h-2 rounded-full" style="width: 42%"></div>
                                    </div>
                                </div>
                                <a href="{{ url('events/night-of-praise') }}" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-bold hover:bg-slate-800 transition-all text-center">
                                    Learn More
                                </a>
                            </div>
                        </div>

                        <!-- NexGen Camp -->
                        <div class="group bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="absolute top-4 right-4 bg-slate-800 text-white px-3 py-1 rounded-full text-sm font-bold z-10">
                                AUGUST
                            </div>
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="NexGen Camp" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-800 text-white px-3 py-1 rounded-full text-sm font-semibold">Aug 8-14, 2026</div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Youth Camp</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">NexGen Camp 2026</h3>
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Camp</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Summer Leadership Camp</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    5-day intensive leadership and spiritual formation camp.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-map-pin mr-1"></i> Arusha</span>
                                    <span><i class="ph ph-users mr-1"></i> 200 spots</span>
                                </div>
                                <div class="mb-4">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="font-semibold text-slate-700">Registration</span>
                                        <span class="font-bold text-slate-900">120/200</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-slate-700 h-2 rounded-full" style="width: 60%"></div>
                                    </div>
                                </div>
                                <a href="{{ url('register/summer-camp') }}" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Register Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Annual Events -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-slate-900 mb-4">Annual Programs</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                            Our recurring programs designed to nurture spiritual growth, leadership development, and community engagement throughout the year.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                        <!-- Leadership Summit -->
                        <div class="text-center">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-crown text-white text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Leadership Summit</h3>
                            <p class="text-slate-600 mb-4">Quarterly leadership development program for student leaders and young professionals.</p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2"><i class="ph ph-calendar mr-1"></i> Quarterly</div>
                                <div><i class="ph ph-users mr-1"></i> 50-100 participants</div>
                            </div>
                        </div>

                        <!-- Bible Study -->
                        <div class="text-center">
                            <div class="bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-book-open text-white text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Bible Study</h3>
                            <p class="text-slate-600 mb-4">Weekly bible study sessions focusing on spiritual formation and biblical understanding.</p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2"><i class="ph ph-calendar mr-1"></i> Weekly</div>
                                <div><i class="ph ph-users mr-1"></i> 30-50 participants</div>
                            </div>
                        </div>

                        <!-- Prayer Meetings -->
                        <div class="text-center">
                            <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-hands-praying text-white text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Prayer Meetings</h3>
                            <p class="text-slate-600 mb-4">Regular prayer gatherings for intercession, worship, and spiritual warfare.</p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2"><i class="ph ph-calendar mr-1"></i> Bi-weekly</div>
                                <div><i class="ph ph-users mr-1"></i> 40-80 participants</div>
                            </div>
                        </div>

                        <!-- Community Service -->
                        <div class="text-center">
                            <div class="bg-gradient-to-br from-orange-500 to-orange-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-heart text-white text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Community Service</h3>
                            <p class="text-slate-600 mb-4">Monthly outreach programs serving local communities through various initiatives.</p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2"><i class="ph ph-calendar mr-1"></i> Monthly</div>
                                <div><i class="ph ph-users mr-1"></i> 100-200 participants</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="py-20 bg-gradient-to-r from-slate-900 to-slate-800 text-white">
                <div class="max-w-4xl mx-auto px-6 text-center">
                    <h2 class="text-4xl font-bold mb-6">Ready to Join Us?</h2>
                    <p class="text-xl mb-8 text-slate-200">
                        Be part of our growing community and experience transformation through faith, fellowship, and service.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ url('register') }}" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                            <i class="ph ph-user-plus mr-2"></i> Register for Events
                        </a>
                        <a href="{{ url('contact') }}" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                            <i class="ph ph-envelope mr-2"></i> Contact Us
                        </a>
                    </div>
                </div>
            </section>
        </main>

        @include('components.footer')
    </body>
</html>
