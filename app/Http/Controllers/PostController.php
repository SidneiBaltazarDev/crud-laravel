<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'Titulo',
            'content' => 'Conteudo Qualquer',
            'author' => 'Sidnei'
        ];

        $post = new Post($new_post);
        $post->save();
        dd($post);
    }
}
