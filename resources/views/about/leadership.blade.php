<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Leadership Team | Inter-Colleges Charismatic Catholic Renewer Tanzania</title>

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
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Leadership</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Our <span class="text-slate-300">Leaders</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Meet the dedicated team of priests, religious, and lay leaders who guide ICCRTZ 
                            in its mission of forming Catholic disciples across Tanzania's colleges and universities.
                        </p>
                        <a href="#team" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                            <i class="ph ph-users mr-2"></i> Meet Our Team
                        </a>
                    </div>
                </div>
            </section>

            <!-- Leadership Team -->
            <section id="team" class="py-20 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Leadership Team</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">National Leadership</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Our leadership team brings together experienced spiritual directors, administrators, 
                            and youth ministers committed to serving Catholic students.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <!-- National Spiritual Director -->
                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="National Spiritual Director" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">His Grace, Archbishop Paul Ruzoka</h3>
                            <div class="text-slate-600 mb-4">National Spiritual Director</div>
                            <p class="text-slate-600 leading-relaxed mb-4">
                                Provides spiritual guidance and oversight for all ICCRTZ activities across Tanzania.
                            </p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2">Archdiocese of Tabora</div>
                                <div>25+ years of service</div>
                            </div>
                        </div>

                        <!-- National Coordinator -->
                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613873/african-kid-marketplace-_8_caa2f7.jpg" alt="National Coordinator" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Fr. John Mwanga</h3>
                            <div class="text-slate-600 mb-4">National Coordinator</div>
                            <p class="text-slate-600 leading-relaxed mb-4">
                                Oversees the strategic development and implementation of ICCRTZ programs nationwide.
                            </p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2">Archdiocese of Dar es Salaam</div>
                                <div>15+ years with ICCRTZ</div>
                            </div>
                        </div>

                        <!-- Deputy Coordinator -->
                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613868/african-children-enjoying-life_sebm6h.jpg" alt="Deputy Coordinator" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Sr. Grace Joseph</h3>
                            <div class="text-slate-600 mb-4">Deputy Coordinator</div>
                            <p class="text-slate-600 leading-relaxed mb-4">
                                Coordinates student programs and provides pastoral care to campus communities.
                            </p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2">Archdiocese of Arusha</div>
                                <div>10+ years with ICCRTZ</div>
                            </div>
                        </div>

                        <!-- Finance Director -->
                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="Finance Director" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Michael Kimario</h3>
                            <div class="text-slate-600 mb-4">Finance & Administration</div>
                            <p class="text-slate-600 leading-relaxed mb-4">
                                Manages financial resources and administrative operations of the organization.
                            </p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2">Diocese of Dodoma</div>
                                <div>12+ years with ICCRTZ</div>
                            </div>
                        </div>

                        <!-- Programs Director -->
                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613879/volunteer-helping-with-donation-box_dwuyr7.jpg" alt="Programs Director" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Anna Mwalimu</h3>
                            <div class="text-slate-600 mb-4">Programs Director</div>
                            <p class="text-slate-600 leading-relaxed mb-4">
                                Develops and implements formation programs and leadership training initiatives.
                            </p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2">Archdiocese of Mwanza</div>
                                <div>8+ years with ICCRTZ</div>
                            </div>
                        </div>

                        <!-- Youth Chaplain -->
                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613870/african-kid-marketplace-_7_xiwx7g.jpg" alt="Youth Chaplain" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Fr. Joseph Nyange</h3>
                            <div class="text-slate-600 mb-4">National Youth Chaplain</div>
                            <p class="text-slate-600 leading-relaxed mb-4">
                                Provides spiritual direction and pastoral care to students and young adults.
                            </p>
                            <div class="text-sm text-slate-500">
                                <div class="mb-2">Diocese of Mbeya</div>
                                <div>6+ years with ICCRTZ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Regional Coordinators -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Regional Leadership</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Regional Coordinators</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Our regional coordinators ensure effective implementation of ICCRTZ programs across different zones.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Northern Zone -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-slate-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Northern Zone</h3>
                                    <p class="text-slate-600 mb-2">Fr. Michael Kimario</p>
                                    <p class="text-slate-600 leading-relaxed mb-4">
                                        Covers Arusha, Kilimanjaro, and Manyara regions. Based in Arusha.
                                    </p>
                                    <div class="text-sm text-slate-500">
                                        <div class="mb-1">📞 +255 27 250 0001</div>
                                        <div>📧 northern@iccrctz.org</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lake Zone -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Lake Zone</h3>
                                    <p class="text-slate-600 mb-2">Sr. Anna Mwalimu</p>
                                    <p class="text-slate-600 leading-relaxed mb-4">
                                        Covers Mwanza, Shinyanga, and Mara regions. Based in Mwanza.
                                    </p>
                                    <div class="text-sm text-slate-500">
                                        <div class="mb-1">📞 +255 28 250 0001</div>
                                        <div>📧 lake@iccrctz.org</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Southern Zone -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-slate-700 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Southern Zone</h3>
                                    <p class="text-slate-600 mb-2">Fr. Joseph Nyange</p>
                                    <p class="text-slate-600 leading-relaxed mb-4">
                                        Covers Mbeya, Iringa, and Njombe regions. Based in Mbeya.
                                    </p>
                                    <div class="text-sm text-slate-500">
                                        <div class="mb-1">📞 +255 25 250 0001</div>
                                        <div>📧 southern@iccrctz.org</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Western Zone -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-slate-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Western Zone</h3>
                                    <p class="text-slate-600 mb-2">Fr. John Mwanga</p>
                                    <p class="text-slate-600 leading-relaxed mb-4">
                                        Covers Kigoma, Tabora, and Kagera regions. Based in Tabora.
                                    </p>
                                    <div class="text-sm text-slate-500">
                                        <div class="mb-1">📞 +255 26 250 0001</div>
                                        <div>📧 western@iccrctz.org</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Central Zone -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-slate-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Central Zone</h3>
                                    <p class="text-slate-600 mb-2">Sr. Grace Joseph</p>
                                    <p class="text-slate-600 leading-relaxed mb-4">
                                        Covers Dodoma, Singida, and Manyoni regions. Based in Dodoma.
                                    </p>
                                    <div class="text-sm text-slate-500">
                                        <div class="mb-1">📞 +255 26 250 0001</div>
                                        <div>📧 central@iccrctz.org</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Coastal Zone -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Coastal Zone</h3>
                                    <p class="text-slate-600 mb-2">Michael Kimario</p>
                                    <p class="text-slate-600 leading-relaxed mb-4">
                                        Covers Dar es Salaam, Coast, and Morogoro regions. Based in Dar es Salaam.
                                    </p>
                                    <div class="text-sm text-slate-500">
                                        <div class="mb-1">📞 +255 22 250 0001</div>
                                        <div>📧 coastal@iccrctz.org</div>
                                    </div>
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
