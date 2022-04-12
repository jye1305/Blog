<form method="post" action="{{ route('categories.update', $category->id) }}">
    @method('PATCH')
    @csrf


    <div class="form-group">
        <label for="name">New Category:</label>
        <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}" />
    </div>

   
    <button type="submit" class="btn btn-primary">Update</button>
</form>