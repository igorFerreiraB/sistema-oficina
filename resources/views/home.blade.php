@extends('layouts.app')

@section('title', 'Peças de Carros')

@section('content')
    <div class="container">
        <div class="jumbotron bg-dark text-white text-center py-4">
            <h1 class="display-4">Sistema de Estoque</h1>
            <p class="lead">Gerencie seu estoque de forma fácil e rápida.</p>
            <a href="{{ route('produtos.create') }}" class="btn btn-primary btn-lg">Adicionar</a>
        </div>

        <div class="row">
            @foreach ($produtos as $produto)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produto->nome }}</h5>
                            <p class="card-text">{{ $produto->descricao }}</p>
                            <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                            <p class="card-text">{{ $produto->quantidade }}</p>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection