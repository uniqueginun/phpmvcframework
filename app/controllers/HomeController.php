<?php


namespace App\Controllers;


class HomeController
{
    public function index()
    {
        return view('home.index');
    }

    public function aboutus()
    {
        echo "this is about us page";
    }
}