<form action="addArticle" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter title"> <br><br>
    <input type="text" name="description" placeholder="Enter description"> <br><br>
    <button type="submit">Add</button>
</form>
