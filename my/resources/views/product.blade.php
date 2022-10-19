@extends('layouts.main')

@section('title', 'Products')

@section('content')

<p>H!!</p>

@if($busca != '')
    <P>Busca: {{$busca}}</P>

@else
    <p>Busca nao pode ser vazia</p>

@endif




