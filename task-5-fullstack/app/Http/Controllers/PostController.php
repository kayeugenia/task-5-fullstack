<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PostController extends Controller
{
    //
    public function index()
    {
        $articles = Article::with('category')->paginate(10); 
        return response()->json($articles);
    }
}
