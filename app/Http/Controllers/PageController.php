<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Portfolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Blog::orderBy('id', 'desc')->paginate(10);
        $portfolios = Portfolio::orderBy('id', 'desc')->paginate(10);
        return view('welcome', compact('portfolios', 'posts'));
    }
}
