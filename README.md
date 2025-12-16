# Sistema de Autenticación Laravel

Sistema profesional de gestión de usuarios con autenticación tradicional y Google OAuth 2.0 desarrollado con Laravel 11.

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

## 📋 Descripción

Aplicación web que permite a los usuarios registrarse e iniciar sesión mediante dos métodos:
- **Autenticación tradicional**: Usuario y contraseña con encriptación segura
- **Google OAuth 2.0**: Inicio de sesión rápido mediante cuenta de Google

## ✨ Características

- ✅ Registro e inicio de sesión con usuario y contraseña
- ✅ Inicio de sesión con Google OAuth 2.0
- ✅ Dashboard personalizado según método de autenticación
- ✅ Página de bienvenida para usuarios no registrados
- ✅ Diseño responsive con TailwindCSS
- ✅ Validación y seguridad de datos

## 🛠️ Tecnologías utilizadas

- **Backend**: Laravel 11
- **Frontend**: Blade, TailwindCSS
- **Autenticación**: Laravel Breeze, Laravel Socialite
- **Base de datos**: MySQL
- **Control de versiones**: Git & GitHub

## 📦 Instalación

### Requisitos previos

- PHP >= 8.2
- Composer
- Node.js y npm
- MySQL
- Git

### Pasos de instalación

1. **Clonar el repositorio**
```bash
git clone https://github.com/LuzJimena050712/proyecto-final.git
cd proyecto-final
```

2. **Instalar dependencias de PHP**
```bash
composer install
```

3. **Instalar dependencias de Node**
```bash
npm install
npm run build
```

4. **Configurar variables de entorno**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configurar base de datos en `.env`**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=proyecto_final
DB_USERNAME=root
DB_PASSWORD=
```

6. **Configurar Google OAuth**

   - Ve a [Google Cloud Console](https://console.cloud.google.com/)
   - Crea un nuevo proyecto
   - Habilita la API de Google+
   - Crea credenciales OAuth 2.0
   - Configura la URL de redirección: `http://proyectofinal.com:8000/google-auth/callback`
   - Agrega las credenciales en `.env`:
```env
GOOGLE_CLIENT_ID=tu_client_id
GOOGLE_CLIENT_SECRET=tu_client_secret
```

7. **Configurar el archivo hosts**

Linux/Mac:
```bash
sudo nano /etc/hosts
```

Windows:
```
C:\Windows\System32\drivers\etc\hosts
```

Agregar:
```
127.0.0.1    proyectofinal.com
```

8. **Ejecutar migraciones**
```bash
php artisan migrate
```

9. **Iniciar el servidor**
```bash
php artisan serve --host proyectofinal.com --port=8000
```

10. **Acceder a la aplicación**
```
http://proyectofinal.com:8000
```

## 🚀 Uso

### Registro tradicional
1. Click en "Registrarse"
2. Completa el formulario con nombre, email y contraseña
3. Inicia sesión con tus credenciales

### Inicio de sesión con Google
1. Click en "Continuar con Google"
2. Selecciona tu cuenta de Google
3. Autoriza el acceso
4. Serás redirigido al dashboard

## 📂 Estructura del proyecto
```
proyecto-final/
├── app/
│   ├── Http/Controllers/
│   └── Models/
│       └── User.php (modelo con soporte para google_id)
├── database/
│   └── migrations/
│       └── create_users_table.php (tabla users con google_id)
├── resources/
│   └── views/
│       ├── auth/
│       │   └── login.blade.php (con botón de Google)
│       ├── dashboard.blade.php (dashboard personalizado)
│       └── welcome.blade.php (página de bienvenida)
├── routes/
│   └── web.php (rutas de autenticación y OAuth)
└── config/
    └── services.php (configuración de Google OAuth)
```

## 🔐 Configuración de Google OAuth

### Crear proyecto en Google Cloud Console

1. Ve a https://console.cloud.google.com/
2. Crea un nuevo proyecto
3. Habilita "Google+ API"
4. Ve a "Credenciales" → "Crear credenciales" → "ID de cliente de OAuth 2.0"
5. Configura:
   - Tipo de aplicación: Aplicación web
   - URIs de redireccionamiento autorizados: `http://proyectofinal.com:8000/google-auth/callback`
6. Copia el Client ID y Client Secret
7. Agrégalos en tu archivo `.env`

## 📝 Commits del proyecto

1. **Inicial**: Proyecto Laravel base creado
2. **Feature: autenticación básica**: Instalación de Laravel Breeze y configuración de base de datos
3. **Feature: Google OAuth 2.0**: Integración de Laravel Socialite y configuración de Google OAuth
4. **Docs: README.md**: Documentación completa del proyecto
5. **Feature: vistas personalizadas**: Dashboard y página de bienvenida personalizados

## 👤 Autor

**Luz Jimena Arce Gabriel**
- GitHub: [@LuzJimena050712](https://github.com/LuzJimena050712)

## 📄 Licencia

Este proyecto fue desarrollado como proyecto final para el curso de PHP - Desarrollo Web con Laravel.