@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-center" style="color: #2699d6; margin-bottom:50px;"> <b> {{$data->artist}} </b></h4>
        <div class="col-md-4">
            <img src="{{asset('uploads/images/').'/'.$data->image}}" width="400" class="float-left">
        </div>
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Judul Lagu</th>
                    <th>Album</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->album}}</td>
                    <td><i class="fa fa-play"></i></td>
                  </tr>
                </tbody>
              </table>
        </div>

        <div class="container-audio">
            <audio controls  loop autoplay>
                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/new_year_dubstep_minimix.ogg" type="audio/ogg">
                Your browser dose not Support the audio Tag
            </audio>
        </div>
    </div>

    
</div>
@endsection
