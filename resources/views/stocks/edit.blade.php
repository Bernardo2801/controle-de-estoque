@extends('layouts.main')

@section('title', 'Editando: ' . $stock->product)

@section ('content')

<div id="stock-create-container" class="col-md-6 offset-md-3">
    <h1>Editando {{ $stock->product }}</h1>
    <form action="/stocks/update/{{ $stock->id }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group" id="info">
            <label for="title">Produto:</label>
            <input type="text" class="form-control" id="product" name="product" placeholder="Insira o nome do produto..." value="{{ $stock->product }}">
        </div>
        <div class="form-group" id="info">
            <label for="title">Valor unitário:</label>
            <input type="number" min="0" step="0.01" class="form-control" id="value" name="value" placeholder="Insira o valor do produto..." value="{{ $stock->value }}">
        </div>
        <div class="form-group" id="info">
            <label for="title">Quantidade:</label>
            <input type="number" min="1" class="form-control" id="quantity" name="quantity" placeholder="Insira a quantidade recebida do produto..." value="{{ $stock->quantity }}">
        </div>

        <div class="form-group" id="info">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descreva seu produto, exemplo: 100ml gotas, 4 cartelas com 10 comprimidos...">{{ $stock->description }}</textarea>
        </div>

    <!--    <div class="form-group" id="info">
            <label for="title">Data de chegada:</label>
            <input type="date" class="form-control" id="arrival_date" name="arrival_date" placeholder="Insira a data de chegada produto..." value="{{ $stock->arrival_date }}">
        </div>
        <div class="form-group" id="info">
            <label for="title">Data de vencimento:</label>
            <input type="date" class="form-control" id="expiration_date" name="expiration_date" placeholder="Insira a data de vencimento do produto..." value="{{ $stock->expiration_date }}">
        </div>
    -->

        <button type="submit" class="btn text-bg-success" value="Editar produto">Editar produto</button>

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
        @endif

    </form>
</div>

@endsection
