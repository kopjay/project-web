@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-center" style="color: #2699d6; margin-bottom:20px"> <b> Edit Music </b></h4>
        <div class="col-md-5">
            <form action="/music/update" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" id="id" value="{{$data->id}}">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="artist" class="col-sm-3 col-form-label">Artist</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="artist" name="artist" placeholder="Masukan nama artist" required value="{{$data->artist}}">
                        </div>
                    </div> 
                    <br>
                    <div class="form-group row">
                        <label for="album" class="col-sm-3 col-form-label">Album</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="album" name="album" placeholder="Masukan judul album" required value="{{$data->album}}">
                        </div>
                    </div> 
                    <br>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Judul Lagu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukan judul lagu" required value="{{$data->name}}">
                        </div>
                    </div> 
                    <br>
    
                    <div class="form-group row">
                        <label for="category_id" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id" required>
                                <option value="0" selected="">--Pilih Kategori--</option>
                                @foreach($category as $a)
                                <option value="{{$a->id}}" @if($a->id == $data->category_id) selected @else @endif>{{$a->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    
                    <br>
                   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    

</div>
@endsection
