<?php 
class View {
    function __construct() {}

    /**
     * Undocumented function
     *
     * @param [type] $name
     * @param boolean $require
     * @param string $data
     * @return void
     */
    function render($name, $require=false, $data = ''){
        $this->data = $data;
        //to include the header
        if($require)
            require_once view_cons . "header" .".php";

            require_once view_cons. $name . ".php";
    }
}