@extends('layouts.admin')

@section('title', 'Profile Settings')

@section('page-title', 'Profile Settings')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'personal',
    profileData: {
        firstName: 'Admin',
        lastName: 'User',
        email: 'admin@iccrtz.org',
        phone: '+255 123 456 789',
        bio: 'System administrator for ICCRTZ platform.',
        avatar: '/images/admin-avatar.jpg',
        timezone: 'Africa/Dar_es_Salaam',
        language: 'en',
        emailNotifications: true,
        smsNotifications: false,
        pushNotifications: true
    },
    passwordData: {
        currentPassword: '',
        newPassword: '',
        confirmPassword: ''
    }
}">
    <!-- Profile Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Profile Settings</h1>
            <p class="text-slate-600">Manage your personal information and account preferences</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-lg hover:bg-slate-50 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-arrow-counter-clockwise"></i>
                Reset
            </button>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-check"></i>
                Save Changes
            </button>
        </div>
    </div>

    <!-- Profile Content -->
    <div class="grid gap-6 lg:grid-cols-3">
        <!-- Profile Sidebar -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <div class="text-center">
                    <div class="w-24 h-24 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl font-bold text-white" x-text="profileData.firstName[0] + profileData.lastName[0]"></span>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900" x-text="profileData.firstName + ' ' + profileData.lastName"></h3>
                    <p class="text-slate-600" x-text="profileData.email"></p>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center justify-center gap-2 text-sm text-slate-600">
                            <i class="ph ph-briefcase"></i>
                            <span>System Administrator</span>
                        </div>
                        <div class="flex items-center justify-center gap-2 text-sm text-slate-600">
                            <i class="ph ph-calendar"></i>
                            <span>Joined March 2026</span>
                        </div>
                        <div class="flex items-center justify-center gap-2 text-sm text-slate-600">
                            <i class="ph ph-map-pin"></i>
                            <span>Dar es Salaam, Tanzania</span>
                        </div>
                    </div>
                    <button class="mt-6 w-full bg-purple-100 text-purple-700 px-4 py-2 rounded-lg hover:bg-purple-200 transition-all font-medium">
                        Change Avatar
                    </button>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mt-6">
                <h4 class="font-semibold text-slate-900 mb-4">Activity Overview</h4>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-slate-600">Logins this month</span>
                        <span class="font-medium text-slate-900">47</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-slate-600">Actions performed</span>
                        <span class="font-medium text-slate-900">234</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-slate-600">Last login</span>
                        <span class="font-medium text-slate-900">Today, 9:15 AM</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200">
                <div class="border-b border-slate-200">
                    <nav class="flex space-x-8 px-6" aria-label="Tabs">
                        <button @click="activeTab = 'personal'" 
                                :class="activeTab === 'personal' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                                class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                            <i class="ph ph-user mr-2"></i>
                            Personal Info
                        </button>
                        <button @click="activeTab = 'security'" 
                                :class="activeTab === 'security' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                                class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                            <i class="ph ph-lock mr-2"></i>
                            Security
                        </button>
                        <button @click="activeTab = 'notifications'" 
                                :class="activeTab === 'notifications' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                                class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                            <i class="ph ph-bell mr-2"></i>
                            Notifications
                        </button>
                    </nav>
                </div>

                <!-- Tab Content -->
                <div class="p-6">
                    <!-- Personal Info Tab -->
                    <div x-show="activeTab === 'personal'" x-cloak>
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-4">Personal Information</h3>
                                <div class="grid gap-6 md:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">First Name</label>
                                        <input type="text" x-model="profileData.firstName" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
                                        <input type="text" x-model="profileData.lastName" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                                        <input type="email" x-model="profileData.email" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Phone Number</label>
                                        <input type="tel" x-model="profileData.phone" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-4">Bio</h3>
                                <textarea x-model="profileData.bio" rows="4" class="w-full border border-slate-200 rounded-lg px-4 py-2" placeholder="Tell us about yourself..."></textarea>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-4">Preferences</h3>
                                <div class="grid gap-6 md:grid-cols-2">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Timezone</label>
                                        <select x-model="profileData.timezone" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                            <option value="Africa/Dar_es_Salaam">Africa/Dar es Salaam</option>
                                            <option value="Africa/Nairobi">Africa/Nairobi</option>
                                            <option value="UTC">UTC</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Language</label>
                                        <select x-model="profileData.language" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                            <option value="en">English</option>
                                            <option value="sw">Swahili</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Tab -->
                    <div x-show="activeTab === 'security'" x-cloak>
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-4">Change Password</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Current Password</label>
                                        <input type="password" x-model="passwordData.currentPassword" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">New Password</label>
                                        <input type="password" x-model="passwordData.newPassword" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-2">Confirm New Password</label>
                                        <input type="password" x-model="passwordData.confirmPassword" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    </div>
                                    <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium">
                                        Update Password
                                    </button>
                                </div>
                            </div>

                            <div class="border-t border-slate-200 pt-6">
                                <h3 class="text-lg font-semibold text-slate-900 mb-4">Two-Factor Authentication</h3>
                                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <i class="ph ph-warning text-yellow-600 text-xl mt-0.5"></i>
                                        <div>
                                            <h4 class="font-semibold text-yellow-900 mb-1">2FA Not Enabled</h4>
                                            <p class="text-sm text-yellow-700">Add an extra layer of security to your account by enabling two-factor authentication.</p>
                                            <button class="mt-3 bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700 transition-all text-sm font-medium">
                                                Enable 2FA
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-slate-200 pt-6">
                                <h3 class="text-lg font-semibold text-slate-900 mb-4">Active Sessions</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                        <div>
                                            <div class="font-medium text-slate-900">Current Session</div>
                                            <div class="text-sm text-slate-600">Chrome on Windows • Dar es Salaam</div>
                                        </div>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Active</span>
                                    </div>
                                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                        <div>
                                            <div class="font-medium text-slate-900">Mobile App</div>
                                            <div class="text-sm text-slate-600">Safari on iPhone • Last active 2 hours ago</div>
                                        </div>
                                        <button class="text-red-600 hover:text-red-900 text-sm">Revoke</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notifications Tab -->
                    <div x-show="activeTab === 'notifications'" x-cloak>
                        <div class="space-y-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-4">Notification Preferences</h3>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-medium text-slate-900">Email Notifications</h4>
                                        <p class="text-sm text-slate-600">Receive notifications via email</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" x-model="profileData.emailNotifications" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                                    </label>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-medium text-slate-900">SMS Notifications</h4>
                                        <p class="text-sm text-slate-600">Receive notifications via SMS</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" x-model="profileData.smsNotifications" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                                    </label>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-medium text-slate-900">Push Notifications</h4>
                                        <p class="text-sm text-slate-600">Receive browser push notifications</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" x-model="profileData.pushNotifications" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
