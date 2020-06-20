<?php 
class Home extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index($name = 'empty'){   
        $this->view->render("header",false,null);
      }
}
