@extends('layout.app')

@section('page-title', 'products')

@section('content')

<div class="container">
    <div class="row gy-4">
        @foreach($pastas as $pasta)
        <div class="col-4">
            <div class="card shadow">
                <img src="{{$pasta['src']}}" alt="">
                <h3 class="text-center">{{$pasta['titolo']}}</h3>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection