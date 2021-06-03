<?php
require_once('models/models.php');

class Controller{
    public $model;

    public function __construct(){
        $this->models = new Model();
    }

    public function invoke(){
        $result = $this->models->getlogin();
        //It will call the getlogin() function of models class & will store the return value

        if($result == 'login')
         include 'views/profile.php';
        else
         include 'views/login.php';
    }
}