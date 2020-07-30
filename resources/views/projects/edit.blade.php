@extends('layout')
@section('title','Crear proyecto')
@section('content')
	<h1>Editar nuevo proyecto</h1>
	@include('partials.validation-errors')
	<form method="POST" action=" {{ route('projects.update', $project) }} ">
		{{ method_field('PATCH') }}
		@include('projects._form', ['btnText' => 'Actualizar'])
	</form>
@endsection('content')