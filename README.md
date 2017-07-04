MaintenanceScreen
=====

Pantalla de mantenimiento para cualquier proyecto.

# Instalación

Habilitamos el repositorio en composer.json

```json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/laarranz/maintenance-screen.git"
        }
    ]
```
Instalamos con composer

```bash
composer require laarranz/maintenance-screen:dev-master
```

Y listo! Para usarlo en nuestro proyecto basta con incluir lo siguiente en el index.php del website, después de cargar el autoload:

```php
<?php 

use laarranz\MaintenanceScreen;

MaintenanceScreen::load(array(
	'enable' => true,
	'visible_hosts' => array()
));
```

# Documentación
Las siguientes opciones se pueden enviar al load() en un array asociativo.

```
'enable' => false, // activa o desactiva la pantalla
'visible_hosts' => array(
	'localhost',
	'192.168.1.33',
	...
), // direcciones ip que podrán seguir viendo la web aún estando activo
'flag' => 'mantenimiento.flag', // opcional. se activa o desactiva en base a la existencia del archivo indicado
'img_path' => 'maintenance.jpg', // opcional. muestra la imagen indicada
'title' => 'Titulo del mantenimiento', // opcional. muestra el titulo escrito
'text' => 'Este sitio se encuentra en testing.', // opcional. Muestra el texto indicado
'css_path' => 'estilo.css', // opcional. incluye hoja de estilos personalizada
'bgcolor' => 'black' // opcional. modifica el fondo de la pantalla

```
