<?php

namespace src\controllers;

use \core\Controller;

class LoginController extends Controller 
{

    public function signin() {
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('signin', [
            'flash' => $flash
        ]);
    }

    public function signinAction() {
        var_dump("hello");
    }
    
}