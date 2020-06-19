<?php

/**
 * Main App class
 */
class App
{

    protected $controller = "home"; //default controller 
    protected $method = "index";  //default method 
    protected $params = []; //holds any passed parameters via url 
    public function __construct(){
        

        print_r($_SERVER['REQUEST_URI']);
        print_r($this->parseUrl());
         $url = $this->parseUrl();
         unset($url[0]);
        //if the requested controller exists 
        if(isset($url[1]))
        if (file_exists('../my-forum-app-kal/private/controllers/' . $url[1] . '.php')) {
            $this->controller = $url[1];
            unset($url[1]);
        }
        require_once '../my-forum-app-kal/private/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //if the requested method exists 
        if(isset($url[2])){
            if(method_exists($this->controller,$url[2])){
                // echo "method exists";
                $this->method = $url[2];
                unset($url[2]);
            }
        }

        //assigns any passed parameters 
        $this->params = $url ? array_values($url) : [];
        print_r($this->params);
        //calls required controller and method; passes any existing parameters 
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    /**
     * purifies the passed the URL 
     * @return array
     */
    public function parseUrl() {
        if (isset($_SERVER['REQUEST_URI'])) {
            return $url = explode('/', filter_var(rtrim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
        }
    }
}