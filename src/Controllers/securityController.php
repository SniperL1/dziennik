<?php

namespace App\Controllers;

class securityController
{
     public function __construct($action){

         $isLoggedIn = isset($_SESSION['security']);

    if($isLoggedIn){
        $this->logout();
    }   else {
        switch ($action) {
            case 'logout':
                $this->login();
                break;
            case 'register':
                $this->register();
                break;
            }
        }
    }

    public function login(){
    require_once (__DIR__ ."/../templates/security/login.php");
    }
    public function logout(){
        require_once (__DIR__ ."/../templates/security/login.php");
        }

    public function register(){
    require_once (__DIR__ ."/../templates/security/login.php");
}

}
