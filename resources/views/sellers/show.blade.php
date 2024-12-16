@extends('templates.template')

@section('content')
    <div class="m-auto py-4">
        <h1 class="text-center text-dark font-weight-bold display-4 mb-4">Visualizar Vendedor</h1>
        <hr class="bg-secondary">
    </div>

    <div class="col-10 m-auto table-responsive">
        <table class="table table-hover table-bordered text-dark">
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
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="{{ route('sellers.index') }}" class="btn btn-outline-secondary btn-lg">
                Voltar
            </a>
        </div>
    </div>
@endsection
