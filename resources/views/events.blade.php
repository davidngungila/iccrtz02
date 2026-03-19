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
                            <a href="#programs" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                                <i class="ph ph-book-open mr-2"></i> All Programs
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Event -->
            <section class="py-16 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-100">
                        <div class="grid md:grid-cols-2 gap-0">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="International Easter Conference" class="w-full h-full object-cover min-h-[400px]">
                                <div class="absolute top-6 left-6 bg-red-600 text-white px-4 py-2 rounded-full text-sm font-bold animate-pulse">
                                    URGENT - Register Now!
                                </div>
                            </div>
                            <div class="p-10 flex flex-col justify-center">
                                <div class="mb-6">
                                    <span class="inline-block px-3 py-1 bg-slate-900 text-white rounded-full text-xs font-bold mb-4">International Event</span>
                                    <h2 class="text-3xl font-serif font-bold text-slate-900 mb-4">International Easter Conference 2026</h2>
                                    <p class="text-slate-600 leading-relaxed mb-6">
                                        Experience the power of resurrection at our biggest international gathering! Join thousands 
                                        of Catholic students from across Tanzania and East Africa for three days of powerful worship, 
                                        life-changing teachings, divine encounters, and Easter celebration.
                                    </p>
                                    <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4 mb-6">
                                        <div class="flex items-center gap-2 text-yellow-800">
                                            <i class="ph ph-warning-circle text-xl"></i>
                                            <span class="font-bold">Limited Seats Available - Early Bird Discount Ends Soon!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4 mb-8">
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-calendar text-slate-900 text-xl"></i>
                                        <div>
                                            <div class="text-sm text-slate-500">Date</div>
                                            <div class="font-bold text-slate-900">April 3-6, 2026</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-map-pin text-slate-900 text-xl"></i>
                                        <div>
                                            <div class="text-sm text-slate-500">Location</div>
                                            <div class="font-bold text-slate-900">Dodoma</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-users text-slate-900 text-xl"></i>
                                        <div>
                                            <div class="text-sm text-slate-500">Expected</div>
                                            <div class="font-bold text-slate-900">2,000+ Attendees</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-clock text-slate-900 text-xl"></i>
                                        <div>
                                            <div class="text-sm text-slate-500">Duration</div>
                                            <div class="font-bold text-slate-900">4 Days</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <a href="{{ url('register/easter-conference-2026') }}" class="px-6 py-3 bg-red-600 text-white font-bold rounded-full hover:bg-red-700 transition-all animate-pulse">
                                        Register Now - Save Your Spot!
                                    </a>
                                    <a href="{{ url('events/easter-conference-2026') }}" class="px-6 py-3 bg-slate-100 text-slate-900 font-bold rounded-full hover:bg-slate-200 transition-all">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Upcoming Events -->
            <section id="upcoming" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Upcoming</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Upcoming Events</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Don't miss out on these transformative opportunities to grow in faith and leadership.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Easter Conference 2026 - Urgent Event -->
                        <div class="group bg-white rounded-3xl shadow-lg border-2 border-red-200 overflow-hidden hover:shadow-xl transition-all relative">
                            <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold animate-pulse z-10">
                                URGENT
                            </div>
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="International Easter Conference" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Apr 3-6, 2026</div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-red-100 text-red-700 rounded text-xs font-bold mb-3">International Conference</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">International Easter Conference 2026</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Experience resurrection power! International gathering with powerful worship, teachings, and divine encounters.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-map-pin mr-1"></i> Dodoma</span>
                                    <span><i class="ph ph-users mr-1"></i> 2,000+ spots</span>
                                </div>
                                <div class="mb-4">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="font-semibold text-slate-700">Early Bird Registration</span>
                                        <span class="font-bold text-red-600">1,250/2,000</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-red-600 h-2 rounded-full" style="width: 62.5%"></div>
                                    </div>
                                </div>
                                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 mb-4">
                                    <div class="flex items-center gap-2 text-yellow-800 text-sm">
                                        <i class="ph ph-warning-circle"></i>
                                        <span class="font-semibold">Early Bird Discount Ends Soon!</span>
                                    </div>
                                </div>
                                <a href="{{ url('register/easter-conference-2026') }}" class="w-full bg-red-600 text-white px-4 py-3 rounded-full font-semibold hover:bg-red-700 transition-all text-center animate-pulse">
                                    Register Now - Save 30%!
                                </a>
                            </div>
                        </div>

                        <div class="group bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Leadership Retreat" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-800 text-white px-3 py-1 rounded-full text-sm font-semibold">Jan 5-7</div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Retreat</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Leadership Retreat</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Intensive leadership training for student leaders and coordinators from all regions.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-map-pin mr-1"></i> Morogoro</span>
                                    <span><i class="ph ph-users mr-1"></i> 100 spots</span>
                                </div>
                                <div class="mb-4">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="font-semibold text-slate-700">Registration</span>
                                        <span class="font-bold text-slate-900">80/100</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-slate-800 h-2 rounded-full" style="width: 80%"></div>
                                    </div>
                                </div>
                                <a href="{{ url('register/leadership-retreat') }}" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Register Now
                                </a>
                            </div>
                        </div>

                        <div class="group bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Spiritual Formation" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-700 text-white px-3 py-1 rounded-full text-sm font-semibold">Weekly</div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Formation</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Spiritual Formation Program</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Weekly sessions for deepening faith and developing charismatic gifts.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-map-pin mr-1"></i> All Campuses</span>
                                    <span><i class="ph ph-clock mr-1"></i> 2 hours</span>
                                </div>
                                <div class="mb-4">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="font-semibold text-slate-700">Active</span>
                                        <span class="font-bold text-slate-900">200+ Students</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-slate-700 h-2 rounded-full" style="width: 100%"></div>
                                    </div>
                                </div>
                                <a href="{{ url('join/spiritual-formation') }}" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Join Program
                                </a>
                            </div>
                        </div>

                        <div class="group bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Alumni Reunion" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Feb 10</div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Alumni</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Alumni Reunion</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Annual gathering for alumni to reconnect, network, and share success stories.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-map-pin mr-1"></i> Dar es Salaam</span>
                                    <span><i class="ph ph-users mr-1"></i> 300+ expected</span>
                                </div>
                                <div class="mb-4">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="font-semibold text-slate-700">Registration</span>
                                        <span class="font-bold text-slate-900">150/300</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-slate-600 h-2 rounded-full" style="width: 50%"></div>
                                    </div>
                                </div>
                                <a href="{{ url('register/alumni-reunion') }}" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Register Now
                                </a>
                            </div>
                        </div>

                        <div class="group bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Campus Mission" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-900 text-white px-3 py-1 rounded-full text-sm font-semibold">Mar 15-17</div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Mission</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Campus Mission Week</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Evangelization and outreach activities across university campuses.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-map-pin mr-1"></i> Nationwide</span>
                                    <span><i class="ph ph-users mr-1"></i> 50+ Campuses</span>
                                </div>
                                <div class="mb-4">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="font-semibold text-slate-700">Volunteers</span>
                                        <span class="font-bold text-slate-900">500+ Needed</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-slate-900 h-2 rounded-full" style="width: 60%"></div>
                                    </div>
                                </div>
                                <a href="{{ url('volunteer/campus-mission') }}" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Volunteer
                                </a>
                            </div>
                        </div>

                        <div class="group bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Music Workshop" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-800 text-white px-3 py-1 rounded-full text-sm font-semibold">Apr 5-7</div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-slate-100 text-slate-700 rounded text-xs font-bold mb-3">Workshop</span>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">Music & Worship Workshop</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">
                                    Training for music ministry teams and worship leaders.
                                </p>
                                <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                    <span><i class="ph ph-map-pin mr-1"></i> Dodoma</span>
                                    <span><i class="ph ph-users mr-1"></i> 50 spots</span>
                                </div>
                                <div class="mb-4">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="font-semibold text-slate-700">Registration</span>
                                        <span class="font-bold text-slate-900">30/50</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-slate-800 h-2 rounded-full" style="width: 60%"></div>
                                    </div>
                                </div>
                                <a href="{{ url('register/music-workshop') }}" class="w-full bg-slate-900 text-white px-4 py-3 rounded-full font-semibold hover:bg-slate-800 transition-all text-center">
                                    Register Now
                                </a>
                            </div>
                        </div>

                        <div class="group bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-all">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Summer Camp" class="w-full h-48 object-cover">
                                <div class="absolute top-4 left-4 bg-slate-700 text-white px-3 py-1 rounded-full text-sm font-semibold">Jun 20-25</div>
                            </div>
                            <div class="p-6">
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

            <!-- Programs Categories -->
            <section id="programs" class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Programs</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Our Program Categories</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Explore our diverse range of programs designed to meet your spiritual and developmental needs.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center hover:shadow-xl transition-all">
                            <div class="w-20 h-20 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-cross text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Spiritual Formation</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Deepen your faith through prayer, sacraments, Bible study, and charismatic worship experiences.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-600 text-left mb-6">
                                <li>• Daily prayer meetings</li>
                                <li>• Bible study groups</li>
                                <li>• Sacramental preparation</li>
                                <li>• Charismatic prayer</li>
                            </ul>
                            <a href="{{ url('programs/spiritual-formation') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                                Explore Programs
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center hover:shadow-xl transition-all">
                            <div class="w-20 h-20 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-users-three text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Leadership Development</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Develop essential leadership skills through workshops, seminars, and hands-on ministry experience.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-600 text-left mb-6">
                                <li>• Leadership workshops</li>
                                <li>• Mentorship programs</li>
                                <li>• Team building</li>
                                <li>• Public speaking</li>
                            </ul>
                            <a href="{{ url('programs/leadership') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                                Explore Programs
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center hover:shadow-xl transition-all">
                            <div class="w-20 h-20 bg-slate-700 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-hand-heart text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Community Service</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Put your faith into action through outreach programs, charity work, and service to communities.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-600 text-left mb-6">
                                <li>• Community outreach</li>
                                <li>• Charity projects</li>
                                <li>• Mission trips</li>
                                <li>• Volunteer service</li>
                            </ul>
                            <a href="{{ url('programs/service') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                                Explore Programs
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center hover:shadow-xl transition-all">
                            <div class="w-20 h-20 bg-slate-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-book text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Academic Support</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Excel in your studies with peer tutoring, study groups, and academic mentorship programs.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-600 text-left mb-6">
                                <li>• Study groups</li>
                                <li>• Peer tutoring</li>
                                <li>• Academic mentorship</li>
                                <li>• Skills development</li>
                            </ul>
                            <a href="{{ url('programs/academic') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                                Explore Programs
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center hover:shadow-xl transition-all">
                            <div class="w-20 h-20 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-music-notes text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Creative Arts</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Express your faith through music, drama, dance, and other creative arts in worship and ministry.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-600 text-left mb-6">
                                <li>• Music ministry</li>
                                <li>• Drama and dance</li>
                                <li>• Worship team</li>
                                <li>• Creative workshops</li>
                            </ul>
                            <a href="{{ url('programs/arts') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                                Explore Programs
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>

                        <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100 text-center hover:shadow-xl transition-all">
                            <div class="w-20 h-20 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-globe text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">International Programs</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Connect with Catholic students worldwide through exchange programs and international conferences.
                            </p>
                            <ul class="space-y-2 text-sm text-slate-600 text-left mb-6">
                                <li>• Student exchanges</li>
                                <li>• International conferences</li>
                                <li>• Cultural exchange</li>
                                <li>• Global networking</li>
                            </ul>
                            <a href="{{ url('programs/international') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                                Explore Programs
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Calendar Preview -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Calendar</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Event Calendar</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Stay updated with all our upcoming events and programs throughout the year.
                        </p>
                    </div>

                    <div class="bg-slate-50 rounded-3xl p-8 shadow-lg border border-slate-100">
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                            <div class="text-center">
                                <h3 class="font-bold text-slate-900 mb-4">December 2024</h3>
                                <div class="space-y-3">
                                    <div class="bg-white p-3 rounded-lg border border-slate-200">
                                        <div class="text-sm font-bold text-slate-900">15-17</div>
                                        <div class="text-xs text-slate-600">National Conference</div>
                                    </div>
                                    <div class="bg-white p-3 rounded-lg border border-slate-200">
                                        <div class="text-sm font-bold text-slate-900">24</div>
                                        <div class="text-xs text-slate-600">Christmas Carol</div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="font-bold text-slate-900 mb-4">January 2025</h3>
                                <div class="space-y-3">
                                    <div class="bg-white p-3 rounded-lg border border-slate-200">
                                        <div class="text-sm font-bold text-slate-900">5-7</div>
                                        <div class="text-xs text-slate-600">Leadership Retreat</div>
                                    </div>
                                    <div class="bg-white p-3 rounded-lg border border-slate-200">
                                        <div class="text-sm font-bold text-slate-900">18</div>
                                        <div class="text-xs text-slate-600">Alumni Meetup</div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="font-bold text-slate-900 mb-4">February 2025</h3>
                                <div class="space-y-3">
                                    <div class="bg-white p-3 rounded-lg border border-slate-200">
                                        <div class="text-sm font-bold text-slate-900">10</div>
                                        <div class="text-xs text-slate-600">Alumni Reunion</div>
                                    </div>
                                    <div class="bg-white p-3 rounded-lg border border-slate-200">
                                        <div class="text-sm font-bold text-slate-900">22</div>
                                        <div class="text-xs text-slate-600">Valentine's Outreach</div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3 class="font-bold text-slate-900 mb-4">March 2025</h3>
                                <div class="space-y-3">
                                    <div class="bg-white p-3 rounded-lg border border-slate-200">
                                        <div class="text-sm font-bold text-slate-900">15-17</div>
                                        <div class="text-xs text-slate-600">Campus Mission</div>
                                    </div>
                                    <div class="bg-white p-3 rounded-lg border border-slate-200">
                                        <div class="text-sm font-bold text-slate-900">28</div>
                                        <div class="text-xs text-slate-600">Easter Celebration</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-8">
                            <a href="{{ url('calendar') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                                View Full Calendar
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="py-20 bg-gradient-to-r from-slate-900 to-slate-800 text-white">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Transform Your Life Through Faith</h2>
                    <p class="text-xl text-slate-200 max-w-3xl mx-auto mb-12 leading-relaxed">
                        Join our transformative events and programs to deepen your faith, develop leadership skills, 
                        and build lasting connections with fellow Catholic students and alumni.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ url('register') }}" class="px-12 py-5 bg-white text-slate-900 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">
                            Register for Events
                        </a>
                        <a href="{{ url('contact') }}" class="px-12 py-5 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                            Get More Info
                        </a>
                    </div>
                </div>
            </section>

        </main>

        @include('components.footer')

        <script>
            // Smooth scrolling
            document.addEventListener('DOMContentLoaded', function() {
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
