@extends('layout')

@section('title', 'Inicio Pe')

@section('content')
	<h1>Home</h1>
	@auth
		{{auth()->user()->name}}
	@endauth
@endsection
