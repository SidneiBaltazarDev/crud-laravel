<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'Titulo 2 ',
            'content' => 'Conteudo Qualquer 2',
            'author' => 'Sidnei 2'
        ];

        $post = new Post($new_post);
        $post->save();
        dd($post);
    }

    public function read(Request $request) {
        $post = new Post();

        $post = $post->find(1);
        return $post;
    }

    public function readall(Request $request) {
        $posts = Post::all();
        return $posts;
    }
}
