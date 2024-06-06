@extends('layouts.main')

@section('title', 'TechFarma')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Procure um produto</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-title-container">
    </div>

    <div class="col-md-10 offset-md-1 dashboard-products-container">

        @if (count($stocks) > 0)

            @if ($search)
                <h2>Buscando por: {{ $search }}</h2>
            @else
                <h1>Produtos cadastrados</h1>
                <p class="subtitle">Veja todos os produtos:</p>
                <br>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Produto</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stocks as $stock)
                        <tr>
                            <td><a class="text-decoration-none" href="/stocks/{{ $stock->id }}">{{ $stock->product }}</a>
                            </td>
                            <td><a class="text-decoration-none"
                                    href="/stocks/{{ $stock->id }}">{{ $stock->quantity }}</a></td>
                            <td><a class="text-decoration-none"
                                    href="/stocks/{{ $stock->id }}">R${{ number_format($stock->value, 2, ',', '.') }}</a>
                            </td>
                            <td>

                                <form action="/stocks/{{ $stock->id }}">
                                    <button class="btn text-bg-primary">Ver</button>
                                </form>

                                <form action="/stocks/edit/{{ $stock->id }}">
                                    <button class="btn text-bg-warning">Editar</button>
                                </form>

                                <button type="button" onclick="confirmDelete({{ $stock->id }})"
                                    class="btn btn-danger text-bg-danger">Deletar</button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h4>Infelizmente, não encontramos nada no estoque.</h4>
            <br>

            <form action="/stocks/create">
                <button class="btn text-bg-primary">Cadastrar novo produto</button>
            </form>

        @endif


    </div>

    <script>
        function confirmDelete(id) {
            alertify.confirm("Tem certeza de que deseja apagar este item?", function(e) {
                if (e) {
                    let form = document.createElement('form')
                    form.method = 'POST'
                    form.action = `/stocks/${id}`
                    form.innerHTML = '@csrf @method('DELETE')'
                    document.body.appendChild(form)
                    form.submit()
                } else {
                    return false
                }
            })
        }
    </script>

@endsection
