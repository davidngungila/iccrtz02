<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Settings | ICCRTZ Admin Panel</title>

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
            
            .settings-section {
                transition: all 0.3s ease;
            }
            
            .settings-section:hover {
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            }
        </style>
    </head>
    <body class="min-h-screen bg-slate-50 antialiased" x-data="{ 
        sidebarOpen: false,
        activeTab: 'general',
        settings: {
            siteName: 'ICCRTZ - Catholic Charismatic Tanzania',
            siteEmail: 'info@iccrtz.org',
            sitePhone: '+255 123 456 789',
            siteAddress: 'Dar es Salaam, Tanzania',
            maintenanceMode: false,
            liveStreamingEnabled: true,
            autoBackupEnabled: true,
            emailNotifications: true,
            theme: 'light'
        }
    }">
        
        <div class="flex h-screen">
            <!-- Sidebar -->
            <div class="sidebar w-64 min-h-screen text-white flex flex-col" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">
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
                <nav class="flex-1 p-4">
                    <div class="space-y-1">
                        <a href="/admin" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white">
                            <i class="ph ph-house text-xl"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="/admin/events" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white">
                            <i class="ph ph-calendar text-xl"></i>
                            <span>Events</span>
                        </a>
                        <a href="/admin/content" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white">
                            <i class="ph ph-file-text text-xl"></i>
                            <span>Content</span>
                        </a>
                        <a href="/admin/users" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white">
                            <i class="ph ph-users text-xl"></i>
                            <span>Users</span>
                        </a>
                        <a href="/admin/settings" class="nav-item active flex items-center gap-3 px-4 py-3 rounded-lg text-white">
                            <i class="ph ph-gear text-xl"></i>
                            <span>Settings</span>
                        </a>
                    </div>
                </nav>

                <!-- User Menu -->
                <div class="p-4 border-t border-slate-700">
                    <div class="flex items-center gap-3 px-4 py-3">
                        <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold">A</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium">Admin User</p>
                            <p class="text-xs text-slate-400">admin@iccrtz.org</p>
                        </div>
                        <a href="/admin/logout" class="text-slate-400 hover:text-white">
                            <i class="ph ph-sign-out text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Top Bar -->
                <header class="bg-white border-b border-slate-200 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <button x-on:click="sidebarOpen = !sidebarOpen" class="lg:hidden text-slate-600">
                                <i class="ph ph-list text-xl"></i>
                            </button>
                            <h2 class="text-2xl font-bold text-slate-900">Settings</h2>
                        </div>
                        <div class="flex items-center gap-4">
                            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium">
                                Save All Changes
                            </button>
                        </div>
                    </div>
                </header>

                <!-- Main Content Area -->
                <main class="flex-1 overflow-y-auto p-6">
                    <!-- Settings Tabs -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 mb-6">
                        <div class="flex border-b border-slate-200">
                            <button 
                                x-on:click="activeTab = 'general'"
                                class="px-6 py-3 font-medium transition-all"
                                :class="activeTab === 'general' ? 'text-purple-600 border-b-2 border-purple-600' : 'text-slate-600 hover:text-slate-900'"
                            >
                                <i class="ph ph-globe mr-2"></i>
                                General
                            </button>
                            <button 
                                x-on:click="activeTab = 'features'"
                                class="px-6 py-3 font-medium transition-all"
                                :class="activeTab === 'features' ? 'text-purple-600 border-b-2 border-purple-600' : 'text-slate-600 hover:text-slate-900'"
                            >
                                <i class="ph ph-bolt mr-2"></i>
                                Features
                            </button>
                            <button 
                                x-on:click="activeTab = 'security'"
                                class="px-6 py-3 font-medium transition-all"
                                :class="activeTab === 'security' ? 'text-purple-600 border-b-2 border-purple-600' : 'text-slate-600 hover:text-slate-900'"
                            >
                                <i class="ph ph-shield-check mr-2"></i>
                                Security
                            </button>
                            <button 
                                x-on:click="activeTab = 'backup'"
                                class="px-6 py-3 font-medium transition-all"
                                :class="activeTab === 'backup' ? 'text-purple-600 border-b-2 border-purple-600' : 'text-slate-600 hover:text-slate-900'"
                            >
                                <i class="ph ph-cloud-arrow-up mr-2"></i>
                                Backup
                            </button>
                        </div>
                    </div>

                    <!-- General Settings -->
                    <div x-show="activeTab === 'general'" x-transition>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Site Information -->
                            <div class="settings-section bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Site Information</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Site Name</label>
                                        <input 
                                            type="text" 
                                            x-model="settings.siteName"
                                            class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                        >
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Site Email</label>
                                        <input 
                                            type="email" 
                                            x-model="settings.siteEmail"
                                            class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                        >
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Site Phone</label>
                                        <input 
                                            type="tel" 
                                            x-model="settings.sitePhone"
                                            class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                        >
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Site Address</label>
                                        <textarea 
                                            x-model="settings.siteAddress"
                                            rows="3"
                                            class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Appearance -->
                            <div class="settings-section bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Appearance</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Theme</label>
                                        <select 
                                            x-model="settings.theme"
                                            class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                        >
                                            <option value="light">Light</option>
                                            <option value="dark">Dark</option>
                                            <option value="auto">Auto</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Logo</label>
                                        <div class="flex items-center gap-4">
                                            <div class="w-16 h-16 bg-slate-100 rounded-lg flex items-center justify-center">
                                                <img src="{{ asset('logo.png') }}" alt="Logo" class="w-12 h-12">
                                            </div>
                                            <button class="px-4 py-2 border border-slate-200 rounded-lg hover:bg-slate-50">
                                                Change Logo
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Features Settings -->
                    <div x-show="activeTab === 'features'" x-transition>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Live Streaming -->
                            <div class="settings-section bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Live Streaming</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-medium text-slate-900">Enable Live Streaming</p>
                                            <p class="text-sm text-slate-600">Allow live streaming for events</p>
                                        </div>
                                        <button class="relative inline-flex h-6 w-11 items-center rounded-full"
                                                :class="settings.liveStreamingEnabled ? 'bg-purple-600' : 'bg-slate-200'">
                                            <span class="inline-block h-4 w-4 transform rounded-full bg-white transition"
                                                  :class="settings.liveStreamingEnabled ? 'translate-x-6' : 'translate-x-1'"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Maintenance Mode -->
                            <div class="settings-section bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Maintenance</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-medium text-slate-900">Maintenance Mode</p>
                                            <p class="text-sm text-slate-600">Put site in maintenance mode</p>
                                        </div>
                                        <button class="relative inline-flex h-6 w-11 items-center rounded-full"
                                                :class="settings.maintenanceMode ? 'bg-red-600' : 'bg-slate-200'">
                                            <span class="inline-block h-4 w-4 transform rounded-full bg-white transition"
                                                  :class="settings.maintenanceMode ? 'translate-x-6' : 'translate-x-1'"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Settings -->
                    <div x-show="activeTab === 'security'" x-transition>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Admin Security -->
                            <div class="settings-section bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Admin Security</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Admin Email</label>
                                        <input 
                                            type="email" 
                                            value="admin@iccrtz.org"
                                            class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                        >
                                    </div>
                                    <button class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition-all">
                                        Change Password
                                    </button>
                                </div>
                            </div>

                            <!-- Notifications -->
                            <div class="settings-section bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Notifications</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-medium text-slate-900">Email Notifications</p>
                                            <p class="text-sm text-slate-600">Receive email notifications</p>
                                        </div>
                                        <button class="relative inline-flex h-6 w-11 items-center rounded-full"
                                                :class="settings.emailNotifications ? 'bg-purple-600' : 'bg-slate-200'">
                                            <span class="inline-block h-4 w-4 transform rounded-full bg-white transition"
                                                  :class="settings.emailNotifications ? 'translate-x-6' : 'translate-x-1'"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backup Settings -->
                    <div x-show="activeTab === 'backup'" x-transition>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Auto Backup -->
                            <div class="settings-section bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Auto Backup</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-medium text-slate-900">Enable Auto Backup</p>
                                            <p class="text-sm text-slate-600">Automatically backup data</p>
                                        </div>
                                        <button class="relative inline-flex h-6 w-11 items-center rounded-full"
                                                :class="settings.autoBackupEnabled ? 'bg-purple-600' : 'bg-slate-200'">
                                            <span class="inline-block h-4 w-4 transform rounded-full bg-white transition"
                                                  :class="settings.autoBackupEnabled ? 'translate-x-6' : 'translate-x-1'"></span>
                                        </button>
                                    </div>
                                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-all">
                                        Download Backup
                                    </button>
                                </div>
                            </div>

                            <!-- System Info -->
                            <div class="settings-section bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">System Info</h3>
                                <div class="space-y-3 text-sm">
                                    <div class="flex justify-between">
                                        <span class="text-slate-600">PHP Version:</span>
                                        <span class="font-medium">8.2.0</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-slate-600">Laravel Version:</span>
                                        <span class="font-medium">12.54.1</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-slate-600">Database:</span>
                                        <span class="font-medium">MySQL</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-slate-600">Last Backup:</span>
                                        <span class="font-medium">2 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
