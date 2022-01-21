@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center" style="color: #2699d6"> <b> {{$data->name}} </b></h4>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div style="background: url('../uploads/images/{{$data->image}}') center;padding: 136px;width: 363.984px;margin: 18px;"></div>
        </div>
        <div class="col-md-4">
            <div style="text-align: center;">
                <p style="font-size: 21px;margin: 32px;color: #2699d6;font-weight: bold;">Name:</p>
            </div>
            <div style="font-size: 21px;margin: 32px;color: #2699d6;font-weight: bold;">
                <p style="text-align: center;font-size: 21px;margin: 32px;color: #2699d6;font-weight: bold;">Price:</p>
            </div>
            <div style="text-align: center;font-size: 21px;margin: 32px;color: #2699d6;font-weight: bold;">
                <p style="text-align: center;font-size: 21px;margin: 32px;color: #2699d6;font-weight: bold;">Type:</p>
            </div>
            <div style="text-align: center;font-size: 21px;margin: 32px;color: #2699d6;font-weight: bold;">
                <p style="text-align: center;font-size: 21px;margin: 32px;color: #2699d6;font-weight: bold;">Color:</p>
            </div>
        </div>
        <div class="col-md-4">
            <div style="text-align: center;">
                <p style="font-size: 21px;margin: 32px;text-align: left;color: #2699d6;font-weight: bold;">{{$data->name}}</p>
            </div>
            <div style="font-size: 21px;margin: 32px;text-align: left;">
                <p style="text-align: left;font-size: 21px;margin: 2px;color: #2699d6;font-weight: bold;">Rp.{{$data->price}}</p>
            </div>
            <div style="text-align: left;font-size: 21px;margin: 32px;">
                <p style="text-align: center;font-size: 21px;margin: 4px;width: 126.984px;color: #2699d6;font-weight: bold;">{{$data->type}}</p>
            </div>
            <div style="text-align: left;font-size: 21px;margin: 32px;">
                <p style="text-align: center;font-size: 21px;margin: 4px;width: 124.984px;color: #2699d6;font-weight: bold;">{{$data->color}}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div style="text-align: right;"><a class="btn btn-primary" role="button" style="text-align: center;font-size: 27px;background: #2699d6;width: 146.672px;" href="{{url('/')}}">Previous</a></div>
        </div>
        <div class="col-md-4">
            <div style="text-align: center;"><a class="btn btn-primary" role="button" style="text-align: center;font-size: 27px;background: rgb(59,248,42);width: 166.328px;" href="UpdateFurniture2.html">Update</a></div>
        </div>
        <div class="col-md-4">
            <div style="text-align: left;">
                <form action="{{url('/product/destroy/'.$data->id)}}" method="POST" style="display:inline-block;">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-primary" style="text-align: center;font-size: 27px;background: var(--bs-red);width: 132.984px;" onclick="return confirm('Yakin ingin menghapus data?');">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection
