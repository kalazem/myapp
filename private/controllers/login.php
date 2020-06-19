<?php 
class Login {
    public function __construct()
    {
        echo "login controller";
    }

    public function index($name ="empty "){
        echo $name;
    }
}