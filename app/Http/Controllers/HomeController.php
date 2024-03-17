<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ma;
use App\Models\bl;
class HomeController extends Controller
{
   public function one($cat_id){
    $my = ma::where("cat_id",$cat_id)->get();
    $blog = bl::all();
    return view("home",[
      "my" => $my,
      "blog" => $blog
    ]);
   }
}
// ///////////////////blog

