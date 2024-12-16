@extends('templates.template')

@section('content')
    <div class="m-auto py-4 mb-4">
        <h1 class="text-center text-dark font-weight-bold display-4 mb-4">
            @if (isset($seller))
                Editar Vendedor
            @else
                Cadastrar Vendedor
            @endif
        </h1>
        <hr class="bg-secondary">
    </div>

    <div class="col-8 m-auto text-dark" style="font-family: 'sans-serif';">
        @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if (isset($seller))
            <form name="formEdit" id="formEdit" action="{{ url("sellers/$seller->id") }}" method="POST">
                @method('PUT')
            @else
                <form name="formCreate" id="formCreate" action="{{ url('sellers') }}" method="POST">
        @endif

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $seller->nome ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $seller->email ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" value="{{ $seller->telefone ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="ativo" {{ isset($seller) && $seller->status == 'ativo' ? 'selected' : '' }}>Ativo</option>
                <option value="inativo" {{ isset($seller) && $seller->status == 'inativo' ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="quantidade_tickets">Quantidade de Tickets</label>
            <select class="form-control" id="quantidade_tickets" name="quantidade_tickets" required>
                <option value="em_aberto" {{ isset($seller) && $seller->quantidade_tickets == 'em_aberto' ? 'selected' : '' }}>Em aberto</option>
                <option value="em_andamento" {{ isset($seller) && $seller->quantidade_tickets == 'em_andamento' ? 'selected' : '' }}>Em andamento</option>
                <option value="resolvido" {{ isset($seller) && $seller->quantidade_tickets == 'resolvido' ? 'selected' : '' }}>Resolvido</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">
                @if (isset($seller))
                    Atualizar
                @else
                    Enviar
                @endif
            </button>
            <a href="{{ route('sellers.index') }}" class="btn btn-dark">Voltar</a>
        </div>
        </form>
    </div>
@endsection
