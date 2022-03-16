<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller_clientes extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //controles de função
        
        /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
            return view('clientes');
        }
    
        /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
        public function create()
        {
            return view('clientes_form');
        }
    
        /**
            * Store a newly created resource in storage.
            *
            * @return Response
            */
        public function store()
        {
            //
        }
    
        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function show($id)
        {
            $cliente = $id;
            return view('cliente');
        }
    
        /**
            * Show the form for editing the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function edit($id)
        {
            $cliente = $id;
            return view('cliente_form');
        }
    
        /**
            * Update the specified resource in storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function update($id)
        {
            $cliente = $id;
            return view('cliente');
        }
    
        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id)
        {/**
            $cliente = $id;
            $cliente = delete();
            return view('cliente');
        */}
    
        
}