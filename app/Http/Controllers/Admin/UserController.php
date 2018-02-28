<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	$registros = User::orderBy('id', 'desc');
    	return view('usuario.listar', ['usuarios' => $registros]);
    }


    public function cadastrar()
    {
    	return view('usuario.cadastrar');
    }


    public function salvar(Request $request)
    {
    	/*
    	if( !empty($request->file('file') ) ){

    		$image = $request->file('file');
    		$extension = $image->getClientOriginalExtension(); // Pega a extensão

            $fileName = 'user_' . time() . '.' . $extension; 
            $Path = public_path('upload/users/'.$id.'/');
    		
    	}
    	*/

    	$user = new User;
        $user->nome     = $request->nome;
        $user->email 	= $request->email;
        $user->endereco = $request->endereco;
        $user->foto     = $request->foto;
        $user->save();

        return redirect()->route('usuarios')->with('message', 'Usuário cadastrado com sucesso!');
    }


    public function editar()
    {
    	return view('usuario.editar');
    }

}
