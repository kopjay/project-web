<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('home', ['data' => $data]); 
    }

    public function view()
    {
        $data = Product::all();
        return view('product.view', ['data' => $data]); 
    }

    public function detail($id)
    {
        $data = Product::findOrFail($id);
        return view('product.index', ['data' => $data]); 
    }

    public function add()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:product|max:15',
            'price' => 'required|numeric|min:5000|max:10000000',
            'type' => 'required',
            'color' => 'required',
        ]);

        $data = new \App\Models\Product();
        $data->name = $validate['name'];
        $data->price = $validate['price'];
        $data->type = $validate['type'];
        $data->color = $validate['color'];
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $newName = $request->input('name')."".rand(1,100).".".$ext;
        $file->move('uploads/images',$newName);
        $data->image = $newName;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/');
    }
}
