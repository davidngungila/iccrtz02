<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Inter-Colleges Charismatic Catholic Renewer Tanzania | Students & Alumni Ministry</title>

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
                transform: translateY(10px);
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
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">

    <section class="relative h-[calc(100vh-6rem)] min-h-[620px] overflow-hidden rounded-none">
                <div class="swiper heroSwiper h-full w-full">
                    <div class="swiper-wrapper">
                        <!-- Slide 1: International Easter Conference 2026 - URGENT -->
                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="International Easter Conference" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-red-950/90 via-red-950/40 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block px-4 py-1.5 bg-green-600 text-white rounded-full text-xs font-bold tracking-widest uppercase animate-pulse">LIVE NOW</span>
                                        <span class="inline-block px-4 py-1.5 bg-red-900/20 text-white rounded-full text-xs font-bold tracking-widest uppercase border border-red-900/30">International Event</span>
                                    </div>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Easter <span class="text-red-300">Conference 2026</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-6 leading-relaxed">Experience resurrection power at our biggest international gathering! Join thousands from across Tanzania and East Africa.</p>
                                    <div class="bg-green-400/20 border border-green-400/30 rounded-xl p-4 mb-6 backdrop-blur-sm">
                                        <div class="flex items-center gap-3 text-green-300">
                                            <i class="ph ph-broadcast text-xl"></i>
                                            <span class="font-bold">🔴 CONFERENCE IS LIVE! Join us in Mbeya or watch online</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3 text-yellow-300">
                                        <i class="ph ph-warning-circle text-2xl"></i>
                                        <div>
                                            <div class="font-bold text-lg">March 30 - April 5, 2026 • Mbeya</div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="{{ url('register/easter-conference-2026') }}" class="w-full sm:w-auto px-10 py-4 bg-red-600 text-white font-bold rounded-full hover:bg-red-700 shadow-xl shadow-red-600/30 transition-all text-center">Register Now</a>
                                        <a href="{{ url('events') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2: Students Ministry -->
                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Students Ministry" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-950/35 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <span class="inline-block px-4 py-1.5 bg-slate-900/20 text-slate-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-slate-900/30">Students Ministry</span>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Empowering <span class="text-slate-300">university students</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-10 leading-relaxed">Building spiritual formation and leadership development for Catholic students across Tanzania universities.</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="{{ url('students-ministry') }}" class="w-full sm:w-auto px-10 py-4 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 shadow-xl shadow-slate-900/30 transition-all text-center">Join Students</a>
                                        <a href="{{ url('about') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3: Alumni Network -->
                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Alumni Network" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-950/35 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <span class="inline-block px-4 py-1.5 bg-slate-800/20 text-slate-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-slate-800/30">Alumni Network</span>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Connected <span class="text-slate-300">community</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-10 leading-relaxed">Professional networking and spiritual growth for graduates continuing their faith journey.</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="{{ url('alumni-network') }}" class="w-full sm:w-auto px-10 py-4 bg-slate-800 text-white font-bold rounded-full hover:bg-slate-700 shadow-xl shadow-slate-800/30 transition-all text-center">Join Alumni</a>
                                        <a href="{{ url('about') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Connect Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4: Spiritual Formation -->
                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Spiritual Formation" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-950/35 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <span class="inline-block px-4 py-1.5 bg-slate-900/20 text-slate-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-slate-900/30">Spiritual Formation</span>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Deep <span class="text-slate-300">faith</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-10 leading-relaxed">Nurturing spiritual growth through prayer, Bible study, and charismatic worship experiences.</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="{{ url('teachings') }}" class="w-full sm:w-auto px-10 py-4 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 shadow-xl shadow-slate-900/30 transition-all text-center">Explore Faith</a>
                                        <a href="{{ url('about') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Grow Spiritually</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5: Leadership Development -->
                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Leadership Development" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-950/35 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <span class="inline-block px-4 py-1.5 bg-slate-900/20 text-slate-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-slate-900/30">Leadership Development</span>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Future <span class="text-slate-300">leaders</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-10 leading-relaxed">Training and equipping the next generation of Catholic leaders for church and society.</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="{{ url('leadership') }}" class="w-full sm:w-auto px-10 py-4 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 shadow-xl shadow-slate-900/30 transition-all text-center">Become Leader</a>
                                        <a href="{{ url('about') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Start Training</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5: Community Service -->
                        <div class="swiper-slide relative flex items-center">
                            <div class="absolute inset-0 z-0">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Community Service" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/85 via-slate-950/35 to-transparent"></div>
                            </div>
                            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                                <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                                    <span class="inline-block px-4 py-1.5 bg-slate-900/20 text-slate-300 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-slate-900/30">Community Service</span>
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.05]">Serving <span class="text-slate-300">together</span></h1>
                                    <p class="text-lg md:text-xl text-slate-200 mb-10 leading-relaxed">Putting faith into action through outreach programs and charitable service to communities.</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-4">
                                        <a href="{{ url('outreach') }}" class="w-full sm:w-auto px-10 py-4 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 shadow-xl shadow-slate-900/30 transition-all text-center">Serve Now</a>
                                        <a href="{{ url('contact') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Get Involved</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-10 right-10 z-20 hidden sm:flex gap-4">
                        <button class="swiper-prev w-14 h-14 rounded-full border border-white/20 bg-white/10 text-white flex items-center justify-center hover:bg-slate-900 hover:border-slate-900 transition-all backdrop-blur-md" type="button" aria-label="Previous">
                            <i class="ph ph-caret-left text-2xl"></i>
                        </button>
                        <button class="swiper-next w-14 h-14 rounded-full border border-white/20 bg-white/10 text-white flex items-center justify-center hover:bg-slate-900 hover:border-slate-900 transition-all backdrop-blur-md" type="button" aria-label="Next">
                            <i class="ph ph-caret-right text-2xl"></i>
                        </button>
                    </div>

                    <div class="swiper-pagination !bottom-10 !left-6 !text-left !w-auto"></div>
                </div>
            </section>

            <style>
                .swiper-pagination-bullet { width: 12px; height: 12px; background: rgba(255,255,255,0.3); opacity: 1; }
                .swiper-pagination-bullet-active { background: #0f172a; width: 30px; border-radius: 6px; }
                .swiper-slide-active .slide-content { transform: translateY(0); opacity: 1; }
            </style>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const el = document.querySelector('.heroSwiper');
                    if (!el || typeof Swiper === 'undefined') return;

                    new Swiper(el, {
                        loop: true,
                        speed: 1000,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-next',
                            prevEl: '.swiper-prev',
                        },
                        effect: 'fade',
                        fadeEffect: {
                            crossFade: true
                        }
                    });
                });
            </script>

            <section class="relative z-20 -mt-10 max-w-5xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 bg-white rounded-2xl shadow-2xl p-8 border border-slate-100 divide-x divide-slate-100">
                    <div class="text-center px-4">
                        <h3 class="text-4xl font-bold text-slate-900">1995</h3>
                        <p class="text-sm text-slate-500 mt-2">Founded</p>
                    </div>
                    <div class="text-center px-4">
                        <h3 class="text-4xl font-bold text-slate-900">50+</h3>
                        <p class="text-sm text-slate-500 mt-2">Universities</p>
                    </div>
                    <div class="text-center px-4">
                        <h3 class="text-4xl font-bold text-slate-900">10K+</h3>
                        <p class="text-sm text-slate-500 mt-2">Members</p>
                    </div>
                    <div class="text-center px-4">
                        <h3 class="text-4xl font-bold text-slate-900">25+</h3>
                        <p class="text-sm text-slate-500 mt-2">Regions</p>
                    </div>
                </div>
            </section>

