<?php

class HomeController
{
    public function index($id): void
    {
        View::load("home");
    }
}