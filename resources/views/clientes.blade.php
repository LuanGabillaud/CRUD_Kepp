<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">{{'CPF'}}</th>
                                <th scope="col">{{'Nome Completo'}}</th>
                                <th scope="col">{{'Telefone'}}</th>
                                <th scope="col">{{'E-mail'}}</th>
                                <th scope="col">{{'Endereço'}}</th>
                                <th scope="col">{{'Ação'}}</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente )
                          <tr>
                              <td>{{$cliente->cpf}}</td>
                              <td>{{$cliente->nome}}</td>
                              <td>{{$cliente->telefone}}</td>
                              <td>{{$cliente->email}}</td>
                              <td>{{$cliente->endereco}}</td>
                              <td class="col-lg-2 text-center">
                              <a class="btn btn-primary btn-sm" role="button" href="{{route('editar_cliente',$cliente->id)}}">{{'Editar'}}</a>
                              <a class="btn btn-danger btn-sm" role="button" href="{{route('excluir_cliente',$cliente->id)}}">{{'Excluir'}}</a>
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