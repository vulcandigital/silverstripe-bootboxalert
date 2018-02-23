# silverstripe-bootboxalert

Easily create a bootbox.js alert programatically using sessions

## Requirements
* silverstripe/framework: ^4

## Usage
**Your controller**
```php
class PageController extends ContentController {
    private static $extensions = [
        Vulcan\BootboxAlert\Extensions\BootboxAlertExtension::class    
    ];
}
```

**In your global template (Page.ss):**
```twig
$BootboxAlert
```
Placing this method in the template will allow the script to be added to the page requirements at the very end to ensure bootbox has been required.

**Setting the alert**
```php
BootboxAlert::setAlert("Example message");
```

## License
[BSD-3-Clause](LICENSE.md) - [Vulcan Digital Ltd](https://vulcandigital.co.nz)