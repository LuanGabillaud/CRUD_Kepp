<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Empresas;
use Illuminate\Notifications\Notifiable;

class EmpresaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    use Notifiable;

    public function showEmpresas()
    {
        $empresas = Empresas::get();
        return view('empresas', compact('empresas'));
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

        return view('dashboard');

    }

    public function edit($id)
    {
        $empresa = Empresas::where('id', $id)->first();

        return view('editar_empresa', compact('empresa'));
        
    }

    public function update(Request $request)
    {
        // dados
        $empresa = Empresas::find($request->id_empresa);
        $empresa->fill([
        'cnpj'         => $request->cnpj,
        'nome_fantasia'     => $request->nome_fantasia,
        'razao_social' => $request->razao_social,
        'email'        => $request->email,
        'telefone'      => $request->telefone,
        'endereco'     => $request->endereco,
        ])->save();

        return view('dashboard');
        
    }

    public function delete($id)
    {
        Empresas::where('id',$id)->delete(); 
        
        return view('dashboard');
    }
}
