<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Contact Us | Catholic Charismatic Tanzania – Universities Fellowship</title>

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
                        <span class="inline-block px-4 py-2 bg-slate-700 text-slate-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Contact</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Get in <span class="text-slate-300">Touch</span></h1>
                        <p class="text-xl text-slate-200 leading-relaxed mb-12">
                            We'd love to hear from you! Whether you're interested in joining our fellowship, 
                            have questions about our programs, or want to support our mission, we're here to help.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Contact Information & Form -->
            <section class="py-20 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid gap-12 lg:grid-cols-2">
                        <!-- Contact Information -->
                        <div>
                            <h2 class="text-3xl font-serif text-slate-900 font-bold mb-8">Get in Touch</h2>
                            
                            <div class="space-y-8">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-map-pin text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-slate-900 mb-2">National Office</h3>
                                        <p class="text-slate-600 leading-relaxed">
                                            Catholic Charismatic Tanzania<br>
                                            Universities Fellowship<br>
                                            P.O.Box 7744, Dar es Salaam<br>
                                            Tanzania
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-phone text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-slate-900 mb-2">Phone</h3>
                                        <p class="text-slate-600">
                                            Main: +255 22 211 0000<br>
                                            Mobile: +255 754 123 456<br>
                                            WhatsApp: +255 754 123 456
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-envelope text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-slate-900 mb-2">Email</h3>
                                        <p class="text-slate-600">
                                            General: info@cctuf.org<br>
                                            Students: students@cctuf.org<br>
                                            Alumni: alumni@cctuf.org
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <i class="ph ph-clock text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-slate-900 mb-2">Office Hours</h3>
                                        <p class="text-slate-600">
                                            Monday - Friday: 8:00 AM - 5:00 PM<br>
                                            Saturday: 9:00 AM - 1:00 PM<br>
                                            Sunday: Closed
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Media -->
                            <div class="mt-12">
                                <h3 class="text-xl font-bold text-slate-900 mb-4">Follow Us</h3>
                                <div class="flex gap-4">
                                    <a href="#" class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center hover:bg-slate-800 transition-colors">
                                        <i class="ph ph-facebook-logo text-white text-xl"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center hover:bg-slate-700 transition-colors">
                                        <i class="ph ph-instagram-logo text-white text-xl"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center hover:bg-slate-600 transition-colors">
                                        <i class="ph ph-twitter-logo text-white text-xl"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center hover:bg-slate-500 transition-colors">
                                        <i class="ph ph-youtube-logo text-white text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div>
                            <div class="bg-white rounded-3xl shadow-xl p-8 border border-slate-100">
                                <h2 class="text-2xl font-serif text-slate-900 font-bold mb-6">Send us a Message</h2>
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

                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                                        <input type="email" required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number</label>
                                        <input type="tel" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Subject *</label>
                                        <select required class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent">
                                            <option value="">Select Subject</option>
                                            <option value="join">Join Fellowship</option>
                                            <option value="events">Event Information</option>
                                            <option value="volunteer">Volunteer Opportunities</option>
                                            <option value="support">Support/Donation</option>
                                            <option value="partnership">Partnership Inquiry</option>
                                            <option value="media">Media Inquiry</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-slate-700 mb-2">Message *</label>
                                        <textarea required rows="6" placeholder="Tell us how we can help you..." class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-900 focus:border-transparent"></textarea>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <input type="checkbox" required class="mt-1">
                                        <span class="text-sm text-slate-600">I agree to be contacted regarding my inquiry *</span>
                                    </div>

                                    <button type="submit" class="w-full bg-slate-900 text-white px-8 py-4 rounded-full font-bold hover:bg-slate-800 transition-all">
                                        Send Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Regional Offices -->
            <section class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Regional Offices</h2>
                        <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                            Find our regional coordinators and offices across Tanzania for local support and connections.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Dar es Salaam</h3>
                                    <p class="text-slate-600">Regional Office</p>
                                </div>
                            </div>
                            <div class="space-y-3 text-sm text-slate-600">
                                <p><strong>Coordinator:</strong> Fr. John Mwanga</p>
                                <p><strong>Phone:</strong> +255 22 211 0001</p>
                                <p><strong>Email:</strong> dar@cctuf.org</p>
                                <p><strong>Coverage:</strong> DSM, Coast, Morogoro</p>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Arusha</h3>
                                    <p class="text-slate-600">Regional Office</p>
                                </div>
                            </div>
                            <div class="space-y-3 text-sm text-slate-600">
                                <p><strong>Coordinator:</strong> Sr. Grace Joseph</p>
                                <p><strong>Phone:</strong> +255 27 250 0001</p>
                                <p><strong>Email:</strong> arusha@cctuf.org</p>
                                <p><strong>Coverage:</strong> Arusha, Manyara, Kilimanjaro</p>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Mwanza</h3>
                                    <p class="text-slate-600">Regional Office</p>
                                </div>
                            </div>
                            <div class="space-y-3 text-sm text-slate-600">
                                <p><strong>Coordinator:</strong> Fr. Michael Kimario</p>
                                <p><strong>Phone:</strong> +255 28 250 0001</p>
                                <p><strong>Email:</strong> mwanza@cctuf.org</p>
                                <p><strong>Coverage:</strong> Mwanza, Shinyanga, Mara</p>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-600 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Mbeya</h3>
                                    <p class="text-slate-600">Regional Office</p>
                                </div>
                            </div>
                            <div class="space-y-3 text-sm text-slate-600">
                                <p><strong>Coordinator:</strong> Sr. Anna Mwalimu</p>
                                <p><strong>Phone:</strong> +255 25 250 0001</p>
                                <p><strong>Email:</strong> mbeya@cctuf.org</p>
                                <p><strong>Coverage:</strong> Mbeya, Iringa, Njombe</p>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Dodoma</h3>
                                    <p class="text-slate-600">Regional Office</p>
                                </div>
                            </div>
                            <div class="space-y-3 text-sm text-slate-600">
                                <p><strong>Coordinator:</strong> Fr. Joseph Nyange</p>
                                <p><strong>Phone:</strong> +255 26 250 0001</p>
                                <p><strong>Email:</strong> dodoma@cctuf.org</p>
                                <p><strong>Coverage:</strong> Dodoma, Singida, Tabora</p>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center">
                                    <i class="ph ph-map-pin text-white text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Zanzibar</h3>
                                    <p class="text-slate-600">Regional Office</p>
                                </div>
                            </div>
                            <div class="space-y-3 text-sm text-slate-600">
                                <p><strong>Coordinator:</strong> Sr. Grace Mwanga</p>
                                <p><strong>Phone:</strong> +255 24 250 0001</p>
                                <p><strong>Email:</strong> zanzibar@cctuf.org</p>
                                <p><strong>Coverage:</strong> Unguja, Pemba</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="py-20 bg-slate-50">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-serif text-slate-900 font-bold mb-6">Frequently Asked Questions</h2>
                        <p class="text-xl text-slate-600 leading-relaxed">
                            Find answers to common questions about our fellowship and programs.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                                <span class="font-semibold text-slate-900">How do I join the fellowship?</span>
                                <i class="ph ph-caret-down text-slate-600"></i>
                            </button>
                            <div class="px-6 pb-4 text-slate-600">
                                You can join by filling out our registration form on the Join page, or by contacting your campus fellowship coordinator directly.
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                                <span class="font-semibold text-slate-900">Are there membership fees?</span>
                                <i class="ph ph-caret-down text-slate-600"></i>
                            </button>
                            <div class="px-6 pb-4 text-slate-600">
                                Basic membership is free. Some special events and programs may have nominal fees to cover costs, but we strive to keep everything affordable.
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                                <span class="font-semibold text-slate-900">Do I have to be Catholic to join?</span>
                                <i class="ph ph-caret-down text-slate-600"></i>
                            </button>
                            <div class="px-6 pb-4 text-slate-600">
                                While we are a Catholic organization, we welcome all students who are interested in growing in faith and leadership, regardless of their religious background.
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                                <span class="font-semibold text-slate-900">How can I support the fellowship?</span>
                                <i class="ph ph-caret-down text-slate-600"></i>
                            </button>
                            <div class="px-6 pb-4 text-slate-600">
                                You can support us through prayers, volunteering your time and skills, or through financial donations. Contact us for more information on how to help.
                            </div>
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
                        alert('Thank you for your message! We will get back to you within 24-48 hours.');
                        // Here you would normally submit the form via AJAX or regular POST
                    });
                }

                // FAQ accordion
                const faqButtons = document.querySelectorAll('button');
                faqButtons.forEach(button => {
                    if (button.textContent.includes('membership fees') || 
                        button.textContent.includes('join the fellowship') ||
                        button.textContent.includes('Catholic to join') ||
                        button.textContent.includes('support the fellowship')) {
                        button.addEventListener('click', function() {
                            const content = this.nextElementSibling;
                            const icon = this.querySelector('i');
                            
                            if (content.style.display === 'none' || !content.style.display) {
                                content.style.display = 'block';
                                icon.style.transform = 'rotate(180deg)';
                            } else {
                                content.style.display = 'none';
                                icon.style.transform = 'rotate(0deg)';
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
