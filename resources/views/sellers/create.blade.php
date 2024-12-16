@extends('templates.template')

@section('content')
    <div class="m-auto">
        <h1 class="text-center text-white font-bold display-4 mb-4">
            @if (isset($seller))
                Editar
            @else
                Cadastrar
            @endif
        </h1>
        <hr class="bg-light">
    </div>

    <div class="col-8 m-auto text-white" style="font-family: 'sans-serif';">

        @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        @if (isset($seller))
            <form name="formEdit" id="formEdit" action="{{ url("sellers/$seller->id") }}" method="POST">
                @method('PUT')
            @else
                <form name="formCreate" id="formCreate" action="{{ url('sellers') }}" method="POST">
        @endif
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $seller->nome ?? '' }}"
                required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $seller->email ?? '' }}"
                required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" value="{{ $seller->telefone ?? '' }}"
                required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantidade_tickets">Quantidade de tickets</label>
            <select class="form-control" name="quantidade_tickets" id="quantidade_tickets" name="quantidade_tickets" required>
                <option value="em_aberto">Em aberto</option>
                <option value="em_andamento">Em andamento</option>
                <option value="resolvido">Resolvido</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">
            @if (isset($seller))
                Atualizar
            @else
                Enviar
            @endif
        </button>
        <a href="{{ route('sellers.index') }}" class="btn btn-dark">Voltar</a>
        </form>
    </div>
@endsection