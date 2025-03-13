<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function index()
    {
        // Últimos 4 posts para el slider
        $latestPosts = Post::with(['user', 'categories'])
            ->latest('created_at', 'desc')
            ->take(4)
            ->get()
            ->fresh();

        // Posts paginados (10 por página)
        $paginatedPosts = Post::with(['user', 'categories'])
            ->latest('published_at')
            ->paginate(9);

        return view('welcome', compact('latestPosts', 'paginatedPosts'));
    }

    /*Funcion para mostrar el detalle del post o entrada*/
    public function show($id, $slug){
        // Buscar el post por ID
        $post = Post::with(['user', 'categories'])->findOrFail($id);

        $latestPosts = Post::latest('published_at')->take(4)->get();

        $categories = Category::with('posts')->get();

        // Obtener el post anterior
        $previousPost = Post::where('id', '<', $post->id)
                            ->orderBy('id')
                            ->first();

        // Obtener el siguiente post
        $nextPost = Post::where('id', '>', $post->id)
                        ->orderBy('id')
                        ->first();

        // Verificar que el slug en la URL coincida con el slug del post
        if ($post->slug !== $slug) {
            abort(404); // Mostrar error 404 si no coincide
        }

        // Retornar la vista con los datos del post
        return view('blog.details', compact('post', 'previousPost', 'nextPost'));
    }
}