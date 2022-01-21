@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4>Recommended for you</h4>

        @foreach($data as $d)
        <div class="card" style="width:300px; margin-right:10px;">
            <img class="card-img-top" src="{{asset('assets/img/0063355_PE107397_S3.jpg')}}" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Taylor Swift</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection
