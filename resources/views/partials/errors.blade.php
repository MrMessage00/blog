
<div class="alert alert-danger">
    <span>Форма заполнена неверено!</span>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>