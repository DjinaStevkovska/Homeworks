@extends('layout')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="container header mt-5">
    <div class="jumbotron">
        <div class="header-content mt-4">
            <h2 class="display-2">Company Inc.</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut unde quaerat consequatur?</p>
            <a href="login.html" class="btn btn-primary">Get Started</a>
        </div>        
    </div>
</div>

<div class="container products">
    <h2 class="text-center mb-4">Our Products</h2>

    <div class="row mt-4 p-4">
        <div class="col-md-5 col-sm-12">
            <img src="https://images.unsplash.com/photo-1501959181532-7d2a3c064642?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9ffb47d2c8a236bae5e5bb86b2c400b9&auto=format&fit=crop&w=1070&q=80"
                style="height: 100%;width: 100%;" alt="product-image" class="shadow-lg">
        </div>
        <div class="col-md-7 col-sm-12 mt-sm-4" style="display:flex;align-items:center;">
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nobis officiis unde
                necessitatibus esse alias expedita quia doloremque assumenda. Cupiditate nam exercitationem
                voluptatem quidem ad dolore ullam aliquid culpa ducimus qui, ut dignissimos inventore veniam!</p>
        </div>
    </div>

</div>
@endsection

