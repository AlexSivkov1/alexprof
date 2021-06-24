<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // ниже метод отвечающий за показ главной страницы, и вид INDEX
    public function index()
    {
        $categories = Category::pluck('title', 'id')->all();

        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(15);
        return view('main.index', compact('posts', 'categories'));
    }

    public function menu($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('id', 'desc')->paginate(3);
        // отвечает за нажатие по выпадающей кнопке меню Категории
        $categories = Category::pluck('title', 'slug')->all();
        return view('cats.index', compact('categories', 'category', 'posts'));

    }




    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();

        return view('main.show', compact('post'));
    }

}

