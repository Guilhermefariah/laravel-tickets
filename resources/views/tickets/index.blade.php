@extends('templates.template')

@section('content')
    <div class="m-auto py-4">
        <h1 class="text-center text-white font-bold display-4 mb-4">Lista de Tickets</h1>
        <hr class="bg-light">
    </div>

    <div class="col-10 m-auto table-responsive">
        @csrf
        <table class="table table-hover table-bordered text-white">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data de Criação</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ticket as $tickets)
                    <tr class="text-center">
                        <td scope="row" class="align-middle">{{ $tickets->id }}</td>
                        <td class="align-middle">{{ $tickets->assunto }}</td>
                        <td class="align-middle">{{ $tickets->descricao }}</td>
                        <td class="align-middle">{{ $tickets->data_criacao }}</td>
                        <td class="align-middle">{{ $tickets->status }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group">
                                <a href="{{ url("tickets/$tickets->id") }}">
                                    <button class="btn btn-outline-primary btn-sm">Visualizar</button>
                                </a>
                                <a href="{{ url("tickets/$tickets->id/edit") }}">
                                    <button class="btn btn-outline-success btn-sm">Editar</button>
                                </a>
                                <a href="{{ url("tickets/$tickets->id") }}" class="js-del">
                                    <button class="btn btn-outline-danger btn-sm">Excluir</button>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <a href="{{ route('tickets.create') }}" class="btn btn-success">Cadastrar Ticket</a>
            <a href="{{ route('sellers.index') }}" class="btn btn-dark">Voltar</a>
        </div>
        {{ $ticket->links() }}
    </div>
@endsection
