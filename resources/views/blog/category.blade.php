@extends('layouts.app')

@section('title', $category->title)

@section('content')

    <div class="container">
    @forelse($articles as $article)
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$article->title}}</h6>
                    <p class="card-text">{!!$article->description_short!!}</p>
                    <a href="{{Route("article", $article->slug)}}" class="card-link">Read More</a>
                </div>
            </div>
    @empty

        <div class="col-12">
            <span class="text-center">В данной категории нет материала.</span>
        </div>
    @endforelse

        <div class="col-12 mt-4">
            {{$articles->links()}}
        </div>
    </div>

@endsection
