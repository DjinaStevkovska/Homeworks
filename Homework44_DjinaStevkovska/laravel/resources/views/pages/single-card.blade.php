@extends('layout')
@section('single-card')

<section>
    <div class="container">

    <div class="box" style="height: 720px">
        <img src="/images/{{ $card->img }}" alt="" style="width: 50%">
        <br>
        <br>
        <p>{{ $card->body }}</p>
    </div>
    </div>
</section>

@endsection