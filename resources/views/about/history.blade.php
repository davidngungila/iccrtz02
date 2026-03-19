<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Our History | Inter-Colleges Charismatic Catholic Renewer Tanzania</title>

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
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Our History</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">25+ Years of <span class="text-slate-300">Ministry</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            From humble beginnings in 1995 to a nationwide movement, discover the journey of 
                            ICCRTZ as we've grown to serve thousands of Catholic students across Tanzania.
                        </p>
                        <a href="#timeline" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                            <i class="ph ph-clock-clockwise mr-2"></i> Explore Our Journey
                        </a>
                    </div>
                </div>
            </section>

            <!-- Quick Stats -->
            <section class="py-16 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-calendar text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">1995</div>
                            <div class="text-sm text-slate-600">Founded</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-graduation-cap text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">50+</div>
                            <div class="text-sm text-slate-600">Campuses Reached</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-users text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">10,000+</div>
                            <div class="text-sm text-slate-600">Students Impacted</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-trophy text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">50+</div>
                            <div class="text-sm text-slate-600">Vocations Fostered</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Timeline -->
            <section id="timeline" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Timeline</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Our Journey Through Time</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Key milestones that have shaped ICCRTZ into the organization it is today.
                        </p>
                    </div>

                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-0.5 bg-slate-200"></div>

                        <!-- 1995 - Foundation -->
                        <div class="relative flex items-center mb-12">
                            <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-4 h-4 bg-slate-900 rounded-full border-4 border-white"></div>
                            <div class="ml-20 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="text-slate-900 font-black text-sm mb-2">1995</div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">The Foundation</h3>
                                    <p class="text-slate-600">
                                        ICCRTZ was founded by a group of passionate Catholic students at the University of Dar es Salaam 
                                        with the vision of creating spiritual renewal in Tanzania's universities.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 1998 - First Conference -->
                        <div class="relative flex items-center mb-12">
                            <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-4 h-4 bg-slate-900 rounded-full border-4 border-white"></div>
                            <div class="ml-20 md:ml-auto md:w-1/2 md:pl-8">
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="text-slate-900 font-black text-sm mb-2">1998</div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">First National Conference</h3>
                                    <p class="text-slate-600">
                                        Organized our first national student conference with 150 participants from 8 universities, 
                                        establishing our presence in the Catholic community.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2000 - Expansion -->
                        <div class="relative flex items-center mb-12">
                            <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-4 h-4 bg-slate-900 rounded-full border-4 border-white"></div>
                            <div class="ml-20 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="text-slate-900 font-black text-sm mb-2">2000</div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Regional Expansion</h3>
                                    <p class="text-slate-600">
                                        Expanded to 15 universities across 4 regions, establishing regional coordinators 
                                        to better serve growing campus communities.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2005 - Leadership Training -->
                        <div class="relative flex items-center mb-12">
                            <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-4 h-4 bg-slate-900 rounded-full border-4 border-white"></div>
                            <div class="ml-20 md:ml-auto md:w-1/2 md:pl-8">
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="text-slate-900 font-black text-sm mb-2">2005</div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Leadership Training Institute</h3>
                                    <p class="text-slate-600">
                                        Launched formal leadership training programs to equip student leaders with 
                                        spiritual and practical skills for ministry.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2010 - Alumni Network -->
                        <div class="relative flex items-center mb-12">
                            <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-4 h-4 bg-slate-900 rounded-full border-4 border-white"></div>
                            <div class="ml-20 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="text-slate-900 font-black text-sm mb-2">2010</div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Alumni Network Established</h3>
                                    <p class="text-slate-600">
                                        Created formal alumni network to maintain connections and support graduates 
                                        in their continued faith journey and professional lives.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2015 - 20th Anniversary -->
                        <div class="relative flex items-center mb-12">
                            <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-4 h-4 bg-slate-900 rounded-full border-4 border-white"></div>
                            <div class="ml-20 md:ml-auto md:w-1/2 md:pl-8">
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="text-slate-900 font-black text-sm mb-2">2015</div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">20th Anniversary Celebration</h3>
                                    <p class="text-slate-600">
                                        Celebrated two decades of ministry with a national gathering of over 1,000 
                                        students, alumni, and supporters from across Tanzania.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2020 - Digital Transformation -->
                        <div class="relative flex items-center mb-12">
                            <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-4 h-4 bg-slate-900 rounded-full border-4 border-white"></div>
                            <div class="ml-20 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="text-slate-900 font-black text-sm mb-2">2020</div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Digital Transformation</h3>
                                    <p class="text-slate-600">
                                        Adapted to global challenges by launching online formation programs, 
                                        virtual prayer groups, and digital resources for students.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2024 - Present -->
                        <div class="relative flex items-center">
                            <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-4 h-4 bg-slate-900 rounded-full border-4 border-white"></div>
                            <div class="ml-20 md:ml-auto md:w-1/2 md:pl-8">
                                <div class="bg-slate-900 text-white rounded-2xl p-6 border border-slate-100">
                                    <div class="text-slate-300 font-black text-sm mb-2">2024</div>
                                    <h3 class="text-xl font-bold text-white mb-2">Continued Growth</h3>
                                    <p class="text-slate-200">
                                        Now serving 50+ campuses with over 2,000 active members, continuing our mission 
                                        of forming Catholic disciples and leaders for the Church and society.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Founders -->
            <section class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Founders</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Our Founding Members</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            The visionary individuals who established ICCRTZ and laid the foundation for our ministry.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-3">
                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-24 h-24 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Founder" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Fr. Joseph Mwalimu</h3>
                            <div class="text-slate-600 mb-4">Founding Spiritual Director</div>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Provided the initial spiritual guidance and vision for the ministry.
                            </p>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-24 h-24 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="Founder" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Grace Kimario</h3>
                            <div class="text-slate-600 mb-4">First Student Coordinator</div>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Led the first student fellowship and organized initial activities.
                            </p>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-24 h-24 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Founder" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Michael Nyange</h3>
                            <div class="text-slate-600 mb-4">Founding Member</div>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Instrumental in establishing the organizational structure and outreach.
                            </p>
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
