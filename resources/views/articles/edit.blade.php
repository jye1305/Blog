
<form method="post" action="{{ route('articles.update', $article->id) }}">
    @method('PATCH')
    @csrf


    <div class="form-group">
        <label for="title">Title:*</label>
        <input type="text" class="form-control" name="title" value="{{ $article->title }}" />
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" name="description" value="{{ $article->description }}" />
    </div>

    <select name = "categories[]" multiple = "true">

        @foreach($categories as $category) 
            <option value = "{{ $category->id }}" {{ $article->categories->contains($category->id) ? 'selected' : '' }}>{{ $category->category_name }}</option>
        @endforeach 
    </select>
    <br><br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
