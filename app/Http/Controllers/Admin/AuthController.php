<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Show the admin login page.
     */
    public function showLogin()
    {
        return view('admin.login');
    }

    /**
     * Handle admin login request.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Simple authentication for demo (in production, use proper authentication)
        if ($request->email === 'admin@iccrtz.org' && $request->password === 'admin123') {
            // Set session data
            session(['admin_authenticated' => true]);
            session(['admin_user' => [
                'name' => 'Admin User',
                'email' => 'admin@iccrtz.org'
            ]]);
            
            // Regenerate session ID to prevent fixation
            $request->session()->regenerate();
            
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Handle admin logout request.
     */
    public function logout(Request $request)
    {
        session()->forget(['admin_authenticated', 'admin_user']);
        return redirect()->route('admin.login');
    }
}
