@extends ('layouts.app')

@section ('content')

    <div style="text-align: center">
        @foreach($posts as $post)
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>

        {{-- @continue($loop->last) --}}
        <hr>

    @endforeach
    </div>
@endsection

