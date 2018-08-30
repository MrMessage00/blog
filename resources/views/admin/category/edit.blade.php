@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @component('admin.components.breadcrumbs')
                    @slot('title') Редактирование категории @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Редактирование категории @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="POST" action="{{Route('admin.category.update', $category)}}" class="form-horizontal">
                    <input type="hidden" name="_method" value="PUT">                    {{csrf_field()}}
                    @include('admin.category.partials.form', [
                        'category'   => $category,
                        'categories' => $categories,
                        'delimeter'  => $delimeter
                    ])
                </form>
            </div>
        </div>
    </div>

@endsection