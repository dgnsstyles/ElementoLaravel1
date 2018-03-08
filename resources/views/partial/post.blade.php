<div class="container">
    <br><br>
    @if(!empty($posts))
        @foreach($posts as $post)
            <div class="top-1 right-1">
                <a href="{{url('/post/'.$post->id.'/',trim(str_replace('','-',$post->title)))}}">
                    <h2 class="h2-border">{{$post->title}}</h2>
                    <p class="p1 top-2">{{$post->excerpt}}</p>
                </a>
                <p class="p-border">{{$post->body}}</p>
                <a href="#" class="link-1">
                    {{\App\User::find($post->author_id)->name}}
                </a> </div>
        @endforeach
    @endif﻿
</div>

