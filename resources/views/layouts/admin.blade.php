<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title', 'Admin Panel') | ICCRTZ</title>

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
            
            .sidebar {
                background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
            }
            
            .stat-card {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .stat-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            }
            
            .nav-item {
                transition: all 0.3s ease;
            }
            
            .nav-item:hover {
                background: rgba(255, 255, 255, 0.1);
                border-left: 4px solid #667eea;
            }
            
            .nav-item.active {
                background: rgba(102, 126, 234, 0.1);
                border-left: 4px solid #667eea;
            }

            .notification-dropdown {
                animation: slideDown 0.2s ease-out;
            }

            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </head>
    <body class="min-h-screen bg-slate-50 antialiased" x-data="{ 
        sidebarOpen: false,
        notificationsOpen: false,
        profileOpen: false,
        activeSection: '{{ request()->segment(2) ?? 'dashboard' }}'
    }">
        
        <div class="flex h-screen">
            <!-- Sidebar -->
            <aside class="sidebar w-64 min-h-screen text-white flex flex-col fixed lg:relative z-40" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">
                <!-- Logo -->
                <div class="p-6 border-b border-slate-700">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                            <img src="{{ asset('logo.png') }}" alt="ICCRTZ" class="w-6 h-6">
                        </div>
                        <div>
                            <h1 class="font-bold text-lg">ICCRTZ</h1>
                            <p class="text-xs text-slate-400">Admin Panel</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 p-4 overflow-y-auto">
                    <!-- Main Navigation -->
                    <div class="space-y-1 mb-6">
                        <a href="/admin" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white" :class="activeSection === 'dashboard' ? 'active' : 'text-white/80 hover:text-white'">
                            <i class="ph ph-house text-xl"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="/admin/events" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white" :class="activeSection === 'events' ? 'active' : ''">
                            <i class="ph ph-calendar text-xl"></i>
                            <span>Events</span>
                            @if(false)
                            <span class="ml-auto bg-red-600 text-white text-xs px-2 py-1 rounded-full">LIVE</span>
                            @endif
                        </a>
                        <a href="/admin/content" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white" :class="activeSection === 'content' ? 'active' : ''">
                            <i class="ph ph-file-text text-xl"></i>
                            <span>Content</span>
                        </a>
                        <a href="/admin/users" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white" :class="activeSection === 'users' ? 'active' : ''">
                            <i class="ph ph-users text-xl"></i>
                            <span>Users</span>
                        </a>
                        <a href="/admin/donations" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white" :class="activeSection === 'donations' ? 'active' : ''">
                            <i class="ph ph-currency-btz text-xl"></i>
                            <span>Donations</span>
                        </a>
                        <a href="/admin/communications" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white" :class="activeSection === 'communications' ? 'active' : ''">
                            <i class="ph ph-chat-circle text-xl"></i>
                            <span>Communications</span>
                        </a>
                        <a href="/admin/reports" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white" :class="activeSection === 'reports' ? 'active' : ''">
                            <i class="ph ph-chart-line text-xl"></i>
                            <span>Reports</span>
                        </a>
                    </div>

                    <!-- Organizational Structure -->
                    <div class="border-t border-slate-700 pt-4">
                        <h3 class="px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Organization</h3>
                        <div class="space-y-1">
                            <div class="nav-item flex items-center gap-3 px-4 py-2 rounded-lg text-white/80">
                                <i class="ph ph-globe text-xl"></i>
                                <span>National</span>
                            </div>
                            <div class="ml-4 space-y-1">
                                <a href="/admin/diocese" class="nav-item flex items-center gap-3 px-4 py-2 rounded-lg text-white/80 hover:text-white text-sm" :class="activeSection === 'diocese' ? 'active' : ''">
                                    <i class="ph ph-building text-lg"></i>
                                    <span>Dioceses</span>
                                </a>
                                <div class="ml-4 space-y-1">
                                    <a href="/admin/parish" class="nav-item flex items-center gap-3 px-4 py-2 rounded-lg text-white/80 hover:text-white text-sm" :class="activeSection === 'parish' ? 'active' : ''">
                                        <i class="ph ph-church text-lg"></i>
                                        <span>Parishes</span>
                                    </a>
                                    <div class="ml-4 space-y-1">
                                        <a href="/admin/groups" class="nav-item flex items-center gap-3 px-4 py-2 rounded-lg text-white/80 hover:text-white text-sm" :class="activeSection === 'groups' ? 'active' : ''">
                                            <i class="ph ph-users-three text-lg"></i>
                                            <span>Groups</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- System -->
                    <div class="border-t border-slate-700 pt-4 mt-4">
                        <h3 class="px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">System</h3>
                        <div class="space-y-1">
                            <a href="/admin/settings" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white" :class="activeSection === 'settings' ? 'active' : ''">
                                <i class="ph ph-gear text-xl"></i>
                                <span>Settings</span>
                            </a>
                            <a href="/admin/backup" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white" :class="activeSection === 'backup' ? 'active' : ''">
                                <i class="ph ph-hard-drive text-xl"></i>
                                <span>Backup</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </aside>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden lg:ml-0">
                <!-- Top Bar/Header -->
                <header class="bg-white border-b border-slate-200 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <button x-on:click="sidebarOpen = !sidebarOpen" class="lg:hidden text-slate-600">
                                <i class="ph ph-list text-xl"></i>
                            </button>
                            <h2 class="text-2xl font-bold text-slate-900">@yield('page-title', 'Dashboard')</h2>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <!-- Notifications -->
                            <div class="relative" x-data="{ notificationsOpen: false }">
                                <button @click="notificationsOpen = !notificationsOpen" class="relative text-slate-600 hover:text-slate-900 transition-colors">
                                    <i class="ph ph-bell text-xl"></i>
                                    <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-600 rounded-full"></span>
                                </button>
                                
                                <div x-show="notificationsOpen" 
                                     x-cloak
                                     @click.away="notificationsOpen = false"
                                     class="notification-dropdown absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg border border-slate-200 z-50">
                                    <div class="p-4 border-b border-slate-200">
                                        <h3 class="font-semibold text-slate-900">Notifications</h3>
                                    </div>
                                    <div class="max-h-96 overflow-y-auto">
                                        <div class="p-4 hover:bg-slate-50 border-b border-slate-100">
                                            <div class="flex gap-3">
                                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                                    <i class="ph ph-check text-green-600 text-sm"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-slate-900">New registration received</p>
                                                    <p class="text-xs text-slate-600">John Doe registered for Easter Conference</p>
                                                    <p class="text-xs text-slate-400 mt-1">2 minutes ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 hover:bg-slate-50 border-b border-slate-100">
                                            <div class="flex gap-3">
                                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                                    <i class="ph ph-info text-blue-600 text-sm"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-slate-900">System update available</p>
                                                    <p class="text-xs text-slate-600">Version 2.1.0 is ready to install</p>
                                                    <p class="text-xs text-slate-400 mt-1">1 hour ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-t border-slate-200">
                                        <a href="/admin/notifications" class="text-sm text-purple-600 hover:text-purple-700 font-medium">View all notifications</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Profile Dropdown -->
                            <div class="relative" x-data="{ profileOpen: false }">
                                <button @click="profileOpen = !profileOpen" class="flex items-center gap-3 text-slate-700 hover:text-slate-900">
                                    <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center">
                                        <span class="text-sm font-bold text-white">A</span>
                                    </div>
                                    <span class="hidden md:block text-sm font-medium">Admin User</span>
                                    <i class="ph ph-caret-down text-xs"></i>
                                </button>
                                
                                <div x-show="profileOpen" 
                                     x-cloak
                                     @click.away="profileOpen = false"
                                     class="notification-dropdown absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-slate-200 z-50">
                                    <div class="p-4 border-b border-slate-200">
                                        <p class="font-semibold text-slate-900">Admin User</p>
                                        <p class="text-sm text-slate-600">admin@iccrtz.org</p>
                                    </div>
                                    <div class="py-2">
                                        <a href="/admin/profile" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                                            <i class="ph ph-user mr-2"></i> Profile Settings
                                        </a>
                                        <a href="/admin/security" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                                            <i class="ph ph-lock mr-2"></i> Security
                                        </a>
                                        <hr class="my-2 border-slate-200">
                                        <a href="/admin/logout" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                            <i class="ph ph-sign-out mr-2"></i> Sign Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Main Content Area -->
                <main class="flex-1 overflow-y-auto">
                    @yield('content')
                </main>
            </div>
        </div>

        <!-- Mobile sidebar overlay -->
        <div x-show="sidebarOpen" 
             x-cloak
             @click="sidebarOpen = false"
             class="fixed inset-0 bg-black/50 z-30 lg:hidden"></div>
    </body>
</html>
