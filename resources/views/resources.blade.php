@extends('layouts.app')

@section('title', 'Resources - ICCRTZ Tanzania')
@section('description', 'Download resources, guides, and materials from ICCRTZ Tanzania - Prayer guides, ministry resources, leadership materials')
@section('keywords', 'ICCRTZ Tanzania resources, downloads, guides, prayer, ministry materials, leadership, Catholic formation')

@section('content')
<!-- Hero Section - Advanced -->
<section class="relative min-h-[60vh] h-[60vh] max-h-[700px] overflow-hidden">
    <div class="relative h-full bg-gradient-to-br from-slate-900 via-red-800 to-slate-900">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <img src="https://res.cloudinary.com/dzv1tksr2/image/upload/v1772613875/happy-students-receiving-donations_hkmhgf.jpg" alt="ICCRTZ Tanzania Resources" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 flex items-center justify-center py-8">
            <div class="text-center text-white px-4 sm:px-6 lg:px-8 z-10 max-w-5xl w-full">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold mb-6">
                    <i class="ph ph-book-open text-xl"></i>
                    <span>Resource Library</span>
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-6 drop-shadow-2xl leading-tight">
                    Download <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-red-300">Resources</span>
                </h1>
                <p class="text-xl sm:text-2xl text-slate-200 max-w-3xl mx-auto leading-relaxed drop-shadow-lg">
                    Access prayer guides, ministry materials, leadership resources, and formation documents
                </p>
            </div>
        </div>
    </div>
    <!-- Decorative Wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-white" fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,100 350,0 600,50 C850,100 1050,0 1200,50 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section>

<!-- Downloadable Guides Section - Advanced -->
<section class="py-20 bg-gradient-to-br from-slate-50 via-white to-red-50 relative overflow-hidden">
    <div class="absolute top-20 right-10 w-64 h-64 bg-red-100 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    <div class="absolute bottom-20 left-10 w-64 h-64 bg-slate-100 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm font-semibold mb-6">
                <i class="ph ph-download-simple"></i>
                <span>Downloadable Resources</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-4">
                Downloadable <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-slate-600">Guides</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                Essential documents and resources for members and leaders
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-red-100 to-slate-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm font-semibold mb-6">
                <i class="ph ph-video"></i>
                <span>Video Resources</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-4">
                Video <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-slate-600">Library</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                Access our collection of teaching videos, worship sessions, and training materials
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- YouTube Channel Links -->
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
                    <span>Watch Now</span>
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
                    <span>Watch Now</span>
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
                    <span>Watch Now</span>
                    <i class="ph ph-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Links Section - Advanced -->
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-red-100 to-slate-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-slate-100 text-slate-700 rounded-full text-sm font-semibold mb-6">
                <i class="ph ph-link"></i>
                <span>Useful Links</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-4">
                Useful <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-slate-600">Links</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                Connect with our partners and related organizations
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <a href="#" class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-red-100 hover:shadow-2xl hover:border-red-400 transition-all duration-300 transform hover:-translate-y-2 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-globe text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-red-600 transition">Catholic Charismatic Renewal Tanzania</h3>
                <p class="text-slate-600 leading-relaxed">National organization and parent body</p>
                <span class="inline-flex items-center gap-2 text-red-600 font-semibold mt-4">
                    <span>Visit Website</span>
                    <i class="ph ph-arrow-right"></i>
                </span>
            </a>
            
            <a href="#" class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-slate-100 hover:shadow-2xl hover:border-slate-400 transition-all duration-300 transform hover:-translate-y-2 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-slate-500 to-slate-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-church text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-slate-600 transition">Local Dioceses</h3>
                <p class="text-slate-600 leading-relaxed">Connect with your local diocese website</p>
                <span class="inline-flex items-center gap-2 text-slate-600 font-semibold mt-4">
                    <span>Find Diocese</span>
                    <i class="ph ph-arrow-right"></i>
                </span>
            </a>
            
            <a href="#" class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-green-100 hover:shadow-2xl hover:border-green-400 transition-all duration-300 transform hover:-translate-y-2 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-handshake text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-green-600 transition">Partner Ministries</h3>
                <p class="text-slate-600 leading-relaxed">Collaborating organizations and ministries</p>
                <span class="inline-flex items-center gap-2 text-green-600 font-semibold mt-4">
                    <span>View Partners</span>
                    <i class="ph ph-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Resource Statistics Section -->
<section class="py-16 bg-gradient-to-br from-red-600 via-slate-600 to-red-700 relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
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

