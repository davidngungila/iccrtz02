@extends('layouts.admin')

@section('title', 'Events Management')

@section('page-title', 'Events Management')

@section('content')
<div class="p-6" x-data="{ 
    activeEvent: null,
    showEventModal: false,
    events: [
        {
            id: 1,
            name: 'International Easter Conference 2026',
            type: 'conference',
            status: 'live',
            date: '2026-03-31',
            time: '09:00 AM',
            location: 'Archdiocese of Mbeya, Tanzania',
            registrations: 1250,
            capacity: 5000,
            image: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=400&fit=crop',
            videoUrl: 'https://www.youtube.com/embed/PgIJm42OJhw?list=TLPQMzEwMzIwMjbdpT4N3Pb2kA'
        },
        {
            id: 2,
            name: 'Youth Leadership Summit',
            type: 'summit',
            status: 'upcoming',
            date: '2026-04-15',
            time: '10:00 AM',
            location: 'University of Dar es Salaam',
            registrations: 450,
            capacity: 500,
            image: 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=800&h=400&fit=crop'
        },
        {
            id: 3,
            name: 'Annual Thanksgiving Service',
            type: 'service',
            status: 'completed',
            date: '2026-03-15',
            time: '06:00 PM',
            location: 'St. Mary\'s Cathedral',
            registrations: 800,
            capacity: 1000,
            image: 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&h=400&fit=crop'
        }
    ]
}">
    <!-- Live Event Control Panel -->
    <template x-for="event in events.filter(e => e.status === 'live')" :key="event.id">
        <div class="bg-gradient-to-r from-red-500 to-pink-600 text-white rounded-xl p-6 mb-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="live-indicator">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <div class="w-6 h-6 bg-white rounded-full"></div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold" x-text="event.name"></h3>
                        <p class="text-red-100">
                            <span x-text="event.registrations"></span> attendees • 
                            <span x-text="event.location"></span> • 
                            Started at <span x-text="event.time"></span>
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <a :href="event.videoUrl" target="_blank" class="bg-white/20 hover:bg-white/30 px-4 py-2 rounded-lg font-medium transition-all">
                        <i class="ph ph-youtube-logo mr-2"></i> Watch Stream
                    </a>
                    <button class="bg-white/20 hover:bg-white/30 px-4 py-2 rounded-lg font-medium transition-all">
                        <i class="ph ph-gear mr-2"></i> Manage
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Video Embed for Live Event -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-8" x-show="event.videoUrl">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-slate-900">Live Stream</h3>
                <span class="px-3 py-1 bg-red-100 text-red-700 text-sm font-medium rounded-full flex items-center gap-1">
                    <span class="w-2 h-2 bg-red-600 rounded-full animate-pulse"></span>
                    LIVE NOW
                </span>
            </div>
            <div class="aspect-w-16 aspect-h-9 bg-slate-100 rounded-lg overflow-hidden">
                <iframe 
                    :src="event.videoUrl" 
                    :title="event.name + ' - Live Stream'" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen
                    class="w-full h-full rounded-lg">
                </iframe>
            </div>
        </div>
    </template>

    <!-- Events Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Events Management</h1>
            <p class="text-slate-600">Create and manage church events, conferences, and gatherings</p>
        </div>
        <button @click="showEventModal = true" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
            <i class="ph ph-plus"></i>
            New Event
        </button>
    </div>

    <!-- Events Stats -->
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
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-broadcast text-red-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Live</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="events.filter(e => e.status === 'live').length"></h3>
            <p class="text-sm text-slate-600">Live Now</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-clock text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Upcoming</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="events.filter(e => e.status === 'upcoming').length"></h3>
            <p class="text-sm text-slate-600">Scheduled</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-check-circle text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Completed</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="events.filter(e => e.status === 'completed').length"></h3>
            <p class="text-sm text-slate-600">Past Events</p>
        </div>
    </div>

    <!-- Events List -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200">
        <div class="p-6 border-b border-slate-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-slate-900">All Events</h2>
                <div class="flex items-center gap-3">
                    <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                        <option>All Types</option>
                        <option>Conference</option>
                        <option>Summit</option>
                        <option>Service</option>
                    </select>
                    <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                        <option>All Status</option>
                        <option>Live</option>
                        <option>Upcoming</option>
                        <option>Completed</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="divide-y divide-slate-200">
            <template x-for="event in events" :key="event.id">
                <div class="p-6 hover:bg-slate-50 transition-colors">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <img :src="event.image" :alt="event.name" class="w-20 h-20 rounded-lg object-cover">
                            <div>
                                <div class="flex items-center gap-3 mb-2">
                                    <h3 class="text-lg font-semibold text-slate-900" x-text="event.name"></h3>
                                    <span 
                                        class="px-2 py-1 text-xs font-medium rounded-full"
                                        :class="{
                                            'bg-red-100 text-red-700': event.status === 'live',
                                            'bg-blue-100 text-blue-700': event.status === 'upcoming',
                                            'bg-green-100 text-green-700': event.status === 'completed'
                                        }"
                                        x-text="event.status.toUpperCase()">
                                    </span>
                                </div>
                                <div class="flex items-center gap-4 text-sm text-slate-600">
                                    <span class="flex items-center gap-1">
                                        <i class="ph ph-calendar"></i>
                                        <span x-text="event.date"></span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <i class="ph ph-clock"></i>
                                        <span x-text="event.time"></span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <i class="ph ph-map-pin"></i>
                                        <span x-text="event.location"></span>
                                    </span>
                                </div>
                                <div class="mt-2">
                                    <div class="flex items-center gap-2">
                                        <div class="flex-1 bg-slate-200 rounded-full h-2">
                                            <div 
                                                class="bg-purple-600 h-2 rounded-full transition-all"
                                                :style="`width: ${(event.registrations / event.capacity) * 100}%`">
                                            </div>
                                        </div>
                                        <span class="text-sm text-slate-600">
                                            <span x-text="event.registrations"></span>/<span x-text="event.capacity"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="p-2 text-slate-600 hover:text-slate-900 hover:bg-slate-100 rounded-lg transition-all">
                                <i class="ph ph-eye text-xl"></i>
                            </button>
                            <button class="p-2 text-slate-600 hover:text-slate-900 hover:bg-slate-100 rounded-lg transition-all">
                                <i class="ph ph-pencil text-xl"></i>
                            </button>
                            <button class="p-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg transition-all">
                                <i class="ph ph-trash text-xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- New Event Modal -->
    <div x-show="showEventModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Create New Event</h3>
                    <button @click="showEventModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Event Name</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter event name">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Type</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Conference</option>
                                <option>Summit</option>
                                <option>Service</option>
                                <option>Workshop</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Status</label>
                            <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option>Upcoming</option>
                                <option>Live</option>
                                <option>Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Date</label>
                            <input type="date" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Time</label>
                            <input type="time" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Location</label>
                        <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Enter event location">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Capacity</label>
                            <input type="number" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Maximum attendees">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Registration Fee</label>
                            <input type="text" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Free or amount">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Description</label>
                        <textarea rows="4" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Event description"></textarea>
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
</div>

<style>
.live-indicator {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
}
</style>
@endsection
