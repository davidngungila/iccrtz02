<!-- Footer -->
<footer class="bg-slate-900 text-white pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
        <div class="col-span-1 md:col-span-1 lg:col-span-1">
            <a href="{{ url('/') }}" class="flex items-center gap-3 mb-6">
                <div class="h-16 w-16 rounded-2xl object-contain bg-white p-3 shadow-lg">
                    <img src="{{ asset('logo.png') }}" alt="CCT-UF Logo" class="w-full h-full object-contain">
                </div>
                <div class="flex flex-col">
                    <span class="text-lg font-black tracking-tighter text-white leading-none">CCT-UF</span>
                    <span class="text-xs font-bold text-slate-400 leading-none mt-1">Universities Fellowship</span>
                </div>
            </a>
            <p class="text-slate-400 leading-relaxed text-sm mb-6">
                Forming Catholic disciples and empowering leaders through spiritual formation and community building across Tanzania's universities since 1995.
            </p>
            <div class="flex items-center gap-4">
                <span class="text-xs font-bold text-slate-300">25+ Years</span>
                <span class="text-xs text-slate-500">|</span>
                <span class="text-xs font-bold text-slate-300">50+ Universities</span>
                <span class="text-xs text-slate-500">|</span>
                <span class="text-xs font-bold text-slate-300">10K+ Members</span>
            </div>
        </div>

        <div>
            <h4 class="font-bold mb-6 text-slate-300">Quick Links</h4>
            <ul class="space-y-3 text-sm">
                <li><a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><a href="{{ url('about') }}" class="hover:text-white transition-colors">About Us</a></li>
                <li><a href="{{ url('students-ministry') }}" class="hover:text-white transition-colors">Students Ministry</a></li>
                <li><a href="{{ url('alumni-network') }}" class="hover:text-white transition-colors">Alumni Network</a></li>
                <li><a href="{{ url('events') }}" class="hover:text-white transition-colors">Events</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold mb-6 text-slate-300">Get Involved</h4>
            <ul class="space-y-3 text-sm">
                <li><a href="{{ url('join') }}" class="hover:text-white transition-colors">Join Fellowship</a></li>
                <li><a href="{{ url('volunteer') }}" class="hover:text-white transition-colors">Volunteer</a></li>
                <li><a href="{{ url('support') }}" class="hover:text-white transition-colors">Support Ministry</a></li>
                <li><a href="{{ url('contact') }}" class="hover:text-white transition-colors">Contact Us</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold mb-6 text-slate-300">Contact Info</h4>
            <ul class="space-y-4 text-sm text-slate-400">
                <li class="flex items-start gap-3">
                    <i class="ph ph-map-pin text-slate-300 mt-0.5"></i>
                    <span>
                        Catholic Charismatic Tanzania<br>
                        Universities Fellowship<br>
                        P.O.Box 7744, Dar es Salaam<br>
                        Tanzania<br>
                        <br>
                        <strong>Email:</strong> info@cctuf.org<br>
                        <strong>Phone:</strong> +255 22 211 0000
                    </span>
                </li>
            </ul>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 pt-10 border-t border-slate-800">
        <div class="flex flex-col items-center text-center gap-8">
            <div class="flex flex-wrap items-center justify-center gap-y-2 gap-x-6 text-[11px] font-bold uppercase tracking-wider text-slate-500">
                <a href="{{ url('privacy') }}" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
                <a href="{{ url('terms') }}" class="hover:text-slate-300 transition-colors">Terms & Conditions</a>
                <a href="{{ url('faq') }}" class="hover:text-slate-300 transition-colors">FAQ</a>
            </div>
            <p class="text-sm text-slate-500">© 2024 Catholic Charismatic Tanzania – Universities Fellowship. All rights reserved. | 25+ Years of Spiritual Formation</p>
        </div>
    </div>
</footer>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PCWDVP095P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PCWDVP095P');
</script>
