@extends('templates.template')

@section('content')
    <div class="m-auto py-4 mb-4">
        <h1 class="text-center text-dark font-weight-bold display-4 mb-4">
            @if (isset($ticket))
                Editar
            @else
                Cadastrar
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

        @if (isset($ticket))
            <form name="formEdit" id="formEdit" action="{{ url("tickets/$ticket->id") }}" method="POST">
                @method('PUT')
            @else
                <form name="formCreate" id="formCreate" action="{{ url('tickets') }}" method="POST">
        @endif

        <div class="form-group">
            <label for="assunto">Assunto</label>
            <input type="text" class="form-control" id="assunto" name="assunto" value="{{ $ticket->assunto ?? '' }}"
                required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" required>{{ $ticket->descricao ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="data_criacao">Data de Criação</label>
            <input type="date" class="form-control" id="data_criacao" name="data_criacao"
                value="{{ $ticket->data_criacao ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="em_aberto" {{ isset($ticket) && $ticket->status == 'em_aberto' ? 'selected' : '' }}>Em aberto
                </option>
                <option value="em_andamento" {{ isset($ticket) && $ticket->status == 'em_andamento' ? 'selected' : '' }}>Em
                    andamento</option>
                <option value="resolvido" {{ isset($ticket) && $ticket->status == 'resolvido' ? 'selected' : '' }}>Resolvido
                </option>
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-dark">
                @if (isset($ticket))
                    Atualizar
                @else
                    Enviar
                @endif
            </button>
            <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary">Voltar</a>
        </div>
        </form>
    </div>
@endsection