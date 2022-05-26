<?php

use Login as GlobalLogin;

class Login{

    public static $user;

    public static function verificaLogin(){
        echo "O usuario ".self::$user." esta logado";
    }
}

Login::$user = "admin";
Login::verificaLogin();