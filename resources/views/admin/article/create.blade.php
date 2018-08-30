@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @component('admin.components.breadcrumbs')
                    @slot('title') Создание материала @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Создание материала @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" action="{{Route('admin.article.store')}}" class="form-horizontal">
                    {{csrf_field()}}
                    @include('admin.article.partials.form', [
                        'article'    => [],
                        'categories' => $categories,
                        'delimeter'  => $delimeter
                    ])
                </form>
            </div>
        </div>
    </div>

@endsection