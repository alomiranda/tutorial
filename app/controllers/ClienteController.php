<?php

class ClienteController extends BaseController {

    public function getIndex()
    {
        $clientes = Cliente::all();
        return View::make('clientes.index', array('clientes' => $clientes));
    }

    public function getCreate()
    {
        return View::make('clientes.create');
    }

    public function postCreate()
    {
        $cliente = new Cliente;

    $cliente->email = Input::get('email');

    $cliente->real_name = Input::get('real_name');
    $cliente->password = Input::get('password');

    $cliente->save();

    return Redirect::to('clientes');
    }

    public function getDelete($cliente_id){
        $cliente = Cliente::find($cliente_id);

        if(is_null($cliente)){
            return Redirect::to('clientes');
        }

        $cliente->delete();

        return Redirect::to('clientes');
    }

    public function getUpdate($cliente_id){
        $cliente = Cliente::find($cliente_id);

        if(is_null($cliente))
            return Redirect::to('clientes');

        return View::make('clientes.update') -> with('cliente', $cliente);       
    }

    public function postUpdate($cliente_id){

        $cliente = Cliente::find($cliente_id);

        if(is_null($cliente))
            return Redirect::to('clientes');

        $cliente->real_name = Input::get('real_name');
        $cliente->email = Input::get('email');

        if(Input::has('password'))
            $cliente->password = Input::get('password');

        $cliente->save();

        return Redirect::to('clientes');
    }
}