<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ProjectRplController extends Controller
{
    public function home()
    {
        // Fetch top 3 latest published articles
        // Since 'published' column does not exist, remove the where clause or replace with appropriate condition
        $articles = Article::orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('project_rpl.home', compact('articles'));
    }
}
