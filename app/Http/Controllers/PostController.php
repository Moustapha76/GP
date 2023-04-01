<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function gpList()
    {
        $listeGP = Post::all();
        return view('gplist',['gplist'=>$listeGP]);
    }
    public function getGp($id)
    {
        $gpInfo = Post::getId($id);
        return view('reservation',['gpInfo'=>$gpInfo]);
    }
}
