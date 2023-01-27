<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{
    public function home() {
        return view('admin.home');
    }
    public function servicemanager() {
        $services = Products::all();
        return view('admin.servicesmanager', compact('services'));
    }
    public function serviceeditor(Request $request) {
        $id = $request->id;

        $services = DB::table('products')->where('id',$id)->get('*');

        return view('admin.service_editor', compact('services'));
    }
    public function addservice() {
        return view('admin.addservices');
    }
    public function articlemanager() {
        $articles = Article::all();
        return view('admin.article_manager', compact('articles'));
    }
    public function login() {
        return view('admin.auth.login');
    }
}
