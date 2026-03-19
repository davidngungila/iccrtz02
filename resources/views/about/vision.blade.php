<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Vision & Mission | Inter-Colleges Charismatic Catholic Renewer Tanzania</title>

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
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Vision & Mission</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05">Our <span class="text-slate-300">Purpose</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Guided by our Catholic faith, we are committed to forming disciples, empowering leaders, 
                            and building vibrant faith communities that transform lives and society.
                        </p>
                        <a href="#vision" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                            <i class="ph ph-eye mr-2"></i> Discover Our Vision
                        </a>
                    </div>
                </div>
            </section>

            <!-- Vision Section -->
            <section id="vision" class="py-20 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Vision</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Our Vision</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            The future we envision for Catholic students and young adults in Tanzania.
                        </p>
                    </div>

                    <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-slate-100">
                        <div class="text-center mb-8">
                            <div class="w-20 h-20 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-eye text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-serif text-slate-900 font-bold mb-6">A Generation of Transformed Catholic Leaders</h3>
                        </div>
                        <p class="text-lg text-slate-600 leading-relaxed text-center mb-8">
                            We envision a Tanzania where every Catholic college student is formed as a disciple of Christ, 
                            equipped to be a servant leader in their profession, family, and society, contributing to the 
                            transformation of our nation through Gospel values.
                        </p>
                        <div class="grid gap-6 md:grid-cols-3">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center mx-auto mb-3">
                                    <i class="ph ph-heart text-white text-xl"></i>
                                </div>
                                <h4 class="font-bold text-slate-900 mb-2">Spiritual Maturity</h4>
                                <p class="text-slate-600 text-sm">Deep personal relationship with Christ</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center mx-auto mb-3">
                                    <i class="ph ph-users text-white text-xl"></i>
                                </div>
                                <h4 class="font-bold text-slate-900 mb-2">Leadership Excellence</h4>
                                <p class="text-slate-600 text-sm">Servant leaders in all spheres of life</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center mx-auto mb-3">
                                    <i class="ph ph-globe text-white text-xl"></i>
                                </div>
                                <h4 class="font-bold text-slate-900 mb-2">Societal Impact</h4>
                                <p class="text-slate-600 text-sm">Transforming communities through faith</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mission Section -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Mission</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Our Mission</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            How we fulfill our vision through dedicated ministry and service.
                        </p>
                    </div>

                    <div class="bg-slate-50 rounded-3xl shadow-xl p-8 lg:p-12 border border-slate-100">
                        <div class="text-center mb-8">
                            <div class="w-20 h-20 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="ph ph-target text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-serif text-slate-900 font-bold mb-6">Forming Disciples, Building Leaders</h3>
                        </div>
                        <p class="text-lg text-slate-600 leading-relaxed text-center mb-12">
                            ICCRTZ exists to form Catholic college students as disciples of Jesus Christ through 
                            spiritual formation, leadership development, and community building, empowering them to 
                            become servant leaders who transform society according to Gospel values.
                        </p>

                        <div class="grid gap-8 md:grid-cols-2">
                            <div class="bg-white rounded-2xl p-6 border border-slate-100">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-prayer text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-slate-900 mb-3">Spiritual Formation</h4>
                                        <p class="text-slate-600 leading-relaxed">
                                            Providing opportunities for deep spiritual growth through prayer, sacraments, 
                                            Bible study, and charismatic experiences that foster personal relationship with Christ.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-2xl p-6 border border-slate-100">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-graduation-cap text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-slate-900 mb-3">Leadership Development</h4>
                                        <p class="text-slate-600 leading-relaxed">
                                            Equipping students with leadership skills, character formation, and practical 
                                            training to become effective servant leaders in their future careers and communities.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-2xl p-6 border border-slate-100">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-users-three text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-slate-900 mb-3">Community Building</h4>
                                        <p class="text-slate-600 leading-relaxed">
                                            Creating vibrant, supportive faith communities where students can grow together, 
                                            share their faith, and build lasting relationships rooted in Catholic values.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-2xl p-6 border border-slate-100">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-hand-heart text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-slate-900 mb-3">Service & Outreach</h4>
                                        <p class="text-slate-600 leading-relaxed">
                                            Encouraging active service to others through outreach programs, social justice initiatives, 
                                            and charitable works that put faith into action.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Core Values -->
            <section class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Values</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Core Values</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            The fundamental principles that guide our ministry and shape our community.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-cross text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Christ-Centered</h3>
                            <p class="text-slate-600">
                                Jesus Christ is the center of our lives, ministry, and all that we do.
                            </p>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-bible text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Scriptural Foundation</h3>
                            <p class="text-slate-600">
                                Rooted in Sacred Scripture and Catholic teaching as our guide for faith and life.
                            </p>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-heart text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Charismatic Spirituality</h3>
                            <p class="text-slate-600">
                                Open to the Holy Spirit's gifts and power in our personal and communal life.
                            </p>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-users text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Community</h3>
                            <p class="text-slate-600">
                                Building authentic relationships and supportive faith communities.
                            </p>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-hand-heart text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Service</h3>
                            <p class="text-slate-600">
                                Committed to serving others and putting faith into action through love.
                            </p>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-lightbulb text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Excellence</h3>
                            <p class="text-slate-600">
                                Striving for excellence in all we do for the glory of God.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Strategic Goals -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Goals</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Strategic Goals 2024-2029</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Our five-year strategic plan to expand our impact and reach more students.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-chart-line-up text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-3">Expansion & Growth</h3>
                                    <p class="text-slate-600 mb-4">
                                        Expand our presence to reach 75% of all colleges and universities in Tanzania, 
                                        establishing strong fellowships in every region.
                                    </p>
                                    <ul class="space-y-2 text-sm text-slate-600">
                                        <li>• Establish 20 new campus fellowships</li>
                                        <li>• Reach 5,000 active members nationwide</li>
                                        <li>• Strengthen regional coordination</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-graduation-cap text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-3">Leadership Development</h3>
                                    <p class="text-slate-600 mb-4">
                                        Strengthen our leadership formation programs to develop 1,000 new leaders 
                                        who will serve the Church and society.
                                    </p>
                                    <ul class="space-y-2 text-sm text-slate-600">
                                        <li>• Launch advanced leadership institute</li>
                                        <li>• Develop comprehensive training curriculum</li>
                                        <li>• Establish mentorship programs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-devices text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-3">Digital Transformation</h3>
                                    <p class="text-slate-600 mb-4">
                                        Enhance our digital presence and create online formation resources 
                                        to reach students in remote areas.
                                    </p>
                                    <ul class="space-y-2 text-sm text-slate-600">
                                        <li>• Develop mobile app for students</li>
                                        <li>• Create online formation programs</li>
                                        <li>• Establish digital resource library</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-hand-heart text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-3">Social Impact</h3>
                                    <p class="text-slate-600 mb-4">
                                        Increase our social outreach programs to serve the wider community 
                                        and promote Catholic social teaching.
                                    </p>
                                    <ul class="space-y-2 text-sm text-slate-600">
                                        <li>• Launch 10 new service projects</li>
                                        <li>• Establish social justice initiatives</li>
                                        <li>• Partner with local communities</li>
                                    </ul>
                                </div>
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
