@extends('layout.main')

@section('title', 'Contato')

@section('content')
    <input type="text" id="search" placeholder="Busca.."/>
    <input type="button" value="Buscar" name="search"/> 

    <p> exibindo o produto {{ $id }} </p>

   
@endsection