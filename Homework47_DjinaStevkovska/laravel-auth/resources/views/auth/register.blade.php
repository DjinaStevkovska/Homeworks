@extends('layout')
@section('content')


<div class="container" style="margin-top: 70px !important;">
    <div class="row">
        <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
                <div class="form">
                    <div class="text-center py-4">
                    <i class="fas fa-user-circle fa-3x"></i></div>
                    <h3 style="text-align: center" class="pb-4">{{ __('Register') }}</h3>

                    <form method="POST" class="form-group" action="{{ route('register') }}">
                        @csrf

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter username"  value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <br>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
            
                            <br>
                    
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                
                            <br>


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">

                            <br>

                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Register') }}
                            </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
