<?php

class Router
{
    function route($url)
    {
        $url = strtolower($url);
        $controller = null;
        switch ($url) {
            case 'login':
                require_once APPLICATION_PATH . '/controllers/LoginController.php';
                $controller = 'LoginController';
                break;
            case 'register':
                require_once APPLICATION_PATH . '/controllers/RegisterController.php';
                $controller = 'RegisterController';
                break;
            case 'home':
                require_once APPLICATION_PATH . '/controllers/HomeController.php';
                $controller = 'HomeController';
                break;
            case 'manageusers':
                require_once APPLICATION_PATH . '/controllers/ManageUsersController.php';
                $controller = 'ManageUsersController';
                break;
            case 'profile':
                require_once APPLICATION_PATH . '/controllers/ProfileController.php';
                $controller = 'ProfileController';
                break;
            case 'passwordchange':
                require_once APPLICATION_PATH . '/controllers/PasswordChangeController.php';
                $controller = 'PasswordChangeController';
                break;
            case 'dateadd':
                require_once APPLICATION_PATH . '/controllers/DateAddController.php';
                $controller = 'DateAddController';
                break;
            case 'booking':
                require_once APPLICATION_PATH . '/controllers/BookingController.php';
                $controller = 'BookingController';
                break;
            default:
                require_once APPLICATION_PATH . '/controllers/NotFoundController.php';
                $controller = 'NotFoundController';
                break;
        }
        return new $controller;
    }
}
