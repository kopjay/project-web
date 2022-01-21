<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\User;
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

    public function profileEdit()
    {
        $data = Auth::user();
        return view('profileEdit', ['data' => $data]); 
    }

    public function profileUpdate(Request $request)
    {

        User::where('id', Request()->input('user_id'))->update([
            'name' => Request()->input('name'),
            'email' => Request()->input('email'),
            'address' => Request()->input('address'),
            'password' => Hash::make(Request()->input('password')),
        ]);
        return redirect('profile')->with('success', 'Data berhasil dibuat');
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
