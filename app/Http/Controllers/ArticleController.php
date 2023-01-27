<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function create(Request $request) 
    {
        $body = $request->body;
        

        DB::table('articles')->insert([
            "article" => $body
        ]);
        return redirect()->route('home');
    }
    public function delete(Request $request) 
    {
        $id = $request->id;

        DB::table('articles')->where('id', $id)->delete();

        return redirect(route('article.manager'));
    }

    public function update(Request $request) 
    {
        $id = $request->id;
        $article = $request->article;
        DB::table('articles')
        ->where('id',$id)
        ->limit(1)
        ->update([
            "article" => $article,
            "updated_at" => time()
        ]);
        return redirect(route('article.manager'));

    }

    public function editarticlepage(Request $request) 
    {
        $id = $request->id;
        $article = Article::all()->where('id', $id);
        return view('admin.article_editor', compact('article'));
    }
}
