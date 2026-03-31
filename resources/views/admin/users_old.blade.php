@extends('layouts.admin')

@section('title', 'Users Management')

@section('page-title', 'Users Management')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'registrations',
    searchQuery: '',
    showUserModal: false,
    users: [
        { id: 1, name: 'John Doe', email: 'john@example.com', type: 'student', event: 'Easter Conference 2026', date: '2026-03-30', status: 'confirmed', diocese: 'Dar es Salaam', parish: 'St. Mary\'s', group: 'Youth Ministry' },
        { id: 2, name: 'Sarah Mwangi', email: 'sarah@example.com', type: 'alumni', event: 'Easter Conference 2026', date: '2026-03-30', status: 'confirmed', diocese: 'Arusha', parish: 'St. Joseph\'s', group: 'Alumni Network' },
        { id: 3, name: 'Robert Kimani', email: 'robert@example.com', type: 'international', event: 'Easter Conference 2026', date: '2026-03-29', status: 'pending', diocese: 'Mwanza', parish: 'Holy Spirit', group: 'International Students' },
        { id: 4, name: 'Grace Mbeki', email: 'grace@example.com', type: 'student', event: 'Youth Leadership Summit', date: '2026-03-28', status: 'confirmed', diocese: 'Dodoma', parish: 'St. Paul\'s', group: 'Women\'s Ministry' },
        { id: 5, name: 'Michael Chen', email: 'michael@example.com', type: 'volunteer', event: 'Easter Conference 2026', date: '2026-03-27', status: 'confirmed', diocese: 'Mbeya', parish: 'Christ the King', group: 'Media Team' }
    ],
    roles: [
        { id: 1, name: 'Admin', permissions: ['Full Access', 'User Management', 'Content Management', 'System Settings'] },
        { id: 2, name: 'Editor', permissions: ['Content Management', 'Event Management'] },
        { id: 3, name: 'Moderator', permissions: ['Content Moderation', 'User Support'] },
        { id: 4, name: 'Member', permissions: ['Basic Access'] }
    ]
}">
    <!-- Users Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Users Management</h1>
            <p class="text-slate-600">Manage members, roles, permissions, and organizational structure</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export
            </button>
            <button @click="showUserModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-plus"></i>
                Add User
            </button>
        </div>
    </div>

    <!-- Users Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="users.length"></h3>
            <p class="text-sm text-slate-600">All Users</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-check-circle text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Active</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="users.filter(u => u.status === 'confirmed').length"></h3>
            <p class="text-sm text-slate-600">Confirmed</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-clock text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Pending</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="users.filter(u => u.status === 'pending').length"></h3>
            <p class="text-sm text-slate-600">Awaiting Approval</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-user-gear text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Roles</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="roles.length"></h3>
            <p class="text-sm text-slate-600">User Roles</p>
        </div>
    </div>

    <!-- Tabs Navigation -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 mb-6">
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button @click="activeTab = 'registrations'" 
                        :class="activeTab === 'registrations' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-user-plus mr-2"></i>
                    Recent Registrations
                </button>
                <button @click="activeTab = 'members'" 
                        :class="activeTab === 'members' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-users mr-2"></i>
                    All Members
                </button>
                <button @click="activeTab = 'roles'" 
                        :class="activeTab === 'roles' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-shield-check mr-2"></i>
                    Roles & Permissions
                </button>
                <button @click="activeTab = 'organization'" 
                        :class="activeTab === 'organization' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-building mr-2"></i>
                    Organization Structure
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- Recent Registrations Tab -->
            <div x-show="activeTab === 'registrations'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Recent Registrations</h3>
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
                        <a href="/admin/users" class="nav-item active flex items-center gap-3 px-4 py-3 rounded-lg text-white">
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
                            <h2 class="text-2xl font-bold text-slate-900">Users Management</h2>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <input 
                                    type="text" 
                                    x-model="searchQuery"
                                    placeholder="Search users..." 
                                    class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                >
                                <i class="ph ph-search absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                            </div>
                            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                                <i class="ph ph-download"></i>
                                Export
                            </button>
                        </div>
                    </div>
                </header>

                <!-- Main Content Area -->
                <main class="flex-1 overflow-y-auto p-6">
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="ph ph-users text-2xl"></i>
                                </div>
                                <span class="text-sm bg-white/20 px-2 py-1 rounded-full">Total</span>
                            </div>
                            <h3 class="text-3xl font-bold mb-1">2,847</h3>
                            <p class="text-white/80 text-sm">Total Users</p>
                        </div>

                        <div class="bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="ph ph-graduation-cap text-2xl"></i>
                                </div>
                                <span class="text-sm bg-white/20 px-2 py-1 rounded-full">65%</span>
                            </div>
                            <h3 class="text-3xl font-bold mb-1">1,850</h3>
                            <p class="text-white/80 text-sm">Students</p>
                        </div>

                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="ph ph-briefcase text-2xl"></i>
                                </div>
                                <span class="text-sm bg-white/20 px-2 py-1 rounded-full">25%</span>
                            </div>
                            <h3 class="text-3xl font-bold mb-1">712</h3>
                            <p class="text-white/80 text-sm">Alumni</p>
                        </div>

                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="ph ph-globe text-2xl"></i>
                                </div>
                                <span class="text-sm bg-white/20 px-2 py-1 rounded-full">10%</span>
                            </div>
                            <h3 class="text-3xl font-bold mb-1">285</h3>
                            <p class="text-white/80 text-sm">International</p>
                        </div>
                    </div>

                    <!-- Users Table -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <div class="p-6 border-b border-slate-200">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-bold text-slate-900">Recent Registrations</h3>
                                <div class="flex items-center gap-2">
                                    <button class="px-3 py-1 text-sm border border-slate-200 rounded-lg hover:bg-slate-50">Filter</button>
                                    <button class="px-3 py-1 text-sm border border-slate-200 rounded-lg hover:bg-slate-50">Sort</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-slate-50 border-b border-slate-200">
                                    <tr>
                                        <th class="text-left p-4 font-medium text-slate-700">User</th>
                                        <th class="text-left p-4 font-medium text-slate-700">Type</th>
                                        <th class="text-left p-4 font-medium text-slate-700">Event</th>
                                        <th class="text-left p-4 font-medium text-slate-700">Date</th>
                                        <th class="text-left p-4 font-medium text-slate-700">Status</th>
                                        <th class="text-left p-4 font-medium text-slate-700">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template x-for="user in users.filter(u => 
                                        u.name.toLowerCase().includes(searchQuery.toLowerCase()) || 
                                        u.email.toLowerCase().includes(searchQuery.toLowerCase())
                                    )" :key="user.id">
                                        <tr class="border-b border-slate-100 hover:bg-slate-50">
                                            <td class="p-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                                        <span class="text-xs font-bold text-purple-600" x-text="user.name.split(' ').map(n => n[0]).join('')"></span>
                                                    </div>
                                                    <div>
                                                        <div class="font-medium text-slate-900" x-text="user.name"></div>
                                                        <div class="text-sm text-slate-600" x-text="user.email"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <span 
                                                    class="px-2 py-1 rounded-full text-xs font-medium capitalize"
                                                    :class="{
                                                        'bg-blue-100 text-blue-700': user.type === 'student',
                                                        'bg-purple-100 text-purple-700': user.type === 'alumni',
                                                        'bg-green-100 text-green-700': user.type === 'international'
                                                    }"
                                                    x-text="user.type"
                                                ></span>
                                            </td>
                                            <td class="p-4 text-slate-600" x-text="user.event"></td>
                                            <td class="p-4 text-slate-600" x-text="user.date"></td>
                                            <td class="p-4">
                                                <span 
                                                    class="px-2 py-1 rounded-full text-xs font-medium"
                                                    :class="user.status === 'confirmed' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700'"
                                                    x-text="user.status"
                                                ></span>
                                            </td>
                                            <td class="p-4">
                                                <div class="flex gap-2">
                                                    <button class="text-purple-600 hover:text-purple-700" title="View">
                                                        <i class="ph ph-eye"></i>
                                                    </button>
                                                    <button class="text-blue-600 hover:text-blue-700" title="Edit">
                                                        <i class="ph ph-pencil"></i>
                                                    </button>
                                                    <button class="text-green-600 hover:text-green-700" title="Email">
                                                        <i class="ph ph-envelope"></i>
                                                    </button>
                                                    <button class="text-red-600 hover:text-red-700" title="Delete">
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
                </main>
            </div>
        </div>
    </body>
</html>
