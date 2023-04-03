@extends('pratos.base')

@section('title', 'Lista de pratos')
@section('content')

    <p class="h3">Atualizar Prato</p>
    <form style="margin: 1rem" action="{{ route('prato.update', ['id' => $prato->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" id="exampleInputName1" aria-describedby="emailHelp"
                value="{{ $prato->nome }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrição:</label>
            <input type="text" class="form-control" name="descricao" id="exampleInputPassword1"
                value="{{ $prato->descricao }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Valor:</label>
            <input type="number" name="valor" class="form-control" id="exampleInputValor1" value="{{ $prato->valor }}">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>

@endsection
