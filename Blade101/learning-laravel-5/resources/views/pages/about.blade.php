@extends('app)

@section('content')

<h1>About</h1>

<h3>People I Like:</h3>
<ul>

    @foreach($people as $person)
        <li>{{$person}}</li>
    @endforeach
</ul>


<p>Text de prova</p>

@stop