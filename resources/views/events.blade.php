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
            .video-grid {
                display: grid;
                gap: 1.5rem;
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            }
            @media (min-width: 768px) {
                .video-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
            @media (min-width: 1024px) {
                .video-grid {
                    grid-template-columns: repeat(3, 1fr);
                }
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
                    <div class="text-center">
                        <h1 class="text-5xl lg:text-6xl font-bold mb-6 font-serif">Events & Programs</h1>
                        <p class="text-xl lg:text-2xl text-slate-200 max-w-4xl mx-auto leading-relaxed">
                            Join us for transformative experiences that bring together thousands of believers across Tanzania and beyond.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-8">
                            <a href="#featured" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-calendar mr-2"></i> View Events
                            </a>
                            <a href="#conference-videos" class="px-8 py-4 bg-red-600 text-white font-bold rounded-full hover:bg-red-700 transition-all shadow-xl">
                                <i class="ph ph-video mr-2"></i> Watch Conference
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Event -->
            <section id="featured" class="py-16 bg-slate-50">
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
                                        <span class="text-slate-500"><i class="ph ph-map-pin mr-1"></i> St Mary's International Schools</span>
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
                                <a href="#conference-videos" class="w-full bg-red-600 text-white px-4 py-3 rounded-full font-bold hover:bg-red-700 transition-all text-center">
                                    🔴 Watch Conference Videos
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

            <!-- Conference Videos Section -->
            <section id="conference-videos" class="py-16 bg-gradient-to-br from-red-50 to-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-slate-900 mb-4">International Easter Conference 2026</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                            Watch all sessions from the International Easter Conference 2026 held at St Mary's International Schools, Mbeya
                        </p>
                    </div>

                    <div class="video-grid">
                        <!-- Day 5 -->
                        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/1mV8lItaZlY" 
                                        title="ICCR INTERNATIONAL EASTER CONFERENCE DAY 5" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-slate-900 mb-2">Day 5 - Final Session</h4>
                                <p class="text-sm text-slate-600 mb-2">ICCR INTERNATIONAL EASTER CONFERENCE DAY 5</p>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <span><i class="ph ph-clock mr-1"></i> April 5, 2026</span>
                                    <span><i class="ph ph-eye mr-1"></i> 4.5K views</span>
                                </div>
                            </div>
                        </div>

                        <!-- Day 4 -->
                        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/a_TDzfg9Pgc?t=3439" 
                                        title="INTERNATIONAL EASTER CONFERENCE DAY 4 - RELATIONSHIP SEMINAR" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-slate-900 mb-2">Day 4 - Relationship Seminar</h4>
                                <p class="text-sm text-slate-600 mb-2">with Ev. A. Kanuti</p>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <span><i class="ph ph-clock mr-1"></i> April 4, 2026</span>
                                    <span><i class="ph ph-eye mr-1"></i> 2.3K views</span>
                                </div>
                            </div>
                        </div>

                        <!-- Holy Mass -->
                        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/Y6jFbe8N5cI?t=9599" 
                                        title="INTERNATIONAL EASTER CONFERENCE - THURSDAY HOLY MASS" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-slate-900 mb-2">Thursday Holy Mass</h4>
                                <p class="text-sm text-slate-600 mb-2">International Easter Conference</p>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <span><i class="ph ph-clock mr-1"></i> April 3, 2026</span>
                                    <span><i class="ph ph-eye mr-1"></i> 3.1K views</span>
                                </div>
                            </div>
                        </div>

                        <!-- Healing of Family Tree -->
                        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/Gah1V3DPhRQ" 
                                        title="HEALING OF FAMILY TREE - INTERNATIONAL EASTER CONFERENCE DAY 3" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-slate-900 mb-2">Healing of Family Tree</h4>
                                <p class="text-sm text-slate-600 mb-2">Day 3 - International Easter Conference</p>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <span><i class="ph ph-clock mr-1"></i> April 3, 2026</span>
                                    <span><i class="ph ph-eye mr-1"></i> 1.8K views</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ekarist -->
                        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/tylTppFpWF8" 
                                        title="IBADA YA KUABUDU EKARIST" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-slate-900 mb-2">Ibada ya Kuabudu Ekarist</h4>
                                <p class="text-sm text-slate-600 mb-2">Holy Eucharist Celebration</p>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <span><i class="ph ph-clock mr-1"></i> April 2, 2026</span>
                                    <span><i class="ph ph-eye mr-1"></i> 2.5K views</span>
                                </div>
                            </div>
                        </div>

                        <!-- Bishop Gervas -->
                        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/A_O5Heqledw?t=15787" 
                                        title="ASKOFU MKUU GERVAS NYAISONGA JIMBO KUU KATOLIKI MBEYA" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-slate-900 mb-2">Bishop Gervas Nyaigosa</h4>
                                <p class="text-sm text-slate-600 mb-2">Jimbo Kuu Katoliki Mbeya Teaching</p>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <span><i class="ph ph-clock mr-1"></i> April 2, 2026</span>
                                    <span><i class="ph ph-eye mr-1"></i> 2.1K views</span>
                                </div>
                            </div>
                        </div>

                        <!-- Doing Great Exploits -->
                        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/yJ1xwLTidKk" 
                                        title="KUTENDA MAMBO MAKUU (DOING GREAT EXPLOITS)" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-slate-900 mb-2">Kutenda Mambo Makuu</h4>
                                <p class="text-sm text-slate-600 mb-2">Doing Great Exploits - Mwalimu Kanuti</p>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <span><i class="ph ph-clock mr-1"></i> April 1, 2026</span>
                                    <span><i class="ph ph-eye mr-1"></i> 1.9K views</span>
                                </div>
                            </div>
                        </div>

                        <!-- Conference Main -->
                        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/PgIJm42OJhw" 
                                        title="INTERNATIONAL EASTER CONFERENCE 2026 ARCHDIOCESE OF MBEYA - TANZANIA" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-slate-900 mb-2">Conference Opening</h4>
                                <p class="text-sm text-slate-600 mb-2">International Easter Conference 2026</p>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <span><i class="ph ph-clock mr-1"></i> March 31, 2026</span>
                                    <span><i class="ph ph-eye mr-1"></i> 4.2K views</span>
                                </div>
                            </div>
                        </div>

                        <!-- Day 3 Additional -->
                        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/Rax72Zy8Gx4" 
                                        title="INTERNATIONAL EASTER CONFERENCE DAY 3" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-slate-900 mb-2">Day 3 Sessions</h4>
                                <p class="text-sm text-slate-600 mb-2">International Easter Conference</p>
                                <div class="flex items-center gap-2 text-xs text-slate-500">
                                    <span><i class="ph ph-clock mr-1"></i> April 3, 2026</span>
                                    <span><i class="ph ph-eye mr-1"></i> 2.7K views</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conference Info -->
                    <div class="mt-12 bg-gradient-to-r from-slate-900 to-slate-800 rounded-3xl p-8 text-white">
                        <div class="grid md:grid-cols-2 gap-8 items-center">
                            <div>
                                <h3 class="text-2xl font-bold mb-4">International Easter Conference 2026</h3>
                                <p class="text-slate-200 mb-6">
                                    Experience the power of unity as believers from across Tanzania and around the world gather for this transformative conference at St Mary's International Schools in Mbeya.
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-map-pin text-red-400"></i>
                                        <span>Location: St Mary's International Schools, Mbeya</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-calendar text-red-400"></i>
                                        <span>Dates: March 31 - April 5, 2026</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-users text-red-400"></i>
                                        <span>Expected Attendance: 5,000+ participants</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                                    <i class="ph ph-youtube-logo text-6xl text-red-500 mb-4"></i>
                                    <h4 class="text-xl font-bold mb-2">Watch All Sessions</h4>
                                    <p class="text-slate-200 mb-4">All conference sessions available on YouTube</p>
                                    <a href="https://www.youtube.com/@iccrtz" target="_blank" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-3 rounded-full font-bold hover:bg-red-700 transition-all">
                                        <i class="ph ph-youtube-logo"></i>
                                        Visit Channel
                                    </a>
                                </div>
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
