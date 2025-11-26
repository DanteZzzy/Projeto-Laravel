@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <h1>Editar Categoria</h1>

        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nome da Categoria</label>
                <input type="text" name="nome" value="{{ $categoria->nome }}" required>
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" rows="4">{{ $categoria->descricao }}</textarea>
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-primary">
                    Atualizar
                </button>

                <button href="{{ route('categorias.index') }}" class="btn btn-secondary">
                    Voltar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
