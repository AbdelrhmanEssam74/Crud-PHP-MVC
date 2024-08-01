<?php

class HomeController
{
    public function index($id): void
    {
        $data['title'] = "Home";
        View::load("home" , $data);
    }
}