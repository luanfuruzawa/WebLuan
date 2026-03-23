@extends('layout.main_layout')
@section('content')
    <h1>Cálculo IMC:</h1>
    <hr>
    <form action="/imc/estatura" method="post">
    @csrf
    <label>Altura: </label>
    <input type="number" step="any" name="altura">
    <br><br>

    <label>Peso: </label>
    <input type="number" name="peso">
    <br><br>
    
    <hr>
    <button type="submit">Enviar</button>
    </form>
@endsection