<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::All();

        return view('produto.index', array('produtos' => $produtos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = Produto::create($request->all());

        return redirect('produtos')->with('status', 'Novo produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_produto)
    {
        $produto = Produto::find($cod_produto);

        return view('produto.edit', array('produto' => $produto));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_produto)
    {
        $produto = Produto::find($cod_produto);
        $produto->update($request->all());

        return redirect('produtos')->with('statusUpdate', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_produto)
    {
        $produto = Produto::find($cod_produto);
        $nome_produto = $produto->nome_produto;

        $cliente->delete();

        $mensagem = "O produto <b>{$nome_produto}</b> foi excluído com sucesso!";

        return redirect('produtos')->with('statusUpdate', $mensagem);
    }

    public function destroyConfirm($id_produto)
    {
        $produto = Produto::find($cod_produto);

        return view('produto.destroy', ['produto' => $produto]);
    }
}
