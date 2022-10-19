@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="container-fluid">
    <h1>{{$event->title}}</h1>
    <p>{{$event->city}}</p>
    <p>{{$event->desc}}</p>
</div>
