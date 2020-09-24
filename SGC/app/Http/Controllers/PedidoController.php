<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::All();

        return view('pedido.index', array('pedidos' => $pedidos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedido.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = Pedido::create($request->all());

        return redirect('pedidos')->with('status', 'Novo efetuado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pedido)
    {
         $pedido = Pedido::with('pedidos')->find($id_pedido);
        
        return $pedido;
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pedido)
    {
        $pedido = Pedido::find($id_pedido);

        return view('pedido.edit', array('pedido' => $pedido));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pedido)
    {
        $pedido = Pedido::find($id_pedido);
        $pedido->update($request->all());

        return redirect('pedidos')->with('statusUpdate', 'Pedido atualizado com sucesso!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pedido)
    {
        $pedido = Pedido::find($id_pedido);
        $nome_pedido = $pedido->nome_pedido;

        $pedido->delete();

        $mensagem = "O pedido <b>{$nome_pedido}</b> foi excluído com sucesso!";

        return redirect('pedidos')->with('statusUpdate', $mensagem);
    }


    public function destroyConfirm($id_pedido)
    {
        $pedido = Pedido::find($id_pedido);

        return view('pedido.destroy', ['pedido' => $pedido]);
    }
}
