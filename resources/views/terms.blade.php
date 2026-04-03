<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Terms & Conditions | Catholic Charismatic Tanzania – Universities Fellowship</title>

        <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { 
                font-family: 'Manrope', sans-serif; 
                background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
                min-height: 100vh;
            }
            .font-serif { font-family: 'Playfair Display', serif; }
            [x-cloak] { display: none !important; }
            
            .gradient-bg {
                background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            }
            
            .card-shadow {
                box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            
            .section-card {
                background: white;
                border-radius: 1rem;
                padding: 2rem;
                margin-bottom: 1.5rem;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                transition: all 0.3s ease;
            }
            
            .section-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            
            .nav-link {
                color: #94a3b8;
                text-decoration: none;
                transition: color 0.3s ease;
                font-weight: 500;
            }
            
            .nav-link:hover {
                color: #3b82f6;
            }
            
            .nav-link.active {
                color: #1e293b;
                font-weight: 600;
            }
            
            .scroll-indicator {
                position: fixed;
                top: 0;
                left: 0;
                height: 3px;
                background: linear-gradient(90deg, #3b82f6, #8b5cf6);
                z-index: 100;
                transition: width 0.3s ease;
            }
            
            @media (max-width: 768px) {
                .section-card {
                    padding: 1.5rem;
                }
            }
        </style>
    </head>
    <body class="antialiased" x-data="{ 
        activeSection: '',
        scrollProgress: 0,
        
        init() {
            this.updateScrollProgress();
            this.updateActiveSection();
            window.addEventListener('scroll', () => {
                this.updateScrollProgress();
                this.updateActiveSection();
            });
        },
        
        updateScrollProgress() {
            const scrollTop = window.pageYOffset;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            this.scrollProgress = (scrollTop / docHeight) * 100;
        },
        
        updateActiveSection() {
            const sections = document.querySelectorAll('section[id]');
            const scrollY = window.pageYOffset;
            
            sections.forEach(section => {
                const sectionHeight = section.offsetHeight;
                const sectionTop = section.offsetTop - 100;
                const sectionId = section.getAttribute('id');
                
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    this.activeSection = sectionId;
                }
            });
        },
        
        scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }">
        <!-- Scroll Progress Indicator -->
        <div class="scroll-indicator" :style="'width: ' + scrollProgress + '%'"></div>

        @include('components.header')

        <main class="pt-24 lg:pt-28 pb-16">
            <!-- Hero Section -->
            <section class="gradient-bg text-white py-16 lg:py-20">
                <div class="max-w-4xl mx-auto px-6 text-center">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <i class="ph ph-file-text text-xl"></i>
                        <span class="text-sm font-medium">Legal Terms</span>
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6 font-serif">Terms & Conditions</h1>
                    <p class="text-lg lg:text-xl text-slate-200 leading-relaxed max-w-3xl mx-auto">
                        These terms and conditions govern your use of ICCRTZ services and website. By using our services, you agree to these terms.
                    </p>
                    <div class="flex items-center justify-center gap-4 mt-8 text-sm text-slate-300">
                        <span><i class="ph ph-calendar mr-1"></i> Last updated: April 3, 2026</span>
                        <span><i class="ph ph-clock mr-1"></i> Effective date: April 3, 2026</span>
                    </div>
                </div>
            </section>

            <!-- Table of Contents -->
            <section class="max-w-4xl mx-auto px-6 py-8">
                <div class="bg-white rounded-xl card-shadow p-6">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-list-bullets text-purple-600"></i>
                        Table of Contents
                    </h2>
                    <nav class="grid md:grid-cols-2 gap-3">
                        <template x-for="section in [
                            { id: 'acceptance', title: '1. Acceptance of Terms', icon: 'ph ph-check-circle' },
                            { id: 'services', title: '2. Our Services', icon: 'ph ph-gift' },
                            { id: 'user-responsibilities', title: '3. User Responsibilities', icon: 'ph ph-user' },
                            { id: 'conduct', title: '4. Code of Conduct', icon: 'ph ph-heart' },
                            { id: 'intellectual-property', title: '5. Intellectual Property', icon: 'ph ph-copyright' },
                            { id: 'privacy', title: '6. Privacy & Data', icon: 'ph ph-lock' },
                            { id: 'liability', title: '7. Liability & Disclaimers', icon: 'ph ph-warning' },
                            { id: 'termination', title: '8. Termination', icon: 'ph ph-x-circle' },
                            { id: 'contact', title: '9. Contact Information', icon: 'ph ph-envelope' }
                        ]" :key="section.id">
                            <a 
                                :href="'#' + section.id" 
                                @click="scrollToSection(section.id)"
                                :class="activeSection === section.id ? 'active bg-purple-50 text-purple-600 border-purple-200' : 'hover:bg-slate-50 border-transparent'"
                                class="flex items-center gap-3 p-3 rounded-lg border transition-all nav-link">
                                <i :class="section.icon" class="text-lg"></i>
                                <span class="font-medium" x-text="section.title"></span>
                            </a>
                        </template>
                    </nav>
                </div>
            </section>

            <!-- Content Sections -->
            <div class="max-w-4xl mx-auto px-6">
                <!-- Acceptance of Terms -->
                <section id="acceptance" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-check-circle text-purple-600"></i>
                        1. Acceptance of Terms
                    </h2>
                    <div class="prose prose-slate max-w-none">
                        <p class="text-slate-600 leading-relaxed mb-4">
                            By accessing and using Catholic Charismatic Tanzania – Universities Fellowship (ICCRTZ) website, services, events, or programs, you agree to be bound by these Terms & Conditions and all applicable laws and regulations.
                        </p>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            If you do not agree with any of these terms, you are prohibited from using or accessing our services. The materials contained in this website are protected by applicable copyright and trademark law.
                        </p>
                        <div class="bg-purple-50 border-l-4 border-purple-500 p-4 rounded">
                            <p class="text-purple-800 font-medium">
                                <i class="ph ph-info mr-2"></i>
                                Using our services constitutes your acceptance of these terms and our Privacy Policy.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Our Services -->
                <section id="services" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-gift text-purple-600"></i>
                        2. Our Services
                    </h2>
                    <div class="space-y-6">
                        <p class="text-slate-600 leading-relaxed">
                            ICCRTZ provides various services including but not limited to:
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h3 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                                    <i class="ph ph-calendar text-purple-500"></i>
                                    Events & Programs
                                </h3>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• International conferences and summits</li>
                                    <li>• Local and regional events</li>
                                    <li>• Leadership training programs</li>
                                    <li>• Youth camps and retreats</li>
                                </ul>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h3 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                                    <i class="ph ph-users text-purple-500"></i>
                                    Community Services
                                </h3>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Fellowship and networking</li>
                                    <li>• Spiritual guidance and counseling</li>
                                    <li>• Volunteer opportunities</li>
                                    <li>• Community outreach programs</li>
                                </ul>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h3 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                                    <i class="ph ph-globe text-purple-500"></i>
                                    Digital Services
                                </h3>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Website and mobile applications</li>
                                    <li>• Online registration systems</li>
                                    <li>• Email newsletters and communications</li>
                                    <li>• Social media platforms</li>
                                </ul>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h3 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                                    <i class="ph ph-graduation-cap text-purple-500"></i>
                                    Educational Resources
                                </h3>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Study materials and resources</li>
                                    <li>• Workshops and seminars</li>
                                    <li>• Mentorship programs</li>
                                    <li>• Leadership development</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded">
                            <p class="text-amber-800">
                                <i class="ph ph-warning mr-2"></i>
                                We reserve the right to modify, suspend, or discontinue any service at any time without notice.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- User Responsibilities -->
                <section id="user-responsibilities" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-user text-purple-600"></i>
                        3. User Responsibilities
                    </h2>
                    <div class="space-y-4">
                        <p class="text-slate-600 leading-relaxed">
                            As a user of ICCRTZ services, you agree to:
                        </p>
                        
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="ph ph-check text-green-600 text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Provide Accurate Information</h4>
                                    <p class="text-sm text-slate-600">Ensure all information provided is true, accurate, and current</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="ph ph-check text-green-600 text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Maintain Account Security</h4>
                                    <p class="text-sm text-slate-600">Protect your login credentials and account access</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="ph ph-check text-green-600 text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Comply with Guidelines</h4>
                                    <p class="text-sm text-slate-600">Follow all applicable rules and regulations</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="ph ph-check text-green-600 text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Respect Others</h4>
                                    <p class="text-sm text-slate-600">Treat all members and participants with respect and dignity</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded">
                            <h4 class="font-semibold text-red-800 mb-2">Prohibited Activities</h4>
                            <ul class="space-y-1 text-red-700">
                                <li>• Using services for illegal or unauthorized purposes</li>
                                <li>• Harassing, abusing, or harming others</li>
                                <li>• Impersonating any person or entity</li>
                                <li>• Interfering with or disrupting services</li>
                                <li>• Attempting to gain unauthorized access to systems</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Code of Conduct -->
                <section id="conduct" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-heart text-purple-600"></i>
                        4. Code of Conduct
                    </h2>
                    <div class="space-y-4">
                        <p class="text-slate-600 leading-relaxed">
                            ICCRTZ is committed to providing a safe, respectful, and inclusive environment for all participants. Our code of conduct is based on Christian values and principles.
                        </p>
                        
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-blue-50 rounded-lg p-4 text-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="ph ph-heart text-blue-600 text-xl"></i>
                                </div>
                                <h4 class="font-semibold text-blue-800 mb-2">Love & Respect</h4>
                                <p class="text-sm text-blue-600">Treat others with love, kindness, and respect</p>
                            </div>
                            
                            <div class="bg-green-50 rounded-lg p-4 text-center">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="ph ph-handshake text-green-600 text-xl"></i>
                                </div>
                                <h4 class="font-semibold text-green-800 mb-2">Unity & Fellowship</h4>
                                <p class="text-sm text-green-600">Promote unity and Christian fellowship</p>
                            </div>
                            
                            <div class="bg-purple-50 rounded-lg p-4 text-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="ph ph-crown text-purple-600 text-xl"></i>
                                </div>
                                <h4 class="font-semibold text-purple-800 mb-2">Integrity & Honor</h4>
                                <p class="text-sm text-purple-600">Uphold Christian values and integrity</p>
                            </div>
                        </div>
                        
                        <div class="bg-slate-50 rounded-lg p-4">
                            <h4 class="font-semibold text-slate-800 mb-3">Expected Behavior</h4>
                            <div class="grid md:grid-cols-2 gap-4 text-sm text-slate-600">
                                <ul class="space-y-1">
                                    <li>• Dress modestly and appropriately</li>
                                    <li>• Use respectful language</li>
                                    <li>• Participate actively and positively</li>
                                    <li>• Support and encourage others</li>
                                </ul>
                                <ul class="space-y-1">
                                    <li>• Follow event schedules and guidelines</li>
                                    <li>• Respect leadership and authority</li>
                                    <li>• Maintain confidentiality when appropriate</li>
                                    <li>• Represent ICCRTZ positively</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Intellectual Property -->
                <section id="intellectual-property" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-copyright text-purple-600"></i>
                        5. Intellectual Property
                    </h2>
                    <div class="space-y-4">
                        <p class="text-slate-600 leading-relaxed">
                            All content, materials, and intellectual property on ICCRTZ platforms are protected by copyright and other intellectual property laws.
                        </p>
                        
                        <div class="space-y-3">
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">ICCRTZ Property</h4>
                                <ul class="space-y-1 text-sm text-slate-600">
                                    <li>• Website design and content</li>
                                    <li>• Event materials and resources</li>
                                    <li>• Educational materials and curriculum</li>
                                    <li>• Logos, trademarks, and branding</li>
                                    <li>• Photos, videos, and media content</li>
                                </ul>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Usage Rights</h4>
                                <ul class="space-y-1 text-sm text-slate-600">
                                    <li>• Personal, non-commercial use permitted</li>
                                    <li>• Attribution required for shared content</li>
                                    <li>• No modification or derivative works</li>
                                    <li>• No redistribution without permission</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded">
                            <p class="text-amber-800">
                                <i class="ph ph-warning mr-2"></i>
                                Unauthorized use of ICCRTZ intellectual property may result in legal action.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Privacy & Data -->
                <section id="privacy" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-lock text-purple-600"></i>
                        6. Privacy & Data Protection
                    </h2>
                    <div class="space-y-4">
                        <p class="text-slate-600 leading-relaxed">
                            Your privacy is important to us. Our collection and use of personal information is governed by our Privacy Policy, which forms part of these terms.
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Data Collection</h4>
                                <p class="text-sm text-slate-600">We collect information necessary to provide our services and improve user experience.</p>
                            </div>
                            
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Data Usage</h4>
                                <p class="text-sm text-slate-600">Your data is used for service delivery, communication, and improvement purposes.</p>
                            </div>
                            
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Data Protection</h4>
                                <p class="text-sm text-slate-600">We implement appropriate security measures to protect your information.</p>
                            </div>
                            
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Your Rights</h4>
                                <p class="text-sm text-slate-600">You have rights to access, correct, and delete your personal information.</p>
                            </div>
                        </div>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                            <p class="text-blue-800">
                                <i class="ph ph-info mr-2"></i>
                                Please review our Privacy Policy for detailed information about data handling.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Liability & Disclaimers -->
                <section id="liability" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-warning text-purple-600"></i>
                        7. Liability & Disclaimers
                    </h2>
                    <div class="space-y-4">
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded">
                            <h3 class="font-semibold text-red-800 mb-2">Limitation of Liability</h3>
                            <p class="text-red-700">
                                ICCRTZ shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising from your use of our services or website.
                            </p>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Service Availability</h4>
                                <p class="text-sm text-slate-600">We do not guarantee uninterrupted or error-free service. Services may be temporarily unavailable for maintenance or other reasons.</p>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Third-Party Links</h4>
                                <p class="text-sm text-slate-600">Our website may contain links to third-party websites. We are not responsible for the content or practices of these sites.</p>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Content Accuracy</h4>
                                <p class="text-sm text-slate-600">While we strive to provide accurate information, we make no warranties about the completeness, reliability, or accuracy of content.</p>
                            </div>
                        </div>
                        
                        <div class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded">
                            <p class="text-amber-800">
                                <i class="ph ph-warning mr-2"></i>
                                Your use of our services is at your own risk. This disclaimer applies to all damages arising from the use or inability to use our services.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Termination -->
                <section id="termination" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-x-circle text-purple-600"></i>
                        8. Termination
                    </h2>
                    <div class="space-y-4">
                        <p class="text-slate-600 leading-relaxed">
                            We may terminate or suspend your access to our services immediately, without prior notice or liability, for any reason, including if you breach the terms.
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-red-50 rounded-lg p-4">
                                <h4 class="font-semibold text-red-800 mb-2">Grounds for Termination</h4>
                                <ul class="space-y-1 text-sm text-red-700">
                                    <li>• Violation of terms and conditions</li>
                                    <li>• Inappropriate conduct or behavior</li>
                                    <li>• Fraudulent or illegal activities</li>
                                    <li>• Harm to other members or community</li>
                                </ul>
                            </div>
                            
                            <div class="bg-blue-50 rounded-lg p-4">
                                <h4 class="font-semibold text-blue-800 mb-2">Effects of Termination</h4>
                                <ul class="space-y-1 text-sm text-blue-700">
                                    <li>• Loss of access to services</li>
                                    <li>• Removal from events and programs</li>
                                    <li>• Deletion of account and data</li>
                                    <li>• No refund for paid services</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-slate-50 rounded-lg p-4">
                            <h4 class="font-semibold text-slate-800 mb-2">User Termination</h4>
                            <p class="text-sm text-slate-600">You may terminate your account at any time by contacting us or using account deletion features where available.</p>
                        </div>
                    </div>
                </section>

                <!-- Contact Information -->
                <section id="contact" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-envelope text-purple-600"></i>
                        9. Contact Information
                    </h2>
                    <div class="space-y-6">
                        <p class="text-slate-600 leading-relaxed">
                            If you have any questions about these Terms & Conditions, please contact us:
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-slate-50 rounded-lg p-6">
                                <h3 class="font-semibold text-slate-800 mb-4">Legal Contact</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-envelope text-purple-500"></i>
                                        <span class="text-slate-600">legal@iccrtz.org</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-phone text-purple-500"></i>
                                        <span class="text-slate-600">+255 712 345 678</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-map-pin text-purple-500"></i>
                                        <span class="text-slate-600">Archdiocese of Mbeya, Tanzania</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-6">
                                <h3 class="font-semibold text-slate-800 mb-4">General Inquiries</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-envelope text-purple-500"></i>
                                        <span class="text-slate-600">info@iccrtz.org</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-globe text-purple-500"></i>
                                        <span class="text-slate-600">www.iccrtz.org</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-social-media text-purple-500"></i>
                                        <span class="text-slate-600">Social media channels</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-purple-50 border-l-4 border-purple-500 p-4 rounded">
                            <p class="text-purple-800">
                                <i class="ph ph-info mr-2"></i>
                                We are committed to addressing your concerns and providing clarity on our terms and conditions.
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Agreement Section -->
            <section class="max-w-4xl mx-auto px-6 py-8">
                <div class="bg-gradient-to-r from-purple-100 to-blue-100 rounded-xl p-6">
                    <h3 class="text-lg font-semibold text-slate-800 mb-3">Agreement to Terms</h3>
                    <p class="text-slate-600 mb-4">
                        By using ICCRTZ services, you acknowledge that you have read, understood, and agree to be bound by these Terms & Conditions.
                    </p>
                    <div class="flex items-center gap-4 text-sm text-slate-500">
                        <span><i class="ph ph-calendar mr-1"></i> Last updated: April 3, 2026</span>
                        <span><i class="ph ph-arrow-clockwise mr-1"></i> Next review: October 3, 2026</span>
                    </div>
                </div>
            </section>
        </main>

        @include('components.footer')
    </body>
</html>
