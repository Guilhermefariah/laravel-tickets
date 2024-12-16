@extends('templates.template')

@section('content')
    <div class="m-auto py-4">
        <h1 class="text-center text-white font-bold display-4 mb-4">Vendedores</h1>
        <hr class="bg-light">
    </div>

    <div class="col-10 m-auto table-responsive">
        @csrf
        <table class="table table-hover table-bordered text-white">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($seller as $sellers)
                    <tr class="text-center">
                        <td scope="row" class="align-middle">{{ $sellers->id }}</td>
                        <td class="align-middle">{{ $sellers->nome }}</td>
                        <td class="align-middle">{{ $sellers->email }}</td>
                        <td class="align-middle">{{ $sellers->telefone }}</td>
                        <td class="align-middle">{{ $sellers->status }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group">
                                <a href="{{ url("sellers/$sellers->id") }}">
                                    <button class="btn btn-outline-primary btn-sm">
                                        Visualizar
                                    </button>
                                </a>
                                <a href="{{ url("sellers/$sellers->id/edit") }}">
                                    <button class="btn btn-outline-success btn-sm">
                                        Editar
                                    </button>
                                </a>
                                <a href="{{ url("sellers/$sellers->id") }}" class="js-del">
                                    <button class="btn btn-outline-danger btn-sm">
                                        Excluir
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <a href="{{ route('sellers.create') }}" class="btn btn-primary">Cadastrar Vendedor</a>
            <a href="{{ route('tickets.index') }}" class="btn btn-warning text-white">Tickets</a>
        </div>
        {{ $seller->links() }}
    </div>
@endsection
