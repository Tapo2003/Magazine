<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // public $timestamps = true;
    
    public function str_to_url($url){
        $url = preg_replace('~[^\\pL0-9_]+~u','-',$url);
        $url = trim($url,"-");
        $url = iconv("utf-8","us-ascii//TRANSLIT",$url);
        $url = strtolower($url);
        $url = preg_replace('~[^-a-z0-9_]+~','',$url);

        return $url;
    }
}
