@extends('layouts.admin')

@section('title', 'Advanced Events Management')

@section('page-title', 'Advanced Events Management')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'overview',
    searchQuery: '',
    filterType: 'all',
    filterStatus: 'all',
    filterCategory: 'all',
    showEventModal: false,
    showRegistrationModal: false,
    showEditModal: false,
    showDeleteModal: false,
    selectedEvent: null,
    editingEvent: null,
    deletingEvent: null,
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
            budget: 15000000,
            expenses: 8500000,
            revenue: 37500000,
            satisfaction: 94.5
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
            budget: 2500000,
            expenses: 1200000,
            revenue: 6750000,
            satisfaction: 89.2
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
            budget: 500000,
            expenses: 450000,
            revenue: 0,
            satisfaction: 96.8
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
            budget: 1800000,
            expenses: 950000,
            revenue: 1200000,
            satisfaction: 91.3
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
            budget: 3500000,
            expenses: 1800000,
            revenue: 5000000,
            satisfaction: 87.6
        }
    ],
    registrations: [
        { id: 1, eventId: 1, name: 'John Michael', email: 'john@example.com', phone: '+255 712 345 678', diocese: 'Archdiocese of Dar es Salaam', parish: 'St. Mary\'s Cathedral', registrationDate: '2026-03-25', status: 'confirmed', paymentStatus: 'paid', amount: 30000 },
        { id: 2, eventId: 1, name: 'Sarah Kimani', email: 'sarah@example.com', phone: '+255 713 456 789', diocese: 'Archdiocese of Mbeya', parish: 'St. Joseph\'s Cathedral', registrationDate: '2026-03-26', status: 'confirmed', paymentStatus: 'paid', amount: 30000 },
        { id: 3, eventId: 1, name: 'Robert Chen', email: 'robert@example.com', phone: '+255 714 567 890', diocese: 'Diocese of Arusha', parish: 'Holy Spirit Church', registrationDate: '2026-03-27', status: 'pending', paymentStatus: 'pending', amount: 30000 },
        { id: 4, eventId: 2, name: 'Grace Mbeki', email: 'grace@example.com', phone: '+255 715 678 901', diocese: 'Diocese of Dodoma', parish: 'St. Paul\'s Church', registrationDate: '2026-03-28', status: 'confirmed', paymentStatus: 'paid', amount: 15000 },
        { id: 5, eventId: 2, name: 'David Ngungila', email: 'david@example.com', phone: '+255 716 789 012', diocese: 'Diocese of Mwanza', parish: 'Christ the King Church', registrationDate: '2026-03-29', status: 'confirmed', paymentStatus: 'paid', amount: 15000 },
        { id: 6, eventId: 4, name: 'Anna Mwangi', email: 'anna@example.com', phone: '+255 717 890 123', diocese: 'Archdiocese of Dar es Salaam', parish: 'St. Mary\'s Cathedral', registrationDate: '2026-03-30', status: 'confirmed', paymentStatus: 'paid', amount: 10000 }
    ],
    newEvent: {
        name: '',
        type: 'conference',
        category: 'major',
        date: '',
        endDate: '',
        time: '',
        endTime: '',
        location: '',
        venue: '',
        capacity: 0,
        price: 0,
        currency: 'TSh',
        description: '',
        organizer: '',
        tags: [],
        registrationOpen: true,
        livestreamEnabled: false,
        hasCertificate: false,
        materialsProvided: false
    },
    initCharts() {
        this.$nextTick(() => {
            this.initEventPerformanceChart();
            this.initRevenueChart();
            this.initAttendanceChart();
            this.initSatisfactionChart();
            this.initCategoryChart();
            this.initMonthlyChart();
        });
    },
    initEventPerformanceChart() {
        const ctx = document.getElementById('eventPerformanceChart');
        if (ctx) {
            this.charts.eventPerformance = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: this.events.map(e => e.name.split(' ').slice(0, 3).join(' ')),
                    datasets: [{
                        label: 'Registrations',
                        data: this.events.map(e => e.registrations),
                        backgroundColor: '#8b5cf6'
                    }, {
                        label: 'Capacity',
                        data: this.events.map(e => e.capacity),
                        backgroundColor: '#e5e7eb'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
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
                    labels: this.events.map(e => e.name.split(' ').slice(0, 3).join(' ')),
                    datasets: [{
                        label: 'Revenue (TSh)',
                        data: this.events.map(e => e.revenue),
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
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return 'TSh ' + (value / 1000000).toFixed(1) + 'M';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
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
                type: 'doughnut',
                data: {
                    labels: ['Attended', 'Registered but Not Attended', 'Capacity Remaining'],
                    datasets: [{
                        data: [
                            this.events.filter(e => e.status === 'completed').reduce((sum, e) => sum + e.registrations, 0),
                            this.events.filter(e => e.status === 'completed').reduce((sum, e) => sum + (e.capacity - e.registrations), 0),
                            this.events.filter(e => e.status === 'completed').reduce((sum, e) => sum + (e.capacity - e.registrations), 0)
                        ],
                        backgroundColor: ['#10b981', '#f59e0b', '#e5e7eb']
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
    initSatisfactionChart() {
        const ctx = document.getElementById('satisfactionChart');
        if (ctx) {
            this.charts.satisfaction = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: this.events.filter(e => e.status === 'completed').map(e => e.name.split(' ').slice(0, 3).join(' ')),
                    datasets: [{
                        label: 'Satisfaction %',
                        data: this.events.filter(e => e.status === 'completed').map(e => e.satisfaction),
                        backgroundColor: '#3b82f6'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        }
    },
    initCategoryChart() {
        const ctx = document.getElementById('categoryChart');
        if (ctx) {
            const categories = [...new Set(this.events.map(e => e.category))];
            const categoryData = categories.map(cat => 
                this.events.filter(e => e.category === cat).length
            );
            
            this.charts.category = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: categories,
                    datasets: [{
                        data: categoryData,
                        backgroundColor: ['#8b5cf6', '#3b82f6', '#10b981', '#f59e0b', '#ef4444']
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
    initMonthlyChart() {
        const ctx = document.getElementById('monthlyChart');
        if (ctx) {
            this.charts.monthly = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Events',
                        data: [4, 6, 8, 7, 5, 9],
                        borderColor: '#8b5cf6',
                        backgroundColor: 'rgba(139, 92, 246, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }, {
                        label: 'Total Registrations',
                        data: [1200, 1800, 2400, 2100, 1500, 2800],
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
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
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            grid: {
                                display: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        }
    },
    createEvent() {
        const event = {
            ...this.newEvent,
            id: Date.now(),
            registrations: 0,
            status: 'planning',
            image: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=400&fit=crop',
            socialLinks: {},
            speakers: [],
            sponsors: [],
            budget: 0,
            expenses: 0,
            revenue: 0,
            satisfaction: 0
        };
        
        this.events.push(event);
        this.showEventModal = false;
        this.resetNewEvent();
        this.initCharts();
    },
    editEvent(event) {
        this.editingEvent = { ...event };
        this.showEditModal = true;
    },
    updateEvent() {
        const index = this.events.findIndex(e => e.id === this.editingEvent.id);
        if (index !== -1) {
            this.events[index] = { ...this.editingEvent };
        }
        this.showEditModal = false;
        this.editingEvent = null;
        this.initCharts();
    },
    deleteEvent(event) {
        this.deletingEvent = event;
        this.showDeleteModal = true;
    },
    confirmDelete() {
        const index = this.events.findIndex(e => e.id === this.deletingEvent.id);
        if (index !== -1) {
            this.events.splice(index, 1);
        }
        this.showDeleteModal = false;
        this.deletingEvent = null;
        this.initCharts();
    },
    resetNewEvent() {
        this.newEvent = {
            name: '',
            type: 'conference',
            category: 'major',
            date: '',
            endDate: '',
            time: '',
            endTime: '',
            location: '',
            venue: '',
            capacity: 0,
            price: 0,
            currency: 'TSh',
            description: '',
            organizer: '',
            tags: [],
            registrationOpen: true,
            livestreamEnabled: false,
            hasCertificate: false,
            materialsProvided: false
        };
    }
}" x-init="initCharts()" x-cloak>
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
                <span class="text-green-500">+2</span>
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
            <h3 class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (events.reduce((sum, e) => sum + e.revenue, 0) / 1000000).toFixed(1) + 'M'"></h3>
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
                <span class="text-sm text-slate-500">Average</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="events.filter(e => e.status === 'completed').length > 0 ? (events.filter(e => e.status === 'completed').reduce((sum, e) => sum + e.satisfaction, 0) / events.filter(e => e.status === 'completed').length).toFixed(1) + '%' : 'N/A'"></h3>
            <p class="text-sm text-slate-600">Satisfaction</p>
            <div class="mt-2">
                <div class="w-full bg-slate-200 rounded-full h-2">
                    <div class="bg-yellow-600 h-2 rounded-full" :style="'width: ' + (events.filter(e => e.status === 'completed').length > 0 ? (events.filter(e => e.status === 'completed').reduce((sum, e) => sum + e.satisfaction, 0) / events.filter(e => e.status === 'completed').length) : 0) + '%'"></div>
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
                <select x-model="filterCategory" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option value="all">All Categories</option>
                    <option value="major">Major</option>
                    <option value="youth">Youth</option>
                    <option value="women">Women</option>
                    <option value="spiritual">Spiritual</option>
                    <option value="alumni">Alumni</option>
                </select>
                <select x-model="filterStatus" class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                    <option value="all">All Status</option>
                    <option value="planning">Planning</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="live">Live</option>
                    <option value="completed">Completed</option>
                </select>
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
                    <template x-for="event in events.filter(e => {
                        const matchesSearch = e.name.toLowerCase().includes(searchQuery.toLowerCase()) || 
                                          e.location.toLowerCase().includes(searchQuery.toLowerCase()) ||
                                          e.organizer.toLowerCase().includes(searchQuery.toLowerCase());
                        const matchesType = filterType === 'all' || e.type === filterType;
                        const matchesCategory = filterCategory === 'all' || e.category === filterCategory;
                        const matchesStatus = filterStatus === 'all' || e.status === filterStatus;
                        return matchesSearch && matchesType && matchesCategory && matchesStatus;
                    })" :key="event.id">
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

                                <!-- Financial Summary -->
                                <div class="bg-slate-50 rounded-lg p-3 mb-4">
                                    <div class="grid grid-cols-3 gap-2 text-center text-xs">
                                        <div>
                                            <div class="font-medium text-slate-900">Budget</div>
                                            <div x-text="'TSh ' + (event.budget / 1000000).toFixed(1) + 'M'"></div>
                                        </div>
                                        <div>
                                            <div class="font-medium text-slate-900">Expenses</div>
                                            <div x-text="'TSh ' + (event.expenses / 1000000).toFixed(1) + 'M'"></div>
                                        </div>
                                        <div>
                                            <div class="font-medium text-slate-900">Revenue</div>
                                            <div x-text="'TSh ' + (event.revenue / 1000000).toFixed(1) + 'M'"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex items-center gap-2">
                                    <button @click="selectedEvent = event; showRegistrationModal = true" class="flex-1 bg-purple-600 text-white px-3 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm font-medium">
                                        <i class="ph ph-users mr-1"></i>
                                        View Registrations
                                    </button>
                                    <button @click="editEvent(event)" class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-pencil"></i>
                                    </button>
                                    <button @click="deleteEvent(event)" class="text-red-600 hover:text-red-900">
                                        <i class="ph ph-trash"></i>
                                    </button>
                                    <template x-if="event.videoUrl">
                                        <a :href="event.videoUrl" target="_blank" class="text-red-600 hover:text-red-900">
                                            <i class="ph ph-youtube-logo"></i>
                                        </a>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Calendar View Tab -->
            <div x-show="activeTab === 'calendar'" x-cloak>
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                    <h3 class="text-lg font-semibold text-slate-900 mb-6">Event Calendar</h3>
                    <div class="grid gap-6 md:grid-cols-2">
                        <!-- Calendar Chart -->
                        <div>
                            <h4 class="text-sm font-medium text-slate-700 mb-3">Monthly Events</h4>
                            <div class="h-64">
                                <canvas id="monthlyChart"></canvas>
                            </div>
                        </div>
                        
                        <!-- Category Distribution -->
                        <div>
                            <h4 class="text-sm font-medium text-slate-700 mb-3">Event Categories</h4>
                            <div class="h-64">
                                <canvas id="categoryChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Events List -->
                    <div class="mt-6">
                        <h4 class="text-sm font-medium text-slate-700 mb-3">Upcoming Events</h4>
                        <div class="space-y-3">
                            <template x-for="event in events.filter(e => e.status === 'upcoming' || e.status === 'live')" :key="event.id">
                                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg hover:bg-slate-100 transition-all">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                            <i class="ph ph-calendar text-purple-600 text-xl"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-medium text-slate-900" x-text="event.name"></h5>
                                            <div class="text-sm text-slate-600">
                                                <span x-text="event.date"></span> • 
                                                <span x-text="event.location"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-sm font-medium text-slate-900" x-text="event.registrations + '/' + event.capacity"></div>
                                        <div class="text-sm text-slate-600">Registered</div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Registrations Tab -->
            <div x-show="activeTab === 'registrations'" x-cloak>
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
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

                    <!-- Registration Statistics -->
                    <div class="grid gap-6 md:grid-cols-3 mb-6">
                        <div class="bg-slate-50 rounded-lg p-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-slate-900" x-text="registrations.length"></div>
                                <div class="text-sm text-slate-600">Total Registrations</div>
                            </div>
                        </div>
                        <div class="bg-slate-50 rounded-lg p-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-slate-900" x-text="registrations.filter(r => r.status === 'confirmed').length"></div>
                                <div class="text-sm text-slate-600">Confirmed</div>
                            </div>
                        </div>
                        <div class="bg-slate-50 rounded-lg p-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (registrations.reduce((sum, r) => sum + r.amount, 0) / 1000000).toFixed(1) + 'M'"></div>
                                <div class="text-sm text-slate-600">Total Revenue</div>
                            </div>
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
            </div>

            <!-- Analytics Tab -->
            <div x-show="activeTab === 'analytics'" x-cloak>
                <div class="space-y-6">
                    <!-- Performance Charts -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Event Performance</h3>
                            <div class="h-64">
                                <canvas id="eventPerformanceChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Revenue Analysis</h3>
                            <div class="h-64">
                                <canvas id="revenueChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Attendance and Satisfaction -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Attendance Analysis</h3>
                            <div class="h-64">
                                <canvas id="attendanceChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Satisfaction Ratings</h3>
                            <div class="h-64">
                                <canvas id="satisfactionChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Statistics -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">Detailed Statistics</h3>
                        <div class="grid gap-6 md:grid-cols-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-slate-900" x-text="events.filter(e => e.status === 'completed').length"></div>
                                <div class="text-sm text-slate-600">Completed Events</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-slate-900" x-text="events.reduce((sum, e) => sum + e.registrations, 0)"></div>
                                <div class="text-sm text-slate-600">Total Attendees</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-slate-900" x-text="'TSh ' + (events.reduce((sum, e) => sum + e.revenue, 0) / 1000000).toFixed(1) + 'M'"></div>
                                <div class="text-sm text-slate-600">Total Revenue</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-slate-900" x-text="events.filter(e => e.status === 'completed').length > 0 ? (events.filter(e => e.status === 'completed').reduce((sum, e) => sum + e.satisfaction, 0) / events.filter(e => e.status === 'completed').length).toFixed(1) + '%' : 'N/A'"></div>
                                <div class="text-sm text-slate-600">Avg Satisfaction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Event Modal -->
    <div x-show="showEventModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Create New Event</h3>
                    <button @click="showEventModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form @submit.prevent="createEvent()" class="space-y-6">
                    <!-- Basic Information -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Name *</label>
                            <input type="text" x-model="newEvent.name" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter event name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Type *</label>
                            <select x-model="newEvent.type" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="conference">Conference</option>
                                <option value="summit">Summit</option>
                                <option value="workshop">Workshop</option>
                                <option value="service">Service</option>
                                <option value="reunion">Reunion</option>
                            </select>
                        </div>
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

                    <!-- Location and Capacity -->
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Location *</label>
                            <input type="text" x-model="newEvent.location" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Event location">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Venue</label>
                            <input type="text" x-model="newEvent.venue" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Specific venue">
                        </div>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Capacity *</label>
                            <input type="number" x-model="newEvent.capacity" required class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Maximum attendees">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Price (TSh)</label>
                            <input type="number" x-model="newEvent.price" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="0 for free event">
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Description</label>
                        <textarea x-model="newEvent.description" class="w-full border border-slate-200 rounded-lg px-4 py-2" rows="4" placeholder="Event description"></textarea>
                    </div>

                    <!-- Features -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Event Features</label>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" x-model="newEvent.livestreamEnabled" class="w-4 h-4 text-purple-600 border-slate-300 rounded focus:ring-purple-500">
                                <span class="text-sm text-slate-700">Enable Livestream</span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" x-model="newEvent.hasCertificate" class="w-4 h-4 text-purple-600 border-slate-300 rounded focus:ring-purple-500">
                                <span class="text-sm text-slate-700">Provide Certificate</span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" x-model="newEvent.materialsProvided" class="w-4 h-4 text-purple-600 border-slate-300 rounded focus:ring-purple-500">
                                <span class="text-sm text-slate-700">Provide Materials</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 pt-4 border-t border-slate-200">
                        <button type="button" @click="showEventModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
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
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Name</label>
                            <input type="text" x-model="editingEvent.name" required class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Status</label>
                            <select x-model="editingEvent.status" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="planning">Planning</option>
                                <option value="upcoming">Upcoming</option>
                                <option value="live">Live</option>
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
            <div class="p-6">
                <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                    <div class="flex items-start gap-3">
                        <i class="ph ph-warning text-red-600 text-xl mt-0.5"></i>
                        <div>
                            <h4 class="font-semibold text-red-900 mb-1">Confirm Deletion</h4>
                            <p class="text-sm text-red-700">Are you sure you want to delete this event? This action cannot be undone and will also remove all associated registrations.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="text-sm text-slate-600">Event: <strong x-text="deletingEvent?.name"></strong></p>
                    <p class="text-sm text-slate-600">Registrations: <strong x-text="deletingEvent?.registrations"></strong></p>
                </div>
                <div class="flex justify-end gap-3">
                    <button @click="showDeleteModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                        Cancel
                    </button>
                    <button @click="confirmDelete()" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Delete Event
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
