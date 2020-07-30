@extends('layout')
@section('title','Projects')
@section('content')
    <h1>@lang('Projects')</h1>
        @auth
            <a href="{{ route('projects.create')}}">Crear proyecto</a>
        @endauth
    <ul>
        @forelse ($projects as $project)
            {{--  <li>{{ $portfolioItem['title']}}</li> --}}
            <li> <a href="{{ route('projects.show',$project)}}">{{ $project->title }} </a></li>
        @empty
            <li>No hay proyectos que mostrar</li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection('content')