
# MaintenanceScreen

This package allows you to enable a maintenance screen for your website.

- [Installation](#installation)
- [Usage](#usage)
- [Documentation](#documentation)

### Installation

```bash
composer require luar/maintenance-screen
```

### Usage

To use it in your project simply include the following in the index.php of the website:

```php
use Luar\MaintenanceScreen;

MaintenanceScreen::load(array(
	'enable' => true,
	'visible_hosts' => array()
));
```

### Documentation
The following options can be sent to load() in an associative array.

```php
'enable' => false, // enable or disable the screen

// ip addresses that can continue to see the web even though it is active
'visible_hosts' => array (
    'localhost',
    '192.168.1.33'
), 

// optionals
'flag' => 'maintenance.flag', // Activated or deactivated based on the existence of file
'img_path' => 'maintenance.jpg', // Show the indicated image
'title' => 'Maintenance title', // Show the title written
'text' => 'This site is in testing.', // Shows the indicated text
'css_path' => 'style.css', // Includes custom style sheet
'bgcolor' => 'black' // Modifies the background of the screen
```
