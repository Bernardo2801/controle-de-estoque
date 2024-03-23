@extends('layouts.main')

@section('title', $stock->product)

@section ('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mt-5" id="info-container">
            <h1>{{ $stock->product }}</h1>
            <p class="value-product"><i class="bi bi-currency-dollar"></i> Valor unitário: R${{ number_format($stock->value, 2, ',', '.') }}</p>
            <p class="quantity-product"><i class="bi bi-bag-plus"></i> Quantidade: {{ $stock->quantity }}</p>
            <p class="description-product"><i class="bi bi-info-square"></i> Descrição: {{ $stock->description }}</p>
            <p class="arrival-date"><i class="bi bi-calendar2-plus"></i> Data de entrada: {{ date('d/m/Y', strtotime($stock->arrival_date)) }}</p>
            <p class="expiration-date"><i class="bi bi-calendar4-week"></i> Vencimento: {{ date('d/m/Y', strtotime($stock->expiration_date)) }}</p>
            <p class="created-product"><i class="bi bi-person"></i> Adicionado por: {{ $productOwner['name'] }}</p>
        </div>
    </div>
</div>

@endsection
