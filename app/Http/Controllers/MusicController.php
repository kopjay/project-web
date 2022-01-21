<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function index()
    {
        $data = Music::all();
        return view('home', ['data' => $data]); 
    }

    public function view()
    {
        $data = Music::all();
        return view('music.view', ['data' => $data]); 
    }

    public function detail($id)
    {
        $data = Music::findOrFail($id);
        return view('music.index', ['data' => $data]); 
    }

    public function add()
    {
        return view('music.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'artist' => 'required',
            'album' => 'required',
            'name' => 'required',
            'category_id' => 'required',
        ]);

        $data = new \App\Models\Music();
        $data->artist = $validate['artist'];
        $data->album = $validate['album'];
        $data->name = $validate['name'];
        $data->category_id = $validate['category_id'];
        $file = $request->file('image');
        $music = $request->file('music');
        $ext = $file->getClientOriginalExtension();
        $ext = $music->getClientOriginalExtension();
        $newName = $request->input('name')."".rand(1,100).".".$ext;
        $file->move('uploads/images',$newName);
        $music->move('uploads/music',$newName);
        $data->image = $newName;
        $data->music = $newName;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function destroy($id)
    {
        Music::destroy($id);

        return redirect('/');
    }
}
