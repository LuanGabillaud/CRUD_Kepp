<?php

namespace App\Http\Controllers\EmpresasController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Empresas;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showEmpresas()
    {
        $empresas = Empresas::get();
        return view('empresa', compact('empresas'));
    }

    public function create(Request $request)
    {
        // dados
        Empresas::create([
            'cnpj'         => $request->cnpj,
            'nome_fantasia'     => $request->nome_fantasia,
            'razao_social' => $request->razao_social,
            'email'        => $request->email,
            'telefone'      => $request->telefone,
            'endereco'     => $request->endereco,
        ]);

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
