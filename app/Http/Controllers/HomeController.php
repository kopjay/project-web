<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

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
        return view('home');
    }

    public function profile()
    {
        $data = Auth::user();
        return view('profile', ['data' => $data]); 
    }

    public function view()
    {
        $data = Product::all();
        return view('product.view', ['data' => $data]); 
    }

    public function add()
    {
        return view('product.add');
    }
}
