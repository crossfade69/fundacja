<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Wyświetlanie postów z kategorii "projekty"
    public function projekty()
    {
        $posts = Post::where('category', 'projekty')
            ->orderBy('created_at', 'desc')
            ->paginate(6); // Paginacja: 6 postów na stronę

        return view('projekty', compact('posts'));
    }

    // Wyświetlanie postów z kategorii "aktualności"
    public function aktualnosci($page = 1)
    {
        $perPage = 6;
        $posts = Post::where('category', 'aktualności')
            ->orderBy('created_at', 'desc')
            ->get();
    
        $currentPage = $page;
        $offset = ($currentPage - 1) * $perPage;
        $paginatedPosts = $posts->slice($offset, $perPage)->all();
    
        $totalPages = ceil($posts->count() / $perPage);
    
        dd($totalPages); // Sprawdź wartość $totalPages
    
        return view('aktualnosci', [
            'posts' => $paginatedPosts,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
        ]);
    }

    // Wyświetlanie postów z kategorii "sprawozdania"
    public function sprawozdania()
    {
        $posts = Post::where('category', 'sprawozdania')
            ->orderBy('created_at', 'desc')
            ->paginate(6); // Paginacja: 6 postów na stronę

        return view('sprawozdania', compact('posts'));
    }


    // Wyświetlanie formularza do tworzenia postów oraz listy postów
    public function create()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('auth.dashboard', compact('posts'));
    }

    // Zapisywanie nowego posta
    public function store(Request $request)
    {
        // Walidacja danych
        $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Tworzenie posta w bazie danych
        Post::create([
            'category' => $request->category,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        
        return redirect()->route('dashboard')->with('success', 'Post został dodany!');
    }
    // Wyświetlanie pojedynczego posta
    public function show($id)
    {
        $post = Post::findOrFail($id); // Znajdź post lub zwróć błąd 404
        return view('posts', compact('post')); // Użyj widoku posts.blade.php
    }
}

