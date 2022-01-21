@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-center">View Furniture</h4>

        @foreach($data as $d)
        <div class="col-md-3" style="width: 222px;"><a class="btn btn-primary" role="button" style="background: url('uploads/images/{{$d->image}}') center, #2699d6;width: 199.5px;padding: 131px 12px;min-width: 0px;height: 244px;margin: 0px;border-top-width: 5px;border-top-color: #2699d6;border-right-width: 5px;border-right-color: #2699d6;border-bottom-width: 0px;border-bottom-color: #2699d6;border-left-width: 5px;border-left-color: #2699d6;font-size: 0px;" href="{{url('product/'.$d->id)}}">Button</a>
            <div style="background: #2699d6;">
                <div class="col">
                    <div>
                        <div style="color: rgb(33, 37, 41);">
                            <p style="text-align: center;color: var(--bs-white);font-size: 23px;">{{$d->name}}</p>
                            <p style="text-align: center;color: rgb(255,255,255);font-size: 22px;">Rp.{{$d->price}}</p><a class="btn btn-primary" role="button" style="width: 129.5px;margin: 32px;background: rgb(255,255,255);color: #2699d6;font-weight: bold;" href="Login.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection
