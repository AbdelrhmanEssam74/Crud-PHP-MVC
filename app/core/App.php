<?php

/*
 * Front end controller
 * handles the requests
 */
class App
{
    protected string $controller = "homeController";
    protected string $action = "index";
    protected array $params = array();
    public function __construct(){
        $url = $_SERVER['QUERY_STRING'];
        $url = explode("/", $url);
        echo "<pre>";
        print_r($url);
        echo "</pre>";
    }
}