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
                            <input class="post-input" type="text" name="auth_name" value="{{Auth::user()->name}}" readonly>
                            <textarea name="content" id="" placeholder="{{Auth::user()->name}} what do you think?">

                        </textarea>
                            <input type="submit" value="Add"  class="submit-post">
                        </form>
                    </div>
                </div>
             @foreach ($newPosts as $newPost)
                 
            
                <div class="card-body">
                   <div class="card-body_content">
                       <div class="cb_c_header">
                           <h3 class="post-owner-name">
                               {{$newPost->auth_name}}
                           </h3>
                       </div>
                       <div class="cb_c_text">
                           <p>  {{$newPost->content}}
                           </p>
                       </div>
                 

                   </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
