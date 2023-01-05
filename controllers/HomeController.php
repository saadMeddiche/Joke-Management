<?php

class HomeController
{

    static public function index($page)
    {
        include('views/' . $page . '.php');
    }
}