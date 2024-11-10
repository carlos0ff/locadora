<?php
namespace src\controllers;

use \core\Controller;
use \core\Database;

class HomeController extends Controller 
{


    public function index() {
        $data = [];

        

        $this->render('home', $data);
    }


}