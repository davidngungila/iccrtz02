@extends('layouts.admin')

@section('title', 'Dioceses Management')

@section('page-title', 'Dioceses Management')

@section('content')
<div class="p-6" x-data="{ 
    searchQuery: '',
    showDioceseModal: false,
    dioceses: [
        { id: 1, name: 'Archdiocese of Dar es Salaam', bishop: 'His Grace Jude Thaddeus Ruwa\'ichi', address: 'P.O. Box 1008, Dar es Salaam', phone: '+255 22 211 5445', email: 'archdsalaam@tzcath.org', parishes: 45, groups: 234, members: 12500 },
        { id: 2, name: 'Archdiocese of Mbeya', bishop: 'His Excellency Gervas Nyaisonga', address: 'P.O. Box 70, Mbeya', phone: '+255 253 250 505', email: 'archmbeya@tzcath.org', parishes: 32, groups: 156, members: 8900 },
        { id: 3, name: 'Diocese of Arusha', bishop: 'His Excellency Isaac Amani', address: 'P.O. Box 488, Arusha', phone: '+255 27 250 2444', email: 'diocese.arusha@tzcath.org', parishes: 28, groups: 142, members: 7800 },
        { id: 4, name: 'Diocese of Mwanza', bishop: 'His Excellency Michael Mapunda', address: 'P.O. Box 27, Mwanza', phone: '+255 28 250 0222', email: 'diocese.mwanza@tzcath.org', parishes: 26, groups: 128, members: 6500 },
        { id: 5, name: 'Diocese of Dodoma', bishop: 'His Excellency Gervas Nyaisonga', address: 'P.O. Box 15, Dodoma', phone: '+255 26 232 0123', email: 'diocese.dodoma@tzcath.org', parishes: 24, groups: 98, members: 5200 }
    ]
}">
    <!-- Dioceses Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Dioceses Management</h1>
            <p class="text-slate-600">Manage dioceses, bishops, and regional administration</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export
            </button>
            <button @click="showDioceseModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-plus"></i>
                Add Diocese
            </button>
        </div>
    </div>

    <!-- Dioceses Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-building text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="dioceses.length"></h3>
            <p class="text-sm text-slate-600">Dioceses</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-church text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="dioceses.reduce((sum, d) => sum + d.parishes, 0)"></h3>
            <p class="text-sm text-slate-600">Parishes</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users-three text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="dioceses.reduce((sum, d) => sum + d.groups, 0)"></h3>
            <p class="text-sm text-slate-600">Groups</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="(dioceses.reduce((sum, d) => sum + d.members, 0) / 1000).toFixed(1) + 'K'"></h3>
            <p class="text-sm text-slate-600">Members</p>
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-6">
        <div class="flex items-center justify-between">
            <div class="relative flex-1 max-w-md">
                <input type="text" 
                       x-model="searchQuery" 
                       placeholder="Search dioceses..." 
                       class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-full">
                <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
            </div>
            <div class="flex items-center gap-3 ml-4">
                <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option>All Regions</option>
                    <option>Northern</option>
                    <option>Southern</option>
                    <option>Western</option>
                    <option>Eastern</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Dioceses Grid -->
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <template x-for="diocese in dioceses.filter(d => d.name.toLowerCase().includes(searchQuery.toLowerCase()))" :key="diocese.id">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition-all">
                <div class="h-32 bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center">
                    <div class="text-center">
                        <i class="ph ph-building text-4xl text-purple-600 mb-2"></i>
                        <h3 class="font-bold text-purple-900" x-text="diocese.name.split(' ')[0]"></h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-slate-900 mb-2" x-text="diocese.name"></h4>
                    <div class="space-y-2 text-sm text-slate-600 mb-4">
                        <div class="flex items-center gap-2">
                            <i class="ph ph-user text-slate-400"></i>
                            <span x-text="diocese.bishop"></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="ph ph-envelope text-slate-400"></i>
                            <span x-text="diocese.email"></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="ph ph-phone text-slate-400"></i>
                            <span x-text="diocese.phone"></span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4 mb-4 text-center">
                        <div class="bg-slate-50 rounded-lg p-3">
                            <div class="text-lg font-bold text-slate-900" x-text="diocese.parishes"></div>
                            <div class="text-xs text-slate-600">Parishes</div>
                        </div>
                        <div class="bg-slate-50 rounded-lg p-3">
                            <div class="text-lg font-bold text-slate-900" x-text="diocese.groups"></div>
                            <div class="text-xs text-slate-600">Groups</div>
                        </div>
                        <div class="bg-slate-50 rounded-lg p-3">
                            <div class="text-lg font-bold text-slate-900" x-text="(diocese.members / 1000).toFixed(1) + 'K'"></div>
                            <div class="text-xs text-slate-600">Members</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2">
                        <a :href="'/admin/parish?diocese=' + diocese.id" class="flex-1 bg-purple-600 text-white px-3 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm font-medium text-center">
                            View Parishes
                        </a>
                        <button class="text-purple-600 hover:text-purple-900">
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

    <!-- Add Diocese Modal -->
    <div x-show="showDioceseModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Add New Diocese</h3>
                    <button @click="showDioceseModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Diocese Name</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter diocese name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Bishop Name</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter bishop name">
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
                        <button type="button" @click="showDioceseModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Add Diocese
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
