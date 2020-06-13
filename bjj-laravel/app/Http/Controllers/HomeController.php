<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\NewPost;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Users $Users, NewPost $NewPost)
    {
        $this->middleware('auth');
        $this->Users = $Users;
        $this->NewPost = $NewPost;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newPosts = $this->NewPost->getAllPosts();
        return view('home',compact('newPosts'))->with('status', 'You are logged in!');
    }
    public function addNewPost(Request $request){
        $request->validate([
            'auth_name' => 'required',
            'content' => 'required'
        ]);
        $this->NewPost->createNewPost($request);
        return redirect('/home')->with('status', 'A new post has been added');
}
}
