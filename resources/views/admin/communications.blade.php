@extends('layouts.admin')

@section('title', 'Communications')

@section('page-title', 'Communications Center')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'messages',
    searchQuery: '',
    messages: [
        { id: 1, sender: 'John Michael', email: 'john@example.com', subject: 'Question about Easter Conference', message: 'I would like to know more about the accommodation options...', date: '2026-03-30', time: '10:30 AM', status: 'unread', type: 'inquiry' },
        { id: 2, sender: 'Sarah Kimani', email: 'sarah@example.com', subject: 'Registration Payment Issue', message: 'I having trouble completing my payment...', date: '2026-03-30', time: '09:15 AM', status: 'read', type: 'support' },
        { id: 3, sender: 'Robert Chen', email: 'robert@example.com', subject: 'Volunteer Application', message: 'I would like to volunteer for the upcoming event...', date: '2026-03-29', time: '04:45 PM', status: 'replied', type: 'volunteer' },
        { id: 4, sender: 'Grace Mbeki', email: 'grace@example.com', subject: 'Partnership Inquiry', message: 'Our organization would like to partner with ICCRTZ...', date: '2026-03-29', time: '02:30 PM', status: 'unread', type: 'partnership' },
        { id: 5, sender: 'Michael Johnson', email: 'michael@example.com', subject: 'Media Coverage Request', message: 'We would like to provide media coverage for the conference...', date: '2026-03-28', time: '11:20 AM', status: 'read', type: 'media' }
    ],
    campaigns: [
        { id: 1, name: 'Easter Conference Reminder', type: 'email', status: 'scheduled', recipients: 1250, sendDate: '2026-03-25' },
        { id: 2, name: 'Youth Program Announcement', type: 'sms', status: 'sent', recipients: 450, sendDate: '2026-03-20' },
        { id: 3, name: 'Monthly Newsletter', type: 'email', status: 'draft', recipients: 2000, sendDate: '2026-04-01' }
    ]
}">
    <!-- Communications Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Communications Center</h1>
            <p class="text-slate-600">Manage messages, campaigns, and member communications</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export
            </button>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-plus"></i>
                New Campaign
            </button>
        </div>
    </div>

    <!-- Communications Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-envelope text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="messages.length"></h3>
            <p class="text-sm text-slate-600">Messages</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-envelope-open text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Unread</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="messages.filter(m => m.status === 'unread').length"></h3>
            <p class="text-sm text-slate-600">Pending Response</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-bullseye text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Campaigns</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="campaigns.length"></h3>
            <p class="text-sm text-slate-600">Active Campaigns</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Reach</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">3.7K</h3>
            <p class="text-sm text-slate-600">Total Recipients</p>
        </div>
    </div>

    <!-- Tabs Navigation -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 mb-6">
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
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Types</option>
                            <option>Inquiry</option>
                            <option>Support</option>
                            <option>Volunteer</option>
                            <option>Partnership</option>
                            <option>Media</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-4">
                    <template x-for="message in messages.filter(m => m.subject.toLowerCase().includes(searchQuery.toLowerCase()))" :key="message.id">
                        <div class="bg-white border border-slate-200 rounded-lg p-4 hover:shadow-md transition-all">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start gap-3 flex-1">
                                    <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-sm font-bold text-purple-600" x-text="message.sender.split(' ').map(n => n[0]).join('')"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-semibold text-slate-900" x-text="message.sender"></h4>
                                            <span class="text-xs text-slate-500" x-text="message.date + ' • ' + message.time"></span>
                                        </div>
                                        <p class="text-sm text-slate-600 mb-1" x-text="message.email"></p>
                                        <h5 class="font-medium text-slate-900 mb-1" x-text="message.subject"></h5>
                                        <p class="text-sm text-slate-600 line-clamp-2" x-text="message.message"></p>
                                        <div class="flex items-center gap-2 mt-2">
                                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-800" x-text="message.type"></span>
                                            <span class="px-2 py-1 text-xs font-medium rounded-full"
                                                  :class="message.status === 'unread' ? 'bg-red-100 text-red-800' : message.status === 'read' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800'"
                                                  x-text="message.status"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 ml-4">
                                    <button class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-reply"></i>
                                    </button>
                                    <button class="text-slate-600 hover:text-slate-900">
                                        <i class="ph ph-archive"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900">
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
                    <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                        <i class="ph ph-plus"></i>
                        Create Campaign
                    </button>
                </div>

                <div class="grid gap-4">
                    <template x-for="campaign in campaigns" :key="campaign.id">
                        <div class="bg-white border border-slate-200 rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-semibold text-slate-900" x-text="campaign.name"></h4>
                                    <div class="flex items-center gap-4 mt-1 text-sm text-slate-600">
                                        <span class="flex items-center gap-1">
                                            <i class="ph ph-envelope"></i>
                                            <span x-text="campaign.type"></span>
                                        </span>
                                        <span x-text="campaign.recipients + ' recipients'"></span>
                                        <span x-text="'Send: ' + campaign.sendDate"></span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full"
                                          :class="campaign.status === 'sent' ? 'bg-green-100 text-green-800' : campaign.status === 'scheduled' ? 'bg-blue-100 text-blue-800' : 'bg-yellow-100 text-yellow-800'"
                                          x-text="campaign.status"></span>
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
            </div>

            <!-- Templates Tab -->
            <div x-show="activeTab === 'templates'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-file-text text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Message Templates</h3>
                    <p class="text-slate-600">Create and manage reusable message templates</p>
                </div>
            </div>

            <!-- Analytics Tab -->
            <div x-show="activeTab === 'analytics'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-chart-line text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Communication Analytics</h3>
                    <p class="text-slate-600">Track message performance and engagement metrics</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
