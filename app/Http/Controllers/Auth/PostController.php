<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function store(Request $request) {
        dd('ok');
    }
}