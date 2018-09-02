@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @component('admin.components.breadcrumbs')
                    @slot('title') Редактирование пользователя @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Редактирование пользователя @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" action="{{Route('admin.user_management.user.update', $user)}}" class="form-horizontal">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    @include('admin.user_management.user.partials.form', [
                        'user'    => $user
                    ])
                </form>
            </div>
        </div>
    </div>

@endsection