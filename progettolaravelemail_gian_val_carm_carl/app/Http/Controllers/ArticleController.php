<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()

    {
        return view('article/create');

    }

    public function store(Request $request)

    {
        $article = new Article();
        $article->name=$request->input('name');
        $article->surname=$request->input('surname');
        $article->category=$request->input('category');
        $article->body=$request->input('body');
        $article->save();
        return redirect(route('home'))->with('message', 'inserito tutto in ordine');
    }
}

