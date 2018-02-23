<?php

namespace Vulcan\BootboxAlert\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;
use Vulcan\BootboxAlert\BootboxAlert;

class BootboxAlertExtension extends Extension
{
    public function BootboxAlert()
    {
        $message = BootboxAlert::getAlert();

        if (!$message) {
            return;
        }

        Requirements::customScript("bootbox.alert(\"" . addslashes($message->Message) . "\");");
    }
}