@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @component('admin.components.breadcrumbs')
                    @slot('title') Редактирование материала @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Редактирование материала @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" action="{{Route('admin.article.update', $article)}}" class="form-horizontal">
                    {{csrf_field()}}
                    @include('admin.article.partials.form', [
                        'article'    => $article,
                        'categories' => $categories,
                        'delimeter'  => $delimeter
                    ])
                </form>
            </div>
        </div>
    </div>

@endsection