@extends('layouts.admin')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard Overview')

@section('content')
<div class="p-6">
                    <!-- Live Event Alert -->
                    <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white rounded-xl p-6 mb-8">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center animate-pulse">
                                    <i class="ph ph-broadcast text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold">🔴 International Easter Conference 2026 - Mbeya</h3>
                                    <p class="text-green-100">Archdiocese of Mbeya, Tanzania • Live Stream Available</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <a href="https://youtu.be/PgIJm42OJhw?list=TLPQMzEwMzIwMjbdpT4N3Pb2kA" target="_blank" class="bg-white/20 hover:bg-white/30 px-4 py-2 rounded-lg font-medium transition-all">
                                    <i class="ph ph-youtube-logo mr-2"></i> Watch on YouTube
                                </a>
                                <a href="/admin/events" class="bg-white/20 hover:bg-white/30 px-4 py-2 rounded-lg font-medium transition-all">
                                    Manage Event
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Video Embed -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-slate-900">Featured Live Stream</h3>
                            <span class="px-3 py-1 bg-red-100 text-red-700 text-sm font-medium rounded-full flex items-center gap-1">
                                <span class="w-2 h-2 bg-red-600 rounded-full animate-pulse"></span>
                                LIVE
                            </span>
                        </div>
                        <div class="aspect-w-16 aspect-h-9 bg-slate-100 rounded-lg overflow-hidden">
                            <iframe 
                                width="100%" 
                                height="450" 
                                src="https://www.youtube.com/embed/PgIJm42OJhw?list=TLPQMzEwMzIwMjbdpT4N3Pb2kA" 
                                title="INTERNATIONAL EASTER CONFERENCE 2026 ARCHDIOCESE OF MBEYA - TANZANIA" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen
                                class="w-full h-full rounded-lg">
                            </iframe>
                        </div>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <h4 class="font-semibold text-slate-900">International Easter Conference 2026</h4>
                                <p class="text-sm text-slate-600">Archdiocese of Mbeya - Tanzania</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <button class="text-purple-600 hover:text-purple-700 font-medium text-sm">
                                    <i class="ph ph-share-network mr-1"></i> Share
                                </button>
                                <button class="text-purple-600 hover:text-purple-700 font-medium text-sm">
                                    <i class="ph ph-download-simple mr-1"></i> Download
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- Total Registrations -->
                        <div class="stat-card text-white rounded-xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="ph ph-users text-2xl"></i>
                                </div>
                                <span class="text-sm bg-white/20 px-2 py-1 rounded-full">+12%</span>
                            </div>
                            <h3 class="text-3xl font-bold mb-1">2,847</h3>
                            <p class="text-white/80 text-sm">Total Registrations</p>
                        </div>

                        <!-- Live Viewers -->
                        <div class="stat-card text-white rounded-xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="ph ph-eye text-2xl"></i>
                                </div>
                                <span class="text-sm bg-white/20 px-2 py-1 rounded-full animate-pulse">LIVE</span>
                            </div>
                            <h3 class="text-3xl font-bold mb-1">1,250</h3>
                            <p class="text-white/80 text-sm">Live Viewers</p>
                        </div>

                        <!-- Active Events -->
                        <div class="stat-card text-white rounded-xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="ph ph-calendar-check text-2xl"></i>
                                </div>
                                <span class="text-sm bg-white/20 px-2 py-1 rounded-full">1 Active</span>
                            </div>
                            <h3 class="text-3xl font-bold mb-1">7</h3>
                            <p class="text-white/80 text-sm">Total Events</p>
                        </div>

                        <!-- Revenue -->
                        <div class="stat-card text-white rounded-xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                    <i class="ph ph-currency-btz text-2xl"></i>
                                </div>
                                <span class="text-sm bg-white/20 px-2 py-1 rounded-full">+8%</span>
                            </div>
                            <h3 class="text-3xl font-bold mb-1">85.4M</h3>
                            <p class="text-white/80 text-sm">TSh Revenue</p>
                        </div>
                    </div>

                    <!-- Quick Actions & Recent Activity -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Quick Actions -->
                        <div class="lg:col-span-2">
                            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                                <h3 class="text-lg font-bold text-slate-900 mb-4">Quick Actions</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    <button class="flex flex-col items-center gap-2 p-4 bg-slate-50 rounded-lg hover:bg-slate-100 transition-all">
                                        <i class="ph ph-plus-circle text-2xl text-purple-600"></i>
                                        <span class="text-sm font-medium">New Event</span>
                                    </button>
                                    <button class="flex flex-col items-center gap-2 p-4 bg-slate-50 rounded-lg hover:bg-slate-100 transition-all">
                                        <i class="ph ph-bell text-2xl text-blue-600"></i>
                                        <span class="text-sm font-medium">Send Alert</span>
                                    </button>
                                    <button class="flex flex-col items-center gap-2 p-4 bg-slate-50 rounded-lg hover:bg-slate-100 transition-all">
                                        <i class="ph ph-article text-2xl text-green-600"></i>
                                        <span class="text-sm font-medium">New Post</span>
                                    </button>
                                    <button class="flex flex-col items-center gap-2 p-4 bg-slate-50 rounded-lg hover:bg-slate-100 transition-all">
                                        <i class="ph ph-chart-line text-2xl text-orange-600"></i>
                                        <span class="text-sm font-medium">View Stats</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Recent Registrations -->
                            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mt-6">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-bold text-slate-900">Recent Registrations</h3>
                                    <a href="/admin/users" class="text-purple-600 hover:text-purple-700 text-sm font-medium">View All</a>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                                <span class="text-xs font-bold text-purple-600">JD</span>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900">John Doe</p>
                                                <p class="text-sm text-slate-600">Easter Conference • Student</p>
                                            </div>
                                        </div>
                                        <span class="text-xs text-slate-500">2 min ago</span>
                                    </div>
                                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-xs font-bold text-green-600">SM</span>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900">Sarah Mwangi</p>
                                                <p class="text-sm text-slate-600">Easter Conference • Alumni</p>
                                            </div>
                                        </div>
                                        <span class="text-xs text-slate-500">5 min ago</span>
                                    </div>
                                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                                <span class="text-xs font-bold text-blue-600">RK</span>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-900">Robert Kimani</p>
                                                <p class="text-sm text-slate-600">Easter Conference • International</p>
                                            </div>
                                        </div>
                                        <span class="text-xs text-slate-500">12 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Live Stream Status -->
                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                            <h3 class="text-lg font-bold text-slate-900 mb-4">Live Stream Status</h3>
                            <div class="space-y-4">
                                <div class="text-center">
                                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-3">
                                        <div class="w-8 h-8 bg-red-600 rounded-full animate-pulse"></div>
                                    </div>
                                    <h4 class="font-bold text-slate-900">🔴 LIVE</h4>
                                    <p class="text-sm text-slate-600">Day 1 - Opening Session</p>
                                </div>
                                
                                <div class="space-y-2">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-slate-600">Quality</span>
                                        <span class="font-medium text-green-600">1080p</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-slate-600">Viewers</span>
                                        <span class="font-medium">1,250</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-slate-600">Duration</span>
                                        <span class="font-medium">45:23</span>
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-slate-200">
                                    <button class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition-all font-medium">
                                        End Stream
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endsection
