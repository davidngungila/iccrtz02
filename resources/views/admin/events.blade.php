@extends('layouts.admin')

@section('title', 'Events Management')

@section('page-title', 'Events Management')

@section('content')
<div class="p-6" x-data="{ 
    currentView: 'eventsList', // eventsList, createEvent, editEvent, eventDetail, eventDashboard, eventMedia, eventTickets, eventCommunication, eventAttendance
    selectedEvent: null,
    editingEvent: null,
    searchQuery: '',
    filterStatus: 'all', // all, upcoming, past, ongoing
    filterCategory: 'all', // all, seminar, retreat, crusade, conference, workshop
    filterPublishedStatus: 'all', // all, draft, published, cancelled
    charts: {},
    events: [
        {
            id: 1,
            title: 'International Easter Conference 2026',
            description: 'Join thousands of believers for this transformative conference featuring renowned speakers, worship sessions, and spiritual renewal.',
            category: 'conference',
            status: 'ongoing', // upcoming, past, ongoing
            publishedStatus: 'published', // draft, published, cancelled
            date: '2026-03-31',
            endDate: '2026-04-05',
            time: '09:00 AM',
            endTime: '06:00 PM',
            location: 'Archdiocese of Mbeya, Tanzania',
            locationType: 'physical', // physical, online, hybrid
            venue: 'Mbeya City Stadium',
            bannerImage: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1200&h=400&fit=crop',
            organizer: 'ICCRTZ National Team',
            capacity: 5000,
            registered: 1250,
            confirmed: 1180,
            attended: 1100,
            ticketType: 'paid', // free, paid
            ticketPrice: 30000,
            currency: 'TSh',
            revenue: 35400000,
            qrCode: 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=EASTER2026',
            gallery: [
                'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=800&h=600&fit=crop'
            ],
            registrations: [
                { id: 1, name: 'John Michael', email: 'john@example.com', phone: '+255 712 345 678', diocese: 'Archdiocese of Dar es Salaam', parish: 'St. Mary\'s Cathedral', registrationDate: '2026-03-25', status: 'confirmed', paymentStatus: 'paid', checkInStatus: 'checked-in', qrCode: 'EASTER2026-JOHN001' },
                { id: 2, name: 'Sarah Kimani', email: 'sarah@example.com', phone: '+255 713 456 789', diocese: 'Archdiocese of Mbeya', parish: 'St. Joseph\'s Cathedral', registrationDate: '2026-03-26', status: 'confirmed', paymentStatus: 'paid', checkInStatus: 'checked-in', qrCode: 'EASTER2026-SARAH002' },
                { id: 3, name: 'Robert Chen', email: 'robert@example.com', phone: '+255 714 567 890', diocese: 'Diocese of Arusha', parish: 'Holy Spirit Church', registrationDate: '2026-03-27', status: 'pending', paymentStatus: 'pending', checkInStatus: 'not-checked-in', qrCode: 'EASTER2026-ROBERT003' }
            ],
            communications: [
                { id: 1, type: 'email', subject: 'Registration Confirmation', sentDate: '2026-03-25', recipients: 1250, status: 'sent' },
                { id: 2, type: 'sms', subject: 'Event Reminder', sentDate: '2026-03-30', recipients: 1180, status: 'sent' }
            ],
            satisfaction: 94.5,
            createdAt: '2026-03-01',
            updatedAt: '2026-03-30'
        },
        {
            id: 2,
            title: 'Youth Leadership Summit 2026',
            description: 'A three-day intensive training program for young leaders focusing on spiritual growth, leadership skills, and community service.',
            category: 'workshop',
            status: 'upcoming',
            publishedStatus: 'published',
            date: '2026-04-15',
            endDate: '2026-04-17',
            time: '10:00 AM',
            endTime: '05:00 PM',
            location: 'University of Dar es Salaam',
            locationType: 'physical',
            venue: 'Nkrumah Hall',
            bannerImage: 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1200&h=400&fit=crop',
            organizer: 'ICCRTZ Youth Ministry',
            capacity: 500,
            registered: 450,
            confirmed: 420,
            attended: 0,
            ticketType: 'paid',
            ticketPrice: 15000,
            currency: 'TSh',
            revenue: 6750000,
            qrCode: 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=YOUTH2026',
            gallery: [],
            registrations: [
                { id: 4, name: 'Grace Mbeki', email: 'grace@example.com', phone: '+255 715 678 901', diocese: 'Diocese of Dodoma', parish: 'St. Paul\'s Church', registrationDate: '2026-03-28', status: 'confirmed', paymentStatus: 'paid', checkInStatus: 'not-checked-in', qrCode: 'YOUTH2026-GRACE004' },
                { id: 5, name: 'David Ngungila', email: 'david@example.com', phone: '+255 716 789 012', diocese: 'Diocese of Mwanza', parish: 'Christ the King Church', registrationDate: '2026-03-29', status: 'confirmed', paymentStatus: 'paid', checkInStatus: 'not-checked-in', qrCode: 'YOUTH2026-DAVID005' }
            ],
            communications: [],
            satisfaction: 0,
            createdAt: '2026-03-10',
            updatedAt: '2026-03-29'
        },
        {
            id: 3,
            title: 'Spiritual Retreat 2026',
            description: 'A weekend of spiritual renewal, prayer, and reflection in a peaceful environment.',
            category: 'retreat',
            status: 'upcoming',
            publishedStatus: 'draft',
            date: '2026-05-10',
            endDate: '2026-05-12',
            time: '06:00 PM',
            endTime: '02:00 PM',
            location: 'Mikumi National Park',
            locationType: 'physical',
            venue: 'Retreat Center',
            bannerImage: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1200&h=400&fit=crop',
            organizer: 'ICCRTZ Spiritual Ministry',
            capacity: 100,
            registered: 45,
            confirmed: 30,
            attended: 0,
            ticketType: 'paid',
            ticketPrice: 50000,
            currency: 'TSh',
            revenue: 1500000,
            qrCode: 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=RETREAT2026',
            gallery: [],
            registrations: [],
            communications: [],
            satisfaction: 0,
            createdAt: '2026-03-20',
            updatedAt: '2026-03-25'
        },
        {
            id: 4,
            title: 'Digital Evangelism Crusade',
            description: 'Reaching the digital generation with the message of hope through online platforms and social media.',
            category: 'crusade',
            status: 'past',
            publishedStatus: 'published',
            date: '2026-03-10',
            endDate: '2026-03-12',
            time: '07:00 PM',
            endTime: '09:00 PM',
            location: 'Online',
            locationType: 'online',
            venue: 'YouTube Live & Zoom',
            bannerImage: 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1200&h=400&fit=crop',
            organizer: 'ICCRTZ Digital Ministry',
            capacity: 10000,
            registered: 3500,
            confirmed: 3200,
            attended: 2800,
            ticketType: 'free',
            ticketPrice: 0,
            currency: 'TSh',
            revenue: 0,
            qrCode: 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=CRUSADE2026',
            gallery: [
                'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&h=600&fit=crop'
            ],
            registrations: [],
            communications: [
                { id: 3, type: 'email', subject: 'Crusade Recording Available', sentDate: '2026-03-13', recipients: 3500, status: 'sent' }
            ],
            satisfaction: 89.2,
            createdAt: '2026-02-15',
            updatedAt: '2026-03-13'
        }
    ],
    newEvent: {
        title: '',
        description: '',
        category: 'seminar',
        date: '',
        endDate: '',
        time: '',
        endTime: '',
        location: '',
        locationType: 'physical',
        venue: '',
        organizer: '',
        capacity: null,
        ticketType: 'free',
        ticketPrice: 0,
        currency: 'TSh',
        publishedStatus: 'draft'
    },
    initCharts() {
        this.$nextTick(() => {
            this.initEventStatsChart();
            this.initRevenueChart();
            this.initAttendanceChart();
        });
    },
    initEventStatsChart() {
        const ctx = document.getElementById('eventStatsChart');
        if (ctx) {
            this.charts.eventStats = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Upcoming', 'Ongoing', 'Past'],
                    datasets: [{
                        data: [
                            this.events.filter(e => e.status === 'upcoming').length,
                            this.events.filter(e => e.status === 'ongoing').length,
                            this.events.filter(e => e.status === 'past').length
                        ],
                        backgroundColor: ['#3b82f6', '#10b981', '#6b7280']
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
                type: 'bar',
                data: {
                    labels: this.events.map(e => e.title.split(' ').slice(0, 3).join(' ')),
                    datasets: [{
                        label: 'Revenue (TSh)',
                        data: this.events.map(e => e.revenue),
                        backgroundColor: '#8b5cf6'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return 'TSh ' + (value / 1000000).toFixed(1) + 'M';
                                }
                            }
                        }
                    }
                }
            });
        }
    },
    initAttendanceChart() {
        const ctx = document.getElementById('attendanceChart');
        if (ctx) {
            this.charts.attendance = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: this.events.filter(e => e.status === 'past' || e.status === 'ongoing').map(e => e.title.split(' ').slice(0, 3).join(' ')),
                    datasets: [{
                        label: 'Attendance Rate (%)',
                        data: this.events.filter(e => e.status === 'past' || e.status === 'ongoing').map(e => Math.round((e.attended / e.confirmed) * 100)),
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
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
                            max: 100,
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    }
                }
            });
        }
    },
    navigateToEventDetail(event) {
        this.selectedEvent = event;
        this.currentView = 'eventDetail';
    },
    navigateToCreateEvent() {
        this.currentView = 'createEvent';
    },
    navigateToEditEvent(event) {
        this.editingEvent = { ...event };
        this.currentView = 'editEvent';
    },
    navigateToEventDashboard(event) {
        this.selectedEvent = event;
        this.currentView = 'eventDashboard';
    },
    navigateToEventMedia(event) {
        this.selectedEvent = event;
        this.currentView = 'eventMedia';
    },
    navigateToEventTickets(event) {
        this.selectedEvent = event;
        this.currentView = 'eventTickets';
    },
    navigateToEventCommunication(event) {
        this.selectedEvent = event;
        this.currentView = 'eventCommunication';
    },
    navigateToEventAttendance(event) {
        this.selectedEvent = event;
        this.currentView = 'eventAttendance';
    },
    createEvent() {
        const event = {
            ...this.newEvent,
            id: Date.now(),
            registered: 0,
            confirmed: 0,
            attended: 0,
            revenue: 0,
            gallery: [],
            registrations: [],
            communications: [],
            satisfaction: 0,
            createdAt: new Date().toISOString().split('T')[0],
            updatedAt: new Date().toISOString().split('T')[0]
        };
        
        this.events.push(event);
        this.currentView = 'eventsList';
        this.resetNewEvent();
    },
    updateEvent() {
        const index = this.events.findIndex(e => e.id === this.editingEvent.id);
        if (index !== -1) {
            this.events[index] = { ...this.editingEvent, updatedAt: new Date().toISOString().split('T')[0] };
        }
        this.currentView = 'eventsList';
        this.editingEvent = null;
    },
    deleteEvent(event) {
        if (confirm(`Are you sure you want to delete "${event.title}"? This action cannot be undone.`)) {
            const index = this.events.findIndex(e => e.id === event.id);
            if (index !== -1) {
                this.events.splice(index, 1);
            }
        }
    },
    publishEvent(event) {
        const index = this.events.findIndex(e => e.id === event.id);
        if (index !== -1) {
            this.events[index].publishedStatus = 'published';
            this.events[index].updatedAt = new Date().toISOString().split('T')[0];
        }
    },
    cancelEvent(event) {
        const index = this.events.findIndex(e => e.id === event.id);
        if (index !== -1) {
            this.events[index].publishedStatus = 'cancelled';
            this.events[index].updatedAt = new Date().toISOString().split('T')[0];
        }
    },
    approveRegistration(registration) {
        const eventIndex = this.events.findIndex(e => e.id === this.selectedEvent.id);
        const regIndex = this.events[eventIndex].registrations.findIndex(r => r.id === registration.id);
        if (regIndex !== -1) {
            this.events[eventIndex].registrations[regIndex].status = 'confirmed';
        }
    },
    rejectRegistration(registration) {
        const eventIndex = this.events.findIndex(e => e.id === this.selectedEvent.id);
        const regIndex = this.events[eventIndex].registrations.findIndex(r => r.id === registration.id);
        if (regIndex !== -1) {
            this.events[eventIndex].registrations[regIndex].status = 'rejected';
        }
    },
    checkInAttendee(registration) {
        const eventIndex = this.events.findIndex(e => e.id === this.selectedEvent.id);
        const regIndex = this.events[eventIndex].registrations.findIndex(r => r.id === registration.id);
        if (regIndex !== -1) {
            this.events[eventIndex].registrations[regIndex].checkInStatus = 'checked-in';
            this.events[eventIndex].attended += 1;
        }
    },
    resetNewEvent() {
        this.newEvent = {
            title: '',
            description: '',
            category: 'seminar',
            date: '',
            endDate: '',
            time: '',
            endTime: '',
            location: '',
            locationType: 'physical',
            venue: '',
            organizer: '',
            capacity: null,
            ticketType: 'free',
            ticketPrice: 0,
            currency: 'TSh',
            publishedStatus: 'draft'
        };
    },
    get filteredEvents() {
        return this.events.filter(event => {
            const matchesSearch = event.title.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                                 event.description.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                                 event.location.toLowerCase().includes(this.searchQuery.toLowerCase());
            const matchesStatus = this.filterStatus === 'all' || event.status === this.filterStatus;
            const matchesCategory = this.filterCategory === 'all' || event.category === this.filterCategory;
            const matchesPublished = this.filterPublishedStatus === 'all' || event.publishedStatus === this.filterPublishedStatus;
            return matchesSearch && matchesStatus && matchesCategory && matchesPublished;
        });
    }
}" x-init="initCharts()" x-cloak>
    <!-- Events List Page -->
    <div x-show="currentView === 'eventsList'" x-cloak>
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2">Events Management</h1>
                <p class="text-slate-600">Create and manage events, track registrations, and monitor performance</p>
            </div>
            <button @click="navigateToCreateEvent()" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-plus"></i>
                Create Event
            </button>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                        <i class="ph ph-calendar text-purple-600 text-xl"></i>
                    </div>
                    <span class="text-sm text-slate-500">Total</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900" x-text="events.length"></h3>
                <p class="text-sm text-slate-600">All Events</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="ph ph-users text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-sm text-slate-500">Total</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900" x-text="events.reduce((sum, e) => sum + e.registered, 0)"></h3>
                <p class="text-sm text-slate-600">Registrations</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="ph ph-currency-btz text-green-600 text-xl"></i>
                    </div>
                    <span class="text-sm text-slate-500">Total</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (events.reduce((sum, e) => sum + e.revenue, 0) / 1000000).toFixed(1) + 'M'"></h3>
                <p class="text-sm text-slate-600">Revenue</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                        <i class="ph ph-star text-yellow-600 text-xl"></i>
                    </div>
                    <span class="text-sm text-slate-500">Average</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900" x-text="events.filter(e => e.satisfaction > 0).length > 0 ? (events.filter(e => e.satisfaction > 0).reduce((sum, e) => sum + e.satisfaction, 0) / events.filter(e => e.satisfaction > 0).length).toFixed(1) + '%' : 'N/A'"></h3>
                <p class="text-sm text-slate-600">Satisfaction</p>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid gap-6 md:grid-cols-3 mb-8">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <h3 class="text-lg font-semibold text-slate-900 mb-4">Event Status</h3>
                <div class="h-48">
                    <canvas id="eventStatsChart"></canvas>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <h3 class="text-lg font-semibold text-slate-900 mb-4">Revenue by Event</h3>
                <div class="h-48">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <h3 class="text-lg font-semibold text-slate-900 mb-4">Attendance Rates</h3>
                <div class="h-48">
                    <canvas id="attendanceChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-6">
            <div class="flex items-center justify-between">
                <div class="relative flex-1 max-w-md">
                    <input type="text" x-model="searchQuery" placeholder="Search events..." class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-full">
                    <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
                </div>
                <div class="flex items-center gap-3 ml-4">
                    <select x-model="filterStatus" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                        <option value="all">All Status</option>
                        <option value="upcoming">Upcoming</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="past">Past</option>
                    </select>
                    <select x-model="filterCategory" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                        <option value="all">All Categories</option>
                        <option value="seminar">Seminar</option>
                        <option value="retreat">Retreat</option>
                        <option value="crusade">Crusade</option>
                        <option value="conference">Conference</option>
                        <option value="workshop">Workshop</option>
                    </select>
                    <select x-model="filterPublishedStatus" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                        <option value="all">All Published</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Events List -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200">
            <div class="p-6">
                <div class="space-y-4">
                    <template x-for="event in filteredEvents" :key="event.id">
                        <div class="border border-slate-200 rounded-lg p-6 hover:shadow-lg transition-all">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h3 class="text-lg font-semibold text-slate-900" x-text="event.title"></h3>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="event.status === 'ongoing' ? 'bg-green-100 text-green-800' : 
                                                      event.status === 'upcoming' ? 'bg-blue-100 text-blue-800' :
                                                      'bg-slate-100 text-slate-800'"
                                              x-text="event.status.toUpperCase()"></span>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="event.publishedStatus === 'published' ? 'bg-green-100 text-green-800' : 
                                                      event.publishedStatus === 'draft' ? 'bg-yellow-100 text-yellow-800' :
                                                      'bg-red-100 text-red-800'"
                                              x-text="event.publishedStatus.toUpperCase()"></span>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-800" x-text="event.category.toUpperCase()"></span>
                                    </div>
                                    <p class="text-slate-600 mb-3 line-clamp-2" x-text="event.description"></p>
                                    <div class="flex items-center gap-4 text-sm text-slate-600 mb-3">
                                        <span class="flex items-center gap-1">
                                            <i class="ph ph-calendar"></i>
                                            <span x-text="event.date"></span>
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <i class="ph ph-map-pin"></i>
                                            <span x-text="event.location"></span>
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <i class="ph ph-users"></i>
                                            <span x-text="event.registered + '/' + event.capacity"></span>
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <i class="ph ph-currency-btz"></i>
                                            <span x-text="event.ticketType === 'free' ? 'Free' : event.currency + ' ' + event.ticketPrice.toLocaleString()"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 ml-4">
                                    <button @click="navigateToEventDetail(event)" class="bg-purple-600 text-white px-3 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm font-medium">
                                        <i class="ph ph-eye mr-1"></i>
                                        View
                                    </button>
                                    <button @click="navigateToEditEvent(event)" class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-pencil"></i>
                                    </button>
                                    <button @click="deleteEvent(event)" class="text-red-600 hover:text-red-900">
                                        <i class="ph ph-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Event Page -->
    <div x-show="currentView === 'createEvent'" x-cloak>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2">Create Event</h1>
                <p class="text-slate-600">Create a new event with all necessary details</p>
            </div>
            <button @click="currentView = 'eventsList'" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-300 transition-all font-medium">
                <i class="ph ph-arrow-left mr-2"></i>
                Back to Events
            </button>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <form @submit.prevent="createEvent()" class="space-y-6">
                <!-- Basic Information -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Basic Information</h3>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Title *</label>
                            <input type="text" x-model="newEvent.title" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter event title">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Category *</label>
                            <select x-model="newEvent.category" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="seminar">Seminar</option>
                                <option value="retreat">Retreat</option>
                                <option value="crusade">Crusade</option>
                                <option value="conference">Conference</option>
                                <option value="workshop">Workshop</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Description *</label>
                        <textarea x-model="newEvent.description" required class="w-full border border-slate-200 rounded-lg px-4 py-2" rows="4" placeholder="Enter event description"></textarea>
                    </div>
                </div>

                <!-- Date & Time -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Date & Time</h3>
                    <div class="grid gap-6 md:grid-cols-3">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Start Date *</label>
                            <input type="date" x-model="newEvent.date" required class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">End Date *</label>
                            <input type="date" x-model="newEvent.endDate" required class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Start Time *</label>
                            <input type="time" x-model="newEvent.time" required class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                    </div>
                </div>

                <!-- Location -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Location</h3>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Location Type *</label>
                            <select x-model="newEvent.locationType" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="physical">Physical</option>
                                <option value="online">Online</option>
                                <option value="hybrid">Hybrid</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Location *</label>
                            <input type="text" x-model="newEvent.location" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter location">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Venue</label>
                        <input type="text" x-model="newEvent.venue" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter specific venue">
                    </div>
                </div>

                <!-- Event Banner -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Event Banner</h3>
                    <div class="border-2 border-dashed border-slate-300 rounded-lg p-6 text-center">
                        <i class="ph ph-image text-4xl text-slate-400 mb-2"></i>
                        <p class="text-slate-600">Click to upload event banner image</p>
                        <p class="text-sm text-slate-500 mt-1">Recommended size: 1200x400px</p>
                    </div>
                </div>

                <!-- Organizer & Capacity -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Event Details</h3>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Organizer *</label>
                            <input type="text" x-model="newEvent.organizer" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter organizer name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Capacity (optional)</label>
                            <input type="number" x-model="newEvent.capacity" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Maximum attendees">
                        </div>
                    </div>
                </div>

                <!-- Ticket Settings -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Ticket Settings</h3>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Ticket Type *</label>
                            <select x-model="newEvent.ticketType" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="free">Free Event</option>
                                <option value="paid">Paid Event</option>
                            </select>
                        </div>
                        <div x-show="newEvent.ticketType === 'paid'">
                            <label class="block text-sm font-medium text-slate-700 mb-2">Ticket Price (TSh) *</label>
                            <input type="number" x-model="newEvent.ticketPrice" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter ticket price">
                        </div>
                    </div>
                </div>

                <!-- Publication Status -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Publication Status</h3>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Status *</label>
                        <select x-model="newEvent.publishedStatus" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end gap-3 pt-6 border-t border-slate-200">
                    <button type="button" @click="currentView = 'eventsList'" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                        Create Event
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Event Page -->
    <div x-show="currentView === 'editEvent'" x-cloak>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2">Edit Event</h1>
                <p class="text-slate-600">Update event details and settings</p>
            </div>
            <button @click="currentView = 'eventsList'" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-300 transition-all font-medium">
                <i class="ph ph-arrow-left mr-2"></i>
                Back to Events
            </button>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <form @submit.prevent="updateEvent()" class="space-y-6">
                <!-- Basic Information -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Basic Information</h3>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Title</label>
                            <input type="text" x-model="editingEvent.title" required class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Category</label>
                            <select x-model="editingEvent.category" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="seminar">Seminar</option>
                                <option value="retreat">Retreat</option>
                                <option value="crusade">Crusade</option>
                                <option value="conference">Conference</option>
                                <option value="workshop">Workshop</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Description</label>
                        <textarea x-model="editingEvent.description" required class="w-full border border-slate-200 rounded-lg px-4 py-2" rows="4"></textarea>
                    </div>
                </div>

                <!-- Status Change -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Status Management</h3>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Status</label>
                            <select x-model="editingEvent.status" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="upcoming">Upcoming</option>
                                <option value="ongoing">Ongoing</option>
                                <option value="past">Past</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Publication Status</label>
                            <select x-model="editingEvent.publishedStatus" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-3 pt-6 border-t border-slate-200">
                    <button type="button" @click="currentView = 'eventsList'" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                        Update Event
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Event Detail Page -->
    <div x-show="currentView === 'eventDetail'" x-cloak>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2" x-text="selectedEvent?.title"></h1>
                <p class="text-slate-600" x-text="selectedEvent?.description"></p>
            </div>
            <button @click="currentView = 'eventsList'" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-300 transition-all font-medium">
                <i class="ph ph-arrow-left mr-2"></i>
                Back to Events
            </button>
        </div>

        <!-- Event Navigation Tabs -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200">
            <div class="border-b border-slate-200">
                <nav class="flex space-x-8 px-6" aria-label="Tabs">
                    <button @click="navigateToEventDashboard(selectedEvent)" 
                            class="py-4 px-1 border-b-2 font-medium text-sm transition-all border-purple-500 text-purple-600">
                        <i class="ph ph-chart-line mr-2"></i>
                        Dashboard
                    </button>
                    <button @click="currentView = 'eventDetail'" 
                            class="py-4 px-1 border-b-2 font-medium text-sm transition-all border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300">
                        <i class="ph ph-users mr-2"></i>
                        Registrations
                    </button>
                    <button @click="navigateToEventMedia(selectedEvent)" 
                            class="py-4 px-1 border-b-2 font-medium text-sm transition-all border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300">
                        <i class="ph ph-images mr-2"></i>
                        Media
                    </button>
                    <button @click="navigateToEventTickets(selectedEvent)" 
                            class="py-4 px-1 border-b-2 font-medium text-sm transition-all border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300">
                        <i class="ph ph-ticket mr-2"></i>
                        Tickets
                    </button>
                    <button @click="navigateToEventCommunication(selectedEvent)" 
                            class="py-4 px-1 border-b-2 font-medium text-sm transition-all border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300">
                        <i class="ph ph-envelope mr-2"></i>
                        Communication
                    </button>
                    <button @click="navigateToEventAttendance(selectedEvent)" 
                            class="py-4 px-1 border-b-2 font-medium text-sm transition-all border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300">
                        <i class="ph ph-check-circle mr-2"></i>
                        Attendance
                    </button>
                </nav>
            </div>

            <!-- Registrations Management -->
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Manage Registrations</h3>
                    <div class="flex items-center gap-3">
                        <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium text-sm">
                            <i class="ph ph-download mr-2"></i>
                            Export Excel
                        </button>
                        <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium text-sm">
                            <i class="ph ph-file-pdf mr-2"></i>
                            Export PDF
                        </button>
                    </div>
                </div>

                <!-- Registration Stats -->
                <div class="grid gap-6 md:grid-cols-4 mb-6">
                    <div class="bg-slate-50 rounded-lg p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.registered"></div>
                            <div class="text-sm text-slate-600">Total Registered</div>
                        </div>
                    </div>
                    <div class="bg-slate-50 rounded-lg p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.confirmed"></div>
                            <div class="text-sm text-slate-600">Confirmed</div>
                        </div>
                    </div>
                    <div class="bg-slate-50 rounded-lg p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.attended"></div>
                            <div class="text-sm text-slate-600">Attended</div>
                        </div>
                    </div>
                    <div class="bg-slate-50 rounded-lg p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.attended > 0 ? Math.round((selectedEvent.attended / selectedEvent.confirmed) * 100) + '%' : 'N/A'"></div>
                            <div class="text-sm text-slate-600">Attendance Rate</div>
                        </div>
                    </div>
                </div>

                <!-- Registration List -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Contact</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Location</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Payment</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Check-in</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200">
                            <template x-for="registration in selectedEvent?.registrations || []" :key="registration.id">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-slate-900" x-text="registration.name"></div>
                                        <div class="text-xs text-slate-500" x-text="'QR: ' + registration.qrCode"></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-slate-900" x-text="registration.email"></div>
                                        <div class="text-sm text-slate-500" x-text="registration.phone"></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-slate-900" x-text="registration.diocese"></div>
                                        <div class="text-sm text-slate-500" x-text="registration.parish"></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="registration.status === 'confirmed' ? 'bg-green-100 text-green-800' : 
                                                      registration.status === 'pending' ? 'bg-yellow-100 text-yellow-800' :
                                                      'bg-red-100 text-red-800'"
                                              x-text="registration.status"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="registration.paymentStatus === 'paid' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                                              x-text="registration.paymentStatus"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="registration.checkInStatus === 'checked-in' ? 'bg-green-100 text-green-800' : 'bg-slate-100 text-slate-800'"
                                              x-text="registration.checkInStatus === 'checked-in' ? 'Checked In' : 'Not Checked In'"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <template x-if="registration.status === 'pending'">
                                            <button @click="approveRegistration(registration)" class="text-green-600 hover:text-green-900 mr-3">Approve</button>
                                            <button @click="rejectRegistration(registration)" class="text-red-600 hover:text-red-900">Reject</button>
                                        </template>
                                        <template x-if="registration.status === 'confirmed' && registration.checkInStatus === 'not-checked-in'">
                                            <button @click="checkInAttendee(registration)" class="text-blue-600 hover:text-blue-900">Check In</button>
                                        </template>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Dashboard -->
    <div x-show="currentView === 'eventDashboard'" x-cloak>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2" x-text="selectedEvent?.title + ' - Dashboard'"></h1>
                <p class="text-slate-600">Event performance and analytics overview</p>
            </div>
            <button @click="currentView = 'eventsList'" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-300 transition-all font-medium">
                <i class="ph ph-arrow-left mr-2"></i>
                Back to Events
            </button>
        </div>

        <!-- Dashboard Stats -->
        <div class="grid gap-6 md:grid-cols-4 mb-8">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="ph ph-users text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-sm text-slate-500">Total</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.registered"></h3>
                <p class="text-sm text-slate-600">Registered</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="ph ph-check-circle text-green-600 text-xl"></i>
                    </div>
                    <span class="text-sm text-slate-500">Confirmed</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.confirmed"></h3>
                <p class="text-sm text-slate-600">Attendees</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                        <i class="ph ph-currency-btz text-purple-600 text-xl"></i>
                    </div>
                    <span class="text-sm text-slate-500">Revenue</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (selectedEvent?.revenue / 1000000).toFixed(1) + 'M'"></h3>
                <p class="text-sm text-slate-600">Total Revenue</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                        <i class="ph ph-chart-line text-yellow-600 text-xl"></i>
                    </div>
                    <span class="text-sm text-slate-500">Rate</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.attended > 0 ? Math.round((selectedEvent.attended / selectedEvent.confirmed) * 100) + '%' : 'N/A'"></h3>
                <p class="text-sm text-slate-600">Attendance</p>
            </div>
        </div>

        <!-- Additional Analytics -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <h3 class="text-lg font-semibold text-slate-900 mb-4">Event Analytics</h3>
            <div class="text-center py-12">
                <i class="ph ph-chart-bar text-6xl text-slate-300 mb-4"></i>
                <p class="text-slate-600">Detailed analytics charts will be displayed here</p>
            </div>
        </div>
    </div>

    <!-- Event Media -->
    <div x-show="currentView === 'eventMedia'" x-cloak>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2" x-text="selectedEvent?.title + ' - Media'"></h1>
                <p class="text-slate-600">Manage event photos and videos</p>
            </div>
            <button @click="currentView = 'eventsList'" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-300 transition-all font-medium">
                <i class="ph ph-arrow-left mr-2"></i>
                Back to Events
            </button>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-900">Event Gallery</h3>
                <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium">
                    <i class="ph ph-upload mr-2"></i>
                    Upload Media
                </button>
            </div>

            <!-- Upload Area -->
            <div class="border-2 border-dashed border-slate-300 rounded-lg p-8 text-center mb-6">
                <i class="ph ph-cloud-upload text-4xl text-slate-400 mb-2"></i>
                <p class="text-slate-600">Drag and drop photos and videos here</p>
                <p class="text-sm text-slate-500 mt-1">Support for JPG, PNG, MP4 formats</p>
            </div>

            <!-- Gallery Grid -->
            <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-4">
                <template x-for="(media, index) in selectedEvent?.gallery || []" :key="index">
                    <div class="relative group">
                        <img :src="media" class="w-full h-48 object-cover rounded-lg">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg flex items-center justify-center">
                            <button class="text-white hover:text-red-400">
                                <i class="ph ph-trash text-xl"></i>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- Event Tickets -->
    <div x-show="currentView === 'eventTickets'" x-cloak>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2" x-text="selectedEvent?.title + ' - Tickets'"></h1>
                <p class="text-slate-600">Manage tickets and access control</p>
            </div>
            <button @click="currentView = 'eventsList'" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-300 transition-all font-medium">
                <i class="ph ph-arrow-left mr-2"></i>
                Back to Events
            </button>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <h3 class="text-lg font-semibold text-slate-900 mb-6">Ticket Settings</h3>

            <!-- Ticket Type -->
            <div class="grid gap-6 md:grid-cols-2 mb-6">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Ticket Type</label>
                    <div class="p-4 bg-slate-50 rounded-lg">
                        <div class="flex items-center justify-between">
                            <span class="font-medium" x-text="selectedEvent?.ticketType === 'free' ? 'Free Event' : 'Paid Event'"></span>
                            <span class="text-slate-600" x-text="selectedEvent?.ticketType === 'free' ? 'No charge' : selectedEvent?.currency + ' ' + selectedEvent?.ticketPrice.toLocaleString()"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">QR Code for Check-in</label>
                    <div class="p-4 bg-slate-50 rounded-lg text-center">
                        <img :src="selectedEvent?.qrCode" class="w-32 h-32 mx-auto">
                        <p class="text-sm text-slate-600 mt-2">Scan for event check-in</p>
                    </div>
                </div>
            </div>

            <!-- Access Control -->
            <div>
                <h4 class="font-medium text-slate-900 mb-3">Access Control</h4>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                        <span class="text-sm text-slate-700">QR Code Check-in</span>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Enabled</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                        <span class="text-sm text-slate-700">Manual Check-in</span>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Enabled</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                        <span class="text-sm text-slate-700">Registration Required</span>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Enabled</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Communication -->
    <div x-show="currentView === 'eventCommunication'" x-cloak>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2" x-text="selectedEvent?.title + ' - Communication'"></h1>
                <p class="text-slate-600">Send messages to attendees</p>
            </div>
            <button @click="currentView = 'eventsList'" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-300 transition-all font-medium">
                <i class="ph ph-arrow-left mr-2"></i>
                Back to Events
            </button>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-900">Send Communication</h3>
                <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium">
                    <i class="ph ph-paper-plane-tilt mr-2"></i>
                    New Message
                </button>
            </div>

            <!-- Communication Form -->
            <div class="grid gap-6 md:grid-cols-2 mb-6">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Message Type</label>
                    <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        <option>Email</option>
                        <option>SMS</option>
                        <option>Both</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Recipients</label>
                    <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        <option>All Registered</option>
                        <option>Confirmed Only</option>
                        <option>Pending Only</option>
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
                <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter message subject">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-slate-700 mb-2">Message</label>
                <textarea class="w-full border border-slate-200 rounded-lg px-4 py-2" rows="6" placeholder="Enter your message here"></textarea>
            </div>

            <button class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition-all font-medium">
                <i class="ph ph-paper-plane-tilt mr-2"></i>
                Send Message
            </button>

            <!-- Communication History -->
            <div class="mt-8">
                <h4 class="font-medium text-slate-900 mb-4">Communication History</h4>
                <div class="space-y-3">
                    <template x-for="comm in selectedEvent?.communications || []" :key="comm.id">
                        <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg">
                            <div>
                                <div class="font-medium text-slate-900" x-text="comm.subject"></div>
                                <div class="text-sm text-slate-600">
                                    <span x-text="comm.type + ' • ' + comm.recipients + ' recipients'"></span> • 
                                    <span x-text="comm.sentDate"></span>
                                </div>
                            </div>
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800" x-text="comm.status"></span>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Attendance -->
    <div x-show="currentView === 'eventAttendance'" x-cloak>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 mb-2" x-text="selectedEvent?.title + ' - Attendance'"></h1>
                <p class="text-slate-600">Track and manage event attendance</p>
            </div>
            <button @click="currentView = 'eventsList'" class="bg-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-300 transition-all font-medium">
                <i class="ph ph-arrow-left mr-2"></i>
                Back to Events
            </button>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-slate-900">Attendance Tracking</h3>
                <div class="flex items-center gap-3">
                    <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium">
                        <i class="ph ph-qrcode mr-2"></i>
                        QR Code Scan
                    </button>
                    <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium">
                        <i class="ph ph-list-checks mr-2"></i>
                        Manual Check-in
                    </button>
                </div>
            </div>

            <!-- Attendance Stats -->
            <div class="grid gap-6 md:grid-cols-3 mb-6">
                <div class="bg-slate-50 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.confirmed"></div>
                        <div class="text-sm text-slate-600">Expected Attendees</div>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.attended"></div>
                        <div class="text-sm text-slate-600">Checked In</div>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-slate-900" x-text="selectedEvent?.attended > 0 ? Math.round((selectedEvent.attended / selectedEvent.confirmed) * 100) + '%' : '0%'"></div>
                        <div class="text-sm text-slate-600">Attendance Rate</div>
                    </div>
                </div>
            </div>

            <!-- QR Code Scanner -->
            <div class="border-2 border-dashed border-slate-300 rounded-lg p-8 text-center mb-6">
                <i class="ph ph-qrcode text-4xl text-slate-400 mb-2"></i>
                <p class="text-slate-600">QR Code Scanner</p>
                <p class="text-sm text-slate-500 mt-1">Position QR code in front of camera to check in attendees</p>
            </div>

            <!-- Attendance Report -->
            <div>
                <h4 class="font-medium text-slate-900 mb-4">Attendance Report</h4>
                <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium text-sm mb-4">
                    <i class="ph ph-download mr-2"></i>
                    Download Attendance Report
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
