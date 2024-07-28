<?php

/*
 * Front end controller
 * handles the requests
 */

class App
{
    protected string $controller = "HomeController";
    protected string $action = "index";
    protected array $params = array();

    public function __construct()
    {
        $this->prepareURL();
        $this->render();
    }

    /**
     * extract controller, method and params from request
     * @return void
     */
    private function prepareURL(): void
    {
        $url = $_SERVER['QUERY_STRING'];
        if (!empty($url)):
            $url = trim($url, '/');
            $url = explode("/", $url);
            // define the controller
            $this->controller = (isset($url[0]) ? ucfirst($url[0]) . "Controller" : "HomeController");
            // define the action
            $this->action = ($url[1] ?? "index");
            unset($url[0], $url[1]);
            // define the params
            $this->params = (!empty($url) ? $url : array());
        endif;
    }

    private function render(): void
    {
        if (class_exists($this->controller)):
            $controller = new $this->controller;
            if (method_exists($controller, $this->action)) {
                call_user_func([$controller, $this->action] , $this->params);
            } else {
                echo " method not found";
            }
        else:
            echo "This controller: " . $this->controller . " Not Found";
        endif;
    }
}