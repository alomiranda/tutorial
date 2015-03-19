<?php

class ClienteController extends BaseController {

    public function  __construct(){


         $this->beforeFilter('auth',  array('except' => array('getLogin', 'postLogin')));
    }


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

    $rules = array(

        'real_name' => 'required|max:50',
        'email' => 'required|email|unique:clientes',
        'password' => 'required|min:5',
    );

    $validation = Validator::make(Input::all(), $rules);

    if($validation->fails()){
        return Redirect::back()->withInput();
    }    


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