@if(!isset($children))<ul class="navbar-nav">@endif

    @foreach($categories as $category)

        @if($category->children->where('published', 1)->count())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink{{$category->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink{{$category->id}}">
                    @include('layouts.item-menu', [
                        'categories' => $category->children->where('published', 1),
                        'children'   => 1
                    ])
                </div>
            </li>
        @else
            @if(isset($children) && $children == 1)
                <a class="dropdown-item" href="{{url("/blog/category/$category->slug")}}">
                    {{$category->title}}
                </a>
            @else
                <li class="nav-item"><a class="nav-link" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a></li>
            @endif
        @endif
    @endforeach

@if(!isset($children))</ul>@endif