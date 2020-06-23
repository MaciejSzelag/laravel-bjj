@extends('layouts.app', ['title' => 'Checkmat | Hi '. Auth::user()->name])

@section('content')
<div class="container">
    <div class="container_cards">
        <div class="card-wrap">
            <div class="card">

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <div class="card-header">
                    <h1>
                        Hi {{Auth::user()->name}}.
                    </h1>
                    <h1>
                        How are you today?
                    </h1>
                </div>
                <div class="card-new-post">
                    <div class="card-new-post_header">
                        New post

                    </div>
                    <div class="card-new-post_form">
                        <form action="/postCreated" method="post">
                            @csrf
                            <input class="post-input" type="text" name="auth_name" value="{{Auth::user()->name}}"
                                readonly>
                            <input style="display:none" type="text" name="user_id" value="{{Auth::user()->id}}"
                                readonly>
                            <textarea name="content" id=""
                                placeholder="{{Auth::user()->name}} what do you think?"></textarea>
                            <input type="submit" value="Add" class="submit-post">
                        </form>
                    </div>
                </div>

                @foreach ($newPosts as $newPost)
              
                @if(Auth::user()->id == $newPost->user_id)
                <div class="card-body">
                    <div class="card-post-menu">
                        <div class="drop-btn">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <ul class="dropdown-content"> 
                            <li>
                                {{-- @if(Auth::user()->id == 2) --}}
                                    <button class="delete-post-btn"><a href="{{route('deletePost',['id'=> $newPost->id])}}">Delete this post</a></button>
                                {{-- @endif --}}
                            </li>
                        </ul>
                    </div>
              

                 
                    <div class="avatar-container avatar-owner">
                        <div class="comment-dots owner">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                        <div class="img-container owner-img">
                            <img src="{{asset('images/avatar/avatar.png')}}" alt="">
                        </div>
                    </div>
                    <div class="card-body_content">
                        <div class="delete-post">
                        </div>
                        <div class="cb_c_header" style="background-color:rgb(6, 116, 39)">
                            <p class="post-owner-name">
                                You
                            </p>
                            <span class="date">
                                @if($newPost->created_at->format('d M Y') == date('d M Y'))
                                Today
                                @else
                                {{ $newPost->created_at->format('d M Y') }}
                            </span>
                            @endif
                        </div>
                        <div class="cb_c_text">
                            <p>
                                @if($newPost->content == url($newPost->content))
                                <a href="{{ url($newPost->content)}}" target="_blank"> {{$newPost->content}}</a>
                                @else
                                {{$newPost->content}}
                                @endif
                            </p>
                        </div>


                    </div>
                </div>
                   
                @else
                <div class="card-body">
                    <div class="card-post-menu">
                        <div class="drop-btn">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <ul class="dropdown-content"> 
                            <li>
                                @if(Auth::user()->id == 2)
                                    <button class="delete-post-btn"><a href="{{route('deletePost',['id'=> $newPost->id])}}">Delete this post</a></button>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="avatar-container avatar-user">
                        <div class="comment-dots user">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                        <div class="img-container user-img">
                            <img src="{{asset('images/avatar/avatar.png')}}" alt="">
                        </div>
                    </div>

                    <div class="card-body_content">
                        <div class="delete-post">
                        </div>
                        <div class="cb_c_header">
                            <p class="post-owner-name">
                                {{$newPost->auth_name}}
                            </p>
                            <span class="date">
                                @if($newPost->created_at->format('d M Y') == date('d M Y'))
                                Today
                                @else
                                {{ $newPost->created_at->format('d M Y') }}
                            </span>
                            @endif
                        </div>
                        <div class="cb_c_text">
                            <p>
                                @if($newPost->content== url($newPost->content))
                                <a href="{{ url($newPost->content)}}"> {{$newPost->content}}</a>
                                @else
                                {{$newPost->content}}
                                @endif
                            </p>
                        </div>


                    </div>
                </div>
                @endif

                @endforeach
            </div>
        </div>
    </div>
</div>
<script src="{{asset('/../js/post.js')}}"></script>
@endsection

