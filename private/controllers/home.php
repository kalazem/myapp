<?php 
class Home {
    public function __construct()
    {
        echo "controllers/home";
    }

    public function index($name = ''){
        echo $name;
     }
}
