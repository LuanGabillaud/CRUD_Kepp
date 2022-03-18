<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empresa') }}
        </h2>
    </x-slot>  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 bg-white border-b border-gray-200">
                    <form id="cadadstro_empresa">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" id="CNPJ" name="cnpj" placeholder="CNPJ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Razão Social</label>
                        <input type="email" class="form-control" id="razao_social" name="razao_social" placeholder="Razão Social">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome Fantasia</label>
                        <input type="email" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Nome Fantasia">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                        <input type="email" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Endereco</label>
                        <textarea class="form-control" id="endereco" name="endereco" rows="3"></textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
