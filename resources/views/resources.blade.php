<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Resources & Downloads | Catholic Charismatic Tanzania – Universities Fellowship</title>

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
            <section class="relative py-20 lg:py-32 bg-gradient-to-br from-slate-900 via-red-800 to-slate-900 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.6\"%3E%3Cpath d=\"M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center max-w-4xl mx-auto">
                        <span class="inline-block px-4 py-2 bg-red-700 text-red-200 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Resources & Downloads</span>
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 font-bold leading-[1.05]">Access <span class="text-red-300">Resources</span></h1>
                        <p class="text-xl text-red-100 leading-relaxed mb-12">
                            Download prayer guides, ministry materials, leadership resources, and formation documents 
                            to support your spiritual journey and ministry development.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="#downloads" class="px-8 py-4 bg-white text-red-600 font-bold rounded-full hover:bg-red-50 transition-all shadow-xl">
                                <i class="ph ph-download-simple mr-2"></i> Download Resources
                            </a>
                            <a href="#videos" class="px-8 py-4 bg-red-700 text-white font-bold rounded-full hover:bg-red-600 transition-all">
                                <i class="ph ph-video mr-2"></i> Watch Videos
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Resources -->
            <section class="py-16 bg-slate-50 -mt-10 relative z-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-serif text-slate-900 font-bold mb-4">Featured Resources</h2>
                        <p class="text-lg text-slate-600">Essential downloads for your spiritual growth</p>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <!-- ICCRTZ Constitution -->
                        <div class="group bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="p-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                                    <i class="ph ph-file-text text-white text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-red-600 transition">ICCRTZ Constitution</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Our official constitution and bylaws governing the organization</p>
                                <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-lg font-semibold hover:from-red-700 hover:to-red-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                                    <span>Download PDF</span>
                                    <i class="ph ph-download-simple"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Prayer Guides -->
                        <div class="group bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="p-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-slate-500 to-slate-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                                    <i class="ph ph-book text-white text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-slate-600 transition">Prayer & Worship Guides</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Comprehensive guides for prayer meetings and worship sessions</p>
                                <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-slate-600 to-slate-700 text-white rounded-lg font-semibold hover:from-slate-700 hover:to-slate-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                                    <span>Download PDF</span>
                                    <i class="ph ph-download-simple"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Leadership Manuals -->
                        <div class="group bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="p-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                                    <i class="ph ph-users-three text-white text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-green-600 transition">Leadership Manuals</h3>
                                <p class="text-slate-600 mb-6 leading-relaxed">Comprehensive guides for chapter leaders and coordinators</p>
                                <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-green-600 to-green-700 text-white rounded-lg font-semibold hover:from-green-700 hover:to-green-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                                    <span>Download PDF</span>
                                    <i class="ph ph-download-simple"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Downloadable Resources Section -->
            <section id="downloads" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="inline-block px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm font-semibold mb-6">
                            <i class="ph ph-download-simple"></i>
                            <span>Downloadable Resources</span>
                        </span>
                        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-4">
                            Downloadable <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-slate-600">Guides</span>
                        </h2>
                        <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                            Essential documents and resources for members and leaders
                        </p>
                    </div>
                    
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Resource 1 -->
                        <div class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-red-100 hover:shadow-2xl hover:border-red-400 transition-all duration-300 transform hover:-translate-y-2">
                            <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                                <i class="ph ph-file-text text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-red-600 transition">ICCRTZ Constitution</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Our official constitution and bylaws governing the organization</p>
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-lg font-semibold hover:from-red-700 hover:to-red-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                                <span>Download PDF</span>
                                <i class="ph ph-download-simple"></i>
                            </a>
                        </div>

                        <!-- Resource 2 -->
                        <div class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-slate-100 hover:shadow-2xl hover:border-slate-400 transition-all duration-300 transform hover:-translate-y-2">
                            <div class="w-20 h-20 bg-gradient-to-br from-slate-500 to-slate-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                                <i class="ph ph-book text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-slate-600 transition">Prayer & Worship Guides</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Comprehensive guides for prayer meetings and worship sessions</p>
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-slate-600 to-slate-700 text-white rounded-lg font-semibold hover:from-slate-700 hover:to-slate-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                                <span>Download PDF</span>
                                <i class="ph ph-download-simple"></i>
                            </a>
                        </div>

                        <!-- Resource 3 -->
                        <div class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-green-100 hover:shadow-2xl hover:border-green-400 transition-all duration-300 transform hover:-translate-y-2">
                            <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                                <i class="ph ph-users-three text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-green-600 transition">Leadership Manuals</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Comprehensive guides for chapter leaders and coordinators</p>
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-green-600 to-green-700 text-white rounded-lg font-semibold hover:from-green-700 hover:to-green-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                                <span>Download PDF</span>
                                <i class="ph ph-download-simple"></i>
                            </a>
                        </div>

                        <!-- Resource 4 -->
                        <div class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-yellow-100 hover:shadow-2xl hover:border-yellow-400 transition-all duration-300 transform hover:-translate-y-2">
                            <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                                <i class="ph ph-calendar-check text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-yellow-600 transition">Event Planning Templates</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Templates for organizing successful campus events and activities</p>
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-yellow-600 to-yellow-700 text-white rounded-lg font-semibold hover:from-yellow-700 hover:to-yellow-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                                <span>Download PDF</span>
                                <i class="ph ph-download-simple"></i>
                            </a>
                        </div>

                        <!-- Resource 5 -->
                        <div class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-blue-100 hover:shadow-2xl hover:border-blue-400 transition-all duration-300 transform hover:-translate-y-2">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                                <i class="ph ph-book-bookmark text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition">Bible Study Materials</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Study guides and materials for Bible study groups and personal growth</p>
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-700 hover:to-blue-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                                <span>Download PDF</span>
                                <i class="ph ph-download-simple"></i>
                            </a>
                        </div>

                        <!-- Resource 6 -->
                        <div class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-purple-100 hover:shadow-2xl hover:border-purple-400 transition-all duration-300 transform hover:-translate-y-2">
                            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                                <i class="ph ph-heart text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-purple-600 transition">Formation Resources</h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">Materials for spiritual formation programs and personal development</p>
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-lg font-semibold hover:from-purple-700 hover:to-purple-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                                <span>Download PDF</span>
                                <i class="ph ph-download-simple"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Video Resources Section -->
            <section id="videos" class="py-20 bg-slate-50">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm font-semibold mb-6">
                            <i class="ph ph-video"></i>
                            <span>Video Resources</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-4">
                            Video <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-slate-600">Library</span>
                        </h2>
                        <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                            Watch our collection of teaching videos, worship sessions, and training materials directly on our site
                        </p>
                    </div>
                    
                    <!-- YouTube Channels -->
                    <div class="mb-16">
                        <h3 class="text-2xl font-bold text-slate-900 text-center mb-8">Our YouTube Channels</h3>
                        <div class="grid gap-8 md:grid-cols-3">
                            <a href="https://youtube.com/@iccrztanzania" target="_blank" class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-red-100 hover:shadow-2xl hover:border-red-400 transition-all duration-300 transform hover:-translate-y-2 text-center">
                                <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                                    <i class="ph ph-youtube-logo text-white text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-red-600 transition">ICCRTZ Official</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">Main channel with conferences and major events</p>
                                <div class="text-sm text-slate-500 mb-4">
                                    <i class="ph ph-users mr-1"></i> 15.2K subscribers<br>
                                    <i class="ph ph-video mr-1"></i> 450+ videos
                                </div>
                                <span class="inline-flex items-center gap-2 px-4 py-2 bg-red-600 text-white rounded-lg font-semibold">
                                    <span>Visit Channel</span>
                                    <i class="ph ph-arrow-right"></i>
                                </span>
                            </a>
                            
                            <a href="https://youtube.com/@nexgeniccrztanzania" target="_blank" class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-slate-100 hover:shadow-2xl hover:border-slate-400 transition-all duration-300 transform hover:-translate-y-2 text-center">
                                <div class="w-20 h-20 bg-gradient-to-br from-slate-500 to-slate-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                                    <i class="ph ph-youtube-logo text-white text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-slate-600 transition">NexGen ICCRTZ</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">Youth-focused content and NexGen Camp highlights</p>
                                <div class="text-sm text-slate-500 mb-4">
                                    <i class="ph ph-users mr-1"></i> 8.7K subscribers<br>
                                    <i class="ph ph-video mr-1"></i> 230+ videos
                                </div>
                                <span class="inline-flex items-center gap-2 px-4 py-2 bg-slate-600 text-white rounded-lg font-semibold">
                                    <span>Visit Channel</span>
                                    <i class="ph ph-arrow-right"></i>
                                </span>
                            </a>
                            
                            <a href="https://youtube.com/@iccrztanzaniaworship" target="_blank" class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-purple-100 hover:shadow-2xl hover:border-purple-400 transition-all duration-300 transform hover:-translate-y-2 text-center">
                                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                                    <i class="ph ph-youtube-logo text-white text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-purple-600 transition">ICCRTZ Worship</h3>
                                <p class="text-slate-600 leading-relaxed mb-4">Worship sessions, Night of Praise, and music ministry</p>
                                <div class="text-sm text-slate-500 mb-4">
                                    <i class="ph ph-users mr-1"></i> 12.1K subscribers<br>
                                    <i class="ph ph-video mr-1"></i> 180+ videos
                                </div>
                                <span class="inline-flex items-center gap-2 px-4 py-2 bg-purple-600 text-white rounded-lg font-semibold">
                                    <span>Visit Channel</span>
                                    <i class="ph ph-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- Praise Team Songs with Video Preview -->
                    <div>
                        <h3 class="text-2xl font-bold text-slate-900 text-center mb-8">Praise Team Songs - Watch Now</h3>
                        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                            <!-- Video 1 -->
                            <div class="group bg-white rounded-2xl shadow-lg border-2 border-red-100 overflow-hidden hover:shadow-2xl hover:border-red-400 transition-all duration-300">
                                <div class="relative aspect-video bg-slate-900">
                                    <iframe 
                                        src="https://www.youtube.com/embed/IHn_YFij38M?start=4208" 
                                        title="Karismatiki Katoliki - Umaja wa vyuu"
                                        class="absolute inset-0 w-full h-full"
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-6">
                                    <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-red-600 transition">Karismatiki Katoliki</h4>
                                    <p class="text-slate-600 mb-4">Umaja wa vyuu - University ministry worship</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-slate-500">
                                            <i class="ph ph-clock mr-1"></i> Worship Session
                                        </span>
                                        <a href="https://www.youtube.com/watch?v=IHn_YFij38M&t=4208s" target="_blank" class="inline-flex items-center gap-1 text-red-600 text-sm font-semibold hover:text-red-700">
                                            <i class="ph ph-youtube-logo"></i>
                                            <span>YouTube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Video 2 -->
                            <div class="group bg-white rounded-2xl shadow-lg border-2 border-slate-100 overflow-hidden hover:shadow-2xl hover:border-slate-400 transition-all duration-300">
                                <div class="relative aspect-video bg-slate-900">
                                    <iframe 
                                        src="https://www.youtube.com/embed/g6iF-vOAbPk" 
                                        title="Karismatiki Katoliki - Worship Session"
                                        class="absolute inset-0 w-full h-full"
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-6">
                                    <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-slate-600 transition">Karismatiki Katoliki</h4>
                                    <p class="text-slate-600 mb-4">Worship session with praise team</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-slate-500">
                                            <i class="ph ph-clock mr-1"></i> Live Performance
                                        </span>
                                        <a href="https://www.youtube.com/watch?v=g6iF-vOAbPk" target="_blank" class="inline-flex items-center gap-1 text-slate-600 text-sm font-semibold hover:text-slate-700">
                                            <i class="ph ph-youtube-logo"></i>
                                            <span>YouTube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Video 3 -->
                            <div class="group bg-white rounded-2xl shadow-lg border-2 border-green-100 overflow-hidden hover:shadow-2xl hover:border-green-400 transition-all duration-300">
                                <div class="relative aspect-video bg-slate-900">
                                    <iframe 
                                        src="https://www.youtube.com/embed/P8E_GW2nY9g" 
                                        title="Karismatiki Katoliki - Praise & Worship"
                                        class="absolute inset-0 w-full h-full"
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-6">
                                    <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-green-600 transition">Karismatiki Katoliki</h4>
                                    <p class="text-slate-600 mb-4">Praise & worship gathering</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-slate-500">
                                            <i class="ph ph-clock mr-1"></i> Worship Time
                                        </span>
                                        <a href="https://www.youtube.com/watch?v=P8E_GW2nY9g" target="_blank" class="inline-flex items-center gap-1 text-green-600 text-sm font-semibold hover:text-green-700">
                                            <i class="ph ph-youtube-logo"></i>
                                            <span>YouTube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Video 4 -->
                            <div class="group bg-white rounded-2xl shadow-lg border-2 border-yellow-100 overflow-hidden hover:shadow-2xl hover:border-yellow-400 transition-all duration-300">
                                <div class="relative aspect-video bg-slate-900">
                                    <iframe 
                                        src="https://www.youtube.com/embed/r6Di764gHQ4" 
                                        title="Lord Grace Team - Worship Performance"
                                        class="absolute inset-0 w-full h-full"
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-6">
                                    <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-yellow-600 transition">Lord Grace Team</h4>
                                    <p class="text-slate-600 mb-4">Professional worship performance</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-slate-500">
                                            <i class="ph ph-clock mr-1"></i> Performance
                                        </span>
                                        <a href="https://www.youtube.com/watch?v=r6Di764gHQ4" target="_blank" class="inline-flex items-center gap-1 text-yellow-600 text-sm font-semibold hover:text-yellow-700">
                                            <i class="ph ph-youtube-logo"></i>
                                            <span>YouTube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Video 5 -->
                            <div class="group bg-white rounded-2xl shadow-lg border-2 border-purple-100 overflow-hidden hover:shadow-2xl hover:border-purple-400 transition-all duration-300">
                                <div class="relative aspect-video bg-slate-900">
                                    <iframe 
                                        src="https://www.youtube.com/embed/vHjhAFHVRzA" 
                                        title="Lord Grace Team - Praise Session"
                                        class="absolute inset-0 w-full h-full"
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-6">
                                    <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-purple-600 transition">Lord Grace Team</h4>
                                    <p class="text-slate-600 mb-4">Energetic praise session</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-slate-500">
                                            <i class="ph ph-clock mr-1"></i> Praise Time
                                        </span>
                                        <a href="https://www.youtube.com/watch?v=vHjhAFHVRzA" target="_blank" class="inline-flex items-center gap-1 text-purple-600 text-sm font-semibold hover:text-purple-700">
                                            <i class="ph ph-youtube-logo"></i>
                                            <span>YouTube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Video 6 -->
                            <div class="group bg-white rounded-2xl shadow-lg border-2 border-blue-100 overflow-hidden hover:shadow-2xl hover:border-blue-400 transition-all duration-300">
                                <div class="relative aspect-video bg-slate-900">
                                    <iframe 
                                        src="https://www.youtube.com/embed/TOd2fC_6EWY" 
                                        title="Lord Grace Team - Live Worship"
                                        class="absolute inset-0 w-full h-full"
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-6">
                                    <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition">Lord Grace Team</h4>
                                    <p class="text-slate-600 mb-4">Live worship experience</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-slate-500">
                                            <i class="ph ph-clock mr-1"></i> Live Session
                                        </span>
                                        <a href="https://www.youtube.com/watch?v=TOd2fC_6EWY" target="_blank" class="inline-flex items-center gap-1 text-blue-600 text-sm font-semibold hover:text-blue-700">
                                            <i class="ph ph-youtube-logo"></i>
                                            <span>YouTube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Videos Grid -->
                        <div class="mt-8">
                            <h4 class="text-xl font-bold text-slate-900 text-center mb-6">More Worship Videos</h4>
                            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                                <!-- Video 7 -->
                                <div class="group bg-white rounded-2xl shadow-lg border-2 border-red-100 overflow-hidden hover:shadow-2xl hover:border-red-400 transition-all duration-300">
                                    <div class="relative aspect-video bg-slate-900">
                                        <iframe 
                                            src="https://www.youtube.com/embed/s-U8mJMScxQ" 
                                            title="Lord Grace Team - Praise & Worship"
                                            class="absolute inset-0 w-full h-full"
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="text-lg font-bold text-slate-900 mb-1 group-hover:text-red-600 transition">Lord Grace Team</h5>
                                        <p class="text-sm text-slate-600">Praise & worship</p>
                                    </div>
                                </div>

                                <!-- Video 8 -->
                                <div class="group bg-white rounded-2xl shadow-lg border-2 border-slate-100 overflow-hidden hover:shadow-2xl hover:border-slate-400 transition-all duration-300">
                                    <div class="relative aspect-video bg-slate-900">
                                        <iframe 
                                            src="https://www.youtube.com/embed/DJi3nzO5cFM" 
                                            title="Lord Grace Team - Music Ministry"
                                            class="absolute inset-0 w-full h-full"
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="text-lg font-bold text-slate-900 mb-1 group-hover:text-slate-600 transition">Lord Grace Team</h5>
                                        <p class="text-sm text-slate-600">Music ministry</p>
                                    </div>
                                </div>

                                <!-- Video 9 -->
                                <div class="group bg-white rounded-2xl shadow-lg border-2 border-green-100 overflow-hidden hover:shadow-2xl hover:border-green-400 transition-all duration-300">
                                    <div class="relative aspect-video bg-slate-900">
                                        <iframe 
                                            src="https://www.youtube.com/embed/szGy_XaLbFw" 
                                            title="Lord Grace Team - Live Performance"
                                            class="absolute inset-0 w-full h-full"
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="text-lg font-bold text-slate-900 mb-1 group-hover:text-green-600 transition">Lord Grace Team</h5>
                                        <p class="text-sm text-slate-600">Live performance</p>
                                    </div>
                                </div>

                                <!-- Load More Button -->
                                <div class="group bg-white rounded-2xl shadow-lg border-2 border-purple-100 hover:shadow-2xl hover:border-purple-400 transition-all duration-300 flex flex-col items-center justify-center p-8 cursor-pointer">
                                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                        <i class="ph ph-plus text-white text-2xl"></i>
                                    </div>
                                    <h5 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-purple-600 transition">More Videos</h5>
                                    <p class="text-sm text-slate-600 text-center">Additional worship sessions and performances</p>
                                    <span class="inline-flex items-center gap-1 text-purple-600 text-sm font-semibold mt-3">
                                        <span>Coming Soon</span>
                                        <i class="ph ph-arrow-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Resource Statistics -->
            <section class="py-16 bg-gradient-to-br from-red-600 via-slate-600 to-red-700 relative overflow-hidden">
                <div class="absolute inset-0 bg-black opacity-30"></div>
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-serif text-white font-bold mb-4">Our Impact</h2>
                        <p class="text-xl text-red-100">Resources reaching communities across Tanzania</p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="text-center p-6 bg-white/10 backdrop-blur-md rounded-xl border-2 border-white/20">
                            <div class="text-4xl md:text-5xl font-bold text-white mb-2">50+</div>
                            <div class="text-sm md:text-base text-red-100 font-medium">Resources Available</div>
                        </div>
                        <div class="text-center p-6 bg-white/10 backdrop-blur-md rounded-xl border-2 border-white/20">
                            <div class="text-4xl md:text-5xl font-bold text-white mb-2">1000+</div>
                            <div class="text-sm md:text-base text-red-100 font-medium">Downloads</div>
                        </div>
                        <div class="text-center p-6 bg-white/10 backdrop-blur-md rounded-xl border-2 border-white/20">
                            <div class="text-4xl md:text-5xl font-bold text-white mb-2">36.1K</div>
                            <div class="text-sm md:text-base text-red-100 font-medium">YouTube Subscribers</div>
                        </div>
                        <div class="text-center p-6 bg-white/10 backdrop-blur-md rounded-xl border-2 border-white/20">
                            <div class="text-4xl md:text-5xl font-bold text-white mb-2">860+</div>
                            <div class="text-sm md:text-base text-red-100 font-medium">Videos</div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        @include('components.footer')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Smooth scrolling for anchor links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });
            });
        </script>
    </body>
</html>
