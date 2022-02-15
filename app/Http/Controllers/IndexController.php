<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends Controller
{
    // экшен для главной страницы
    public function index() {
        dump(Article::all());
        return view('index');
    }

}
