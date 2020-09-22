<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::All();

        return view('cliente.index', array('clientes' => $clientes));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());

        return redirect('clientes')->with('status', 'Novo cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_cliente)
    {
        $cliente = Cliente::with('pedidos')->find($id_cliente);
        //$cliente = Cliente::find($id)->pedidos;

        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cliente)
    {
        $cliente = Cliente::find($id_cliente);

        return view('cliente.edit', array('cliente' => $cliente));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cliente)
    {
        $cliente = Cliente::find($id_cliente);
        $cliente->update($request->all());

        return redirect('clientes')->with('statusUpdate', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cliente)
    {
        
        $cliente = Cliente::find($id_cliente);
        $nome_cliente = $cliente->nome_cliente;

        $cliente->delete();

        $mensagem = "O cliente <b>{$nome_cliente}</b> foi excluído com sucesso!";

        return redirect('clientes')->with('statusUpdate', $mensagem);
    }


    public function destroyConfirm($id_cliente)
    {
        $cliente = Cliente::find($id_cliente);

        return view('cliente.destroy', ['cliente' => $cliente]);
    }
}

