@extends('layouts.admin')

@section('title', 'Reports & Analytics')

@section('page-title', 'Reports & Analytics')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'overview',
    dateRange: '30days',
    reports: [
        { id: 1, name: 'Monthly Activity Report', type: 'activity', generated: '2026-03-30', size: '2.4 MB', format: 'PDF' },
        { id: 2, name: 'Donations Summary Q1 2026', type: 'financial', generated: '2026-03-28', size: '1.8 MB', format: 'Excel' },
        { id: 3, name: 'Event Registration Report', type: 'events', generated: '2026-03-25', size: '3.1 MB', format: 'PDF' },
        { id: 4, name: 'Member Growth Analysis', type: 'analytics', generated: '2026-03-20', size: '1.2 MB', format: 'PDF' }
    ]
}">
    <!-- Reports Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Reports & Analytics</h1>
            <p class="text-slate-600">Generate reports and analyze system performance metrics</p>
        </div>
        <div class="flex items-center gap-3">
            <select x-model="dateRange" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                <option value="7days">Last 7 Days</option>
                <option value="30days">Last 30 Days</option>
                <option value="90days">Last 90 Days</option>
                <option value="1year">Last Year</option>
            </select>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Generate Report
            </button>
        </div>
    </div>

    <!-- Analytics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">2,847</h3>
            <p class="text-sm text-slate-600">Active Members</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500">+12%</span>
                <span class="text-slate-500 ml-1">vs last month</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-currency-btz text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Revenue</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">TSh 11.4M</h3>
            <p class="text-sm text-slate-600">Total Donations</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500">+24%</span>
                <span class="text-slate-500 ml-1">vs last month</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-calendar text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Events</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">24</h3>
            <p class="text-sm text-slate-600">Total Events</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500">+8%</span>
                <span class="text-slate-500 ml-1">vs last month</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-globe text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Engagement</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">78%</h3>
            <p class="text-sm text-slate-600">Participation Rate</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500">+5%</span>
                <span class="text-slate-500 ml-1">vs last month</span>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid gap-6 md:grid-cols-2 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <h3 class="text-lg font-semibold text-slate-900 mb-4">Member Growth Trend</h3>
            <div class="h-64 bg-slate-100 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <i class="ph ph-chart-line text-4xl text-slate-400 mb-2"></i>
                    <p class="text-slate-600">Chart visualization would go here</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <h3 class="text-lg font-semibold text-slate-900 mb-4">Revenue Distribution</h3>
            <div class="h-64 bg-slate-100 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <i class="ph ph-chart-pie text-4xl text-slate-400 mb-2"></i>
                    <p class="text-slate-600">Pie chart visualization would go here</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs Navigation -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200">
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button @click="activeTab = 'overview'" 
                        :class="activeTab === 'overview' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-chart-line mr-2"></i>
                    Overview
                </button>
                <button @click="activeTab = 'reports'" 
                        :class="activeTab === 'reports' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-file-text mr-2"></i>
                    Generated Reports
                </button>
                <button @click="activeTab = 'analytics'" 
                        :class="activeTab === 'analytics' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-chart-bar mr-2"></i>
                    Detailed Analytics
                </button>
                <button @click="activeTab = 'exports'" 
                        :class="activeTab === 'exports' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-download mr-2"></i>
                    Data Exports
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- Overview Tab -->
            <div x-show="activeTab === 'overview'" x-cloak>
                <div class="grid gap-6 md:grid-cols-3">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6">
                        <h4 class="font-semibold text-blue-900 mb-2">Registration Statistics</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-blue-700">New Registrations</span>
                                <span class="font-medium text-blue-900">342</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-700">Pending Approval</span>
                                <span class="font-medium text-blue-900">28</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-700">Conversion Rate</span>
                                <span class="font-medium text-blue-900">87%</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6">
                        <h4 class="font-semibold text-green-900 mb-2">Donation Analytics</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-green-700">Average Donation</span>
                                <span class="font-medium text-green-900">TSh 45,000</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-green-700">Recurring Donors</span>
                                <span class="font-medium text-green-900">156</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-green-700">Campaign Success</span>
                                <span class="font-medium text-green-900">92%</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-6">
                        <h4 class="font-semibold text-purple-900 mb-2">Engagement Metrics</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-purple-700">Event Attendance</span>
                                <span class="font-medium text-purple-900">78%</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-purple-700">Content Views</span>
                                <span class="font-medium text-purple-900">12.4K</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-purple-700">Social Shares</span>
                                <span class="font-medium text-purple-900">892</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Generated Reports Tab -->
            <div x-show="activeTab === 'reports'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Generated Reports</h3>
                    <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                        <i class="ph ph-plus"></i>
                        New Report
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Report Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Generated</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Size</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Format</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200">
                            <template x-for="report in reports" :key="report.id">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900" x-text="report.name"></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800" x-text="report.type"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500" x-text="report.generated"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="report.size"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="report.format"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-purple-600 hover:text-purple-900 mr-3">Download</button>
                                        <button class="text-slate-600 hover:text-slate-900 mr-3">View</button>
                                        <button class="text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Detailed Analytics Tab -->
            <div x-show="activeTab === 'analytics'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-chart-bar text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Detailed Analytics</h3>
                    <p class="text-slate-600">Comprehensive analytics and insights dashboard</p>
                </div>
            </div>

            <!-- Data Exports Tab -->
            <div x-show="activeTab === 'exports'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-download text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Data Exports</h3>
                    <p class="text-slate-600">Export system data in various formats</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
