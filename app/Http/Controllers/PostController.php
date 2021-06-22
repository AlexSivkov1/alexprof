<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // ниже метод отвечающий за показ главной страницы, и вид INDEX
    public function index()
    {
        // ниже ... для того чтобы  выводить список постов
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(15);
        return view('posts.index', compact('posts'));
    }




    public function show($slug)
    {
        $categories = Category::pluck('title', 'id')->all();
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();

        return view('posts.show', compact('post','categories'));
    }

}
