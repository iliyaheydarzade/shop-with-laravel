<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class callController extends Controller
{
    public function call () {
        return view("call");
    }
}
