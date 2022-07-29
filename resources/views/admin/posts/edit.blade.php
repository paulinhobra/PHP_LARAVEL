<h1>Editar Post {{ $post->title }}</h1>

@if($errors->any())
    <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
    </ul>
@endif

<form action="{{ route('posts.update', $post->id) }}" method="post">

    @csrf
    @method('put')

    <input type="text" id="title" name="title" placeholder="Título" value="{{ $post->titulo }}">

    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo">{{ $post->conteudo }}</textarea>

    <button type="submit">Enviar</button>
</form>