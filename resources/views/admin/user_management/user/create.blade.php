@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @component('admin.components.breadcrumbs')
                    @slot('title') Создание пользователя @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Создание пользователя @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" action="{{Route('admin.user_management.user.store')}}" class="form-horizontal">
                    {{csrf_field()}}
                    @include('admin.user_management.user.partials.form', [
                        'user'    => []
                    ])
                </form>
            </div>
        </div>
    </div>

@endsection