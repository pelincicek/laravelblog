<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function list()
    {
        $articles = Article::all();
        return view('articles.list', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article =  new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect()->route('articles');
    }
    //burada bağımlılık sızdırma yapıyoruz.
    public function detail(Article $article)
    {
        return view('articles.detail', compact('article'));

    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));

    }
    
    public function update(Article $article, Request $request)
    {
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect()->route('articleDetail',$article);
    }
    public function delete(Article $article)
    {
        $article->delete();
        return redirect()->route('articles');
    }

}
