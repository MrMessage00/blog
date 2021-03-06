@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @component('admin.components.breadcrumbs')
                    @slot('title') Создание категории @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Создание категории @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" action="{{Route('admin.category.store')}}" class="form-horizontal">
                    {{csrf_field()}}
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