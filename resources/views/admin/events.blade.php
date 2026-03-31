@extends('layouts.admin')

@section('title', 'Comprehensive Events Management')

@section('page-title', 'Comprehensive Events Management')

@section('content')
<div class="p-6" x-data="{ 
    activeView: 'events', // events, create, edit, eventDetail
    currentEvent: null,
    editingEvent: null,
    searchQuery: '',
    filterStatus: 'all',
    filterCategory: 'all',
    filterTimeframe: 'all',
    events: [
        {
            id: 1,
            title: 'International Easter Conference 2026',
            description: 'Join thousands of believers for this transformative conference featuring renowned speakers, worship sessions, and spiritual renewal.',
            date: '2026-03-31',
            endDate: '2026-04-05',
            time: '09:00 AM',
            endTime: '06:00 PM',
            location: 'Archdiocese of Mbeya, Tanzania',
            locationType: 'physical',
            venue: 'Mbeya City Stadium',
            category: 'conference',
            status: 'published',
            organizer: 'ICCRTZ National Team',
            capacity: 5000,
            registered: 1250,
            confirmed: 1180,
            attended: 1120,
            price: 30000,
            currency: 'TSh',
            bannerImage: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1200&h=600&fit=crop',
            qrCode: 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=ECC2026-001',
            createdAt: '2026-03-01',
            updatedAt: '2026-03-25',
            media: {
                photos: ['https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=600&fit=crop', 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=800&h=600&fit=crop'],
                videos: ['https://www.youtube.com/embed/PgIJm42OJhw']
            },
            communications: {
                smsEnabled: true,
                emailEnabled: true,
                lastReminder: '2026-03-28'
            }
        },
        {
            id: 2,
            title: 'Youth Leadership Summit 2026',
            description: 'A three-day intensive training program for young leaders focusing on spiritual growth, leadership skills, and community service.',
            date: '2026-04-15',
            endDate: '2026-04-17',
            time: '10:00 AM',
            endTime: '05:00 PM',
            location: 'University of Dar es Salaam',
            locationType: 'physical',
            venue: 'Nkrumah Hall',
            category: 'seminar',
            status: 'published',
            organizer: 'ICCRTZ Youth Ministry',
            capacity: 500,
            registered: 450,
            confirmed: 420,
            attended: 0,
            price: 15000,
            currency: 'TSh',
            bannerImage: 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1200&h=600&fit=crop',
            qrCode: 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=YLS2026-002',
            createdAt: '2026-03-10',
            updatedAt: '2026-03-28',
            media: {
                photos: [],
                videos: []
            },
            communications: {
                smsEnabled: true,
                emailEnabled: true,
                lastReminder: '2026-04-10'
            }
        },
        {
            id: 3,
            title: 'Annual Thanksgiving Service',
            description: 'A special service of thanksgiving and praise celebrating God\'s faithfulness throughout the year.',
            date: '2026-03-15',
            endDate: '2026-03-15',
            time: '06:00 PM',
            endTime: '08:30 PM',
            location: 'St. Mary\'s Cathedral',
            locationType: 'physical',
            venue: 'Main Sanctuary',
            category: 'service',
            status: 'completed',
            organizer: 'St. Mary\'s Cathedral',
            capacity: 1000,
            registered: 800,
            confirmed: 780,
            attended: 750,
            price: 0,
            currency: 'TSh',
            bannerImage: 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=1200&h=600&fit=crop',
            qrCode: 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=ATS2026-003',
            createdAt: '2026-02-20',
            updatedAt: '2026-03-16',
            media: {
                photos: ['https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&h=600&fit=crop'],
                videos: []
            },
            communications: {
                smsEnabled: false,
                emailEnabled: true,
                lastReminder: '2026-03-14'
            }
        },
        {
            id: 4,
            title: 'Women\'s Empowerment Workshop',
            description: 'Empowering women through spiritual formation, leadership development, and practical skills training.',
            date: '2026-04-22',
            endDate: '2026-04-22',
            time: '09:00 AM',
            endTime: '04:00 PM',
            location: 'Archdiocese of Dar es Salaam',
            locationType: 'physical',
            venue: 'Catholic Secretariat',
            category: 'workshop',
            status: 'draft',
            organizer: 'ICCRTZ Women\'s Guild',
            capacity: 150,
            registered: 120,
            confirmed: 110,
            attended: 0,
            price: 10000,
            currency: 'TSh',
            bannerImage: 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1200&h=600&fit=crop',
            qrCode: 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=WEW2026-004',
            createdAt: '2026-03-15',
            updatedAt: '2026-03-29',
            media: {
                photos: [],
                videos: []
            },
            communications: {
                smsEnabled: true,
                emailEnabled: true,
                lastReminder: null
            }
        },
        {
            id: 5,
            title: 'Digital Evangelism Crusade',
            description: 'A groundbreaking online crusade reaching thousands through digital platforms and social media.',
            date: '2026-05-10',
            endDate: '2026-05-12',
            time: '07:00 PM',
            endTime: '09:00 PM',
            location: 'Online - Zoom & YouTube',
            locationType: 'online',
            venue: 'Virtual Platform',
            category: 'crusade',
            status: 'published',
            organizer: 'ICCRTZ Digital Ministry',
            capacity: 10000,
            registered: 3500,
            confirmed: 3200,
            attended: 0,
            price: 0,
            currency: 'TSh',
            bannerImage: 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1200&h=600&fit=crop',
            qrCode: 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=DEC2026-005',
            createdAt: '2026-03-20',
            updatedAt: '2026-03-30',
            media: {
                photos: [],
                videos: []
            },
            communications: {
                smsEnabled: true,
                emailEnabled: true,
                lastReminder: null
            }
        }
    ],
    registrations: [
        { id: 1, eventId: 1, name: 'John Michael', email: 'john@example.com', phone: '+255 712 345 678', diocese: 'Archdiocese of Dar es Salaam', parish: 'St. Mary\'s Cathedral', registrationDate: '2026-03-25', status: 'confirmed', paymentStatus: 'paid', amount: 30000, attendanceStatus: 'attended', checkedInAt: '2026-03-31 08:45 AM' },
        { id: 2, eventId: 1, name: 'Sarah Kimani', email: 'sarah@example.com', phone: '+255 713 456 789', diocese: 'Archdiocese of Mbeya', parish: 'St. Joseph\'s Cathedral', registrationDate: '2026-03-26', status: 'confirmed', paymentStatus: 'paid', amount: 30000, attendanceStatus: 'attended', checkedInAt: '2026-03-31 09:15 AM' },
        { id: 3, eventId: 1, name: 'Robert Chen', email: 'robert@example.com', phone: '+255 714 567 890', diocese: 'Diocese of Arusha', parish: 'Holy Spirit Church', registrationDate: '2026-03-27', status: 'pending', paymentStatus: 'pending', amount: 30000, attendanceStatus: 'not-attended' },
        { id: 4, eventId: 2, name: 'Grace Mbeki', email: 'grace@example.com', phone: '+255 715 678 901', diocese: 'Diocese of Dodoma', parish: 'St. Paul\'s Church', registrationDate: '2026-03-28', status: 'confirmed', paymentStatus: 'paid', amount: 15000, attendanceStatus: 'not-attended' },
        { id: 5, eventId: 2, name: 'David Ngungila', email: 'david@example.com', phone: '+255 716 789 012', diocese: 'Diocese of Mwanza', parish: 'Christ the King Church', registrationDate: '2026-03-29', status: 'confirmed', paymentStatus: 'paid', amount: 15000, attendanceStatus: 'not-attended' },
        { id: 6, eventId: 4, name: 'Anna Mwangi', email: 'anna@example.com', phone: '+255 717 890 123', diocese: 'Archdiocese of Dar es Salaam', parish: 'St. Mary\'s Cathedral', registrationDate: '2026-03-30', status: 'confirmed', paymentStatus: 'paid', amount: 10000, attendanceStatus: 'not-attended' }
    ],
    newEvent: {
        title: '',
        description: '',
        date: '',
        endDate: '',
        time: '',
        endTime: '',
        location: '',
        locationType: 'physical',
        venue: '',
        category: 'conference',
        status: 'draft',
        organizer: '',
        capacity: '',
        price: 0,
        currency: 'TSh',
        bannerImage: ''
    },
    showCreateModal: false,
    showEditModal: false,
    showDeleteModal: false,
    showCommunicationModal: false,
    showMediaModal: false,
    showQRModal: false,
    communicationType: 'sms',
    communicationMessage: '',
    mediaType: 'photo',
    mediaUrl: '',
    selectedRegistrations: [],
    
    // Computed properties
    get filteredEvents() {
        return this.events.filter(event => {
            const matchesSearch = event.title.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                                event.description.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                                event.location.toLowerCase().includes(this.searchQuery.toLowerCase());
            const matchesStatus = this.filterStatus === 'all' || event.status === this.filterStatus;
            const matchesCategory = this.filterCategory === 'all' || event.category === this.filterCategory;
            const matchesTimeframe = this.filterTimeframe === 'all' || 
                                   (this.filterTimeframe === 'upcoming' && new Date(event.date) > new Date()) ||
                                   (this.filterTimeframe === 'past' && new Date(event.date) < new Date()) ||
                                   (this.filterTimeframe === 'ongoing' && event.status === 'published');
            return matchesSearch && matchesStatus && matchesCategory && matchesTimeframe;
        });
    },
    
    get eventRegistrations() {
        return this.registrations.filter(reg => reg.eventId === this.currentEvent?.id);
    },
    
    get eventStats() {
        if (!this.currentEvent) return null;
        return {
            totalRegistered: this.currentEvent.registered,
            confirmed: this.currentEvent.confirmed,
            attended: this.currentEvent.attended,
            attendanceRate: this.currentEvent.attended > 0 ? Math.round((this.currentEvent.attended / this.currentEvent.confirmed) * 100) : 0,
            revenue: this.currentEvent.price * this.currentEvent.confirmed,
            capacity: this.currentEvent.capacity,
            occupancyRate: Math.round((this.currentEvent.registered / this.currentEvent.capacity) * 100)
        };
    },
    
    // Methods
    createEvent() {
        const event = {
            ...this.newEvent,
            id: Date.now(),
            registered: 0,
            confirmed: 0,
            attended: 0,
            createdAt: new Date().toISOString().split('T')[0],
            updatedAt: new Date().toISOString().split('T')[0],
            media: { photos: [], videos: [] },
            communications: { smsEnabled: false, emailEnabled: false, lastReminder: null },
            qrCode: `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=EVT${Date.now()}`
        };
        
        this.events.push(event);
        this.showCreateModal = false;
        this.resetNewEvent();
        this.showNotification('Event created successfully', 'success');
    },
    
    editEvent(event) {
        this.editingEvent = { ...event };
        this.showEditModal = true;
    },
    
    updateEvent() {
        const index = this.events.findIndex(e => e.id === this.editingEvent.id);
        if (index !== -1) {
            this.events[index] = { ...this.editingEvent, updatedAt: new Date().toISOString().split('T')[0] };
        }
        this.showEditModal = false;
        this.editingEvent = null;
        this.showNotification('Event updated successfully', 'success');
    },
    
    deleteEvent(event) {
        if (confirm(`Are you sure you want to delete "${event.title}"? This will also remove all registrations.`)) {
            const index = this.events.findIndex(e => e.id === event.id);
            if (index !== -1) {
                this.events.splice(index, 1);
                this.registrations = this.registrations.filter(reg => reg.eventId !== event.id);
            }
            this.showNotification('Event deleted successfully', 'success');
        }
    },
    
    openEventDetail(event) {
        this.currentEvent = event;
        this.activeView = 'eventDetail';
    },
    
    approveRegistration(registration) {
        registration.status = 'confirmed';
        this.showNotification('Registration approved', 'success');
    },
    
    rejectRegistration(registration) {
        registration.status = 'rejected';
        this.showNotification('Registration rejected', 'info');
    },
    
    markAttendance(registration) {
        registration.attendanceStatus = 'attended';
        registration.checkedInAt = new Date().toLocaleString();
        
        // Update event stats
        const event = this.events.find(e => e.id === registration.eventId);
        if (event) {
            event.attended++;
        }
        
        this.showNotification('Attendance marked', 'success');
    },
    
    sendCommunication() {
        // Simulate sending communication
        this.showNotification(`${this.communicationType === 'sms' ? 'SMS' : 'Email'} sent to ${this.eventRegistrations.length} attendees`, 'success');
        this.showCommunicationModal = false;
        this.communicationMessage = '';
    },
    
    addMedia() {
        if (this.mediaType === 'photo') {
            this.currentEvent.media.photos.push(this.mediaUrl);
        } else {
            this.currentEvent.media.videos.push(this.mediaUrl);
        }
        this.showMediaModal = false;
        this.mediaUrl = '';
        this.showNotification('Media added successfully', 'success');
    },
    
    exportAttendees(format) {
        // Simulate export
        this.showNotification(`Attendees exported as ${format.toUpperCase()}`, 'success');
    },
    
    resetNewEvent() {
        this.newEvent = {
            title: '',
            description: '',
            date: '',
            endDate: '',
            time: '',
            endTime: '',
            location: '',
            locationType: 'physical',
            venue: '',
            category: 'conference',
            status: 'draft',
            organizer: '',
            capacity: '',
            price: 0,
            currency: 'TSh',
            bannerImage: ''
        };
    },
    
    showNotification(message, type = 'info') {
        // Simple notification (you can enhance this)
        console.log(`${type}: ${message}`);
    }
}">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Comprehensive Events Management</h1>
            <p class="text-slate-600">Create, manage, and track events with advanced features</p>
        </div>
        <div class="flex items-center gap-3">
            <button @click="activeView = 'events'" class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium">
                <i class="ph ph-arrow-left mr-2"></i>
                Back to Events
            </button>
            <button @click="showCreateModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium">
                <i class="ph ph-plus mr-2"></i>
                Create Event
            </button>
        </div>
    </div>

    <!-- Events List View -->
    <div x-show="activeView === 'events'" x-cloak>
        <!-- Filters -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-6">
            <div class="flex flex-wrap items-center gap-4">
                <div class="relative flex-1 min-w-[300px]">
                    <input type="text" 
                           x-model="searchQuery" 
                           placeholder="Search events..." 
                           class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-full">
                    <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
                </div>
                
                <select x-model="filterTimeframe" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option value="all">All Events</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="past">Past</option>
                    <option value="ongoing">Ongoing</option>
                </select>
                
                <select x-model="filterCategory" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option value="all">All Categories</option>
                    <option value="conference">Conference</option>
                    <option value="seminar">Seminar</option>
                    <option value="workshop">Workshop</option>
                    <option value="retreat">Retreat</option>
                    <option value="crusade">Crusade</option>
                    <option value="service">Service</option>
                </select>
                
                <select x-model="filterStatus" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option value="all">All Status</option>
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                    <option value="cancelled">Cancelled</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
        </div>

        <!-- Events Grid -->
        <div class="grid gap-6 lg:grid-cols-3">
            <template x-for="event in filteredEvents" :key="event.id">
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition-all">
                    <!-- Event Banner -->
                    <div class="h-48 bg-gradient-to-br from-purple-100 to-purple-200 relative overflow-hidden">
                        <img :src="event.bannerImage" :alt="event.title" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        
                        <!-- Status Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 text-xs font-medium rounded-full"
                                  :class="event.status === 'published' ? 'bg-green-600 text-white' : 
                                          event.status === 'draft' ? 'bg-yellow-600 text-white' :
                                          event.status === 'cancelled' ? 'bg-red-600 text-white' :
                                          'bg-blue-600 text-white'"
                                  x-text="event.status.toUpperCase()"></span>
                        </div>
                        
                        <!-- Category Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-purple-600 text-white" x-text="event.category.toUpperCase()"></span>
                        </div>
                        
                        <!-- Event Title -->
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-xl font-bold text-white mb-1" x-text="event.title"></h3>
                            <div class="flex items-center gap-3 text-white/90 text-sm">
                                <span class="flex items-center gap-1">
                                    <i class="ph ph-calendar"></i>
                                    <span x-text="event.date"></span>
                                </span>
                                <span class="flex items-center gap-1">
                                    <i class="ph ph-map-pin"></i>
                                    <span x-text="event.location.split(',')[0]"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Event Details -->
                    <div class="p-6">
                        <!-- Quick Stats -->
                        <div class="grid grid-cols-3 gap-2 mb-4">
                            <div class="text-center">
                                <div class="text-lg font-bold text-slate-900" x-text="event.registered"></div>
                                <div class="text-xs text-slate-600">Registered</div>
                            </div>
                            <div class="text-center">
                                <div class="text-lg font-bold text-slate-900" x-text="event.confirmed"></div>
                                <div class="text-xs text-slate-600">Confirmed</div>
                            </div>
                            <div class="text-center">
                                <div class="text-lg font-bold text-slate-900" x-text="event.capacity"></div>
                                <div class="text-xs text-slate-600">Capacity</div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mb-4">
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-slate-600">Occupancy</span>
                                <span class="font-medium" x-text="Math.round((event.registered / event.capacity) * 100) + '%'"></span>
                            </div>
                            <div class="w-full bg-slate-200 rounded-full h-2">
                                <div class="bg-purple-600 h-2 rounded-full transition-all" :style="'width: ' + (event.registered / event.capacity) * 100 + '%'"></div>
                            </div>
                        </div>

                        <!-- Event Info -->
                        <div class="space-y-2 text-sm text-slate-600 mb-4">
                            <div class="flex items-center gap-2">
                                <i class="ph ph-clock"></i>
                                <span x-text="event.time + ' - ' + event.endTime"></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="ph ph-user"></i>
                                <span x-text="event.organizer"></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="ph ph-currency-btz"></i>
                                <span x-text="event.price > 0 ? event.currency + ' ' + event.price.toLocaleString() : 'Free'"></span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center gap-2">
                            <button @click="openEventDetail(event)" class="flex-1 bg-purple-600 text-white px-3 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm font-medium">
                                <i class="ph ph-eye mr-1"></i>
                                Manage Event
                            </button>
                            <button @click="editEvent(event)" class="text-purple-600 hover:text-purple-900">
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

    <!-- Event Detail View -->
    <div x-show="activeView === 'eventDetail'" x-cloak>
        <template x-if="currentEvent">
            <!-- Event Header -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden mb-6">
                <div class="h-64 bg-gradient-to-br from-purple-100 to-purple-200 relative overflow-hidden">
                    <img :src="currentEvent.bannerImage" :alt="currentEvent.title" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-3xl font-bold text-white mb-2" x-text="currentEvent.title"></h2>
                                <div class="flex items-center gap-4 text-white/90">
                                    <span class="flex items-center gap-1">
                                        <i class="ph ph-calendar"></i>
                                        <span x-text="currentEvent.date + ' - ' + currentEvent.endDate"></span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <i class="ph ph-clock"></i>
                                        <span x-text="currentEvent.time + ' - ' + currentEvent.endTime"></span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <i class="ph ph-map-pin"></i>
                                        <span x-text="currentEvent.location"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <button @click="showQRModal = true" class="bg-white/20 hover:bg-white/30 px-4 py-2 rounded-lg font-medium transition-all text-white">
                                    <i class="ph ph-qrcode mr-2"></i>
                                    QR Code
                                </button>
                                <button @click="activeView = 'events'" class="bg-white/20 hover:bg-white/30 px-4 py-2 rounded-lg font-medium transition-all text-white">
                                    <i class="ph ph-arrow-left mr-2"></i>
                                    Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Dashboard -->
            <div class="grid gap-6 lg:grid-cols-4 mb-6">
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="ph ph-users text-purple-600 text-xl"></i>
                        </div>
                        <span class="text-sm text-slate-500">Total</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900" x-text="eventStats.totalRegistered"></h3>
                    <p class="text-sm text-slate-600">Registered</p>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="ph ph-check-circle text-green-600 text-xl"></i>
                        </div>
                        <span class="text-sm text-slate-500">Confirmed</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900" x-text="eventStats.confirmed"></h3>
                    <p class="text-sm text-slate-600">Attendees</p>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="ph ph-chart-line text-blue-600 text-xl"></i>
                        </div>
                        <span class="text-sm text-slate-500">Rate</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900" x-text="eventStats.attendanceRate + '%'"></h3>
                    <p class="text-sm text-slate-600">Attendance</p>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                            <i class="ph ph-currency-btz text-yellow-600 text-xl"></i>
                        </div>
                        <span class="text-sm text-slate-500">Revenue</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (eventStats.revenue / 1000000).toFixed(1) + 'M'"></h3>
                    <p class="text-sm text-slate-600">Total</p>
                </div>
            </div>

            <!-- Management Tabs -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200">
                <div class="border-b border-slate-200">
                    <nav class="flex space-x-8 px-6" aria-label="Tabs">
                        <button @click="activeTab = 'registrations'" 
                                :class="activeTab === 'registrations' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700'"
                                class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                            <i class="ph ph-users mr-2"></i>
                            Registrations
                        </button>
                        <button @click="activeTab = 'attendance'" 
                                :class="activeTab === 'attendance' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700'"
                                class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                            <i class="ph ph-checklist mr-2"></i>
                            Attendance
                        </button>
                        <button @click="activeTab = 'media'" 
                                :class="activeTab === 'media' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700'"
                                class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                            <i class="ph ph-photo-video mr-2"></i>
                            Media
                        </button>
                        <button @click="activeTab = 'communication'" 
                                :class="activeTab === 'communication' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700'"
                                class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                            <i class="ph ph-chat-text mr-2"></i>
                            Communication
                        </button>
                        <button @click="activeTab = 'settings'" 
                                :class="activeTab === 'settings' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700'"
                                class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                            <i class="ph ph-gear mr-2"></i>
                            Settings
                        </button>
                    </nav>
                </div>

                <!-- Tab Content -->
                <div class="p-6">
                    <!-- Registrations Tab -->
                    <div x-show="activeTab === 'registrations'" x-cloak>
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-slate-900">Manage Registrations</h3>
                            <div class="flex items-center gap-3">
                                <button @click="exportAttendees('excel')" class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all text-sm">
                                    <i class="ph ph-download mr-2"></i>
                                    Export Excel
                                </button>
                                <button @click="exportAttendees('pdf')" class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all text-sm">
                                    <i class="ph ph-file-pdf mr-2"></i>
                                    Export PDF
                                </button>
                            </div>
                        </div>

                        <!-- Registration Table -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-slate-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Contact</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Location</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Payment</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-200">
                                    <template x-for="registration in eventRegistrations" :key="registration.id">
                                        <tr class="hover:bg-slate-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-slate-900" x-text="registration.name"></div>
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
                                                <div class="text-sm text-slate-900" x-text="'TSh ' + registration.amount.toLocaleString()"></div>
                                                <span class="px-2 py-1 text-xs font-medium rounded-full"
                                                      :class="registration.paymentStatus === 'paid' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                                                      x-text="registration.paymentStatus"></span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <template x-if="registration.status === 'pending'">
                                            <div>
                                                <button @click="approveRegistration(registration)" class="text-green-600 hover:text-green-900 mr-3">Approve</button>
                                                <button @click="rejectRegistration(registration)" class="text-red-600 hover:text-red-900">Reject</button>
                                            </div>
                                        </template>
                                        <template x-if="registration.status === 'confirmed' && registration.attendanceStatus === 'not-attended'">
                                            <button @click="markAttendance(registration)" class="text-blue-600 hover:text-blue-900">Check In</button>
                                        </template>
                                        <template x-if="registration.attendanceStatus === 'attended'">
                                            <span class="text-green-600">Attended</span>
                                        </template>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Attendance Tab -->
                    <div x-show="activeTab === 'attendance'" x-cloak>
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-slate-900">Attendance Tracking</h3>
                            <button @click="showQRModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm">
                                <i class="ph ph-qrcode mr-2"></i>
                                QR Check-in
                            </button>
                        </div>

                        <!-- Attendance Stats -->
                        <div class="grid gap-6 md:grid-cols-3 mb-6">
                            <div class="bg-slate-50 rounded-lg p-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-slate-900" x-text="eventStats.confirmed"></div>
                                    <div class="text-sm text-slate-600">Expected</div>
                                </div>
                            </div>
                            <div class="bg-slate-50 rounded-lg p-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-slate-900" x-text="eventStats.attended"></div>
                                    <div class="text-sm text-slate-600">Checked In</div>
                                </div>
                            </div>
                            <div class="bg-slate-50 rounded-lg p-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-slate-900" x-text="eventStats.attendanceRate + '%'"></div>
                                    <div class="text-sm text-slate-600">Rate</div>
                                </div>
                            </div>
                        </div>

                        <!-- Attendance List -->
                        <div class="space-y-3">
                            <template x-for="registration in eventRegistrations.filter(r => r.attendanceStatus === 'attended')" :key="registration.id">
                                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                            <i class="ph ph-check text-green-600"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-medium text-slate-900" x-text="registration.name"></h5>
                                            <div class="text-sm text-slate-600" x-text="registration.checkedInAt"></div>
                                        </div>
                                    </div>
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Checked In</span>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Media Tab -->
                    <div x-show="activeTab === 'media'" x-cloak>
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-slate-900">Event Media</h3>
                            <button @click="showMediaModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm">
                                <i class="ph ph-plus mr-2"></i>
                                Add Media
                            </button>
                        </div>

                        <!-- Photos Grid -->
                        <div class="mb-8">
                            <h4 class="text-sm font-medium text-slate-700 mb-4">Photos</h4>
                            <div class="grid gap-4 md:grid-cols-3">
                                <template x-for="photo in currentEvent.media.photos" :key="photo">
                                    <div class="relative group">
                                        <img :src="photo" alt="Event photo" class="w-full h-48 object-cover rounded-lg">
                                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg flex items-center justify-center">
                                            <button class="text-white hover:text-red-300">
                                                <i class="ph ph-trash text-xl"></i>
                                            </button>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="currentEvent.media.photos.length === 0">
                                    <div class="col-span-3 text-center py-12 bg-slate-50 rounded-lg">
                                        <i class="ph ph-image text-4xl text-slate-400 mb-2"></i>
                                        <p class="text-slate-600">No photos uploaded yet</p>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- Videos Grid -->
                        <div>
                            <h4 class="text-sm font-medium text-slate-700 mb-4">Videos</h4>
                            <div class="grid gap-4 md:grid-cols-2">
                                <template x-for="video in currentEvent.media.videos" :key="video">
                                    <div class="relative">
                                        <iframe :src="video" class="w-full h-48 rounded-lg" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </template>
                                <template x-if="currentEvent.media.videos.length === 0">
                                    <div class="col-span-2 text-center py-12 bg-slate-50 rounded-lg">
                                        <i class="ph ph-video text-4xl text-slate-400 mb-2"></i>
                                        <p class="text-slate-600">No videos uploaded yet</p>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- Communication Tab -->
                    <div x-show="activeTab === 'communication'" x-cloak>
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-slate-900">Event Communication</h3>
                            <button @click="showCommunicationModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm">
                                <i class="ph ph-chat-text mr-2"></i>
                                Send Message
                            </button>
                        </div>

                        <!-- Communication Settings -->
                        <div class="grid gap-6 md:grid-cols-2 mb-6">
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-medium text-slate-900 mb-3">SMS Settings</h4>
                                <div class="space-y-2">
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-slate-700">Enable SMS</span>
                                        <input type="checkbox" :checked="currentEvent.communications.smsEnabled" class="w-4 h-4 text-purple-600">
                                    </label>
                                    <div class="text-sm text-slate-600">
                                        <div>Last reminder: <span x-text="currentEvent.communications.lastReminder || 'Never'"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-slate-50 rounded-lg p-4">
                                <h4 class="font-medium text-slate-900 mb-3">Email Settings</h4>
                                <div class="space-y-2">
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-slate-700">Enable Email</span>
                                        <input type="checkbox" :checked="currentEvent.communications.emailEnabled" class="w-4 h-4 text-purple-600">
                                    </label>
                                    <div class="text-sm text-slate-600">
                                        <div>Auto-reminders: Enabled</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Communication History -->
                        <div>
                            <h4 class="text-sm font-medium text-slate-700 mb-3">Communication History</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                            <i class="ph ph-envelope text-green-600 text-sm"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-slate-900">Registration Confirmation</div>
                                            <div class="text-xs text-slate-600">Sent to all confirmed attendees</div>
                                        </div>
                                    </div>
                                    <span class="text-xs text-slate-500">2 days ago</span>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                            <i class="ph ph-chat-text text-blue-600 text-sm"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-slate-900">Event Reminder</div>
                                            <div class="text-xs text-slate-600">SMS sent to 1,180 attendees</div>
                                        </div>
                                    </div>
                                    <span class="text-xs text-slate-500">3 days ago</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings Tab -->
                    <div x-show="activeTab === 'settings'" x-cloak>
                        <div class="space-y-6">
                            <!-- Event Settings -->
                            <div>
                                <h4 class="text-sm font-medium text-slate-700 mb-4">Event Settings</h4>
                                <div class="space-y-4">
                                    <div class="grid gap-4 md:grid-cols-2">
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Status</label>
                                            <select x-model="currentEvent.status" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                                <option value="draft">Draft</option>
                                                <option value="published">Published</option>
                                                <option value="cancelled">Cancelled</option>
                                                <option value="completed">Completed</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Category</label>
                                            <select x-model="currentEvent.category" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                                <option value="conference">Conference</option>
                                                <option value="seminar">Seminar</option>
                                                <option value="workshop">Workshop</option>
                                                <option value="retreat">Retreat</option>
                                                <option value="crusade">Crusade</option>
                                                <option value="service">Service</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ticket Settings -->
                            <div>
                                <h4 class="text-sm font-medium text-slate-700 mb-4">Ticket Settings</h4>
                                <div class="grid gap-4 md:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Ticket Type</label>
                                        <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                            <option>Free Event</option>
                                            <option>Paid Event</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Price (TSh)</label>
                                        <input type="number" x-model="currentEvent.price" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    </div>
                                </div>
                            </div>

                            <!-- QR Code Display -->
                            <div>
                                <h4 class="text-sm font-medium text-slate-700 mb-4">Access Control</h4>
                                <div class="bg-slate-50 rounded-lg p-6">
                                    <div class="flex items-center gap-6">
                                        <img :src="currentEvent.qrCode" alt="Event QR Code" class="w-32 h-32">
                                        <div>
                                            <h5 class="font-medium text-slate-900 mb-2">Event QR Code</h5>
                                            <p class="text-sm text-slate-600 mb-4">Use this QR code for event check-in and access control</p>
                                            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm">
                                                <i class="ph ph-download mr-2"></i>
                                                Download QR Code
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Save Button -->
                            <div class="flex justify-end">
                                <button class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition-all">
                                    <i class="ph ph-check mr-2"></i>
                                    Save Settings
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- Create Event Modal -->
    <div x-show="showCreateModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Create New Event</h3>
                    <button @click="showCreateModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form @submit.prevent="createEvent()" class="space-y-6">
                    <!-- Basic Information -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Title *</label>
                            <input type="text" x-model="newEvent.title" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter event title">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Category *</label>
                            <select x-model="newEvent.category" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="conference">Conference</option>
                                <option value="seminar">Seminar</option>
                                <option value="workshop">Workshop</option>
                                <option value="retreat">Retreat</option>
                                <option value="crusade">Crusade</option>
                                <option value="service">Service</option>
                            </select>
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Description *</label>
                        <textarea x-model="newEvent.description" required class="w-full border border-slate-200 rounded-lg px-4 py-2" rows="3" placeholder="Event description"></textarea>
                    </div>

                    <!-- Date and Time -->
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

                    <!-- Location -->
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
                            <input type="text" x-model="newEvent.location" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Event location">
                        </div>
                    </div>

                    <!-- Additional Details -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Organizer *</label>
                            <input type="text" x-model="newEvent.organizer" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Event organizer">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Capacity (optional)</label>
                            <input type="number" x-model="newEvent.capacity" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Maximum attendees">
                        </div>
                    </div>

                    <!-- Ticket Settings -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Ticket Type</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Free Event</option>
                                <option>Paid Event</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Price (TSh)</label>
                            <input type="number" x-model="newEvent.price" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="0 for free event">
                        </div>
                    </div>

                    <!-- Banner Image -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Event Banner Image</label>
                        <input type="url" x-model="newEvent.bannerImage" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="https://example.com/image.jpg">
                    </div>

                    <div class="flex justify-end gap-3 pt-4 border-t border-slate-200">
                        <button type="button" @click="showCreateModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Create Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Event Modal -->
    <div x-show="showEditModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Edit Event</h3>
                    <button @click="showEditModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form @submit.prevent="updateEvent()" class="space-y-6">
                    <!-- Edit form fields similar to create modal -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Title</label>
                            <input type="text" x-model="editingEvent.title" required class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Status</label>
                            <select x-model="editingEvent.status" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 pt-4 border-t border-slate-200">
                        <button type="button" @click="showEditModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Update Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Communication Modal -->
    <div x-show="showCommunicationModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Send Communication</h3>
                    <button @click="showCommunicationModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form @submit.prevent="sendCommunication()" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Communication Type</label>
                        <select x-model="communicationType" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                            <option value="sms">SMS</option>
                            <option value="email">Email</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Message</label>
                        <textarea x-model="communicationMessage" required class="w-full border border-slate-200 rounded-lg px-4 py-2" rows="4" placeholder="Enter your message..."></textarea>
                    </div>
                    <div class="bg-slate-50 rounded-lg p-3">
                        <p class="text-sm text-slate-600">This message will be sent to <span x-text="eventRegistrations.length"></span> registered attendees</p>
                    </div>
                    <div class="flex justify-end gap-3">
                        <button type="button" @click="showCommunicationModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Media Modal -->
    <div x-show="showMediaModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Add Media</h3>
                    <button @click="showMediaModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form @submit.prevent="addMedia()" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Media Type</label>
                        <select x-model="mediaType" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                            <option value="photo">Photo</option>
                            <option value="video">Video</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Media URL</label>
                        <input type="url" x-model="mediaUrl" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="https://example.com/media">
                    </div>
                    <div class="flex justify-end gap-3">
                        <button type="button" @click="showMediaModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                            Add Media
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- QR Code Modal -->
    <div x-show="showQRModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Event QR Code</h3>
                    <button @click="showQRModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6 text-center">
                <img :src="currentEvent?.qrCode" alt="Event QR Code" class="w-48 h-48 mx-auto mb-4">
                <h4 class="font-medium text-slate-900 mb-2" x-text="currentEvent?.title"></h4>
                <p class="text-sm text-slate-600 mb-4">Use this QR code for event check-in</p>
                <div class="flex justify-center gap-3">
                    <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm">
                        <i class="ph ph-download mr-2"></i>
                        Download
                    </button>
                    <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all text-sm">
                        <i class="ph ph-printer mr-2"></i>
                        Print
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
