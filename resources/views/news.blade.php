@extends('layout.app')

@section('page-title', 'news')

@section('content')

<div class="container">
    <div class="row gy-4">
        @foreach($posts as $post)
        <div class="col-4">
            <div class="card shadow">
                <h3 class="text-center">{{$post['title']}}</h3>
                <p>{{$post['content']}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection