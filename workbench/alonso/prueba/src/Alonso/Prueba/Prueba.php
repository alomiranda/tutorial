<?php namespace Alonso\Prueba;
 
 use Illuminate\Support\Facades\View;

class Prueba {
 
  public function saludo()
    {
 
        return "Este es mi primer paquete";
 
    }
 
    public function vistas()
    {
 
        return View::make('prueba::hola');
 
    }
 
}