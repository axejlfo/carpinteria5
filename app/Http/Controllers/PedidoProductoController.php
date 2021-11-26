<?php

namespace App\Http\Controllers;

use App\Models\PedidoProducto;
use App\Http\Requests\StorePedidoProductoRequest;
use App\Http\Requests\UpdatePedidoProductoRequest;

class PedidoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePedidoProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePedidoProductoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PedidoProducto  $pedidoProducto
     * @return \Illuminate\Http\Response
     */
    public function show(PedidoProducto $pedidoProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PedidoProducto  $pedidoProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(PedidoProducto $pedidoProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePedidoProductoRequest  $request
     * @param  \App\Models\PedidoProducto  $pedidoProducto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePedidoProductoRequest $request, PedidoProducto $pedidoProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PedidoProducto  $pedidoProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(PedidoProducto $pedidoProducto)
    {
        //
    }
}
