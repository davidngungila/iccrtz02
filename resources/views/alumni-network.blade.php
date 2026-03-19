<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Alumni Network | Catholic Charismatic Tanzania – Universities Fellowship</title>

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
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-slate-800 to-slate-900 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                        <div>
                            <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Alumni Network</span>
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Connected <span class="text-slate-300">Community</span></h1>
                            <p class="text-xl text-slate-200 leading-relaxed mb-12">
                                Stay connected with fellow graduates, continue your spiritual journey, and make a lasting impact 
                                through our vibrant alumni network of Catholic professionals and leaders.
                            </p>
                            <div class="flex flex-col sm:flex-row items-center gap-6">
                                <a href="{{ url('alumni-register') }}" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                    <i class="ph ph-users-three mr-2"></i> Join Alumni Network
                                </a>
                                <a href="#benefits" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                                    <i class="ph ph-star mr-2"></i> Explore Benefits
                                </a>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Alumni Network" class="w-full h-full object-cover">
                            </div>
                            <div class="absolute -bottom-6 -right-6 bg-white text-slate-900 p-6 rounded-2xl shadow-xl">
                                <div class="text-3xl font-black">2,000+</div>
                                <div class="font-bold">Active Alumni</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Quick Stats -->
            <section class="py-16 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-briefcase text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">1,500+</div>
                            <div class="text-sm text-slate-600">Working Professionals</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-globe text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">25+</div>
                            <div class="text-sm text-slate-600">Countries</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-hand-heart text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">100+</div>
                            <div class="text-sm text-slate-600">Mentors</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-calendar-check text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">24</div>
                            <div class="text-sm text-slate-600">Annual Events</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits Section -->
            <section id="benefits" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Benefits</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Why Join Our Alumni Network</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Discover the many benefits of staying connected with our Catholic community and continuing your spiritual journey.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="group bg-slate-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="ph ph-users text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Professional Networking</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Connect with Catholic professionals in various fields for career opportunities, mentorship, and business partnerships.
                            </p>
                            <ul class="space-y-3 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Career opportunities</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Professional mentorship</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Business networking</span>
                                </li>
                            </ul>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="ph ph-cross text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Spiritual Growth</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Continue your faith journey through alumni retreats, prayer groups, and spiritual formation programs.
                            </p>
                            <ul class="space-y-3 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Alumni retreats</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Prayer groups</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Spiritual formation</span>
                                </li>
                            </ul>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="w-16 h-16 bg-slate-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="ph ph-graduation-cap text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Mentorship Programs</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Share your experience by mentoring current students or receive guidance from senior alumni in your field.
                            </p>
                            <ul class="space-y-3 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Student mentorship</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Career guidance</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Leadership coaching</span>
                                </li>
                            </ul>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="w-16 h-16 bg-slate-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="ph ph-calendar text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Exclusive Events</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Attend special alumni gatherings, reunions, conferences, and networking events throughout the year.
                            </p>
                            <ul class="space-y-3 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Annual reunions</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Networking events</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Professional workshops</span>
                                </li>
                            </ul>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="ph ph-hand-heart text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Service Opportunities</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Continue serving through alumni-led outreach programs, charity projects, and community initiatives.
                            </p>
                            <ul class="space-y-3 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Community service</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Charity projects</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Outreach programs</span>
                                </li>
                            </ul>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="ph ph-bank text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Alumni Resources</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Access exclusive resources including job boards, professional development materials, and spiritual content.
                            </p>
                            <ul class="space-y-3 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Job portal</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Professional resources</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Spiritual materials</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Alumni Chapters -->
            <section class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Chapters</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Alumni Chapters Worldwide</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Connect with local alumni chapters in your region and stay engaged with our global community.
                        </p>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Dar es Salaam Chapter</h3>
                                    <p class="text-slate-600 mb-4">Our largest and most active chapter with monthly meetings</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 500+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Monthly events</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Nairobi Chapter</h3>
                                    <p class="text-slate-600 mb-4">Growing community serving East Africa region</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 200+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Bi-monthly events</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">London Chapter</h3>
                                    <p class="text-slate-600 mb-4">International hub for European alumni</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 150+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Quarterly events</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">New York Chapter</h3>
                                    <p class="text-slate-600 mb-4">North American alumni network</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 100+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Quarterly events</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">South Africa Chapter</h3>
                                    <p class="text-slate-600 mb-4">Southern African regional community</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 80+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Bi-monthly events</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">And 20+ More</h3>
                                    <p class="text-slate-600 mb-4">Find your local alumni chapter worldwide</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-globe mr-1"></i> Global network</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Active chapters</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-12">
                        <a href="{{ url('alumni-chapters') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                            View All Chapters
                            <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Success Stories -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Success Stories</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Alumni Making a Difference</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Meet our distinguished alumni who are making significant contributions in their professions and communities.
                        </p>
                    </div>

                    <div class="swiper successSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-slate-50 rounded-3xl p-8 text-center">
                                    <div class="w-24 h-24 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                        <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Alumni" class="w-full h-full object-cover">
                                    </div>
                                    <div class="mb-4">
                                        <div class="font-bold text-slate-900 text-xl mb-1">Dr. Sarah Mwanga</div>
                                        <div class="text-slate-600 mb-2">Medical Director, City Hospital</div>
                                        <div class="text-sm text-slate-500">Class of 2005</div>
                                    </div>
                                    <blockquote class="text-lg text-slate-600 leading-relaxed italic">
                                        "CCT-UF shaped my faith and leadership foundation. The values I learned continue to guide me 
                                        in serving patients and leading my medical team with compassion and integrity."
                                    </blockquote>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="bg-slate-50 rounded-3xl p-8 text-center">
                                    <div class="w-24 h-24 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                        <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Alumni" class="w-full h-full object-cover">
                                    </div>
                                    <div class="mb-4">
                                        <div class="font-bold text-slate-900 text-xl mb-1">Eng. Joseph Kimario</div>
                                        <div class="text-slate-600 mb-2">CEO, Tech Innovations Ltd</div>
                                        <div class="text-sm text-slate-500">Class of 2008</div>
                                    </div>
                                    <blockquote class="text-lg text-slate-600 leading-relaxed italic">
                                        "The leadership training I received through CCT-UF was invaluable. It prepared me not just for 
                                        professional success, but for ethical leadership that makes a positive impact."
                                    </blockquote>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="bg-slate-50 rounded-3xl p-8 text-center">
                                    <div class="w-24 h-24 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                        <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Alumni" class="w-full h-full object-cover">
                                    </div>
                                    <div class="mb-4">
                                        <div class="font-bold text-slate-900 text-xl mb-1">Anna Joseph</div>
                                        <div class="text-slate-600 mb-2">Education Minister</div>
                                        <div class="text-sm text-slate-500">Class of 2003</div>
                                    </div>
                                    <blockquote class="text-lg text-slate-600 leading-relaxed italic">
                                        "My time in CCT-UF ignited my passion for education and service. The spiritual formation and 
                                        mentorship I received continue to inspire my work in public service."
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination mt-8"></div>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="py-20 bg-gradient-to-r from-slate-900 to-slate-800 text-white">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Stay Connected, Make an Impact</h2>
                    <p class="text-xl text-slate-200 max-w-3xl mx-auto mb-12 leading-relaxed">
                        Join our growing alumni network and continue your journey of faith, leadership, and service 
                        alongside fellow Catholic graduates making a difference worldwide.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ url('alumni-register') }}" class="px-12 py-5 bg-white text-slate-900 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">
                            Register as Alumni
                        </a>
                        <a href="{{ url('alumni-events') }}" class="px-12 py-5 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                            Upcoming Events
                        </a>
                    </div>
                </div>
            </section>

        </main>

        @include('components.footer')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Success Stories Swiper
                const successSwiper = new Swiper('.successSwiper', {
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
