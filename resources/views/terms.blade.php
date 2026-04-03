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
                background: rgba(239, 68, 68, 0.1);
                border-left-color: #ef4444;
                color: #ef4444;
            }
            .section-link.active {
                background: rgba(239, 68, 68, 0.15);
                border-left-color: #ef4444;
                color: #ef4444;
                font-weight: 600;
            }
            .content-section {
                scroll-margin-top: 6rem;
            }
            .highlight-box {
                background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
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
            'acceptance',
            'membership',
            'conduct',
            'intellectual-property',
            'privacy',
            'donations',
            'events',
            'communications',
            'prohibited-activities',
            'disclaimer',
            'limitation-of-liability',
            'termination',
            'dispute-resolution',
            'governing-law',
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
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-red-900 via-rose-900 to-slate-900 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center">
                        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full mb-6">
                            <i class="ph ph-gavel text-xl"></i>
                            <span class="font-semibold">Last Updated: April 3, 2026</span>
                        </div>
                        <h1 class="text-5xl lg:text-6xl font-bold mb-6 font-serif">Terms & Conditions</h1>
                        <p class="text-xl lg:text-2xl text-slate-200 max-w-4xl mx-auto leading-relaxed">
                            These terms govern your use of ICCRTZ services, membership, and participation in our activities and programs.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-8">
                            <a href="#introduction" class="px-8 py-4 bg-white text-red-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                                <i class="ph ph-book-open mr-2"></i> Read Terms
                            </a>
                            <a href="#contact" class="px-8 py-4 bg-white/20 backdrop-blur-sm text-white font-bold rounded-full hover:bg-white/30 transition-all border border-white/30">
                                <i class="ph ph-envelope mr-2"></i> Legal Contact
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
                                        Welcome to Catholic Charismatic Tanzania – Universities Fellowship (ICCRTZ). These Terms & Conditions ("Terms") govern your use of our website, services, events, and participation in our organization.
                                    </p>
                                    <p class="mb-4">
                                        By accessing or using ICCRTZ services, you agree to be bound by these Terms. If you do not agree to these Terms, please do not use our services or participate in our activities.
                                    </p>
                                    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg my-6">
                                        <p class="text-red-800">
                                            <strong>Important:</strong> These Terms constitute a legally binding agreement between you and ICCRTZ. Please read them carefully before using our services.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Acceptance -->
                            <div id="acceptance" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Acceptance of Terms</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">By using ICCRTZ services, you acknowledge and agree to:</p>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Legal Capacity</h4>
                                            <p>You are at least 18 years old and have the legal capacity to enter into these Terms.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Compliance</h4>
                                            <p>You will comply with all applicable laws and regulations in connection with your use of our services.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Agreement</h4>
                                            <p>You accept all terms, conditions, and policies referenced herein and incorporated by reference.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Membership -->
                            <div id="membership" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Membership Terms</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <div class="highlight-box mb-8">
                                        <h3 class="text-2xl font-bold mb-4">Becoming a Member</h3>
                                        <p class="text-lg mb-4">Membership in ICCRTZ is open to university students and young adults who share our values and mission. Membership may involve registration, approval, and adherence to our community standards.</p>
                                    </div>
                                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                                        <div class="space-y-4">
                                            <h4 class="font-semibold text-slate-900">Member Responsibilities</h4>
                                            <ul class="space-y-3">
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Uphold ICCRTZ values and mission</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Participate actively in community activities</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Respect fellow members and leaders</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-check-circle text-green-500 mt-1"></i>
                                                    <span>Maintain accurate membership information</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="space-y-4">
                                            <h4 class="font-semibold text-slate-900">Member Benefits</h4>
                                            <ul class="space-y-3">
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-gift text-blue-500 mt-1"></i>
                                                    <span>Access to events and programs</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-gift text-blue-500 mt-1"></i>
                                                    <span>Spiritual growth opportunities</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-gift text-blue-500 mt-1"></i>
                                                    <span>Leadership development training</span>
                                                </li>
                                                <li class="flex items-start gap-3">
                                                    <i class="ph ph-gift text-blue-500 mt-1"></i>
                                                    <span>Networking and fellowship</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-amber-50 rounded-xl p-6 border border-amber-200">
                                        <h4 class="font-semibold text-amber-900 mb-2">Membership Approval</h4>
                                        <p class="text-amber-800">ICCRTZ reserves the right to approve or deny membership applications at our discretion and may suspend or terminate membership for violations of these Terms.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Code of Conduct -->
                            <div id="conduct" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Code of Conduct</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">All members and participants are expected to maintain high standards of conduct:</p>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-green-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">Christian Values</h4>
                                            <p>Demonstrate Christian values of love, respect, honesty, and integrity in all interactions.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-blue-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">Respectful Communication</h4>
                                            <p>Communicate respectfully with all members, leaders, and guests, avoiding offensive or inappropriate language.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-purple-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">Professional Behavior</h4>
                                            <p>Maintain professional and appropriate behavior during all ICCRTZ activities and events.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-orange-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">Conflict Resolution</h4>
                                            <p>Address conflicts constructively through appropriate channels, following biblical principles of reconciliation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Intellectual Property -->
                            <div id="intellectual-property" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Intellectual Property</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">All content, materials, and intellectual property related to ICCRTZ are protected:</p>
                                    <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl p-8 border border-purple-200 mb-6">
                                        <h3 class="text-xl font-bold text-purple-900 mb-4">ICCRTZ Property</h3>
                                        <p class="text-purple-800 mb-4">All ICCRTZ trademarks, logos, content, materials, and intellectual property remain the exclusive property of ICCRTZ.</p>
                                        <div class="grid md:grid-cols-2 gap-4">
                                            <div class="bg-white rounded-lg p-4">
                                                <h4 class="font-semibold text-slate-900 mb-2">What's Protected</h4>
                                                <ul class="text-sm space-y-1">
                                                    <li>• ICCRTZ name and logos</li>
                                                    <li>• Website content and design</li>
                                                    <li>• Teaching materials and curriculum</li>
                                                    <li>• Event recordings and photos</li>
                                                    <li>• Publications and newsletters</li>
                                                </ul>
                                            </div>
                                            <div class="bg-white rounded-lg p-4">
                                                <h4 class="font-semibold text-slate-900 mb-2">Usage Restrictions</h4>
                                                <ul class="text-sm space-y-1">
                                                    <li>• No unauthorized reproduction</li>
                                                    <li>• No modification or adaptation</li>
                                                    <li>• No commercial use</li>
                                                    <li>• No distribution without permission</li>
                                                    <li>• No reverse engineering</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Privacy -->
                            <div id="privacy" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Privacy & Data Protection</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">Your privacy is important to us. Our data practices are governed by our Privacy Policy:</p>
                                    <div class="bg-blue-50 rounded-xl p-6 border border-blue-200">
                                        <h4 class="font-semibold text-blue-900 mb-2">Privacy Commitment</h4>
                                        <p class="text-blue-800">We collect, use, and protect your personal information in accordance with our Privacy Policy. By using our services, you consent to the collection and use of information as described therein.</p>
                                        <div class="mt-4">
                                            <a href="{{ url('privacy') }}" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-semibold">
                                                <i class="ph ph-arrow-right"></i>
                                                Read Our Privacy Policy
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Donations -->
                            <div id="donations" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Donations & Contributions</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <div class="highlight-box mb-8">
                                        <h3 class="text-2xl font-bold mb-4">Supporting Our Mission</h3>
                                        <p class="text-lg mb-4">Donations and contributions support ICCRTZ's mission and activities. All donations are processed securely and used according to our stated purposes.</p>
                                    </div>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Donation Terms</h4>
                                            <ul class="space-y-2 text-sm">
                                                <li>• Donations are non-refundable unless required by law</li>
                                                <li>• We reserve the right to use donations for our stated purposes</li>
                                                <li>• Tax receipts will be provided where applicable</li>
                                                <li>• We may decline donations that conflict with our values</li>
                                            </ul>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Payment Security</h4>
                                            <p>All payment processing is conducted through secure, PCI-compliant payment processors. We do not store sensitive payment information on our servers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Events -->
                            <div id="events" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Events & Activities</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">Participation in ICCRTZ events and activities is subject to specific terms:</p>
                                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Registration</h4>
                                            <ul class="space-y-2 text-sm">
                                                <li>• Registration may be required for certain events</li>
                                                <li>• Registration fees may apply</li>
                                                <li>• Capacity limits may be enforced</li>
                                                <li>• Registration may be denied at our discretion</li>
                                            </ul>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Event Conduct</h4>
                                            <ul class="space-y-2 text-sm">
                                                <li>• Follow all event rules and guidelines</li>
                                                <li>• Respect event staff and volunteers</li>
                                                <li>• Maintain appropriate behavior</li>
                                                <li>• Comply with venue regulations</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-amber-50 rounded-xl p-6 border border-amber-200">
                                        <h4 class="font-semibold text-amber-900 mb-2">Event Cancellations</h4>
                                        <p class="text-amber-800">ICCRTZ reserves the right to cancel, postpone, or modify events. In such cases, we will provide reasonable notice and refund options where applicable.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Communications -->
                            <div id="communications" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Communications</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">By joining ICCRTZ, you agree to receive communications from us:</p>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Communication Types</h4>
                                            <ul class="space-y-2 text-sm">
                                                <li>• Event notifications and updates</li>
                                                <li>• Newsletters and ministry updates</li>
                                                <li>• Spiritual resources and teachings</li>
                                                <li>• Volunteer and service opportunities</li>
                                            </ul>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Opt-Out Options</h4>
                                            <p>You may opt-out of certain communications by following the unsubscribe instructions in our emails or contacting us directly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Prohibited Activities -->
                            <div id="prohibited-activities" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Prohibited Activities</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">The following activities are strictly prohibited when using ICCRTZ services:</p>
                                    <div class="bg-red-50 rounded-xl p-8 border border-red-200">
                                        <div class="grid md:grid-cols-2 gap-6">
                                            <div>
                                                <h4 class="font-semibold text-red-900 mb-3">Illegal Activities</h4>
                                                <ul class="text-sm space-y-1">
                                                    <li>• Violating applicable laws</li>
                                                    <li>• Fraudulent activities</li>
                                                    <li>• Harassment or discrimination</li>
                                                    <li>• Defamation or libel</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-red-900 mb-3">Technical Violations</h4>
                                                <ul class="text-sm space-y-1">
                                                    <li>• Hacking or security breaches</li>
                                                    <li>• Spam or unsolicited communications</li>
                                                    <li>• Malware distribution</li>
                                                    <li>• System interference</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-red-900 mb-3">Content Violations</h4>
                                                <ul class="text-sm space-y-1">
                                                    <li>• Inappropriate or offensive content</li>
                                                    <li>• Copyright infringement</li>
                                                    <li>• False or misleading information</li>
                                                    <li>• Proprietary information disclosure</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-red-900 mb-3">Community Violations</h4>
                                                <ul class="text-sm space-y-1">
                                                    <li>• Disruptive behavior</li>
                                                    <li>• Misrepresentation of identity</li>
                                                    <li>• Unauthorized commercial activities</li>
                                                    <li>• Violation of privacy rights</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Disclaimer -->
                            <div id="disclaimer" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Disclaimer</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <div class="bg-slate-100 rounded-xl p-8 border border-slate-300">
                                        <h3 class="text-xl font-bold text-slate-900 mb-4">Important Disclaimer</h3>
                                        <p class="mb-4">ICCRTZ provides services and information on an "as is" basis. We make no warranties or representations about the accuracy, reliability, completeness, or timeliness of our services.</p>
                                        <div class="space-y-3">
                                            <div class="flex items-start gap-3">
                                                <i class="ph ph-warning text-amber-500 mt-1"></i>
                                                <span>Religious and spiritual content reflects our beliefs and interpretations</span>
                                            </div>
                                            <div class="flex items-start gap-3">
                                                <i class="ph ph-warning text-amber-500 mt-1"></i>
                                                <span>Individual results from participation may vary</span>
                                            </div>
                                            <div class="flex items-start gap-3">
                                                <i class="ph ph-warning text-amber-500 mt-1"></i>
                                                <span>We are not responsible for third-party content or links</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Limitation of Liability -->
                            <div id="limitation-of-liability" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Limitation of Liability</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">To the fullest extent permitted by law, ICCRTZ shall not be liable for:</p>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Excluded Liabilities</h4>
                                            <ul class="space-y-2 text-sm">
                                                <li>• Indirect, incidental, or consequential damages</li>
                                                <li>• Loss of profits, data, or opportunities</li>
                                                <li>• Personal injury or property damage</li>
                                                <li>• Emotional or psychological distress</li>
                                            </ul>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Liability Cap</h4>
                                            <p>Where liability cannot be excluded, it shall be limited to the maximum extent permitted by applicable law.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Termination -->
                            <div id="termination" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Termination</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">These Terms may be terminated as follows:</p>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-blue-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">By You</h4>
                                            <p>You may terminate your use of ICCRTZ services at any time by discontinuing use and contacting us to close your account.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border-l-4 border-red-500">
                                            <h4 class="font-semibold text-slate-900 mb-2">By ICCRTZ</h4>
                                            <p>We may terminate or suspend your access immediately for violations of these Terms, illegal activities, or at our discretion.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dispute Resolution -->
                            <div id="dispute-resolution" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Dispute Resolution</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">We prefer to resolve disputes amicably through the following process:</p>
                                    <div class="bg-gradient-to-r from-blue-50 to-green-50 rounded-xl p-8 border border-blue-200">
                                        <div class="space-y-4">
                                            <div class="flex items-start gap-4">
                                                <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                                                <div>
                                                    <h4 class="font-semibold text-slate-900">Informal Discussion</h4>
                                                    <p>First, contact us to discuss and resolve the issue informally.</p>
                                                </div>
                                            </div>
                                            <div class="flex items-start gap-4">
                                                <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                                                <div>
                                                    <h4 class="font-semibold text-slate-900">Mediation</h4>
                                                    <p>If informal resolution fails, we may agree to mediation with a neutral third party.</p>
                                                </div>
                                            </div>
                                            <div class="flex items-start gap-4">
                                                <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                                                <div>
                                                    <h4 class="font-semibold text-slate-900">Legal Action</h4>
                                                    <p>As a last resort, disputes may be resolved through legal proceedings as outlined in the Governing Law section.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Governing Law -->
                            <div id="governing-law" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Governing Law</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <div class="bg-slate-100 rounded-xl p-8 border border-slate-300">
                                        <h3 class="text-xl font-bold text-slate-900 mb-4">Jurisdiction & Applicable Law</h3>
                                        <p class="mb-4">These Terms are governed by and construed in accordance with the laws of the United Republic of Tanzania.</p>
                                        <div class="space-y-3">
                                            <div class="flex items-start gap-3">
                                                <i class="ph ph-map-pin text-slate-600 mt-1"></i>
                                                <span>Any disputes arising from these Terms shall be subject to the exclusive jurisdiction of Tanzanian courts.</span>
                                            </div>
                                            <div class="flex items-start gap-3">
                                                <i class="ph ph-scales text-slate-600 mt-1"></i>
                                                <span>If any provision of these Terms is found to be unenforceable, the remaining provisions shall continue in full force.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Policy Updates -->
                            <div id="policy-updates" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Policy Updates</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">We may update these Terms from time to time:</p>
                                    <div class="space-y-4">
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Notification Process</h4>
                                            <p>We will notify you of material changes by posting the updated Terms on our website and sending email notifications to registered members.</p>
                                        </div>
                                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                                            <h4 class="font-semibold text-slate-900 mb-2">Continued Use</h4>
                                            <p>Your continued use of ICCRTZ services after updates constitutes acceptance of the revised Terms.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact -->
                            <div id="contact" class="content-section">
                                <h2 class="text-3xl font-bold text-slate-900 mb-6 font-serif">Legal Contact</h2>
                                <div class="prose prose-lg max-w-none text-slate-600">
                                    <p class="mb-6">For legal inquiries regarding these Terms & Conditions:</p>
                                    <div class="bg-gradient-to-r from-red-50 to-rose-50 rounded-xl p-8 border border-red-200">
                                        <div class="grid md:grid-cols-2 gap-6">
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-4">Legal Department</h4>
                                                <div class="space-y-3">
                                                    <div class="flex items-center gap-3">
                                                        <i class="ph ph-envelope text-red-600"></i>
                                                        <span>legal@iccrtz.org</span>
                                                    </div>
                                                    <div class="flex items-center gap-3">
                                                        <i class="ph ph-phone text-red-600"></i>
                                                        <span>+255 712 345 678</span>
                                                    </div>
                                                    <div class="flex items-center gap-3">
                                                        <i class="ph ph-map-pin text-red-600"></i>
                                                        <span>P.O. Box 1234, Mbeya, Tanzania</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-slate-900 mb-4">Response Time</h4>
                                                <p class="text-slate-600">We will respond to legal inquiries within 14 business days. For urgent legal matters, please mark your email as "Urgent - Legal Inquiry."</p>
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
            <section class="py-16 bg-gradient-to-r from-red-900 to-rose-900 text-white">
                <div class="max-w-4xl mx-auto px-6 text-center">
                    <h2 class="text-3xl font-bold mb-6">Questions About Our Terms?</h2>
                    <p class="text-xl mb-8 text-red-100">
                        Our legal team is here to help clarify any questions about our Terms & Conditions.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ url('contact') }}" class="px-8 py-4 bg-white text-red-900 font-bold rounded-full hover:bg-slate-100 transition-all shadow-xl">
                            <i class="ph ph-envelope mr-2"></i> Contact Legal Team
                        </a>
                        <a href="{{ url('privacy') }}" class="px-8 py-4 bg-red-700 text-white font-bold rounded-full hover:bg-red-600 transition-all">
                            <i class="ph ph-shield-check mr-2"></i> View Privacy Policy
                        </a>
                    </div>
                </div>
            </section>
        </main>

        @include('components.footer')
    </body>
</html>
