<h1>{{$title}}</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ Route('admin.index')}}">{{$parent}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$active}}</li>
    </ol>
</nav>