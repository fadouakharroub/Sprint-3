<?php 
require_once("models/models.php");

class Model{

    public function getlogin(){
        //here goes some hardcoded values to sisulate the database
        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){

            if($_REQUEST['username'] == 'fadoua' && $_REQUEST['password'] == "123"){
                return 'login';
            }
            else{
                return 'invalide user';
            }

        }
    }
    public function logout(){
        
    }
}