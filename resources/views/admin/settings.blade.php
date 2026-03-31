@extends('layouts.admin')

@section('title', 'Settings')

@section('page-title', 'System Settings')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'general',
    settings: {
        general: {
            siteName: 'ICCRTZ',
            siteDescription: 'Inter-Colleges Charismatic Catholic Renewer Tanzania',
            contactEmail: 'info@iccrtz.org',
            contactPhone: '+255 123 456 789',
            address: 'Dar es Salaam, Tanzania',
            timezone: 'Africa/Dar_es_Salaam',
            language: 'en'
        },
        security: {
            twoFactorAuth: true,
            sessionTimeout: 30,
            passwordPolicy: 'strong',
            loginAttempts: 5,
            lockoutDuration: 15
        },
        notifications: {
            emailNotifications: true,
            smsNotifications: false,
            pushNotifications: true,
            newRegistrationAlert: true,
            systemUpdatesAlert: true,
            securityAlerts: true
        },
        appearance: {
            theme: 'light',
            primaryColor: '#667eea',
            logo: '/logo.png',
            favicon: '/favicon.ico',
            customCSS: ''
        }
    }
}">
    <!-- Settings Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">System Settings</h1>
            <p class="text-slate-600">Configure system preferences, security, and appearance</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-arrow-counter-clockwise"></i>
                Reset to Defaults
            </button>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-check"></i>
                Save Changes
            </button>
        </div>
    </div>

    <!-- Settings Tabs -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200">
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button @click="activeTab = 'general'" 
                        :class="activeTab === 'general' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-gear mr-2"></i>
                    General
                </button>
                <button @click="activeTab = 'security'" 
                        :class="activeTab === 'security' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-shield-check mr-2"></i>
                    Security
                </button>
                <button @click="activeTab = 'notifications'" 
                        :class="activeTab === 'notifications' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-bell mr-2"></i>
                    Notifications
                </button>
                <button @click="activeTab = 'appearance'" 
                        :class="activeTab === 'appearance' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-palette mr-2"></i>
                    Appearance
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- General Settings -->
            <div x-show="activeTab === 'general'" x-cloak>
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Site Name</label>
                        <input type="text" x-model="settings.general.siteName" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Contact Email</label>
                        <input type="email" x-model="settings.general.contactEmail" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Contact Phone</label>
                        <input type="tel" x-model="settings.general.contactPhone" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Address</label>
                        <input type="text" x-model="settings.general.address" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Timezone</label>
                        <select x-model="settings.general.timezone" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                            <option value="Africa/Dar_es_Salaam">Africa/Dar es Salaam</option>
                            <option value="Africa/Nairobi">Africa/Nairobi</option>
                            <option value="UTC">UTC</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Language</label>
                        <select x-model="settings.general.language" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                            <option value="en">English</option>
                            <option value="sw">Swahili</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Site Description</label>
                    <textarea x-model="settings.general.siteDescription" rows="3" class="w-full border border-slate-200 rounded-lg px-4 py-2"></textarea>
                </div>
            </div>

            <!-- Security Settings -->
            <div x-show="activeTab === 'security'" x-cloak>
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="font-medium text-slate-900">Two-Factor Authentication</h4>
                            <p class="text-sm text-slate-600">Require 2FA for all admin users</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" x-model="settings.security.twoFactorAuth" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                        </label>
                    </div>
                    
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Session Timeout (minutes)</label>
                            <input type="number" x-model="settings.security.sessionTimeout" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Password Policy</label>
                            <select x-model="settings.security.passwordPolicy" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="weak">Weak</option>
                                <option value="medium">Medium</option>
                                <option value="strong">Strong</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Max Login Attempts</label>
                            <input type="number" x-model="settings.security.loginAttempts" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Lockout Duration (minutes)</label>
                            <input type="number" x-model="settings.security.lockoutDuration" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notification Settings -->
            <div x-show="activeTab === 'notifications'" x-cloak>
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="font-medium text-slate-900">Email Notifications</h4>
                            <p class="text-sm text-slate-600">Send notifications via email</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" x-model="settings.notifications.emailNotifications" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                        </label>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="font-medium text-slate-900">SMS Notifications</h4>
                            <p class="text-sm text-slate-600">Send notifications via SMS</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" x-model="settings.notifications.smsNotifications" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                        </label>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="font-medium text-slate-900">Push Notifications</h4>
                            <p class="text-sm text-slate-600">Send browser push notifications</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" x-model="settings.notifications.pushNotifications" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Appearance Settings -->
            <div x-show="activeTab === 'appearance'" x-cloak>
                <div class="space-y-6">
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Theme</label>
                            <select x-model="settings.appearance.theme" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="light">Light</option>
                                <option value="dark">Dark</option>
                                <option value="auto">Auto</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Primary Color</label>
                            <input type="color" x-model="settings.appearance.primaryColor" class="w-full border border-slate-200 rounded-lg px-4 py-2 h-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
