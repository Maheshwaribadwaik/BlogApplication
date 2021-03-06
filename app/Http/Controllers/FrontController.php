<?php

namespace App\Http\Controllers;
use App\Models\Category;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {


    $categories = Category::all();
    $blogs = Blog::where('status',1)->latest()->paginate(4);
    $featured_blog = Blog::latest()->first();
     return view('welcome', compact('categories','blogs', 'featured_blog'));
}

}

