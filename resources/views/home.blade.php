@extends('layout')

@section('content')

<h2>Home</h2>

@component('components.alert')
    {{-- Pega uma variável de um nome específico --}}
    @slot('title') 
        Alerta Título
    @endslot
    mensagem
@endcomponent

@endsection