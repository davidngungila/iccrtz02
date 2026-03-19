<!-- Navigation Header -->
<nav class="fixed top-0 w-full z-50 glass border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-6 h-24 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center gap-3 group/logo">
            <div class="h-20 w-20 rounded-2xl object-contain bg-white p-3 transition-transform group-hover/logo:scale-105 overflow-hidden shadow-lg">
                <img src="{{ asset('logo.png') }}" alt="ICCRTZ Logo" class="w-full h-full object-contain">
            </div>
            <div class="flex flex-col">
                <span class="text-2xl font-black tracking-tighter text-slate-900 leading-none">ICCRTZ</span>
                <span class="text-xs font-bold text-slate-500 leading-none mt-1">Students & Alumni</span>
            </div>
        </a>

        <div class="hidden lg:flex items-center gap-10">
            <a href="{{ url('/') }}" class="nav-link font-bold hover:text-slate-900 transition-colors py-8">Home</a>

            <div class="relative group py-8">
                <a href="{{ url('about') }}" class="nav-link font-bold hover:text-slate-900 transition-colors flex items-center gap-1">
                    About <i class="ph ph-caret-down text-xs transition-transform group-hover:rotate-180"></i>
                </a>
                
                <!-- Mega Menu -->
                <div class="mega-menu absolute top-full left-1/2 transform -translate-x-1/2 w-screen max-w-4xl bg-white rounded-2xl shadow-2xl border border-slate-100 mt-2 p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <h3 class="font-black text-slate-900 mb-4 flex items-center gap-2">
                                <i class="ph ph-church text-slate-900"></i> Our Ministry
                            </h3>
                            <ul class="space-y-3">
                                <li><a href="{{ url('about/history') }}" class="text-slate-600 hover:text-slate-900 transition-colors">History</a></li>
                                <li><a href="{{ url('about/vision') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Vision & Mission</a></li>
                                <li><a href="{{ url('about/leadership') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Leadership</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="font-black text-slate-900 mb-4 flex items-center gap-2">
                                <i class="ph ph-graduation-cap text-slate-900"></i> Ministries
                            </h3>
                            <ul class="space-y-3">
                                <li><a href="{{ url('students-ministry') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Students Ministry</a></li>
                                <li><a href="{{ url('alumni-network') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Alumni Network</a></li>
                                <li><a href="{{ url('leadership') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Leadership Training</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="font-black text-slate-900 mb-4 flex items-center gap-2">
                                <i class="ph ph-heart text-slate-900"></i> Get Involved
                            </h3>
                            <ul class="space-y-3">
                                <li><a href="{{ url('join') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Join ICCRTZ</a></li>
                                <li><a href="{{ url('volunteer') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Volunteer</a></li>
                                <li><a href="{{ url('support') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Support Us</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-8 border-t border-slate-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-slate-900 mb-2">Join Our Community</h4>
                                <p class="text-slate-600 text-sm">Become part of our growing fellowship across Tanzania's universities.</p>
                            </div>
                            <a href="{{ url('join') }}" class="px-6 py-3 bg-slate-900 text-white rounded-full font-semibold hover:bg-slate-800 transition-colors">
                                <i class="ph ph-users-three mr-2"></i> Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ url('students-ministry') }}" class="nav-link font-bold hover:text-slate-900 transition-colors py-8">Students</a>
            <a href="{{ url('alumni-network') }}" class="nav-link font-bold hover:text-slate-900 transition-colors py-8">Alumni</a>
            <a href="{{ url('events') }}" class="nav-link font-bold hover:text-slate-900 transition-colors py-8">Events</a>
        </div>

        <div class="flex items-center gap-4">
            <a href="{{ url('contact') }}" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-slate-700 bg-white border border-slate-200 px-5 py-2.5 rounded-full hover:bg-slate-50 transition-all">Contact</a>
            <a href="{{ url('join') }}" class="hidden md:inline-flex items-center gap-2 text-sm font-semibold text-white bg-slate-900 px-6 py-2.5 rounded-full hover:bg-slate-800 shadow-lg shadow-slate-900/20 transition-all">Join Us</a>

            <button @click="mobileMenuOpen = true" class="lg:hidden w-12 h-12 bg-slate-50 text-slate-900 rounded-2xl flex items-center justify-center hover:bg-slate-900 hover:text-white transition-all" type="button">
                <i class="ph ph-list text-2xl"></i>
            </button>
        </div>
    </div>
    <div class="nav-border-animate"></div>
