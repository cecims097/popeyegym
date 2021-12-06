<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Home;
use Hash;

class HomeController extends Controller
{

    
    public function show(Request $request)
    {

        return view('home');


    }

    
    public function store(Request $request)
    {
     $reserva = new Home();
     $fecha="";
     $valor="Lo sentimos la solicitud no puede ser procesada por que la fecha es menor a la actual";
     $date=date('d/m/Y');
      $reserva->numero = $request->input('numero');
      $reserva->nombre = $request->input('nombre');
      $reserva->fecha = $request->input('fecha');
      $reserva->comentario = $request->input('comentario');
      $request->$fecha= $request->input('fecha');
      
      
        $reserva->save();
        return view ('guardado');
    


    }


  //  public function create()
  //  {
        
 //       return view('reservas.create');
 //   }

 //   public function quienessomos()
 //   {
 //       return view ('Qsomos');
 //   }
//    public function welcome(){
//        return view ('welcome');
//    }
 }
