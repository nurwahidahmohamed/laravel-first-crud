<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIPostController extends Controller
{
    //
    public function index()
    {
        //API call
        $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/posts');


        $posts = $response->object();

        //return to view dan $posts
        return view('posts.index', compact('posts'));
    }
}
