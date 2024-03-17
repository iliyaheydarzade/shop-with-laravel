<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sabad extends Controller
{
   public function pub(){
    $session = session()->all();
    $cart = [];
    foreach($session as $key => $v){
     if(substr($key,0,6) == "sabad_"){
      $cart[$key] = $v;
     }
    }
    $mab = 0;
    foreach($cart as $f => $t){
      $mab += $t["price"];
    }
    return view("cart",[
        "cart" => $cart,
        "mab" => $mab
    ]);
   }
   public function remove($id){
     session()->flash("sabad_".$id);
     return  redirect("/c1");
   }
}
