<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Leadership Training | Inter-Colleges Charismatic Catholic Renewer Tanzania</title>

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
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Leadership Training</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Develop <span class="text-slate-300">Leaders</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Empowering the next generation of Catholic leaders through comprehensive training, 
                            mentorship, and practical experience in service to the Church and society.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="#programs" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-graduation-cap mr-2"></i> Training Programs
                            </a>
                            <a href="#apply" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                                <i class="ph ph-user-plus mr-2"></i> Apply Now
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
                            <i class="ph ph-users text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">500+</div>
                            <div class="text-sm text-slate-600">Leaders Trained Annually</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-trophy text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">50+</div>
                            <div class="text-sm text-slate-600">Leadership Workshops</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-star text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">95%</div>
                            <div class="text-sm text-slate-600">Success Rate</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-globe text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">25+</div>
                            <div class="text-sm text-slate-600">Years of Excellence</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Training Philosophy -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Philosophy</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Our Leadership Approach</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            We believe in forming servant leaders who lead with integrity, faith, and compassion.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-heart text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Servant Leadership</h3>
                            <p class="text-slate-600">Leading through service and putting others first</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-cross text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Faith-Based</h3>
                            <p class="text-slate-600">Rooted in Catholic values and teachings</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-users-three text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Community Focus</h3>
                            <p class="text-slate-600">Building strong, inclusive communities</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-lightbulb text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Innovation</h3>
                            <p class="text-slate-600">Creative solutions for modern challenges</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Training Programs -->
            <section id="programs" class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Programs</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Leadership Programs</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Comprehensive training programs designed to develop leaders at every level.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2">
                        <!-- Campus Leadership Program -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="p-8">
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center">
                                        <i class="ph ph-graduation-cap text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-slate-900">Campus Leadership</h3>
                                        <p class="text-slate-600">For student leaders and coordinators</p>
                                    </div>
                                </div>
                                <p class="text-slate-600 leading-relaxed mb-6">
                                    Comprehensive training for campus fellowship leaders covering spiritual formation, 
                                    team management, event planning, and pastoral care.
                                </p>
                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">3-month intensive program</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">Monthly workshops and retreats</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">One-on-one mentorship</span>
                                    </div>
                                </div>
                                <button class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-bold hover:bg-slate-800 transition-all">
                                    Learn More
                                </button>
                            </div>
                        </div>

                        <!-- Emerging Leaders Program -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="p-8">
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center">
                                        <i class="ph ph-rocket text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-slate-900">Emerging Leaders</h3>
                                        <p class="text-slate-600">For new and potential leaders</p>
                                    </div>
                                </div>
                                <p class="text-slate-600 leading-relaxed mb-6">
                                    Discover and develop your leadership potential through this foundational program 
                                    designed for students who want to make a difference.
                                </p>
                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">6-week foundation course</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">Leadership assessment</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">Practical leadership projects</span>
                                    </div>
                                </div>
                                <button class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-bold hover:bg-slate-800 transition-all">
                                    Learn More
                                </button>
                            </div>
                        </div>

                        <!-- Advanced Leadership Institute -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="p-8">
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center">
                                        <i class="ph ph-crown text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-slate-900">Advanced Institute</h3>
                                        <p class="text-slate-600">For experienced leaders</p>
                                    </div>
                                </div>
                                <p class="text-slate-600 leading-relaxed mb-6">
                                    Advanced training for seasoned leaders focusing on strategic thinking, 
                                            organizational development, and systemic change.
                                </p>
                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">Year-long program</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">Executive coaching</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">National networking</span>
                                    </div>
                                </div>
                                <button class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-bold hover:bg-slate-800 transition-all">
                                    Learn More
                                </button>
                            </div>
                        </div>

                        <!-- Alumni Leadership Network -->
                        <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                            <div class="p-8">
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center">
                                        <i class="ph ph-network text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-slate-900">Alumni Network</h3>
                                        <p class="text-slate-600">For graduate leaders</p>
                                    </div>
                                </div>
                                <p class="text-slate-600 leading-relaxed mb-6">
                                    Continue your leadership journey through our alumni network with ongoing 
                                    development, networking, and mentorship opportunities.
                                </p>
                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">Monthly leadership forums</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">Mentorship opportunities</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-check-circle text-slate-900"></i>
                                        <span class="text-slate-600">Professional development</span>
                                    </div>
                                </div>
                                <button class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-bold hover:bg-slate-800 transition-all">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Application Section -->
            <section id="apply" class="py-20 bg-white">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="bg-slate-50 rounded-3xl shadow-xl p-8 lg:p-12 border border-slate-100">
                        <div class="text-center mb-10">
                            <span class="inline-block px-4 py-2 bg-slate-200 text-slate-700 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Apply</span>
                            <h2 class="text-3xl font-serif text-slate-900 font-bold mb-4">Join Our Leadership Program</h2>
                            <p class="text-slate-600">Take the next step in your leadership journey.</p>
                        </div>

                        <form class="space-y-6">
                            <div class="grid gap-6 md:grid-cols-2">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">First Name *</label>
                                    <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Last Name *</label>
                                    <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                </div>
                            </div>

                            <div class="grid gap-6 md:grid-cols-2">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                                    <input type="email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number *</label>
                                    <input type="tel" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Current Institution *</label>
                                <input type="text" required placeholder="University/College name" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Program of Interest *</label>
                                <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    <option value="">Select Program</option>
                                    <option value="campus">Campus Leadership Program</option>
                                    <option value="emerging">Emerging Leaders Program</option>
                                    <option value="advanced">Advanced Leadership Institute</option>
                                    <option value="alumni">Alumni Leadership Network</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Leadership Experience</label>
                                <textarea rows="4" placeholder="Tell us about any previous leadership experience..." class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent"></textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Why do you want to join? *</label>
                                <textarea required rows="4" placeholder="What motivates you to develop your leadership skills with ICCRTZ?" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-slate-900 text-white px-8 py-4 rounded-full font-bold hover:bg-slate-800 transition-all">
                                Submit Application
                            </button>
                        </form>
                    </div>
                </div>
            </section>

        </main>

        @include('components.footer')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Form handling
                const form = document.querySelector('form');
                if (form) {
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        alert('Thank you for your leadership application! We will contact you within 5-7 business days for the next steps.');
                        // Here you would normally submit the form via AJAX or regular POST
                    });
                }

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
