@extends('baseleading')

@section('title', 'Controle')

@section('content')
    <div style="margin: 4rem">
        <div class="d-grid gap-3">
            <a class='btn btn-dark' href="{{ route('prato.index') }}">Realizar Pedido</a>
            <a class='btn btn-dark' href="{{ route('prato.index') }}">Acompanhar Pedido</a>
            <a class='btn btn-dark' href="{{ route('prato.index') }}">Relatório de vendas</a>
            <a class='btn btn-dark' href="{{ route('users.funcionarios.index') }}">Controle de Funcionários</a>
            <a class='btn btn-dark' href="{{ route('prato.index') }}">Controle Cardápios</a>
            <a class="btn btn-dark" href="{{ route('status.index') }}">Controle Status</a>
        </div>
    </div>
@endsection
