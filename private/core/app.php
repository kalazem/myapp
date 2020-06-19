<?php 
/**
 * Main App class
 */
class App{

    protected $controller = "home"; //default controller 
    protected $method ="index";  //default method 
    protected $params = []; //holds any passed parameters via url 
    public function __construct()
    {
          echo "from app";
         print_r($this->parseUrl());
         echo "after app";
    }

    /**
     * purifies the passed the URL 
     * @return void
     */
    public function parseUrl(){
        if(isset($_SERVER['REQUEST_URI'])){
            return $url = explode('/',filter_var(rtrim($_SERVER['REQUEST_URI'],'/') , FILTER_SANITIZE_URL));
        }else{
            return "not set";
        }
    }
}