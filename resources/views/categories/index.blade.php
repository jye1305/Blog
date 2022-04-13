<h1>List of Categories</h1><br>
<a href = {{ URL::to('categories/create' ) }}>Add new Category</a><br><br>

<table>
<thead>
    <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($category as $value)
<tr>
    <td>{{$value['id']}}</td>
    <td>{{$value['category_name']}}</td>
    <td><a href = {{ URL::to('categories/' . $value->id) }}>Show</a></td>
    <td><a href = {{ URL::to('categories/' . $value->id . '/edit') }}>Edit</a></td>
    <td>
        <form action="{{url('categories/'.$value->id)}}" method="post">
            @method('DELETE')
             @csrf
            <button type="submit">Delete</button>
        </form> 
    </td>
</tr>
@endforeach
</table>



