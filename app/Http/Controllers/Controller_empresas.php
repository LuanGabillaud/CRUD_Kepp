<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller_empresas extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //controles de função empresas
        
        /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
           return view('empresas');
        }
    
        /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
        public function create()
        {
            return view('empresas_form');
        }
    
        /**
            * Store a newly created resource in storage.
            *
            * @return Response
            */
        public function store()
        {
           
        }
    
        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function show($id)
        {
           
        }
    
        /**
            * Show the form for editing the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function edit($id)
        {
            $empresa = $id;
            return view('empresa_form');
        }
    
        /**
            * Update the specified resource in storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function update($id)
        {
            $empresa = $id;
            return view('empresa_form');
        }
    
        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id)
        {/**
            $empresa = $id;
            $empresa = delete();
            return view('empresa');
        */}
    
        
}