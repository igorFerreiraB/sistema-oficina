<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('home', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);
        
        $data = $request->except('_token');
        Produto::create($data);
        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome'=> 'required',
            'descricao' => 'nulltable',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}
