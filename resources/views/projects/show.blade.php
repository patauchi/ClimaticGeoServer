

@extends('layout')

@section('title', 'Project | ' . $ProjectItem->title)

@section('content')
<h1>{{$ProjectItem->title}}</h1>

	@auth
		<a href="{{ route('project.edit', $ProjectItem) }}">Editar project</a>

		<form method="POST" action="{{ route('project.destroy', $ProjectItem)}}">
	@csrf @method('DELETE')
	<button>Eliminar</button>
</form>

	@endauth



<h5>{{$ProjectItem->description}}</h5>
<p>{{$ProjectItem->created_at}}</p>




@endsection