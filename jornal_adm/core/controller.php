<?php
class controller {

    private $config;

//    public function __construct() {
//
//    }

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include_once "views/" . $viewName . ".php";
    }

    public function loadTemplate($viewName, $viewData = array()) {
        include_once "views/template.php";
    }

    public function loadViewTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include_once "views/".$viewName.".php";
    }
}


