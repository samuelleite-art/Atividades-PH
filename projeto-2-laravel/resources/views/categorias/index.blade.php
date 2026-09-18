@extends('layouts.app')

@section('content')
    <h1>Categorias</h1>

    @foreach ($categorias as $categoria)
        <article>
            <h2>{{ $categoria->nome }}</h2>
            <p>{{ $categoria->descricao }}</p>
            <a href="{{ url('/categorias/' . $categoria->id) }}">
                Ver categoria
            </a>
        </article>
    @endforeach
@endsection
