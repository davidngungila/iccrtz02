<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Join Fellowship | Catholic Charismatic Tanzania – Universities Fellowship</title>

        <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium" x-data="{ mobileMenuOpen: false, membershipType: 'student' }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">

            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-slate-900 to-slate-800 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center max-w-4xl mx-auto">
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Join Us</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Become <span class="text-slate-300">Part of Our Family</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            Join thousands of Catholic students and alumni growing together in faith, leadership, and service. 
                            Start your journey of spiritual formation and meaningful connections today.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Registration Form -->
            <section class="py-20 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 border border-slate-100">
                        <div class="text-center mb-10">
                            <h2 class="text-3xl font-serif text-slate-900 font-bold mb-4">Choose Your Membership Type</h2>
                            <p class="text-slate-600">Select the category that best describes you to begin your registration</p>
                        </div>

                        <!-- Membership Type Selection -->
                        <div class="grid gap-4 md:grid-cols-2 mb-10">
                            <button @click="membershipType = 'student'" 
                                    :class="membershipType === 'student' ? 'bg-slate-900 text-white border-slate-900' : 'bg-white text-slate-900 border-slate-200'"
                                    class="p-6 rounded-2xl border-2 transition-all text-left">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl flex items-center justify-center" 
                                         :class="membershipType === 'student' ? 'bg-white text-slate-900' : 'bg-slate-900 text-white'">
                                        <i class="ph ph-graduation-cap text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Student Member</h3>
                                        <p class="text-sm opacity-80">Current university student</p>
                                    </div>
                                </div>
                            </button>

                            <button @click="membershipType = 'alumni'" 
                                    :class="membershipType === 'alumni' ? 'bg-slate-900 text-white border-slate-900' : 'bg-white text-slate-900 border-slate-200'"
                                    class="p-6 rounded-2xl border-2 transition-all text-left">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl flex items-center justify-center" 
                                         :class="membershipType === 'alumni' ? 'bg-white text-slate-900' : 'bg-slate-900 text-white'">
                                        <i class="ph ph-briefcase text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold mb-1">Alumni Member</h3>
                                        <p class="text-sm opacity-80">Graduate and professional</p>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <!-- Registration Form -->
                        <form class="space-y-6">
                            <!-- Personal Information -->
                            <div class="border-t border-slate-200 pt-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-6">Personal Information</h3>
                                <div class="grid gap-6 md:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">First Name *</label>
                                        <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Last Name *</label>
                                        <input type="text" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                                        <input type="email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number *</label>
                                        <input type="tel" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Date of Birth *</label>
                                        <input type="date" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Gender *</label>
                                        <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Academic/Professional Information -->
                            <div class="border-t border-slate-200 pt-8" x-show="membershipType === 'student'">
                                <h3 class="text-xl font-bold text-slate-900 mb-6">Academic Information</h3>
                                <div class="grid gap-6 md:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">University *</label>
                                        <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                            <option value="">Select University</option>
                                            <option value="udsm">University of Dar es Salaam</option>
                                            <option value="udom">University of Dodoma</option>
                                            <option value="sua">Sokoine University of Agriculture</option>
                                            <option value="much">Muhimbili University</option>
                                            <option value="staugustine">St. Augustine University</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Year of Study *</label>
                                        <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                            <option value="">Select Year</option>
                                            <option value="1">First Year</option>
                                            <option value="2">Second Year</option>
                                            <option value="3">Third Year</option>
                                            <option value="4">Fourth Year</option>
                                            <option value="5">Fifth Year+</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Program/Faculty *</label>
                                        <input type="text" required placeholder="e.g., Medicine, Engineering, Arts" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Student ID Number</label>
                                        <input type="text" placeholder="Optional" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-slate-200 pt-8" x-show="membershipType === 'alumni'">
                                <h3 class="text-xl font-bold text-slate-900 mb-6">Professional Information</h3>
                                <div class="grid gap-6 md:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Graduation Year *</label>
                                        <input type="number" required min="1995" max="2024" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">University Attended *</label>
                                        <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                            <option value="">Select University</option>
                                            <option value="udsm">University of Dar es Salaam</option>
                                            <option value="udom">University of Dodoma</option>
                                            <option value="sua">Sokoine University of Agriculture</option>
                                            <option value="much">Muhimbili University</option>
                                            <option value="staugustine">St. Augustine University</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Current Occupation *</label>
                                        <input type="text" required placeholder="e.g., Doctor, Engineer, Teacher" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Company/Organization</label>
                                        <input type="text" placeholder="Optional" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>
                                </div>
                            </div>

                            <!-- Spiritual Background -->
                            <div class="border-t border-slate-200 pt-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-6">Spiritual Background</h3>
                                <div class="space-y-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Are you Catholic? *</label>
                                        <div class="flex gap-4">
                                            <label class="flex items-center">
                                                <input type="radio" name="catholic" value="yes" required class="mr-2">
                                                <span>Yes</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="catholic" value="no" required class="mr-2">
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">How did you hear about us? *</label>
                                        <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                            <option value="">Select Option</option>
                                            <option value="friend">Friend/Classmate</option>
                                            <option value="campus">Campus Event</option>
                                            <option value="social">Social Media</option>
                                            <option value="website">Website</option>
                                            <option value="church">Church/Parish</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Why do you want to join CCT-UF? *</label>
                                        <textarea required rows="4" placeholder="Tell us about your interest in our fellowship..." class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Submit -->
                            <div class="border-t border-slate-200 pt-8">
                                <div class="space-y-4">
                                    <label class="flex items-start gap-3">
                                        <input type="checkbox" required class="mt-1">
                                        <span class="text-sm text-slate-600">I agree to abide by the Catholic Charismatic Tanzania – Universities Fellowship code of conduct and values *</span>
                                    </label>
                                    <label class="flex items-start gap-3">
                                        <input type="checkbox" required class="mt-1">
                                        <span class="text-sm text-slate-600">I consent to receive communications from CCT-UF regarding events, programs, and updates *</span>
                                    </label>
                                </div>

                                <div class="mt-8 flex gap-4">
                                    <button type="submit" class="flex-1 bg-slate-900 text-white px-8 py-4 rounded-full font-bold hover:bg-slate-800 transition-all">
                                        Submit Registration
                                    </button>
                                    <button type="button" class="px-8 py-4 bg-slate-100 text-slate-900 rounded-full font-bold hover:bg-slate-200 transition-all">
                                        Clear Form
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Benefits Section -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Membership Benefits</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Discover what you'll gain as a member of our growing Catholic community.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-users text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Community</h3>
                            <p class="text-slate-600">Join a supportive faith community of like-minded students and professionals</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-cross text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Spiritual Growth</h3>
                            <p class="text-slate-600">Deepen your faith through formation programs and spiritual activities</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-graduation-cap text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Leadership Development</h3>
                            <p class="text-slate-600">Develop essential leadership skills for your future career and service</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-calendar text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Events & Programs</h3>
                            <p class="text-slate-600">Access exclusive events, retreats, conferences, and formation programs</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-hand-heart text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Service Opportunities</h3>
                            <p class="text-slate-600">Participate in meaningful outreach and community service projects</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <i class="ph ph-briefcase text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Networking</h3>
                            <p class="text-slate-600">Connect with professionals and alumni for mentorship and career opportunities</p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        @include('components.footer')

        <script>
            // Form handling
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form');
                if (form) {
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        alert('Thank you for your registration! We will contact you soon with next steps.');
                        // Here you would normally submit the form via AJAX or regular POST
                    });
                }
            });
        </script>
    </body>
</html>
