@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @component('admin.components.breadcrumbs')
                    @slot('title') Категории @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Список категорий @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-block btn-primary" href="{{Route('admin.category.create')}}">Создать категорию</a>
                <table class="table text-center">
                    <thead>
                    <th>#</th>
                    <th>Заголовок</th>
                    <th>Редактировать</th>
                    </thead>
                    <tbody>
                    @forelse( $categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td><a href="{{Route('admin.category.show', ['id' => $category->id])}}">{{$category->title}}</a></td>
                            <td><a href="{{Route('admin.category.edit', ['id' => $category->id])}}"><i class="fa fa-edit"></i></a></td>
                        </tr>
                    @empty
                        <tbody><tr><td colspan="3">Данные не найдены</td></tr></tbody>
                    @endforelse
                    </tbody>
                    <tfooter>
                        <tr><td colspan="3">{{$categories->links()}}</td></tr>
                    </tfooter>
                </table>
            </div>
        </div>
    </div>

@endsection