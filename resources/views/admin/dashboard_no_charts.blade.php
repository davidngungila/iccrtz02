@extends('layouts.admin')

@section('title', 'Advanced Dashboard')

@section('page-title', 'Advanced Analytics Dashboard')

@section('content')
<div class="p-6" x-data="{ 
    activePeriod: '30days',
    refreshInterval: null,
    lastRefresh: new Date(),
    autoRefresh: false,
    dashboardData: {
        overview: {
            totalMembers: 2847,
            activeMembers: 2234,
            newMembersThisMonth: 342,
            growthRate: 12.4,
            totalEvents: 24,
            liveEvents: 1,
            upcomingEvents: 8,
            totalDonations: 11400000,
            donationGrowth: 24.3,
            totalGroups: 1247,
            activeGroups: 1123,
            totalDioceses: 28,
            totalParishes: 342
        },
        members: {
            byDiocese: [
                { name: 'Archdiocese of Dar es Salaam', members: 12500, growth: 15.2, color: '#8b5cf6' },
                { name: 'Archdiocese of Mbeya', members: 8900, growth: 12.8, color: '#3b82f6' },
                { name: 'Diocese of Arusha', members: 7800, growth: 10.5, color: '#10b981' },
                { name: 'Diocese of Dodoma', members: 5200, growth: 8.9, color: '#f59e0b' },
                { name: 'Diocese of Mwanza', members: 6500, growth: 11.3, color: '#ef4444' }
            ],
            byAge: [
                { range: '18-25', count: 892, percentage: 31.3 },
                { range: '26-35', count: 1024, percentage: 36.0 },
                { range: '36-45', count: 567, percentage: 19.9 },
                { range: '46-55', count: 234, percentage: 8.2 },
                { range: '56+', count: 130, percentage: 4.6 }
            ],
            byGender: {
                male: 1456,
                female: 1391
            },
            registrations: [
                { date: '2026-03-01', count: 45 },
                { date: '2026-03-07', count: 62 },
                { date: '2026-03-14', count: 78 },
                { date: '2026-03-21', count: 89 },
                { date: '2026-03-28', count: 68 }
            ]
        },
        events: {
            upcoming: [
                { id: 1, name: 'International Easter Conference 2026', date: '2026-03-31', type: 'conference', registrations: 1250, capacity: 5000, status: 'live' },
                { id: 2, name: 'Youth Leadership Summit', date: '2026-04-15', type: 'summit', registrations: 450, capacity: 500, status: 'upcoming' },
                { id: 3, name: 'Women\'s Empowerment Workshop', date: '2026-04-22', type: 'workshop', registrations: 120, capacity: 150, status: 'upcoming' }
            ],
            performance: [
                { month: 'Jan', events: 4, attendance: 2340, revenue: 2400000 },
                { month: 'Feb', events: 6, attendance: 3120, revenue: 3200000 },
                { month: 'Mar', events: 8, attendance: 4560, revenue: 5800000 }
            ],
            categories: [
                { name: 'Conference', count: 3, revenue: 4500000 },
                { name: 'Workshop', count: 5, revenue: 1200000 },
                { name: 'Service', count: 8, revenue: 0 },
                { name: 'Summit', count: 2, revenue: 2800000 },
                { name: 'Reunion', count: 1, revenue: 750000 }
            ]
        },
        donations: {
            monthly: [
                { month: 'Jan', amount: 2400000, donors: 156 },
                { month: 'Feb', amount: 3200000, donors: 189 },
                { month: 'Mar', amount: 5800000, donors: 234 }
            ],
            campaigns: [
                { name: 'Easter Conference 2026', goal: 5000000, raised: 3250000, donors: 125, endDate: '2026-04-05' },
                { name: 'Building Fund', goal: 10000000, raised: 6750000, donors: 89, endDate: '2026-12-31' },
                { name: 'Youth Programs', goal: 2000000, raised: 1450000, donors: 67, endDate: '2026-06-30' }
            ],
            methods: {
                mobile: 45.6,
                bank: 32.1,
                card: 18.3,
                cash: 4.0
            }
        },
        engagement: {
            contentViews: 12456,
            socialShares: 892,
            websiteVisits: 15678,
            avgSessionDuration: '4:32',
            bounceRate: 32.4,
            topPages: [
                { page: 'Easter Conference Registration', views: 4567, conversion: 78.5 },
                { page: 'Youth Ministry', views: 2341, conversion: 45.2 },
                { page: 'Donations', views: 1876, conversion: 23.4 },
                { page: 'Events Calendar', views: 1563, conversion: 67.8 }
            ]
        },
        system: {
            serverUptime: 99.8,
            responseTime: 245,
            errorRate: 0.2,
            storageUsed: 67.3,
            bandwidth: 1245,
            lastBackup: '2026-03-30 02:00 AM',
            securityEvents: 2,
            activeUsers: 47
        }
    },
    startAutoRefresh() {
        if (this.autoRefresh) {
            this.refreshInterval = setInterval(() => {
                this.lastRefresh = new Date();
                // Refresh data logic here
            }, 30000); // Refresh every 30 seconds
        }
    },
    stopAutoRefresh() {
        if (this.refreshInterval) {
            clearInterval(this.refreshInterval);
            this.refreshInterval = null;
        }
    },
    toggleAutoRefresh() {
        this.autoRefresh = !this.autoRefresh;
        if (this.autoRefresh) {
            this.startAutoRefresh();
        } else {
            this.stopAutoRefresh();
        }
    }
}" x-init="startAutoRefresh()">
    <!-- Advanced Dashboard Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Advanced Analytics Dashboard</h1>
            <p class="text-slate-600">Real-time insights and comprehensive analytics for ICCRTZ operations</p>
            <div class="flex items-center gap-4 mt-2 text-sm text-slate-500">
                <span class="flex items-center gap-1">
                    <i class="ph ph-clock"></i>
                    Last updated: <span x-text="lastRefresh.toLocaleTimeString()"></span>
                </span>
                <button @click="toggleAutoRefresh()" 
                        :class="autoRefresh ? 'bg-green-100 text-green-700' : 'bg-slate-100 text-slate-700'"
                        class="px-3 py-1 rounded-full text-sm font-medium transition-all">
                    <i class="ph ph-arrow-clockwise mr-1"></i>
                    <span x-text="autoRefresh ? 'Auto-refresh ON' : 'Auto-refresh OFF'"></span>
                </button>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <select x-model="activePeriod" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                <option value="7days">Last 7 Days</option>
                <option value="30days">Last 30 Days</option>
                <option value="90days">Last 90 Days</option>
                <option value="1year">Last Year</option>
            </select>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export Report
            </button>
        </div>
    </div>

    <!-- Key Performance Indicators -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-4 mb-8">
        <!-- Total Members -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition-all">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-white text-xl"></i>
                </div>
                <span class="text-xs text-slate-500 font-medium">TOTAL</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="dashboardData.overview.totalMembers.toLocaleString()"></h3>
            <p class="text-sm text-slate-600 mb-2">Total Members</p>
            <div class="flex items-center justify-between text-xs">
                <span class="text-green-600 font-medium flex items-center gap-1">
                    <i class="ph ph-trend-up"></i>
                    <span x-text="dashboardData.overview.growthRate + '%'"></span>
                </span>
                <span class="text-slate-500">Growth Rate</span>
            </div>
        </div>

        <!-- Active Members -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition-all">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center">
                    <i class="ph ph-user-check text-white text-xl"></i>
                </div>
                <span class="text-xs text-slate-500 font-medium">ACTIVE</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="dashboardData.overview.activeMembers.toLocaleString()"></h3>
            <p class="text-sm text-slate-600 mb-2">Active Members</p>
            <div class="flex items-center justify-between text-xs">
                <span class="text-blue-600 font-medium" x-text="Math.round((dashboardData.overview.activeMembers / dashboardData.overview.totalMembers) * 100) + '%'"></span>
                <span class="text-slate-500">Activation Rate</span>
            </div>
        </div>

        <!-- Total Events -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition-all">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                    <i class="ph ph-calendar text-white text-xl"></i>
                </div>
                <span class="text-xs text-slate-500 font-medium">EVENTS</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="dashboardData.overview.totalEvents"></h3>
            <p class="text-sm text-slate-600 mb-2">Total Events</p>
            <div class="flex items-center justify-between text-xs">
                <span class="text-red-600 font-medium flex items-center gap-1">
                    <span class="w-2 h-2 bg-red-600 rounded-full animate-pulse"></span>
                    <span x-text="dashboardData.overview.liveEvents + ' Live'"></span>
                </span>
                <span class="text-slate-500">Status</span>
            </div>
        </div>

        <!-- Total Donations -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition-all">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center">
                    <i class="ph ph-currency-btz text-white text-xl"></i>
                </div>
                <span class="text-xs text-slate-500 font-medium">REVENUE</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (dashboardData.overview.totalDonations / 1000000).toFixed(1) + 'M'"></h3>
            <p class="text-sm text-slate-600 mb-2">Total Donations</p>
            <div class="flex items-center justify-between text-xs">
                <span class="text-green-600 font-medium flex items-center gap-1">
                    <i class="ph ph-trend-up"></i>
                    <span x-text="dashboardData.overview.donationGrowth + '%'"></span>
                </span>
                <span class="text-slate-500">Growth</span>
            </div>
        </div>

        <!-- Total Groups -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition-all">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-full flex items-center justify-center">
                    <i class="ph ph-users-three text-white text-xl"></i>
                </div>
                <span class="text-xs text-slate-500 font-medium">GROUPS</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="dashboardData.overview.totalGroups.toLocaleString()"></h3>
            <p class="text-sm text-slate-600 mb-2">Total Groups</p>
            <div class="flex items-center justify-between text-xs">
                <span class="text-blue-600 font-medium" x-text="Math.round((dashboardData.overview.activeGroups / dashboardData.overview.totalGroups) * 100) + '%'"></span>
                <span class="text-slate-500">Active Rate</span>
            </div>
        </div>

        <!-- Organizational Structure -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition-all">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-full flex items-center justify-center">
                    <i class="ph ph-building text-white text-xl"></i>
                </div>
                <span class="text-xs text-slate-500 font-medium">STRUCTURE</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="dashboardData.overview.totalDioceses"></h3>
            <p class="text-sm text-slate-600 mb-2">Dioceses</p>
            <div class="flex items-center justify-between text-xs">
                <span class="text-slate-600 font-medium" x-text="dashboardData.overview.totalParishes + ' Parishes'"></span>
                <span class="text-slate-500">Locations</span>
            </div>
        </div>
    </div>

    <!-- Live Event Alert -->
    <template x-for="event in dashboardData.events.upcoming.filter(e => e.status === 'live')" :key="event.id">
        <div class="bg-gradient-to-r from-red-500 to-pink-600 text-white rounded-xl p-6 mb-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center animate-pulse">
                        <i class="ph ph-broadcast text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">🔴 <span x-text="event.name"></span></h3>
                        <p class="text-red-100">
                            <span x-text="event.registrations + ' attendees • ' + event.type"></span> • 
                            Live Now
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <a href="/admin/events" class="bg-white/20 hover:bg-white/30 px-4 py-2 rounded-lg font-medium transition-all">
                        <i class="ph ph-eye mr-2"></i> Manage Event
                    </a>
                    <a href="https://youtu.be/PgIJm42OJhw?list=TLPQMzEwMzIwMjbdpT4N3Pb2kA" target="_blank" class="bg-white/20 hover:bg-white/30 px-4 py-2 rounded-lg font-medium transition-all">
                        <i class="ph ph-youtube-logo mr-2"></i> Watch Live
                    </a>
                </div>
            </div>
        </div>
    </template>

    <!-- Advanced Analytics Grid -->
    <div class="grid gap-6 lg:grid-cols-3 mb-8">
        <!-- Member Analytics -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-900">Member Analytics</h3>
                <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option>Last 30 Days</option>
                    <option>Last 90 Days</option>
                    <option>Last Year</option>
                </select>
            </div>

            <!-- Registration Trend Chart -->
            <div class="mb-6">
                <h4 class="text-sm font-medium text-slate-700 mb-3">Registration Trend</h4>
                <div class="h-48 bg-slate-100 rounded-lg flex items-center justify-center">
                    <div class="text-center">
                        <i class="ph ph-chart-line text-4xl text-slate-400 mb-2"></i>
                        <p class="text-slate-600">Registration trend visualization</p>
                    </div>
                </div>
            </div>

            <!-- Member Demographics -->
            <div class="grid gap-6 md:grid-cols-2">
                <!-- By Diocese -->
                <div>
                    <h4 class="text-sm font-medium text-slate-700 mb-3">Members by Diocese</h4>
                    <div class="space-y-2">
                        <template x-for="diocese in dashboardData.members.byDiocese" :key="diocese.name">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 flex-1">
                                    <div class="w-3 h-3 rounded-full" :style="'background-color: ' + diocese.color"></div>
                                    <span class="text-sm text-slate-700 truncate" x-text="diocese.name"></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm font-medium text-slate-900" x-text="diocese.members.toLocaleString()"></span>
                                    <span class="text-xs text-green-600" x-text="'+' + diocese.growth + '%'"></span>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- By Age Group -->
                <div>
                    <h4 class="text-sm font-medium text-slate-700 mb-3">Age Distribution</h4>
                    <div class="space-y-2">
                        <template x-for="age in dashboardData.members.byAge" :key="age.range">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-slate-700" x-text="age.range + ' years'"></span>
                                <div class="flex items-center gap-2">
                                    <div class="w-24 bg-slate-200 rounded-full h-2">
                                        <div class="bg-purple-600 h-2 rounded-full" :style="'width: ' + age.percentage + '%'"></div>
                                    </div>
                                    <span class="text-sm font-medium text-slate-900" x-text="age.percentage + '%'"></span>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Gender Distribution -->
            <div class="mt-6 pt-6 border-t border-slate-200">
                <h4 class="text-sm font-medium text-slate-700 mb-3">Gender Distribution</h4>
                <div class="flex items-center gap-6">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-slate-700">Male</span>
                            <span class="text-sm font-medium text-slate-900" x-text="dashboardData.members.byGender.male.toLocaleString()"></span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" :style="'width: ' + (dashboardData.members.byGender.male / (dashboardData.members.byGender.male + dashboardData.members.byGender.female) * 100) + '%'"></div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-slate-700">Female</span>
                            <span class="text-sm font-medium text-slate-900" x-text="dashboardData.members.byGender.female.toLocaleString()"></span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2">
                            <div class="bg-pink-600 h-2 rounded-full" :style="'width: ' + (dashboardData.members.byGender.female / (dashboardData.members.byGender.male + dashboardData.members.byGender.female) * 100) + '%'"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity Feed -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-900">Recent Activity</h3>
                <button class="text-purple-600 hover:text-purple-900 text-sm font-medium">View All</button>
            </div>
            <div class="space-y-4">
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="ph ph-user-plus text-green-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-slate-900">New member registration</p>
                        <p class="text-xs text-slate-600">John Michael joined from Archdiocese of Dar es Salaam</p>
                        <p class="text-xs text-slate-400 mt-1">2 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="ph ph-calendar text-blue-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-slate-900">Event registration</p>
                        <p class="text-xs text-slate-600">45 people registered for Youth Leadership Summit</p>
                        <p class="text-xs text-slate-400 mt-1">15 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="ph ph-currency-btz text-yellow-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-slate-900">Donation received</p>
                        <p class="text-xs text-slate-600">TSh 50,000 from Sarah Kimani for Easter Conference</p>
                        <p class="text-xs text-slate-400 mt-1">1 hour ago</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="ph ph-users-three text-purple-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-slate-900">New group created</p>
                        <p class="text-xs text-slate-600">Media Team established at St. Joseph's Cathedral</p>
                        <p class="text-xs text-slate-400 mt-1">2 hours ago</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="ph ph-broadcast text-red-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-slate-900">Live event started</p>
                        <p class="text-xs text-slate-600">International Easter Conference 2026 is now live</p>
                        <p class="text-xs text-slate-400 mt-1">3 hours ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Financial Analytics -->
    <div class="grid gap-6 lg:grid-cols-2 mb-8">
        <!-- Donation Analytics -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-900">Financial Analytics</h3>
                <div class="flex items-center gap-2 text-sm">
                    <span class="text-green-600 font-medium flex items-center gap-1">
                        <i class="ph ph-trend-up"></i>
                        <span x-text="dashboardData.overview.donationGrowth + '%'"></span>
                    </span>
                    <span class="text-slate-500">vs last month</span>
                </div>
            </div>

            <!-- Monthly Donation Chart -->
            <div class="mb-6">
                <h4 class="text-sm font-medium text-slate-700 mb-3">Monthly Donations</h4>
                <div class="h-48 bg-slate-100 rounded-lg flex items-center justify-center">
                    <div class="text-center">
                        <i class="ph ph-chart-bar text-4xl text-slate-400 mb-2"></i>
                        <p class="text-slate-600">Monthly donation trend</p>
                    </div>
                </div>
            </div>

            <!-- Campaign Performance -->
            <div>
                <h4 class="text-sm font-medium text-slate-700 mb-3">Active Campaigns</h4>
                <div class="space-y-3">
                    <template x-for="campaign in dashboardData.donations.campaigns" :key="campaign.name">
                        <div class="border border-slate-200 rounded-lg p-3">
                            <div class="flex items-center justify-between mb-2">
                                <h5 class="font-medium text-slate-900 text-sm" x-text="campaign.name"></h5>
                                <span class="text-xs text-slate-500" x-text="'Ends: ' + campaign.endDate"></span>
                            </div>
                            <div class="mb-2">
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-600">Progress</span>
                                    <span class="font-medium" x-text="Math.round((campaign.raised / campaign.goal) * 100) + '%'"></span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" :style="'width: ' + (campaign.raised / campaign.goal) * 100 + '%'"></div>
                                </div>
                            </div>
                            <div class="flex justify-between text-xs text-slate-600">
                                <span x-text="'TSh ' + (campaign.raised / 1000000).toFixed(1) + 'M raised'"></span>
                                <span x-text="campaign.donors + ' donors'"></span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <!-- Event Performance -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-900">Event Performance</h3>
                <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option>Last Quarter</option>
                    <option>Last Month</option>
                    <option>Last Year</option>
                </select>
            </div>

            <!-- Event Categories -->
            <div class="mb-6">
                <h4 class="text-sm font-medium text-slate-700 mb-3">Revenue by Category</h4>
                <div class="space-y-2">
                    <template x-for="category in dashboardData.events.categories" :key="category.name">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-700" x-text="category.name"></span>
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-medium text-slate-900" x-text="'TSh ' + (category.revenue / 1000000).toFixed(1) + 'M'"></span>
                                <span class="text-xs text-slate-500" x-text="category.count + ' events'"></span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div>
                <h4 class="text-sm font-medium text-slate-700 mb-3">Upcoming Events</h4>
                <div class="space-y-3">
                    <template x-for="event in dashboardData.events.upcoming.filter(e => e.status === 'upcoming')" :key="event.id">
                        <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                            <div>
                                <h5 class="font-medium text-slate-900 text-sm" x-text="event.name"></h5>
                                <div class="text-xs text-slate-600">
                                    <span x-text="event.date"></span> • 
                                    <span x-text="event.type"></span>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-medium text-slate-900" x-text="event.registrations + '/' + event.capacity"></div>
                                <div class="text-xs text-slate-600">Registered</div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <!-- System Performance & Engagement -->
    <div class="grid gap-6 lg:grid-cols-2">
        <!-- System Performance -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-900">System Performance</h3>
                <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Healthy</span>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div class="bg-slate-50 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-slate-600">Server Uptime</span>
                        <span class="text-sm font-medium text-slate-900" x-text="dashboardData.system.serverUptime + '%'"></span>
                    </div>
                    <div class="w-full bg-slate-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" :style="'width: ' + dashboardData.system.serverUptime + '%'"></div>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-slate-600">Response Time</span>
                        <span class="text-sm font-medium text-slate-900" x-text="dashboardData.system.responseTime + 'ms'"></span>
                    </div>
                    <div class="w-full bg-slate-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" :style="'width: ' + Math.min((dashboardData.system.responseTime / 500) * 100, 100) + '%'"></div>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-slate-600">Storage Used</span>
                        <span class="text-sm font-medium text-slate-900" x-text="dashboardData.system.storageUsed + '%'"></span>
                    </div>
                    <div class="w-full bg-slate-200 rounded-full h-2">
                        <div class="bg-yellow-600 h-2 rounded-full" :style="'width: ' + dashboardData.system.storageUsed + '%'"></div>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-slate-600">Error Rate</span>
                        <span class="text-sm font-medium text-slate-900" x-text="dashboardData.system.errorRate + '%'"></span>
                    </div>
                    <div class="w-full bg-slate-200 rounded-full h-2">
                        <div class="bg-red-600 h-2 rounded-full" :style="'width: ' + (dashboardData.system.errorRate * 10) + '%'"></div>
                    </div>
                </div>
            </div>

            <div class="mt-6 pt-6 border-t border-slate-200">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-slate-600">Last Backup</span>
                    <span class="text-slate-900" x-text="dashboardData.system.lastBackup"></span>
                </div>
                <div class="flex items-center justify-between text-sm mt-2">
                    <span class="text-slate-600">Active Users</span>
                    <span class="text-slate-900" x-text="dashboardData.system.activeUsers"></span>
                </div>
                <div class="flex items-center justify-between text-sm mt-2">
                    <span class="text-slate-600">Security Events</span>
                    <span class="text-red-600 font-medium" x-text="dashboardData.system.securityEvents + ' today'"></span>
                </div>
            </div>
        </div>

        <!-- Engagement Metrics -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-900">Engagement Metrics</h3>
                <button class="text-purple-600 hover:text-purple-900 text-sm font-medium">View Details</button>
            </div>

            <div class="grid gap-4 md:grid-cols-2 mb-6">
                <div class="text-center">
                    <div class="text-2xl font-bold text-slate-900" x-text="dashboardData.engagement.contentViews.toLocaleString()"></div>
                    <div class="text-sm text-slate-600">Content Views</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-slate-900" x-text="dashboardData.engagement.socialShares.toLocaleString()"></div>
                    <div class="text-sm text-slate-600">Social Shares</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-slate-900" x-text="dashboardData.engagement.websiteVisits.toLocaleString()"></div>
                    <div class="text-sm text-slate-600">Website Visits</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-slate-900" x-text="dashboardData.engagement.avgSessionDuration"></div>
                    <div class="text-sm text-slate-600">Avg Session</div>
                </div>
            </div>

            <!-- Top Performing Pages -->
            <div>
                <h4 class="text-sm font-medium text-slate-700 mb-3">Top Performing Pages</h4>
                <div class="space-y-2">
                    <template x-for="page in dashboardData.engagement.topPages" :key="page.page">
                        <div class="flex items-center justify-between p-2 bg-slate-50 rounded">
                            <div class="flex-1">
                                <div class="text-sm font-medium text-slate-900" x-text="page.page"></div>
                                <div class="text-xs text-slate-600" x-text="page.views.toLocaleString() + ' views'"></div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-medium text-green-600" x-text="page.conversion + '%'"></div>
                                <div class="text-xs text-slate-600">Conversion</div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
