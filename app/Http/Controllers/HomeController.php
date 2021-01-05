<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::latest()->orderByDesc('created_at','id')->get();

        $products = Product::with('category')->latest()->orderByDesc('created_at','id')->get();
        

        return view('home',['categories' => $categories , 'products' => $products]);
    }
}
