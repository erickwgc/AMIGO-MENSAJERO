<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Carta;
use App\Imagen;
use Carbon\Carbon;

class CartasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carta', compact("carta"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carta= new Carta();
        $carta->nom=$request->campo_nombre;
        $carta->contenido=$request->contenido;
        $carta->fecha=Carbon::now()->format('Y-m-d');
        $carta->save();

        if(isset($_FILES["mi_imagen"])){
            $total = count($_FILES["mi_imagen"]["name"]);

            for ($i=0; $i < $total; $i++) { 
                $imagenes = new Imagen();
                $tmp_name = $_FILES["mi_imagen"]["tmp_name"][$i];
                $name = $_FILES["mi_imagen"]["name"][$i];
echo "hola";
                $imagenes->cod_car=$carta->id;

                $imagenes->ruta=$name;
                $imagenes->save();
            }
        }
        echo "enviado";
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
        //
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
