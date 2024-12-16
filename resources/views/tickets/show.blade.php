@extends('templates.template')

@section('content')
    <div class="m-auto py-4">
        <h1 class="text-center text-dark font-weight-bold display-4 mb-4">Visualizar Ticket</h1>
        <hr class="bg-secondary">
    </div>

    <div class="col-10 m-auto table-responsive">
        <table class="table table-bordered table-hover text-dark">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data de Criação</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            <tbody>
                <tr class="text-center">
                    <td scope="row" class="align-middle">{{ $ticket->id }}</td>
                    <td class="align-middle">{{ $ticket->assunto }}</td>
                    <td class="align-middle">{{ $ticket->descricao }}</td>
                    <td class="align-middle">{{ $ticket->data_criacao }}</td>
                    <td class="align-middle">{{ $ticket->status }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="{{ url('tickets') }}" class="btn btn-outline-secondary btn-lg">
                Voltar
            </a>
        </div>
    </div>
@endsection