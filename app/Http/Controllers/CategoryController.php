<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
//        $categories = Category::pluck('title', 'id')->all();
        $categories = Category::all();
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(15);
    /*    $posts = Post::with('category')->orderBy('id', 'desc')->paginate(15);
        return view('posts.index', compact('posts'));*/

        return view('cats.index', compact( 'categories', 'posts'));

    }

    public function show($slug)
    {
        /* $categories = Category::pluck('title', 'slug')->all();
    $posts = Post::with('category')->orderBy('id', 'desc')->paginate(15);
    $post = Category::where('slug', $slug)->firstOrFail();*/

        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->paginate(3);


        return view('cats.show', compact( 'posts', 'category'));

    }
}
