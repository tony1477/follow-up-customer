<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard() :string
    {
        $config = config('MyConfig');
        $data = [];
        return view('templates/template',$data);
    }
}
