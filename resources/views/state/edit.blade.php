@extends('state.base')

@section('title', 'Atualizar Status')

@section('content')

<p class="h3">Cadastrar Status</p>
<form style="margin: 1rem" action="{{ route('status.update', ['id' => $state->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Status:</label>
        <input type="text" name="status" value="{{ $state->status }}" class="form-control" id="exampleInputName1"
            aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-success">Atualizar</button>
</form>

@endsection
