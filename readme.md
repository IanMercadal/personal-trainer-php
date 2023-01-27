# Personal Trainer

Este proyecto se trata de una web para un entrenador personal que solo pueda gestionar los usuarios con el suyo.
El cliente tendrá su usuario y podrá visualizar la información del gimnasio.

Respectivamente, en cuanto a usuario administrador, este tiene un panel de administración CRUD y para los usuarios, tarifas y solicitudes.

## Guía de instalación
1. Instalar Laragon con PHP 8.0.
2. Importar base de datos de este repositorio (db.php).
3. Mover el código a la carpeta laragon/www/ .
4. Crear .htacces en la raíz del proyecto copiando el código de abajo
5. Iniciar proyecto

### Apache

```
    <IfModule mod_rewrite.c>
    # Activar rewrite
    RewriteEngine on
    ErrorDocument 404 http://localhost/error/

    RewriteCond %{SCRIPT_FILENAME} !-d
    RewriteCond %{SCRIPT_FILENAME} !-f

    RewriteRule ^(.*)/(.*) index.php?controller=$1&action=$2
    </IfModule>
```

### Usuarios
- email: admin@admin.es password: 12345678ABCFG
- email: jdominguez@gmail.com password: 12345678ABCFG

## Tecnologías
1. PHP Vanilla
2. JS Vanilla
2. MySQL
3. HTML5
4. CSS3
5. Apache