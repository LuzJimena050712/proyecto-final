<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">
                                ¡Bienvenido, {{ Auth::user()->name }}!
                            </h3>
                            <p class="text-gray-600">
                                @if(Auth::user()->google_id)
                                    Has iniciado sesión mediante <span class="font-semibold text-blue-600">Google OAuth 2.0</span>
                                @else
                                    Has iniciado sesión mediante <span class="font-semibold text-blue-600">autenticación tradicional</span>
                                @endif
                            </p>
                        </div>
                        <div class="hidden sm:block">
                            @if(Auth::user()->google_id)
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10" viewBox="0 0 24 24">
                                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                                    </svg>
                                </div>
                            @else
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account Information Grid -->
            <div class="grid md:grid-cols-3 gap-6 mb-6">
                <!-- Card 1: Account Type -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Tipo de Cuenta</p>
                                <p class="text-lg font-semibold text-gray-900">
                                    @if(Auth::user()->google_id)
                                        Google OAuth
                                    @else
                                        Tradicional
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Email -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4 flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-500">Correo Electrónico</p>
                                <p class="text-sm font-semibold text-gray-900 truncate">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Member Since -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Miembro Desde</p>
                                <p class="text-lg font-semibold text-gray-900">{{ Auth::user()->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Acciones Rápidas</h3>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- Edit Profile -->
                        <a href="{{ route('profile.edit') }}" class="flex items-center p-4 border border-gray-200 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition">
                            <div class="flex-shrink-0">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Editar Perfil</p>
                                <p class="text-xs text-gray-500">Actualiza tu información</p>
                            </div>
                        </a>

                        <!-- Verified Badge -->
                        <div class="flex items-center p-4 border border-gray-200 rounded-lg bg-gray-50">
                            <div class="flex-shrink-0">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Cuenta Verificada</p>
                                <p class="text-xs text-gray-500">Tu cuenta está activa</p>
                            </div>
                        </div>

                        <!-- Security -->
                        <a href="{{ route('profile.edit') }}" class="flex items-center p-4 border border-gray-200 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition">
                            <div class="flex-shrink-0">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Configuración</p>
                                <p class="text-xs text-gray-500">Seguridad y privacidad</p>
                            </div>
                        </a>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full flex items-center p-4 border border-gray-200 rounded-lg hover:border-red-500 hover:bg-red-50 transition">
                                <div class="flex-shrink-0">
                                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                </div>
                                <div class="ml-3 text-left">
                                    <p class="text-sm font-medium text-gray-900">Cerrar Sesión</p>
                                    <p class="text-xs text-gray-500">Salir de tu cuenta</p>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Account Details -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Información de la Sesión</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between py-3 border-b border-gray-100">
                            <span class="text-sm font-medium text-gray-500">ID de Usuario</span>
                            <span class="text-sm font-semibold text-gray-900">{{ Auth::user()->id }}</span>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-gray-100">
                            <span class="text-sm font-medium text-gray-500">Método de Autenticación</span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ Auth::user()->google_id ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800' }}">
                                @if(Auth::user()->google_id)
                                    Google OAuth 2.0
                                @else
                                    Usuario y Contraseña
                                @endif
                            </span>
                        </div>
                        <div class="flex items-center justify-between py-3">
                            <span class="text-sm font-medium text-gray-500">Última Actualización</span>
                            <span class="text-sm font-semibold text-gray-900">{{ Auth::user()->updated_at->format('d/m/Y H:i') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>