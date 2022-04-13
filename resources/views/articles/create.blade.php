<form action="/articles" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter title"> <br><br>
    <input type="textarea" style = "height: 100px; weight:20px" name="description" placeholder="Enter description"> <br><br>
    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
    <select name = "categories[]" multiple = "true">
        @foreach($categories as $category)
            <option value = "{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
    <br><br>
    <button type="submit">Add</button>
</form>
