@extends('layout.main_layout')
@section('content')
    @csrf
    <h1>Resultado</h1>
    <hr>
    <p>Imc: {{ $imc }}<p>
    <p>Status: {{ $status }}</p>

@endsection