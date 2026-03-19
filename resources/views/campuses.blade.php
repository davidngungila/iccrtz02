<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Campus Network | Inter-Colleges Charismatic Catholic Renewer Tanzania</title>

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
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-slate-900 to-slate-800 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center max-w-4xl mx-auto">
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Campus Network</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Find Your <span class="text-slate-300">Campus</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Connect with ICCRTZ fellowship groups in colleges and universities across Tanzania. 
                            Find your local community and join thousands of Catholic students growing in faith together.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="#regions" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-map-pin mr-2"></i> Browse Regions
                            </a>
                            <a href="{{ url('join') }}" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                                <i class="ph ph-users-three mr-2"></i> Join ICCRTZ
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Quick Stats -->
            <section class="py-16 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-graduation-cap text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">50+</div>
                            <div class="text-sm text-slate-600">Campuses</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-church text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">200+</div>
                            <div class="text-sm text-slate-600">Fellowship Groups</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-users text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">8,000+</div>
                            <div class="text-sm text-slate-600">Active Members</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-map-trifold text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">25+</div>
                            <div class="text-sm text-slate-600">Regions</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Campus Regions -->
            <section id="regions" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Regions</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Campuses by Region</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Explore our growing network of ICCRTZ fellowships organized by geographical regions across Tanzania.
                        </p>
                    </div>

                    <!-- Dar es Salaam Region -->
                    <div class="mb-16">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center">
                                <i class="ph ph-map-pin text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-slate-900">Dar es Salaam Region</h3>
                                <p class="text-slate-600">Our largest and most active region</p>
                            </div>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">University of Dar es Salaam (UDSM)</h4>
                                        <p class="text-slate-600 text-sm mb-3">Main campus with multiple fellowship groups</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 500+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">Ardhi University</h4>
                                        <p class="text-slate-600 text-sm mb-3">Growing fellowship with strong leadership</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 150+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">University of Business Studies</h4>
                                        <p class="text-slate-600 text-sm mb-3">Active student community</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 100+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Bi-weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Northern Zone -->
                    <div class="mb-16">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center">
                                <i class="ph ph-map-pin text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-slate-900">Northern Zone</h3>
                                <p class="text-slate-600">Arusha, Kilimanjaro, and Manyara regions</p>
                            </div>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">St. Augustine University of Tanzania (SAUT)</h4>
                                        <p class="text-slate-600 text-sm mb-3">Vibrant Catholic community</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 300+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">Mount Meru University</h4>
                                        <p class="text-slate-600 text-sm mb-3">Strong spiritual formation program</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 120+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">Kilimanjaro Christian Medical University</h4>
                                        <p class="text-slate-600 text-sm mb-3">Healthcare professionals in formation</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 80+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lake Zone -->
                    <div class="mb-16">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center">
                                <i class="ph ph-map-pin text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-slate-900">Lake Zone</h3>
                                <p class="text-slate-600">Mwanza, Shinyanga, and Mara regions</p>
                            </div>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">St. Mary University (SMU)</h4>
                                        <p class="text-slate-600 text-sm mb-3">Active fellowship with outreach programs</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 200+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">University of Mwanza</h4>
                                        <p class="text-slate-600 text-sm mb-3">Growing student community</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 150+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">Mwalimu Nyerere Memorial Academy</h4>
                                        <p class="text-slate-600 text-sm mb-3">Leadership development focus</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 100+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Central Zone -->
                    <div class="mb-16">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center">
                                <i class="ph ph-map-pin text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-slate-900">Central Zone</h3>
                                <p class="text-slate-600">Dodoma, Singida, and Tabora regions</p>
                            </div>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">University of Dodoma (UDOM)</h4>
                                        <p class="text-slate-600 text-sm mb-3">Large and active fellowship</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 400+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">St. John University of Tanzania</h4>
                                        <p class="text-slate-600 text-sm mb-3">Community-focused fellowship</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 120+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 bg-slate-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">Dodoma Christian University</h4>
                                        <p class="text-slate-600 text-sm mb-3">Spiritual formation emphasis</p>
                                        <div class="flex items-center gap-4 text-xs text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 80+ members</span>
                                            <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Start a Campus Fellowship -->
            <section class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-slate-100">
                        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                            <div>
                                <span class="inline-block px-4 py-2 bg-slate-200 text-slate-700 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Start a Fellowship</span>
                                <h2 class="text-3xl font-serif text-slate-900 font-bold mb-6">Don't See Your Campus?</h2>
                                <p class="text-slate-600 leading-relaxed mb-8">
                                    We're always looking to expand our network! If your campus doesn't have an ICCRTZ fellowship yet, 
                                    we can help you start one. We provide training, resources, and support to establish a thriving Catholic community.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-start gap-3">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <div>
                                            <div class="font-semibold text-slate-900">Leadership Training</div>
                                            <div class="text-sm text-slate-600">Comprehensive training for campus leaders</div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <div>
                                            <div class="font-semibold text-slate-900">Resource Materials</div>
                                            <div class="text-sm text-slate-600">Study guides, prayer books, and formation materials</div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <div>
                                            <div class="font-semibold text-slate-900">Ongoing Support</div>
                                            <div class="text-sm text-slate-600">Regular visits and mentorship from regional coordinators</div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <div>
                                            <div class="font-semibold text-slate-900">Network Connection</div>
                                            <div class="text-sm text-slate-600">Connect with other campus fellowships nationwide</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                                <h3 class="text-xl font-bold text-slate-900 mb-6">Get Started</h3>
                                <form class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Your Name *</label>
                                        <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                                        <input type="email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number *</label>
                                        <input type="tel" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Your Institution *</label>
                                        <input type="text" required placeholder="College/University name" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Message</label>
                                        <textarea rows="4" placeholder="Tell us about your interest in starting a fellowship..." class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent"></textarea>
                                    </div>
                                    <button type="submit" class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-bold hover:bg-slate-800 transition-all">
                                        Submit Request
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        @include('components.footer')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
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
