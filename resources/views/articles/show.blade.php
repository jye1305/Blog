<h1>{{ $article['title']}}</h1>

<p>
    <strong>{{ $article['description']}}</strong><br>
    <strong>Author: {{ $article->user->name}}</strong>
    @foreach($exhibition->art_objs as $art_obj) 
        <tr>
            <td>{{$exhibition->Ex_id}}</td>
            <td>{{$art_obj->Id_no}}</td>
            <td>{{$art_obj->Type_of_art}}</td>
        </tr>
    @endforeach 
</p>