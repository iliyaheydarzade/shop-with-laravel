<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Models\ma;
use App\Models\bl;
use App\Models\comment;
class adad extends Controller
{
    public function ma(){
        Storage::disk('public')->putFileAs('photos', new File($_FILES["file"]["tmp_name"]),$_FILES["file"]["name"],"public");
        ma::create([
            "cat_id" => request("cat"),
            "place_id" => request("pl"),
            "name" => request("name"),
            "srce" => '/storage/photos/'.$_FILES["file"]["name"],
            "price" => request("pr"),
           ]);
           return redirect("admin/addma");
    }
    public function bl(){
        Storage::disk('public')->putFileAs('bl', new File($_FILES["filee"]["tmp_name"]),$_FILES["filee"]["name"],"public");
        bl::create([
            "name" => request("name"),
            "srce" => '/storage/bl/'.$_FILES["filee"]["name"],
            "text" => request("text"),
           ]);
           return redirect("admin/addbl");
    }
    public function del($comid){
        if(session("login") == "login"){
         comment::where("id",$comid)->delete();
         return redirect("admin/masage");
        }
        return view("admin/adminlogin");
    }
}
