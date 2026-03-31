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
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <input type="text" 
                                   x-model="searchQuery" 
                                   placeholder="Search users..." 
                                   class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
                        </div>
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Types</option>
                            <option>Student</option>
                            <option>Alumni</option>
                            <option>International</option>
                            <option>Volunteer</option>
                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">User</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Event</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Organization</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200">
                            <template x-for="user in users.filter(u => u.name.toLowerCase().includes(searchQuery.toLowerCase()))" :key="user.id">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                                                    <span class="text-sm font-medium text-purple-600" x-text="user.name.split(' ').map(n => n[0]).join('')"></span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-slate-900" x-text="user.name"></div>
                                                <div class="text-sm text-slate-500" x-text="user.email"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800" x-text="user.type"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="user.event"></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-slate-900">
                                            <div x-text="user.diocese"></div>
                                            <div class="text-xs text-slate-500" x-text="user.parish + ' → ' + user.group"></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500" x-text="user.date"></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
                                              :class="user.status === 'confirmed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                                              x-text="user.status"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-purple-600 hover:text-purple-900 mr-3">View</button>
                                        <button class="text-slate-600 hover:text-slate-900 mr-3">Edit</button>
                                        <button class="text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Roles & Permissions Tab -->
            <div x-show="activeTab === 'roles'" x-cloak>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <template x-for="role in roles" :key="role.id">
                        <div class="border border-slate-200 rounded-lg p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-lg font-semibold text-slate-900" x-text="role.name"></h4>
                                <button class="text-slate-400 hover:text-slate-600">
                                    <i class="ph ph-pencil text-xl"></i>
                                </button>
                            </div>
                            <div class="space-y-2">
                                <template x-for="permission in role.permissions" :key="permission">
                                    <div class="flex items-center gap-2">
                                        <i class="ph ph-check-circle text-green-500"></i>
                                        <span class="text-sm text-slate-600" x-text="permission"></span>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Organization Structure Tab -->
            <div x-show="activeTab === 'organization'" x-cloak>
                <div class="space-y-6">
                    <!-- National Level -->
                    <div class="border border-slate-200 rounded-lg p-6">
                        <h4 class="text-lg font-semibold text-slate-900 mb-4">
                            <i class="ph ph-globe mr-2"></i>National Level
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-slate-50 rounded-lg p-4">
                                <div class="text-sm font-medium text-slate-700">Total Dioceses</div>
                                <div class="text-2xl font-bold text-slate-900">28</div>
                            </div>
                            <div class="bg-slate-50 rounded-lg p-4">
                                <div class="text-sm font-medium text-slate-700">Total Parishes</div>
                                <div class="text-2xl font-bold text-slate-900">342</div>
                            </div>
                            <div class="bg-slate-50 rounded-lg p-4">
                                <div class="text-sm font-medium text-slate-700">Total Groups</div>
                                <div class="text-2xl font-bold text-slate-900">1,247</div>
                            </div>
                        </div>
                    </div>

                    <!-- Dioceses -->
                    <div class="border border-slate-200 rounded-lg p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold text-slate-900">
                                <i class="ph ph-building mr-2"></i>Dioceses
                            </h4>
                            <button class="text-purple-600 hover:text-purple-700 text-sm font-medium">Manage Dioceses</button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h5 class="font-medium text-slate-900 mb-2">Dar es Salaam</h5>
                                <div class="text-sm text-slate-600">45 Parishes • 234 Groups</div>
                                <div class="text-sm text-slate-500 mt-1">Bishop: John Michael</div>
                            </div>
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h5 class="font-medium text-slate-900 mb-2">Arusha</h5>
                                <div class="text-sm text-slate-600">32 Parishes • 156 Groups</div>
                                <div class="text-sm text-slate-500 mt-1">Bishop: Sarah Kimani</div>
                            </div>
                            <div class="border border-slate-200 rounded-lg p-4">
                                <h5 class="font-medium text-slate-900 mb-2">Mwanza</h5>
                                <div class="text-sm text-slate-600">28 Parishes • 142 Groups</div>
                                <div class="text-sm text-slate-500 mt-1">Bishop: Robert Chen</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All Members Tab -->
            <div x-show="activeTab === 'members'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-users text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">All Members View</h3>
                    <p class="text-slate-600">Complete member directory with advanced search and filtering capabilities</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Add User Modal -->
    <div x-show="showUserModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Add New User</h3>
                    <button @click="showUserModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">First Name</label>
                            <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="First name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
                            <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Last name">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                        <input type="email" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Email address">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">User Type</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Student</option>
                                <option>Alumni</option>
                                <option>International</option>
                                <option>Volunteer</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Role</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Member</option>
                                <option>Moderator</option>
                                <option>Editor</option>
                                <option>Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Diocese</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Dar es Salaam</option>
                                <option>Arusha</option>
                                <option>Mwanza</option>
                                <option>Dodoma</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Parish</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>St. Mary's</option>
                                <option>St. Joseph's</option>
                                <option>Holy Spirit</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Group</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Youth Ministry</option>
                                <option>Alumni Network</option>
                                <option>Women's Ministry</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end gap-3 pt-4 border-t border-slate-200">
                        <button type="button" @click="showUserModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Add User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
