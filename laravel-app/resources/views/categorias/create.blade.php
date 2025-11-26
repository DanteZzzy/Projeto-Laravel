@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <h1>Nova Categoria</h1>

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nome da Categoria</label>
                <input type="text" name="nome" required>
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" rows="4"></textarea>
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-success">
                    Salvar
                </button>

                <button href="{{ route('categorias.index') }}" class="btn btn-secondary">
                    Voltar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
