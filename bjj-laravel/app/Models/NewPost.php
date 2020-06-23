<?php


namespace App\Models;    

use App\Persistance\EloquentNewPost;


class newPost
{
    public function getAll()
    {
        return EloquentNewPost::all();
    }
    public function getAllPosts()
    {
        return EloquentNewPost::latest()->get();
    }

    public function createNewPost($request){
        return EloquentNewPost::create($request->all());
    }

}