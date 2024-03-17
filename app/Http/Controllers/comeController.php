<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
class comeController extends Controller
{
    public function one(){
        comment::create([
         "name" => request("hid"),
         "text" => request("text")
        ]);
        return redirect("call/call");
    }
}
