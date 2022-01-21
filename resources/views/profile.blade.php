@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-center" style="color: #a748aa">Wellcome to JH Furniture</h4>

        <div style="text-align: center;">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-end" style="width: 423px;">Full Name</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-start">{{$data->name}}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-end" style="width: 391px;">Email</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-start">{{$data->email}}</p>
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
                        <p class="text-start">{{$data->address}}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-end" style="width: 404px;">Gender</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-start">{{$data->gender}}</p>
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
                        <p class="text-start">Admin</p>
                        @else
                        <p class="text-start">Member</p>
                        @endif
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4" style="text-align: right;"><a class="btn btn-primary" role="button" style="text-align: left;background: #a748aa;" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">Logout</a></div>
                        <div class="col-md-4"><a class="btn btn-primary" role="button" style="background: #a748aa;" href="ViewTransactionHistoryPageforMember.html">View All User's Transaction</a></div>
                        <div class="col-md-4" style="text-align: left;"><a class="btn btn-primary" role="button" style="background: #a748aa;" href="UpdateProfileMember.html">Update Profile</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </div>
</div>
@endsection
