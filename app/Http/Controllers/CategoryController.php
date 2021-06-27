<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::pluck('title')->all();
//        $categories = Category::all();
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(15);
    /*    $posts = Post::with('category')->orderBy('id', 'desc')->paginate(15);
        return view('posts.index', compact('posts'));*/

        return view('cats.index', compact( 'categories', 'posts'));

    }

    public function show($slug)
    {
        $categories = Category::with('posts')->paginate(100);

        return view('cats.show', compact('categories'));

    }
}
