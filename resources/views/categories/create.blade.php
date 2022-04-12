<form action="/categories" method="POST">
    @csrf
    <input type="text" name="category_name" placeholder="Enter category"> <br><br>

    <button type="submit">Add Category</button>
</form>