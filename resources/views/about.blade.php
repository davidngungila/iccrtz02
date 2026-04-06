<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>About the Fellowship | Catholic Charismatic Tanzania – Universities Fellowship</title>

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
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-slate-50 to-white overflow-hidden">
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%230f172a\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center max-w-4xl mx-auto">
                        <span class="inline-block px-4 py-2 bg-slate-200 text-slate-700 rounded-full text-sm font-bold tracking-widest uppercase mb-6">About Us</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-slate-900 mb-8 font-bold leading-[1.05]">Forming <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-700 to-slate-900">Disciples</span> for Christ</h1>
                        <p class="text-xl text-slate-600 leading-relaxed mb-12">
                            For over 25 years, Catholic Charismatic Tanzania – Universities Fellowship has been dedicated to spiritual formation, 
                            leadership development, and community building across Tanzania's universities.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="{{ url('join') }}" class="px-8 py-4 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all shadow-xl shadow-slate-900/20">
                                <i class="ph ph-users-three mr-2"></i> Join Our Fellowship
                            </a>
                            <a href="{{ url('contact') }}" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full border-2 border-slate-900 hover:bg-slate-50 transition-all">
                                <i class="ph ph-envelope mr-2"></i> Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- History Section -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid gap-16 lg:grid-cols-2 lg:items-center">
                        <div>
                            <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Our History</span>
                            <h2 class="text-4xl font-serif text-slate-900 font-bold mb-8">A Journey of Faith Since 1995</h2>
                            <div class="space-y-6 text-slate-600 leading-relaxed">
                                <p>
                                    The Catholic Charismatic Tanzania – Universities Fellowship (CCT-UF) began in 1995 with a small group of passionate 
                                    Catholic students who desired to deepen their faith and form authentic Christian communities on campus.
                                </p>
                                <p>
                                    From humble beginnings at the University of Dar es Salaam, the fellowship has grown to encompass over 50 universities 
                                    across Tanzania, touching the lives of more than 10,000 students and alumni who continue to make a difference 
                                    in their communities and professions.
                                </p>
                                <p>
                                    Our journey has been marked by countless retreats, conferences, leadership training programs, and spiritual formation 
                                    initiatives that have transformed generations of young Catholics into committed disciples and leaders.
                                </p>
                            </div>
                            <div class="mt-10 grid grid-cols-3 gap-6">
                                <div class="text-center">
                                    <div class="text-3xl font-black text-slate-900">1995</div>
                                    <div class="text-sm text-slate-500 mt-1">Founded</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-black text-slate-900">50+</div>
                                    <div class="text-sm text-slate-500 mt-1">Universities</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-black text-slate-900">10K+</div>
                                    <div class="text-sm text-slate-500 mt-1">Lives Changed</div>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457152/0104_64_bu7rig.jpg" alt="CCT-UF History" class="w-full h-full object-cover">
                            </div>
                            <div class="absolute -bottom-6 -left-6 bg-slate-900 text-white p-6 rounded-2xl shadow-xl">
                                <i class="ph ph-church text-3xl mb-2"></i>
                                <div class="font-bold">25+ Years of Ministry</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Vision & Mission -->
            <section class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Our Purpose</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Vision, Mission & Values</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Our guiding principles shape everything we do as we form disciples and empower leaders for the Church and society.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-3">
                        <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-6">
                                <i class="ph ph-eye text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Vision</h3>
                            <p class="text-slate-600 leading-relaxed">
                                To form a generation of Catholic university students who are deeply rooted in faith, 
                                equipped with leadership skills, and committed to transforming society through Gospel values.
                            </p>
                        </div>

                        <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mb-6">
                                <i class="ph ph-target text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Mission</h3>
                            <p class="text-slate-600 leading-relaxed">
                                To provide spiritual formation, leadership development, and community building opportunities 
                                that empower Catholic students to become authentic disciples and effective leaders.
                            </p>
                        </div>

                        <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-700 rounded-2xl flex items-center justify-center mb-6">
                                <i class="ph ph-heart text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Values</h3>
                            <ul class="text-slate-600 space-y-3">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Faith-centered formation</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Authentic community</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Leadership excellence</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <span>Service to others</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Leadership Team Preview -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Leadership</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">National Leadership Team</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Meet the dedicated leaders who guide our fellowship and serve as shepherds to our communities.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                        <div class="text-center group">
                            <div class="aspect-square rounded-2xl overflow-hidden mb-6 bg-slate-200">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457151/0204_21_mugaed.jpg" alt="National Coordinator" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Fr. John Mwanga</h3>
                            <p class="text-slate-600 mb-2">National Coordinator</p>
                            <p class="text-sm text-slate-500">Spiritual Director & Chaplain</p>
                        </div>

                        <div class="text-center group">
                            <div class="aspect-square rounded-2xl overflow-hidden mb-6 bg-slate-200">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457162/0104_33_gh3ckn.jpg" alt="Vice Coordinator" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Grace Joseph</h3>
                            <p class="text-slate-600 mb-2">Vice Coordinator</p>
                            <p class="text-sm text-slate-500">Programs & Formation</p>
                        </div>

                        <div class="text-center group">
                            <div class="aspect-square rounded-2xl overflow-hidden mb-6 bg-slate-200">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457145/0204_44_adnyre.jpg" alt="Secretary General" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Michael Kimario</h3>
                            <p class="text-slate-600 mb-2">Secretary General</p>
                            <p class="text-sm text-slate-500">Administration</p>
                        </div>

                        <div class="text-center group">
                            <div class="aspect-square rounded-2xl overflow-hidden mb-6 bg-slate-200">
                                <img src="https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457124/0304_sauiub.jpg" alt="Treasurer" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Anna Mwalimu</h3>
                            <p class="text-slate-600 mb-2">Treasurer</p>
                            <p class="text-sm text-slate-500">Finance & Resources</p>
                        </div>
                    </div>

                    <div class="text-center mt-12">
                        <a href="{{ url('about/leadership') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-slate-900 text-white font-bold rounded-full hover:bg-slate-800 transition-all">
                            View Full Leadership Team
                            <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="py-20 bg-gradient-to-r from-slate-900 to-slate-800 text-white">
                <div class="max-w-7xl mx-auto px-6 text-center">
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 font-bold">Join Our Growing Fellowship</h2>
                    <p class="text-xl text-slate-200 max-w-3xl mx-auto mb-12 leading-relaxed">
                        Become part of a community that is forming disciples, empowering leaders, and transforming lives 
                        through the power of the Gospel and the gifts of the Holy Spirit.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ url('join') }}" class="px-12 py-5 bg-white text-slate-900 font-bold rounded-full shadow-2xl hover:scale-105 transition-all">
                            Join Fellowship
                        </a>
                        <a href="{{ url('students-ministry') }}" class="px-12 py-5 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                            Explore Ministries
                        </a>
                    </div>
                </div>
            </section>

        </main>

        @include('components.footer')

        <script>
            // Smooth scrolling for navigation links
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
