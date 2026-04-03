@extends('layouts.admin')

@section('title', 'Notifications Management')

@section('page-title', 'Notifications Management')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'all',
    searchQuery: '',
    selectedNotifications: new Set(),
    showCreateModal: false,
    showEditModal: false,
    editingNotification: null,
    notifications: [
        {
            id: 1,
            type: 'event',
            title: 'Easter Conference 2026 - Registration Open',
            message: 'Registration for the International Easter Conference 2026 is now open. Early bird discounts available until March 15.',
            priority: 'high',
            status: 'sent',
            targetAudience: 'all_members',
            sentAt: '2026-03-01T10:30:00Z',
            readCount: 2341,
            totalRecipients: 5000,
            scheduledAt: null,
            createdBy: 'Admin User',
            createdAt: '2026-03-01T09:15:00Z'
        },
        {
            id: 2,
            type: 'announcement',
            title: 'New Chapter Leadership Appointments',
            message: 'We are pleased to announce the appointment of new chapter leaders for Dar es Salaam, Arusha, and Mwanza regions.',
            priority: 'medium',
            status: 'draft',
            targetAudience: 'chapter_leaders',
            sentAt: null,
            readCount: 0,
            totalRecipients: 150,
            scheduledAt: '2026-04-05T14:00:00Z',
            createdBy: 'Admin User',
            createdAt: '2026-03-28T16:45:00Z'
        },
        {
            id: 3,
            type: 'reminder',
            title: 'Monthly Prayer Meeting - Tomorrow',
            message: 'Reminder: Monthly prayer meeting scheduled for tomorrow at 6:00 PM. All members are encouraged to attend.',
            priority: 'low',
            status: 'sent',
            targetAudience: 'all_members',
            sentAt: '2026-03-30T18:00:00Z',
            readCount: 1876,
            totalRecipients: 5000,
            scheduledAt: null,
            createdBy: 'System',
            createdAt: '2026-03-29T12:00:00Z'
        },
        {
            id: 4,
            type: 'urgent',
            title: 'Emergency: Venue Change for Night of Praise',
            message: 'Important venue change for Night of Praise event. New location: Jubilee Hall, Dar es Salaam. Please update your calendars.',
            priority: 'urgent',
            status: 'sent',
            targetAudience: 'event_attendees',
            sentAt: '2026-03-25T11:30:00Z',
            readCount: 4521,
            totalRecipients: 5000,
            scheduledAt: null,
            createdBy: 'Admin User',
            createdAt: '2026-03-25T11:00:00Z'
        },
        {
            id: 5,
            type: 'welcome',
            title: 'Welcome to ICCRTZ - New Members',
            message: 'Welcome to the ICCRTZ family! We are excited to have you join our community of faith and service.',
            priority: 'low',
            status: 'scheduled',
            targetAudience: 'new_members',
            sentAt: null,
            readCount: 0,
            totalRecipients: 0,
            scheduledAt: '2026-04-01T09:00:00Z',
            createdBy: 'System',
            createdAt: '2026-03-20T10:30:00Z'
        },
        {
            id: 6,
            type: 'donation',
            title: 'Thank You for Your Support',
            message: 'Thank you for your generous donation. Your support helps us continue our mission of spreading faith and service.',
            priority: 'medium',
            status: 'sent',
            targetAudience: 'donors',
            sentAt: '2026-03-15T15:20:00Z',
            readCount: 892,
            totalRecipients: 1200,
            scheduledAt: null,
            createdBy: 'System',
            createdAt: '2026-03-15T15:00:00Z'
        },
        {
            id: 7,
            type: 'event',
            title: 'Leadership Summit Registration Closing Soon',
            message: 'Registration for the Annual Leadership Summit closes in 3 days. Don\'t miss this opportunity for spiritual growth.',
            priority: 'high',
            status: 'sent',
            targetAudience: 'all_members',
            sentAt: '2026-03-10T08:00:00Z',
            readCount: 3245,
            totalRecipients: 5000,
            scheduledAt: null,
            createdBy: 'Admin User',
            createdAt: '2026-03-09T14:30:00Z'
        },
        {
            id: 8,
            type: 'system',
            title: 'System Maintenance Scheduled',
            message: 'System maintenance scheduled for April 2, 2026, from 2:00 AM to 4:00 AM. Services may be temporarily unavailable.',
            priority: 'medium',
            status: 'scheduled',
            targetAudience: 'admin_users',
            sentAt: null,
            readCount: 0,
            totalRecipients: 25,
            scheduledAt: '2026-04-01T20:00:00Z',
            createdBy: 'System',
            createdAt: '2026-03-28T10:15:00Z'
        }
    ],
    get filteredNotifications() {
        let filtered = this.notifications;
        
        if (this.activeTab !== 'all') {
            filtered = filtered.filter(n => n.status === this.activeTab);
        }
        
        if (this.searchQuery) {
            filtered = filtered.filter(n => 
                n.title.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                n.message.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                n.type.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
        }
        
        return filtered;
    },
    get stats() {
        return {
            total: this.notifications.length,
            sent: this.notifications.filter(n => n.status === 'sent').length,
            draft: this.notifications.filter(n => n.status === 'draft').length,
            scheduled: this.notifications.filter(n => n.status === 'scheduled').length,
            urgent: this.notifications.filter(n => n.priority === 'urgent').length,
            high: this.notifications.filter(n => n.priority === 'high').length
        };
    },
    deleteNotification(id) {
        if (confirm('Are you sure you want to delete this notification?')) {
            this.notifications = this.notifications.filter(n => n.id !== id);
        }
    },
    duplicateNotification(id) {
        const notification = this.notifications.find(n => n.id === id);
        if (notification) {
            const newNotification = {
                ...notification,
                id: Math.max(...this.notifications.map(n => n.id)) + 1,
                title: notification.title + ' (Copy)',
                status: 'draft',
                sentAt: null,
                readCount: 0,
                createdAt: new Date().toISOString()
            };
            this.notifications.push(newNotification);
        }
    },
    sendNotification(id) {
        const notification = this.notifications.find(n => n.id === id);
        if (notification) {
            notification.status = 'sent';
            notification.sentAt = new Date().toISOString();
            notification.readCount = Math.floor(Math.random() * 1000);
        }
    },
    editNotification(id) {
        this.editingNotification = this.notifications.find(n => n.id === id);
        this.showEditModal = true;
    },
    updateNotification() {
        if (this.editingNotification) {
            this.showEditModal = false;
            this.editingNotification = null;
        }
    },
    getPriorityColor(priority) {
        const colors = {
            urgent: 'text-red-600 bg-red-50 border-red-200',
            high: 'text-orange-600 bg-orange-50 border-orange-200',
            medium: 'text-yellow-600 bg-yellow-50 border-yellow-200',
            low: 'text-green-600 bg-green-50 border-green-200'
        };
        return colors[priority] || colors.low;
    },
    getTypeIcon(type) {
        const icons = {
            event: 'ph-calendar',
            announcement: 'ph-megaphone',
            reminder: 'ph-bell',
            urgent: 'ph-warning-circle',
            welcome: 'ph-hand-waving',
            donation: 'ph-heart',
            system: 'ph-gear'
        };
        return icons[type] || 'ph-bell';
    },
    getStatusColor(status) {
        const colors = {
            sent: 'text-green-600 bg-green-50',
            draft: 'text-gray-600 bg-gray-50',
            scheduled: 'text-blue-600 bg-blue-50'
        };
        return colors[status] || colors.draft;
    },
    formatDate(dateString) {
        if (!dateString) return 'Not scheduled';
        return new Date(dateString).toLocaleString();
    }
}">
    <!-- Page Header -->
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Notifications Management</h1>
                <p class="text-gray-600 mt-1">Manage and send notifications to members and groups</p>
            </div>
            <button @click="showCreateModal = true" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center gap-2">
                <i class="ph ph-plus"></i>
                Create Notification
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Notifications</p>
                    <p class="text-2xl font-bold text-gray-900" x-text="stats.total"></p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="ph ph-bell text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Sent</p>
                    <p class="text-2xl font-bold text-green-600" x-text="stats.sent"></p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="ph ph-check-circle text-green-600 text-xl"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Draft</p>
                    <p class="text-2xl font-bold text-gray-600" x-text="stats.draft"></p>
                </div>
                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                    <i class="ph ph-file-text text-gray-600 text-xl"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Scheduled</p>
                    <p class="text-2xl font-bold text-blue-600" x-text="stats.scheduled"></p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="ph ph-clock text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="bg-white rounded-lg shadow mb-6">
        <div class="p-6 border-b border-gray-200">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div class="flex flex-wrap gap-2">
                    <button @click="activeTab = 'all'" 
                            :class="activeTab === 'all' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700'"
                            class="px-4 py-2 rounded-lg transition-colors">
                        All (<span x-text="stats.total"></span>)
                    </button>
                    <button @click="activeTab = 'sent'" 
                            :class="activeTab === 'sent' ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-700'"
                            class="px-4 py-2 rounded-lg transition-colors">
                        Sent (<span x-text="stats.sent"></span>)
                    </button>
                    <button @click="activeTab = 'draft'" 
                            :class="activeTab === 'draft' ? 'bg-gray-600 text-white' : 'bg-gray-100 text-gray-700'"
                            class="px-4 py-2 rounded-lg transition-colors">
                        Draft (<span x-text="stats.draft"></span>)
                    </button>
                    <button @click="activeTab = 'scheduled'" 
                            :class="activeTab === 'scheduled' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700'"
                            class="px-4 py-2 rounded-lg transition-colors">
                        Scheduled (<span x-text="stats.scheduled"></span>)
                    </button>
                </div>
                
                <div class="relative">
                    <input type="text" 
                           x-model="searchQuery"
                           placeholder="Search notifications..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="ph ph-magnifying-glass absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Notifications List -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <input type="checkbox" @change="selectedNotifications.clear(); $event.target.checked && filteredNotifications.forEach(n => selectedNotifications.add(n.id))">
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Audience</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sent At</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Read Rate</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <template x-for="notification in filteredNotifications" :key="notification.id">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="checkbox" :checked="selectedNotifications.has(notification.id)" @change="selectedNotifications.has(notification.id) ? selectedNotifications.delete(notification.id) : selectedNotifications.add(notification.id)">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <i :class="getTypeIcon(notification.type)" class="text-gray-600 mr-2"></i>
                                    <span class="text-sm text-gray-900" x-text="notification.type"></span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900" x-text="notification.title"></div>
                                <div class="text-sm text-gray-500 truncate max-w-xs" x-text="notification.message"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span :class="getPriorityColor(notification.priority)" class="px-2 py-1 text-xs font-medium rounded-full border" x-text="notification.priority"></span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span :class="getStatusColor(notification.status)" class="px-2 py-1 text-xs font-medium rounded-full" x-text="notification.status"></span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" x-text="notification.targetAudience"></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" x-text="formatDate(notification.sentAt)"></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900" x-text="notification.totalRecipients > 0 ? Math.round((notification.readCount / notification.totalRecipients) * 100) + '%' : 'N/A'"></div>
                                <div class="text-xs text-gray-500" x-text="notification.readCount + ' / ' + notification.totalRecipients"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center gap-2">
                                    <button @click="editNotification(notification.id)" class="text-blue-600 hover:text-blue-900">
                                        <i class="ph ph-pencil"></i>
                                    </button>
                                    <button @click="duplicateNotification(notification.id)" class="text-green-600 hover:text-green-900">
                                        <i class="ph ph-copy"></i>
                                    </button>
                                    <button x-show="notification.status === 'draft'" @click="sendNotification(notification.id)" class="text-yellow-600 hover:text-yellow-900">
                                        <i class="ph ph-paper-plane-tilt"></i>
                                    </button>
                                    <button @click="deleteNotification(notification.id)" class="text-red-600 hover:text-red-900">
                                        <i class="ph ph-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
        
        <div x-show="filteredNotifications.length === 0" class="text-center py-12">
            <i class="ph ph-bell-slash text-4xl text-gray-300 mb-4"></i>
            <p class="text-gray-500">No notifications found</p>
        </div>
    </div>

    <!-- Create Notification Modal -->
    <div x-show="showCreateModal" x-transition class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-2xl max-h-screen overflow-y-auto">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">Create New Notification</h3>
                <button @click="showCreateModal = false" class="text-gray-400 hover:text-gray-600">
                    <i class="ph ph-x text-xl"></i>
                </button>
            </div>
            
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>event</option>
                        <option>announcement</option>
                        <option>reminder</option>
                        <option>welcome</option>
                        <option>donation</option>
                        <option>system</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter notification title">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter notification message"></textarea>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>urgent</option>
                            <option>high</option>
                            <option>medium</option>
                            <option>low</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Target Audience</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>all_members</option>
                            <option>chapter_leaders</option>
                            <option>event_attendees</option>
                            <option>donors</option>
                            <option>new_members</option>
                            <option>admin_users</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Schedule (Optional)</label>
                    <input type="datetime-local" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                
                <div class="flex justify-end gap-3 pt-4">
                    <button type="button" @click="showCreateModal = false" class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                        Cancel
                    </button>
                    <button type="button" @click="showCreateModal = false" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        Create Notification
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Notification Modal -->
    <div x-show="showEditModal" x-transition class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-2xl max-h-screen overflow-y-auto" x-show="editingNotification">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">Edit Notification</h3>
                <button @click="showEditModal = false" class="text-gray-400 hover:text-gray-600">
                    <i class="ph ph-x text-xl"></i>
                </button>
            </div>
            
            <form class="space-y-4" x-show="editingNotification">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                    <select x-model="editingNotification.type" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>event</option>
                        <option>announcement</option>
                        <option>reminder</option>
                        <option>welcome</option>
                        <option>donation</option>
                        <option>system</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text" x-model="editingNotification.title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea rows="4" x-model="editingNotification.message" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                        <select x-model="editingNotification.priority" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>urgent</option>
                            <option>high</option>
                            <option>medium</option>
                            <option>low</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Target Audience</label>
                        <select x-model="editingNotification.targetAudience" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>all_members</option>
                            <option>chapter_leaders</option>
                            <option>event_attendees</option>
                            <option>donors</option>
                            <option>new_members</option>
                            <option>admin_users</option>
                        </select>
                    </div>
                </div>
                
                <div class="flex justify-end gap-3 pt-4">
                    <button type="button" @click="showEditModal = false" class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                        Cancel
                    </button>
                    <button type="button" @click="updateNotification()" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        Update Notification
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
