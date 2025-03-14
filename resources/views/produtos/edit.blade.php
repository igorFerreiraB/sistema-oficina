@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Editar Produto</h1>
        <form action="{{ route('produtos.update', $produto->id) }}" method="post" class="bg-light p-4 rounded shadow">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{ $produto->nome }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control">{{ $produto->descricao }}</textarea>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço:</label>
                <input type="number" name="preco" id="preco" value="{{ $produto->preco }}" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" value="{{ $produto->quantidade }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection