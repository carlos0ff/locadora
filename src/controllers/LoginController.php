<?php

namespace src\controllers;

use \core\Controller;
use \core\Debugger;
use \core\Database;

class LoginController extends Controller 
{

    public function signin() {

        Debugger::dump(Database::testConnection());
 
    }

    public function signinAction() {
       
    }
}