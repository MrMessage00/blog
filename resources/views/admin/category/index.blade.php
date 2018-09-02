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
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Заголовок</th>
                    <th>Статус</th>
                    <th>Управление</th>
                    </thead>
                    <tbody>
                    @forelse( $categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td><a href="{{Route('admin.category.show', $category)}}">{{$category->title}}</a></td>
                            <td>@if($category->published == 0)Не опубликовано @else Опубликовано @endif</td>
                            <td>
                                <form action="{{Route('admin.category.destroy', $category)}}" method="POST" onsubmit="return confirm('Вы действительно хотите удалить категорию \'{{$category->title}}\'?')">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{csrf_field()}}
                                    <a href="{{Route('admin.category.edit', $category)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <button type="submit" value="Удалить" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tbody><tr><td colspan="4">Данные не найдены</td></tr></tbody>
                    @endforelse
                    </tbody>
                    <tfoot>
                        <tr><td colspan="4">{{$categories->links()}}</td></tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection