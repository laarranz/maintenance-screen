MaintenanceScreen
=====

Maintenance screen for any project in PHP.

# Installation

```bash
composer require luar/maintenance-screen
```

To use it in your project simply include the following in the index.php of the website:

```php
<?php 

use Luar\MaintenanceScreen;

MaintenanceScreen::load(array(
	'enable' => true,
	'visible_hosts' => array()
));
```

# Documentation
The following options can be sent to load() in an associative array.

```
'enable' => false, // enable or disable the screen

// ip addresses that can continue to see the web even though it is active
'visible_hosts' => array (
'localhost',
'192.168.1.33'
), 

// optionals
'flag' => 'maintenance.flag', // Is activated or deactivated based on the existence of the indicated file
'img_path' => 'maintenance.jpg', // Show the indicated image
'title' => 'Maintenance title', // Show the title written
'text' => 'This site is in testing.', // Shows the indicated text
'css_path' => 'style.css', // Includes custom style sheet
'bgcolor' => 'black' // Modifies the background of the screen
```