<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Event Calendar | Inter-Colleges Charismatic Catholic Renewer Tanzania</title>

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
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Event Calendar</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Stay <span class="text-slate-300">Connected</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Never miss an important ICCRTZ event. Our calendar keeps you updated with all fellowships, 
                            conferences, retreats, and spiritual formation activities across Tanzania.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="#upcoming" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-calendar mr-2"></i> View Events
                            </a>
                            <a href="{{ url('events') }}" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                                <i class="ph ph-plus-circle mr-2"></i> Add Event
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Calendar View -->
            <section id="upcoming" class="py-20 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Calendar</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Upcoming Events</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Plan your participation in our upcoming events and activities.
                        </p>
                    </div>

                    <!-- Featured Event - Easter Conference -->
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-2 border-red-200 mb-12">
                        <div class="grid md:grid-cols-2 gap-0">
                            <div class="relative">
                                <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="International Easter Conference" class="w-full h-full object-cover min-h-[300px]">
                                <div class="absolute top-6 left-6 bg-red-600 text-white px-4 py-2 rounded-full text-sm font-bold animate-pulse">
                                    URGENT - Register Now!
                                </div>
                            </div>
                            <div class="p-8 flex flex-col justify-center">
                                <div class="mb-4">
                                    <span class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-bold mb-3">International Conference</span>
                                    <h3 class="text-2xl font-bold text-slate-900 mb-3">International Easter Conference 2026</h3>
                                    <p class="text-slate-600 leading-relaxed mb-4">
                                        Experience resurrection power at our biggest international gathering!
                                    </p>
                                </div>
                                <div class="grid grid-cols-2 gap-4 mb-6">
                                    <div class="flex items-center gap-2">
                                        <i class="ph ph-calendar text-slate-900"></i>
                                        <div>
                                            <div class="text-xs text-slate-500">Date</div>
                                            <div class="font-bold text-slate-900 text-sm">Apr 3-6, 2026</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="ph ph-map-pin text-slate-900"></i>
                                        <div>
                                            <div class="text-xs text-slate-500">Location</div>
                                            <div class="font-bold text-slate-900 text-sm">Dodoma</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('register/easter-conference-2026') }}" class="w-full bg-red-600 text-white px-4 py-3 rounded-full font-bold hover:bg-red-700 transition-all text-center animate-pulse">
                                    Register Now - Save 30%!
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Monthly Calendar Grid -->
                    <div class="bg-white rounded-3xl shadow-lg p-8 border border-slate-100">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-2xl font-bold text-slate-900">March 2024</h3>
                            <div class="flex items-center gap-4">
                                <button class="p-2 hover:bg-slate-100 rounded-lg transition-colors">
                                    <i class="ph ph-caret-left text-slate-600"></i>
                                </button>
                                <button class="p-2 hover:bg-slate-100 rounded-lg transition-colors">
                                    <i class="ph ph-caret-right text-slate-600"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Calendar Grid -->
                        <div class="grid grid-cols-7 gap-2 mb-4">
                            <div class="text-center text-sm font-semibold text-slate-600 py-2">Sun</div>
                            <div class="text-center text-sm font-semibold text-slate-600 py-2">Mon</div>
                            <div class="text-center text-sm font-semibold text-slate-600 py-2">Tue</div>
                            <div class="text-center text-sm font-semibold text-slate-600 py-2">Wed</div>
                            <div class="text-center text-sm font-semibold text-slate-600 py-2">Thu</div>
                            <div class="text-center text-sm font-semibold text-slate-600 py-2">Fri</div>
                            <div class="text-center text-sm font-semibold text-slate-600 py-2">Sat</div>
                        </div>

                        <div class="grid grid-cols-7 gap-2">
                            <!-- Calendar Days -->
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-400 text-sm">25</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-400 text-sm">26</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-400 text-sm">27</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-400 text-sm">28</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">1</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">2</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">3</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">4</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">5</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">6</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">7</div>
                            <div class="aspect-square flex flex-col items-center justify-center bg-slate-100 rounded-lg text-sm">
                                <div class="font-semibold text-slate-900">8</div>
                                <div class="w-2 h-2 bg-slate-600 rounded-full mt-1"></div>
                            </div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">9</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">10</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">11</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">12</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">13</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">14</div>
                            <div class="aspect-square flex flex-col items-center justify-center bg-slate-100 rounded-lg text-sm">
                                <div class="font-semibold text-slate-900">15</div>
                                <div class="w-2 h-2 bg-slate-600 rounded-full mt-1"></div>
                            </div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">16</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">17</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">18</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">19</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">20</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">21</div>
                            <div class="aspect-square flex flex-col items-center justify-center bg-slate-100 rounded-lg text-sm">
                                <div class="font-semibold text-slate-900">22</div>
                                <div class="w-2 h-2 bg-slate-600 rounded-full mt-1"></div>
                            </div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">23</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">24</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">25</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">26</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">27</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">28</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">29</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">30</div>
                            <div class="aspect-square flex flex-col items-center justify-center text-slate-900 text-sm">31</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Event List -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Events</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Recent & Upcoming</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Browse through our recent and upcoming events.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <!-- Leadership Retreat -->
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                            <div class="flex items-start gap-6">
                                <div class="bg-slate-900 text-white rounded-xl p-4 text-center min-w-[100px]">
                                    <div class="text-2xl font-bold">JAN</div>
                                    <div class="text-3xl font-black">5-7</div>
                                    <div class="text-sm">2024</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="px-3 py-1 bg-slate-800 text-white rounded-full text-xs font-bold">Retreat</span>
                                        <span class="text-slate-500 text-sm">Morogoro</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Leadership Retreat</h3>
                                    <p class="text-slate-600 mb-4">Intensive leadership training for student leaders and coordinators from all regions.</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-4 text-sm text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> 100 spots</span>
                                            <span><i class="ph ph-clock mr-1"></i> 3 days</span>
                                        </div>
                                        <a href="{{ url('register/leadership-retreat') }}" class="px-4 py-2 bg-slate-900 text-white rounded-full text-sm font-bold hover:bg-slate-800 transition-all">
                                            Register
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Weekly Fellowship -->
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                            <div class="flex items-start gap-6">
                                <div class="bg-slate-700 text-white rounded-xl p-4 text-center min-w-[100px]">
                                    <div class="text-2xl font-bold">MAR</div>
                                    <div class="text-3xl font-black">8</div>
                                    <div class="text-sm">2024</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="px-3 py-1 bg-slate-700 text-white rounded-full text-xs font-bold">Weekly</span>
                                        <span class="text-slate-500 text-sm">All Campuses</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Weekly Fellowship Meetings</h3>
                                    <p class="text-slate-600 mb-4">Regular fellowship gatherings at all ICCRTZ campus chapters for prayer, worship, and sharing.</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-4 text-sm text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> Open to all</span>
                                            <span><i class="ph ph-clock mr-1"></i> 2 hours</span>
                                        </div>
                                        <a href="{{ url('campuses') }}" class="px-4 py-2 bg-slate-700 text-white rounded-full text-sm font-bold hover:bg-slate-600 transition-all">
                                            Find Location
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Formation Program -->
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                            <div class="flex items-start gap-6">
                                <div class="bg-slate-600 text-white rounded-xl p-4 text-center min-w-[100px]">
                                    <div class="text-2xl font-bold">MAR</div>
                                    <div class="text-3xl font-black">15</div>
                                    <div class="text-sm">2024</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="px-3 py-1 bg-slate-600 text-white rounded-full text-xs font-bold">Formation</span>
                                        <span class="text-slate-500 text-sm">Online</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Spiritual Formation Program</h3>
                                    <p class="text-slate-600 mb-4">Monthly online formation sessions focusing on spiritual growth and discipleship.</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-4 text-sm text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> Online event</span>
                                            <span><i class="ph ph-clock mr-1"></i> 2 hours</span>
                                        </div>
                                        <a href="{{ url('teachings') }}" class="px-4 py-2 bg-slate-600 text-white rounded-full text-sm font-bold hover:bg-slate-500 transition-all">
                                            Join Online
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Regional Meeting -->
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-lg transition-all">
                            <div class="flex items-start gap-6">
                                <div class="bg-slate-900 text-white rounded-xl p-4 text-center min-w-[100px]">
                                    <div class="text-2xl font-bold">MAR</div>
                                    <div class="text-3xl font-black">22</div>
                                    <div class="text-sm">2024</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="px-3 py-1 bg-slate-900 text-white rounded-full text-xs font-bold">Regional</span>
                                        <span class="text-slate-500 text-sm">Dar es Salaam</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Coastal Zone Regional Meeting</h3>
                                    <p class="text-slate-600 mb-4">Quarterly gathering of all campus fellowships in the Coastal Zone for coordination and fellowship.</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-4 text-sm text-slate-500">
                                            <span><i class="ph ph-users mr-1"></i> Zone leaders</span>
                                            <span><i class="ph ph-clock mr-1"></i> 4 hours</span>
                                        </div>
                                        <a href="{{ url('contact') }}" class="px-4 py-2 bg-slate-900 text-white rounded-full text-sm font-bold hover:bg-slate-800 transition-all">
                                            Contact Zone
                                        </a>
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
