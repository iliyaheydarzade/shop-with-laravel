<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ma extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['cat_id' , 'place_id',"name","srce","price"];
}
