<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('fontawesome')
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <buttons-component></buttons-component>
                            <div class="card-body">
                                
                                <ul>
                                    {{-- @foreach($posts as $post)
                                        <a href="{{route('post', $post->id)}}"><li>{{$post->title}}</li></a>
                                    @endforeach --}}
                                    
                                    {{-- <example-component></example-component> --}}
                                    {{-- <todo-component></todo-component> --}}
                                    
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script type="text/x-template" id="counter-template">
        <div>
            <p>My counter: </p>
            <button class="btn btn-primary" @click="counter++">@{{counter}}</button>
        </div>
    </script>
 
</body>
</html>
