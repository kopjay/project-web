<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Category;

class MusicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = Music::all();
        return view('home', ['data' => $data]); 
    }

    public function playlist()
    {
        $data = Music::all();
        return view('music.playlist', ['data' => $data]); 
    }

    public function playlist_play($id)
    {
        $data = Music::all();
        $dataById = Music::findOrFail($id);
        return view('music.playlist-play', ['data' => $data, 'dataById' => $dataById]); 
    }

    public function category()
    {
        $data = Category::all();
        return view('music.category', ['data' => $data]); 
    }

    public function category_play($id,$music)
    {
        $data = Category::findOrFail($id);
        $dataById = Music::findOrFail($music);
        return view('music.categoryDetailPlay', ['data' => $data, 'dataById' => $dataById]); 
    }

    public function detail($id)
    {
        $data = Music::findOrFail($id);
        return view('music.detail', ['data' => $data]); 
    }

    public function categoryDetail($id)
    {
        $data = Category::findOrFail($id);
        return view('music.CategoryDetail', ['data' => $data]); 
    }

    public function add()
    {
        $category = Category::all();
        return view('music.add', ['category' => $category]);
    }

    public function addCategory()
    {
        return view('music.addCategory');
    }

    public function edit($id)
    {
        $data = Music::findOrFail($id);
        $category = Category::all();
        return view('music.edit', ['data' => $data, 'category' => $category]); 
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
        $extMusic = $music->getClientOriginalExtension();
        $newName = $request->input('name')."".rand(1,100).".".$ext;
        $newNameMusic = $request->input('name')."".rand(1,100).".".$extMusic;
        $file->move('uploads/images',$newName);
        $music->move('uploads/music',$newName);
        $data->image = $newName;
        $data->music = $newNameMusic;
        $data->save();

        return redirect('/playlist')->with('success', 'Data berhasil dibuat');
    }

    public function categoryStore(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
        ]);

        $data = new \App\Models\Category();
        $data->name = $validate['name'];
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $newName = $request->input('name')."".rand(1,100).".".$ext;
        $file->move('uploads/images',$newName);
        $data->image = $newName;
        $data->save();

        return redirect('/category')->with('success', 'Data berhasil dibuat');
    }

    public function musicUpdate(Request $request)
    {

        Music::where('id', Request()->input('id'))->update([
            'name' => Request()->input('name'),
            'artist' => Request()->input('artist'),
            'album' => Request()->input('album'),
            'category_id' => Request()->input('category_id'),
        ]);
        return redirect('playlist')->with('success', 'Data berhasil dibuat');
    }

    public function destroy($id)
    {
        Music::destroy($id);

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
