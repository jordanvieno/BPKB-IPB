<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the articles.
     */
    public function index()
    {
        $articles = Article::orderBy('date', 'desc')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    /**
     * Display the specified article detail.
     */
    public function detail(Article $article)
    {
        return view('articles.detail', compact('article'));
    }
}
