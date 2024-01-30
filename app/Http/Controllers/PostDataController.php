<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostData;

class PostDataController extends Controller
{
    function addDataBase (Request $req) 
    {
        $post = new PostData;
        $post->name = $req->name;
        $post->comment = $req->comment;
        $post->save();

        die($post);
    }
}
