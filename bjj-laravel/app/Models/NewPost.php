<?php


namespace App\Models;    

use App\Persistance\EloquentNewPost;


class NewPost
{
    public function getAllPosts()
    {
        return EloquentNewPost::latest()->get();
    }

    public function createNewPost($request){
        return EloquentNewPost::create($request->all());
    }
}