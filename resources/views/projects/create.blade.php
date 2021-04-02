@extends('layout')

@section('title', 'Create')

@section('content')
		<h1>Crear Proyecto</h1>


		@include('include.validationErrors')
		<form method="POST" action="{{ route('project.store') }}">
			@include('projects.form', ['btnText'=>'Guardar' ])
		</form>


@endsection