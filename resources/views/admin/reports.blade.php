@extends('layouts.admin')

@section('title', 'Advanced Reports & Analytics')

@section('page-title', 'Advanced Reports & Analytics')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'overview',
    dateRange: '30days',
    refreshInterval: null,
    lastRefresh: new Date(),
    autoRefresh: false,
    charts: {},
    reports: [
        { id: 1, name: 'Monthly Activity Report', type: 'activity', generated: '2026-03-30', size: '2.4 MB', format: 'PDF', downloads: 45, status: 'completed' },
        { id: 2, name: 'Donations Summary Q1 2026', type: 'financial', generated: '2026-03-28', size: '1.8 MB', format: 'Excel', downloads: 32, status: 'completed' },
        { id: 3, name: 'Event Registration Report', type: 'events', generated: '2026-03-25', size: '3.1 MB', format: 'PDF', downloads: 28, status: 'completed' },
        { id: 4, name: 'Member Growth Analysis', type: 'analytics', generated: '2026-03-20', size: '1.2 MB', format: 'PDF', downloads: 19, status: 'completed' },
        { id: 5, name: 'Diocese Performance Report', type: 'organizational', generated: '2026-03-18', size: '2.8 MB', format: 'Excel', downloads: 15, status: 'completed' },
        { id: 6, name: 'Youth Engagement Statistics', type: 'engagement', generated: '2026-03-15', size: '1.5 MB', format: 'PDF', downloads: 22, status: 'completed' },
        { id: 7, name: 'Annual Financial Summary 2025', type: 'financial', generated: '2026-01-05', size: '4.2 MB', format: 'PDF', downloads: 89, status: 'completed' },
        { id: 8, name: 'Quarterly Review Q4 2025', type: 'comprehensive', generated: '2026-01-10', size: '3.5 MB', format: 'PDF', downloads: 67, status: 'completed' }
    ],
    analyticsData: {
        overview: {
            totalMembers: 2847,
            activeMembers: 2234,
            newMembersThisMonth: 342,
            memberGrowthRate: 12.4,
            totalDonations: 11400000,
            donationGrowth: 24.3,
            totalEvents: 24,
            eventGrowth: 8.2,
            engagementRate: 78.5,
            engagementGrowth: 5.1,
            avgSessionDuration: '4:32',
            bounceRate: 32.4
        },
        memberStats: {
            byDiocese: [
                { name: 'Archdiocese of Dar es Salaam', members: 12500, growth: 15.2, active: 11200 },
                { name: 'Archdiocese of Mbeya', members: 8900, growth: 12.8, active: 8100 },
                { name: 'Diocese of Arusha', members: 7800, growth: 10.5, active: 7200 },
                { name: 'Diocese of Dodoma', members: 5200, growth: 8.9, active: 4800 },
                { name: 'Diocese of Mwanza', members: 6500, growth: 11.3, active: 5900 }
            ],
            byAge: [
                { range: '18-25', count: 892, percentage: 31.3, growth: 18.5 },
                { range: '26-35', count: 1024, percentage: 36.0, growth: 14.2 },
                { range: '36-45', count: 567, percentage: 19.9, growth: 8.7 },
                { range: '46-55', count: 234, percentage: 8.2, growth: 5.3 },
                { range: '56+', count: 130, percentage: 4.6, growth: 2.1 }
            ],
            byGender: {
                male: 1456,
                female: 1391
            },
            monthlyGrowth: [
                { month: 'Jan', members: 2450, new: 180 },
                { month: 'Feb', members: 2650, new: 200 },
                { month: 'Mar', members: 2847, new: 197 }
            ]
        },
        financialStats: {
            monthlyDonations: [
                { month: 'Jan', amount: 2400000, donors: 156, avgDonation: 15385 },
                { month: 'Feb', amount: 3200000, donors: 189, avgDonation: 16931 },
                { month: 'Mar', amount: 5800000, donors: 234, avgDonation: 24786 }
            ],
            bySource: {
                online: 45.6,
                mobile: 32.1,
                bank: 15.3,
                cash: 7.0
            },
            byCampaign: [
                { name: 'Easter Conference 2026', raised: 3250000, goal: 5000000, donors: 125 },
                { name: 'Building Fund', raised: 6750000, goal: 10000000, donors: 89 },
                { name: 'Youth Programs', raised: 1450000, goal: 2000000, donors: 67 },
                { name: 'Mission Support', raised: 890000, goal: 1500000, donors: 45 }
            ],
            trends: [
                { date: '2026-01-01', amount: 85000 },
                { date: '2026-01-15', amount: 120000 },
                { date: '2026-02-01', amount: 95000 },
                { date: '2026-02-15', amount: 135000 },
                { date: '2026-03-01', amount: 110000 },
                { date: '2026-03-15', amount: 180000 }
            ]
        },
        eventStats: {
            byType: [
                { type: 'Conference', count: 3, attendance: 4560, revenue: 4500000 },
                { type: 'Workshop', count: 5, attendance: 1234, revenue: 1200000 },
                { type: 'Service', count: 8, attendance: 2340, revenue: 0 },
                { type: 'Summit', count: 2, attendance: 890, revenue: 2800000 },
                { type: 'Reunion', count: 1, attendance: 200, revenue: 750000 }
            ],
            monthly: [
                { month: 'Jan', events: 4, attendance: 2340, revenue: 2400000 },
                { month: 'Feb', events: 6, attendance: 3120, revenue: 3200000 },
                { month: 'Mar', events: 8, attendance: 4560, revenue: 5800000 }
            ],
            performance: [
                { name: 'International Easter Conference 2026', occupancy: 25, revenue: 37500000 },
                { name: 'Youth Leadership Summit', occupancy: 90, revenue: 6750000 },
                { name: 'Annual Thanksgiving Service', occupancy: 80, revenue: 0 },
                { name: 'Women\'s Empowerment Workshop', occupancy: 80, revenue: 1200000 },
                { name: 'Alumni Reunion 2026', occupancy: 67, revenue: 5000000 }
            ]
        },
        engagementStats: {
            websiteMetrics: {
                pageViews: 15678,
                uniqueVisitors: 8923,
                avgSessionDuration: '4:32',
                bounceRate: 32.4,
                pagesPerSession: 3.2
            },
            socialMetrics: {
                facebook: { followers: 4567, engagement: 8.5, growth: 12.3 },
                twitter: { followers: 2341, engagement: 6.2, growth: 8.7 },
                instagram: { followers: 3456, engagement: 12.8, growth: 15.6 },
                youtube: { subscribers: 1234, videos: 45, views: 45678 }
            },
            contentPerformance: [
                { page: 'Easter Conference Registration', views: 4567, conversions: 78.5, avgTime: '3:45' },
                { page: 'Youth Ministry', views: 2341, conversions: 45.2, avgTime: '2:30' },
                { page: 'Donations', views: 1876, conversions: 23.4, avgTime: '4:15' },
                { page: 'Events Calendar', views: 1563, conversions: 67.8, avgTime: '2:15' }
            ]
        }
    },
    initCharts() {
        this.$nextTick(() => {
            this.initMemberGrowthChart();
            this.initDonationChart();
            this.initEventChart();
            this.initDioceseChart();
            this.initAgeChart();
            this.initGenderChart();
            this.initRevenueChart();
            this.initEngagementChart();
            this.initPerformanceChart();
        });
    },
    initMemberGrowthChart() {
        const ctx = document.getElementById('memberGrowthChart');
        if (ctx) {
            this.charts.memberGrowth = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: this.analyticsData.memberStats.monthlyGrowth.map(m => m.month),
                    datasets: [{
                        label: 'Total Members',
                        data: this.analyticsData.memberStats.monthlyGrowth.map(m => m.members),
                        borderColor: '#8b5cf6',
                        backgroundColor: 'rgba(139, 92, 246, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }, {
                        label: 'New Members',
                        data: this.analyticsData.memberStats.monthlyGrowth.map(m => m.new),
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(0, 0, 0, 0.05)' }
                        },
                        x: {
                            grid: { display: false }
                        }
                    }
                }
            });
        }
    },
    initDonationChart() {
        const ctx = document.getElementById('donationChart');
        if (ctx) {
            this.charts.donation = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: this.analyticsData.financialStats.monthlyDonations.map(d => d.month),
                    datasets: [{
                        label: 'Donations (TSh)',
                        data: this.analyticsData.financialStats.monthlyDonations.map(d => d.amount),
                        backgroundColor: '#10b981'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(0, 0, 0, 0.05)' },
                            ticks: {
                                callback: function(value) {
                                    return 'TSh ' + (value / 1000000).toFixed(1) + 'M';
                                }
                            }
                        },
                        x: {
                            grid: { display: false }
                        }
                    }
                }
            });
        }
    },
    initEventChart() {
        const ctx = document.getElementById('eventChart');
        if (ctx) {
            this.charts.event = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: this.analyticsData.eventStats.byType.map(e => e.type),
                    datasets: [{
                        data: this.analyticsData.eventStats.byType.map(e => e.attendance),
                        backgroundColor: [
                            '#8b5cf6', '#3b82f6', '#10b981', '#f59e0b', '#ef4444'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    }
                }
            });
        }
    },
    initDioceseChart() {
        const ctx = document.getElementById('dioceseChart');
        if (ctx) {
            this.charts.diocese = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: this.analyticsData.memberStats.byDiocese.map(d => d.name.split(' ')[0]),
                    datasets: [{
                        label: 'Members',
                        data: this.analyticsData.memberStats.byDiocese.map(d => d.members),
                        backgroundColor: '#8b5cf6'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(0, 0, 0, 0.05)' }
                        },
                        x: {
                            grid: { display: false }
                        }
                    }
                }
            });
        }
    },
    initAgeChart() {
        const ctx = document.getElementById('ageChart');
        if (ctx) {
            this.charts.age = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: this.analyticsData.memberStats.byAge.map(a => a.range + ' years'),
                    datasets: [{
                        data: this.analyticsData.memberStats.byAge.map(a => a.count),
                        backgroundColor: [
                            '#8b5cf6', '#3b82f6', '#10b981', '#f59e0b', '#ef4444'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    }
                }
            });
        }
    },
    initGenderChart() {
        const ctx = document.getElementById('genderChart');
        if (ctx) {
            this.charts.gender = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Male', 'Female'],
                    datasets: [{
                        data: [this.analyticsData.memberStats.byGender.male, this.analyticsData.memberStats.byGender.female],
                        backgroundColor: ['#3b82f6', '#ec4899']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        }
    },
    initRevenueChart() {
        const ctx = document.getElementById('revenueChart');
        if (ctx) {
            this.charts.revenue = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: this.analyticsData.financialStats.trends.map(t => t.date),
                    datasets: [{
                        label: 'Daily Revenue (TSh)',
                        data: this.analyticsData.financialStats.trends.map(t => t.amount),
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(0, 0, 0, 0.05)' },
                            ticks: {
                                callback: function(value) {
                                    return 'TSh ' + (value / 1000).toFixed(0) + 'K';
                                }
                            }
                        },
                        x: {
                            grid: { display: false }
                        }
                    }
                }
            });
        }
    },
    initEngagementChart() {
        const ctx = document.getElementById('engagementChart');
        if (ctx) {
            this.charts.engagement = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: this.analyticsData.engagementStats.contentPerformance.map(c => c.page.length > 20 ? c.page.substring(0, 20) + '...' : c.page),
                    datasets: [{
                        label: 'Views',
                        data: this.analyticsData.engagementStats.contentPerformance.map(c => c.views),
                        backgroundColor: '#8b5cf6'
                    }, {
                        label: 'Conversion Rate %',
                        data: this.analyticsData.engagementStats.contentPerformance.map(c => c.conversions),
                        backgroundColor: '#10b981',
                        yAxisID: 'y1'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            position: 'left',
                            grid: { color: 'rgba(0, 0, 0, 0.05)' }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            grid: { display: false },
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        },
                        x: {
                            grid: { display: false }
                        }
                    }
                }
            });
        }
    },
    initPerformanceChart() {
        const ctx = document.getElementById('performanceChart');
        if (ctx) {
            this.charts.performance = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: this.analyticsData.eventStats.performance.map(p => p.name.length > 25 ? p.name.substring(0, 25) + '...' : p.name),
                    datasets: [{
                        label: 'Occupancy Rate %',
                        data: this.analyticsData.eventStats.performance.map(p => p.occupancy),
                        backgroundColor: '#8b5cf6'
                    }, {
                        label: 'Revenue (TSh)',
                        data: this.analyticsData.eventStats.performance.map(p => p.revenue),
                        backgroundColor: '#10b981',
                        yAxisID: 'y1'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            position: 'left',
                            grid: { color: 'rgba(0, 0, 0, 0.05)' },
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            grid: { display: false },
                            ticks: {
                                callback: function(value) {
                                    return 'TSh ' + (value / 1000000).toFixed(1) + 'M';
                                }
                            }
                        },
                        x: {
                            grid: { display: false }
                        }
                    }
                }
            });
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
    },
    generateReport(type) {
        // Simulate report generation
        const newReport = {
            id: this.reports.length + 1,
            name: `${type.charAt(0).toUpperCase() + type.slice(1)} Report ${new Date().toLocaleDateString()}`,
            type: type,
            generated: new Date().toISOString().split('T')[0],
            size: Math.random() * 3 + 1 + ' MB',
            format: 'PDF',
            downloads: 0,
            status: 'generating'
        };
        this.reports.unshift(newReport);
        
        // Simulate completion after 2 seconds
        setTimeout(() => {
            newReport.status = 'completed';
        }, 2000);
    },
    downloadReport(reportId) {
        const report = this.reports.find(r => r.id === reportId);
        if (report) {
            report.downloads++;
        }
    },
    deleteReport(reportId) {
        this.reports = this.reports.filter(r => r.id !== reportId);
    }
}" x-init="initCharts()" x-cloak>
    <!-- Reports Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Advanced Reports & Analytics</h1>
            <p class="text-slate-600">Comprehensive reporting system with real-time analytics and insights</p>
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

    <!-- Key Performance Indicators -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="analyticsData.overview.totalMembers.toLocaleString()"></h3>
            <p class="text-sm text-slate-600 mb-2">Active Members</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500" x-text="analyticsData.overview.memberGrowthRate + '%'"></span>
                <span class="text-slate-500 ml-1">growth</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-currency-btz text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Revenue</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (analyticsData.overview.totalDonations / 1000000).toFixed(1) + 'M'"></h3>
            <p class="text-sm text-slate-600 mb-2">Total Donations</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500" x-text="analyticsData.overview.donationGrowth + '%'"></span>
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
            <h3 class="text-2xl font-bold text-slate-900" x-text="analyticsData.overview.totalEvents"></h3>
            <p class="text-sm text-slate-600 mb-2">Total Events</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500" x-text="analyticsData.overview.eventGrowth + '%'"></span>
                <span class="text-slate-500 ml-1">growth</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-globe text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Engagement</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="analyticsData.overview.engagementRate + '%'"></h3>
            <p class="text-sm text-slate-600 mb-2">Participation Rate</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500" x-text="analyticsData.overview.engagementGrowth + '%'"></span>
                <span class="text-slate-500 ml-1">vs last month</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-chart-line text-pink-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Session</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="analyticsData.overview.avgSessionDuration"></h3>
            <p class="text-sm text-slate-600 mb-2">Avg Duration</p>
            <div class="mt-2 flex items-center text-sm">
                <span class="text-slate-600">Bounce: </span>
                <span class="text-slate-900" x-text="analyticsData.overview.bounceRate + '%'"></span>
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
                <div class="space-y-6">
                    <!-- Key Charts -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Member Growth Trend</h3>
                            <div class="h-64">
                                <canvas id="memberGrowthChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Monthly Donations</h3>
                            <div class="h-64">
                                <canvas id="donationChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Demographics -->
                    <div class="grid gap-6 md:grid-cols-3">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Members by Diocese</h3>
                            <div class="h-64">
                                <canvas id="dioceseChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Age Distribution</h3>
                            <div class="h-64">
                                <canvas id="ageChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Gender Distribution</h3>
                            <div class="h-64">
                                <canvas id="genderChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid gap-6 md:grid-cols-3">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6">
                            <h4 class="font-semibold text-blue-900 mb-2">Registration Statistics</h4>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-blue-700">New Registrations</span>
                                    <span class="font-medium text-blue-900" x-text="analyticsData.overview.newMembersThisMonth"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-blue-700">Active Members</span>
                                    <span class="font-medium text-blue-900" x-text="analyticsData.overview.activeMembers.toLocaleString()"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-blue-700">Growth Rate</span>
                                    <span class="font-medium text-blue-900" x-text="analyticsData.overview.memberGrowthRate + '%'"></span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-6">
                            <h4 class="font-semibold text-green-900 mb-2">Financial Overview</h4>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-green-700">Total Donations</span>
                                    <span class="font-medium text-green-900" x-text="'TSh ' + (analyticsData.overview.totalDonations / 1000000).toFixed(1) + 'M'"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-green-700">Growth Rate</span>
                                    <span class="font-medium text-green-900" x-text="analyticsData.overview.donationGrowth + '%'"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-green-700">Avg Donation</span>
                                    <span class="font-medium text-green-900">TSh 45,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-6">
                            <h4 class="font-semibold text-purple-900 mb-2">Engagement Metrics</h4>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-purple-700">Participation Rate</span>
                                    <span class="font-medium text-purple-900" x-text="analyticsData.overview.engagementRate + '%'"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-purple-700">Session Duration</span>
                                    <span class="font-medium text-purple-900" x-text="analyticsData.overview.avgSessionDuration"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-purple-700">Bounce Rate</span>
                                    <span class="font-medium text-purple-900" x-text="analyticsData.overview.bounceRate + '%'"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Generated Reports Tab -->
            <div x-show="activeTab === 'reports'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Generated Reports</h3>
                    <div class="flex items-center gap-3">
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Types</option>
                            <option>Activity</option>
                            <option>Financial</option>
                            <option>Events</option>
                            <option>Analytics</option>
                        </select>
                        <button @click="generateReport('activity')" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                            <i class="ph ph-plus"></i>
                            Generate Report
                        </button>
                    </div>
                </div>

                <!-- Report Stats -->
                <div class="grid gap-4 md:grid-cols-4 mb-6">
                    <div class="bg-slate-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-slate-900" x-text="reports.length"></div>
                        <div class="text-sm text-slate-600">Total Reports</div>
                    </div>
                    <div class="bg-green-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-green-900" x-text="reports.filter(r => r.status === 'completed').length"></div>
                        <div class="text-sm text-green-600">Completed</div>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-blue-900" x-text="reports.reduce((sum, r) => sum + r.downloads, 0)"></div>
                        <div class="text-sm text-blue-600">Total Downloads</div>
                    </div>
                    <div class="bg-purple-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-purple-900" x-text="reports.reduce((sum, r) => sum + parseFloat(r.size), 0).toFixed(1) + ' MB'"></div>
                        <div class="text-sm text-purple-600">Total Size</div>
                    </div>
                </div>

                <!-- Reports Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Report Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Generated</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Size</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Format</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Downloads</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
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
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="report.downloads"></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="report.status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                                              x-text="report.status"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button @click="downloadReport(report.id)" class="text-purple-600 hover:text-purple-900 mr-3">Download</button>
                                        <button class="text-slate-600 hover:text-slate-900 mr-3">View</button>
                                        <button @click="deleteReport(report.id)" class="text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Detailed Analytics Tab -->
            <div x-show="activeTab === 'analytics'" x-cloak>
                <div class="space-y-6">
                    <!-- Financial Analytics -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Revenue Trends</h3>
                            <div class="h-64">
                                <canvas id="revenueChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Donation Sources</h3>
                            <div class="space-y-4">
                                <template x-for="(value, source) in analyticsData.financialStats.bySource" :key="source">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-medium text-slate-900 capitalize" x-text="source"></span>
                                        <div class="flex items-center gap-2">
                                            <div class="w-24 bg-slate-200 rounded-full h-2">
                                                <div class="bg-green-600 h-2 rounded-full" :style="'width: ' + value + '%'"></div>
                                            </div>
                                            <span class="text-sm text-slate-600" x-text="value + '%'"></span>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- Campaign Performance -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">Campaign Performance</h3>
                        <div class="space-y-4">
                            <template x-for="campaign in analyticsData.financialStats.byCampaign" :key="campaign.name">
                                <div class="border border-slate-200 rounded-lg p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-medium text-slate-900" x-text="campaign.name"></h4>
                                        <span class="text-sm text-slate-500" x-text="campaign.donors + ' donors'"></span>
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
                                    <div class="flex justify-between text-sm text-slate-600">
                                        <span x-text="'TSh ' + (campaign.raised / 1000000).toFixed(1) + 'M raised'"></span>
                                        <span x-text="'Goal: TSh ' + (campaign.goal / 1000000).toFixed(1) + 'M'"></span>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Event Analytics -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Event Distribution</h3>
                            <div class="h-64">
                                <canvas id="eventChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Event Performance</h3>
                            <div class="h-64">
                                <canvas id="performanceChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Engagement Analytics -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">Content Performance</h3>
                        <div class="h-64">
                            <canvas id="engagementChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Exports Tab -->
            <div x-show="activeTab === 'exports'" x-cloak>
                <div class="space-y-6">
                    <!-- Export Options -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Quick Exports</h3>
                            <div class="space-y-3">
                                <button class="w-full text-left bg-slate-50 hover:bg-slate-100 rounded-lg p-4 transition-all">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h4 class="font-medium text-slate-900">Member Data</h4>
                                            <p class="text-sm text-slate-600">Export all member information</p>
                                        </div>
                                        <i class="ph ph-users text-slate-400"></i>
                                    </div>
                                </button>
                                <button class="w-full text-left bg-slate-50 hover:bg-slate-100 rounded-lg p-4 transition-all">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h4 class="font-medium text-slate-900">Financial Data</h4>
                                            <p class="text-sm text-slate-600">Export donations and revenue</p>
                                        </div>
                                        <i class="ph ph-currency-btz text-slate-400"></i>
                                    </div>
                                </button>
                                <button class="w-full text-left bg-slate-50 hover:bg-slate-100 rounded-lg p-4 transition-all">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h4 class="font-medium text-slate-900">Event Data</h4>
                                            <p class="text-sm text-slate-600">Export event registrations</p>
                                        </div>
                                        <i class="ph ph-calendar text-slate-400"></i>
                                    </div>
                                </button>
                                <button class="w-full text-left bg-slate-50 hover:bg-slate-100 rounded-lg p-4 transition-all">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h4 class="font-medium text-slate-900">Analytics Data</h4>
                                            <p class="text-sm text-slate-600">Export analytics metrics</p>
                                        </div>
                                        <i class="ph ph-chart-line text-slate-400"></i>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Custom Export</h3>
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Data Type</label>
                                    <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                        <option>Select data type</option>
                                        <option>Members</option>
                                        <option>Donations</option>
                                        <option>Events</option>
                                        <option>Analytics</option>
                                        <option>All Data</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Format</label>
                                    <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                        <option>Excel (.xlsx)</option>
                                        <option>CSV (.csv)</option>
                                        <option>PDF (.pdf)</option>
                                        <option>JSON (.json)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">Date Range</label>
                                    <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                        <option>Last 7 Days</option>
                                        <option>Last 30 Days</option>
                                        <option>Last 90 Days</option>
                                        <option>Last Year</option>
                                        <option>All Time</option>
                                    </select>
                                </div>
                                <button type="submit" class="w-full bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium">
                                    <i class="ph ph-download mr-2"></i>
                                    Export Data
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Export History -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">Export History</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <div>
                                    <h4 class="font-medium text-slate-900">Member Data Export</h4>
                                    <div class="text-sm text-slate-600">Excel • 2.4 MB • 2026-03-30</div>
                                </div>
                                <button class="text-purple-600 hover:text-purple-900 text-sm">Download</button>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <div>
                                    <h4 class="font-medium text-slate-900">Financial Report Q1</h4>
                                    <div class="text-sm text-slate-600">PDF • 1.8 MB • 2026-03-28</div>
                                </div>
                                <button class="text-purple-600 hover:text-purple-900 text-sm">Download</button>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <div>
                                    <h4 class="font-medium text-slate-900">Event Analytics</h4>
                                    <div class="text-sm text-slate-600">CSV • 890 KB • 2026-03-25</div>
                                </div>
                                <button class="text-purple-600 hover:text-purple-900 text-sm">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
