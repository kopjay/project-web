@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4>Recommended for you</h4>

        @foreach($data as $d)
        <div class="card" style="width:300px; margin:0px 10px 10px;">
            <a href="{{url('music').'/'.$d->id}}">
                <img class="card-img-top" src="{{asset('uploads/images/').'/'.$d->image}}" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">{{$d->artist}}</h4>
                </div>
            </a>
        </div>
        @endforeach
        
    </div>
</div>
@endsection
