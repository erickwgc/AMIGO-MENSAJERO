<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable=["nom_usu", "ape_usu", "correo","fecha_nac","tel_usu","dir_usu","usuario","contrasenia"];
}