</nav>

<!-- Mobile Menu -->
<div x-show="mobileMenuOpen" x-cloak class="fixed inset-0 z-50 lg:hidden">
    <div class="absolute inset-0 bg-black/50" @click="mobileMenuOpen = false"></div>
    <div class="absolute right-0 top-0 h-full w-80 max-w-full bg-white shadow-2xl overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <div class="h-12 w-12 rounded-xl object-contain bg-white p-2">
                        <img src="{{ asset('logo.png') }}" alt="ICCRTZ Logo" class="w-full h-full object-contain">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-black tracking-tighter text-slate-900 leading-none">ICCRTZ</span>
                        <span class="text-xs font-bold text-slate-500 leading-none mt-1">Students & Alumni</span>
                    </div>
                </a>
                <button @click="mobileMenuOpen = false" class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center hover:bg-slate-200 transition-colors">
                    <i class="ph ph-x text-slate-600"></i>
                </button>
            </div>

            <nav class="space-y-2">
                <a href="{{ url('/') }}" class="block text-2xl font-serif font-black text-slate-900 hover:text-slate-900">Home</a>

                <div class="py-4">
                    <h3 class="font-black text-slate-900 mb-4">About</h3>
                    <ul class="space-y-3 ml-4">
                        <li><a href="{{ url('about/history') }}" class="flex items-center gap-4 group/item p-3 rounded-2xl hover:bg-slate-50 transition-all">
                            <i class="ph ph-church text-slate-900"></i>
                            <div>
                                <div class="font-bold text-slate-900">Our History</div>
                                <div class="text-sm text-slate-600">25+ years of ministry</div>
                            </div>
                        </a></li>
                        <li><a href="{{ url('about/vision') }}" class="flex items-center gap-4 group/item p-3 rounded-2xl hover:bg-slate-50 transition-all">
                            <i class="ph ph-target text-slate-900"></i>
                            <div>
                                <div class="font-bold text-slate-900">Vision & Mission</div>
                                <div class="text-sm text-slate-600">Our purpose and calling</div>
                            </div>
                        </a></li>
                        <li><a href="{{ url('about/leadership') }}" class="flex items-center gap-4 group/item p-3 rounded-2xl hover:bg-slate-50 transition-all">
                            <i class="ph ph-users text-slate-900"></i>
                            <div>
                                <div class="font-bold text-slate-900">Leadership Team</div>
                                <div class="text-sm text-slate-600">National coordinators</div>
                            </div>
                        </a></li>
                    </ul>
                </div>

                <a href="{{ url('students-ministry') }}" class="block text-2xl font-serif font-black text-slate-900 hover:text-slate-900">Students</a>
                <a href="{{ url('alumni-network') }}" class="block text-2xl font-serif font-black text-slate-900 hover:text-slate-900">Alumni</a>
                <a href="{{ url('events') }}" class="block text-2xl font-serif font-black text-slate-900 hover:text-slate-900">Events</a>
            </nav>

            <div class="mt-8 pt-8 border-t border-slate-200">
                <a href="{{ url('join') }}" class="w-full inline-block py-4 bg-slate-900 text-white font-black text-xs uppercase tracking-widest text-center rounded-2xl shadow-xl shadow-slate-900/20">Join ICCRTZ</a>
            </div>
        </div>
    </div>
</div>
