<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $posts = Post::latest();
        $category = category::latest();
        
        return view ('home', [
            "name" => "Creative Furniture ID",
            "active" => 'posts',
            //pagination ganti get jadi paginate                                    get->paginate
            "posts" => $posts->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString(),
            "categorys" => $category->paginate(4)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}