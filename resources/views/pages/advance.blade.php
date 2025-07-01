@extends('layouts.app')


@section('content')

<h1> this is my Advance  page </h1>




@foreach($peaple as $person)

<li> {{$person}}</li>

@endforeach




@endsection