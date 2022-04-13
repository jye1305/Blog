<h1>{{ $category['category_name']}}</h1>

<p>
    @foreach($category->articles as $article) 
        <li>{{$article->title}}</li>
    @endforeach 
</p>