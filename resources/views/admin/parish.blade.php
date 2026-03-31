@extends('layouts.admin')

@section('title', 'Parishes Management')

@section('page-title', 'Parishes Management')

@section('content')
<div class="p-6" x-data="{ 
    searchQuery: '',
    showParishModal: false,
    parishes: [
        { id: 1, name: 'St. Mary\'s Cathedral', diocese: 'Archdiocese of Dar es Salaam', priest: 'Fr. John Michael', address: 'Kivukoni, Dar es Salaam', phone: '+255 22 211 2345', email: 'stmarys@archdsalaam.org', groups: 12, members: 1250 },
        { id: 2, name: 'St. Joseph\'s Cathedral', diocese: 'Archdiocese of Mbeya', priest: 'Fr. Robert Chen', address: 'Mbeya City Centre', phone: '+255 253 250 123', email: 'stjosephs@archmbeya.org', groups: 8, members: 890 },
        { id: 3, name: 'Holy Spirit Church', diocese: 'Diocese of Arusha', priest: 'Fr. Grace Mbeki', address: 'Arusha Town', phone: '+255 27 250 567', email: 'holyspirit@diocese.arusha.org', groups: 10, members: 670 },
        { id: 4, name: 'St. Paul\'s Church', diocese: 'Diocese of Dodoma', priest: 'Fr. Michael Johnson', address: 'Dodoma City', phone: '+255 26 232 890', email: 'stpauls@diocese.dodoma.org', groups: 6, members: 450 },
        { id: 5, name: 'Christ the King Church', diocese: 'Diocese of Mwanza', priest: 'Fr. David Kimani', address: 'Mwanza City', phone: '+255 28 250 345', email: 'christking@diocese.mwanza.org', groups: 9, members: 520 }
    ]
}">
    <!-- Parishes Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Parishes Management</h1>
            <p class="text-slate-600">Manage parishes, priests, and local church administration</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export
            </button>
            <button @click="showParishModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-plus"></i>
                Add Parish
            </button>
        </div>
    </div>

    <!-- Parishes Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-church text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="parishes.length"></h3>
            <p class="text-sm text-slate-600">Parishes</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-user text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Priests</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="parishes.length"></h3>
            <p class="text-sm text-slate-600">Assigned Priests</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users-three text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="parishes.reduce((sum, p) => sum + p.groups, 0)"></h3>
            <p class="text-sm text-slate-600">Active Groups</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="parishes.reduce((sum, p) => sum + p.members, 0)"></h3>
            <p class="text-sm text-slate-600">Parishioners</p>
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-6">
        <div class="flex items-center justify-between">
            <div class="relative flex-1 max-w-md">
                <input type="text" 
                       x-model="searchQuery" 
                       placeholder="Search parishes..." 
                       class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-full">
                <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
            </div>
            <div class="flex items-center gap-3 ml-4">
                <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option>All Dioceses</option>
                    <option>Archdiocese of Dar es Salaam</option>
                    <option>Archdiocese of Mbeya</option>
                    <option>Diocese of Arusha</option>
                    <option>Diocese of Dodoma</option>
                    <option>Diocese of Mwanza</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Parishes Grid -->
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <template x-for="parish in parishes.filter(p => p.name.toLowerCase().includes(searchQuery.toLowerCase()))" :key="parish.id">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition-all">
                <div class="h-32 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                    <div class="text-center">
                        <i class="ph ph-church text-4xl text-blue-600 mb-2"></i>
                        <h3 class="font-bold text-blue-900" x-text="parish.name.split(' ')[1] || 'Parish'"></h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-slate-900 mb-2" x-text="parish.name"></h4>
                    <div class="text-sm text-purple-600 font-medium mb-3" x-text="parish.diocese"></div>
                    <div class="space-y-2 text-sm text-slate-600 mb-4">
                        <div class="flex items-center gap-2">
                            <i class="ph ph-user text-slate-400"></i>
                            <span x-text="parish.priest"></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="ph ph-envelope text-slate-400"></i>
                            <span x-text="parish.email"></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="ph ph-phone text-slate-400"></i>
                            <span x-text="parish.phone"></span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-4 text-center">
                        <div class="bg-slate-50 rounded-lg p-3">
                            <div class="text-lg font-bold text-slate-900" x-text="parish.groups"></div>
                            <div class="text-xs text-slate-600">Groups</div>
                        </div>
                        <div class="bg-slate-50 rounded-lg p-3">
                            <div class="text-lg font-bold text-slate-900" x-text="parish.members"></div>
                            <div class="text-xs text-slate-600">Members</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2">
                        <a :href="'/admin/groups?parish=' + parish.id" class="flex-1 bg-blue-600 text-white px-3 py-2 rounded-lg hover:bg-blue-700 transition-all text-sm font-medium text-center">
                            View Groups
                        </a>
                        <button class="text-blue-600 hover:text-blue-900">
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

    <!-- Add Parish Modal -->
    <div x-show="showParishModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Add New Parish</h3>
                    <button @click="showParishModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Parish Name</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter parish name">
                    </div>
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
                        <label class="block text-sm font-medium text-slate-700 mb-2">Parish Priest</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter priest name">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                            <input type="email" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Email address">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Phone</label>
                            <input type="tel" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Phone number">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Address</label>
                        <textarea class="w-full border border-slate-200 rounded-lg px-4 py-2" rows="3" placeholder="Physical address"></textarea>
                    </div>
                    <div class="flex justify-end gap-3 pt-4 border-t border-slate-200">
                        <button type="button" @click="showParishModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Add Parish
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
