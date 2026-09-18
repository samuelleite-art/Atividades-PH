@extends('layouts.app')

@section('content')
    <h1>{{ $categoria->nome }}</h1>
    <p>{{ $categoria->descricao }}</p>

    <h2>Produtos</h2>

    @forelse ($produtos as $produto)
        <article>
            <strong>{{ $produto->nome }}</strong>
        </article>
    @empty
        <p>Nenhum produto encontrado.</p>
    @endforelse

    <a href="{{ url('/categorias') }}">Voltar</a>
@endsection
