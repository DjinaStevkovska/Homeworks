@extends('layout')
@section('single-card')


    <section>
        <div class="container">
    
            <form action="/card-{{$card->id}}" method="post">
                @csrf
                @method('delete')
        <div class="box" style="height: 720px">
            <img src="/images/{{ $card->img }}" alt="" style="width: 50%">
            <br>
            <br>
            <p>{{ $card->body }}</p>
            <h1>This card belongs to {{$card->user->name}}</h1>
                @foreach ($card->category as $category)

                <h1>
                    <a href="">{{$category->title}}</a>
                </h1>

                @endforeach
            <a href="/card-{{$card->id}}/edit" class="button">Edit Page</a></div>

            <button type="submit" value="delete">Delete<button>

            
                {{-- <a href='/'>Breed</a> --}}
        </div>
    </form>

        </div>

    </section>


@endsection