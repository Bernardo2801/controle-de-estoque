@extends('layouts.main')

@section('title', 'Dashboard')

@section ('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">

    <h1>Meus Produtos</h1>

</div>

<div class="col-md-10 offset-md-1 dashboard-products-container">

    @if (count($stocks) > 0)

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stocks as $stock)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/stocks/{{ $stock->id }}">{{ $stock->product }}</a></td>
                    <td><a href="/stocks/{{ $stock->id }}">{{ $stock->quantity }}</a></td>
                    <td>
                        <a href="/stocks/edit/{{ $stock->id }}" class="btn btn-info text-bg-primary"><i class="bi bi-pencil-square"></i>Editar</a>

                        <form action="/stocks/{{ $stock->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-bg-danger"><i class="bi bi-trash3-fill"></i>Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @else
        <p>Você ainda não tem produtos, <a href="/stocks/create">adicione produto ao estoque</a></p>
    @endif

</div>

@endsection
