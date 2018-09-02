@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @component('admin.components.breadcrumbs')
                    @slot('title') Пользователя @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Список пользователя @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-block btn-primary" href="{{Route('admin.user_management.user.create')}}">Создать пользователя</a>
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Управление</th>
                    </thead>
                    <tbody>
                    @forelse( $users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <form action="{{Route('admin.user_management.user.destroy', $user)}}" method="POST" onsubmit="return confirm('Вы действительно хотите удалить пользователя \'{{$user->name}}\'?')">
                                    {{ method_field('DELETE') }}
                                    {{csrf_field()}}
                                    <a href="{{Route('admin.user_management.user.edit', $user)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <button type="submit" value="Удалить" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tbody><tr><td colspan="4">Данные не найдены</td></tr></tbody>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr><td colspan="4">{{$users->links()}}</td></tr>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection