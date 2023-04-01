<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static function getId($id){
        $listeGP = Post::all();
        return $listeGP[$id-1];

    }

}
