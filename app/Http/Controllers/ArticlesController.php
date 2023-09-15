<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    private $articles;

    public function __construct()
    {
        $this->articles = [
            1 => ['title' => 'Articolo #1', 'category' => 'Sport', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, quam optio laboriosam rerum debitis cupiditate!'],
            2 => ['title' => 'Articolo #2', 'category' => 'Esteri', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, quam optio laboriosam rerum debitis cupiditate!'],
            3 => ['title' => 'Articolo #3', 'category' => 'Mondo', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, quam optio laboriosam rerum debitis cupiditate!'],
            4 => ['title' => 'Articolo #4', 'category' => 'Economia', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, quam optio laboriosam rerum debitis cupiditate!'],
        ];
    }

    public function articles()
    {
        $title = 'Articoli';
        $auth = [
            'name' => 'Vinicius',
            'email' => 'vinicius@example.com',
        ];
        $articles = $this->articles;


        return view('articoli.articles', compact('title', 'auth', 'articles'));
    }

    public function article($id)
    {
        $auth = [
            'name' => 'Vinicius',
            'email' => 'vinicius@example.com',
        ];

        if (!array_key_exists($id, $this->articles)) {
            abort(404);
        }

        return view('articoli.article', ['article' => $this->articles[$id], 'auth' => $auth]);
    }
}
