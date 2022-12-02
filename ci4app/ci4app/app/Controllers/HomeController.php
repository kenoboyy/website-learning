<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Programming',
        ];
        
        return view('pages/home', $data);
    }
}
