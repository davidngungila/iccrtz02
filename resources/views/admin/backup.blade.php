@extends('layouts.admin')

@section('title', 'System Backup')

@section('page-title', 'System Backup & Restore')

@section('content')
<div class="p-6" x-data="{ 
    activeTab: 'backups',
    showBackupModal: false,
    showRestoreModal: false,
    backups: [
        { id: 1, name: 'daily_backup_2026_03_30', type: 'daily', size: '245.8 MB', created: '2026-03-30 02:00 AM', status: 'completed', location: 'cloud' },
        { id: 2, name: 'weekly_backup_2026_03_29', type: 'weekly', size: '892.4 MB', created: '2026-03-29 02:00 AM', status: 'completed', location: 'local' },
        { id: 3, name: 'monthly_backup_2026_03_01', type: 'monthly', size: '1.2 GB', created: '2026-03-01 02:00 AM', status: 'completed', location: 'cloud' },
        { id: 4, name: 'manual_backup_2026_03_28', type: 'manual', size: '456.7 MB', created: '2026-03-28 03:30 PM', status: 'completed', location: 'local' }
    ],
    backupSettings: {
        autoBackup: true,
        frequency: 'daily',
        retentionDays: 30,
        backupLocation: 'cloud',
        includeFiles: true,
        includeDatabase: true
    }
}">
    <!-- Backup Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">System Backup & Restore</h1>
            <p class="text-slate-600">Manage system backups, schedule automatic backups, and restore data</p>
        </div>
        <div class="flex items-center gap-3">
            <button @click="showBackupModal = true" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium flex items-center gap-2">
                <i class="ph ph-download"></i>
                Create Backup
            </button>
        </div>
    </div>

    <!-- Backup Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-hard-drive text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Total</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="backups.length"></h3>
            <p class="text-sm text-slate-600">Available Backups</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-cloud text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Cloud</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="backups.filter(b => b.location === 'cloud').length"></h3>
            <p class="text-sm text-slate-600">Cloud Backups</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-folder text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Local</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900" x-text="backups.filter(b => b.location === 'local').length"></h3>
            <p class="text-sm text-slate-600">Local Backups</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="ph ph-clock text-yellow-600 text-xl"></i>
                </div>
                <span class="text-sm text-slate-500">Last</span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">2:00 AM</h3>
            <p class="text-sm text-slate-600">Last Backup</p>
        </div>
    </div>

    <!-- Tabs Navigation -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200">
        <div class="border-b border-slate-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button @click="activeTab = 'backups'" 
                        :class="activeTab === 'backups' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-hard-drive mr-2"></i>
                    Backup History
                </button>
                <button @click="activeTab = 'schedule'" 
                        :class="activeTab === 'schedule' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-clock mr-2"></i>
                    Schedule
                </button>
                <button @click="activeTab = 'settings'" 
                        :class="activeTab === 'settings' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-gear mr-2"></i>
                    Settings
                </button>
                <button @click="activeTab = 'restore'" 
                        :class="activeTab === 'restore' ? 'border-purple-500 text-purple-600' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'"
                        class="py-4 px-1 border-b-2 font-medium text-sm transition-all">
                    <i class="ph ph-arrow-counter-clockwise mr-2"></i>
                    Restore
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- Backup History Tab -->
            <div x-show="activeTab === 'backups'" x-cloak>
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-slate-900">Backup History</h3>
                    <div class="flex items-center gap-3">
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Types</option>
                            <option>Daily</option>
                            <option>Weekly</option>
                            <option>Monthly</option>
                            <option>Manual</option>
                        </select>
                        <select class="border border-slate-200 rounded-lg px-3 py-2 text-sm">
                            <option>All Locations</option>
                            <option>Cloud</option>
                            <option>Local</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-4">
                    <template x-for="backup in backups" :key="backup.id">
                        <div class="bg-white border border-slate-200 rounded-lg p-4 hover:shadow-md transition-all">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center">
                                        <i class="ph ph-hard-drive text-xl text-slate-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-slate-900" x-text="backup.name"></h4>
                                        <div class="flex items-center gap-4 mt-1 text-sm text-slate-600">
                                            <span class="flex items-center gap-1">
                                                <i class="ph ph-clock"></i>
                                                <span x-text="backup.created"></span>
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <i class="ph ph-folder"></i>
                                                <span x-text="backup.size"></span>
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <i class="ph ph-cloud"></i>
                                                <span x-text="backup.location"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-800" x-text="backup.type"></span>
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800" x-text="backup.status"></span>
                                    <button class="text-purple-600 hover:text-purple-900">
                                        <i class="ph ph-download"></i>
                                    </button>
                                    <button @click="showRestoreModal = true" class="text-blue-600 hover:text-blue-900">
                                        <i class="ph ph-arrow-counter-clockwise"></i>
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

            <!-- Schedule Tab -->
            <div x-show="activeTab === 'schedule'" x-cloak>
                <div class="space-y-6">
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                        <div class="flex items-start gap-3">
                            <i class="ph ph-info text-blue-600 text-xl mt-0.5"></i>
                            <div>
                                <h4 class="font-semibold text-blue-900 mb-1">Automatic Backup Schedule</h4>
                                <p class="text-sm text-blue-700">Configure when and how often automatic backups should be created.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Backup Frequency</label>
                            <select x-model="backupSettings.frequency" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Backup Time</label>
                            <input type="time" value="02:00" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Retention Period (days)</label>
                            <input type="number" x-model="backupSettings.retentionDays" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Backup Location</label>
                            <select x-model="backupSettings.backupLocation" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                <option value="cloud">Cloud Storage</option>
                                <option value="local">Local Storage</option>
                                <option value="both">Both Locations</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" x-model="backupSettings.autoBackup" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-600"></div>
                            </label>
                            <span class="text-sm font-medium text-slate-700">Enable automatic backups</span>
                        </div>
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all font-medium">
                            Save Schedule
                        </button>
                    </div>
                </div>
            </div>

            <!-- Settings Tab -->
            <div x-show="activeTab === 'settings'" x-cloak>
                <div class="space-y-6">
                    <div class="space-y-4">
                        <h4 class="font-semibold text-slate-900">Backup Content</h4>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3">
                                <input type="checkbox" x-model="backupSettings.includeDatabase" class="w-4 h-4 text-purple-600 border-slate-300 rounded focus:ring-purple-500">
                                <span class="text-sm text-slate-700">Include Database</span>
                            </label>
                            <label class="flex items-center gap-3">
                                <input type="checkbox" x-model="backupSettings.includeFiles" class="w-4 h-4 text-purple-600 border-slate-300 rounded focus:ring-purple-500">
                                <span class="text-sm text-slate-700">Include Files (uploads, assets)</span>
                            </label>
                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-slate-300 rounded focus:ring-purple-500">
                                <span class="text-sm text-slate-700">Include Configuration Files</span>
                            </label>
                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-slate-300 rounded focus:ring-purple-500">
                                <span class="text-sm text-slate-700">Include Logs</span>
                            </label>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h4 class="font-semibold text-slate-900">Compression Settings</h4>
                        <div class="grid gap-4 md:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Compression Level</label>
                                <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    <option>None</option>
                                    <option>Low</option>
                                    <option selected>Medium</option>
                                    <option>High</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Encryption</label>
                                <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                                    <option>None</option>
                                    <option>AES-256</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Restore Tab -->
            <div x-show="activeTab === 'restore'" x-cloak>
                <div class="text-center py-12">
                    <i class="ph ph-arrow-counter-clockwise text-6xl text-slate-300 mb-4"></i>
                    <h3 class="text-lg font-medium text-slate-900 mb-2">System Restore</h3>
                    <p class="text-slate-600">Restore system from a previous backup</p>
                    <button @click="showRestoreModal = true" class="mt-4 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-all font-medium">
                        Start Restore Process
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Backup Modal -->
    <div x-show="showBackupModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Create Backup</h3>
                    <button @click="showBackupModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Backup Name</label>
                        <input type="text" placeholder="Enter backup name" class="w-full border border-slate-200 rounded-lg px-4 py-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Backup Type</label>
                        <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                            <option>Full Backup</option>
                            <option>Database Only</option>
                            <option>Files Only</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Storage Location</label>
                        <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                            <option>Cloud Storage</option>
                            <option>Local Storage</option>
                            <option>Both</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end gap-3 mt-6">
                    <button @click="showBackupModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                        Cancel
                    </button>
                    <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                        Start Backup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Restore Modal -->
    <div x-show="showRestoreModal" x-cloak class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-slate-900">Restore System</h3>
                    <button @click="showRestoreModal = false" class="text-slate-400 hover:text-slate-600">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-4">
                    <div class="flex items-start gap-3">
                        <i class="ph ph-warning text-yellow-600 text-xl mt-0.5"></i>
                        <div>
                            <h4 class="font-semibold text-yellow-900 mb-1">Warning</h4>
                            <p class="text-sm text-yellow-700">Restoring from backup will overwrite current data. This action cannot be undone.</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Select Backup</label>
                        <select class="w-full border border-slate-200 rounded-lg px-4 py-2">
                            <option>Choose a backup file...</option>
                            <template x-for="backup in backups" :key="backup.id">
                                <option x-text="backup.name + ' - ' + backup.created"></option>
                            </template>
                        </select>
                    </div>
                    <div>
                        <label class="flex items-center gap-3">
                            <input type="checkbox" class="w-4 h-4 text-purple-600 border-slate-300 rounded focus:ring-purple-500">
                            <span class="text-sm text-slate-700">I understand the consequences and want to proceed</span>
                        </label>
                    </div>
                </div>
                <div class="flex justify-end gap-3 mt-6">
                    <button @click="showRestoreModal = false" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50">
                        Cancel
                    </button>
                    <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Restore System
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
