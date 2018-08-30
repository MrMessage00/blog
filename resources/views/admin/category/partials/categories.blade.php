@forelse($categories as $category_list)

    @if(isset($category->id))

        @if($category->id != $category_list->id)

            <option value="{{$category_list->id}}"

                @if($category->parent_id == $category_list->id)

                     selected

                @endif

            >{{$delimeter}}{{$category_list->title}}</option>

        @endif

    @else
        <option value="{{$category_list->id}}"
        @if(isset($article->id))

            @foreach($article->categories as $category_article)

                @if($category_list->id == $category_article->id)

                    selected

                @endif

            @endforeach

        @endif

        >{{$delimeter}}{{$category_list->title}}</option>

    @endif


    @if((!isset($category->id) || $category_list->id != $category->id))

        @include('admin.category.partials.categories', [
            'category'   => $category,
            'categories' => App\Category::with('children')->where('parent_id', $category_list->id)->get(),
            'delimeter'  => ' - '.$delimeter
        ])

    @endif

@empty

@endforelse