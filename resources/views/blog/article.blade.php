@extends('layouts.app')

@section('title', $article->meta_title)
@section('description', $article->meta_description)
@section('keywords', $article->meta_keyword)

@section('content')

    <div class="container">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{!!$article->description!!}</p>
                </div>
            </div>
    </div>

@endsection
