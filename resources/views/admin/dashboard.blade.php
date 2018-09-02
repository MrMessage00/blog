@extends('admin.layouts.admin_app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h4>Категорий <span class="badge badge-secondary">{{$count_categories}}</h4>
                </div>
            </div>
            <div class="col">
                <div class="jumbotron">
                    <h4>Материалов <span class="badge badge-secondary">{{$count_articles}}</h4>
                </div>
            </div>
            <div class="col">
                <div class="jumbotron">
                    <h4>Пользователей <span class="badge badge-secondary">0</h4>
                </div>
            </div>
            <div class="col">
                <div class="jumbotron">
                    <h4>Сегодня <span class="badge badge-secondary">0</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-block btn-primary" href="{{Route('admin.category.create')}}">Создать категорию</a>
                @foreach($categories as $category)
                <div class="card">
                    <h6 class="card-header"><a href="{{Route('admin.category.edit', $category)}}">{{$category->title}}</a></h6>
                    <p class="card-body">
                        Кол-во материалов {{$category->articles->count()}}
                    </p>
                </div>
                @endforeach
            </div>
            <div class="col">
                <a class="btn btn-block btn-primary" href="{{Route('admin.article.create')}}">Создать материал</a>
                @foreach($articles as $article)
                    <div class="card">
                        <h6 class="card-header"><a href="{{Route('admin.article.edit', $article)}}">{{$article->title}}</a></h6>
                        <p class="card-body">
                            {{$article->categories->pluck('title')->implode(', ')}}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
