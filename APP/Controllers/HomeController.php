<?php

class HomeController
{
    public function index($id): void
    {
        $data['title'] = "Home";
        View::load("home" , $data);
    }
    public static function not_found(): void
    {
        $data['title'] = "404 Not Found";
        View::load('Not Found' , $data);
    }

}