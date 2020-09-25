<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::All();

        return view('funcionario.index', array('funcionarios' => $funcionarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = Funcionario::create($request->all());

        return redirect('funcionarios')->with('status', 'Novo funcionário cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cod_funcionario)
    {
        $funcionario = Funcionario::with('pedidos')->find($cod_funcionario);
        

        return $funcionario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_funcionario)
    {
        $funcionario = Funcionario::find($cod_funcionario);

        return view('funcionario.edit', array('funcionario' => $funcionario));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_funcionario)
    {
        $funcionario = Funcionario::find($cod_funcionario);
        $funcionario->update($request->all());

        return redirect('funcionarios')->with('statusUpdate', 'Funcionario atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_funcionario)
    {
        $funcionario = Funcionario::find($cod_funcionario);
        $nome_funcionario = $funcionario->nome_funcionario;

        $funcionario->delete();

        $mensagem = "O funcionário <b>{$nome_funcionario}</b> foi excluído com sucesso!";

        return redirect('funcionarios')->with('statusUpdate', $mensagem);
    }


    public function destroyConfirm($cod_funcionario)
    {
        $funcionario = Funcionario::find($cod_funcionario);

        return view('funcionario.destroy', ['funcionario' => $funcionario]);
    }
    
}
