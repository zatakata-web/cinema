<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function index() {
        $posters = [
            [ 
                'title' => 'Матрица: Воскрешение',
                'preview' => 'https://s2eu1.kinoplan24.ru/576/4ec63eaf2a2c13/14426.jpg?mode=fit&width=512&height=512',
                'genres' => ['фантастика', 'боевик'],
                'premiere' => true
            ],
            [ 
                'title' => 'Человек-паук: Нет пути домой',
                'preview' => 'https://s2eu1.kinoplan24.ru/564/520ab36801d020/15095.jpg?mode=fit&width=512&height=512',
                'genres' => ['приключенческий экшн'],
                'premiere' => true
            ],
        ];

        return view('poster.index', compact('posters'));
    }
}
