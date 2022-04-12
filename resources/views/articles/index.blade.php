<style>
    .w-5{
    display: none
    }
</style>

<h1>Home</h1>

<a href = {{ URL::to('articles/create' ) }}>Add new Article</a>

<table border = '1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Operation 1</td>
        <td>Operation 2</td>
        <td>Operation 3</td>
    </tr>

    @foreach($articles as $article)
    <tr>
        <td>{{$article['id']}}</td>
        <td>{{$article['title']}}</td>
        <td>{{$article['description']}}</td>
        <td><a href = {{ URL::to('articles/' . $article->id) }}>Show</a></td>
        <td><a href = {{ URL::to('articles/' . $article->id . '/edit') }}>Edit</a></td>
        <td>
            <form action="{{url('articles/'.$article->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form> 
        </td>
    </tr>
    @endforeach
</table>