<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Admin Login | ICCRTZ Admin Panel</title>

        <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Manrope', sans-serif; }
            .font-serif { font-family: 'Playfair Display', serif; }
            [x-cloak] { display: none !important; }
            
            .login-bg {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                position: relative;
                overflow: hidden;
            }
            
            .login-bg::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
            }
            
            .glass-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }
            
            .input-group {
                position: relative;
            }
            
            .input-group input:focus + label,
            .input-group input:not(:placeholder-shown) + label {
                transform: translateY(-25px) scale(0.85);
                color: #667eea;
            }
            
            .input-group label {
                position: absolute;
                left: 12px;
                top: 50%;
                transform: translateY(-50%);
                transition: all 0.3s ease;
                pointer-events: none;
                color: #64748b;
                background: white;
                padding: 0 4px;
            }
        </style>
    </head>
    <body class="min-h-screen login-bg flex items-center justify-center antialiased" x-data="{ 
        showPassword: false,
        loading: false,
        errorMessage: ''
    }">
        
        <div class="w-full max-w-md mx-4">
            <!-- Logo and Title -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-2xl shadow-xl mb-4">
                    <img src="{{ asset('logo.png') }}" alt="ICCRTZ Logo" class="w-12 h-12">
                </div>
                <h1 class="text-3xl font-bold text-white mb-2">Admin Panel</h1>
                <p class="text-white/80">ICCRTZ Website Management System</p>
            </div>

            <!-- Login Form -->
            <div class="glass-card rounded-2xl shadow-2xl p-8" x-show="!loading">
                <form method="POST" action="{{ route('admin.login.post') }}" x-data="{ 
                    showPassword: false,
                    loading: false,
                    errorMessage: '{{ $errors->first('email') ?? '' }}'
                }" x-on:submit="loading = true">
                    <!-- Error Message -->
                    <div x-show="errorMessage" x-transition class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                        <div class="flex items-center gap-2">
                            <i class="ph ph-warning-circle"></i>
                            <span x-text="errorMessage"></span>
                        </div>
                    </div>

                    <!-- CSRF Token -->
                    @csrf

                    <!-- Email Field -->
                    <div class="input-group mb-6">
                        <input 
                            type="email" 
                            id="email"
                            name="email"
                            x-model="email"
                            placeholder=" "
                            required
                            class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-purple-600 focus:border-transparent transition-all"
                        >
                        <label for="email">Email Address</label>
                        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-400">
                            <i class="ph ph-envelope"></i>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="input-group mb-6">
                        <input 
                            :type="showPassword ? 'text' : 'password'"
                            id="password"
                            name="password"
                            x-model="password"
                            placeholder=" "
                            required
                            class="w-full px-4 py-3 pr-12 border border-slate-200 rounded-xl focus:ring-2 focus:ring-purple-600 focus:border-transparent transition-all"
                        >
                        <label for="password">Password</label>
                        <button 
                            type="button"
                            x-on:click="showPassword = !showPassword"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-400 hover:text-slate-600"
                        >
                            <i class="ph" :class="showPassword ? 'ph-eye-slash' : 'ph-eye'"></i>
                        </button>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center gap-2 text-sm text-slate-600">
                            <input type="checkbox" name="remember" x-model="remember" class="w-4 h-4 text-purple-600 border-slate-300 rounded focus:ring-purple-600">
                            Remember me
                        </label>
                        <a href="#" class="text-sm text-purple-600 hover:text-purple-700 font-medium">Forgot password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white font-bold py-3 px-4 rounded-xl hover:from-purple-700 hover:to-blue-700 transition-all shadow-lg"
                    >
                        Sign In to Admin Panel
                    </button>
                </form>

                <!-- Security Notice -->
                <div class="mt-6 p-4 bg-slate-50 rounded-lg">
                    <div class="flex items-start gap-2 text-sm text-slate-600">
                        <i class="ph ph-shield-check text-green-600 mt-0.5"></i>
                        <div>
                            <p class="font-semibold text-slate-700">Secure Login</p>
                            <p>This is a restricted area. Unauthorized access is prohibited.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Loading State -->
            <div x-show="loading" class="glass-card rounded-2xl shadow-2xl p-12 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-purple-600"></div>
                </div>
                <p class="text-slate-600 font-medium">Authenticating...</p>
            </div>
        </div>

        <script>
            // Remove loading state after page load
            document.addEventListener('DOMContentLoaded', function() {
                if (window.Alpine) {
                    // Alpine.js will handle the form submission
                }
            });
        </script>
    </body>
</html>
