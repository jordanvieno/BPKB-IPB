<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicArticleController extends Controller
{
    /**
     * Display the full article page.
     */
    public function detail(Article $article)
    {
        return view('articles.detail', compact('article'));
    }
}
