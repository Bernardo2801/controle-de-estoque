<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stock;
use App\Models\User;

class StockController extends Controller
{

    public function validity() {

        $search = request('search');

        if ($search) {
            $stocks = Stock::whereRaw('LOWER(product) LIKE ?', ['%' . strtolower($search) . '%'])->get();
        } else {
            $stocks = Stock::all();
        }

        return view('stocks.validity', ['stocks' => $stocks, 'search' => $search]);
    }

    public function index() {

        $search = request('search');

        if ($search) {
            $stocks = Stock::whereRaw('LOWER(product) LIKE ?', ['%' . strtolower($search) . '%'])->get();
        } else {
            $stocks = Stock::all();
        }

        return view('stocks.index', ['stocks' => $stocks, 'search' => $search]);
    }


    public function create() {
        return view('stocks.create');
    }

    public function store(Request $request) {

        $request->validate([
            'product' => 'required',
            'value' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'arrival_date' => 'required|date',
            'expiration_date' => 'required|date|after:arrival_date',
        ], [
            'product.required' => 'Por favor, preencha o nome do produto.',
            'value.required' => 'Por favor, preencha o valor.',
            'quantity.required' => 'Por favor, preencha a quantidade.',
            'description.required' => 'Por favor, preencha a descrição.',
            'arrival_date.required' => 'Por favor, preencha a data de chegada do produto.',
            'arrival_date.date' => 'Por favor, insira uma data válida para a chegada do produto.',
            'expiration_date.required' => 'Por favor, preencha a data de vencimento.',
            'expiration_date.date' => 'Por favor, insira uma data válida para o vencimento do produto.',
            'expiration_date.after' => 'A data de vencimento deve ser posterior à data de chegada.',
        ]);

        $stock = new Stock;

        $stock->product = $request->product;
        $stock->value = $request->value;
        $stock->quantity = $request->quantity;
        $stock->expiration_date = $request->expiration_date;
        $stock->arrival_date = $request->arrival_date;
        $stock->description = $request->description;

        $user = auth()->user();
        $stock->user_id = $user->id;

        $stock->save();

        return redirect('/')->with('msg', 'Produto cadastrado com sucesso!');

    }

    public function show($id) {

        $stock = Stock::findOrFail($id);

        $productOwner = User::where('id', $stock->user_id)->first()->toArray();

        return view('stocks.show', ['stock' => $stock, 'productOwner' => $productOwner]);
    }

    public function dashboard() {

        return view('welcome');

    }

    public function destroy($id) {

        $stock = Stock::findOrFail($id);
        $stock->delete();
        return redirect('/');
    }

    public function edit($id) {

        $stock = Stock::findOrFail($id);

        return view('stocks.edit', ['stock' => $stock]);
    }

    public function update(Request $request) {

    #    $request->validate([
    #        'arrival_date' => 'required|date',
    #        'expiration_date' => 'required|date|after:arrival_date',
    #    ], [
    #        'arrival_date.required' => 'A data de chegada é obrigatória.',
    #        'arrival_date.date' => 'Por favor, insira uma data válida para a chegada do produto.',
    #        'expiration_date.required' => 'A data de vencimento é obrigatória.',
    #        'expiration_date.date' => 'Por favor, insira uma data válida para o vencimento do produto.',
    #        'expiration_date.after' => 'A data de vencimento deve ser posterior à data de chegada.',
    #    ]);

        Stock::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg', 'Produto editado com sucesso!');
    }

}
