<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\HomePage;
use App\Models\Products;
use Illuminate\Http\Request;

class CustomerPanelController extends Controller
{
    public function home()
    {
        $blurb = HomePage::all();
        return view('customer.home', compact('blurb'));
    }
    public function services()
    {
        $services = Products::all();
        return view('customer.services', compact('services'));
    }
    public function blog()
    {
        $posts = Article::all();
        return view('customer.blog', compact('posts'));
    }
    public function contact()
    {
        return view('customer.contact');
    }
}
