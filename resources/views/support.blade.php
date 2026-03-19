<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Support ICCRTZ | Inter-Colleges Charismatic Catholic Renewer Tanzania</title>

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
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false, donationAmount: '50', donationType: 'monthly' }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">

            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-slate-900 to-slate-800 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center max-w-4xl mx-auto">
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Support Us</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Partner in <span class="text-slate-300">Mission</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Your generous support enables ICCRTZ to continue forming Catholic disciples, empowering leaders, 
                            and building faith communities across Tanzania's colleges and universities.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="#donate" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-heart mr-2"></i> Donate Now
                            </a>
                            <a href="#impact" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                                <i class="ph ph-chart-line-up mr-2"></i> See Impact
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
                            <div class="text-3xl font-black text-slate-900">10,000+</div>
                            <div class="text-sm text-slate-600">Lives Impacted</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-graduation-cap text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">50+</div>
                            <div class="text-sm text-slate-600">Campuses Reached</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-calendar text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">100+</div>
                            <div class="text-sm text-slate-600">Annual Events</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-slate-100">
                            <i class="ph ph-hand-heart text-slate-900 text-3xl mb-3"></i>
                            <div class="text-3xl font-black text-slate-900">25+</div>
                            <div class="text-sm text-slate-600">Years of Service</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Donation Section -->
            <section id="donate" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Donate</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Make a Donation</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Every contribution helps us continue our mission of forming Catholic disciples and building faith communities.
                        </p>
                    </div>

                    <div class="grid gap-12 lg:grid-cols-2">
                        <!-- Donation Form -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <h3 class="text-2xl font-bold text-slate-900 mb-6">Choose Your Support</h3>
                            
                            <!-- Donation Type -->
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Donation Type</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <button @click="donationType = 'monthly'" 
                                            :class="donationType === 'monthly' ? 'bg-slate-900 text-white' : 'bg-white text-slate-900'"
                                            class="p-3 rounded-xl border border-slate-200 font-semibold transition-all">
                                        Monthly
                                    </button>
                                    <button @click="donationType = 'one-time'" 
                                            :class="donationType === 'one-time' ? 'bg-slate-900 text-white' : 'bg-white text-slate-900'"
                                            class="p-3 rounded-xl border border-slate-200 font-semibold transition-all">
                                        One-Time
                                    </button>
                                </div>
                            </div>

                            <!-- Amount Selection -->
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-slate-700 mb-3">Select Amount</label>
                                <div class="grid grid-cols-3 gap-3">
                                    <button @click="donationAmount = '25'" 
                                            :class="donationAmount === '25' ? 'bg-slate-900 text-white' : 'bg-white text-slate-900'"
                                            class="p-3 rounded-xl border border-slate-200 font-semibold transition-all">
                                        $25
                                    </button>
                                    <button @click="donationAmount = '50'" 
                                            :class="donationAmount === '50' ? 'bg-slate-900 text-white' : 'bg-white text-slate-900'"
                                            class="p-3 rounded-xl border border-slate-200 font-semibold transition-all">
                                        $50
                                    </button>
                                    <button @click="donationAmount = '100'" 
                                            :class="donationAmount === '100' ? 'bg-slate-900 text-white' : 'bg-white text-slate-900'"
                                            class="p-3 rounded-xl border border-slate-200 font-semibold transition-all">
                                        $100
                                    </button>
                                    <button @click="donationAmount = '250'" 
                                            :class="donationAmount === '250' ? 'bg-slate-900 text-white' : 'bg-white text-slate-900'"
                                            class="p-3 rounded-xl border border-slate-200 font-semibold transition-all">
                                        $250
                                    </button>
                                    <button @click="donationAmount = '500'" 
                                            :class="donationAmount === '500' ? 'bg-slate-900 text-white' : 'bg-white text-slate-900'"
                                            class="p-3 rounded-xl border border-slate-200 font-semibold transition-all">
                                        $500
                                    </button>
                                    <button @click="donationAmount = 'custom'" 
                                            :class="donationAmount === 'custom' ? 'bg-slate-900 text-white' : 'bg-white text-slate-900'"
                                            class="p-3 rounded-xl border border-slate-200 font-semibold transition-all">
                                        Custom
                                    </button>
                                </div>
                            </div>

                            <!-- Custom Amount -->
                            <div x-show="donationAmount === 'custom'" class="mb-6">
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Custom Amount ($)</label>
                                <input type="number" min="1" placeholder="Enter amount" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                            </div>

                            <!-- Impact Display -->
                            <div class="bg-white rounded-2xl p-4 mb-6 border border-slate-100">
                                <div class="flex items-center gap-3">
                                    <i class="ph ph-heart text-slate-900 text-xl"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Your Impact</div>
                                        <div class="text-sm text-slate-600">
                                            <span x-show="donationAmount === '25'">Provides Bibles for 5 students</span>
                                            <span x-show="donationAmount === '50'">Supports a campus fellowship for 1 month</span>
                                            <span x-show="donationAmount === '100'">Sponsors a student's leadership training</span>
                                            <span x-show="donationAmount === '250'">Funds a regional retreat for 10 students</span>
                                            <span x-show="donationAmount === '500'">Supports a national conference attendee</span>
                                            <span x-show="donationAmount === 'custom'">Makes a meaningful impact</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Personal Information -->
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name *</label>
                                    <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                                    <input type="email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number</label>
                                    <input type="tel" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                </div>

                                <div class="flex items-start gap-3">
                                    <input type="checkbox" required class="mt-1">
                                    <span class="text-sm text-slate-600">I would like to receive updates about ICCRTZ's work and impact *</span>
                                </div>

                                <button type="submit" class="w-full bg-slate-900 text-white px-8 py-4 rounded-full font-bold hover:bg-slate-800 transition-all">
                                    Complete Donation
                                </button>
                            </form>
                        </div>

                        <!-- Ways to Support -->
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-6">Other Ways to Support</h3>
                            
                            <div class="space-y-6">
                                <!-- Prayer Support -->
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="flex items-start gap-4">
                                        <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                            <i class="ph ph-prayer text-white text-xl"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-xl font-bold text-slate-900 mb-2">Prayer Support</h4>
                                            <p class="text-slate-600 leading-relaxed mb-4">
                                                Join our prayer team and pray for our students, leaders, and ministry activities. Your prayers make a eternal difference.
                                            </p>
                                            <button class="text-slate-900 font-semibold text-sm hover:text-slate-700">
                                                Join Prayer Team <i class="ph ph-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Skills & Expertise -->
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="flex items-start gap-4">
                                        <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                            <i class="ph ph-briefcase text-white text-xl"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-xl font-bold text-slate-900 mb-2">Skills & Expertise</h4>
                                            <p class="text-slate-600 leading-relaxed mb-4">
                                                Share your professional skills in areas like marketing, finance, IT, or administration to help strengthen our ministry.
                                            </p>
                                            <button class="text-slate-900 font-semibold text-sm hover:text-slate-700">
                                                Offer Your Skills <i class="ph ph-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- In-Kind Donations -->
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="flex items-start gap-4">
                                        <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center flex-shrink-0">
                                            <i class="ph ph-gift text-white text-xl"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-xl font-bold text-slate-900 mb-2">In-Kind Donations</h4>
                                            <p class="text-slate-600 leading-relaxed mb-4">
                                                Donate books, Bibles, sound equipment, or other resources that support our campus fellowships and events.
                                            </p>
                                            <button class="text-slate-900 font-semibold text-sm hover:text-slate-700">
                                                View Needs List <i class="ph ph-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Corporate Partnership -->
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                                    <div class="flex items-start gap-4">
                                        <div class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                            <i class="ph ph-buildings text-white text-xl"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-xl font-bold text-slate-900 mb-2">Corporate Partnership</h4>
                                            <p class="text-slate-600 leading-relaxed mb-4">
                                                Partner with us through corporate giving programs, sponsorships, or workplace giving campaigns.
                                            </p>
                                            <button class="text-slate-900 font-semibold text-sm hover:text-slate-700">
                                                Explore Partnership <i class="ph ph-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Impact Section -->
            <section id="impact" class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Impact</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Your Support in Action</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            See how your generosity is transforming lives and building Catholic communities across Tanzania.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-users text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Student Formation</h3>
                            <p class="text-slate-600 mb-4">Your support helps us form 2,000+ Catholic students annually through spiritual formation programs</p>
                            <div class="text-2xl font-black text-slate-900">2,000+</div>
                            <div class="text-sm text-slate-500">Students Formed Yearly</div>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-graduation-cap text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Leadership Training</h3>
                            <p class="text-slate-600 mb-4">We train 500+ student leaders each year who go on to become Catholic leaders in society</p>
                            <div class="text-2xl font-black text-slate-900">500+</div>
                            <div class="text-sm text-slate-500">Leaders Trained Annually</div>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-calendar text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Events & Retreats</h3>
                            <p class="text-slate-600 mb-4">We organize 100+ events yearly including conferences, retreats, and formation programs</p>
                            <div class="text-2xl font-black text-slate-900">100+</div>
                            <div class="text-sm text-slate-500">Events Per Year</div>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-hand-heart text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Community Service</h3>
                            <p class="text-slate-600 mb-4">Our students complete 10,000+ hours of community service annually, serving the wider community</p>
                            <div class="text-2xl font-black text-slate-900">10,000+</div>
                            <div class="text-sm text-slate-500">Service Hours Yearly</div>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-church text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Vocations</h3>
                            <p class="text-slate-600 mb-4">50+ alumni have answered the call to priesthood and religious life through our formation</p>
                            <div class="text-2xl font-black text-slate-900">50+</div>
                            <div class="text-sm text-slate-500">Vocations Fostered</div>
                        </div>

                        <div class="bg-white rounded-3xl p-8 text-center shadow-lg border border-slate-100">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-globe text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Alumni Network</h3>
                            <p class="text-slate-600 mb-4">2,000+ alumni continue to serve the Church and society in various capacities</p>
                            <div class="text-2xl font-black text-slate-900">2,000+</div>
                            <div class="text-sm text-slate-500">Active Alumni</div>
                        </div>
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
                        alert('Thank you for your donation! Your generosity will help us continue our mission of forming Catholic disciples.');
                        // Here you would normally process the payment
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
