<?php

namespace Vulcan\BootboxAlert;

use SilverStripe\Control\Controller;
use SilverStripe\Core\Config\Configurable;
use SilverStripe\Core\Injector\Injectable;
use SilverStripe\View\ArrayData;

class BootboxAlert
{
    use Injectable, Configurable;

    public static function setAlert($message)
    {
        $session = Controller::curr()->getRequest()->getSession();
        $session->set('BootboxAlert.Message', $message);
    }

    /**
     * @return null|ArrayData
     */
    public static function getAlert()
    {
        $session = Controller::curr()->getRequest()->getSession();
        $message = $session->get('BootboxAlert');
        $session->clear('BootboxAlert');
        return $message ? ArrayData::create($message) : null;
    }
}