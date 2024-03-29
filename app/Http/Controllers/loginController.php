<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\User;
use Validator;

class loginController extends Controller
{
    
    public function index()
    {

       /* // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return view("auth.paginaLogin");
        }
        // Si no hay sesión activa mostramos el formulario*/
        
        return view("auth.login");
    }

	
	public function login()
	{
		$this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //return "hola";

        $this->validate($request,[

            'correo_name'=>'required|string|min:3',
            'contrasenia'=>'required',


        ]);

        $whitMail = ['email' => $request->correo_name, 'password' => $request->contrasenia];
        $whitUser = ['username' => $request->correo_name, 'password' => $request->contrasenia];

        
        if (Auth::attempt($whitMail) || Auth::attempt($whitUser)) {



            
            return 'login access';
        } else {
            return 'no encontrado';
        }
       
    }




     public function cerrarSesion()
     {

           // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return "cerraste la sesion";


     }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
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
