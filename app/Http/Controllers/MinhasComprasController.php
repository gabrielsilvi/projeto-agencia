<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacote;
use App\Pedido;
use App\PontoTuristico;

class MinhasComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //primeiro foreach para listar apenas os pedidos do user logado e acessar seus precos pelo pacotes() da model Pedido
        $pedidosUser=Pedido::with('pacotes')->where('id_user', auth()->user()->id)->get();

        //segundo foreach dentro do primeiro para trazer apenas iformacoes visuais para retornar na view, nome do ponto
        $nomesPonto=Pacote::with('pontoturistico')->get();

        // dd($pedidosUser);
        return view('minhas-compras', compact('pedidosUser','nomesPonto'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $pack= Pacote::find($id);
        // $dataPacote= $pack->id;
        // $dataUser= auth()->user()->id;
        
        Pedido::create(['id_user'=>auth()->user()->id, 'id_pacote' => $pack->id]);
        return redirect('minhascompras');


        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
