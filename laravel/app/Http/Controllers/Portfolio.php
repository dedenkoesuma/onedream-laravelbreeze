<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Portfolio extends Controller
{
    //
    public function index() {

        return view('portfolio',[
            'title' => 'Portfolio',
            'posts' => Post::all()
        ]);
    }
}