<!-- Resource Categories Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-slate-100 to-red-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm font-semibold mb-6">
                <i class="ph ph-funnel"></i>
                <span>Resource Categories</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-4">
                Browse by <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-slate-600">Category</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                Find resources organized by topic and purpose
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group bg-gradient-to-br from-red-50 to-slate-50 rounded-2xl p-8 shadow-lg border-2 border-red-100 hover:shadow-2xl hover:border-red-300 transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-praying-hands text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-red-600 transition">Worship & Prayer</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">Prayer guides, worship songs, and spiritual resources</p>
                <span class="text-red-600 font-semibold text-sm">12 Resources →</span>
            </div>
            
            <div class="group bg-gradient-to-br from-slate-50 to-blue-50 rounded-2xl p-8 shadow-lg border-2 border-slate-100 hover:shadow-2xl hover:border-slate-300 transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                <div class="w-16 h-16 bg-gradient-to-br from-slate-500 to-slate-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-crown text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-slate-600 transition">Leadership</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">Leadership manuals, training materials, and guides</p>
                <span class="text-slate-600 font-semibold text-sm">18 Resources →</span>
            </div>
            
            <div class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 shadow-lg border-2 border-purple-100 hover:shadow-2xl hover:border-purple-300 transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-book-bookmark text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-purple-600 transition">Bible Study</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">Study guides, commentaries, and biblical resources</p>
                <span class="text-purple-600 font-semibold text-sm">15 Resources →</span>
            </div>
            
            <div class="group bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl p-8 shadow-lg border-2 border-yellow-100 hover:shadow-2xl hover:border-yellow-300 transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-calendar-check text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-yellow-600 transition">Events</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">Event planning templates and organization guides</p>
                <span class="text-yellow-600 font-semibold text-sm">10 Resources →</span>
            </div>
        </div>
    </div>
</section>

<!-- Additional Resources Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 via-white to-red-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold mb-6">
                <i class="ph ph-archive"></i>
                <span>Additional Resources</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-4">
                More <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-slate-600">Resources</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                Additional materials to support your spiritual journey
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Resource 7 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-slate-100 hover:shadow-2xl hover:border-green-300 transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-chart-line text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-green-600 transition">Annual Reports</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">Yearly reports on our activities and impact across Tanzania</p>
                <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-green-600 to-green-700 text-white rounded-lg font-semibold hover:from-green-700 hover:to-green-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                    <span>View Reports</span>
                    <i class="ph ph-arrow-right"></i>
                </a>
            </div>

            <!-- Resource 8 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-slate-100 hover:shadow-2xl hover:border-red-300 transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-video text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-red-600 transition">Video Tutorials</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">Step-by-step video guides for various topics and training</p>
                <a href="{{ url('media') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-lg font-semibold hover:from-red-700 hover:to-red-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                    <span>Watch Videos</span>
                    <i class="ph ph-arrow-right"></i>
                </a>
            </div>

            <!-- Resource 9 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg border-2 border-slate-100 hover:shadow-2xl hover:border-slate-300 transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-20 h-20 bg-gradient-to-br from-slate-500 to-slate-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="ph ph-question text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-slate-600 transition">FAQ & Help</h3>
                <p class="text-slate-600 mb-6 leading-relaxed">Frequently asked questions and comprehensive help guides</p>
                <a href="{{ url('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-slate-600 to-slate-700 text-white rounded-lg font-semibold hover:from-slate-700 hover:to-slate-800 transition shadow-md hover:shadow-lg transform hover:scale-105">
                    <span>Get Help</span>
                    <i class="ph ph-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Resource Request Section -->
<section class="py-20 bg-gradient-to-br from-red-600 via-slate-600 to-red-700 relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold mb-6">
            <i class="ph ph-plus-circle"></i>
            <span>Need Help?</span>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
            Can't Find What You're Looking For?
        </h2>
        <p class="text-xl text-red-100 mb-8 max-w-2xl mx-auto">
            Request a resource or contact us if you need assistance finding specific materials.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ url('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-red-600 rounded-xl font-bold text-lg hover:bg-red-50 transition shadow-xl hover:shadow-2xl transform hover:scale-105">
                <i class="ph ph-envelope"></i>
                <span>Contact Us</span>
            </a>
            <a href="{{ url('get-involved') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white/20 backdrop-blur-sm text-white border-2 border-white/30 rounded-xl font-bold text-lg hover:bg-white/30 transition shadow-xl hover:shadow-2xl transform hover:scale-105">
                <i class="ph ph-plus-circle"></i>
                <span>Request Resource</span>
            </a>
        </div>
    </div>
</section>
@endsection
