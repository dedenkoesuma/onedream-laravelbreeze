<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portfolio extends Controller
{
    //
    public function index() {
        $params = [
            'title' => 'Portfolio'
        ];
        return view('portfolio',$params);
    }
}
