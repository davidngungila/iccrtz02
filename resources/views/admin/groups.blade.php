@extends('layouts.admin')

@section('title', 'Groups Management')

@section('page-title', 'Groups Management')

@section('content')
<div class="p-6" x-data="{ 
    searchQuery: '',
    showGroupModal: false,
    groups: [
        { id: 1, name: 'Youth Ministry', parish: 'St. Mary\'s Cathedral', diocese: 'Archdiocese of Dar es Salaam', leader: 'Joseph Kimani', type: 'youth', members: 45, meeting: 'Sunday 3:00 PM', status: 'active' },
        { id: 2, name: 'Women\'s Guild', parish: 'St. Joseph\'s Cathedral', diocese: 'Archdiocese of Mbeya', leader: 'Grace Mbeki', type: 'women', members: 32, meeting: 'Saturday 10:00 AM', status: 'active' },
        { id: 3, name: 'Alumni Network', parish: 'Holy Spirit Church', diocese: 'Diocese of Arusha', leader: 'Robert Chen', type: 'alumni', members: 28, meeting: 'Monthly 1st Saturday', status: 'active' },
        { id: 4, name: 'Men\'s Fellowship', parish: 'St. Paul\'s Church', diocese: 'Diocese of Dodoma', leader: 'Michael Johnson', type: 'men', members: 25, meeting: 'Saturday 7:00 AM', status: 'active' },
        { id: 5, name: 'Choir Ministry', parish: 'Christ the King Church', diocese: 'Diocese of Mwanza', leader: 'Sarah Mwangi', type: 'music', members: 38, meeting: 'Tuesday 6:00 PM', status: 'active' },
        { id: 6, name: 'Bible Study', parish: 'St. Mary\'s Cathedral', diocese: 'Archdiocese of Dar es Salaam', leader: 'Fr. John Michael', type: 'education', members: 22, meeting: 'Wednesday 7:00 PM', status: 'active' },
        { id: 7, name: 'Media Team', parish: 'St. Joseph\'s Cathedral', diocese: 'Archdiocese of Mbeya', leader: 'David Ngungila', type: 'service', members: 15, meeting: 'Thursday 5:00 PM', status: 'active' },
        { id: 8, name: 'Outreach Ministry', parish: 'Holy Spirit Church', diocese: 'Diocese of Arusha', leader: 'Grace Mbeki', type: 'service', members: 18, meeting: 'Saturday 2:00 PM', status: 'inactive' }
    ]
}">
    <!-- Groups Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Groups Management</h1>
            <p class="text-slate-600">Manage church groups, ministries, and fellowship activities</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export
            </button>
            <button @click="showGroupModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-plus"></i>
                Add Group
            </button>
        </div>
    </div>

    <!-- Groups Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users-three text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="groups.length"></h3>
            <p class="text-sm text-slate-600">Groups</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-check-circle text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Active</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="groups.filter(g => g.status === 'active').length"></h3>
            <p class="text-sm text-slate-600">Active Groups</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="groups.reduce((sum, g) => sum + g.members, 0)"></h3>
            <p class="text-sm text-slate-600">Group Members</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-user text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Leaders</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="groups.length"></h3>
            <p class="text-sm text-slate-600">Group Leaders</p>
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-6">
        <div class="flex items-center justify-between">
            <div class="relative flex-1 max-w-md">
                <input type="text" 
                       x-model="searchQuery" 
                       placeholder="Search groups..." 
                       class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-full">
                <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
            </div>
            <div class="flex items-center gap-3 ml-4">
                <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option>All Types</option>
                    <option>Youth</option>
                    <option>Women</option>
                    <option>Men</option>
                    <option>Alumni</option>
                    <option>Music</option>
                    <option>Education</option>
                    <option>Service</option>
                </select>
                <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Groups Grid -->
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <template x-for="group in groups.filter(g => g.name.toLowerCase().includes(searchQuery.toLowerCase()))" :key="group.id">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition-all">
                <div class="h-32 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                    <div class="text-center">
                        <i class="ph ph-users-three text-4xl text-green-600 mb-2"></i>
                        <h3 class="font-bold text-green-900" x-text="group.type"></h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-slate-900 mb-2" x-text="group.name"></h4>
                    <div class="text-sm text-slate-600 mb-3">
                        <div class="text-purple-600 font-medium" x-text="group.parish"></div>
                        <div class="text-xs text-slate-500" x-text="group.diocese"></div>
                    </div>
                    <div class="space-y-2 text-sm text-slate-600 mb-4">
                        <div class="flex items-center gap-2">
                            <i class="ph ph-user text-slate-400"></i>
                            <span x-text="group.leader"></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="ph ph-clock text-slate-400"></i>
                            <span x-text="group.meeting"></span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-4 text-center">
                        <div class="bg-slate-50 rounded-lg p-3">
                            <div class="text-lg font-bold text-slate-900" x-text="group.members"></div>
                            <div class="text-xs text-slate-600">Members</div>
                        </div>
                        <div class="bg-slate-50 rounded-lg p-3">
                            <div class="text-lg font-bold text-slate-900" x-text="group.status"></div>
                            <div class="text-xs text-slate-600">Status</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2">
                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                              :class="group.status === 'active' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                              x-text="group.status"></span>
                        <div class="flex-1"></div>
                        <button class="text-green-600 hover:text-green-900">
                            <i class="ph ph-pencil"></i>
                        </button>
                        <button class="text-slate-600 hover:text-slate-900">
                            <i class="ph ph-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- Add Group Modal -->
    <div x-show="showGroupModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Add New Group</h3>
                    <button @click="showGroupModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Group Name</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter group name">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Group Type</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Select type</option>
                                <option>Youth</option>
                                <option>Women</option>
                                <option>Men</option>
                                <option>Alumni</option>
                                <option>Music</option>
                                <option>Education</option>
                                <option>Service</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Status</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Group Leader</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter leader name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Meeting Schedule</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="e.g., Sunday 3:00 PM">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Diocese</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Select diocese</option>
                                <option>Archdiocese of Dar es Salaam</option>
                                <option>Archdiocese of Mbeya</option>
                                <option>Diocese of Arusha</option>
                                <option>Diocese of Dodoma</option>
                                <option>Diocese of Mwanza</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Parish</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Select parish</option>
                                <option>St. Mary's Cathedral</option>
                                <option>St. Joseph's Cathedral</option>
                                <option>Holy Spirit Church</option>
                                <option>St. Paul's Church</option>
                                <option>Christ the King Church</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Expected Members</label>
                        <input type="number" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Number of members">
                    </div>
                    <div class="flex justify-end gap-3 pt-4 border-t border-slate-200">
                        <button type="button" @click="showGroupModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Add Group
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
