@extends('pedido.base')

@section('title', 'Cadastrar Pedido')

@section('content')

    <p class="h3">Cadastrar Novo Pedido</p>
    <form style="margin: 1rem" action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cliente:</label>
            <input type="text" multiple name="cliente" class="form-control" id="exampleInputName1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mesa:</label>
            <input type="number" multiple class="form-control" name="mesa" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cardápio:</label>
            <select class="selectpicker" multiple data-live-search="true" name="pratos">

                @foreach ($pratos as $prato)
                    <option value="{{ $prato->id }}">{{ $prato->nome . ' - ' . "R$" . $prato->valor }}</option>
                @endforeach
            </select>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Garçom:</label>
                <select class="selectpicker" multiple data-live-search="true" name="funcionarios_id">

                    @foreach ($funcionarios as $funcionario)
                        <option value="{{ $funcionario->id }}">{{ $funcionario->name }}</option>
                    @endforeach
                </select>
        </div>
        <button type="submit" class='btn btn-success'>Cadastrar</button>
    </form>

@endsection
