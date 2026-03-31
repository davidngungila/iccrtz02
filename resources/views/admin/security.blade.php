@extends('layouts.admin')

@section('title', 'Security Settings')

@section('page-title', 'Security Settings')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'overview',
    securitySettings: {
        twoFactorAuth: false,
        sessionTimeout: 30,
        loginAlerts: true,
        ipWhitelist: false,
        passwordPolicy: 'strong',
        auditLog: true
    },
    recentActivity: [
        { id: 1, action: 'Login Successful', ip: '192.168.1.100', location: 'Dar es Salaam, Tanzania', time: '2026-03-30 09:15 AM', status: 'success' },
        { id: 2, action: 'Password Changed', ip: '192.168.1.100', location: 'Dar es Salaam, Tanzania', time: '2026-03-29 02:30 PM', status: 'success' },
        { id: 3, action: 'Failed Login Attempt', ip: '192.168.1.105', location: 'Unknown', time: '2026-03-29 11:45 AM', status: 'warning' },
        { id: 4, action: 'Profile Updated', ip: '192.168.1.100', location: 'Dar es Salaam, Tanzania', time: '2026-03-28 04:20 PM', status: 'success' },
        { id: 5, action: 'API Key Generated', ip: '192.168.1.100', location: 'Dar es Salaam, Tanzania', time: '2026-03-27 10:15 AM', status: 'info' }
    ]
}">
    <!-- Security Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Security Settings</h1>
            <p class="text-slate-600">Manage system security, authentication, and access control</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Export Logs
            </button>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-shield-check"></i>
                Security Audit
            </button>
        </div>
    </div>

    <!-- Security Status -->
    <div class="grid gap-6 md:grid-cols-4 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-shield-check text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Status</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">Secure</h3>
            <p class="text-sm text-slate-600">Overall Security</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-user text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Active</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">3</h3>
            <p class="text-sm text-slate-600">Active Sessions</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-warning text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Today</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">2</h3>
            <p class="text-sm text-slate-600">Security Events</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-clock text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Last</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">9:15 AM</h3>
            <p class="text-sm text-slate-600">Last Login</p>
        </div>
    </div>

    <!-- Security Tabs -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200">
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button @click="activeTab = 'overview'" 
                        :class="activeTab === 'overview' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-chart-line mr-2"></i>
                    Overview
                </button>
                <button @click="activeTab = 'authentication'" 
                        :class="activeTab === 'authentication' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-lock mr-2"></i>
                    Authentication
                </button>
                <button @click="activeTab = 'access'" 
                        :class="activeTab === 'access' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-key mr-2"></i>
                    Access Control
                </button>
                <button @click="activeTab = 'activity'" 
                        :class="activeTab === 'activity' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-clock-counter-clockwise mr-2"></i>
                    Activity Log
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- Overview Tab -->
            <div x-show="activeTab === 'overview'" x-cloak>
                <div class="space-y-6">
                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                        <div class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-green-600 text-xl mt-0.5"></i>
                            <div>
                                <h4 class="font-semibold text-green-900 mb-1">Security Status: Healthy</h4>
                                <p class="text-sm text-green-700">All security measures are properly configured and functioning normally.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="bg-slate-50 rounded-lg p-6">
                            <h4 class="font-semibold text-slate-900 mb-4">Authentication Security</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-600">Password Policy</span>
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Strong</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-600">Two-Factor Auth</span>
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">Disabled</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-600">Session Timeout</span>
                                    <span class="text-sm font-medium text-slate-900">30 minutes</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-50 rounded-lg p-6">
                            <h4 class="font-semibold text-slate-900 mb-4">Access Control</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-600">IP Whitelist</span>
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800">Disabled</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-600">Failed Login Lockout</span>
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Enabled</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-600">API Access</span>
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Restricted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Authentication Tab -->
            <div x-show="activeTab === 'authentication'" x-cloak>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">Authentication Settings</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-slate-900">Two-Factor Authentication</h4>
                                    <p class="text-sm text-slate-600">Require 2FA for admin users</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" x-model="securitySettings.twoFactorAuth" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                                </label>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-slate-900">Login Alerts</h4>
                                    <p class="text-sm text-slate-600">Notify on new login attempts</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" x-model="securitySettings.loginAlerts" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-slate-200 pt-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">Password Policy</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Password Strength</label>
                                <select x-model="securitySettings.passwordPolicy" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    <option value="weak">Weak (6+ characters)</option>
                                    <option value="medium">Medium (8+ characters, mixed case)</option>
                                    <option value="strong">Strong (12+ characters, symbols, numbers)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Session Timeout (minutes)</label>
                                <input type="number" x-model="securitySettings.sessionTimeout" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Access Control Tab -->
            <div x-show="activeTab === 'access'" x-cloak>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">IP Restrictions</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-slate-900">IP Whitelist</h4>
                                    <p class="text-sm text-slate-600">Allow access only from specific IP addresses</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" x-model="securitySettings.ipWhitelist" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                                </label>
                            </div>
                            <div x-show="securitySettings.ipWhitelist" class="space-y-2">
                                <input type="text" placeholder="192.168.1.100" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all text-sm font-medium">
                                    Add IP Address
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-slate-200 pt-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-4">API Access Control</h3>
                        <div class="space-y-4">
                            <div class="bg-slate-50 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <h4 class="font-medium text-slate-900">API Keys</h4>
                                    <button class="bg-purple-600 text-white px-3 py-1 rounded-lg hover:bg-purple-700 transition-all text-sm">
                                        Generate New Key
                                    </button>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between p-2 bg-white rounded border border-slate-200">
                                        <div class="flex-1">
                                            <div class="font-mono text-sm">sk_test_...abc123</div>
                                            <div class="text-xs text-slate-500">Created 7 days ago</div>
                                        </div>
                                        <button class="text-red-600 hover:text-red-900 text-sm">Revoke</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Log Tab -->
            <div x-show="activeTab === 'activity'" x-cloak>
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-slate-900">Recent Activity</h3>
                        <div class="flex items-center gap-3">
                            <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                                <option>All Activities</option>
                                <option>Login</option>
                                <option>Password Changes</option>
                                <option>Failed Attempts</option>
                                <option>API Access</option>
                            </select>
                            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium text-sm">
                                Clear Log
                            </button>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <template x-for="activity in recentActivity" :key="activity.id">
                            <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-full flex items-center justify-center"
                                         :class="activity.status === 'success' ? 'bg-green-100' : activity.status === 'warning' ? 'bg-yellow-100' : 'bg-blue-100'">
                                        <i :class="activity.status === 'success' ? 'ph-check text-green-600' : activity.status === 'warning' ? 'ph-warning text-yellow-600' : 'ph-info text-blue-600'" class="text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-slate-900" x-text="activity.action"></h4>
                                        <div class="text-sm text-slate-600">
                                            <span x-text="activity.ip"></span> • 
                                            <span x-text="activity.location"></span> • 
                                            <span x-text="activity.time"></span>
                                        </div>
                                    </div>
                                </div>
                                <span class="px-2 py-1 text-xs font-medium rounded-full"
                                      :class="activity.status === 'success' ? 'bg-green-100 text-green-800' : activity.status === 'warning' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800'"
                                      x-text="activity.status"></span>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
