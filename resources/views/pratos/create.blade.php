@extends('pratos.base')

@section('title', 'Cadastrar Prato')

@section('content')

    <p class="h3">Cadastrar Novo Prato</p>
    <form style="margin: 1rem" action="{{ route('prato.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrição:</label>
            <input type="text" class="form-control" name="descricao" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Valor:</label>
            <input type="number" name="valor" class="form-control" id="exampleInputValor1">
        </div>
        <button type="submit" class='btn btn-success'>Cadastrar</button>
    </form>

@endsection
