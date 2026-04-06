@extends('layouts.admin')

@section('title', 'Comprehensive Events Management')

@section('page-title', 'Comprehensive Events Management')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'overview',
    searchQuery: '',
    filterType: 'all',
    filterStatus: 'all',
    selectedEvent: null,
    showEventModal: false,
    showRegistrationModal: false,
    showFinanceModal: false,
    showFacilitatorModal: false,
    showCollectionModal: false,
    showLeaderModal: false,
    showReminderModal: false,
    showEditModal: false,
    editingEvent: null,
    selectedDate: null,
    currentMonth: new Date().getMonth(),
    currentYear: new Date().getFullYear(),
    events: [
        {
            id: 1,
            name: 'International Easter Conference 2026',
            type: 'conference',
            category: 'major',
            status: 'live',
            date: '2026-03-31',
            endDate: '2026-04-05',
            time: '09:00 AM',
            endTime: '06:00 PM',
            location: 'Archdiocese of Mbeya, Tanzania',
            venue: 'Mbeya City Stadium',
            registrations: 1250,
            capacity: 5000,
            price: 30000,
            currency: 'TSh',
            budget: {
                total: 150000000,
                allocated: 125000000,
                spent: 87500000,
                remaining: 62500000,
                categories: {
                    venue: 50000000,
                    catering: 30000000,
                    speakers: 25000000,
                    marketing: 15000000,
                    logistics: 20000000,
                    contingency: 10000000
                }
            },
            collections: {
                registration: 37500000,
                donations: 12500000,
                sponsorships: 50000000,
                merchandise: 8000000,
                total: 108000000
            },
            facilitators: [
                { id: 1, name: 'Bishop Jude Thaddeus Ruwa\'ichi', role: 'Main Speaker', fee: 5000000, status: 'confirmed' },
                { id: 2, name: 'Fr. John Michael', role: 'Spiritual Director', fee: 3000000, status: 'confirmed' },
                { id: 3, name: 'Grace Mbeki', role: 'Workshop Facilitator', fee: 2000000, status: 'confirmed' },
                { id: 4, name: 'Robert Chen', role: 'Music Director', fee: 1500000, status: 'pending' }
            ],
            leaders: [
                { id: 1, name: 'David Ngungila', role: 'Event Coordinator', contact: '+255712345678', email: 'david@iccrtz.org' },
                { id: 2, name: 'Sarah Kimani', role: 'Registration Manager', contact: '+255713456789', email: 'sarah@iccrtz.org' },
                { id: 3, name: 'Michael Johnson', role: 'Logistics Lead', contact: '+255714567890', email: 'michael@iccrtz.org' }
            ],
            reminders: [
                { id: 1, type: 'registration', message: 'Early bird registration ends in 3 days', sendDate: '2026-03-15', status: 'sent' },
                { id: 2, type: 'payment', message: 'Payment reminder for registered participants', sendDate: '2026-03-25', status: 'scheduled' },
                { id: 3, type: 'event', message: 'Event starts tomorrow - check-in details', sendDate: '2026-03-30', status: 'pending' }
            ],
            image: 'https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457129/0304_233_zvkodm.jpg',
            description: 'Join thousands of believers for this transformative conference featuring renowned speakers, worship sessions, and spiritual renewal.',
            organizer: 'ICCRTZ National Team',
            tags: ['easter', 'conference', 'major-event', 'international'],
            registrationOpen: true,
            livestreamEnabled: true,
            hasCertificate: true,
            materialsProvided: true,
            createdAt: '2026-01-15',
            updatedAt: '2026-03-30'
        },
        {
            id: 2,
            name: 'Youth Leadership Summit 2026',
            type: 'summit',
            category: 'youth',
            status: 'upcoming',
            date: '2026-04-15',
            endDate: '2026-04-17',
            time: '10:00 AM',
            endTime: '05:00 PM',
            location: 'University of Dar es Salaam',
            venue: 'Nkrumah Hall',
            registrations: 450,
            capacity: 500,
            price: 15000,
            currency: 'TSh',
            budget: {
                total: 25000000,
                allocated: 20000000,
                spent: 12000000,
                remaining: 13000000,
                categories: {
                    venue: 8000000,
                    catering: 5000000,
                    speakers: 4000000,
                    materials: 2000000,
                    logistics: 1000000
                }
            },
            collections: {
                registration: 6750000,
                donations: 2000000,
                sponsorships: 8000000,
                total: 16750000
            },
            facilitators: [
                { id: 5, name: 'Sarah Kimani', role: 'Leadership Coach', fee: 1500000, status: 'confirmed' },
                { id: 6, name: 'Michael Johnson', role: 'Team Building Expert', fee: 1000000, status: 'confirmed' }
            ],
            leaders: [
                { id: 4, name: 'Grace Mbeki', role: 'Summit Director', contact: '+255715678901', email: 'grace@iccrtz.org' }
            ],
            reminders: [
                { id: 4, type: 'registration', message: 'Summit registration closing soon', sendDate: '2026-04-10', status: 'pending' }
            ],
            image: 'https://res.cloudinary.com/dpyppzvzj/image/upload/v1775457162/0104_33_gh3ckn.jpg',
            description: 'A three-day intensive training program for young leaders focusing on spiritual growth, leadership skills, and community service.',
            organizer: 'ICCRTZ Youth Ministry',
            tags: ['youth', 'leadership', 'training', 'summit'],
            registrationOpen: true,
            livestreamEnabled: false,
            hasCertificate: true,
            materialsProvided: true,
            createdAt: '2026-02-01',
            updatedAt: '2026-03-28'
        }
    ],
    get filteredEvents() {
        let filtered = this.events;
        
        if (this.filterType !== 'all') {
            filtered = filtered.filter(e => e.type === this.filterType);
        }
        
        if (this.filterStatus !== 'all') {
            filtered = filtered.filter(e => e.status === this.filterStatus);
        }
        
        if (this.searchQuery) {
            filtered = filtered.filter(e => 
                e.name.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                e.location.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                e.organizer.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
        }
        
        return filtered;
    },
    get stats() {
        return {
            total: this.events.length,
            live: this.events.filter(e => e.status === 'live').length,
            upcoming: this.events.filter(e => e.status === 'upcoming').length,
            completed: this.events.filter(e => e.status === 'completed').length,
            totalRegistrations: this.events.reduce((sum, e) => sum + e.registrations, 0),
            totalCapacity: this.events.reduce((sum, e) => sum + e.capacity, 0),
            totalBudget: this.events.reduce((sum, e) => sum + (e.budget?.total || 0), 0),
            totalCollections: this.events.reduce((sum, e) => sum + (e.collections?.total || 0), 0)
        };
    },
    openEventDetails(event) {
        this.selectedEvent = event;
        this.activeTab = 'details';
    },
    openFinanceModal(event) {
        this.selectedEvent = event;
        this.showFinanceModal = true;
    },
    openFacilitatorModal(event) {
        this.selectedEvent = event;
        this.showFacilitatorModal = true;
    },
    openCollectionModal(event) {
        this.selectedEvent = event;
        this.showCollectionModal = true;
    },
    openLeaderModal(event) {
        this.selectedEvent = event;
        this.showLeaderModal = true;
    },
    openReminderModal(event) {
        this.selectedEvent = event;
        this.showReminderModal = true;
    },
    formatCurrency(amount) {
        return new Intl.NumberFormat('en-TZ', { style: 'currency', currency: 'TZS' }).format(amount);
    },
    formatDate(dateString) {
        return new Date(dateString).toLocaleDateString('en-TZ', { 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric' 
        });
    },
    getStatusColor(status) {
        const colors = {
            live: 'text-green-600 bg-green-50',
            upcoming: 'text-blue-600 bg-blue-50',
            completed: 'text-gray-600 bg-gray-50',
            cancelled: 'text-red-600 bg-red-50'
        };
        return colors[status] || colors.upcoming;
    },
    getTypeColor(type) {
        const colors = {
            conference: 'text-purple-600 bg-purple-50',
            summit: 'text-indigo-600 bg-indigo-50',
            workshop: 'text-orange-600 bg-orange-50',
            service: 'text-green-600 bg-green-50',
            retreat: 'text-blue-600 bg-blue-50'
        };
        return colors[type] || colors.conference;
    }
}">
    <!-- Page Header -->
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Comprehensive Events Management</h1>
                <p class="text-gray-600 mt-1">Manage all aspects of events including registration, finance, facilitators, and more</p>
            </div>
            <button @click="showEventModal = true" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center gap-2">
                <i class="ph ph-plus"></i>
                Create Event
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Events</p>
                    <p class="text-2xl font-bold text-gray-900" x-text="stats.total"></p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="ph ph-calendar text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Registrations</p>
                    <p class="text-2xl font-bold text-green-600" x-text="stats.totalRegistrations.toLocaleString()"></p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="ph ph-users text-green-600 text-xl"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Budget</p>
                    <p class="text-2xl font-bold text-purple-600" x-text="formatCurrency(stats.totalBudget)"></p>
                </div>
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <i class="ph ph-money text-purple-600 text-xl"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Collections</p>
                    <p class="text-2xl font-bold text-orange-600" x-text="formatCurrency(stats.totalCollections)"></p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                    <i class="ph ph-currency-tzs text-orange-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <div class="bg-white rounded-lg shadow mb-6">
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px">
                <button @click="activeTab = 'overview'" 
                        :class="activeTab === 'overview' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                        class="py-4 px-6 border-b-2 font-medium text-sm transition-colors">
                    <i class="ph ph-grid mr-2"></i> Overview
                </button>
                <button @click="activeTab = 'details'" 
                        :class="activeTab === 'details' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                        class="py-4 px-6 border-b-2 font-medium text-sm transition-colors">
                    <i class="ph ph-info mr-2"></i> Event Details
                </button>
                <button @click="activeTab = 'registration'" 
                        :class="activeTab === 'registration' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                        class="py-4 px-6 border-b-2 font-medium text-sm transition-colors">
                    <i class="ph ph-users-three mr-2"></i> Registration
                </button>
                <button @click="activeTab = 'finance'" 
                        :class="activeTab === 'finance' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                        class="py-4 px-6 border-b-2 font-medium text-sm transition-colors">
                    <i class="ph ph-money mr-2"></i> Finance & Budget
                </button>
                <button @click="activeTab = 'facilitators'" 
                        :class="activeTab === 'facilitators' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                        class="py-4 px-6 border-b-2 font-medium text-sm transition-colors">
                    <i class="ph ph-chalkboard-teacher mr-2"></i> Facilitators
                </button>
                <button @click="activeTab = 'collections'" 
                        :class="activeTab === 'collections' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                        class="py-4 px-6 border-b-2 font-medium text-sm transition-colors">
                    <i class="ph ph-currency-tzs mr-2"></i> Collections
                </button>
                <button @click="activeTab = 'leaders'" 
                        :class="activeTab === 'leaders' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                        class="py-4 px-6 border-b-2 font-medium text-sm transition-colors">
                    <i class="ph ph-crown mr-2"></i> Leaders
                </button>
                <button @click="activeTab = 'reminders'" 
                        :class="activeTab === 'reminders' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                        class="py-4 px-6 border-b-2 font-medium text-sm transition-colors">
                    <i class="ph ph-bell mr-2"></i> Reminders
                </button>
            </nav>
        </div>
    </div>

    <!-- Overview Tab -->
    <div x-show="activeTab === 'overview'" class="space-y-6">
        <!-- Filters and Search -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div class="flex flex-wrap gap-2">
                    <select x-model="filterType" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="all">All Types</option>
                        <option value="conference">Conference</option>
                        <option value="summit">Summit</option>
                        <option value="workshop">Workshop</option>
                        <option value="service">Service</option>
                    </select>
                    
                    <select x-model="filterStatus" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="all">All Status</option>
                        <option value="live">Live</option>
                        <option value="upcoming">Upcoming</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                
                <div class="relative">
                    <input type="text" 
                           x-model="searchQuery"
                           placeholder="Search events..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="ph ph-magnifying-glass absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
        </div>

        <!-- Events List -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Registrations</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Budget</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Collections</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <template x-for="event in filteredEvents" :key="event.id">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-lg object-cover" :src="event.image" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900" x-text="event.name"></div>
                                            <div class="text-sm text-gray-500" x-text="event.location"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span :class="getTypeColor(event.type)" class="px-2 py-1 text-xs font-medium rounded-full" x-text="event.type"></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div x-text="formatDate(event.date)"></div>
                                    <div class="text-xs" x-text="event.time"></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900" x-text="event.registrations + ' / ' + event.capacity"></div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" :style="'width: ' + (event.registrations / event.capacity * 100) + '%'"></div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" x-text="formatCurrency(event.budget?.total || 0)"></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" x-text="formatCurrency(event.collections?.total || 0)"></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span :class="getStatusColor(event.status)" class="px-2 py-1 text-xs font-medium rounded-full" x-text="event.status"></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex items-center gap-2">
                                        <button @click="openEventDetails(event)" class="text-blue-600 hover:text-blue-900" title="View Details">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button @click="openFinanceModal(event)" class="text-green-600 hover:text-green-900" title="Finance">
                                            <i class="ph ph-money"></i>
                                        </button>
                                        <button @click="openFacilitatorModal(event)" class="text-purple-600 hover:text-purple-900" title="Facilitators">
                                            <i class="ph ph-chalkboard-teacher"></i>
                                        </button>
                                        <button @click="openCollectionModal(event)" class="text-orange-600 hover:text-orange-900" title="Collections">
                                            <i class="ph ph-currency-tzs"></i>
                                        </button>
                                        <button @click="openLeaderModal(event)" class="text-indigo-600 hover:text-indigo-900" title="Leaders">
                                            <i class="ph ph-crown"></i>
                                        </button>
                                        <button @click="openReminderModal(event)" class="text-yellow-600 hover:text-yellow-900" title="Reminders">
                                            <i class="ph ph-bell"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Event Details Tab -->
    <div x-show="activeTab === 'details' && selectedEvent" class="space-y-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900" x-text="selectedEvent?.name"></h2>
                <span :class="getStatusColor(selectedEvent?.status)" class="px-3 py-1 text-sm font-medium rounded-full" x-text="selectedEvent?.status"></span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Event Information</h3>
                    <dl class="space-y-3">
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Type:</dt>
                            <dd class="text-sm text-gray-900" x-text="selectedEvent?.type"></dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Date:</dt>
                            <dd class="text-sm text-gray-900" x-text="formatDate(selectedEvent?.date)"></dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Time:</dt>
                            <dd class="text-sm text-gray-900" x-text="selectedEvent?.time"></dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Location:</dt>
                            <dd class="text-sm text-gray-900" x-text="selectedEvent?.location"></dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Organizer:</dt>
                            <dd class="text-sm text-gray-900" x-text="selectedEvent?.organizer"></dd>
                        </div>
                    </dl>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Registration Details</h3>
                    <dl class="space-y-3">
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Registrations:</dt>
                            <dd class="text-sm text-gray-900" x-text="selectedEvent?.registrations + ' / ' + selectedEvent?.capacity"></dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Price:</dt>
                            <dd class="text-sm text-gray-900" x-text="formatCurrency(selectedEvent?.price)"></dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Registration Open:</dt>
                            <dd class="text-sm text-gray-900" x-text="selectedEvent?.registrationOpen ? 'Yes' : 'No'"></dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Livestream:</dt>
                            <dd class="text-sm text-gray-900" x-text="selectedEvent?.livestreamEnabled ? 'Yes' : 'No'"></dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-sm font-medium text-gray-500">Certificate:</dt>
                            <dd class="text-sm text-gray-900" x-text="selectedEvent?.hasCertificate ? 'Yes' : 'No'"></dd>
                        </div>
                    </dl>
                </div>
            </div>
            
            <div class="mt-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Description</h3>
                <p class="text-gray-600" x-text="selectedEvent?.description"></p>
            </div>
        </div>
    </div>

    <!-- Finance & Budget Tab -->
    <div x-show="activeTab === 'finance' && selectedEvent" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Budget Overview -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Budget Overview</h3>
                <dl class="space-y-3">
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500">Total Budget:</dt>
                        <dd class="text-sm font-bold text-gray-900" x-text="formatCurrency(selectedEvent?.budget?.total || 0)"></dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500">Allocated:</dt>
                        <dd class="text-sm text-gray-900" x-text="formatCurrency(selectedEvent?.budget?.allocated || 0)"></dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500">Spent:</dt>
                        <dd class="text-sm text-orange-600" x-text="formatCurrency(selectedEvent?.budget?.spent || 0)"></dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500">Remaining:</dt>
                        <dd class="text-sm text-green-600" x-text="formatCurrency(selectedEvent?.budget?.remaining || 0)"></dd>
                    </div>
                </dl>
                
                <!-- Budget Progress -->
                <div class="mt-6">
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-500">Budget Usage</span>
                        <span class="text-gray-900" x-text="Math.round((selectedEvent?.budget?.spent || 0) / (selectedEvent?.budget?.total || 1) * 100) + '%'"></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-orange-600 h-3 rounded-full transition-all duration-300" :style="'width: ' + Math.round((selectedEvent?.budget?.spent || 0) / (selectedEvent?.budget?.total || 1) * 100) + '%'"></div>
                    </div>
                </div>
            </div>
            
            <!-- Budget Categories -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Budget Categories</h3>
                <div class="space-y-3" x-show="selectedEvent?.budget?.categories">
                    <template x-for="[category, amount] in Object.entries(selectedEvent?.budget?.categories || {})" :key="category">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600 capitalize" x-text="category"></span>
                            <span class="text-sm font-medium text-gray-900" x-text="formatCurrency(amount)"></span>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        
        <!-- Collections Overview -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Collections Overview</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-2xl font-bold text-green-600" x-text="formatCurrency(selectedEvent?.collections?.registration || 0)"></div>
                    <div class="text-sm text-gray-600">Registration Fees</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-600" x-text="formatCurrency(selectedEvent?.collections?.donations || 0)"></div>
                    <div class="text-sm text-gray-600">Donations</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-purple-600" x-text="formatCurrency(selectedEvent?.collections?.sponsorships || 0)"></div>
                    <div class="text-sm text-gray-600">Sponsorships</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-orange-600" x-text="formatCurrency(selectedEvent?.collections?.total || 0)"></div>
                    <div class="text-sm text-gray-600">Total Collections</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Facilitators Tab -->
    <div x-show="activeTab === 'facilitators' && selectedEvent" class="space-y-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Event Facilitators</h3>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center gap-2">
                    <i class="ph ph-plus"></i>
                    Add Facilitator
                </button>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fee</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <template x-for="facilitator in selectedEvent?.facilitators || []" :key="facilitator.id">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900" x-text="facilitator.name"></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" x-text="facilitator.role"></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" x-text="formatCurrency(facilitator.fee)"></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span :class="facilitator.status === 'confirmed' ? 'text-green-600 bg-green-50' : 'text-yellow-600 bg-yellow-50'" class="px-2 py-1 text-xs font-medium rounded-full" x-text="facilitator.status"></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                                    <button class="text-red-600 hover:text-red-900">Remove</button>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Collections Tab -->
    <div x-show="activeTab === 'collections' && selectedEvent" class="space-y-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Collection Management</h3>
                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-2">
                    <i class="ph ph-plus"></i>
                    Add Collection
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-gray-600">Registration Fees</span>
                        <i class="ph ph-users text-gray-400"></i>
                    </div>
                    <div class="text-2xl font-bold text-gray-900" x-text="formatCurrency(selectedEvent?.collections?.registration || 0)"></div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-gray-600">Donations</span>
                        <i class="ph ph-heart text-gray-400"></i>
                    </div>
                    <div class="text-2xl font-bold text-gray-900" x-text="formatCurrency(selectedEvent?.collections?.donations || 0)"></div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-gray-600">Sponsorships</span>
                        <i class="ph ph-handshake text-gray-400"></i>
                    </div>
                    <div class="text-2xl font-bold text-gray-900" x-text="formatCurrency(selectedEvent?.collections?.sponsorships || 0)"></div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-gray-600">Merchandise</span>
                        <i class="ph ph-shopping-bag text-gray-400"></i>
                    </div>
                    <div class="text-2xl font-bold text-gray-900" x-text="formatCurrency(selectedEvent?.collections?.merchandise || 0)"></div>
                </div>
            </div>
            
            <!-- Recent Collections -->
            <div>
                <h4 class="text-md font-semibold text-gray-900 mb-4">Recent Collections</h4>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="ph ph-users text-green-600 text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-gray-900">Registration Payment - John Doe</div>
                                <div class="text-xs text-gray-500">2 hours ago</div>
                            </div>
                        </div>
                        <div class="text-sm font-medium text-gray-900">30,000 TSh</div>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="ph ph-heart text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-gray-900">Donation - Jane Smith</div>
                                <div class="text-xs text-gray-500">5 hours ago</div>
                            </div>
                        </div>
                        <div class="text-sm font-medium text-gray-900">50,000 TSh</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Leaders Tab -->
    <div x-show="activeTab === 'leaders' && selectedEvent" class="space-y-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Event Leadership Team</h3>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors flex items-center gap-2">
                    <i class="ph ph-plus"></i>
                    Add Leader
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="leader in selectedEvent?.leaders || []" :key="leader.id">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                                <i class="ph ph-crown text-indigo-600 text-xl"></i>
                            </div>
                            <span class="text-xs text-gray-500" x-text="leader.role"></span>
                        </div>
                        <h4 class="font-medium text-gray-900 mb-1" x-text="leader.name"></h4>
                        <div class="space-y-1 text-sm text-gray-600">
                            <div class="flex items-center gap-2">
                                <i class="ph ph-phone text-gray-400"></i>
                                <span x-text="leader.contact"></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="ph ph-envelope text-gray-400"></i>
                                <span x-text="leader.email"></span>
                            </div>
                        </div>
                        <div class="flex gap-2 mt-3">
                            <button class="text-blue-600 hover:text-blue-900 text-sm">Edit</button>
                            <button class="text-red-600 hover:text-red-900 text-sm">Remove</button>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- Reminders Tab -->
    <div x-show="activeTab === 'reminders' && selectedEvent" class="space-y-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Event Reminders</h3>
                <button class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700 transition-colors flex items-center gap-2">
                    <i class="ph ph-plus"></i>
                    Create Reminder
                </button>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Send Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <template x-for="reminder in selectedEvent?.reminders || []" :key="reminder.id">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800" x-text="reminder.type"></span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900" x-text="reminder.message"></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" x-text="formatDate(reminder.sendDate)"></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span :class="reminder.status === 'sent' ? 'text-green-600 bg-green-50' : reminder.status === 'scheduled' ? 'text-blue-600 bg-blue-50' : 'text-gray-600 bg-gray-50'" class="px-2 py-1 text-xs font-medium rounded-full" x-text="reminder.status"></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                                    <button class="text-red-600 hover:text-red-900">Delete</button>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Registration Tab -->
    <div x-show="activeTab === 'registration' && selectedEvent" class="space-y-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-6">Registration Management</h3>
            
            <!-- Registration Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="text-2xl font-bold text-gray-900" x-text="selectedEvent?.registrations || 0"></div>
                    <div class="text-sm text-gray-600">Total Registrations</div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="text-2xl font-bold text-green-600" x-text="selectedEvent?.capacity - (selectedEvent?.registrations || 0)"></div>
                    <div class="text-sm text-gray-600">Available Slots</div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="text-2xl font-bold text-blue-600" x-text="formatCurrency((selectedEvent?.registrations || 0) * (selectedEvent?.price || 0))"></div>
                    <div class="text-sm text-gray-600">Revenue from Registrations</div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="text-2xl font-bold text-purple-600" x-text="Math.round((selectedEvent?.registrations || 0) / (selectedEvent?.capacity || 1) * 100) + '%'"></div>
                    <div class="text-sm text-gray-600">Occupancy Rate</div>
                </div>
            </div>
            
            <!-- Recent Registrations -->
            <div>
                <h4 class="text-md font-semibold text-gray-900 mb-4">Recent Registrations</h4>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Registration Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Payment Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">John Doe</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">john.doe@email.com</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+255712345678</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2026-03-28</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-50 text-green-800">Paid</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3">View</button>
                                    <button class="text-red-600 hover:text-red-900">Cancel</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Jane Smith</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">jane.smith@email.com</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+255713456789</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2026-03-27</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-50 text-yellow-800">Pending</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3">View</button>
                                    <button class="text-red-600 hover:text-red-900">Cancel</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
