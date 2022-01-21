@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-center" style="color: #2699d6; margin-bottom:20px"> <b> Tambah Kategori </b></h4>
        <div class="col-md-5">
            <form action="{{url('category/store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama Kategori</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama kategori" required>
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
