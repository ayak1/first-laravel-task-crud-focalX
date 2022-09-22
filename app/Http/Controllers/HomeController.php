<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Posts::all();
        return view('home',['posts' => $posts]);
    }
}
