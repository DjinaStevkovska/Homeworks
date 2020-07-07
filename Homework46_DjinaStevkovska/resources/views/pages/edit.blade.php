@extends('layout')
@section('head')

<title>Phase Shift by TEMPLATED</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<script src="js/jquery.min.js"></script>
<script src="js/jquery.dropotron.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-layers.min.js"></script>
<script src="js/init.js"></script>
<noscript>
    <link rel="stylesheet" href="../css/skel.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style-wide.css" />
</noscript>

@endsection

@section('edit')


<form method="post" action="/card-{{$card->id}}">
    @csrf
    @method('PUT')

    <div class="row half">
    <div class="12u">
    <input class="text" type="text" name="img" id="email" placeholder="Edit url" value='{{$card->img}}' />
    </div>
    </div>
    <div class="row half">
    <div class="12u">
    <textarea name="body" id="message" placeholder="Edit Card-Body">{{$card->body}}</textarea>
    </div>
    </div>
    <div class="row half">
    <div class="12u">
    <ul class="actions">
    <li>
    <button>Update Form</button>

    </li>
    </ul>
    </div>
    </div>
    </form>

    @endsection