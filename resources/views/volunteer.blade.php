<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Volunteer | Inter-Colleges Charismatic Catholic Renewer Tanzania</title>

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
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Volunteer</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Serve with <span class="text-slate-300">Purpose</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Make a meaningful impact by volunteering with ICCRTZ. Share your time, talents, and faith 
                            to help build Catholic communities and transform lives across Tanzania's colleges and universities.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="#opportunities" class="px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-hand-heart mr-2"></i> Volunteer Opportunities
                            </a>
                            <a href="#apply" class="px-8 py-4 bg-slate-700 text-white font-bold rounded-full hover:bg-slate-600 transition-all">
                                <i class="ph ph-user-plus mr-2"></i> Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Volunteer -->
            <section class="py-20 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Why Volunteer</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Make a Difference</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Discover the rewards of serving God and others through ICCRTZ's volunteer programs.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-heart text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Spiritual Growth</h3>
                            <p class="text-slate-600">Deepen your faith through service and experience God's love in action</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-users text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Community Impact</h3>
                            <p class="text-slate-600">Build strong Catholic communities and transform lives through service</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-graduation-cap text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Leadership Skills</h3>
                            <p class="text-slate-600">Develop valuable leadership and organizational skills through hands-on experience</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-globe text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Network Building</h3>
                            <p class="text-slate-600">Connect with like-minded Catholics and build lasting relationships</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-clock text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Flexible Commitment</h3>
                            <p class="text-slate-600">Find opportunities that fit your schedule and availability</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-trophy text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Personal Fulfillment</h3>
                            <p class="text-slate-600">Experience the joy and fulfillment that comes from serving others</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Volunteer Opportunities -->
            <section id="opportunities" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-slate-900 font-black text-xs uppercase tracking-[0.4em] mb-4 inline-block">Opportunities</span>
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Volunteer Roles</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Find the perfect volunteer opportunity that matches your skills, interests, and availability.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2">
                        <!-- Campus Ministry -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-graduation-cap text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Campus Ministry</h3>
                                    <p class="text-slate-600">Support local fellowship groups</p>
                                </div>
                            </div>
                            <div class="space-y-4 mb-6">
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Fellowship Leader</div>
                                        <div class="text-sm text-slate-600">Lead weekly meetings and prayer groups</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Mentor</div>
                                        <div class="text-sm text-slate-600">Guide and support new students</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Event Coordinator</div>
                                        <div class="text-sm text-slate-600">Organize campus events and activities</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-slate-600 mb-4">
                                <strong>Time Commitment:</strong> 2-5 hours per week
                            </div>
                            <button class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-bold hover:bg-slate-800 transition-all">
                                Apply for Campus Ministry
                            </button>
                        </div>

                        <!-- Event Support -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-calendar text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Event Support</h3>
                                    <p class="text-slate-600">Help organize conferences and events</p>
                                </div>
                            </div>
                            <div class="space-y-4 mb-6">
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Event Setup</div>
                                        <div class="text-sm text-slate-600">Venue preparation and decoration</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Registration Desk</div>
                                        <div class="text-sm text-slate-600">Welcome and register attendees</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Logistics Support</div>
                                        <div class="text-sm text-slate-600">Assist with event coordination</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-slate-600 mb-4">
                                <strong>Time Commitment:</strong> Event-based (weekends)
                            </div>
                            <button class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-bold hover:bg-slate-800 transition-all">
                                Apply for Event Support
                            </button>
                        </div>

                        <!-- Music Ministry -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-music-notes text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Music Ministry</h3>
                                    <p class="text-slate-600">Share your musical talents</p>
                                </div>
                            </div>
                            <div class="space-y-4 mb-6">
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Worship Leader</div>
                                        <div class="text-sm text-slate-600">Lead worship at meetings and events</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Musician</div>
                                        <div class="text-sm text-slate-600">Play instruments during worship</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Choir Member</div>
                                        <div class="text-sm text-slate-600">Join our choir for special events</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-slate-600 mb-4">
                                <strong>Time Commitment:</strong> 2-4 hours per week
                            </div>
                            <button class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-bold hover:bg-slate-800 transition-all">
                                Apply for Music Ministry
                            </button>
                        </div>

                        <!-- Outreach Programs -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-hand-heart text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-slate-900">Outreach Programs</h3>
                                    <p class="text-slate-600">Serve the wider community</p>
                                </div>
                            </div>
                            <div class="space-y-4 mb-6">
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Community Service</div>
                                        <div class="text-sm text-slate-600">Participate in service projects</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Evangelization</div>
                                        <div class="text-sm text-slate-600">Share faith with others</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-slate-900 mt-0.5"></i>
                                    <div>
                                        <div class="font-semibold text-slate-900">Charity Work</div>
                                        <div class="text-sm text-slate-600">Support charitable initiatives</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-slate-600 mb-4">
                                <strong>Time Commitment:</strong> 1-3 hours per week
                            </div>
                            <button class="w-full bg-slate-900 text-white px-6 py-3 rounded-full font-bold hover:bg-slate-800 transition-all">
                                Apply for Outreach Programs
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Volunteer Application -->
            <section id="apply" class="py-20 bg-slate-50">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-slate-100">
                        <div class="text-center mb-10">
                            <span class="inline-block px-4 py-2 bg-slate-200 text-slate-700 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Apply Now</span>
                            <h2 class="text-3xl font-serif text-slate-900 font-bold mb-4">Join Our Volunteer Team</h2>
                            <p class="text-slate-600">Take the first step toward making a difference in our Catholic community.</p>
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
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Current Institution/Workplace *</label>
                                <input type="text" required placeholder="University, College, or Company name" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Area of Interest *</label>
                                <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    <option value="">Select Area of Interest</option>
                                    <option value="campus-ministry">Campus Ministry</option>
                                    <option value="event-support">Event Support</option>
                                    <option value="music-ministry">Music Ministry</option>
                                    <option value="outreach-programs">Outreach Programs</option>
                                    <option value="administrative">Administrative Support</option>
                                    <option value="communications">Communications & Media</option>
                                    <option value="fundraising">Fundraising & Development</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Skills & Talents</label>
                                <textarea rows="4" placeholder="Tell us about your skills, talents, or experience that would be valuable for volunteering..." class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent"></textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Availability *</label>
                                <div class="space-y-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2">
                                        <span>Weekdays (2-4 hours)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2">
                                        <span>Weekends (4-6 hours)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2">
                                        <span>Events (as needed)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2">
                                        <span>Flexible/As needed</span>
                                    </label>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Motivation</label>
                                <textarea required rows="4" placeholder="Why do you want to volunteer with ICCRTZ? What motivates you to serve?" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent"></textarea>
                            </div>

                            <div class="flex items-start gap-3">
                                <input type="checkbox" required class="mt-1">
                                <span class="text-sm text-slate-600">I agree to commit my time and talents to serve ICCRTZ in accordance with Catholic values and principles *</span>
                            </div>

                            <div class="flex gap-4">
                                <button type="submit" class="flex-1 bg-slate-900 text-white px-8 py-4 rounded-full font-bold hover:bg-slate-800 transition-all">
                                    Submit Application
                                </button>
                                <button type="button" class="px-8 py-4 bg-slate-100 text-slate-900 rounded-full font-bold hover:bg-slate-200 transition-all">
                                    Clear Form
                                </button>
                            </div>
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
                        alert('Thank you for your volunteer application! We will contact you within 3-5 business days.');
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
