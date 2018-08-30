@forelse($categories as $category_list)
    @if(isset($category->id) && ($category->id != $category_list->id))
         <option value="{{$category_list->id}}" @if($category->parent_id == $category_list->id) selected @endif >{{$delimeter}}{{$category_list->title}}</option>
    @else
        <option value="{{$category_list->id}}">{{$delimeter}}{{$category_list->title}}</option>
    @endif

    @include('admin.category.partials.categories', [
        'category'   => $category,
        'categories' => App\Category::with('children')->where('parent_id', $category_list->id)->get(),
        'delimeter'  => ' - '.$delimeter
    ])
@empty

@endforelse