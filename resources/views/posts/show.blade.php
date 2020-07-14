@extends('layouts.master')

@section('content')

    <div class="blog-post">
                
        <h2 class="blog-post-title">

            {{ $post->title }}

        </h2>

        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

        <p>{{ $post->body }}</p>
        <hr/>
        <div class="comments">
            <ul class="list-group">
            @foreach ($post->comments as $comment)
                <article>
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{ $comment->body }}
                    </li>
                </article>
            @endforeach
            </ul>
        </div>

        {{-- Adda a comment --}}
        <hr/>
        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here...." class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div><!-- /.blog-post -->

@endsection