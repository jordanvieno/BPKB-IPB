<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Documentation;

class ProjectRplController extends Controller
{
    public function home()
    {
        // Fetch top 3 latest published articles
        // Since 'published' column does not exist, remove the where clause or replace with appropriate condition
        $articles = Article::orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        // Fetch all documentation records ordered by date descending
        $documentations = Documentation::orderBy('date', 'desc')->take(10)->get();

        // Retrieve operasi data from database or default values
        $operations = \App\Models\Operation::all();

        $data = [];
        $maxValues = [];
        foreach ($operations as $operation) {
            $data[$operation->category] = $operation->value;
            $maxValues[$operation->category] = $operation->max_value;
        }

        return view('project_rpl.home', compact('articles', 'documentations', 'data', 'maxValues'));
    }

    public function document()
    {
        // Retrieve operasi data from cache or default values
        $data = [
            'Transportation' => cache('Transportation', 140),
            'Energy Conversion' => cache('Energy Conversion', 140),
            'Water' => cache('Water', 140),
            'Education and Research' => cache('Education and Research', 140),
            'Waste' => cache('Waste', 140),
            'Setting and Infrastructure' => cache('Setting and Infrastructure', 140),
            'max_value' => 300,
        ];

        return view('project_rpl.roadmap', compact('data'));
    }
}
