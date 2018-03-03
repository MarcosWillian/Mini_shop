<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
    	$registros = User::orderBy('id', 'desc')->get();
    	return view('usuario.listar', ['usuarios' => $registros]);
    }


    public function cadastrar()
    {
    	return view('usuario.cadastrar');
    }


    public function salvar(Request $request)
    {
    	if( !empty($request->file('imagem') ) ){
            $image = $request->file('imagem');
            $extension = $image->getClientOriginalExtension(); // Pega a extensão

            $newName = 'user_' . time() . '.' . $extension; 

            /* Move a imagem */
            $folder = 'usuarios/';
            $request->file('imagem')->move( public_path().'/upload/'.$folder, $newName);
            // REDIMENCIONAR USAR IMAGE::MAKE()->FIT()
        }
        else {
            $newName = ''; // Deixa o valor NULL
        }

    	$user = new User;
        $user->nome     = $request->nome;
        $user->email 	= $request->email;
        $user->endereco = $request->endereco;
        $user->foto     = $newName;
        $user->save();

        return redirect()->route('usuarios')->with('message', 'Usuário cadastrado com sucesso!');
    }


    public function editar($id)
    {
        $usuario = User::find($id);
        return view('usuario.editar',compact('usuario'));
    }


    public function atualizar(Request $request, $id)
    {
        $user = User::find($id);

        if( !empty($request->file('imagem') ) ){
            $imagemOld = $user->foto;

            $image = $request->file('imagem');
            $extension = $image->getClientOriginalExtension(); // Pega a extensão

            $newName = 'user_' . time() . '.' . $extension;             

            /* Move a imagem */
            $folder = 'usuarios/';
            $request->file('imagem')->move( public_path().'/upload/'.$folder, $newName);
            // REDIMENCIONAR USAR IMAGE::MAKE()->FIT()
        }
        else {
            $newName = $user->foto; // Coloca a foto existente do BD
        }

        /* Apaga a foto antiga do servidor */
        if( !empty($user->foto) ){
            if( file_exists( public_path().'/upload/usuarios/'.$user->foto ) ){
                unlink( public_path().'/upload/usuarios/'.$user->foto );
            }                
        }
        
        /* Atualiza o usuário */
        $user->nome     = $request->nome;
        $user->email    = $request->email;
        $user->endereco = $request->endereco;
        $user->foto     = $newName;
        $user->save();

        return redirect()->route('usuarios')->with('message', 'Usuário atualizado com sucesso!');
    }

    public function deletar($id)
    {
        $user = User::find($id);

        if( !empty($user->foto) ){
            if( file_exists( public_path().'/upload/usuarios/'.$user->foto ) ){
                unlink( public_path().'/upload/usuarios/'.$user->foto );
            }                
        }
        
        $user->delete();
        return redirect()->route('usuarios')->with('message', 'Usuário deletado com sucesso!');
    }

}
