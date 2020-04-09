<?php

namespace App\Http\Controllers;

use App\tienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Productos;


class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        if(Productos::paginate(5)!=null){
            $datos['productos'] = Productos::paginate(5);
        }/*else{
            $datos['productos'] = tienda::Paginate(5);
            print('Entro2');
        }*/

        return view('tienda.index', $datos);
        //return view('tienda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('tienda.carrito');
        
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
     * @param  \App\tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function show(tienda $tienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function edit(tienda $tienda)
    {
        
    }

    public function comprar(){

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tienda $tienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(tienda $tienda)
    {
        //
    }
}
