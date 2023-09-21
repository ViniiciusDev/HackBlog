<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $title = env('APP_NAME');
        $user = [
            'name' => 'Vinicius',
            'email' => 'vinicius@example.com',
        ];
        /* $auth = []; */
        return view('home', compact('title', 'user'));
    }

    public function aboutUs()
    {
        $title = 'About Us';
        $desc = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque maiores est suscipit saepe ex autem?';
        $user = [
            'name' => 'Vinicius',
            'email' => 'vinicius@example.com',
        ];

        return view('aboutUs', compact('title', 'desc', 'user'));
    }

    public function contact()
    {
        $title = 'Contact';
        $desc = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque maiores est suscipit saepe ex autem?';
        $user = [
            'name' => 'Vinicius',
            'email' => 'vinicius@example.com',
        ];

        return view('contact', compact('title', 'user', 'desc'));
    }
}
