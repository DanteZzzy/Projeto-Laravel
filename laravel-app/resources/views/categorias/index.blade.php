@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <h1>Gerenciamento de Categorias</h1>

        <div class="actions">
            <a href="{{ route('categorias.create') }}" class="btn btn-success">
                Nova Categoria
            </a>
        </div>

        @if($categorias->count() === 0)
            <div class="empty-message">
                Nenhuma categoria cadastrada no momento.
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th style="width:70px;">ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th style="width:220px; text-align:center;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nome }}</td>
                        <td>{{ $categoria->descricao }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary btn-action">
                                    Editar
                                </a>

                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-action" onclick="return confirm('Deseja realmente excluir esta categoria?')">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
