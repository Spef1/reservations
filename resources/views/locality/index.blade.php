@extends('layouts.app')

@section('title', 'Liste des localités')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <ul>
    @foreach($locations as $location)
        <li><a href="{{ route('locality.show', $locality->id) }}">{{ $locality->locality}}</a></li>
    @endforeach
    </ul>
@endsection