<?php 
 
namespace Alonso\Prueba\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Prueba extends Facade {
 
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() 
    { 
        return 'Prueba'; 
    }
 
}