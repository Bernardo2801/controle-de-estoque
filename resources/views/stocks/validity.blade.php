@extends('layouts.main')

@section('title', 'Vencimentos')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
    </div>

    <div class="col-md-10 offset-md-1 dashboard-products-container">

        @if (count($stocks) > 0)


            <h1>Produtos cadastrados</h1>
            <p class="subtitle">Veja todos os produtos em ordem de vencimento:</p>
            <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Vencimento</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stocks as $stock)
                    <tr>
                        <td><a class="text-decoration-none" href="/stocks/{{ $stock->id }}">{{ $stock->product }}</a>
                        </td>
                        <td><a class="text-decoration-none" href="/stocks/{{ $stock->id }}">{{ $stock->quantity }}</a>
                        </td>
                        <td><a class="text-decoration-none" href="/stocks/{{ $stock->id }}">{{ date('d/m/Y', strtotime($stock->expiration_date)) }}</a>
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
