@if(session('message'))
    <div style="color: green">
        {{ session('message') }}
    </div>
@endif

<form action="" method="post">

    <input type="text" name="search" placeholder="Pesquisar:">
    <button type="submit">Pesquisar</button>

</form>

<h1>Posts</h1>

@foreach ($posts as $post)    
    <p>{{ $post->titulo }} | <a href="{{ route('posts.show', $post->id) }}">Ver</a>
                           | <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
    </p>   
@endforeach
<hr/>
<a href="{{ route('posts.create') }}">Cadastrar Post</a>
<br/>
<hr/>
{{ $posts->links() }}