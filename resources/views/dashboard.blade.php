<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container marketing">

       
                        <!-- START THE FEATURETTES -->
                
                        <hr class="featurette-divider">        
                        <div class="row featurette">
                          <div class="col-md-7">
                            <h2 class="featurette-heading">Para Empresas:<span class="text-muted">Crie o seu registro e veja os seus clientes.</span></h2>
                            <p class="lead">Clique a baixo para acessar o formulario.</p><a class="btn btn-outline-secondary"  href="{{route('cad_empresa')}}">Cadastre sua Empresa</a>
                          </div>
                          <div class="col-md-5">
                            <img class="featurette-image img-fluid mx-auto" src="http://localhost/crud/img/empresas_500x500.png" alt="Generic placeholder image">
                          </div>
                        </div>
                
                        <hr class="featurette-divider">
                
                        <div class="row featurette">
                          <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading">Para Clientes:<span class="text-muted">Crie o seu registro para ser membro das empresas para conseguir descontos.</span></h2>
                            <p class="lead">Clique a baixo para acessar o formulario.</p><a class="btn btn-outline-secondary" href="{{route('cad_cliente')}}"">Cadastre seu Cliente</a>
                          </div>
                          <div class="col-md-5 order-md-1">
                            <img class="featurette-image img-fluid mx-auto" src="http://localhost/crud/img/clientes_500x500.png" alt="Generic placeholder image">
                          </div>
                        </div>
                        
                        <hr class="featurette-divider">
                
                        <!-- /END THE FEATURETTES -->
                
                      </div><!-- /.container -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
