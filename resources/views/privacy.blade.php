<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Privacy Policy | Catholic Charismatic Tanzania – Universities Fellowship</title>

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
                        <i class="ph ph-shield-check text-xl"></i>
                        <span class="text-sm font-medium">Privacy & Security</span>
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6 font-serif">Privacy Policy</h1>
                    <p class="text-lg lg:text-xl text-slate-200 leading-relaxed max-w-3xl mx-auto">
                        Your privacy is important to us. This policy explains how we collect, use, and protect your personal information when you use our services.
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
                        <i class="ph ph-list-bullets text-blue-600"></i>
                        Table of Contents
                    </h2>
                    <nav class="grid md:grid-cols-2 gap-3">
                        <template x-for="section in [
                            { id: 'introduction', title: '1. Introduction', icon: 'ph ph-info' },
                            { id: 'information-collection', title: '2. Information We Collect', icon: 'ph ph-database' },
                            { id: 'information-use', title: '3. How We Use Your Information', icon: 'ph ph-gear' },
                            { id: 'information-sharing', title: '4. Information Sharing', icon: 'ph ph-share-network' },
                            { id: 'data-security', title: '5. Data Security', icon: 'ph ph-lock' },
                            { id: 'cookies', title: '6. Cookies & Tracking', icon: 'ph ph-cookie' },
                            { id: 'user-rights', title: '7. Your Rights', icon: 'ph ph-user-rights' },
                            { id: 'contact', title: '8. Contact Us', icon: 'ph ph-envelope' }
                        ]" :key="section.id">
                            <a 
                                :href="'#' + section.id" 
                                @click="scrollToSection(section.id)"
                                :class="activeSection === section.id ? 'active bg-blue-50 text-blue-600 border-blue-200' : 'hover:bg-slate-50 border-transparent'"
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
                <!-- Introduction -->
                <section id="introduction" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-info text-blue-600"></i>
                        1. Introduction
                    </h2>
                    <div class="prose prose-slate max-w-none">
                        <p class="text-slate-600 leading-relaxed mb-4">
                            Catholic Charismatic Tanzania – Universities Fellowship (ICCRTZ) is committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, use our services, or interact with our organization.
                        </p>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            By using our services, you agree to the collection and use of information in accordance with this policy. If you disagree with any part of this policy, please do not use our website or services.
                        </p>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                            <p class="text-blue-800 font-medium">
                                <i class="ph ph-info mr-2"></i>
                                This policy applies to all information collected by ICCRTZ, including through our website, events, programs, and communications.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Information We Collect -->
                <section id="information-collection" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-database text-blue-600"></i>
                        2. Information We Collect
                    </h2>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-3">Personal Information</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>Name, email address, phone number, and contact details</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>Date of birth, gender, and demographic information</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>Diocese, parish, and religious affiliation</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>Educational background and university information</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-3">Event & Program Information</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>Event registration details and attendance records</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>Program participation and involvement history</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>Volunteer activities and service records</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-3">Technical Information</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>IP address, browser type, and device information</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>Pages visited and time spent on our website</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ph ph-check-circle text-green-500 mt-0.5"></i>
                                    <span>Cookies and tracking technologies</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- How We Use Your Information -->
                <section id="information-use" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-gear text-blue-600"></i>
                        3. How We Use Your Information
                    </h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-slate-50 rounded-lg p-4">
                            <h3 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                                <i class="ph ph-users text-blue-500"></i>
                                Community & Events
                            </h3>
                            <ul class="space-y-2 text-sm text-slate-600">
                                <li>• Event registration and management</li>
                                <li>• Program coordination and communication</li>
                                <li>• Volunteer matching and coordination</li>
                                <li>• Community building and networking</li>
                            </ul>
                        </div>
                        
                        <div class="bg-slate-50 rounded-lg p-4">
                            <h3 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                                <i class="ph ph-envelope text-blue-500"></i>
                                Communication
                            </h3>
                            <ul class="space-y-2 text-sm text-slate-600">
                                <li>• Newsletters and updates</li>
                                <li>• Event announcements and reminders</li>
                                <li>• Spiritual resources and materials</li>
                                <li>• Response to inquiries and requests</li>
                            </ul>
                        </div>
                        
                        <div class="bg-slate-50 rounded-lg p-4">
                            <h3 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                                <i class="ph ph-chart-line text-blue-500"></i>
                                Improvement & Analytics
                            </h3>
                            <ul class="space-y-2 text-sm text-slate-600">
                                <li>• Website and service improvement</li>
                                <li>• Program effectiveness analysis</li>
                                <li>• Research and statistical analysis</li>
                                <li>• Trend identification and planning</li>
                            </ul>
                        </div>
                        
                        <div class="bg-slate-50 rounded-lg p-4">
                            <h3 class="font-semibold text-slate-800 mb-3 flex items-center gap-2">
                                <i class="ph ph-shield-check text-blue-500"></i>
                                Legal & Security
                            </h3>
                            <ul class="space-y-2 text-sm text-slate-600">
                                <li>• Legal compliance and obligations</li>
                                <li>• Fraud prevention and security</li>
                                <li>• Rights and property protection</li>
                                <li>• Safety and emergency communications</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Information Sharing -->
                <section id="information-sharing" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-share-network text-blue-600"></i>
                        4. Information Sharing
                    </h2>
                    <div class="space-y-4">
                        <p class="text-slate-600 leading-relaxed">
                            We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except in the following circumstances:
                        </p>
                        
                        <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
                            <h3 class="font-semibold text-yellow-800 mb-2">We may share information when:</h3>
                            <ul class="space-y-1 text-yellow-700">
                                <li>• Required by law or legal process</li>
                                <li>• Necessary to protect our rights, property, or safety</li>
                                <li>• With trusted service providers who assist our operations</li>
                                <li>• With your explicit consent for specific purposes</li>
                                <li>• In connection with a merger, acquisition, or sale of assets</li>
                            </ul>
                        </div>
                        
                        <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded">
                            <h3 class="font-semibold text-green-800 mb-2">We never share:</h3>
                            <ul class="space-y-1 text-green-700">
                                <li>• Personal information with marketing companies</li>
                                <li>• Your data for commercial purposes without consent</li>
                                <li>• More information than necessary for the stated purpose</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Data Security -->
                <section id="data-security" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-lock text-blue-600"></i>
                        5. Data Security
                    </h2>
                    <div class="space-y-4">
                        <p class="text-slate-600 leading-relaxed">
                            We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-lock text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Encryption</h4>
                                    <p class="text-sm text-slate-600">Data is encrypted during transmission and storage</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-users text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Access Control</h4>
                                    <p class="text-sm text-slate-600">Limited access to authorized personnel only</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-monitor text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Regular Monitoring</h4>
                                    <p class="text-sm text-slate-600">Continuous security monitoring and updates</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="ph ph-shield-check text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800">Compliance</h4>
                                    <p class="text-sm text-slate-600">Adherence to data protection regulations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Cookies & Tracking -->
                <section id="cookies" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-cookie text-blue-600"></i>
                        6. Cookies & Tracking Technologies
                    </h2>
                    <div class="space-y-4">
                        <p class="text-slate-600 leading-relaxed">
                            We use cookies and similar tracking technologies to enhance your experience on our website and improve our services.
                        </p>
                        
                        <div class="space-y-3">
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Essential Cookies</h4>
                                <p class="text-sm text-slate-600">Required for basic website functionality and security</p>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Analytics Cookies</h4>
                                <p class="text-sm text-slate-600">Help us understand how visitors interact with our website</p>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2">Functional Cookies</h4>
                                <p class="text-sm text-slate-600">Enable enhanced functionality and personalization</p>
                            </div>
                        </div>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                            <p class="text-blue-800">
                                <i class="ph ph-info mr-2"></i>
                                You can control cookies through your browser settings. However, disabling certain cookies may affect website functionality.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Your Rights -->
                <section id="user-rights" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-user-rights text-blue-600"></i>
                        7. Your Rights
                    </h2>
                    <div class="space-y-4">
                        <p class="text-slate-600 leading-relaxed">
                            You have the following rights regarding your personal information:
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2 flex items-center gap-2">
                                    <i class="ph ph-eye text-blue-500"></i>
                                    Access & Review
                                </h4>
                                <p class="text-sm text-slate-600">Request access to your personal information</p>
                            </div>
                            
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2 flex items-center gap-2">
                                    <i class="ph ph-pencil text-blue-500"></i>
                                    Correction & Update
                                </h4>
                                <p class="text-sm text-slate-600">Request correction of inaccurate information</p>
                            </div>
                            
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2 flex items-center gap-2">
                                    <i class="ph ph-trash text-blue-500"></i>
                                    Deletion
                                </h4>
                                <p class="text-sm text-slate-600">Request deletion of your personal information</p>
                            </div>
                            
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h4 class="font-semibold text-slate-800 mb-2 flex items-center gap-2">
                                    <i class="ph ph-download text-blue-500"></i>
                                    Portability
                                </h4>
                                <p class="text-sm text-slate-600">Request transfer of your data to another service</p>
                            </div>
                        </div>
                        
                        <div class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded">
                            <p class="text-amber-800">
                                <i class="ph ph-warning mr-2"></i>
                                To exercise these rights, please contact us using the information provided below.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Contact Us -->
                <section id="contact" class="section-card">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="ph ph-envelope text-blue-600"></i>
                        8. Contact Us
                    </h2>
                    <div class="space-y-6">
                        <p class="text-slate-600 leading-relaxed">
                            If you have any questions about this Privacy Policy or wish to exercise your rights, please contact us:
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-slate-50 rounded-lg p-6">
                                <h3 class="font-semibold text-slate-800 mb-4">Privacy Contact</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-envelope text-blue-500"></i>
                                        <span class="text-slate-600">privacy@iccrtz.org</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-phone text-blue-500"></i>
                                        <span class="text-slate-600">+255 712 345 678</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <i class="ph ph-map-pin text-blue-500"></i>
                                        <span class="text-slate-600">Archdiocese of Mbeya, Tanzania</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-slate-50 rounded-lg p-6">
                                <h3 class="font-semibold text-slate-800 mb-4">Response Time</h3>
                                <div class="space-y-2 text-slate-600">
                                    <p>We typically respond to privacy inquiries within:</p>
                                    <ul class="space-y-1">
                                        <li class="flex items-center gap-2">
                                            <i class="ph ph-check-circle text-green-500"></i>
                                            <span>Access requests: 30 days</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ph ph-check-circle text-green-500"></i>
                                            <span>Correction requests: 15 days</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ph ph-check-circle text-green-500"></i>
                                            <span>General inquiries: 7 days</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                            <p class="text-blue-800">
                                <i class="ph ph-info mr-2"></i>
                                We are committed to addressing your privacy concerns promptly and transparently.
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Policy Updates -->
            <section class="max-w-4xl mx-auto px-6 py-8">
                <div class="bg-gradient-to-r from-slate-100 to-slate-200 rounded-xl p-6">
                    <h3 class="text-lg font-semibold text-slate-800 mb-3">Policy Updates</h3>
                    <p class="text-slate-600 mb-4">
                        We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last updated" date.
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
