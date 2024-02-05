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
        $title = 'All Product';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
        
            if ($category) {
                $title = $category->name;
            }
        }
        

        $posts = Post::latest();
        
        return view ('posts', [
            "title" => $title,
            "active" => 'posts',
            //pagination ganti get jadi paginate                                    get->paginate
            "posts" => $posts->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            "active" => 'posts',
            "post" => $post,
        ]);
    }
}
