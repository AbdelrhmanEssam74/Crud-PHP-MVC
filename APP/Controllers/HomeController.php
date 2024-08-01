<?php

class HomeController
{
    public function index($id): void
    {
        $data["title"] = "Home Page";
        $data["content"] = "This is the home page content";
        View::load("home", $data);
    }
}