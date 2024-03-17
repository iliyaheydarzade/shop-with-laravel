<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ma;
use App\Models\bl;
class see extends Controller
{
    public function see($id){
     $ma =  ma::where("id",$id)->get();
     return view("take",[
        "ma" => $ma
     ]);
    }
    public function seebl($id){
        $bl =  bl::where("id",$id)->get();
        return view("takebl",[
           "bl" => $bl
        ]);
       }
}
