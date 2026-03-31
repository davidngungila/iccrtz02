@extends('layouts.admin')

@section('title', 'Content Management')

@section('page-title', 'Content Management')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'news',
    searchQuery: '',
    contentItems: [
        { id: 1, type: 'news', title: 'Easter Conference 2026 Registration Now Open', author: 'Admin Team', date: '2026-03-30', status: 'published', views: 1250 },
        { id: 2, type: 'announcement', title: 'New Youth Leadership Program Launch', author: 'Sarah Kimani', date: '2026-03-29', status: 'published', views: 890 },
        { id: 3, type: 'blog', title: 'Reflections on Lent Season', author: 'Fr. John Michael', date: '2026-03-28', status: 'draft', views: 0 },
        { id: 4, type: 'sermon', title: 'The Power of Faith in Modern Times', author: 'Bishop Robert Chen', date: '2026-03-27', status: 'published', views: 2100 },
        { id: 5, type: 'teaching', title: 'Understanding Catholic Social Teaching', author: 'Dr. Grace Mbeki', date: '2026-03-26', status: 'published', views: 567 }
    ]
}">
    <!-- Content Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Content Management</h1>
            <p class="text-slate-600">Manage news, announcements, blog posts, sermons, and teachings</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-file-text"></i>
                New Content
            </button>
        </div>
    </div>

    <!-- Content Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-file-text text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="contentItems.length"></h3>
            <p class="text-sm text-slate-600">All Content</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-check-circle text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Published</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="contentItems.filter(c => c.status === 'published').length"></h3>
            <p class="text-sm text-slate-600">Live Content</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-clock text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Draft</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="contentItems.filter(c => c.status === 'draft').length"></h3>
            <p class="text-sm text-slate-600">In Review</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-eye text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total Views</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="contentItems.reduce((sum, c) => sum + c.views, 0)"></h3>
            <p class="text-sm text-slate-600">Content Views</p>
        </div>
    </div>

    <!-- Tabs Navigation -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 mb-6">
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button @click="activeTab = 'news'" 
                        :class="activeTab === 'news' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-newspaper mr-2"></i>
                    News
                </button>
                <button @click="activeTab = 'announcements'" 
                        :class="activeTab === 'announcements' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-megaphone mr-2"></i>
                    Announcements
                </button>
                <button @click="activeTab = 'blog'" 
                        :class="activeTab === 'blog' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-article mr-2"></i>
                    Blog Posts
                </button>
                <button @click="activeTab = 'sermons'" 
                        :class="activeTab === 'sermons' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-church mr-2"></i>
                    Sermons
                </button>
                <button @click="activeTab = 'teachings'" 
                        :class="activeTab === 'teachings' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-graduation-cap mr-2"></i>
                    Teachings
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- News Tab -->
            <div x-show="activeTab === 'news'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">News Articles</h3>
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <input type="text" 
                                   x-model="searchQuery" 
                                   placeholder="Search news..." 
                                   class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <i class="ph ph-magnifying-glass absolute left-3 top-2.5 text-slate-400"></i>
                        </div>
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                            <i class="ph ph-plus"></i>
                            New Article
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <template x-for="item in contentItems.filter(c => c.type === 'news' && c.title.toLowerCase().includes(searchQuery.toLowerCase()))" :key="item.id">
                        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden hover:shadow-lg transition-all">
                            <div class="h-48 bg-gradient-to-br from-purple-100 to-purple-200"></div>
                            <div class="p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-800" x-text="item.type"></span>
                                    <span class="text-xs text-slate-500" x-text="item.date"></span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2" x-text="item.title"></h4>
                                <div class="flex items-center justify-between text-sm text-slate-600">
                                    <span x-text="item.author"></span>
                                    <span class="flex items-center gap-1">
                                        <i class="ph ph-eye"></i>
                                        <span x-text="item.views"></span>
                                    </span>
                                </div>
                                <div class="mt-3 flex items-center gap-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full"
                                          :class="item.status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                                          x-text="item.status"></span>
                                    <div class="flex-1"></div>
                                    <button class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-pencil"></i>
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

            <!-- Announcements Tab -->
            <div x-show="activeTab === 'announcements'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-megaphone text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Announcements</h3>
                    <p class="text-slate-600">Important announcements and notifications for the community</p>
                </div>
            </div>

            <!-- Blog Tab -->
            <div x-show="activeTab === 'blog'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-article text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Blog Posts</h3>
                    <p class="text-slate-600">Reflections, stories, and insights from the community</p>
                </div>
            </div>

            <!-- Sermons Tab -->
            <div x-show="activeTab === 'sermons'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-church text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Sermons</h3>
                    <p class="text-slate-600">Weekly sermons and spiritual messages</p>
                </div>
            </div>

            <!-- Teachings Tab -->
            <div x-show="activeTab === 'teachings'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-graduation-cap text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">Teachings</h3>
                    <p class="text-slate-600">Educational content and Catholic teachings</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
