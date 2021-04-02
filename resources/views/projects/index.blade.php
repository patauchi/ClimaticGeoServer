@extends('layout')

@section('title', 'Proyectos Pe')

@section('content')
		<h1>Projects</h1>

		@auth
			<a href="{{ route('project.create') }}">Crear nuevo proyecto</a>
		@endauth
		<ul>
			@forelse($projects as $ItemProjects)
				<li><a href="{{ route('project.show', $ItemProjects) }}">{{ $ItemProjects['title']}}</a></li>
			@empty
				<li>No hay proyectos</li>
			@endforelse
		</ul>

@endsection