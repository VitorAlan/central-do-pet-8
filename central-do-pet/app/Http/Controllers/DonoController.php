<?php

namespace App\Http\Controllers;

use App\Models\dono;
use Illuminate\Http\Request;

class DonoController extends Controller
{
    public function listar() {
        $donos = dono::all();
        return view('dono/listaDonos', ['donos' => $donos]);
    }

    public function editar(Request $request) {
        $dono = dono::find($request->id);
        return view('dono/editarDono', ['dono' => $dono]);
    }

    public function prepararAdicionar(){
        return view('dono/prepararAdicionarDono');
    }


    public function adicionar(Request $request) {
        $dono = new dono();
        $dono-> pet_id = $request-> pet_id;
        $dono-> cpf = $request-> cpf;
        $dono-> nome = $request-> nome;
        $dono-> contato = $request-> contato;
        $dono-> endereco = $request-> endereco;
        $dono-> sexo = $request-> sexo;
        $dono-> email = $request-> email;
        $dono-> data_de_nascimento -> $request-> data_de_nascimento;
        $dono -> dono::save();
        return redirect("/dono/donos");
    }

    public function atualizar(Request $request){
        $dono = dono::find($request->id);
        $dono-> pet_id = $request-> pet_id;
        $dono-> cpf = $request-> cpf;
        $dono-> nome = $request-> nome;
        $dono-> contato = $request-> contato;
        $dono-> endereco = $request-> endereco;
        $dono-> sexo = $request-> sexo;
        $dono-> email = $request-> email;
        $dono-> data_de_nascimento -> $request-> data_de_nascimento;
        $dono-> dono::update();
        return redirect("/dono/donos");
    }

    public function remover(Request $request){
        $dono = dono::find($request->id);
        $dono-> dono::delete();
        return redirect("/dono/donos");
    }
}
