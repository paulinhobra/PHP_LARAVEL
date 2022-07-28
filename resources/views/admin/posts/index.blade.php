@if(session('message'))
    <div style="color: green">
        {{ session('message') }}
    </div>
@endif

<h1>Posts</h1>

@foreach ($posts as $post)    
    <p>{{ $post->titulo }} | <a href="{{ route('posts.show', $post->id) }}">Ver</a></p>   
@endforeach
<hr/>
<a href="{{ route('posts.create') }}">Cadastrar Post</a>