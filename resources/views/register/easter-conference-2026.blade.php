<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Register - International Easter Conference 2026 | ICCRTZ</title>

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
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ 
        mobileMenuOpen: false,
        registrationType: 'student',
        accommodationType: 'sharing',
        paymentMethod: 'mobile',
        earlyBird: true
    }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">

            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-red-950 via-red-900 to-slate-900 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center max-w-4xl mx-auto">
                        <div class="flex items-center justify-center gap-3 mb-6">
                            <span class="inline-block px-4 py-1.5 bg-red-600 text-white rounded-full text-xs font-bold tracking-widest uppercase animate-pulse">URGENT</span>
                            <span class="inline-block px-4 py-1.5 bg-red-900/20 text-white rounded-full text-xs font-bold tracking-widest uppercase border border-red-900/30">International Event</span>
                        </div>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Easter <span class="text-red-300">Conference 2026</span></h1>
                        <p class="text-xl md:text-2xl text-slate-200 mb-8 leading-relaxed">Experience resurrection power at our biggest international gathering!</p>
                        
                        <!-- Event Details -->
                        <div class="bg-red-900/20 backdrop-blur-sm rounded-2xl p-6 mb-8 border border-red-800/30">
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                                <div>
                                    <i class="ph ph-calendar text-3xl mb-2"></i>
                                    <div class="text-sm text-red-200">Date</div>
                                    <div class="text-xl font-bold">March 30 - April 5, 2026</div>
                                </div>
                                <div>
                                    <i class="ph ph-map-pin text-3xl mb-2"></i>
                                    <div class="text-sm text-red-200">Venue</div>
                                    <div class="text-xl font-bold">St Mary's Secondary School, Mbeya</div>
                                </div>
                                <div>
                                    <i class="ph ph-users text-3xl mb-2"></i>
                                    <div class="text-sm text-red-200">Expected</div>
                                    <div class="text-xl font-bold">2,000+ Attendees</div>
                                </div>
                                <div>
                                    <i class="ph ph-clock text-3xl mb-2"></i>
                                    <div class="text-sm text-red-200">Duration</div>
                                    <div class="text-xl font-bold">7 Days</div>
                                </div>
                            </div>
                        </div>

                        <!-- Standard Registration Alert -->
                        <div class="bg-slate-100 border border-slate-300 rounded-xl p-4 mb-8 backdrop-blur-sm max-w-2xl mx-auto">
                            <div class="flex items-center gap-3 text-slate-700">
                                <i class="ph ph-info text-2xl"></i>
                                <div class="text-center">
                                    <div class="font-bold text-lg">Standard Registration: TSh 30,000</div>
                                    <div class="text-sm">International visitors: Free (with option to contribute)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Registration Form -->
            <section class="py-20 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 border border-slate-100">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl font-serif text-slate-900 font-bold mb-4">Register Now</h2>
                            <p class="text-lg text-slate-600">Secure your spot at the International Easter Conference 2026</p>
                        </div>

                        <form class="space-y-8">
                            <!-- Registration Type -->
                            <div>
                                <label class="block text-lg font-bold text-slate-900 mb-4">Registration Type *</label>
                                <div class="grid gap-4 md:grid-cols-3">
                                    <label class="relative cursor-pointer">
                                        <input type="radio" name="registration_type" value="student" x-model="registrationType" class="peer sr-only" checked>
                                        <div class="p-4 border-2 border-slate-200 rounded-xl peer-checked:border-red-600 peer-checked:bg-red-50 hover:bg-slate-50 transition-all">
                                            <div class="text-center">
                                                <i class="ph ph-graduation-cap text-2xl mb-2 text-slate-600"></i>
                                                <div class="font-bold text-slate-900">Student</div>
                                                <div class="text-sm text-slate-600">TSh 30,000</div>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="relative cursor-pointer">
                                        <input type="radio" name="registration_type" value="alumni" x-model="registrationType" class="peer sr-only">
                                        <div class="p-4 border-2 border-slate-200 rounded-xl peer-checked:border-red-600 peer-checked:bg-red-50 hover:bg-slate-50 transition-all">
                                            <div class="text-center">
                                                <i class="ph ph-briefcase text-2xl mb-2 text-slate-600"></i>
                                                <div class="font-bold text-slate-900">Alumni</div>
                                                <div class="text-sm text-slate-600">TSh 30,000</div>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="relative cursor-pointer">
                                        <input type="radio" name="registration_type" value="international" x-model="registrationType" class="peer sr-only">
                                        <div class="p-4 border-2 border-slate-200 rounded-xl peer-checked:border-red-600 peer-checked:bg-red-50 hover:bg-slate-50 transition-all">
                                            <div class="text-center">
                                                <i class="ph ph-globe text-2xl mb-2 text-slate-600"></i>
                                                <div class="font-bold text-slate-900">International</div>
                                                <div class="text-sm text-slate-600">Free</div>
                                                <div class="text-xs text-green-600 font-semibold">Can contribute/support</div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- Personal Information -->
                            <div class="grid gap-6 md:grid-cols-2">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">First Name *</label>
                                    <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Last Name *</label>
                                    <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                                    <input type="email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number *</label>
                                    <input type="tel" required placeholder="+255 XXX XXX XXX" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                </div>
                            </div>

                            <!-- Institution/Work Information -->
                            <div class="grid gap-6 md:grid-cols-2">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2" x-show="registrationType === 'student'">University/College *</label>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2" x-show="registrationType === 'alumni'">Current Occupation *</label>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2" x-show="registrationType === 'international'">Organization/Ministry *</label>
                                    <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Study Year/Position *</label>
                                    <input type="text" required placeholder="e.g., Year 3, Manager, etc." class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                </div>
                            </div>

                            <!-- Campus/Location Information -->
                            <div class="grid gap-6 md:grid-cols-2">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Campus/Region *</label>
                                    <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                        <option value="">Select your campus/region</option>
                                        <option value="udsm">University of Dar es Salaam</option>
                                        <option value="ardhi">Ardhi University</option>
                                        <option value="uds">University of Dodoma</option>
                                        <option value="saut">St. Augustine University</option>
                                        <option value="mmu">Mount Meru University</option>
                                        <option value="must">Mbeya University of Science</option>
                                        <option value="stmary">St. Mary University</option>
                                        <option value="mzumbe">Mzumbe University</option>
                                        <option value="uoi">University of Iringa</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">ICCRTZ Member? *</label>
                                    <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                        <option value="">Select option</option>
                                        <option value="yes">Yes, active member</option>
                                        <option value="former">Yes, former member</option>
                                        <option value="no">No, new member</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Dietary Requirements -->
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Dietary Requirements</label>
                                <textarea rows="3" placeholder="Please specify any dietary restrictions or allergies..." class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent"></textarea>
                            </div>

                            <!-- Payment Method -->
                            <div>
                                <label class="block text-lg font-bold text-slate-900 mb-4">Payment Information</label>
                                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                                    <p class="text-slate-600 leading-relaxed">
                                        Payment details will be provided upon registration confirmation. We accept various payment methods including mobile money, bank transfers, and on-site payments.
                                    </p>
                                    <div class="mt-4 flex items-center gap-2 text-sm text-slate-500">
                                        <i class="ph ph-info"></i>
                                        <span>You will receive payment instructions via email after registration</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Contribution/Support for International Visitors -->
                            <div x-show="registrationType === 'international'" class="bg-green-50 rounded-xl p-6 border border-green-200">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Contribution & Support (Optional)</h3>
                                <p class="text-sm text-slate-600 mb-4">
                                    Your registration is free! If you'd like to contribute to support the conference and help others attend, please consider a voluntary contribution.
                                </p>
                                <div class="grid gap-4 md:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Contribution Amount (USD)</label>
                                        <select class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                            <option value="">No contribution</option>
                                            <option value="50">$50 USD</option>
                                            <option value="100">$100 USD</option>
                                            <option value="200">$200 USD</option>
                                            <option value="500">$500 USD</option>
                                            <option value="1000">$1,000 USD</option>
                                            <option value="custom">Custom amount</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Custom Amount (USD)</label>
                                        <input type="number" placeholder="Enter amount" min="1" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                    </div>
                                </div>
                                <div class="mt-4 p-3 bg-green-100 rounded-lg">
                                    <p class="text-sm text-green-700">
                                        <i class="ph ph-heart mr-1"></i>
                                        Your contribution helps subsidize registrations for those who cannot afford to attend.
                                    </p>
                                </div>
                            </div>

                            <!-- Emergency Contact -->
                            <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Emergency Contact</h3>
                                <div class="grid gap-4 md:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Contact Name *</label>
                                        <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Contact Phone *</label>
                                        <input type="tel" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-red-600 focus:border-transparent">
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Submit -->
                            <div class="space-y-4">
                                <label class="flex items-start gap-3">
                                    <input type="checkbox" required class="mt-1 w-4 h-4 text-red-600 border-slate-300 rounded focus:ring-red-600">
                                    <span class="text-sm text-slate-600">
                                        I agree to the terms and conditions of the International Easter Conference 2026. 
                                        I understand that registration fees are non-refundable unless the event is cancelled by the organizers.
                                    </span>
                                </label>
                                <label class="flex items-start gap-3">
                                    <input type="checkbox" required class="mt-1 w-4 h-4 text-red-600 border-slate-300 rounded focus:ring-red-600">
                                    <span class="text-sm text-slate-600">
                                        I consent to my photo/video being taken during the event for promotional purposes.
                                    </span>
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="px-12 py-4 bg-red-600 text-white font-bold rounded-full hover:bg-red-700 transition-all shadow-xl shadow-red-600/30 text-lg">
                                    Complete Registration
                                </button>
                                <p class="text-sm text-slate-500 mt-4">
                                    Standard registration fee: TSh 30,000 for Tanzanian participants, Free for international visitors.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Advanced Impact -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-4">Advanced Impact</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">Innovative Solutions for Lasting Change</p>
                        <p class="text-lg text-slate-600 mt-4">Leveraging cutting-edge technology and data-driven approaches to maximize our impact and create sustainable transformation across Tanzania.</p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-church text-red-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Powerful Worship</h3>
                            <p class="text-sm text-slate-600">Experience God's presence through anointed worship sessions</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-bible text-red-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Life-Changing Teachings</h3>
                            <p class="text-sm text-slate-600">Deep insights from renowned speakers and ministers</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-hands-praying text-red-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Divine Healing</h3>
                            <p class="text-sm text-slate-600">Prayer for healing and deliverance in every session</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-users text-red-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Fellowship</h3>
                            <p class="text-sm text-slate-600">Connect with believers from across Tanzania and beyond</p>
                        </div>
                    </div>

                    <!-- Advanced Impact Metrics -->
                    <div class="mt-16 bg-gradient-to-br from-slate-900 to-red-900 rounded-3xl p-8 border border-slate-800">
                        <h3 class="text-2xl font-bold text-white text-center mb-8">Advanced Impact Metrics</h3>
                        <p class="text-slate-200 text-center mb-12 max-w-2xl mx-auto">Real-time data showing our progressive impact across communities</p>
                        
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
                            <div class="text-center">
                                <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-2xl font-black text-white">98%</span>
                                </div>
                                <h4 class="font-bold text-white mb-1">Program Efficiency</h4>
                                <p class="text-sm text-slate-300">Resource optimization rate</p>
                            </div>
                            <div class="text-center">
                                <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-lg font-black text-white">24/7</span>
                                </div>
                                <h4 class="font-bold text-white mb-1">Monitoring</h4>
                                <p class="text-sm text-slate-300">Real-time impact tracking</p>
                            </div>
                            <div class="text-center">
                                <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-lg font-black text-white">15min</span>
                                </div>
                                <h4 class="font-bold text-white mb-1">Response Time</h4>
                                <p class="text-sm text-slate-300">Emergency assistance delivery</p>
                            </div>
                            <div class="text-center">
                                <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="ph ph-cpu text-white text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-white mb-1">AI Powered</h4>
                                <p class="text-sm text-slate-300">Predictive needs analysis</p>
                            </div>
                        </div>

                        <!-- Technology Partners -->
                        <div class="border-t border-slate-700 pt-8">
                            <h4 class="text-lg font-bold text-white text-center mb-6">Technology Partners</h4>
                            <div class="flex flex-wrap justify-center gap-4">
                                <div class="px-4 py-2 bg-slate-800 rounded-lg text-slate-200 font-semibold">CloudTech</div>
                                <div class="px-4 py-2 bg-slate-800 rounded-lg text-slate-200 font-semibold">DataFlow</div>
                                <div class="px-4 py-2 bg-slate-800 rounded-lg text-slate-200 font-semibold">MobileFirst</div>
                                <div class="px-4 py-2 bg-slate-800 rounded-lg text-slate-200 font-semibold">GreenTech</div>
                                <div class="px-4 py-2 bg-red-600 rounded-lg text-white font-semibold">AI Solutions</div>
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
