<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Empresas;
use App\Models\Clientes;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showEmpresas()
    {
        $empresas = Empresas::get();
        return view('empresa', compact('empresas'));
    }

    public function showClientes()
    {
        return view('cliente');
    }

    public function cadEmpresa(Request $request)
    {
        
    }

    public function cadCliente(Request $request)
    {
        
    }
}
