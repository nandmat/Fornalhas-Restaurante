@extends('state.base')

@section('title', 'Cadastrar Status')

@section('content')

<p class="h3">Cadastrar Status</p>
<form style="margin: 1rem" action="{{ route('status.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Status:</label>
        <input type="text" name="status" class="form-control" id="exampleInputName1"
            aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

@endsection
