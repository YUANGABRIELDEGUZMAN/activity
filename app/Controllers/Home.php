<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function test()
    {
        return "hello";
    }
    public function index(): string
    {
        return view('welcome_message');
    }
}
