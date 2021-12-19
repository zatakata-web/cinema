<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function agreement() {
        return view('agreement.index');
    }

    public function politics() {
        return view('politics.index');
    }    
}
