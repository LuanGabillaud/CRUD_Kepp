<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClienteController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showClientes()
    {
        $clientes = Clientes::get();
        return view('clientes', compact('clientes'));
    }

    public function create(Request $request)
    {
        Clientes::create([
            'cpf'         => $request->cpf,
            'nome'     => $request->nome,
            'email'        => $request->email,
            'telefone'      => $request->telefone,
            'endereco'     => $request->endereco,
        ]);
        
        return view('dashboard');
    }

    public function edit($id)
    {
        $cliente = Clientes::where('id', $id)->first();

        return view('editar_cliente', compact('cliente'));
    }

    public function update(Request $request)
    {
        // dados
        $cliente = Clientes::find($request->id_cliente);
        $cliente->fill([
            'cpf'         => $request->cpf,
            'nome'     => $request->nome,
            'email'        => $request->email,
            'telefone'      => $request->telefone,
            'endereco'     => $request->endereco,
        ])->save();

        return view('dashboard');
    }

    public function delete($id)
    {
        Clientes::where('id',$id)->delete(); 
        
        return view('dashboard');
    }
}
