@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4 class="text-center" style="color: #2699d6; margin-bottom:20px"> <b> Edit Profile </b></h4>
        <div class="col-md-5">
            <form action="/profile/update" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input id="nameUser" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus placeholder="Nama" value="{{$data->name}}">
                        {{-- <span class="form-text text-muted">Isi nama pasien</span> --}}
                        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input id="emailUser" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder="nama@email.com" value="{{$data->email}}">
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" id="address" class="form-control">
                            {{$data->address}}
                        </textarea>
                        
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="passwordUser" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input id="password-confirmUser" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    

</div>
@endsection
