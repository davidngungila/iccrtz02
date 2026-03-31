@extends('layouts.admin')

@section('title', 'Advanced Communications Center')

@section('page-title', 'Advanced Communications Center')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'messages',
    searchQuery: '',
    filterType: 'all',
    filterStatus: 'all',
    showMessageModal: false,
    showCampaignModal: false,
    showTemplateModal: false,
    selectedMessage: null,
    selectedCampaign: null,
    selectedTemplate: null,
    charts: {},
    messages: [
        { id: 1, sender: 'John Michael', email: 'john@example.com', phone: '+255 712 345 678', subject: 'Question about Easter Conference', message: 'I would like to know more about the accommodation options available for the International Easter Conference 2026. Are there any recommended hotels near the venue? Also, what is the cancellation policy if I need to change my registration?', date: '2026-03-30', time: '10:30 AM', status: 'unread', type: 'inquiry', priority: 'high', diocese: 'Archdiocese of Dar es Salaam', attachments: 2 },
        { id: 2, sender: 'Sarah Kimani', email: 'sarah@example.com', phone: '+255 713 456 789', subject: 'Registration Payment Issue', message: 'I am having trouble completing my payment for the Youth Leadership Summit. The payment page keeps showing an error message. Can you help me resolve this issue? I have tried using both mobile money and bank transfer.', date: '2026-03-30', time: '09:15 AM', status: 'read', type: 'support', priority: 'urgent', diocese: 'Archdiocese of Mbeya', attachments: 1 },
        { id: 3, sender: 'Robert Chen', email: 'robert@example.com', phone: '+255 714 567 890', subject: 'Volunteer Application', message: 'I would like to volunteer for the upcoming events. I have experience in event management and would love to contribute to the ICCRTZ community. Please let me know what volunteer opportunities are available.', date: '2026-03-29', time: '04:45 PM', status: 'replied', type: 'volunteer', priority: 'medium', diocese: 'Diocese of Arusha', attachments: 0 },
        { id: 4, sender: 'Grace Mbeki', email: 'grace@example.com', phone: '+255 715 678 901', subject: 'Partnership Inquiry', message: 'Our organization would like to partner with ICCRTZ for the upcoming youth programs. We can provide resources and expertise in leadership development. Could we schedule a meeting to discuss potential collaboration opportunities?', date: '2026-03-29', time: '02:30 PM', status: 'unread', type: 'partnership', priority: 'high', diocese: 'Diocese of Dodoma', attachments: 3 },
        { id: 5, sender: 'Michael Johnson', email: 'michael@example.com', phone: '+255 716 789 012', subject: 'Media Coverage Request', message: 'We would like to provide media coverage for the International Easter Conference 2026. Our media house reaches over 500,000 viewers across Tanzania. Please let us know the media accreditation process.', date: '2026-03-28', time: '11:20 AM', status: 'read', type: 'media', priority: 'medium', diocese: 'Diocese of Mwanza', attachments: 2 },
        { id: 6, sender: 'Anna Mwangi', email: 'anna@example.com', phone: '+255 717 890 123', subject: 'Prayer Request', message: 'I would like to request prayers for my family. My mother is currently ill and we are asking for prayers from the ICCRTZ community. Thank you for your support.', date: '2026-03-28', time: '08:45 AM', status: 'replied', type: 'prayer', priority: 'low', diocese: 'Archdiocese of Dar es Salaam', attachments: 0 },
        { id: 7, sender: 'David Ngungila', email: 'david@example.com', phone: '+255 718 901 234', subject: 'Website Feedback', message: 'I found a bug on the registration page. When I try to select my diocese from the dropdown, it doesn\'t show all options. I am from the Diocese of Singida but it\'s not listed.', date: '2026-03-27', time: '03:30 PM', status: 'read', type: 'feedback', priority: 'medium', diocese: 'Diocese of Singida', attachments: 1 },
        { id: 8, sender: 'Elizabeth Kimani', email: 'elizabeth@example.com', phone: '+255 719 012 345', subject: 'Donation Question', message: 'I would like to make a donation to support the youth programs. Can you provide information on how to donate and if there are any tax benefits for donations in Tanzania?', date: '2026-03-27', time: '01:15 PM', status: 'unread', type: 'donation', priority: 'medium', diocese: 'Archdiocese of Dar es Salaam', attachments: 0 }
    ],
    campaigns: [
        { id: 1, name: 'Easter Conference Reminder', type: 'email', status: 'sent', recipients: 1250, sendDate: '2026-03-25', openRate: 78.5, clickRate: 23.4, unsubscribes: 12, revenue: 37500000, template: 'conference_reminder', segment: 'registered_members' },
        { id: 2, name: 'Youth Program Announcement', type: 'sms', status: 'sent', recipients: 450, sendDate: '2026-03-20', deliveryRate: 98.2, responseRate: 15.6, optOuts: 3, template: 'youth_announcement', segment: 'youth_members' },
        { id: 3, name: 'Monthly Newsletter', type: 'email', status: 'scheduled', recipients: 2000, sendDate: '2026-04-01', openRate: 0, clickRate: 0, unsubscribes: 0, revenue: 0, template: 'monthly_newsletter', segment: 'all_members' },
        { id: 4, name: 'Donation Appeal Q1', type: 'email', status: 'sent', recipients: 1800, sendDate: '2026-03-15', openRate: 82.3, clickRate: 18.9, unsubscribes: 8, revenue: 12500000, template: 'donation_appeal', segment: 'active_donors' },
        { id: 5, name: 'Volunteer Recruitment', type: 'email', status: 'draft', recipients: 800, sendDate: '2026-04-05', openRate: 0, clickRate: 0, unsubscribes: 0, revenue: 0, template: 'volunteer_recruitment', segment: 'potential_volunteers' },
        { id: 6, name: 'Event Follow-up', type: 'sms', status: 'sent', recipients: 650, sendDate: '2026-03-22', deliveryRate: 97.8, responseRate: 22.1, optOuts: 5, template: 'event_followup', segment: 'event_attendees' }
    ],
    templates: [
        { id: 1, name: 'Welcome Email', type: 'email', category: 'onboarding', subject: 'Welcome to ICCRTZ Community', content: 'Dear {name}, welcome to the ICCRTZ family...', usage: 245, lastUsed: '2026-03-29', variables: ['name', 'diocese', 'registration_date'] },
        { id: 2, name: 'Event Reminder', type: 'email', category: 'events', subject: 'Event Reminder: {event_name}', content: 'This is a friendly reminder about the upcoming {event_name}...', usage: 189, lastUsed: '2026-03-25', variables: ['event_name', 'event_date', 'event_time', 'venue'] },
        { id: 3, name: 'Donation Thank You', type: 'email', category: 'donations', subject: 'Thank You for Your Donation', content: 'Thank you for your generous donation of {amount}...', usage: 156, lastUsed: '2026-03-28', variables: ['name', 'amount', 'donation_date', 'campaign'] },
        { id: 4, name: 'SMS Event Alert', type: 'sms', category: 'events', subject: 'Event Update', content: 'Hi {name}, quick update about {event_name}...', usage: 98, lastUsed: '2026-03-22', variables: ['name', 'event_name', 'update'] },
        { id: 5, name: 'Volunteer Confirmation', type: 'email', category: 'volunteer', subject: 'Volunteer Application Received', content: 'Thank you for your interest in volunteering...', usage: 67, lastUsed: '2026-03-27', variables: ['name', 'role', 'event', 'date'] },
        { id: 6, name: 'Prayer Response', type: 'email', category: 'pastoral', subject: 'Prayer Support', content: 'We are praying for you and your family...', usage: 134, lastUsed: '2026-03-28', variables: ['name', 'prayer_request', 'date'] }
    ],
    analyticsData: {
        overview: {
            totalMessages: 8,
            unreadMessages: 3,
            totalCampaigns: 6,
            totalRecipients: 3700,
            avgOpenRate: 78.5,
            avgClickRate: 20.8,
            totalRevenue: 50000000,
            responseTime: '2.4 hours'
        },
        messageStats: {
            byType: {
                inquiry: 1,
                support: 1,
                volunteer: 1,
                partnership: 1,
                media: 1,
                prayer: 1,
                feedback: 1,
                donation: 1
            },
            byPriority: {
                high: 2,
                urgent: 1,
                medium: 3,
                low: 2
            },
            byStatus: {
                unread: 3,
                read: 3,
                replied: 2
            },
            responseTime: [
                { date: '2026-03-25', avgTime: 3.2 },
                { date: '2026-03-26', avgTime: 2.8 },
                { date: '2026-03-27', avgTime: 2.1 },
                { date: '2026-03-28', avgTime: 1.9 },
                { date: '2026-03-29', avgTime: 2.4 },
                { date: '2026-03-30', avgTime: 2.2 }
            ]
        },
        campaignStats: {
            byType: {
                email: 4,
                sms: 2
            },
            byStatus: {
                sent: 4,
                scheduled: 1,
                draft: 1
            },
            performance: [
                { name: 'Easter Conference Reminder', openRate: 78.5, clickRate: 23.4, revenue: 37500000 },
                { name: 'Donation Appeal Q1', openRate: 82.3, clickRate: 18.9, revenue: 12500000 },
                { name: 'Youth Program Announcement', openRate: 0, clickRate: 0, revenue: 0 },
                { name: 'Event Follow-up', openRate: 0, clickRate: 0, revenue: 0 }
            ],
            trends: [
                { date: '2026-03-15', sent: 1800, opened: 1480, clicked: 280 },
                { date: '2026-03-20', sent: 450, opened: 0, clicked: 0 },
                { date: '2026-03-22', sent: 650, opened: 0, clicked: 0 },
                { date: '2026-03-25', sent: 1250, opened: 981, clicked: 293 }
            ]
        },
        templateStats: {
            byCategory: {
                onboarding: 1,
                events: 2,
                donations: 1,
                volunteer: 1,
                pastoral: 1
            },
            byType: {
                email: 5,
                sms: 1
            },
            usage: [
                { name: 'Welcome Email', usage: 245 },
                { name: 'Event Reminder', usage: 189 },
                { name: 'Donation Thank You', usage: 156 },
                { name: 'Prayer Response', usage: 134 },
                { name: 'Event Reminder', usage: 98 },
                { name: 'Volunteer Confirmation', usage: 67 }
            ]
        }
    },
    initCharts() {
        this.$nextTick(() => {
            this.initMessageVolumeChart();
            this.initCampaignPerformanceChart();
            this.initResponseTimeChart();
            this.initTemplateUsageChart();
            this.initMessageTypeChart();
            this.initRevenueChart();
        });
    },
    initMessageVolumeChart() {
        const ctx = document.getElementById('messageVolumeChart');
        if (ctx) {
            this.charts.messageVolume = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: this.analyticsData.messageStats.responseTime.map(r => r.date),
                    datasets: [{
                        label: 'Messages Received',
                        data: [5, 8, 6, 9, 7, 8],
                        borderColor: '#8b5cf6',
                        backgroundColor: 'rgba(139, 92, 246, 0.1)',
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
    initCampaignPerformanceChart() {
        const ctx = document.getElementById('campaignPerformanceChart');
        if (ctx) {
            this.charts.campaignPerformance = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: this.analyticsData.campaignStats.performance.map(c => c.name.length > 20 ? c.name.substring(0, 20) + '...' : c.name),
                    datasets: [{
                        label: 'Open Rate %',
                        data: this.analyticsData.campaignStats.performance.map(c => c.openRate),
                        backgroundColor: '#10b981'
                    }, {
                        label: 'Click Rate %',
                        data: this.analyticsData.campaignStats.performance.map(c => c.clickRate),
                        backgroundColor: '#3b82f6'
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
    initResponseTimeChart() {
        const ctx = document.getElementById('responseTimeChart');
        if (ctx) {
            this.charts.responseTime = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: this.analyticsData.messageStats.responseTime.map(r => r.date),
                    datasets: [{
                        label: 'Avg Response Time (hours)',
                        data: this.analyticsData.messageStats.responseTime.map(r => r.avgTime),
                        borderColor: '#f59e0b',
                        backgroundColor: 'rgba(245, 158, 11, 0.1)',
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
    initTemplateUsageChart() {
        const ctx = document.getElementById('templateUsageChart');
        if (ctx) {
            this.charts.templateUsage = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: this.analyticsData.templateStats.usage.map(t => t.name),
                    datasets: [{
                        data: this.analyticsData.templateStats.usage.map(t => t.usage),
                        backgroundColor: [
                            '#8b5cf6', '#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#ec4899'
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
    initMessageTypeChart() {
        const ctx = document.getElementById('messageTypeChart');
        if (ctx) {
            this.charts.messageType = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: Object.keys(this.analyticsData.messageStats.byType),
                    datasets: [{
                        data: Object.values(this.analyticsData.messageStats.byType),
                        backgroundColor: [
                            '#8b5cf6', '#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#ec4899', '#14b8a6', '#f97316'
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
    initRevenueChart() {
        const ctx = document.getElementById('revenueChart');
        if (ctx) {
            this.charts.revenue = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: this.analyticsData.campaignStats.performance.filter(c => c.revenue > 0).map(c => c.name.length > 15 ? c.name.substring(0, 15) + '...' : c.name),
                    datasets: [{
                        label: 'Revenue (TSh)',
                        data: this.analyticsData.campaignStats.performance.filter(c => c.revenue > 0).map(c => c.revenue),
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
    openMessage(message) {
        this.selectedMessage = message;
        this.showMessageModal = true;
        if (message.status === 'unread') {
            message.status = 'read';
        }
    },
    replyToMessage(message) {
        this.selectedMessage = message;
        this.showMessageModal = true;
    },
    deleteMessage(messageId) {
        this.messages = this.messages.filter(m => m.id !== messageId);
    },
    openCampaign(campaign) {
        this.selectedCampaign = campaign;
        this.showCampaignModal = true;
    },
    createCampaign() {
        const newCampaign = {
            id: this.campaigns.length + 1,
            name: 'New Campaign',
            type: 'email',
            status: 'draft',
            recipients: 0,
            sendDate: new Date().toISOString().split('T')[0],
            openRate: 0,
            clickRate: 0,
            unsubscribes: 0,
            revenue: 0,
            template: '',
            segment: 'all_members'
        };
        this.campaigns.unshift(newCampaign);
        this.openCampaign(newCampaign);
    },
    deleteCampaign(campaignId) {
        this.campaigns = this.campaigns.filter(c => c.id !== campaignId);
    },
    openTemplate(template) {
        this.selectedTemplate = template;
        this.showTemplateModal = true;
    },
    createTemplate() {
        const newTemplate = {
            id: this.templates.length + 1,
            name: 'New Template',
            type: 'email',
            category: 'general',
            subject: 'New Template Subject',
            content: 'Template content goes here...',
            usage: 0,
            lastUsed: null,
            variables: []
        };
        this.templates.unshift(newTemplate);
        this.openTemplate(newTemplate);
    },
    deleteTemplate(templateId) {
        this.templates = this.templates.filter(t => t.id !== templateId);
    },
    getFilteredMessages() {
        return this.messages.filter(m => {
            const matchesSearch = m.subject.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                              m.sender.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                              m.message.toLowerCase().includes(this.searchQuery.toLowerCase());
            const matchesType = this.filterType === 'all' || m.type === this.filterType;
            const matchesStatus = this.filterStatus === 'all' || m.status === this.filterStatus;
            return matchesSearch && matchesType && matchesStatus;
        });
    }
}" x-init="initCharts()" x-cloak>
    <!-- Communications Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Advanced Communications Center</h1>
            <p class="text-slate-600">Comprehensive messaging, campaigns, and communication analytics platform</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export Data
            </button>
            <button @click="createCampaign()" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-plus"></i>
                New Campaign
            </button>
        </div>
    </div>

    <!-- Communications Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-envelope text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="analyticsData.overview.totalMessages"></h3>
            <p class="text-sm text-slate-600">Messages</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-clock text-blue-500 mr-1"></i>
                <span class="text-blue-500" x-text="analyticsData.overview.responseTime"></span>
                <span class="text-slate-500 ml-1">avg response</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-envelope-open text-red-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Unread</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="analyticsData.overview.unreadMessages"></h3>
            <p class="text-sm text-slate-600">Pending Response</p>
            <div class="mt-2">
                <div class="w-full bg-slate-200 rounded-full h-2">
                    <div class="bg-red-600 h-2 rounded-full" :style="'width: ' + (analyticsData.overview.unreadMessages / analyticsData.overview.totalMessages) * 100 + '%'"></div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-bullseye text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Campaigns</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="analyticsData.overview.totalCampaigns"></h3>
            <p class="text-sm text-slate-600">Active Campaigns</p>
            <div class="mt-2 flex items-center text-sm">
                <span class="text-green-600" x-text="analyticsData.overview.avgOpenRate + '%'"></span>
                <span class="text-slate-500 ml-1">avg open rate</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Reach</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="analyticsData.overview.totalRecipients.toLocaleString()"></h3>
            <p class="text-sm text-slate-600">Total Recipients</p>
            <div class="mt-2 flex items-center text-sm">
                <span class="text-blue-600" x-text="analyticsData.overview.avgClickRate + '%'"></span>
                <span class="text-slate-500 ml-1">avg click rate</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-currency-btz text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Revenue</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (analyticsData.overview.totalRevenue / 1000000).toFixed(1) + 'M'"></h3>
            <p class="text-sm text-slate-600">Campaign Revenue</p>
            <div class="mt-2">
                <div class="w-full bg-slate-200 rounded-full h-2">
                    <div class="bg-yellow-600 h-2 rounded-full" style="width: 75%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs Navigation -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200">
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button @click="activeTab = 'messages'" 
                        :class="activeTab === 'messages' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-envelope mr-2"></i>
                    Messages
                </button>
                <button @click="activeTab = 'campaigns'" 
                        :class="activeTab === 'campaigns' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-bullseye mr-2"></i>
                    Campaigns
                </button>
                <button @click="activeTab = 'templates'" 
                        :class="activeTab === 'templates' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-file-text mr-2"></i>
                    Templates
                </button>
                <button @click="activeTab = 'analytics'" 
                        :class="activeTab === 'analytics' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-chart-line mr-2"></i>
                    Analytics
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- Messages Tab -->
            <div x-show="activeTab === 'messages'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Inbox Messages</h3>
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <input type="text" 
                                   x-model="searchQuery" 
                                   placeholder="Search messages..." 
                                   class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
                        </div>
                        <select x-model="filterType" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option value="all">All Types</option>
                            <option value="inquiry">Inquiry</option>
                            <option value="support">Support</option>
                            <option value="volunteer">Volunteer</option>
                            <option value="partnership">Partnership</option>
                            <option value="media">Media</option>
                            <option value="prayer">Prayer</option>
                            <option value="feedback">Feedback</option>
                            <option value="donation">Donation</option>
                        </select>
                        <select x-model="filterStatus" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option value="all">All Status</option>
                            <option value="unread">Unread</option>
                            <option value="read">Read</option>
                            <option value="replied">Replied</option>
                        </select>
                    </div>
                </div>

                <!-- Message Stats -->
                <div class="grid gap-4 md:grid-cols-4 mb-6">
                    <div class="bg-slate-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-slate-900" x-text="messages.length"></div>
                        <div class="text-sm text-slate-600">Total Messages</div>
                    </div>
                    <div class="bg-red-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-red-900" x-text="messages.filter(m => m.status === 'unread').length"></div>
                        <div class="text-sm text-red-600">Unread</div>
                    </div>
                    <div class="bg-yellow-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-yellow-900" x-text="messages.filter(m => m.priority === 'urgent').length"></div>
                        <div class="text-sm text-yellow-600">Urgent</div>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-blue-900" x-text="messages.reduce((sum, m) => sum + m.attachments, 0)"></div>
                        <div class="text-sm text-blue-600">Attachments</div>
                    </div>
                </div>

                <div class="space-y-4">
                    <template x-for="message in getFilteredMessages()" :key="message.id">
                        <div class="bg-white border border-slate-200 rounded-lg p-4 hover:shadow-md transition-all">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start gap-3 flex-1">
                                    <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-sm font-bold text-purple-600" x-text="message.sender.split(' ').map(n => n[0]).join('')"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-semibold text-slate-900" x-text="message.sender"></h4>
                                            <div class="flex items-center gap-2">
                                                <span class="text-xs text-slate-500" x-text="message.date + ' • ' + message.time"></span>
                                                <span class="px-2 py-1 text-xs font-medium rounded-full"
                                                      :class="message.priority === 'urgent' ? 'bg-red-100 text-red-800' : 
                                                             message.priority === 'high' ? 'bg-orange-100 text-orange-800' :
                                                             message.priority === 'medium' ? 'bg-yellow-100 text-yellow-800' :
                                                             'bg-slate-100 text-slate-800'"
                                                      x-text="message.priority"></span>
                                            </div>
                                        </div>
                                        <p class="text-sm text-slate-600 mb-1" x-text="message.email"></p>
                                        <p class="text-sm text-slate-600 mb-1" x-text="'Phone: ' + message.phone"></p>
                                        <p class="text-sm text-slate-600 mb-1" x-text="'Diocese: ' + message.diocese"></p>
                                        <h5 class="font-medium text-slate-900 mb-1" x-text="message.subject"></h5>
                                        <p class="text-sm text-slate-600 line-clamp-2" x-text="message.message"></p>
                                        <div class="flex items-center gap-2 mt-2">
                                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-800" x-text="message.type"></span>
                                            <span class="px-2 py-1 text-xs font-medium rounded-full"
                                                  :class="message.status === 'unread' ? 'bg-red-100 text-red-800' : message.status === 'read' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800'"
                                                  x-text="message.status"></span>
                                            <template x-if="message.attachments > 0">
                                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800 flex items-center gap-1">
                                                    <i class="ph ph-paperclip"></i>
                                                    <span x-text="message.attachments + ' attachments'"></span>
                                                </span>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 ml-4">
                                    <button @click="openMessage(message)" class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-eye"></i>
                                    </button>
                                    <button @click="replyToMessage(message)" class="text-blue-600 hover:text-blue-900">
                                        <i class="ph ph-reply"></i>
                                    </button>
                                    <button class="text-slate-600 hover:text-slate-900">
                                        <i class="ph ph-archive"></i>
                                    </button>
                                    <button @click="deleteMessage(message.id)" class="text-red-600 hover:text-red-900">
                                        <i class="ph ph-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Campaigns Tab -->
            <div x-show="activeTab === 'campaigns'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Email & SMS Campaigns</h3>
                    <div class="flex items-center gap-3">
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Types</option>
                            <option>Email</option>
                            <option>SMS</option>
                        </select>
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Status</option>
                            <option>Sent</option>
                            <option>Scheduled</option>
                            <option>Draft</option>
                        </select>
                        <button @click="createCampaign()" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                            <i class="ph ph-plus"></i>
                            Create Campaign
                        </button>
                    </div>
                </div>

                <!-- Campaign Stats -->
                <div class="grid gap-4 md:grid-cols-4 mb-6">
                    <div class="bg-slate-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-slate-900" x-text="campaigns.length"></div>
                        <div class="text-sm text-slate-600">Total Campaigns</div>
                    </div>
                    <div class="bg-green-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-green-900" x-text="campaigns.filter(c => c.status === 'sent').length"></div>
                        <div class="text-sm text-green-600">Sent</div>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-blue-900" x-text="campaigns.reduce((sum, c) => sum + c.recipients, 0).toLocaleString()"></div>
                        <div class="text-sm text-blue-600">Total Recipients</div>
                    </div>
                    <div class="bg-purple-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-purple-900" x-text="'TSh ' + (campaigns.reduce((sum, c) => sum + c.revenue, 0) / 1000000).toFixed(1) + 'M'"></div>
                        <div class="text-sm text-purple-600">Total Revenue</div>
                    </div>
                </div>

                <div class="grid gap-4">
                    <template x-for="campaign in campaigns" :key="campaign.id">
                        <div class="bg-white border border-slate-200 rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-semibold text-slate-900" x-text="campaign.name"></h4>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="campaign.status === 'sent' ? 'bg-green-100 text-green-800' : campaign.status === 'scheduled' ? 'bg-blue-100 text-blue-800' : 'bg-yellow-100 text-yellow-800'"
                                              x-text="campaign.status"></span>
                                    </div>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm text-slate-600">
                                        <div>
                                            <span class="font-medium text-slate-900">Type:</span>
                                            <span x-text="campaign.type"></span>
                                        </div>
                                        <div>
                                            <span class="font-medium text-slate-900">Recipients:</span>
                                            <span x-text="campaign.recipients.toLocaleString()"></span>
                                        </div>
                                        <div>
                                            <span class="font-medium text-slate-900">Send Date:</span>
                                            <span x-text="campaign.sendDate"></span>
                                        </div>
                                        <div>
                                            <span class="font-medium text-slate-900">Template:</span>
                                            <span x-text="campaign.template"></span>
                                        </div>
                                    </div>
                                    <template x-if="campaign.status === 'sent'">
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm text-slate-600 mt-3">
                                            <div>
                                                <span class="font-medium text-slate-900">Open Rate:</span>
                                                <span class="text-green-600" x-text="campaign.openRate + '%'"></span>
                                            </div>
                                            <div>
                                                <span class="font-medium text-slate-900">Click Rate:</span>
                                                <span class="text-blue-600" x-text="campaign.clickRate + '%'"></span>
                                            </div>
                                            <div>
                                                <span class="font-medium text-slate-900">Unsubscribes:</span>
                                                <span class="text-red-600" x-text="campaign.unsubscribes"></span>
                                            </div>
                                            <div>
                                                <span class="font-medium text-slate-900">Revenue:</span>
                                                <span class="text-purple-600" x-text="'TSh ' + (campaign.revenue / 1000000).toFixed(1) + 'M'"></span>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                                <div class="flex items-center gap-2 ml-4">
                                    <button @click="openCampaign(campaign)" class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-pencil"></i>
                                    </button>
                                    <button class="text-slate-600 hover:text-slate-900">
                                        <i class="ph ph-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="ph ph-copy"></i>
                                    </button>
                                    <button @click="deleteCampaign(campaign.id)" class="text-red-600 hover:text-red-900">
                                        <i class="ph ph-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Templates Tab -->
            <div x-show="activeTab === 'templates'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Message Templates</h3>
                    <div class="flex items-center gap-3">
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Categories</option>
                            <option>Onboarding</option>
                            <option>Events</option>
                            <option>Donations</option>
                            <option>Volunteer</option>
                            <option>Pastoral</option>
                        </select>
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Types</option>
                            <option>Email</option>
                            <option>SMS</option>
                        </select>
                        <button @click="createTemplate()" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                            <i class="ph ph-plus"></i>
                            Create Template
                        </button>
                    </div>
                </div>

                <!-- Template Stats -->
                <div class="grid gap-4 md:grid-cols-4 mb-6">
                    <div class="bg-slate-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-slate-900" x-text="templates.length"></div>
                        <div class="text-sm text-slate-600">Total Templates</div>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-blue-900" x-text="templates.filter(t => t.type === 'email').length"></div>
                        <div class="text-sm text-blue-600">Email Templates</div>
                    </div>
                    <div class="bg-green-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-green-900" x-text="templates.filter(t => t.type === 'sms').length"></div>
                        <div class="text-sm text-green-600">SMS Templates</div>
                    </div>
                    <div class="bg-purple-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-purple-900" x-text="templates.reduce((sum, t) => sum + t.usage, 0)"></div>
                        <div class="text-sm text-purple-600">Total Usage</div>
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-2">
                    <template x-for="template in templates" :key="template.id">
                        <div class="bg-white border border-slate-200 rounded-lg p-4">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h4 class="font-semibold text-slate-900" x-text="template.name"></h4>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-800" x-text="template.type"></span>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800" x-text="template.category"></span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button @click="openTemplate(template)" class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-pencil"></i>
                                    </button>
                                    <button class="text-slate-600 hover:text-slate-900">
                                        <i class="ph ph-copy"></i>
                                    </button>
                                    <button @click="deleteTemplate(template.id)" class="text-red-600 hover:text-red-900">
                                        <i class="ph ph-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="text-sm text-slate-600 mb-2">
                                <div class="font-medium text-slate-900">Subject:</div>
                                <div x-text="template.subject"></div>
                            </div>
                            <div class="text-sm text-slate-600 mb-2">
                                <div class="font-medium text-slate-900">Content Preview:</div>
                                <div class="line-clamp-2" x-text="template.content"></div>
                            </div>
                            <div class="flex items-center justify-between text-sm text-slate-600">
                                <div>
                                    <span class="font-medium text-slate-900">Usage:</span>
                                    <span x-text="template.usage + ' times'"></span>
                                </div>
                                <div>
                                    <span class="font-medium text-slate-900">Last Used:</span>
                                    <span x-text="template.lastUsed || 'Never'"></span>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="text-sm text-slate-600">
                                    <span class="font-medium text-slate-900">Variables:</span>
                                    <div class="flex flex-wrap gap-1 mt-1">
                                        <template x-for="variable in template.variables" :key="variable">
                                            <span class="px-2 py-1 text-xs bg-slate-100 rounded" x-text="'{' + variable + '}'"></span>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Analytics Tab -->
            <div x-show="activeTab === 'analytics'" x-cloak>
                <div class="space-y-6">
                    <!-- Key Charts -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Message Volume Trend</h3>
                            <div class="h-64">
                                <canvas id="messageVolumeChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Campaign Performance</h3>
                            <div class="h-64">
                                <canvas id="campaignPerformanceChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Response Time and Template Usage -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Average Response Time</h3>
                            <div class="h-64">
                                <canvas id="responseTimeChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Template Usage</h3>
                            <div class="h-64">
                                <canvas id="templateUsageChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Message Types and Revenue -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Messages by Type</h3>
                            <div class="h-64">
                                <canvas id="messageTypeChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Campaign Revenue</h3>
                            <div class="h-64">
                                <canvas id="revenueChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Analytics Table -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">Communication Performance Summary</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-slate-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Metric</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Current</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Previous</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Change</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Trend</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">Total Messages</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">8</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">6</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+33%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">↑</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">Avg Response Time</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">2.4 hours</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">3.1 hours</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">-23%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">↓</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">Open Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">78.5%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">75.2%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+4.4%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">↑</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">Click Rate</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">20.8%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">18.5%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+12.4%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">↑</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">Campaign Revenue</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">TSh 50.0M</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">TSh 42.5M</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+17.6%</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">↑</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message Details Modal -->
    <div x-show="showMessageModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900" x-text="selectedMessage ? selectedMessage.subject : 'Message Details'"></h3>
                    <button @click="showMessageModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6" x-show="selectedMessage">
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <span class="text-lg font-bold text-purple-600" x-text="selectedMessage.sender.split(' ').map(n => n[0]).join('')"></span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-slate-900" x-text="selectedMessage.sender"></h4>
                            <div class="text-sm text-slate-600 space-y-1">
                                <div x-text="selectedMessage.email"></div>
                                <div x-text="'Phone: ' + selectedMessage.phone"></div>
                                <div x-text="'Diocese: ' + selectedMessage.diocese"></div>
                                <div x-text="'Date: ' + selectedMessage.date + ' at ' + selectedMessage.time"></div>
                            </div>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-800" x-text="selectedMessage.type"></span>
                                <span class="px-2 py-1 text-xs font-medium rounded-full"
                                      :class="selectedMessage.priority === 'urgent' ? 'bg-red-100 text-red-800' : 
                                             selectedMessage.priority === 'high' ? 'bg-orange-100 text-orange-800' :
                                             selectedMessage.priority === 'medium' ? 'bg-yellow-100 text-yellow-800' :
                                             'bg-slate-100 text-slate-800'"
                                      x-text="selectedMessage.priority"></span>
                                <span class="px-2 py-1 text-xs font-medium rounded-full"
                                      :class="selectedMessage.status === 'unread' ? 'bg-red-100 text-red-800' : selectedMessage.status === 'read' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800'"
                                      x-text="selectedMessage.status"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-t border-slate-200 pt-4">
                        <h5 class="font-medium text-slate-900 mb-2">Message:</h5>
                        <p class="text-sm text-slate-600 whitespace-pre-wrap" x-text="selectedMessage.message"></p>
                    </div>

                    <template x-if="selectedMessage.attachments > 0">
                        <div class="border-t border-slate-200 pt-4">
                            <h5 class="font-medium text-slate-900 mb-2">Attachments (<span x-text="selectedMessage.attachments"></span>):</h5>
                            <div class="space-y-2">
                                <template x-for="i in selectedMessage.attachments" :key="'attachment-' + i">
                                    <div class="flex items-center gap-2 p-2 bg-slate-50 rounded">
                                        <i class="ph ph-paperclip text-slate-600"></i>
                                        <span class="text-sm text-slate-900">Attachment <span x-text="i"></span>.pdf</span>
                                        <span class="text-xs text-slate-500">(2.4 MB)</span>
                                        <button class="ml-auto text-purple-600 hover:text-purple-900 text-sm">Download</button>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>

                    <div class="border-t border-slate-200 pt-4">
                        <div class="flex items-center gap-3">
                            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium">
                                <i class="ph ph-reply mr-2"></i>
                                Reply
                            </button>
                            <button class="bg-slate-100 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-200 transition-all font-medium">
                                <i class="ph ph-forward mr-2"></i>
                                Forward
                            </button>
                            <button class="bg-slate-100 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-200 transition-all font-medium">
                                <i class="ph ph-archive mr-2"></i>
                                Archive
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Campaign Modal -->
    <div x-show="showCampaignModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900" x-text="selectedCampaign ? 'Edit Campaign' : 'Create Campaign'"></h3>
                    <button @click="showCampaignModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6" x-show="selectedCampaign">
                <form class="space-y-4">
                    <div class="grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Campaign Name</label>
                            <input type="text" :value="selectedCampaign.name" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Type</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option :selected="selectedCampaign.type === 'email'" value="email">Email</option>
                                <option :selected="selectedCampaign.type === 'sms'" value="sms">SMS</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Content</label>
                        <textarea rows="6" class="w-full border border-slate-200 rounded-lg px-4 py-2"></textarea>
                    </div>
                    <div class="grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Target Segment</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>All Members</option>
                                <option>Registered Members</option>
                                <option>Youth Members</option>
                                <option>Active Donors</option>
                                <option>Event Attendees</option>
                                <option>Potential Volunteers</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Schedule</label>
                            <input type="datetime-local" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                    </div>
                    <div class="flex justify-end gap-3">
                        <button type="button" @click="showCampaignModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="button" class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200">
                            Save Draft
                        </button>
                        <button type="button" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Send Campaign
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Template Modal -->
    <div x-show="showTemplateModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900" x-text="selectedTemplate ? 'Edit Template' : 'Create Template'"></h3>
                    <button @click="showTemplateModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6" x-show="selectedTemplate">
                <form class="space-y-4">
                    <div class="grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Template Name</label>
                            <input type="text" :value="selectedTemplate.name" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Category</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>General</option>
                                <option>Onboarding</option>
                                <option>Events</option>
                                <option>Donations</option>
                                <option>Volunteer</option>
                                <option>Pastoral</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Type</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option :selected="selectedTemplate.type === 'email'" value="email">Email</option>
                                <option :selected="selectedTemplate.type === 'sms'" value="sms">SMS</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
                            <input type="text" :value="selectedTemplate.subject" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Content</label>
                        <textarea rows="8" class="w-full border border-slate-200 rounded-lg px-4 py-2" x-text="selectedTemplate.content"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Available Variables</label>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-sm bg-slate-100 rounded">{name}</span>
                            <span class="px-3 py-1 text-sm bg-slate-100 rounded">{email}</span>
                            <span class="px-3 py-1 text-sm bg-slate-100 rounded">{diocese}</span>
                            <span class="px-3 py-1 text-sm bg-slate-100 rounded">{event_name}</span>
                            <span class="px-3 py-1 text-sm bg-slate-100 rounded">{date}</span>
                            <span class="px-3 py-1 text-sm bg-slate-100 rounded">{amount}</span>
                        </div>
                    </div>
                    <div class="flex justify-end gap-3">
                        <button type="button" @click="showTemplateModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="button" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Save Template
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
