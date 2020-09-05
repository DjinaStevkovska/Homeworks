<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="{{ asset('js/app.js') }}" defer></script>



    </head>
    <body>
        <div id="app">
            <router-link to="/">Home</router-link>
            <router-link :to="{name: 'about'}">About</router-link>
            <router-link :to="{name: 'user', params: { username: 'john'}}">User</router-link>
            <hr>
            <router-view></router-view>
        </div>
    </body>
</html>