<!-- Annual Events Preview -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Annual Events</span>
            <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Our Yearly Calendar</h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                Join thousands of believers across Tanzania for these transformative annual events that strengthen faith and build community.
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            <!-- Easter Conference -->
            <div class="group bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Easter Conference" class="w-full h-32 object-cover">
                    <div class="absolute top-2 left-2 bg-green-600 text-white px-2 py-1 rounded-full text-xs font-semibold">LIVE</div>
                    <div class="absolute top-2 right-2 bg-red-600 text-white px-2 py-1 rounded-full text-xs font-bold animate-pulse">DAY 1</div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-slate-900 mb-2">Easter Conference</h3>
                    <p class="text-sm text-slate-600 mb-3">International gathering in Mbeya with powerful worship and teachings.</p>
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                        <span><i class="ph ph-map-pin mr-1"></i> Mbeya</span>
                        <span><i class="ph ph-users mr-1"></i> 2,000+</span>
                    </div>
                    <a href="{{ url('register/easter-conference-2026') }}" class="w-full bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-bold hover:bg-green-700 transition-all text-center">
                        Join Live Stream
                    </a>
                </div>
            </div>

            <!-- Night of Praise -->
            <div class="group bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Night of Praise" class="w-full h-32 object-cover">
                    <div class="absolute top-2 left-2 bg-slate-900 text-white px-2 py-1 rounded-full text-xs font-semibold">Dec 15-16</div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-slate-900 mb-2">Night of Praise</h3>
                    <p class="text-sm text-slate-600 mb-3">Electrifying worship night featuring top gospel artists in Dar es Salaam.</p>
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                        <span><i class="ph ph-map-pin mr-1"></i> Dar es Salaam</span>
                        <span><i class="ph ph-users mr-1"></i> 5,000+</span>
                    </div>
                    <a href="{{ url('events/night-of-praise') }}" class="w-full bg-slate-900 text-white px-3 py-2 rounded-lg text-sm font-bold hover:bg-slate-800 transition-all text-center">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- NexGen Camp -->
            <div class="group bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                <div class="relative">
                    <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="NexGen Camp" class="w-full h-32 object-cover">
                    <div class="absolute top-2 left-2 bg-slate-800 text-white px-2 py-1 rounded-full text-xs font-semibold">Aug 8-14</div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-slate-900 mb-2">NexGen Camp</h3>
                    <p class="text-sm text-slate-600 mb-3">Youth empowerment camp for next generation leaders in Dar es Salaam.</p>
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                        <span><i class="ph ph-map-pin mr-1"></i> Dar es Salaam</span>
                        <span><i class="ph ph-users mr-1"></i> 1,000+</span>
                    </div>
                    <a href="{{ url('events/nexgen-camp') }}" class="w-full bg-slate-800 text-white px-3 py-2 rounded-lg text-sm font-bold hover:bg-slate-700 transition-all text-center">
                        Register Now
                    </a>
                </div>
            </div>

            <!-- All Events -->
            <div class="group bg-gradient-to-br from-slate-900 to-slate-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all">
                <div class="p-6 text-center h-full flex flex-col justify-center">
                    <i class="ph ph-calendar text-white text-3xl mb-3"></i>
                    <h3 class="font-bold text-white mb-2">More Events</h3>
                    <p class="text-sm text-slate-200 mb-4">Leadership Summit, Open Gate Camp, Perfect Vision Camp, Tamasha la Sifa & more!</p>
                    <a href="{{ url('events') }}" class="w-full bg-white text-slate-900 px-3 py-2 rounded-lg text-sm font-bold hover:bg-slate-100 transition-all text-center">
                        View All Events
                    </a>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="text-3xl font-black text-slate-900">7</div>
                <div class="text-sm text-slate-600">Major Annual Events</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-slate-900">15,000+</div>
                <div class="text-sm text-slate-600">Annual Participants</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-slate-900">31</div>
                <div class="text-sm text-slate-600">Regions Reached</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-slate-900">365</div>
                <div class="text-sm text-slate-600">Days of Ministry</div>
            </div>
        </div>
    </div>
