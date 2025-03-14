@extends('layouts.app')

@section('content')
    <h1>{{ $produto->nome }}</h1>
    <p>{{ $produto->descricao }}</p>
    <p>Preço: R$ {{ $produto->preco }}</p>
    <a href="{{ route('produtos') }}" class="btn btn-secondaty">Voltar</a>
@endsection