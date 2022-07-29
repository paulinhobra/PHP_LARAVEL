<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::get();

        return view('admin.posts.index', compact('posts'));
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $req){

      Post::create([
            'titulo' => $req->title,
            'conteudo' => $req->content
        ]);
        
        return redirect()->route('posts.index');

    }

    public function show($id){

        if(!$post = Post::where('id', $id)->first()){
            return redirect()->route('posts.index');
        }

        return view('admin.posts.show', compact('post'));

    }

    public function delete($id){

        if(!$post = Post::where('id', $id)->first()){
            return redirect()->route('posts.index');
        }

        $post->delete();

        return redirect()
                ->route('posts.index')
                ->with('message', 'Post deletado com sucesso!');

    }

    public function edit($id){

        

    }
}
