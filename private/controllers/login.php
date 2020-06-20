<?php 
/**
 * This class takes care of logging in users into the app 
 */
class Login extends Controller{

    public function __construct()  {
        parent::__construct();
     }

    /**
     * Default method of the class 
     *
     * @return void
     */
    public function index(){
        $this->view->render("header",false,null);
     }
     
}