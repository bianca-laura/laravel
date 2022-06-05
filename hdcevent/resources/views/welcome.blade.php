@extends('layout.main')

@section('title', 'HDC Events')

@section('content')

<h1> Hello World </h1>

<img src="img/banner.jpg" alt="banner">

@if(5 < 10)
    <p> A condição é true</p>
@endif

@if ($name == "Luara")
    <p> {{ $name }} </p>
@else
    <p> O nome é {{ $name }} tem {{ $years }} anos de idade e a sua profissão é {{ $profissao }} </p>
@endif
<p> {{ $name }}</p>

<p> {{ $years }} </p>

@for($i = 0; $i < count($arr); $i++)
    <p> {{ $arr [$i] }} </p>
@endfor

@php
    $n = "Bianca";
    echo($n);
@endphp

@foreach($names as $name)
    <p> {{ $loop->index }} <!-- mostra o indece -->
        {{ $name }}
    </p>
@endforeach
<a href="/contact"> Contato </a>
<a href="/search"> Busca </a>
@endsection