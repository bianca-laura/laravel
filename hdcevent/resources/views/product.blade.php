@extends('layout.main')

@section('title', 'Produtos')

@section('content')
@if($busca != '')
        <p> O usuario está buscando por: {{ $busca }} </p>
    @endif
@endsection