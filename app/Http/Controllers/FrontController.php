<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $categories = Category::all();
        $products = Product::all();
        $articles = Article::all();
        $galleries = Gallery::take(3)->get();
        return view('welcome', compact('sliders', 'about', 'categories', 'products', 'articles', 'galleries'));
    }
}
