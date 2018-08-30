<label for="">Заголовок</label>
<input type="text" name="title" class="form-control" placeholder="Заголовок" value={{$category->title or ""}}>
<label for="" class="mt-3">Статус</label>
<select name="published" class="form-control">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected  @endif>Не опубликовано</option>
        <option value="1" @if($category->published == 1) selected  @endif>Опубликовано</option>
    @else
        <option value="0"> Не опубликовано</option>
        <option value="1"> Опубликовано</option>
    @endif
</select>
<label for="" class="mt-3">Slug</label>
<input type="text" name="slug" class="form-control" placeholder="Заголовок" value="{{ $category->slug or ""  }}" disabled>
<label for="" class="mt-3">Родительская категория</label>
<select name="parent_id" class="form-control">
    <option value="0"> -- Без родительской категории -- </option>
    @include('admin.category.partials.categories', [
        'category'   => $category,
        'categories' => $categories,
        'delimeter'  => $delimeter
    ])
</select>
<input type="submit" class="btn btn-block btn-secondary mt-4" value="Сохранить">
