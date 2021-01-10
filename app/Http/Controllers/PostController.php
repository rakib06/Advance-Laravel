<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
class PostController extends Controller
{
    public function create()
    {
        $channels = Channel::all();
        return view('post.create', compact('channels')) ;

    }
}
