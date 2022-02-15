<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends Controller
{
    // экшен для главной страницы
    public function index() {
        $articles = Article::orderByDesc('updated_at')->take(10)
               ->get();
        return view('index', compact('articles'));
    }

}
