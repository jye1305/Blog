<!-- <form action="/articles" method="PUT">
    @csrf
    <input type="hidden" name="id" value={{ $article['id'] }}> <br><br>
    <input type="text" name="title" value = {{ $article['title'] }}> <br><br>
    <input type="text" name="description" value = {{ $article['description'] }}> <br><br>
    <button type="submit">Add</button>
</form> -->

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
    <button type="submit" class="btn btn-primary">Update</button>
</form>
