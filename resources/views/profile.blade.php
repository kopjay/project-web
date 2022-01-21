@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-center" style="color: #2699d6; margin-bottom:30px">Profile</h4>

        
        <div style="text-align: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-end" style="width: 393px;">Name</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-start">: {{$data->name}}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-end" style="width: 391px;">Email</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-start">: {{$data->email}}</p>
                    </div>
                </div>
            </div>

            @if($data->role!=1)
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-end" style="width: 410px;">Address</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-start">: {{$data->address}}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-end" style="width: 404px;">Gender</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-start">: {{$data->gender}}</p>
                    </div>
                </div>
            </div>
            @endif

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-end" style="width: 385px;">Role</p>
                    </div>
                    <div class="col-md-6">
                        @if($data->role==1)
                        <p class="text-start">: Admin</p>
                        @else
                        <p class="text-start">: Member</p>
                        @endif
                    </div>
                </div>
            </div>
            <br>
            <div>
                <div class="container">
                        
                    <a href="{{url('profile/'.Auth::user()->id)}}" class="btn btn-primary font-weight-bolder" style="width:130px;">
                        <span class="fa fa-edit"></span> Update Data
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