</section>

    <section class="py-32 bg-white" id="about">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid gap-12 lg:grid-cols-12 lg:items-start">
                        <div class="lg:col-span-5">
                            <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Our Mission</span>
                            <h2 class="text-4xl font-serif text-slate-900 font-bold">Forming disciples for Christ</h2>
                            <p class="mt-6 text-slate-500 leading-relaxed">For over 25 years, we've been dedicated to spiritual formation and leadership development for Catholic university students across Tanzania, nurturing faith and empowering future leaders.</p>

                            <div class="mt-10 rounded-[2.5rem] border border-slate-100 bg-slate-50 p-10">
                                <div class="text-sm font-bold text-slate-900">Our Impact</div>
                                <div class="mt-6 grid gap-3 text-sm text-slate-700">
                                    <div class="flex items-center justify-between rounded-2xl bg-white px-5 py-4"><span class="text-slate-500">Campus Fellowships</span><span class="font-black text-slate-900">50+</span></div>
                                    <div class="flex items-center justify-between rounded-2xl bg-white px-5 py-4"><span class="text-slate-500">Annual Retreats</span><span class="font-black text-slate-900">12</span></div>
                                    <div class="flex items-center justify-between rounded-2xl bg-white px-5 py-4"><span class="text-slate-500">Leaders Trained</span><span class="font-black text-slate-900">5000+</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-7">
                            <div class="rounded-[2.5rem] border border-slate-100 bg-white shadow-sm overflow-hidden">
                                <div class="p-10">
                                    <div class="text-xs font-black uppercase tracking-widest text-slate-900">Our Approach</div>
                                    <h3 class="mt-4 text-3xl font-serif font-bold text-slate-900">Spiritual formation and leadership development</h3>

                                    <div class="mt-10 grid gap-8">
                                        <div class="flex gap-6">
                                            <div class="w-16 h-16 rounded-2xl bg-slate-900/15 text-slate-900 flex-shrink-0 flex items-center justify-center text-2xl">
                                                <i class="ph-bold ph-cross"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-bold text-slate-900 mb-2">Faith Formation</h4>
                                                <p class="text-slate-600 leading-relaxed">Deepening Catholic faith through prayer, sacraments, Bible study, and charismatic worship experiences.</p>
                                            </div>
                                        </div>

                                        <div class="flex gap-6">
                                            <div class="w-16 h-16 rounded-2xl bg-slate-900/15 text-slate-900 flex-shrink-0 flex items-center justify-center text-2xl">
                                                <i class="ph-bold ph-graduation-cap"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-bold text-slate-900 mb-2">Leadership Training</h4>
                                                <p class="text-slate-600 leading-relaxed">Equipping students with leadership skills for service in church, society, and professional careers.</p>
                                            </div>
                                        </div>

                                        <div class="flex gap-6">
                                            <div class="w-16 h-16 rounded-2xl bg-slate-900/15 text-slate-900 flex-shrink-0 flex items-center justify-center text-2xl">
                                                <i class="ph-bold ph-users-three"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-bold text-slate-900 mb-2">Community Building</h4>
                                                <p class="text-slate-600 leading-relaxed">Creating supportive faith communities that foster spiritual growth and lifelong friendships.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-10 grid gap-3 sm:grid-cols-2">
                                        <a href="{{ url('students-ministry') }}" class="rounded-2xl bg-slate-900 px-6 py-4 text-center text-sm font-bold text-white hover:bg-slate-800">Join Students Ministry</a>
                                        <a href="{{ url('alumni-network') }}" class="rounded-2xl bg-slate-900 px-6 py-4 text-center text-sm font-bold text-white hover:bg-slate-800">Alumni Network</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <section class="py-32 bg-slate-50" id="campaigns">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
                        <div class="max-w-2xl">
                            <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Upcoming Events</span>
                            <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Growing faith together</h2>
                            <p class="text-slate-500">Join our upcoming programs and events designed to strengthen your spiritual journey and leadership skills.</p>
                        </div>
                        <a href="{{ url('events') }}" class="text-slate-900 font-bold flex items-center gap-2 hover:gap-3 transition-all">View All Events <i class="ph ph-arrow-right"></i></a>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="National Conference" class="w-full h-56 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-900 text-white px-3 py-1 rounded-full text-sm font-semibold">Dec 15-17</div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-xl font-bold mb-3 text-slate-900">National Conference 2024</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Annual gathering of all university fellowships for worship, teaching, and leadership training.</p>
                                
                                <div class="mb-6">
                                    <div class="flex justify-between text-sm mb-2">
                                        <span class="font-semibold text-slate-700">Registration</span>
                                        <span class="font-bold text-slate-900">450/500 Registered</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-3">
                                        <div class="bg-gradient-to-r from-slate-500 to-slate-400 h-3 rounded-full" style="width: 90%"></div>
                                    </div>
                                </div>
                                
                                <a href="{{ url('events') }}" class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    <i class="ph ph-calendar mr-2"></i> Register Now
                                </a>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Leadership Retreat" class="w-full h-56 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-800 text-white px-3 py-1 rounded-full text-sm font-semibold">Jan 5-7</div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-xl font-bold mb-3 text-slate-900">Leadership Retreat</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Intensive leadership training for student leaders and coordinators from all regions.</p>
                                
                                <div class="mb-6">
                                    <div class="flex justify-between text-sm mb-2">
                                        <span class="font-semibold text-slate-700">Registration</span>
                                        <span class="font-bold text-slate-900">80/100 Spots</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-3">
                                        <div class="bg-gradient-to-r from-slate-600 to-slate-500 h-3 rounded-full" style="width: 80%"></div>
                                    </div>
                                </div>
                                
                                <a href="{{ url('events') }}" class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    <i class="ph ph-calendar mr-2"></i> Register Now
                                </a>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Spiritual Formation" class="w-full h-56 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-900 text-white px-3 py-1 rounded-full text-sm font-semibold">Ongoing</div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-xl font-bold mb-3 text-slate-900">Spiritual Formation Program</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Weekly spiritual formation sessions for deepening faith and charismatic gifts.</p>
                                
                                <div class="mb-6">
                                    <div class="flex justify-between text-sm mb-2">
                                        <span class="font-semibold text-slate-700">Participants</span>
                                        <span class="font-bold text-slate-900">200+ Active</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-3">
                                        <div class="bg-gradient-to-r from-slate-500 to-slate-400 h-3 rounded-full" style="width: 100%"></div>
                                    </div>
                                </div>
                                
                                <a href="{{ url('events') }}" class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    <i class="ph ph-calendar mr-2"></i> Join Program
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 25+ Year Anniversary Celebration -->
            <section class="py-24 bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50 relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%230f172a\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>

                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center mb-16">
                        <span class="inline-block px-4 py-2 bg-slate-200 text-slate-700 rounded-full text-sm font-bold tracking-widest uppercase mb-6">25+ Years of Ministry</span>
                        <h2 class="text-4xl md:text-6xl font-serif text-slate-900 mb-8 font-bold">Celebrating Decades of <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-700 to-slate-900">ICCRTZ</span> Spiritual Formation</h2>
                        <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed mb-12">
                            For over 25 years, Catholic Charismatic Tanzania – Universities Fellowship has been forming disciples, empowering leaders, and building faith communities across Tanzania's universities.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8 mb-16">
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto mb-6 bg-white rounded-full flex items-center justify-center shadow-xl">
                                <i class="ph-bold ph-church text-slate-900 text-4xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">50+ Universities</h3>
                            <p class="text-slate-600">Campus fellowships established across Tanzania</p>
                        </div>

                        <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-slate-100 to-slate-200 rounded-full flex items-center justify-center">
                                <i class="ph-bold ph-users-three text-slate-900 text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">10,000+ Members</h3>
                            <p class="text-slate-600">Students and alumni transformed through discipleship</p>
                        </div>

                        <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-slate-100 to-slate-200 rounded-full flex items-center justify-center">
                                <i class="ph-bold ph-plant text-slate-900 text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">Spiritual Growth</h3>
                            <p class="text-slate-600">Building lasting foundations for faith and leadership</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="inline-flex items-center gap-4 px-8 py-4 bg-gradient-to-r from-slate-700 to-slate-900 rounded-full shadow-2xl">
                            <i class="ph-bold ph-star text-white text-2xl"></i>
                            <span class="text-white font-bold text-lg">Join Our 25+ Year Celebration</span>
                            <i class="ph-bold ph-star text-white text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Floating Celebration Elements -->
                <div class="absolute top-10 left-10 text-4xl animate-bounce">✝️</div>
                <div class="absolute top-20 right-20 text-3xl animate-pulse">🙏</div>
                <div class="absolute bottom-10 left-20 text-3xl animate-bounce">📖</div>
                <div class="absolute bottom-20 right-10 text-4xl animate-pulse">🕊️</div>
            </section>

            <!-- Advanced Features Section -->
            <section class="py-20 bg-gradient-to-br from-slate-50 to-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="inline-block px-4 py-2 bg-gradient-to-r from-purple-100 to-blue-100 text-purple-700 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Advanced Impact</span>
                        <h2 class="text-4xl md:text-5xl font-serif text-slate-900 mb-6 font-bold">Innovative Solutions for <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Lasting Change</span></h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Leveraging cutting-edge technology and data-driven approaches to maximize our impact and create sustainable transformation across Tanzania.
                        </p>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-8 mb-16">
                        <!-- Data-Driven Impact -->
                        <div class="bg-white rounded-2xl p-8 shadow-xl border border-slate-100 hover:shadow-2xl transition-all duration-300">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
                                <i class="ph-bold ph-chart-line text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Data-Driven Impact</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">
                                Advanced analytics and real-time monitoring systems that track program effectiveness and optimize resource allocation for maximum community benefit.
                            </p>
                            <ul class="space-y-3 text-sm">
                                <li class="flex items-center text-slate-600">
                                    <i class="ph-bold ph-check-circle text-purple-500 mr-3"></i>
                                    Real-time impact metrics
                                </li>
                                <li class="flex items-center text-slate-600">
                                    <i class="ph-bold ph-check-circle text-purple-500 mr-3"></i>
                                    Predictive analytics for needs assessment
                                </li>
                                <li class="flex items-center text-slate-600">
                                    <i class="ph-bold ph-check-circle text-purple-500 mr-3"></i>
                                    Automated reporting systems
                                </li>
                            </ul>
                        </div>

                        <!-- Mobile Innovation -->
                        <div class="bg-white rounded-2xl p-8 shadow-xl border border-slate-100 hover:shadow-2xl transition-all duration-300">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6">
                                <i class="ph-bold ph-devices text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Mobile Innovation</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">
                                Cutting-edge mobile applications and digital platforms that connect communities with essential services and enable seamless program participation.
                            </p>
                            <ul class="space-y-3 text-sm">
                                <li class="flex items-center text-slate-600">
                                    <i class="ph-bold ph-check-circle text-blue-500 mr-3"></i>
                                    Mobile food distribution tracking
                                </li>
                                <li class="flex items-center text-slate-600">
                                    <i class="ph-bold ph-check-circle text-blue-500 mr-3"></i>
                                    Digital beneficiary management
                                </li>
                                <li class="flex items-center text-slate-600">
                                    <i class="ph-bold ph-check-circle text-blue-500 mr-3"></i>
                                    SMS-based emergency alerts
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Advanced Statistics -->
                    <div class="bg-gradient-to-r from-slate-900 to-slate-800 rounded-3xl p-12 text-white mb-16">
                        <div class="text-center mb-12">
                            <h3 class="text-3xl font-bold mb-4">Advanced Impact Metrics</h3>
                            <p class="text-slate-300 text-lg">Real-time data showing our progressive impact across communities</p>
                        </div>
                        
                        <div class="grid md:grid-cols-4 gap-8">
                            <div class="text-center">
                                <div class="text-5xl font-bold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-purple-300">98%</div>
                                <div class="text-slate-300 mb-1">Program Efficiency</div>
                                <div class="text-slate-400 text-sm">Resource optimization rate</div>
                            </div>
                            <div class="text-center">
                                <div class="text-5xl font-bold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-300">24/7</div>
                                <div class="text-slate-300 mb-1">Monitoring</div>
                                <div class="text-slate-400 text-sm">Real-time impact tracking</div>
                            </div>
                            <div class="text-center">
                                <div class="text-5xl font-bold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-emerald-300">15min</div>
                                <div class="text-slate-300 mb-1">Response Time</div>
                                <div class="text-slate-400 text-sm">Emergency assistance delivery</div>
                            </div>
                            <div class="text-center">
                                <div class="text-5xl font-bold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-300">AI</div>
                                <div class="text-slate-300 mb-1">Powered</div>
                                <div class="text-slate-400 text-sm">Predictive needs analysis</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <section class="py-24 bg-slate-900">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Ready to grow in faith with us?</h2>
                    <p class="text-slate-100 text-xl max-w-2xl mx-auto mb-12">Join our mission today and help us build strong Catholic communities and form future leaders for Tanzania.</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ url('students-ministry') }}" class="px-12 py-5 bg-white text-slate-900 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">Join Fellowship</a>
                        <a href="{{ url('contact') }}" class="flex items-center gap-3 text-white font-bold hover:scale-105 transition-all text-xl">
                            <i class="ph-bold ph-arrow-right text-3xl"></i> Contact Us
                        </a>
                    </div>
                </div>
            </section>
        </main>

        @include('components.footer')

        <script>
            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        </script>
    </body>
</html>
