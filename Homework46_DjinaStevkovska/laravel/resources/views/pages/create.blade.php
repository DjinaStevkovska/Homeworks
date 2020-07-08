@extends('layout')
@section('create')

<form method="post" action="/create">
    @csrf
    <div class="row half">
    <div class="12u">
    <input class="text" type="text" name="img" id="email" placeholder="Enter url" />
    </div>
    </div>
    <div class="row half">
    <div class="12u">
    <textarea name="body" id="message" placeholder="Card-Body"></textarea>
    </div>
    </div>
    <div class="row half">
    <div class="12u">
    <ul class="actions">
    <li>
    <button type="submit">Create form</button>
    </li>
    </ul>
    </div>
    </div>
    </form>

    
{{-- <form method="post" action="/create">
    @csrf
    <div class="row half">
        <div class="12u">
            <input class="text" type="text" name="name" placeholder="Name" />
        </div>
    </div>
						
    
 <div class="row half">
	<div class="12u">
        <input class="text" type="text" name="email" placeholder="Enter Url" />
	</div>
</div>
    
<div class="row half">
	<div class="12u">
        <textarea name="message" placeholder="Card Body"></textarea>
	</div>
</div>
    
<div class="row half">
	<div class="12u">
        <ul class="actions">
	       <li>
				<input type="submit" value="Create Form" class="button alt" />
               				<button type="submit">Submit</button>

            </li>
        </ul>
    </div>
</div>

</form> --}}

@endsection