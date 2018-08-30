@extends('admin.layouts.admin_app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h4>Категорий <span class="badge badge-secondary">0</h4>
                </div>
            </div>
            <div class="col">
                <div class="jumbotron">
                    <h4>Материалов <span class="badge badge-secondary">0</h4>
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
                <div class="card" href="#">
                    <h4 class="card-header">Категория первая</h4>
                    <p class="card-body">
                        Кол-во материалов
                    </p>
                </div>
            </div>
            <div class="col">
                <a class="btn btn-block btn-primary" href="#">Создать материал</a>
                <div class="card" href="#">
                    <h4 class="card-header">Материал первый</h4>
                    <p class="card-body">
                       Категория
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
