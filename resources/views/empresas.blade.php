<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empresa') }}
        </h2>
    </x-slot>  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 bg-white border-b border-gray-200">
                <table class="table table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">{{'CNPJ'}}</th>
                            <th scope="col">{{'Razão Social'}}</th>
                            <th scope="col">{{'Nome Fantasia'}}</th>
                            <th scope="col">{{'Telefone'}}</th>
                            <th scope="col">{{'E-mail'}}</th>
                            <th scope="col">{{'Endereço'}}</th>
                            <th class="col-lg-2 text-center" scope="col">{{'Ação'}}</th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach ($empresas as $empresa )
                      <tr >
                          <td>{{$empresa->cnpj}}</td>
                          <td>{{$empresa->razao_social}}</td>
                          <td>{{$empresa->nome_fantasia}}</td>
                          <td>{{$empresa->telefone}}</td>
                          <td>{{$empresa->email}}</td>
                          <td>{{$empresa->endereco}}</td>
                          <td class="col-lg-2 text-center">
                              <a class="btn btn-primary btn-sm" role="button" href="{{route('editar_empresa',$empresa->id)}}">{{'Editar'}}</a>
                              <a class="btn btn-danger btn-sm" role="button" href="{{route('excluir_empresa',$empresa->id)}}">{{'Excluir'}}</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
