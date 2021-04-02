@extends('layout')

@section('title', 'Editar')

@section('content')
		<h1>Editar Proyecto</h1>
		@include('include.validationErrors')

		<form method="POST" action="{{ route('project.update', $projectEdit) }}">
			@method('PATCH')
			@include('projects.form', ['btnText'=>'Actualizar' ])
		</form>


@endsection