<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ma; 
class addcard extends Controller
{
    public function add($ma){
      $pros = ma::where("id",$ma)->get();
      if(!session()->has("sabad_".$ma)){
        foreach($pros as $pro){
          session(["sabad_".$ma =>[
            "id" => $pro["id"],
            "name" =>$pro["name"],
            "srce" =>$pro["srce"],
            "price"=>$pro["price"],
             "q" => 1
          ]]);
        }
      }

      elseif(session()->has("sabad_".$ma)){
        $sa = session("sabad_".$ma);
        foreach($pros as $pro){
          session(["sabad_".$ma =>[
            "id" => $sa["id"],
            "name" =>$sa["name"],
            "srce" =>$sa["srce"],
            "price"=>$sa["price"] + $pro["price"],
            "q" =>$sa["q"] + 1
          ]]);
        }
        print_r(session("sabad_".$ma));
      }

    }
}
