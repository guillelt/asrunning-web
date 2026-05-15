# AS Running — Sitio Web

Sitio web para un equipo de entrenamiento de triatlón. El proyecto muestra la evolución del desarrollo en dos versiones, desde una primera implementación funcional hasta un rediseño completo de la interfaz y las funcionalidades.

## Versiones

### v1 — Versión original
Primera implementación del sitio. Incluye sistema de registro e inicio de sesión de atletas con autenticación básica.

**Tecnologías:** PHP, MySQL, HTML/CSS

**Archivos:**
- `index.php` — página de inicio con redirección por sesión
- `login.php` — formulario de acceso
- `signup.php` — registro de nuevos atletas
- `logout.php` — cierre de sesión
- `aboutus.html` — página informativa

### v2 — Rediseño
Rediseño completo del sitio con nueva identidad visual y funcionalidades ampliadas para los atletas.

**Mejoras respecto a v1:**
- Diseño responsive moderno con tipografía Inter
- Dashboard personalizado por atleta con acceso a su rutina de entrenamiento
- Login mejorado con validación y mensajes de error
- Arquitectura separada entre vista (HTML) y lógica (PHP)
- CSS modular con variables y diseño mobile-first

**Tecnologías:** PHP, MySQL (PDO), HTML5, CSS3

**Archivos:**
- `index.html` / `index.php` — landing page del sitio
- `login.php` — acceso para atletas
- `dashboard.php` — panel personalizado post-login
- `database.php` — configuración de conexión a base de datos (ver nota)
- `logout.php` — cierre de sesión

## Configuración

Para correr el proyecto localmente:

1. Copiar `v2/database.php` y completar con las credenciales reales:

```php
$server   = 'localhost';
$username = 'tu_usuario';
$password = 'tu_password';
$database = 'nombre_base_de_datos';
```

2. Importar la estructura de la base de datos (tabla `users` con campos `id`, `username`, `password`, `rutina`)
3. Servir con Apache o nginx con soporte PHP
