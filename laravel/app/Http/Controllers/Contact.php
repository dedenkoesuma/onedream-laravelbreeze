<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    //
    public function index() {
        $params = [
            'title' => 'Contact'
        ];
        return view('contact', $params);
    }
}
