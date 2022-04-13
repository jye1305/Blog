<h1>{{ $article['title']}}</h1>

<p>
    <strong>{{ $article['description']}}</strong><br>
    <strong>Author: {{ $article->user->name}}</strong>
    @foreach($article->categories as $category) 
        <li>{{$category->category_name}}</li>
    @endforeach 
</p>