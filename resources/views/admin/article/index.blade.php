@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @component('admin.components.breadcrumbs')
                    @slot('title') Материал @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Список материала @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-block btn-primary" href="{{Route('admin.article.create')}}">Создать материал</a>
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Заголовок</th>
                    <th>Статус</th>
                    <th>Управление</th>
                    </thead>
                    <tbody>
                    @forelse( $articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td><a href="{{Route('admin.article.show', $article)}}">{{$article->title}}</a></td>
                            <td>@if($article->published == 0)Не опубликовано @else Опубликовано @endif</td>
                            <td>
                                <form action="{{Route('admin.article.destroy', $article)}}" method="POST" onsubmit="return confirm('Вы действительно хотите удалить материал \'{{$article->title}}\'?')">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{csrf_field()}}
                                    <a href="{{Route('admin.article.edit', $article)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <button type="submit" value="Удалить" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tbody><tr><td colspan="4">Данные не найдены</td></tr></tbody>
                    @endforelse
                        </tbody>
                        <tfooter>
                            <tr><td colspan="4">{{$articles->links()}}</td></tr>
                        </tfooter>
                </table>
            </div>
        </div>
    </div>
@endsection