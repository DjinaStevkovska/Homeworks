@extends('layout')
@section('content')



<div class="container" style="margin-top: 70px !important;">
    <div class="row">
        <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
                <div class="form">
                    <div class="text-center py-4">
                        <i class="fas fa-user-circle fa-3x"></i>
                    </div>
                    <h3 style="text-align: center" class="pb-4">{{ __('Login') }}</h3>              
                        
                    <form method="POST" class="form-group" action="{{ route('login') }}">
                        @csrf

                        <input id="email" type="email" class="form-control" placeholder="Enter username" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <br>
                                
                        <input id="password" type="password"  class="form-control" placeholder="Enter password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="row mx-auto p-2 text-center">
                            
                            <div class="text-left pl-4 pr-4">
                                <a href="#" class="btn btn-default small">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>    
                                </a>
                            </div>

                            <div class="text-right pl-4 pr-4">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
