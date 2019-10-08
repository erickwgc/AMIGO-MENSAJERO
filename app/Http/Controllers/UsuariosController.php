<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::all();
        return view("usuarios.index",compact("usuarios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("usuarios.create");      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nom_usu'=>'required']);
        $usuarios=new Usuario();
        $usuarios->nom_usu=$request->nom_usu;
        $usuarios->ape_usu=$request->ape_usu;
        $usuarios->correo=$request->correo;
        $usuarios->fecha_nac=$request->fecha_nac;
        $usuarios->tel_usu=$request->tel_usu;
        $usuarios->usuario=$request->usuario;
        $usuarios->contrasenia=$request->contrasenia;
        $usuarios->save();
        return redirect("/usuarios");
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=Usuario::findOrFail($id);
        return view("usuarios.show",compact("usuario"));
    }
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Usuario::findOrFail($id);
        return view("usuarios.edit",compact("usuario"));
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
        $usuario=Usuario::findOrFail($id);
        $usuario->update(($request->all()));
        return redirect("/usuarios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        $usuario=Usuario::findOrFail($id);
        $usuario->delete();
        return redirect("/usuarios");
    }
}
