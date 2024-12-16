@extends('templates.template')

@section('content')
    <div class="m-auto py-4">
        <h1 class="text-center text-white font-bold display-4 mb-4">Visualizar</h1>
        <hr class="bg-light">
    </div>

    <div class="col-10 m-auto table-responsive">
        <table class="table table-hover table-bordered text-white">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            <tbody>
                <tr class="text-center">
                    <td scope="row" class="align-middle">{{ $seller->id }}</td>
                    <td class="align-middle">{{ $seller->nome }}</td>
                    <td class="align-middle">{{ $seller->email }}</td>
                    <td class="align-middle">{{ $seller->telefone }}</td>
                    <td class="align-middle">{{ $seller->status }}</td>
                </tr>
        </table>
        <div>
            <a href="{{ route('sellers.index') }}" class="btn btn-outline-danger">
                Voltar
            </a>
        </div>
    </div>
@endsection
