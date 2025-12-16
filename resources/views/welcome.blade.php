<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido - Sistema de Autenticación</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    
    <!-- Header con Sombra -->
    <header class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-8 py-5">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-gray-900">Sistema de Autenticación</span>
                </div>
                @if (Route::has('login'))
                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-8 py-3 text-base font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-lg hover:shadow-xl transition-all">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-8 py-3 text-base font-bold text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                            Iniciar Sesión
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-8 py-3 text-base font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-lg hover:shadow-xl transition-all">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="py-16">
        <div class="max-w-7xl mx-auto px-8">
            
            <!-- CAJA DE BIENVENIDA -->
            <div class="bg-white rounded-3xl shadow-2xl p-12 mb-12 text-center">
                <div class="inline-flex items-center justify-center w-24 h-24 bg-blue-600 rounded-2xl shadow-xl mb-8">
                    <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h1 class="text-6xl font-extrabold text-gray-900 mb-6">
                    Sistema de Autenticación
                </h1>
                <p class="text-2xl text-gray-600 mb-10 max-w-3xl mx-auto">
                    Gestión profesional de usuarios con autenticación tradicional y Google OAuth 2.0
                </p>
                
                <!-- BOTONES GRANDES -->
                <div class="flex flex-col sm:flex-row gap-5 justify-center">
                    @guest
                        <a href="{{ route('register') }}" class="px-12 py-5 text-xl font-extrabold text-white bg-blue-600 hover:bg-blue-700 rounded-2xl shadow-2xl hover:shadow-blue-500/50 transform hover:scale-105 transition-all">
                            Registrarse Ahora →
                        </a>
                        <a href="{{ route('login') }}" class="px-12 py-5 text-xl font-extrabold text-blue-600 bg-white hover:bg-gray-50 rounded-2xl shadow-2xl border-4 border-blue-600 hover:border-blue-700 transition-all">
                            Iniciar Sesión
                        </a>
                    @else
                        <a href="{{ url('/dashboard') }}" class="px-12 py-5 text-xl font-extrabold text-white bg-blue-600 hover:bg-blue-700 rounded-2xl shadow-2xl hover:shadow-blue-500/50 transform hover:scale-105 transition-all">
                            Ir al Dashboard →
                        </a>
                    @endguest
                </div>
            </div>

            <!-- CAJAS DE CARACTERÍSTICAS -->
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                
                <!-- CAJA 1 -->
                <div class="bg-white rounded-3xl shadow-2xl p-10 hover:shadow-blue-500/30 transition-all transform hover:-translate-y-2">
                    <div class="flex items-start gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center shadow-xl">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">
                                Autenticación Tradicional
                            </h3>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Sistema de registro e inicio de sesión mediante usuario y contraseña, con encriptación segura y validación de datos.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CAJA 2 -->
                <div class="bg-white rounded-3xl shadow-2xl p-10 hover:shadow-blue-500/30 transition-all transform hover:-translate-y-2">
                    <div class="flex items-start gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-20 h-20 bg-white border-4 border-gray-300 rounded-2xl flex items-center justify-center shadow-xl">
                                <svg class="w-11 h-11" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">
                                Google OAuth 2.0
                            </h3>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Inicio de sesión rápido y seguro mediante tu cuenta de Google, utilizando el protocolo OAuth 2.0.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CAJA 3 -->
                <div class="bg-white rounded-3xl shadow-2xl p-10 hover:shadow-blue-500/30 transition-all transform hover:-translate-y-2">
                    <div class="flex items-start gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center shadow-xl">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">
                                Gestión de Perfil
                            </h3>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Administra tu información personal, actualiza tus datos y gestiona la seguridad de tu cuenta.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CAJA 4 -->
                <div class="bg-white rounded-3xl shadow-2xl p-10 hover:shadow-blue-500/30 transition-all transform hover:-translate-y-2">
                    <div class="flex items-start gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center shadow-xl">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">
                                Panel de Control
                            </h3>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Dashboard personalizado con acceso a todas las funcionalidades y configuraciones de tu cuenta.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CAJA FINAL DE LLAMADA A LA ACCIÓN -->
            <div class="bg-blue-600 rounded-3xl shadow-2xl p-16 text-center">
                <h2 class="text-5xl font-extrabold text-white mb-6">
                    ¿Listo para comenzar?
                </h2>
                <p class="text-2xl text-blue-100 mb-10 max-w-2xl mx-auto">
                    Crea tu cuenta ahora y accede a todas las funcionalidades del sistema
                </p>
                <div class="flex flex-col sm:flex-row gap-5 justify-center">
                    @guest
                        <a href="{{ route('register') }}" class="px-14 py-6 text-xl font-extrabold text-blue-600 bg-white hover:bg-gray-50 rounded-2xl shadow-2xl transform hover:scale-110 transition-all">
                            Registrarse Ahora →
                        </a>
                        <a href="{{ route('login') }}" class="px-14 py-6 text-xl font-extrabold text-white bg-blue-700 hover:bg-blue-800 rounded-2xl border-4 border-white shadow-2xl transition-all">
                            Iniciar Sesión
                        </a>
                    @else
                        <a href="{{ url('/dashboard') }}" class="px-14 py-6 text-xl font-extrabold text-blue-600 bg-white hover:bg-gray-50 rounded-2xl shadow-2xl transform hover:scale-110 transition-all">
                            Ir al Dashboard →
                        </a>
                    @endguest
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-lg mt-16 py-8">
        <div class="max-w-7xl mx-auto px-8 text-center">
            <p class="text-gray-600 text-lg font-medium">
                &copy; {{ date('Y') }} Sistema de Autenticación. Proyecto Final - Desarrollo Web con Laravel
            </p>
        </div>
    </footer>

</body>
</html>