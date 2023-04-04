@extends('user.base')

@section('title', 'Cadastrar Novo Usuário')

@section('content')

    <p class="h3">Cadastrar Novo Funcionário</p>
    <form style="margin: 1rem" action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome:</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <select class="form-select" name="funcao" aria-label="Default select example">
                <option selected>Função</option>
                <option value="ga">Garçom</option>
                <option value="ca">Caixa</option>
                <option value="adm_ax">Auxiliar Administrativo</option>
                <option value="ax">Auxiliar de Limpeza</option>

            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Remuneração:</label>
            <input type="number" name="salario" class="form-control" id="exampleInputValor1">
        </div>
        <button type="submit" class='btn btn-success'>Cadastrar</button>
    </form>

@endsection
