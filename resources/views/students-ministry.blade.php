<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Students Ministry | Catholic Charismatic Tanzania – Universities Fellowship</title>

        <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-95269HJMQW"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-95269HJMQW');
        </script>

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
                    <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                        <div>
                            <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Students Ministry</span>
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Empowering <span class="text-slate-300">University Students</span></h1>
                            <p class="text-xl text-slate-200 leading-relaxed mb-12">
                                Join a vibrant community of Catholic students growing together in faith, leadership, and service. 
                                Discover your purpose and develop your gifts in a supportive spiritual environment.
                            </p>
                            <div class="flex flex-col sm:flex-row items-center gap-6">
                                <a href="{{ url('join') }}" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                    <i class="ph ph-users-three mr-2"></i> Join Students Ministry
                                </a>
                                <a href="#programs" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                                    <i class="ph ph-book-open mr-2"></i> Explore Programs
                                </a>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457152/0104_64_bu7rig.jpg" alt="Students Ministry" class="w-full h-full object-cover">
                            </div>
                            <div class="absolute -bottom-6 -right-6 bg-white text-slate-900 p-6 rounded-2xl shadow-xl">
                                <div class="text-3xl font-black">50+</div>
                                <div class="font-bold">University Campuses</div>
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
                            <i class="ph ph-graduation-cap text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">8,000+</div>
                            <div class="text-sm text-slate-600">Active Students</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-church text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">200+</div>
                            <div class="text-sm text-slate-600">Fellowship Groups</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-calendar text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">12</div>
                            <div class="text-sm text-slate-600">Annual Events</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-crown text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">500+</div>
                            <div class="text-sm text-slate-600">Student Leaders</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Programs Section -->
            <section id="programs" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Our Programs</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Spiritual Formation & Leadership Development</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Discover our comprehensive programs designed to nurture your faith, develop your leadership skills, 
                            and build lasting friendships.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="group bg-slate-50 rounded-3xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="relative h-48 mb-6">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457129/0304_233_zvkodm.jpg" alt="Faith Formation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                <div class="absolute bottom-4 left-4">
                                    <div class="w-12 h-12 bg-slate-900 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="ph ph-cross text-white text-xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Faith Formation</h3>
                                <p class="text-slate-600 leading-relaxed mb-6">
                                    Deepen your Catholic faith through prayer groups, Bible studies, sacraments, and charismatic worship experiences.
                                </p>
                                <ul class="space-y-3 text-slate-600">
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Daily prayer meetings</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Bible study groups</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Sacramental preparation</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="relative h-48 mb-6">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457145/0204_44_adnyre.jpg" alt="Leadership Training" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                <div class="absolute bottom-4 left-4">
                                    <div class="w-12 h-12 bg-slate-800 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="ph ph-users-three text-white text-xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Leadership Training</h3>
                                <p class="text-slate-600 leading-relaxed mb-6">
                                    Develop essential leadership skills through workshops, seminars, and hands-on ministry experience.
                                </p>
                                <ul class="space-y-3 text-slate-600">
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Leadership workshops</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Mentorship programs</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Practical ministry experience</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="relative h-48 mb-6">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457162/0104_33_gh3ckn.jpg" alt="Community Service" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                <div class="absolute bottom-4 left-4">
                                    <div class="w-12 h-12 bg-slate-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="ph ph-heart text-white text-xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Community Service</h3>
                                <p class="text-slate-600 leading-relaxed mb-6">
                                    Put your faith into action through outreach programs, charity work, and service to local communities.
                                </p>
                                <ul class="space-y-3 text-slate-600">
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Community outreach</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Charity projects</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Mission trips</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="relative h-48 mb-6">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457159/0104_57_jbgeri.jpg" alt="Academic Support" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                <div class="absolute bottom-4 left-4">
                                    <div class="w-12 h-12 bg-slate-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="ph ph-book text-white text-xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-4">Academic Support</h3>
                                <p class="text-slate-600 leading-relaxed mb-6">
                                    Excel in your studies with peer tutoring, study groups, and academic mentorship from senior students.
                                </p>
                                <ul class="space-y-3 text-slate-600">
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Study groups</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Peer tutoring</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                        <span>Academic mentorship</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="ph ph-music-notes text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Creative Arts</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Express your faith through music, drama, dance, and other creative arts in worship and ministry.
                            </p>
                            <ul class="space-y-3 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Music ministry</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Drama and dance</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Worship team</span>
                                </li>
                            </ul>
                        </div>

                        <div class="group bg-slate-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-slate-100">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="ph ph-globe text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">International Exchange</h3>
                            <p class="text-slate-600 leading-relaxed mb-6">
                                Connect with Catholic students worldwide through exchange programs and international conferences.
                            </p>
                            <ul class="space-y-3 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Student exchanges</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>International conferences</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Cultural exchange</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Campus Groups -->
            <section class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Campus Network</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Find Your Campus Fellowship</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            We have active fellowship groups in over 50 universities across Tanzania. Find and join your campus community.
                        </p>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">University of Dar es Salaam</h3>
                                    <p class="text-slate-600 mb-4">Main campus with multiple fellowship groups</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 500+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
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
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">St. Augustine University</h3>
                                    <p class="text-slate-600 mb-4">Vibrant Catholic community and worship</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 300+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
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
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">University of Dodoma</h3>
                                    <p class="text-slate-600 mb-4">Growing fellowship with strong leadership</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 250+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
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
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Sokoine University</h3>
                                    <p class="text-slate-600 mb-4">Active service and outreach programs</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 200+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
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
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Muhimbili University</h3>
                                    <p class="text-slate-600 mb-4">Healthcare professionals in formation</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> 180+ members</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Weekly meetings</span>
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
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">And 45+ More</h3>
                                    <p class="text-slate-600 mb-4">Find your campus fellowship group</p>
                                    <div class="flex items-center gap-4 text-sm text-slate-500">
                                        <span><i class="ph ph-users mr-1"></i> Nationwide</span>
                                        <span><i class="ph ph-calendar mr-1"></i> Active groups</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-12">
                        <a href="{{ url('campuses') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                            View All Campus Groups
                            <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Testimonials</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Student Experiences</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Hear from students whose lives have been transformed through their involvement in our fellowship.
                        </p>
                    </div>

                    <div class="swiper testimonialsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-slate-50 rounded-3xl p-8 text-center">
                                    <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                        <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457151/0204_21_mugaed.jpg" alt="Student" class="w-full h-full object-cover">
                                    </div>
                                    <blockquote class="text-lg text-slate-600 leading-relaxed mb-6 italic">
                                        "CCT-UF helped me discover my purpose and develop my leadership skills. I've grown so much in faith 
                                        and made lifelong friendships that support me in my journey."
                                    </blockquote>
                                    <div>
                                        <div class="font-bold text-slate-900">Grace Mwanga</div>
                                        <div class="text-sm text-slate-500">University of Dar es Salaam</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="bg-slate-50 rounded-3xl p-8 text-center">
                                    <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                        <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457162/0104_33_gh3ckn.jpg" alt="Student" class="w-full h-full object-cover">
                                    </div>
                                    <blockquote class="text-lg text-slate-600 leading-relaxed mb-6 italic">
                                        "The spiritual formation programs have deepened my relationship with God. I feel more confident 
                                        in my faith and better equipped to serve others."
                                    </blockquote>
                                    <div>
                                        <div class="font-bold text-slate-900">Joseph Kimario</div>
                                        <div class="text-sm text-slate-500">St. Augustine University</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="bg-slate-50 rounded-3xl p-8 text-center">
                                    <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                        <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457145/0204_44_adnyre.jpg" alt="Student" class="w-full h-full object-cover">
                                    </div>
                                    <blockquote class="text-lg text-slate-600 leading-relaxed mb-6 italic">
                                        "Being part of CCT-UF has been life-changing. I've found a community that supports my academic 
                                        and spiritual growth, and I've developed skills I'll use for life."
                                    </blockquote>
                                    <div>
                                        <div class="font-bold text-slate-900">Anna Joseph</div>
                                        <div class="text-sm text-slate-500">University of Dodoma</div>
                                    </div>
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
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Start Your Journey Today</h2>
                    <p class="text-xl text-slate-200 max-w-3xl mx-auto mb-12 leading-relaxed">
                        Join thousands of Catholic students who are growing in faith, developing leadership skills, 
                        and making a difference in their communities.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ url('join') }}" class="px-12 py-5 bg-white text-slate-900 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">
                            Join Students Ministry
                        </a>
                        <a href="{{ url('contact') }}" class="px-12 py-5 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                            Find Your Campus
                        </a>
                    </div>
                </div>
            </section>

        </main>

        @include('components.footer')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Testimonials Swiper
                const testimonialsSwiper = new Swiper('.testimonialsSwiper', {
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
