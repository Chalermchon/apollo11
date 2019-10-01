<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller {

    public function index() {
        $posts = [
            (Object) [
                'id' => 1,
                'title' => 'Post Title 1',
                'detail' => 'Post Detail 1'
            ],
            (Object) [
                'id' => 2,
                'title' => 'Post Title 2',
                'detail' => 'Post Detail 2'
            ]
        ];
        $message = "Welcome to " . env('APP_NAME') . " Posts";

        return view('posts.index', [
            'message' => $message,
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = (Object) [
            'id' => $id,
            'title' => 'Post Title ' . $id,
            'detail' => 'Post Detail ' . $id
        ];

        return view('posts.show', [
            'post' => $post
        ]);
    }
}
