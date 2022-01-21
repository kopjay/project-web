@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4 class="text-center" style="color: #2699d6; margin-bottom:30px;"> <b> Playlist </b></h4>
        <div style="float-right">
            <a href="{{url('/add')}}" class="btn btn-primary font-weight-bolder" style="width:130px; float:right;">
                <span class="fa fa-plus"></span> Tambah Data
            </a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Judul Lagu</th>
                    <th>Album</th>
                    <th>Artist</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>{{$d->album}}</td>
                        <td>{{$d->artist}}</td>
                        <td>
                            
                            <a href="{{url('music/edit/'.$d->id)}}">
                                <i class="fa fa-edit" style="color:rgb(196, 189, 0);"></i>
                            </a>
                            <form action="{{url('/music/destroy/'.$d->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-clean btn-icon mr-2" onclick="return confirm('Yakin ingin menghapus data?');">
                                    <i class="fa fa-trash" style="color:rgb(186, 51, 51);"></i>
                                </button>
                            </form>
                            <a href="{{url('playlist/'.$d->id)}}"><i class="fa fa-play"></i></a>
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

    
</div>

@endsection
