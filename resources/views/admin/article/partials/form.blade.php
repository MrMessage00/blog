@if($errors->any())
@include('partials.errors')
@endif
<label for="">Заголовок</label>
<input type="text" name="title" class="form-control" placeholder="Заголовок" value="{{$article->title or ""}}">
<label for="" class="mt-3">Статус</label>
<select name="published" class="form-control">
    @if(isset($article->id))
    <option value="0" @if($article->published == 0) selected  @endif>Не опубликовано</option>
    <option value="1" @if($article->published == 1) selected  @endif>Опубликовано</option>
    @else
    <option value="0"> Не опубликовано</option>
    <option value="1"> Опубликовано</option>
    @endif
</select>
<label for="" class="mt-3">Slug</label>
<input type="text" name="slug" class="form-control" placeholder="Заголовок" value="{{ $article->slug or ""  }}" disabled>
<label for="" class="mt-3">Короткое описание</label>
<textarea type="text" name="description_short" class="form-control" placeholder="Короткое описание">{{$article->description_short or ""}} </textarea>
<label for="" class="mt-3">Полное описание</label>
<textarea type="text" name="description" class="form-control" placeholder="Полное описание">{{$article->description or ""}} </textarea>

<label for="" class="mt-3">Мета заголовок</label>
<input type="text" name="meta_title" class="form-control" placeholder="Мета заголовок" value="{{$article->meta_title or ""}}">
<label for="" class="mt-3">Мета описание</label>
<input type="text" name="meta_description" class="form-control" placeholder="Мета описание" value="{{$article->meta_description or ""}}">
<label for="" class="mt-3">Ключевые слова</label>
<input type="text" name="meta_keyword" class="form-control" placeholder="Ключевые слова" value="{{$article->meta_keyword or ""}}">

<label for="" class="mt-3" class="mt-3">Категория</label>
<select name="categories[]" class="form-control" multiple="">
    @include('admin.category.partials.categories', [
        'category'   => [],
        'categories' => $categories,
        'delimeter'  => $delimeter
    ])
</select>
<input type="submit" class="btn btn-block btn-secondary mt-4" value="Сохранить">
