
@extends('layouts.app')

@section('title', 'Inicio | Rally Caminos del Inca')

@section('content')

    {{-- Portada principal --}}
    @include('components.home.hero')

    {{-- Presentación del Rally --}}
    @include('components.home.presentacion')
    
      {{-- Patrocinadores --}}
    @include('components.home.patrocinadores')

@endsection
