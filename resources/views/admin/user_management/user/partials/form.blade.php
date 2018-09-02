@if($errors->any())
    @include('partials.errors')
@endif
<label for="">Имя</label>
<input type="text" name="name" class="form-control" placeholder="Имя" value="@if(old('name')){{old('name')}}@else{{$user->name or ""}}@endif">

<label for="" class="mt-4">Email</label>
<input type="text" name="email" class="form-control" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{$user->email or ""}}@endif">

<label for="" class="mt-4">Пароль</label>
<input type="password" name="password" class="form-control">

<label for="" class="mt-4">Подтверждение пароля</label>
<input type="password" name="password_confirmation" class="form-control">

<input type="submit" class="btn btn-block btn-secondary mt-4" value="Сохранить">
