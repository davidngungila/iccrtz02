<?php

use Illuminate\Support\Facades\Route;

// Main Routes
Route::get('/', function () {
    return view('welcome');
});

// Quick Admin Access
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

// About Section
Route::get('/about', function () {
    return view('about');
});

// Students Ministry
Route::get('/students-ministry', function () {
    return view('students-ministry');
});

// Alumni Network
Route::get('/alumni-network', function () {
    return view('alumni-network');
});

// Events & Programs
Route::get('/events', function () {
    return view('events');
});

// Join/Registration
Route::get('/join', function () {
    return view('join');
});

// Contact
Route::get('/contact', function () {
    return view('contact');
});

// Teachings
Route::get('/teachings', function () {
    return view('teachings');
});

// Calendar
Route::get('/calendar', function () {
    return view('calendar');
});

// Registration Routes
Route::get('/register/easter-conference-2026', function () {
    return view('register.easter-conference-2026');
});

// Resources
Route::get('/resources', function () {
    return view('resources');
});

// Additional Routes for Header Links
Route::get('/about/history', function () {
    return view('about.history');
});

Route::get('/about/vision', function () {
    return view('about.vision');
});

Route::get('/about/leadership', function () {
    return view('about.leadership');
});

Route::get('/leadership', function () {
    return view('leadership');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/outreach', function () {
    return view('outreach');
});

Route::get('/campaigns', function () {
    return view('campaigns');
});

Route::get('/get-involved', function () {
    return view('get-involved');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/impact', function () {
    return view('impact');
});

Route::get('/feeding-programs', function () {
    return view('feeding-programs');
});

Route::get('/emergency-support', function () {
    return view('emergency-support');
});

Route::get('/housing-support', function () {
    return view('housing-support');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/campuses', function () {
    return view('campuses');
});

Route::get('/alumni-register', function () {
    return view('alumni-register');
});

Route::get('/alumni-chapters', function () {
    return view('alumni-chapters');
});

Route::get('/alumni-events', function () {
    return view('alumni-events');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/programs/spiritual-formation', function () {
    return view('programs.spiritual-formation');
});

Route::get('/programs/leadership', function () {
    return view('programs.leadership');
});

Route::get('/programs/service', function () {
    return view('programs.service');
});

Route::get('/programs/academic', function () {
    return view('programs.academic');
});

Route::get('/programs/arts', function () {
    return view('programs.arts');
});

Route::get('/programs/international', function () {
    return view('programs.international');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
    
    Route::middleware(\App\Http\Middleware\AdminAuth::class)->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        
        Route::get('/events', function () {
            return view('admin.events');
        })->name('admin.events');
        
        Route::get('/content', function () {
            return view('admin.content');
        })->name('admin.content');
        
        Route::get('/users', function () {
            return view('admin.users');
        })->name('admin.users');
        
        Route::get('/donations', function () {
            return view('admin.donations');
        })->name('admin.donations');
        
        Route::get('/communications', function () {
            return view('admin.communications');
        })->name('admin.communications');
        
        Route::get('/reports', function () {
            return view('admin.reports');
        })->name('admin.reports');
        
        Route::get('/diocese', function () {
            return view('admin.diocese');
        })->name('admin.diocese');
        
        Route::get('/parish', function () {
            return view('admin.parish');
        })->name('admin.parish');
        
        Route::get('/groups', function () {
            return view('admin.groups');
        })->name('admin.groups');
        
        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('admin.profile');
        
        Route::get('/security', function () {
            return view('admin.security');
        })->name('admin.security');
        
        Route::get('/settings', function () {
            return view('admin.settings');
        })->name('admin.settings');
        
        Route::get('/backup', function () {
            return view('admin.backup');
        })->name('admin.backup');
        
        Route::get('/notifications', function () {
            return view('admin.notifications');
        })->name('admin.notifications');
    });
});
