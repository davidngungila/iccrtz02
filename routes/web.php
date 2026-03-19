<?php

use Illuminate\Support\Facades\Route;

// Main Routes
Route::get('/', function () {
    return view('welcome');
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
