@extends('layouts.admin')

@section('title', 'Donations Management')

@section('page-title', 'Donations Management')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'overview',
    searchQuery: '',
    donations: [
        { id: 1, donor: 'John Michael', amount: 50000, type: 'one-time', method: 'mobile', date: '2026-03-30', status: 'completed', campaign: 'Easter Conference 2026' },
        { id: 2, donor: 'Sarah Kimani', amount: 25000, type: 'monthly', method: 'bank', date: '2026-03-29', status: 'completed', campaign: 'General Support' },
        { id: 3, donor: 'Robert Chen', amount: 100000, type: 'one-time', method: 'card', date: '2026-03-28', status: 'pending', campaign: 'Building Fund' },
        { id: 4, donor: 'Grace Mbeki', amount: 75000, type: 'recurring', method: 'mobile', date: '2026-03-27', status: 'completed', campaign: 'Youth Programs' },
        { id: 5, donor: 'Michael Johnson', amount: 150000, type: 'one-time', method: 'bank', date: '2026-03-26', status: 'completed', campaign: 'Easter Conference 2026' }
    ],
    campaigns: [
        { id: 1, name: 'Easter Conference 2026', goal: 5000000, raised: 3250000, donors: 125, endDate: '2026-04-05' },
        { id: 2, name: 'Building Fund', goal: 10000000, raised: 6750000, donors: 89, endDate: '2026-12-31' },
        { id: 3, name: 'Youth Programs', goal: 2000000, raised: 1450000, donors: 67, endDate: '2026-06-30' }
    ]
}">
    <!-- Donations Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Donations Management</h1>
            <p class="text-slate-600">Track donations, manage campaigns, and generate financial reports</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export Report
            </button>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-plus"></i>
                New Campaign
            </button>
        </div>
    </div>

    <!-- Donation Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-currency-btz text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">This Month</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">TSh 11.4M</h3>
            <p class="text-sm text-slate-600">Total Donations</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="donations.length"></h3>
            <p class="text-sm text-slate-600">Donors</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-trend-up text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Growth</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">+24%</h3>
            <p class="text-sm text-slate-600">vs Last Month</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-target text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Goal</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">68%</h3>
            <p class="text-sm text-slate-600">Campaign Progress</p>
        </div>
    </div>

    <!-- Tabs Navigation -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 mb-6">
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button @click="activeTab = 'overview'" 
                        :class="activeTab === 'overview' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-chart-line mr-2"></i>
                    Overview
                </button>
                <button @click="activeTab = 'donations'" 
                        :class="activeTab === 'donations' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-currency-btz mr-2"></i>
                    Donations
                </button>
                <button @click="activeTab = 'campaigns'" 
                        :class="activeTab === 'campaigns' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-target mr-2"></i>
                    Campaigns
                </button>
                <button @click="activeTab = 'donors'" 
                        :class="activeTab === 'donors' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-users mr-2"></i>
                    Donors
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- Overview Tab -->
            <div x-show="activeTab === 'overview'" x-cloak>
                <div class="grid gap-6 md:grid-cols-2">
                    <template x-for="campaign in campaigns" :key="campaign.id">
                        <div class="border border-slate-200 rounded-lg p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-lg font-semibold text-slate-900" x-text="campaign.name"></h4>
                                <span class="text-sm text-slate-500" x-text="campaign.endDate"></span>
                            </div>
                            <div class="mb-4">
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="text-slate-600">Progress</span>
                                    <span class="font-medium" x-text="Math.round((campaign.raised / campaign.goal) * 100) + '%'"></span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" :style="'width: ' + (campaign.raised / campaign.goal) * 100 + '%'"></div>
                                </div>
                            </div>
                            <div class="flex justify-between text-sm">
                                <div>
                                    <span class="text-slate-600">Raised: </span>
                                    <span class="font-medium" x-text="'TSh ' + (campaign.raised / 1000000).toFixed(1) + 'M'"></span>
                                </div>
                                <div>
                                    <span class="text-slate-600">Goal: </span>
                                    <span class="font-medium" x-text="'TSh ' + (campaign.goal / 1000000).toFixed(1) + 'M'"></span>
                                </div>
                            </div>
                            <div class="mt-3 text-sm text-slate-600">
                                <span x-text="campaign.donors"></span> donors
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Donations Tab -->
            <div x-show="activeTab === 'donations'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Recent Donations</h3>
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <input type="text" 
                                   x-model="searchQuery" 
                                   placeholder="Search donations..." 
                                   class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Donor</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Amount</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Method</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Campaign</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200">
                            <template x-for="donation in donations.filter(d => d.donor.toLowerCase().includes(searchQuery.toLowerCase()))" :key="donation.id">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900" x-text="donation.donor"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="'TSh ' + donation.amount.toLocaleString()"></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800" x-text="donation.type"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="donation.method"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="donation.campaign"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500" x-text="donation.date"></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
                                              :class="donation.status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                                              x-text="donation.status"></span>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Campaigns Tab -->
            <div x-show="activeTab === 'campaigns'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-target text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Campaign Management</h3>
                    <p class="text-slate-600">Create and manage fundraising campaigns</p>
                </div>
            </div>

            <!-- Donors Tab -->
            <div x-show="activeTab === 'donors'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-users text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Donor Management</h3>
                    <p class="text-slate-600">Manage donor information and communication preferences</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
