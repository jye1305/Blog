<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function addArticle(Request $req)
    {
        $article = new Article;
        $article->title = $req->title;
        $article->description = $req->description;
        $article->save();
        return redirect("addArticle");
    }

}
