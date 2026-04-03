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
            body { font-family: 'Manrope', sans-serif; }
            .font-serif { font-family: 'Playfair Display', serif; }
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
            .scroll-smooth { scroll-behavior: smooth; }
            .section-link {
                position: relative;
                display: block;
                padding: 0.75rem 1rem;
                margin: 0.25rem 0;
                border-radius: 0.5rem;
                transition: all 0.3s ease;
                border-left: 3px solid transparent;
            }
            .section-link:hover {
                background: rgba(99, 102, 241, 0.1);
                border-left-color: #6366f1;
                color: #6366f1;
            }
            .section-link.active {
                background: rgba(99, 102, 241, 0.15);
                border-left-color: #6366f1;
                color: #6366f1;
                font-weight: 600;
            }
            .content-section {
                scroll-margin-top: 6rem;
            }
            .highlight-box {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                border-radius: 1rem;
                padding: 2rem;
                position: relative;
                overflow: hidden;
            }
            .highlight-box::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
                animation: shimmer 3s infinite;
            }
            @keyframes shimmer {
                0% { left: -100%; }
                100% { left: 100%; }
            }
        </style>
    </head>
    <body class="min-h-screen bg-white text-slate-900 antialiased font-medium scroll-smooth" x-data="{ 
        mobileMenuOpen: false,
        activeSection: '',
        sections: [
            'introduction',
            'information-we-collect',
            'how-we-use-information',
            'data-sharing',
            'data-security',
            'your-rights',
            'cookies',
            'third-party-services',
            'international-transfers',
            'childrens-privacy',
            'policy-updates',
            'contact'
        ],
        init() {
            this.updateActiveSection();
            window.addEventListener('scroll', () => this.updateActiveSection());
        },
        updateActiveSection() {
            const scrollPosition = window.scrollY + 100;
            
            for (const section of this.sections) {
                const element = document.getElementById(section);
                if (element) {
                    const { offsetTop, offsetHeight } = element;
                    if (scrollPosition >= offsetTop && scrollPosition < offsetTop + offsetHeight) {
                        this.activeSection = section;
                        break;
                    }
                }
            }
        },
        scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    }">
        @include('components.header')

        <main class="pt-24 lg:pt-28">
            <!-- Hero Section -->
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-indigo-900 via-purple-900 to-slate-900 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center">
                        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full mb-6">
                            <i class="ph ph-shield-check text-xl"></i>
                            <span class="font-semibold">Last Updated: April 3, 2026</span>
                        </div>
                        <h1 class="text-5xl lg:text-6xl font-bold mb-6 font-serif">Privacy Policy</h1>
                        <p class="text-xl lg:text-2xl text-slate-200 max-w-4xl mx-auto leading-relaxed">
                            Your privacy is important to us. This policy explains how we collect, use, and protect your personal information.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-8">
                            <a href="#introduction" class="px-8 py-4 bg-white text-indigo-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-book-open mr-2"></i> Read Policy
                            </a>
                            <a href="#contact" class="px-8 py-4 bg-white/20 backdrop-blur-sm text-white font-bold rounded-full hover:bg-white/30 transition-all border border-white/30">
                                <i class="ph ph-envelope mr-2"></i> Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Content Section -->
            <section class="py-16 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid lg:grid-cols-4 gap-8">
                        <!-- Sidebar Navigation -->
                        <div class="lg:col-span-1">
                            <div class="sticky top-28 space-y-2">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Quick Navigation</h3>
                                <template x-for="section in sections" :key="section">
                                    <button @click="scrollToSection(section)" 
                                            :class="activeSection === section ? 'active' : ''"
                                            class="section-link text-left w-full text-sm">
                                        <span x-text="section.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase())"></span>
                                    </button>
                                </template>
                            </div>
                        </div>

                        <!-- Main Content -->
                        <div class="lg:col-span-3 space-y-12">
                            <!-- Introduction -->
                            <div id="introduction" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Introduction</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-4">
                                        Catholic Charismatic Tanzania – Universities Fellowship (ICCRTZ) is committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, store, and protect your data when you interact with our services, website, and organization.
                                    </p>
                                    <p class="mb-4">
                                        By using our services, you agree to the collection and use of information in accordance with this policy. If you disagree with any part of this policy, please do not use our services or provide any personal information.
                                    </p>
                                    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded-r-lg my-6">
                                        <p class="text-indigo-800">
                                            <strong>Our Commitment:</strong> We are committed to maintaining the trust and confidence of our members, visitors, and partners by implementing robust privacy practices and being transparent about our data handling procedures.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Information We Collect -->
                            <div id="information-we-collect" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Information We Collect</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                                    <i class="ph ph-user text-blue-600 text-xl"></i>
                                                </div>
                                                <h3 class="text-lg font-semibold text-slate-900">Personal Information</h3>
                                            </div>
                                            <ul class="space-y-2 text-sm">
                                                <li>• Full name and contact details</li>
                                                <li>• Email address and phone number</li>
                                                <li>• Date of birth and age</li>
                                                <li>• Gender and demographic information</li>
                                                <li>• Educational background</li>
                                                <li>• Diocese and parish information</li>
                                            </ul>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                                    <i class="ph ph-activity text-green-600 text-xl"></i>
                                                </div>
                                                <h3 class="text-lg font-semibold text-slate-900">Usage Information</h3>
                                            </div>
                                            <ul class="space-y-2 text-sm">
                                                <li>• Website browsing behavior</li>
                                                <li>• Event participation history</li>
                                                <li>• Donation and payment records</li>
                                                <li>• Volunteer activities</li>
                                                <li>• Communication preferences</li>
                                                <li>• Login and authentication data</li>
                                            </ul>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                                    <i class="ph ph-devices text-purple-600 text-xl"></i>
                                                </div>
                                                <h3 class="text-lg font-semibold text-slate-900">Technical Information</h3>
                                            </div>
                                            <ul class="space-y-2 text-sm">
                                                <li>• IP address and location data</li>
                                                <li>• Browser type and version</li>
                                                <li>• Device information</li>
                                                <li>• Operating system details</li>
                                                <li>• Cookies and tracking data</li>
                                                <li>• Session information</li>
                                            </ul>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                                                    <i class="ph ph-chat-circle text-orange-600 text-xl"></i>
                                                </div>
                                                <h3 class="text-lg font-semibold text-slate-900">Communication Data</h3>
                                            </div>
                                            <ul class="space-y-2 text-sm">
                                                <li>• Email correspondence</li>
                                                <li>• Social media interactions</li>
                                                <li>• Feedback and survey responses</li>
                                                <li>• Prayer requests and testimonials</li>
                                                <li>• Support inquiries</li>
                                                <li>• Newsletter subscriptions</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- How We Use Information -->
                            <div id="how-we-use-information" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">How We Use Your Information</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <div class="highlight-box mb-8">
                                        <h3 class="text-2xl font-bold mb-4">Our Purpose</h3>
                                        <p class="text-lg mb-4">We use your information to provide, maintain, and improve our services while ensuring your spiritual journey and community engagement are meaningful and secure.</p>
                                    </div>
                                    <div class="space-y-6">
                                        <div class="flex items-start gap-4">
                                            <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <i class="ph ph-users text-indigo-600"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-2">Community Engagement</h4>
                                                <p>To facilitate your participation in ICCRTZ activities, events, and programs, and to connect you with other members of our community.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-4">
                                            <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <i class="ph ph-bell text-indigo-600"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-2">Communication</h4>
                                                <p>To send you important updates, event notifications, newsletters, and other relevant information about our activities and programs.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-4">
                                            <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <i class="ph ph-currency-btz text-indigo-600"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-2">Donation Processing</h4>
                                                <p>To process donations, generate receipts, and provide acknowledgment for your generous contributions to our ministry.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-4">
                                            <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <i class="ph ph-chart-line text-indigo-600"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-2">Service Improvement</h4>
                                                <p>To analyze usage patterns, gather feedback, and continuously improve our programs, events, and digital services.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-4">
                                            <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <i class="ph ph-shield-check text-indigo-600"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-2">Security & Compliance</h4>
                                                <p>To ensure the security of our systems, comply with legal obligations, and protect against fraud or unauthorized activities.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Sharing -->
                            <div id="data-sharing" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Data Sharing & Disclosure</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">We do not sell, rent, or trade your personal information with third parties. We may share your information only under specific circumstances:</p>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                                                <i class="ph ph-handshake text-blue-600"></i>
                                                With Your Consent
                                            </h4>
                                            <p>When you explicitly authorize us to share your information for specific purposes, such as connecting with other members or participating in joint activities.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                                                <i class="ph ph-briefcase text-green-600"></i>
                                                Service Providers
                                            </h4>
                                            <p>With trusted third-party service providers who assist us in operating our services, such as payment processors, email services, and event management platforms.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                                                <i class="ph ph-scales text-purple-600"></i>
                                                Legal Requirements
                                            </h4>
                                            <p>When required by law, court order, or government regulation, or to protect our rights, property, or safety, or that of our members and the public.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                                                <i class="ph ph-arrow-right text-orange-600"></i>
                                                Business Transfers
                                            </h4>
                                            <p>In connection with any merger, acquisition, or sale of assets, where your personal information may be transferred as part of the business assets.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Security -->
                            <div id="data-security" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Data Security Measures</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-8 border border-green-200 mb-8">
                                        <h3 class="text-2xl font-bold text-green-900 mb-4">Our Security Commitment</h3>
                                        <p class="text-green-800">We implement industry-standard security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
                                    </div>
                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div class="space-y-4">
                                            <h4 class="font-semibold text-slate-900">Technical Safeguards</h4>
                                            <ul class="space-y-3">
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>SSL/TLS encryption for data transmission</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Secure password hashing and storage</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Regular security audits and vulnerability assessments</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Firewall protection and intrusion detection</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="space-y-4">
                                            <h4 class="font-semibold text-slate-900">Administrative Safeguards</h4>
                                            <ul class="space-y-3">
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Staff training on privacy and security practices</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Restricted access to personal information</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Data minimization and retention policies</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Incident response and breach notification procedures</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Your Rights -->
                            <div id="your-rights" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Your Privacy Rights</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">You have the following rights regarding your personal information:</p>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-blue-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">Access & Correction</h4>
                                            <p>You can request access to your personal information and correct any inaccuracies or outdated information.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-green-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">Data Portability</h4>
                                            <p>You can request a copy of your personal information in a structured, machine-readable format.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-purple-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">Deletion & Restriction</h4>
                                            <p>You can request deletion of your personal information or restrict its processing under certain circumstances.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-orange-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">Objection & Withdrawal</h4>
                                            <p>You can object to processing of your personal information and withdraw consent at any time.</p>
                                        </div>
                                    </div>
                                    <div class="bg-blue-50 rounded-xl p-6 mt-6">
                                        <h4 class="font-semibold text-blue-900 mb-2">How to Exercise Your Rights</h4>
                                        <p class="text-blue-800">To exercise any of these rights, please contact us using the information provided in the Contact section below. We will respond to your request within 30 days.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Cookies -->
                            <div id="cookies" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Cookies & Tracking Technologies</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">We use cookies and similar tracking technologies to enhance your experience on our website:</p>
                                    <div class="grid md:grid-cols-3 gap-4 mb-6">
                                        <div class="bg-white rounded-xl p-4 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Essential Cookies</h4>
                                            <p class="text-sm">Required for basic website functionality and security.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-4 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Analytics Cookies</h4>
                                            <p class="text-sm">Help us understand how visitors use our website.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-4 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Marketing Cookies</h4>
                                            <p class="text-sm">Used to deliver relevant content and advertisements.</p>
                                        </div>
                                    </div>
                                    <div class="bg-slate-100 rounded-xl p-6">
                                        <h4 class="font-semibold text-slate-900 mb-2">Managing Cookies</h4>
                                        <p>You can control and manage cookies in your browser settings. However, disabling certain cookies may affect website functionality.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Third Party Services -->
                            <div id="third-party-services" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Third-Party Services</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">Our website and services may integrate with third-party services:</p>
                                    <div class="space-y-4">
                                        <div class="flex items-center justify-between bg-white rounded-xl p-4 border border-slate-200">
                                            <div>
                                                <h4 class="font-semibold text-slate-900">Payment Processors</h4>
                                                <p class="text-sm text-slate-600">Secure payment processing for donations and registrations</p>
                                            </div>
                                            <i class="ph ph-currency-btz text-2xl text-green-600"></i>
                                        </div>
                                        <div class="flex items-center justify-between bg-white rounded-xl p-4 border border-slate-200">
                                            <div>
                                                <h4 class="font-semibold text-slate-900">Email Services</h4>
                                                <p class="text-sm text-slate-600">Newsletter distribution and email communication</p>
                                            </div>
                                            <i class="ph ph-envelope text-2xl text-blue-600"></i>
                                        </div>
                                        <div class="flex items-center justify-between bg-white rounded-xl p-4 border border-slate-200">
                                            <div>
                                                <h4 class="font-semibold text-slate-900">Social Media</h4>
                                                <p class="text-sm text-slate-600">Social sharing and community engagement platforms</p>
                                            </div>
                                            <i class="ph ph-share-network text-2xl text-purple-600"></i>
                                        </div>
                                        <div class="flex items-center justify-between bg-white rounded-xl p-4 border border-slate-200">
                                            <div>
                                                <h4 class="font-semibold text-slate-900">Analytics Tools</h4>
                                                <p class="text-sm text-slate-600">Website performance and user behavior analysis</p>
                                            </div>
                                            <i class="ph ph-chart-line text-2xl text-orange-600"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- International Transfers -->
                            <div id="international-transfers" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">International Data Transfers</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">Your personal information may be transferred to and processed in countries other than Tanzania. We ensure appropriate safeguards are in place for international data transfers.</p>
                                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-lg">
                                        <h4 class="font-semibold text-amber-900 mb-2">Transfer Safeguards</h4>
                                        <p class="text-amber-800">We only transfer data to countries that provide adequate protection for personal information or use appropriate contractual safeguards to ensure your data remains protected.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Children's Privacy -->
                            <div id="childrens-privacy" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Children's Privacy</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">Our services are not directed to children under 18 years of age. We do not knowingly collect personal information from children under 18.</p>
                                    <div class="bg-pink-50 rounded-xl p-6 border border-pink-200">
                                        <h4 class="font-semibold text-pink-900 mb-2">Parental Consent</h4>
                                        <p class="text-pink-800">If we become aware that we have collected personal information from a child under 18 without parental consent, we will take steps to remove that information immediately.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Policy Updates -->
                            <div id="policy-updates" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Policy Updates</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">We may update this Privacy Policy from time to time to reflect changes in our practices or for legal and regulatory reasons.</p>
                                    <div class="space-y-4">
                                        <div class="flex items-start gap-3">
                                            <i class="ph ph-bell text-indigo-600 mt-1"></i>
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-1">Notification of Changes</h4>
                                                <p>We will notify you of any material changes by posting the updated policy on our website and sending email notifications to registered users.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-3">
                                            <i class="ph ph-calendar text-indigo-600 mt-1"></i>
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-1">Effective Date</h4>
                                                <p>This Privacy Policy is effective from April 3, 2026, and will remain in effect until superseded by a new version.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact -->
                            <div id="contact" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Contact Us</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">If you have any questions about this Privacy Policy or wish to exercise your rights, please contact us:</p>
                                    <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-8 border border-indigo-200">
                                        <div class="grid md:grid-cols-2 gap-6">
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-4">Privacy Contact</h4>
                                                <div class="space-y-3">
                                                    <div class="flex items-center gap-3">
                                                        <i class="ph ph-envelope text-indigo-600"></i>
                                                        <span>privacy@iccrtz.org</span>
                                                    </div>
                                                    <div class="flex items-center gap-3">
                                                        <i class="ph ph-phone text-indigo-600"></i>
                                                        <span>+255 712 345 678</span>
                                                    </div>
                                                    <div class="flex items-center gap-3">
                                                        <i class="ph ph-map-pin text-indigo-600"></i>
                                                        <span>P.O. Box 1234, Mbeya, Tanzania</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-4">Response Time</h4>
                                                <p class="text-slate-600">We will respond to your privacy inquiries within 30 days of receipt. For urgent matters, please mark your email as "Urgent - Privacy Inquiry."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="py-16 bg-gradient-to-r from-indigo-900 to-purple-900 text-white">
                <div class="max-w-4xl mx-auto px-6 text-center">
                    <h2 class="text-3xl font-bold mb-6">Questions About Your Privacy?</h2>
                    <p class="text-xl mb-8 text-indigo-100">
                        We're here to help you understand how we protect your personal information and ensure your privacy rights are respected.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ url('contact') }}" class="px-8 py-4 bg-white text-indigo-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                            <i class="ph ph-envelope mr-2"></i> Contact Privacy Team
                        </a>
                        <a href="{{ url('terms') }}" class="px-8 py-4 bg-indigo-700 text-white font-bold rounded-full hover:bg-indigo-600 transition-all">
                            <i class="ph ph-file-text mr-2"></i> View Terms & Conditions
                        </a>
                    </div>
                </div>
            </section>
        </main>

        @include('components.footer')
    </body>
</html>
