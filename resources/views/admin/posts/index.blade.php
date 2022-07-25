<h1>Posts</h1>

@foreach ($posts as $post)
    <h3>{{ $post->titulo }}</h3>
    <p>{{ $post->conteudo }}</p>
@endforeach