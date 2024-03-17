<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin; 
use App\Models\comment; 

class chekController extends Controller
{
    public function f(){
        if(session("login") == "login"){
            return redirect("admin/adhome");
        }
        return view("admin/adminlogin");
    }
    public function d(){
      $qs = admin::all();
      $name = $_POST["name"];
      $pas = $_POST["pas"];
      foreach($qs as $q){
        if($q["name"] == $name && $q["password"] == $pas){
          session(["login" => "login"]);
          return redirect("admin/pan");
        }
        else{
            session(["login" => "no"]);
            return redirect("admin/pan");
        }
      }
        
    }
    public function c(){
      if(session("login") == "login"){
          $qs = admin::all();
          return view("admin/adhome",[
            "names" => $qs
          ]);
      }
      return view("admin/adminlogin");
    }
    public function addma(){
      if(session("login") == "login"){
        $qs = admin::all();
        return view("admin.adma",[
         "names" => $qs
       ]);   
    }
    return view("admin/adminlogin");
    }     
    public function addbl(){
      if(session("login") == "login"){
        $qs = admin::all();
        return view("admin.addbl",[
         "names" => $qs
       ]);   
    }
    return view("admin/adminlogin");
    }
    public function masage(){
      if(session("login") == "login"){
        $qs = admin::all();
        $f = comment::all();
        return view("admin.masage",[
         "names" => $qs,
         "f" =>$f
       ]);   
    }
    return view("admin/adminlogin");
    }
}

