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

    public function edit(Request $request)
    {
        
    }

    public function update(Request $request)
    {
        
    }

    public function delete(Request $request)
    {
        
    }
}
