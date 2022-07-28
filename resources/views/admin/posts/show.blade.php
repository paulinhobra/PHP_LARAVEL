<h1>Detalhes do Post {{$post->titulo}}</h1>

<ul>
    <li>{{$post->titulo}}</li>
    <li>{{$post->conteudo}}</li>
</ul>

<form action="{{ route('posts.delete', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">

    <button type="submit">Deletar o Post {{$post->titulo}}</button>
</form>