@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h2>Create a new post.</h2>

        <hr/>

        <form method="POST" action="/posts" >

            {{ csrf_field() }}

            <div class="form-group">

                <label for="title">Title</label>

                <input type="text" class="form-control" id="title" name="title">

            </div>

            <div class="form-group">

                <label for="body">Body</label>

                <textarea type="body" class="form-control" name="body" id="body"></textarea>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>

@endsection