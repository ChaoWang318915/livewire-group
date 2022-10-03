<?php 

namespace App\Helpers;

class AppHelper {

    private $currentRoute;

    public function __construct() {
        $this->currentRoute = basename(request()->route()->getName());
    }

    public function isCurrentRoute($route) {
        return ($this->currentRoute == $route);
    }

    public function isUserAuthRoute() {
        return in_array($this->currentRoute, ['login', 'forgot_password', 'reset_password']);
    }

    public function isAdminAuthRoute() {
        return in_array($this->currentRoute, ['admin.login']);
    }


    public static function exec() {
        return new AppHelper();
    }


}
