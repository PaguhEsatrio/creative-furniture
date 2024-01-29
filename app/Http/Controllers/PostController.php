<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\category;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    public function index ()
    {
        $title = '';
        if(request('category')){
            $category = category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        $posts = Post::latest();
        
        return view ('posts', [
            "title" => "All Posts". $title,
            "active" => 'posts',
            //pagination ganti get jadi paginate                                    get->paginate
            "posts" => $posts->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
