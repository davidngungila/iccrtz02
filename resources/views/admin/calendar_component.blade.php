<!-- Interactive Calendar Component -->
<div x-data="{
    currentMonth: new Date().getMonth(),
    currentYear: new Date().getFullYear(),
    selectedDate: null,
    showEventModal: false,
    selectedDateEvents: [],
    events: $parent.events,
    
    get monthName() {
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 
                       'July', 'August', 'September', 'October', 'November', 'December'];
        return months[this.currentMonth];
    },
    
    get daysInMonth() {
        return new Date(this.currentYear, this.currentMonth + 1, 0).getDate();
    },
    
    get firstDayOfMonth() {
        return new Date(this.currentYear, this.currentMonth, 1).getDay();
    },
    
    get calendarDays() {
        const days = [];
        const startPadding = this.firstDayOfMonth;
        
        // Add empty cells for days before month starts
        for (let i = 0; i < startPadding; i++) {
            days.push(null);
        }
        
        // Add all days of the month
        for (let i = 1; i <= this.daysInMonth; i++) {
            days.push(i);
        }
        
        return days;
    },
    
    getEventsForDate(day) {
        if (!day) return [];
        
        const dateStr = `${this.currentYear}-${String(this.currentMonth + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        return this.events.filter(event => {
            const eventDate = new Date(event.date);
            const eventDateStr = `${eventDate.getFullYear()}-${String(eventDate.getMonth() + 1).padStart(2, '0')}-${String(eventDate.getDate()).padStart(2, '0')}`;
            return eventDateStr === dateStr;
        });
    },
    
    hasEvents(day) {
        return this.getEventsForDate(day).length > 0;
    },
    
    getEventCount(day) {
        return this.getEventsForDate(day).length;
    },
    
    getEventColor(day) {
        const events = this.getEventsForDate(day);
        if (events.length === 0) return '';
        
        const statusColors = {
            'live': 'bg-red-500',
            'upcoming': 'bg-blue-500',
            'completed': 'bg-green-500',
            'planning': 'bg-yellow-500'
        };
        
        // Return the color of the highest priority event
        const priorityOrder = ['live', 'upcoming', 'planning', 'completed'];
        for (const status of priorityOrder) {
            const event = events.find(e => e.status === status);
            if (event) return statusColors[status];
        }
        
        return 'bg-purple-500';
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
        const today = new Date();
        this.currentMonth = today.getMonth();
        this.currentYear = today.getFullYear();
    },
    
    selectDate(day) {
        if (!day) return;
        
        this.selectedDate = day;
        this.selectedDateEvents = this.getEventsForDate(day);
        this.showEventModal = true;
    },
    
    formatEventDate(date) {
        const eventDate = new Date(date);
        return eventDate.toLocaleDateString('en-US', { 
            weekday: 'short', 
            month: 'short', 
            day: 'numeric', 
            year: 'numeric' 
        });
    }
}">
    <!-- Calendar Header -->
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-4">
            <button @click="previousMonth()" class="p-2 hover:bg-slate-100 rounded-lg transition-all">
                <i class="ph ph-arrow-left text-slate-600"></i>
            </button>
            <h3 class="text-xl font-semibold text-slate-900" x-text="monthName + ' ' + currentYear"></h3>
            <button @click="nextMonth()" class="p-2 hover:bg-slate-100 rounded-lg transition-all">
                <i class="ph ph-arrow-right text-slate-600"></i>
            </button>
        </div>
        <button @click="goToToday()" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg hover:bg-purple-200 transition-all font-medium">
            Today
        </button>
    </div>

    <!-- Calendar Grid -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
        <!-- Weekday Headers -->
        <div class="grid grid-cols-7 gap-2 mb-4">
            <div class="text-center text-sm font-medium text-slate-700 py-2">Sun</div>
            <div class="text-center text-sm font-medium text-slate-700 py-2">Mon</div>
            <div class="text-center text-sm font-medium text-slate-700 py-2">Tue</div>
            <div class="text-center text-sm font-medium text-slate-700 py-2">Wed</div>
            <div class="text-center text-sm font-medium text-slate-700 py-2">Thu</div>
            <div class="text-center text-sm font-medium text-slate-700 py-2">Fri</div>
            <div class="text-center text-sm font-medium text-slate-700 py-2">Sat</div>
        </div>

        <!-- Calendar Days -->
        <div class="grid grid-cols-7 gap-2">
            <template x-for="day in calendarDays" :key="day">
                <div class="aspect-square relative">
                    <!-- Empty cells for padding -->
                    <div x-if="!day" class="h-full"></div>
                    
                    <!-- Calendar day -->
                    <div x-show="day" 
                         @click="selectDate(day)"
                         class="h-full border border-slate-200 rounded-lg p-2 hover:bg-slate-50 cursor-pointer transition-all relative"
                         :class="{
                             'bg-purple-50 border-purple-300': selectedDate === day,
                             'bg-slate-100': new Date().getDate() === day && new Date().getMonth() === currentMonth && new Date().getFullYear() === currentYear
                         }">
                        <!-- Day number -->
                        <div class="text-sm font-medium text-slate-900" x-text="day"></div>
                        
                        <!-- Event indicators -->
                        <div x-show="hasEvents(day)" class="absolute bottom-2 left-2 right-2">
                            <div class="flex gap-1 justify-center">
                                <div x-show="hasEvents(day)" 
                                     class="w-2 h-2 rounded-full"
                                     :class="getEventColor(day)"></div>
                                <div x-show="getEventCount(day) > 1" 
                                     class="text-xs text-slate-600 font-medium"
                                     x-text="'+' + (getEventCount(day) - 1)"></div>
                            </div>
                        </div>
                        
                        <!-- Event count badge -->
                        <div x-show="hasEvents(day)" 
                             class="absolute top-2 right-2">
                            <span class="text-xs bg-purple-100 text-purple-700 px-1.5 py-0.5 rounded-full font-medium"
                                  x-text="getEventCount(day)"></span>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Event Details Modal -->
    <div x-show="showEventModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">
                        Events for <span x-text="monthName + ' ' + selectedDate + ', ' + currentYear"></span>
                    </h3>
                    <button @click="showEventModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <!-- No events message -->
                <div x-show="selectedDateEvents.length === 0" class="text-center py-8">
                    <i class="ph ph-calendar-x text-4xl text-slate-300 mb-4"></i>
                    <p class="text-slate-600">No events scheduled for this date</p>
                </div>
                
                <!-- Events list -->
                <div x-show="selectedDateEvents.length > 0" class="space-y-4">
                    <template x-for="event in selectedDateEvents" :key="event.id">
                        <div class="border border-slate-200 rounded-lg p-4 hover:bg-slate-50 transition-all">
                            <div class="flex items-start gap-4">
                                <!-- Event image -->
                                <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0">
                                    <img :src="event.image" :alt="event.name" class="w-full h-full object-cover">
                                </div>
                                
                                <!-- Event details -->
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-2">
                                        <h4 class="font-semibold text-slate-900" x-text="event.name"></h4>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full"
                                              :class="event.status === 'live' ? 'bg-red-600 text-white animate-pulse' : 
                                                      event.status === 'upcoming' ? 'bg-blue-600 text-white' :
                                                      event.status === 'completed' ? 'bg-green-600 text-white' :
                                                      'bg-slate-600 text-white'"
                                              x-text="event.status"></span>
                                    </div>
                                    
                                    <div class="space-y-1 text-sm text-slate-600">
                                        <div class="flex items-center gap-2">
                                            <i class="ph ph-clock text-slate-400"></i>
                                            <span x-text="event.time + ' - ' + event.endTime"></span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <i class="ph ph-map-pin text-slate-400"></i>
                                            <span x-text="event.location"></span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <i class="ph ph-users text-slate-400"></i>
                                            <span x-text="event.registrations + '/' + event.capacity + ' registered'"></span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <i class="ph ph-currency-btz text-slate-400"></i>
                                            <span x-text="event.price > 0 ? event.currency + ' ' + event.price.toLocaleString() : 'Free'"></span>
                                        </div>
                                    </div>
                                    
                                    <!-- Event tags -->
                                    <div class="flex flex-wrap gap-2 mt-3">
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
                                </div>
                                
                                <!-- Action buttons -->
                                <div class="flex flex-col gap-2">
                                    <button class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="ph ph-pencil"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>
