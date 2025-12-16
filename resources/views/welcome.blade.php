<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido - Sistema de Autenticación</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white border-b border-gray-200">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <span class="text-xl font-semibold text-gray-900">Sistema de Autenticación</span>
                        </div>
                    </div>
                    @if (Route::has('login'))
                        <div class="flex items-center space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">
                                    Iniciar Sesión
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 rounded-lg text-sm font-medium transition shadow-sm">
                                        Registrarse
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <!-- Welcome Section -->
                <div class="text-center mb-16">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">
                        Bienvenido al Sistema de Autenticación
                    </h1>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Sistema profesional de gestión de usuarios con autenticación tradicional y Google OAuth 2.0
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ml-4 text-lg font-semibold text-gray-900">
                                Autenticación Tradicional
                            </h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Sistema de registro e inicio de sesión mediante usuario y contraseña, con encriptación segura y validación de datos.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="h-6 w-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ml-4 text-lg font-semibold text-gray-900">
                                Google OAuth 2.0
                            </h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Inicio de sesión rápido y seguro mediante tu cuenta de Google, utilizando el protocolo OAuth 2.0.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ml-4 text-lg font-semibold text-gray-900">
                                Gestión de Perfil
                            </h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Administra tu información personal, actualiza tus datos y gestiona la seguridad de tu cuenta.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 shadow-sm hover:shadow-md transition">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="ml-4 text-lg font-semibold text-gray-900">
                                Panel de Control
                            </h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Dashboard personalizado con acceso a todas las funcionalidades y configuraciones de tu cuenta.
                        </p>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-center text-sm text-gray-600">
                    &copy; {{ date('Y') }} Sistema de Autenticación. Proyecto Final - Desarrollo Web con Laravel
                </p>
            </div>
        </footer>
    </div>
</body>
</html>