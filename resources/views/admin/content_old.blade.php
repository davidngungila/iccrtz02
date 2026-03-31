@extends('layouts.admin')

@section('title', 'Content Management')

@section('page-title', 'Content Management')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Content Management | ICCRTZ Admin Panel</title>

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
            
            .content-card {
                transition: all 0.3s ease;
            }
            
            .content-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            }
        </style>
    </head>
    <body class="min-h-screen bg-slate-50 antialiased" x-data="{ 
        sidebarOpen: false,
        activeTab: 'pages',
        searchQuery: '',
        showEditor: false,
        editingContent: null,
        pages: [
            { id: 1, title: 'Welcome Page', status: 'published', updated: '2 hours ago', author: 'Admin' },
            { id: 2, title: 'About Us', status: 'published', updated: '1 day ago', author: 'Admin' },
            { id: 3, title: 'Events', status: 'published', updated: '3 hours ago', author: 'Admin' },
            { id: 4, title: 'Contact', status: 'draft', updated: '5 days ago', author: 'Admin' }
        ],
        posts: [
            { id: 1, title: 'Easter Conference 2026 is Live!', status: 'published', category: 'Announcement', date: 'Today', views: 1250 },
            { id: 2, title: 'Registration Now Open for All Events', status: 'published', category: 'News', date: '2 days ago', views: 890 },
            { id: 3, title: 'Welcome New Members', status: 'draft', category: 'Welcome', date: '1 week ago', views: 0 }
        ],
        announcements: [
            { id: 1, title: '🔴 Easter Conference Live Now', type: 'urgent', active: true, priority: 'high' },
            { id: 2, title: 'Registration Deadline Extended', type: 'info', active: true, priority: 'medium' },
            { id: 3, title: 'New Resources Available', type: 'info', active: false, priority: 'low' }
        ]
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
                        <a href="/admin/content" class="nav-item active flex items-center gap-3 px-4 py-3 rounded-lg text-white">
                            <i class="ph ph-file-text text-xl"></i>
                            <span>Content</span>
                        </a>
                        <a href="/admin/users" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white">
                            <i class="ph ph-users text-xl"></i>
                            <span>Users</span>
                        </a>
                        <a href="/admin/settings" class="nav-item flex items-center gap-3 px-4 py-3 rounded-lg text-white/80 hover:text-white">
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
                            <h2 class="text-2xl font-bold text-slate-900">Content Management</h2>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <input 
                                    type="text" 
                                    x-model="searchQuery"
                                    placeholder="Search content..." 
                                    class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                >
                                <i class="ph ph-search absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                            </div>
                            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                                <i class="ph ph-plus"></i>
                                New Content
                            </button>
                        </div>
                    </div>
                </header>

                <!-- Main Content Area -->
                <main class="flex-1 overflow-y-auto p-6">
                    <!-- Content Tabs -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 mb-6">
                        <div class="flex border-b border-slate-200">
                            <button 
                                x-on:click="activeTab = 'pages'"
                                class="px-6 py-3 font-medium transition-all"
                                :class="activeTab === 'pages' ? 'text-purple-600 border-b-2 border-purple-600' : 'text-slate-600 hover:text-slate-900'"
                            >
                                <i class="ph ph-file-text mr-2"></i>
                                Pages
                            </button>
                            <button 
                                x-on:click="activeTab = 'posts'"
                                class="px-6 py-3 font-medium transition-all"
                                :class="activeTab === 'posts' ? 'text-purple-600 border-b-2 border-purple-600' : 'text-slate-600 hover:text-slate-900'"
                            >
                                <i class="ph ph-article mr-2"></i>
                                Posts
                            </button>
                            <button 
                                x-on:click="activeTab = 'announcements'"
                                class="px-6 py-3 font-medium transition-all"
                                :class="activeTab === 'announcements' ? 'text-purple-600 border-b-2 border-purple-600' : 'text-slate-600 hover:text-slate-900'"
                            >
                                <i class="ph ph-megaphone mr-2"></i>
                                Announcements
                            </button>
                        </div>
                    </div>

                    <!-- Pages Tab -->
                    <div x-show="activeTab === 'pages'" x-transition>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <template x-for="page in pages.filter(p => p.title.toLowerCase().includes(searchQuery.toLowerCase()))" :key="page.id">
                                <div class="content-card bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                            <i class="ph ph-file-text text-purple-600 text-xl"></i>
                                        </div>
                                        <span 
                                            class="px-2 py-1 rounded-full text-xs font-medium"
                                            :class="page.status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700'"
                                            x-text="page.status"
                                        ></span>
                                    </div>
                                    <h3 class="font-bold text-slate-900 mb-2" x-text="page.title"></h3>
                                    <div class="text-sm text-slate-600 mb-4">
                                        <p>Updated <span x-text="page.updated"></span></p>
                                        <p>By <span x-text="page.author"></span></p>
                                    </div>
                                    <div class="flex gap-2">
                                        <button class="flex-1 bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition-all text-sm">
                                            Edit
                                        </button>
                                        <button class="px-3 py-2 border border-slate-200 rounded-lg hover:bg-slate-50 transition-all">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Posts Tab -->
                    <div x-show="activeTab === 'posts'" x-transition>
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-slate-50 border-b border-slate-200">
                                        <tr>
                                            <th class="text-left p-4 font-medium text-slate-700">Title</th>
                                            <th class="text-left p-4 font-medium text-slate-700">Category</th>
                                            <th class="text-left p-4 font-medium text-slate-700">Date</th>
                                            <th class="text-left p-4 font-medium text-slate-700">Views</th>
                                            <th class="text-left p-4 font-medium text-slate-700">Status</th>
                                            <th class="text-left p-4 font-medium text-slate-700">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template x-for="post in posts.filter(p => p.title.toLowerCase().includes(searchQuery.toLowerCase()))" :key="post.id">
                                            <tr class="border-b border-slate-100 hover:bg-slate-50">
                                                <td class="p-4">
                                                    <div class="font-medium text-slate-900" x-text="post.title"></div>
                                                </td>
                                                <td class="p-4">
                                                    <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs" x-text="post.category"></span>
                                                </td>
                                                <td class="p-4 text-slate-600" x-text="post.date"></td>
                                                <td class="p-4 text-slate-600" x-text="post.views"></td>
                                                <td class="p-4">
                                                    <span 
                                                        class="px-2 py-1 rounded-full text-xs font-medium"
                                                        :class="post.status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700'"
                                                        x-text="post.status"
                                                    ></span>
                                                </td>
                                                <td class="p-4">
                                                    <div class="flex gap-2">
                                                        <button class="text-purple-600 hover:text-purple-700">
                                                            <i class="ph ph-pencil"></i>
                                                        </button>
                                                        <button class="text-slate-600 hover:text-slate-700">
                                                            <i class="ph ph-eye"></i>
                                                        </button>
                                                        <button class="text-red-600 hover:text-red-700">
                                                            <i class="ph ph-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Announcements Tab -->
                    <div x-show="activeTab === 'announcements'" x-transition>
                        <div class="space-y-4">
                            <template x-for="announcement in announcements" :key="announcement.id">
                                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 rounded-lg flex items-center justify-center"
                                                 :class="{
                                                     'bg-red-100': announcement.type === 'urgent',
                                                     'bg-blue-100': announcement.type === 'info',
                                                     'bg-green-100': announcement.type === 'success'
                                                 }">
                                                <i class="ph text-xl"
                                                   :class="{
                                                       'ph-warning-circle text-red-600': announcement.type === 'urgent',
                                                       'ph-info text-blue-600': announcement.type === 'info',
                                                       'ph-check-circle text-green-600': announcement.type === 'success'
                                                   }"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-slate-900" x-text="announcement.title"></h4>
                                                <div class="flex items-center gap-4 text-sm text-slate-600 mt-1">
                                                    <span class="capitalize" x-text="announcement.type"></span>
                                                    <span class="capitalize" x-text="announcement.priority + ' priority'"></span>
                                                    <span x-text="announcement.active ? 'Active' : 'Inactive'"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <button class="relative inline-flex h-6 w-11 items-center rounded-full"
                                                    :class="announcement.active ? 'bg-purple-600' : 'bg-slate-200'">
                                                <span class="inline-block h-4 w-4 transform rounded-full bg-white transition"
                                                      :class="announcement.active ? 'translate-x-6' : 'translate-x-1'"></span>
                                            </button>
                                            <button class="text-purple-600 hover:text-purple-700">
                                                <i class="ph ph-pencil"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-700">
                                                <i class="ph ph-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
