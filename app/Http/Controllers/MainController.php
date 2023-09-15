<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $title = env('APP_NAME');
        $auth = [
            'name' => 'Vinicius',
            'email' => 'vinicius@example.com',
        ];
        /* $auth = []; */
        return view('home', compact('title', 'auth'));
    }

    public function aboutUs()
    {
        $title = 'About Us';
        $desc = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque maiores est suscipit saepe ex autem?';
        $auth = [
            'name' => 'Vinicius',
            'email' => 'vinicius@example.com',
        ];

        return view('aboutUs', compact('title', 'desc', 'auth'));
    }

    public function contact()
    {
        $title = 'Contact';
        $desc = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque maiores est suscipit saepe ex autem?';
        $auth = [
            'name' => 'Vinicius',
            'email' => 'vinicius@example.com',
        ];

        return view('contact', compact('title', 'auth', 'desc'));
    }
}
