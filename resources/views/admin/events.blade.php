@extends('layouts.admin')

@section('title', 'Advanced Events Management')

@section('page-title', 'Advanced Events Management')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'calendar',
    searchQuery: '',
    filterType: 'all',
    filterStatus: 'all',
    showEventModal: false,
    showRegistrationModal: false,
    showEditModal: false,
    showDeleteModal: false,
    selectedEvent: null,
    editingEvent: null,
    deletingEvent: null,
    selectedDate: null,
    currentMonth: new Date().getMonth(),
    currentYear: new Date().getFullYear(),
    charts: {},
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
            image: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=400&fit=crop',
            videoUrl: 'https://www.youtube.com/embed/PgIJm42OJhw?list=TLPQMzEwMzIwMjbdpT4N3Pb2kA',
            description: 'Join thousands of believers for this transformative conference featuring renowned speakers, worship sessions, and spiritual renewal.',
            organizer: 'ICCRTZ National Team',
            tags: ['easter', 'conference', 'major-event', 'international'],
            speakers: ['Bishop Jude Thaddeus Ruwa\'ichi', 'Fr. John Michael', 'Grace Mbeki', 'Robert Chen'],
            sponsors: ['Catholic Relief Services', 'World Vision Tanzania', 'Caritas Tanzania'],
            socialLinks: {
                facebook: 'https://facebook.com/iccrtz',
                twitter: 'https://twitter.com/iccrtz',
                instagram: 'https://instagram.com/iccrtz'
            },
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
            image: 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=800&h=400&fit=crop',
            description: 'A three-day intensive training program for young leaders focusing on spiritual growth, leadership skills, and community service.',
            organizer: 'ICCRTZ Youth Ministry',
            tags: ['youth', 'leadership', 'training', 'summit'],
            speakers: ['Sarah Kimani', 'Michael Johnson', 'David Ngungila'],
            sponsors: ['Youth for Christ Tanzania', 'African Leadership Foundation'],
            registrationOpen: true,
            livestreamEnabled: false,
            hasCertificate: true,
            materialsProvided: true,
            createdAt: '2026-02-01',
            updatedAt: '2026-03-28'
        },
        {
            id: 3,
            name: 'Annual Thanksgiving Service',
            type: 'service',
            category: 'spiritual',
            status: 'completed',
            date: '2026-03-15',
            endDate: '2026-03-15',
            time: '06:00 PM',
            endTime: '08:30 PM',
            location: 'St. Mary\'s Cathedral',
            venue: 'Main Sanctuary',
            registrations: 800,
            capacity: 1000,
            price: 0,
            currency: 'TSh',
            image: 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&h=400&fit=crop',
            description: 'A special service of thanksgiving and praise celebrating God\'s faithfulness throughout the year.',
            organizer: 'St. Mary\'s Cathedral',
            tags: ['thanksgiving', 'service', 'worship', 'annual'],
            speakers: ['Fr. John Michael', 'Grace Mbeki'],
            sponsors: [],
            registrationOpen: false,
            livestreamEnabled: true,
            hasCertificate: false,
            materialsProvided: false,
            createdAt: '2026-01-01',
            updatedAt: '2026-03-16'
        },
        {
            id: 4,
            name: 'Women\'s Empowerment Workshop',
            type: 'workshop',
            category: 'women',
            status: 'upcoming',
            date: '2026-04-22',
            endDate: '2026-04-22',
            time: '09:00 AM',
            endTime: '04:00 PM',
            location: 'Archdiocese of Dar es Salaam',
            venue: 'Catholic Secretariat',
            registrations: 120,
            capacity: 150,
            price: 10000,
            currency: 'TSh',
            image: 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&h=400&fit=crop',
            description: 'Empowering women through spiritual formation, leadership development, and practical skills training.',
            organizer: 'ICCRTZ Women\'s Guild',
            tags: ['women', 'empowerment', 'workshop', 'skills'],
            speakers: ['Grace Mbeki', 'Sarah Kimani', 'Dr. Anna Mwangi'],
            sponsors: ['Women for Development Tanzania'],
            registrationOpen: true,
            livestreamEnabled: false,
            hasCertificate: true,
            materialsProvided: true,
            createdAt: '2026-02-15',
            updatedAt: '2026-03-25'
        },
        {
            id: 5,
            name: 'Alumni Reunion 2026',
            type: 'reunion',
            category: 'alumni',
            status: 'planning',
            date: '2026-05-10',
            endDate: '2026-05-11',
            time: '02:00 PM',
            endTime: '09:00 PM',
            location: 'University of Dar es Salaam',
            venue: 'Main Campus',
            registrations: 200,
            capacity: 300,
            price: 25000,
            currency: 'TSh',
            image: 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=800&h=400&fit=crop',
            description: 'Annual gathering of ICCRTZ alumni for networking, fellowship, and sharing testimonies.',
            organizer: 'ICCRTZ Alumni Network',
            tags: ['alumni', 'reunion', 'networking', 'fellowship'],
            speakers: ['Robert Chen', 'Michael Johnson', 'Sarah Kimani'],
            sponsors: ['Alumni Association'],
            registrationOpen: false,
            livestreamEnabled: false,
            hasCertificate: false,
            materialsProvided: false,
            createdAt: '2026-03-01',
            updatedAt: '2026-03-20'
        },
        {
            id: 6,
            name: 'Bible Study Marathon',
            type: 'workshop',
            category: 'education',
            status: 'upcoming',
            date: '2026-04-08',
            endDate: '2026-04-08',
            time: '08:00 AM',
            endTime: '08:00 PM',
            location: 'Diocese of Arusha',
            venue: 'Arusha Catholic Centre',
            registrations: 85,
            capacity: 100,
            price: 5000,
            currency: 'TSh',
            image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&h=400&fit=crop',
            description: 'A full day of intensive Bible study sessions covering various books of the Bible.',
            organizer: 'Diocese of Arusha',
            tags: ['bible', 'study', 'education', 'marathon'],
            speakers: ['Fr. Joseph Mwangi', 'Dr. Grace Mbeki'],
            sponsors: ['Bible Society Tanzania'],
            registrationOpen: true,
            livestreamEnabled: true,
            hasCertificate: true,
            materialsProvided: true,
            createdAt: '2026-02-20',
            updatedAt: '2026-03-22'
        },
        {
            id: 7,
            name: 'Music Ministry Workshop',
            type: 'workshop',
            category: 'music',
            status: 'completed',
            date: '2026-03-10',
            endDate: '2026-03-12',
            time: '09:00 AM',
            endTime: '05:00 PM',
            location: 'Diocese of Dodoma',
            venue: 'St. Paul\'s Church',
            registrations: 65,
            capacity: 80,
            price: 8000,
            currency: 'TSh',
            image: 'https://images.unsplash.com/photo-1464349393765-a70e3e36386d?w=800&h=400&fit=crop',
            description: 'Three-day workshop for choir members and music ministers focusing on vocal techniques and worship leadership.',
            organizer: 'Diocese of Dodoma',
            tags: ['music', 'workshop', 'choir', 'worship'],
            speakers: ['David Kimani', 'Sarah Mwangi'],
            sponsors: ['Music Ministry Tanzania'],
            registrationOpen: false,
            livestreamEnabled: false,
            hasCertificate: true,
            materialsProvided: true,
            createdAt: '2026-01-20',
            updatedAt: '2026-03-13'
        },
        {
            id: 8,
            name: 'Family Life Conference',
            type: 'conference',
            category: 'family',
            status: 'upcoming',
            date: '2026-05-20',
            endDate: '2026-05-22',
            time: '09:00 AM',
            endTime: '06:00 PM',
            location: 'Diocese of Mwanza',
            venue: 'Mwanza Catholic Centre',
            registrations: 180,
            capacity: 250,
            price: 20000,
            currency: 'TSh',
            image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&h=400&fit=crop',
            description: 'A conference focused on strengthening family bonds through faith-based principles and practical guidance.',
            organizer: 'Diocese of Mwanza',
            tags: ['family', 'conference', 'relationships', 'faith'],
            speakers: ['Dr. Anna Mwangi', 'Fr. Michael Johnson', 'Grace Kimani'],
            sponsors: ['Family Life International'],
            registrationOpen: true,
            livestreamEnabled: true,
            hasCertificate: true,
            materialsProvided: true,
            createdAt: '2026-02-25',
            updatedAt: '2026-03-24'
        }
    ],
    registrations: [
        { id: 1, eventId: 1, name: 'John Michael', email: 'john@example.com', phone: '+255 712 345 678', diocese: 'Archdiocese of Dar es Salaam', parish: 'St. Mary\'s Cathedral', registrationDate: '2026-03-25', status: 'confirmed', paymentStatus: 'paid', amount: 30000 },
        { id: 2, eventId: 1, name: 'Sarah Kimani', email: 'sarah@example.com', phone: '+255 713 456 789', diocese: 'Archdiocese of Mbeya', parish: 'St. Joseph\'s Cathedral', registrationDate: '2026-03-26', status: 'confirmed', paymentStatus: 'paid', amount: 30000 },
        { id: 3, eventId: 1, name: 'Robert Chen', email: 'robert@example.com', phone: '+255 714 567 890', diocese: 'Diocese of Arusha', parish: 'Holy Spirit Church', registrationDate: '2026-03-27', status: 'pending', paymentStatus: 'pending', amount: 30000 },
        { id: 4, eventId: 2, name: 'Grace Mbeki', email: 'grace@example.com', phone: '+255 715 678 901', diocese: 'Diocese of Dodoma', parish: 'St. Paul\'s Church', registrationDate: '2026-03-28', status: 'confirmed', paymentStatus: 'paid', amount: 15000 },
        { id: 5, eventId: 2, name: 'Michael Johnson', email: 'michael@example.com', phone: '+255 716 789 012', diocese: 'Diocese of Mwanza', parish: 'Christ the King Church', registrationDate: '2026-03-29', status: 'confirmed', paymentStatus: 'paid', amount: 15000 },
        { id: 6, eventId: 3, name: 'David Ngungila', email: 'david@example.com', phone: '+255 717 890 123', diocese: 'Archdiocese of Dar es Salaam', parish: 'St. Mary\'s Cathedral', registrationDate: '2026-03-10', status: 'confirmed', paymentStatus: 'paid', amount: 0 },
        { id: 7, eventId: 4, name: 'Anna Mwangi', email: 'anna@example.com', phone: '+255 718 901 234', diocese: 'Archdiocese of Dar es Salaam', parish: 'St. Joseph\'s Cathedral', registrationDate: '2026-03-20', status: 'confirmed', paymentStatus: 'paid', amount: 10000 },
        { id: 8, eventId: 5, name: 'James Kimani', email: 'james@example.com', phone: '+255 719 012 345', diocese: 'University of Dar es Salaam', parish: 'Campus Ministry', registrationDate: '2026-03-15', status: 'pending', paymentStatus: 'pending', amount: 25000 },
        { id: 9, eventId: 6, name: 'Grace Chen', email: 'grace@example.com', phone: '+255 720 123 456', diocese: 'Diocese of Arusha', parish: 'Holy Spirit Church', registrationDate: '2026-03-18', status: 'confirmed', paymentStatus: 'paid', amount: 5000 },
        { id: 10, eventId: 7, name: 'Robert Mbeki', email: 'robert@example.com', phone: '+255 721 234 567', diocese: 'Diocese of Dodoma', parish: 'St. Paul\'s Church', registrationDate: '2026-03-05', status: 'confirmed', paymentStatus: 'paid', amount: 8000 },
        { id: 11, eventId: 8, name: 'Sarah Johnson', email: 'sarah@example.com', phone: '+255 722 345 678', diocese: 'Diocese of Mwanza', parish: 'Christ the King Church', registrationDate: '2026-03-12', status: 'confirmed', paymentStatus: 'paid', amount: 20000 }
    ],
    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    getDaysInMonth() {
        return new Date(this.currentYear, this.currentMonth + 1, 0).getDate();
    },
    getFirstDayOfMonth() {
        return new Date(this.currentYear, this.currentMonth, 1).getDay();
    },
    getEventsForDate(date) {
        const dateStr = `${this.currentYear}-${String(this.currentMonth + 1).padStart(2, '0')}-${String(date).padStart(2, '0')}`;
        return this.events.filter(event => {
            const eventStart = new Date(event.date);
            const eventEnd = new Date(event.endDate);
            const checkDate = new Date(dateStr);
            return checkDate >= eventStart && checkDate <= eventEnd;
        });
    },
    selectDate(date) {
        this.selectedDate = date;
    },
    previousMonth() {
        if (this.currentMonth === 0) {
            this.currentMonth = 11;
            this.currentYear--;
        } else {
            this.currentMonth--;
        }
    },
    nextMonth() {
        if (this.currentMonth === 11) {
            this.currentMonth = 0;
            this.currentYear++;
        } else {
            this.currentMonth++;
        }
    },
    goToToday() {
        this.currentMonth = new Date().getMonth();
        this.currentYear = new Date().getFullYear();
        this.selectedDate = new Date().getDate();
    },
    getEventTypeColor(type) {
        const colors = {
            'conference': 'bg-purple-100 text-purple-800 border-purple-200',
            'summit': 'bg-blue-100 text-blue-800 border-blue-200',
            'workshop': 'bg-green-100 text-green-800 border-green-200',
            'service': 'bg-yellow-100 text-yellow-800 border-yellow-200',
            'reunion': 'bg-pink-100 text-pink-800 border-pink-200'
        };
        return colors[type] || 'bg-slate-100 text-slate-800 border-slate-200';
    },
    getEventStatusColor(status) {
        const colors = {
            'live': 'bg-red-100 text-red-800',
            'upcoming': 'bg-blue-100 text-blue-800',
            'completed': 'bg-green-100 text-green-800',
            'planning': 'bg-slate-100 text-slate-800'
        };
        return colors[status] || 'bg-slate-100 text-slate-800';
    },
    openEditModal(event) {
        this.editingEvent = { ...event };
        this.showEditModal = true;
    },
    openDeleteModal(event) {
        this.deletingEvent = event;
        this.showDeleteModal = true;
    },
    deleteEvent() {
        this.events = this.events.filter(e => e.id !== this.deletingEvent.id);
        this.showDeleteModal = false;
        this.deletingEvent = null;
    },
    updateEvent() {
        const index = this.events.findIndex(e => e.id === this.editingEvent.id);
        if (index !== -1) {
            this.events[index] = {
                ...this.editingEvent,
                name: document.getElementById('editEventName').value,
                updatedAt: new Date().toISOString().split('T')[0]
            };
        }
        this.showEditModal = false;
        this.editingEvent = null;
    },
    viewEventDetails(event) {
        this.selectedEvent = event;
        this.showRegistrationModal = true;
    },
    getFilteredEvents() {
        return this.events.filter(e => {
            const matchesSearch = e.name.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                              e.location.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                              e.organizer.toLowerCase().includes(this.searchQuery.toLowerCase());
            const matchesType = this.filterType === 'all' || e.type === this.filterType;
            const matchesStatus = this.filterStatus === 'all' || e.status === this.filterStatus;
            return matchesSearch && matchesType && matchesStatus;
        });
    }
}" x-cloak>
    <!-- Events Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Advanced Events Management</h1>
            <p class="text-slate-600">Create, manage, and track events with comprehensive analytics and registration management</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export Data
            </button>
            <button @click="showEventModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-plus"></i>
                Create Event
            </button>
        </div>
    </div>

    <!-- Advanced Stats Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-calendar text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="events.length"></h3>
            <p class="text-sm text-slate-600">All Events</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500">+3</span>
                <span class="text-slate-500 ml-1">this month</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-broadcast text-red-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Live</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="events.filter(e => e.status === 'live').length"></h3>
            <p class="text-sm text-slate-600">Live Events</p>
            <div class="mt-2 flex items-center text-sm">
                <span class="w-2 h-2 bg-red-600 rounded-full animate-pulse mr-2"></span>
                <span class="text-red-600">Broadcasting</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-users text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="events.reduce((sum, e) => sum + e.registrations, 0)"></h3>
            <p class="text-sm text-slate-600">Registrations</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500">+18%</span>
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
            <h3 class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (events.reduce((sum, e) => sum + (e.registrations * e.price), 0) / 1000000).toFixed(1) + 'M'"></h3>
            <p class="text-sm text-slate-600">Total Revenue</p>
            <div class="mt-2 flex items-center text-sm">
                <i class="ph ph-trend-up text-green-500 mr-1"></i>
                <span class="text-green-500">+24%</span>
                <span class="text-slate-500 ml-1">growth</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-target text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Capacity</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="Math.round((events.reduce((sum, e) => sum + e.registrations, 0) / events.reduce((sum, e) => sum + e.capacity, 0)) * 100) + '%'"></h3>
            <p class="text-sm text-slate-600">Occupancy Rate</p>
            <div class="mt-2">
                <div class="w-full bg-slate-200 rounded-full h-2">
                    <div class="bg-yellow-600 h-2 rounded-full" :style="'width: ' + (events.reduce((sum, e) => sum + e.registrations, 0) / events.reduce((sum, e) => sum + e.capacity, 0)) * 100 + '%'"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters and Search -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-6">
        <div class="flex items-center justify-between">
            <div class="relative flex-1 max-w-md">
                <input type="text" 
                       x-model="searchQuery" 
                       placeholder="Search events by name, location, or organizer..." 
                       class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 w-full">
                <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
            </div>
            <div class="flex items-center gap-3 ml-4">
                <select x-model="filterType" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option value="all">All Types</option>
                    <option value="conference">Conference</option>
                    <option value="summit">Summit</option>
                    <option value="workshop">Workshop</option>
                    <option value="service">Service</option>
                    <option value="reunion">Reunion</option>
                </select>
                <select x-model="filterStatus" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option value="all">All Status</option>
                    <option value="planning">Planning</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="live">Live</option>
                    <option value="completed">Completed</option>
                </select>
                <button class="bg-purple-100 text-purple-700 px-4 py-2 rounded-lg hover:bg-purple-200 transition-all font-medium text-sm">
                    <i class="ph ph-funnel mr-2"></i>
                    Advanced Filters
                </button>
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
                    <i class="ph ph-grid mr-2"></i>
                    Event Overview
                </button>
                <button @click="activeTab = 'calendar'" 
                        :class="activeTab === 'calendar' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-calendar mr-2"></i>
                    Calendar View
                </button>
                <button @click="activeTab = 'registrations'" 
                        :class="activeTab === 'registrations' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-users mr-2"></i>
                    Registrations
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
            <!-- Event Overview Tab -->
            <div x-show="activeTab === 'overview'" x-cloak>
                <div class="grid gap-6 lg:grid-cols-2">
                    <template x-for="event in getFilteredEvents()" :key="event.id">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition-all">
                            <!-- Event Header Image -->
                            <div class="h-48 bg-gradient-to-br from-purple-100 to-purple-200 relative overflow-hidden">
                                <img :src="event.image" :alt="event.name" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 text-xs font-medium rounded-full"
                                          :class="event.status === 'live' ? 'bg-red-600 text-white animate-pulse' : 
                                                  event.status === 'upcoming' ? 'bg-blue-600 text-white' :
                                                  event.status === 'completed' ? 'bg-green-600 text-white' :
                                                  'bg-slate-600 text-white'"
                                          x-text="event.status.toUpperCase()"></span>
                                </div>
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 text-xs font-medium rounded-full bg-purple-600 text-white" x-text="event.type.toUpperCase()"></span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h3 class="text-xl font-bold text-white mb-1" x-text="event.name"></h3>
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
                                <div class="grid grid-cols-3 gap-4 mb-4">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-slate-900" x-text="event.registrations"></div>
                                        <div class="text-xs text-slate-600">Registered</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-slate-900" x-text="event.capacity"></div>
                                        <div class="text-xs text-slate-600">Capacity</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-slate-900" x-text="event.price > 0 ? event.currency + ' ' + event.price.toLocaleString() : 'Free'"></div>
                                        <div class="text-xs text-slate-600">Price</div>
                                    </div>
                                </div>

                                <!-- Progress Bar -->
                                <div class="mb-4">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="text-slate-600">Registration Progress</span>
                                        <span class="font-medium" x-text="Math.round((event.registrations / event.capacity) * 100) + '%'"></span>
                                    </div>
                                    <div class="w-full bg-slate-200 rounded-full h-2">
                                        <div class="bg-purple-600 h-2 rounded-full transition-all" :style="'width: ' + (event.registrations / event.capacity) * 100 + '%'"></div>
                                    </div>
                                </div>

                                <!-- Event Features -->
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <template x-if="event.livestreamEnabled">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800 flex items-center gap-1">
                                            <i class="ph ph-broadcast"></i>
                                            Livestream
                                        </span>
                                    </template>
                                    <template x-if="event.hasCertificate">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800 flex items-center gap-1">
                                            <i class="ph ph-certificate"></i>
                                            Certificate
                                        </span>
                                    </template>
                                    <template x-if="event.materialsProvided">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800 flex items-center gap-1">
                                            <i class="ph ph-folder"></i>
                                            Materials
                                        </span>
                                    </template>
                                </div>

                                <!-- Description -->
                                <p class="text-sm text-slate-600 mb-4 line-clamp-2" x-text="event.description"></p>

                                <!-- Action Buttons -->
                                <div class="flex items-center gap-2">
                                    <button @click="viewEventDetails(event)" class="flex-1 bg-purple-600 text-white px-3 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm font-medium">
                                        <i class="ph ph-eye mr-1"></i>
                                        View Details
                                    </button>
                                    <button @click="openEditModal(event)" class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-pencil"></i>
                                    </button>
                                    <template x-if="event.videoUrl">
                                        <a :href="event.videoUrl" target="_blank" class="text-red-600 hover:text-red-900">
                                            <i class="ph ph-youtube-logo"></i>
                                        </a>
                                    </template>
                                    <button @click="openDeleteModal(event)" class="text-red-600 hover:text-red-900">
                                        <i class="ph ph-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Calendar View Tab -->
            <div x-show="activeTab === 'calendar'" x-cloak>
                <div class="grid gap-6 lg:grid-cols-3">
                    <!-- Calendar -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <!-- Calendar Header -->
                            <div class="flex items-center justify-between mb-6">
                                <button @click="previousMonth()" class="p-2 hover:bg-slate-100 rounded-lg transition-all">
                                    <i class="ph ph-arrow-left text-slate-600"></i>
                                </button>
                                <h3 class="text-lg font-semibold text-slate-900" x-text="monthNames[currentMonth] + ' ' + currentYear"></h3>
                                <button @click="nextMonth()" class="p-2 hover:bg-slate-100 rounded-lg transition-all">
                                    <i class="ph ph-arrow-right text-slate-600"></i>
                                </button>
                            </div>

                            <!-- Calendar Grid -->
                            <div class="grid grid-cols-7 gap-1 mb-2">
                                <div class="text-center text-xs font-medium text-slate-500 py-2">Sun</div>
                                <div class="text-center text-xs font-medium text-slate-500 py-2">Mon</div>
                                <div class="text-center text-xs font-medium text-slate-500 py-2">Tue</div>
                                <div class="text-center text-xs font-medium text-slate-500 py-2">Wed</div>
                                <div class="text-center text-xs font-medium text-slate-500 py-2">Thu</div>
                                <div class="text-center text-xs font-medium text-slate-500 py-2">Fri</div>
                                <div class="text-center text-xs font-medium text-slate-500 py-2">Sat</div>
                            </div>

                            <!-- Empty cells for first week -->
                            <template x-for="i in getFirstDayOfMonth()" :key="'empty-' + i">
                                <div class="h-20"></div>
                            </template>

                            <!-- Calendar days -->
                            <template x-for="day in getDaysInMonth()" :key="'day-' + day">
                                <div @click="selectDate(day)" 
                                     :class="selectedDate === day ? 'bg-purple-100 border-purple-500' : 'hover:bg-slate-50 border-slate-200'"
                                     class="border rounded-lg p-2 min-h-[80px] cursor-pointer transition-all relative">
                                    <div class="text-sm font-medium text-slate-900 mb-1" x-text="day"></div>
                                    <div class="space-y-1">
                                        <template x-for="event in getEventsForDate(day).slice(0, 2)" :key="event.id">
                                            <div class="text-xs p-1 rounded truncate" 
                                                 :class="getEventTypeColor(event.type)"
                                                 x-text="event.name.length > 15 ? event.name.substring(0, 15) + '...' : event.name"></div>
                                        </template>
                                        <div x-show="getEventsForDate(day).length > 2" class="text-xs text-slate-500">
                                            +<span x-text="getEventsForDate(day).length - 2"></span> more
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <!-- Calendar Controls -->
                        <div class="flex items-center justify-center mt-4 gap-3">
                            <button @click="goToToday()" class="bg-purple-100 text-purple-700 px-4 py-2 rounded-lg hover:bg-purple-200 transition-all font-medium text-sm">
                                <i class="ph ph-calendar mr-2"></i>
                                Today
                            </button>
                        </div>
                    </div>
                    
                    <!-- Selected Date Events -->
                    <div>
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Events</h3>
                            
                            <!-- Selected Date Header -->
                            <div x-show="selectedDate" class="mb-4">
                                <h4 class="font-medium text-slate-900" x-text="'Events for ' + monthNames[currentMonth] + ' ' + selectedDate + ', ' + currentYear"></h4>
                            </div>
                            
                            <div x-show="!selectedDate" class="text-center py-8">
                                <i class="ph ph-calendar text-4xl text-slate-300 mb-2"></i>
                                <p class="text-slate-500">Select a date to view events</p>
                            </div>

                            <!-- Events for Selected Date -->
                            <div x-show="selectedDate" class="space-y-3">
                                <template x-for="event in getEventsForDate(selectedDate)" :key="event.id">
                                    <div class="border border-slate-200 rounded-lg p-3 hover:bg-slate-50 transition-all">
                                        <div class="flex items-start justify-between mb-2">
                                            <h4 class="font-medium text-slate-900 text-sm" x-text="event.name"></h4>
                                            <span class="px-2 py-1 text-xs font-medium rounded-full" 
                                                  :class="getEventStatusColor(event.status)"
                                                  x-text="event.status"></span>
                                        </div>
                                        <div class="text-xs text-slate-600 space-y-1">
                                            <div class="flex items-center gap-2">
                                                <i class="ph ph-clock"></i>
                                                <span x-text="event.time + ' - ' + event.endTime"></span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <i class="ph ph-map-pin"></i>
                                                <span x-text="event.location"></span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <i class="ph ph-users"></i>
                                                <span x-text="event.registrations + '/' + event.capacity + ' registered'"></span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 mt-2">
                                            <button @click="viewEventDetails(event)" 
                                                    class="text-purple-600 hover:text-purple-900 text-xs font-medium">
                                                View Details
                                            </button>
                                            <button @click="openEditModal(event)" 
                                                    class="text-blue-600 hover:text-blue-900 text-xs font-medium">
                                                Edit
                                            </button>
                                        </div>
                                    </div>
                                </template>

                                <div x-show="getEventsForDate(selectedDate).length === 0" class="text-center py-8">
                                    <i class="ph ph-calendar-x text-4xl text-slate-300 mb-2"></i>
                                    <p class="text-slate-500">No events on this date</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Registrations Tab -->
            <div x-show="activeTab === 'registrations'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Event Registrations</h3>
                    <div class="flex items-center gap-3">
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Events</option>
                            <template x-for="event in events" :key="event.id">
                                <option x-text="event.name"></option>
                            </template>
                        </select>
                        <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium text-sm">
                            <i class="ph ph-download mr-2"></i>
                            Export Registrations
                        </button>
                    </div>
                </div>

                <!-- Registration Stats -->
                <div class="grid gap-4 md:grid-cols-4 mb-6">
                    <div class="bg-slate-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-slate-900" x-text="registrations.length"></div>
                        <div class="text-sm text-slate-600">Total Registrations</div>
                    </div>
                    <div class="bg-green-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-green-900" x-text="registrations.filter(r => r.status === 'confirmed').length"></div>
                        <div class="text-sm text-green-600">Confirmed</div>
                    </div>
                    <div class="bg-yellow-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-yellow-900" x-text="registrations.filter(r => r.status === 'pending').length"></div>
                        <div class="text-sm text-yellow-600">Pending</div>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-blue-900" x-text="'TSh ' + (registrations.reduce((sum, r) => sum + r.amount, 0) / 1000000).toFixed(1) + 'M'"></div>
                        <div class="text-sm text-blue-600">Total Revenue</div>
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
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Event</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Registration</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Payment</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200">
                            <template x-for="registration in registrations" :key="registration.id">
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
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">
                                        <span x-text="events.find(e => e.id === registration.eventId)?.name || 'Unknown Event'"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-slate-900" x-text="registration.registrationDate"></div>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="registration.status === 'confirmed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                                              x-text="registration.status"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-slate-900" x-text="'TSh ' + registration.amount.toLocaleString()"></div>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="registration.paymentStatus === 'paid' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                                              x-text="registration.paymentStatus"></span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-purple-600 hover:text-purple-900 mr-3">Edit</button>
                                        <button class="text-red-600 hover:text-red-900">Cancel</button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Analytics Tab -->
            <div x-show="activeTab === 'analytics'" x-cloak>
                <div class="space-y-6">
                    <!-- Event Performance Overview -->
                    <div class="grid gap-6 md:grid-cols-3">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Event Performance</h3>
                            <div class="space-y-4">
                                <template x-for="event in events" :key="event.id">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <div class="font-medium text-slate-900" x-text="event.name.length > 25 ? event.name.substring(0, 25) + '...' : event.name"></div>
                                            <div class="text-sm text-slate-600" x-text="event.registrations + ' / ' + event.capacity + ' registered'"></div>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-medium text-slate-900" x-text="Math.round((event.registrations / event.capacity) * 100) + '%'"></div>
                                            <div class="text-sm text-slate-600">Occupancy</div>
                                        </div>
                                    </div>
                                    <div class="w-full bg-slate-200 rounded-full h-2">
                                        <div class="bg-purple-600 h-2 rounded-full" :style="'width: ' + (event.registrations / event.capacity) * 100 + '%'"></div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Revenue by Event</h3>
                            <div class="space-y-4">
                                <template x-for="event in events.filter(e => e.price > 0)" :key="'revenue-' + event.id">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <div class="font-medium text-slate-900" x-text="event.name.length > 25 ? event.name.substring(0, 25) + '...' : event.name"></div>
                                            <div class="text-sm text-slate-600" x-text="event.registrations + ' registrations'"></div>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-medium text-slate-900" x-text="'TSh ' + (event.registrations * event.price).toLocaleString()"></div>
                                            <div class="text-sm text-slate-600">Revenue</div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Event Categories</h3>
                            <div class="space-y-4">
                                <template x-for="category in [...new Set(events.map(e => e.category))]" :key="category">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <div class="font-medium text-slate-900 capitalize" x-text="category"></div>
                                            <div class="text-sm text-slate-600" x-text="events.filter(e => e.category === category).length + ' events'"></div>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-medium text-slate-900" x-text="events.filter(e => e.category === category).reduce((sum, e) => sum + e.registrations, 0)"></div>
                                            <div class="text-sm text-slate-600">Registrations</div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Analytics Table -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">Detailed Analytics</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-slate-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Event</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Type</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Registrations</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Capacity</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Occupancy</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Revenue</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-200">
                                    <template x-for="event in events" :key="event.id">
                                        <tr class="hover:bg-slate-50">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900" x-text="event.name"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="event.type"></td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 py-1 text-xs font-medium rounded-full" 
                                                      :class="getEventStatusColor(event.status)"
                                                      x-text="event.status"></span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="event.registrations"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="event.capacity"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="Math.round((event.registrations / event.capacity) * 100) + '%'"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900" x-text="'TSh ' + (event.registrations * event.price).toLocaleString()"></td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Details Modal -->
    <div x-show="showRegistrationModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900" x-text="selectedEvent ? selectedEvent.name : 'Event Details'"></h3>
                    <button @click="showRegistrationModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6" x-show="selectedEvent">
                <div class="space-y-4">
                    <div>
                        <h4 class="font-medium text-slate-900 mb-2">Event Information</h4>
                        <div class="space-y-2 text-sm text-slate-600">
                            <div><strong>Type:</strong> <span x-text="selectedEvent.type"></span></div>
                            <div><strong>Date:</strong> <span x-text="selectedEvent.date + ' - ' + selectedEvent.endDate"></span></div>
                            <div><strong>Time:</strong> <span x-text="selectedEvent.time + ' - ' + selectedEvent.endTime"></span></div>
                            <div><strong>Location:</strong> <span x-text="selectedEvent.location"></span></div>
                            <div><strong>Venue:</strong> <span x-text="selectedEvent.venue"></span></div>
                            <div><strong>Organizer:</strong> <span x-text="selectedEvent.organizer"></span></div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-medium text-slate-900 mb-2">Registration Details</h4>
                        <div class="space-y-2 text-sm text-slate-600">
                            <div><strong>Registered:</strong> <span x-text="selectedEvent.registrations + '/' + selectedEvent.capacity"></span></div>
                            <div><strong>Price:</strong> <span x-text="selectedEvent.price > 0 ? selectedEvent.currency + ' ' + selectedEvent.price.toLocaleString() : 'Free'"></span></div>
                            <div><strong>Status:</strong> <span x-text="selectedEvent.status"></span></div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-medium text-slate-900 mb-2">Description</h4>
                        <p class="text-sm text-slate-600" x-text="selectedEvent.description"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Event Modal -->
    <div x-show="showEditModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Edit Event</h3>
                    <button @click="showEditModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6" x-show="editingEvent">
                <form @submit.prevent="updateEvent()" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Event Name</label>
                        <input type="text" id="editEventName" required :value="editingEvent.name" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                    </div>
                    <div class="flex justify-end gap-3">
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

    <!-- Delete Confirmation Modal -->
    <div x-show="showDeleteModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Delete Event</h3>
                    <button @click="showDeleteModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6" x-show="deletingEvent">
                <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                    <div class="flex items-start gap-3">
                        <i class="ph ph-warning text-red-600 text-xl mt-0.5"></i>
                        <div>
                            <h4 class="font-semibold text-red-900 mb-1">Warning</h4>
                            <p class="text-sm text-red-700">This action cannot be undone. All event data and registrations will be permanently deleted.</p>
                        </div>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">Are you sure you want to delete <strong x-text="deletingEvent.name"></strong>?</p>
                <div class="flex justify-end gap-3">
                    <button @click="showDeleteModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                        Cancel
                    </button>
                    <button @click="deleteEvent()" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Delete Event
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
