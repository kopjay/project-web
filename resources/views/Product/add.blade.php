@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-center" style="color: #2699d6; margin-bottom:20px"> <b> Tambah Music </b></h4>
        <div class="col-md-5">
            <form action="{{url('music/store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="artist" class="col-sm-3 col-form-label">Artist</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="artist" name="artist" placeholder="Masukan nama artist" required>
                    </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="album" class="col-sm-3 col-form-label">Album</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="album" name="album" placeholder="Masukan judul album" required>
                    </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Judul Lagu</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan judul lagu" required>
                    </div>
                </div> 
                <br>

                <div class="form-group row">
                    <label for="category_id" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="category_id" required>
                            <option value="0" selected="">--Pilih Kategori--</option>
                            <option value="1">Pop</option>
                            <option value="2">Blues</option>
                            <option value="3">Jazz</option>
                        </select>
                    </div>
                </div>
                <br>
                
                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="image" placeholder="image" required name="image"> 
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="music" class="col-sm-3 col-form-label">Music</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="music" placeholder="music" required name="music"> 
                    </div>
                </div>
                
                <br>
                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="background-color:#2699d6;">Submit</button>
                    </div>
                </div>
              </form>
        </div>
    </div>
    

</div>
@endsection
