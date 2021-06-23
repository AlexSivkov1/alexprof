<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index($slug)
    {

        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('id', 'desc')->paginate(3);
        return view('menu.index', compact('category', 'posts'));
    }




  public function show()
    {

        $categories = Category::pluck('title', 'slug')->all();
        $posts = Post::all();

        return view('menu.index', compact( 'posts', 'categories'));
    }
}
