<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Aparelho;
use App\Usuario_Aparelho;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Usuario::with('aparelhos')->paginate(5);

        return view('usuarios', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aparelhos = Aparelho::all();
        return view('formUsuario', compact('aparelhos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Usuario();
        $user->nome_usuario = $request->input('nome_usuario');
        $user->login = $request->input('login_usuario');
        $user->email = $request->input('email_usuario');
        $user->senha = $request->input('senha_usuario');
        $user->tempo_expiracao_senha = $request->input('validade_senha_usuario');
        $user->cod_autorizacao = $request->input('codg_auth');
        $user->status_usuario = $request->input('status_usuario');
        $user->save();
        return redirect('/');
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
        $user = Usuario::find($id);
        if(isset($user)){
            return view('editUsuario', compact(['user']));
        }
        return redirect('/');
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
        $user = Usuario::find($id);
        if(isset($user)){
            $user->nome_usuario = $request->input('nome_usuario');
            $user->login = $request->input('login_usuario');
            $user->email = $request->input('email_usuario');
            $user->senha = $request->input('senha_usuario');
            $user->tempo_expiracao_senha = $request->input('validade_senha_usuario');
            $user->cod_autorizacao = $request->input('codg_auth');
            $user->status_usuario = $request->input('status_usuario');
            $user->save();
            return redirect('/');    
        }
        return redirect('/');
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
