<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Empresa') }}
        </h2>
    </x-slot>  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form id="cadadstro_empresa" action="{{route('cadastrar_empresa')}}" method="POST">
                    @csrf
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-3">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
                    </div>
                    <div class="mb-3">
                        <label for="razao_social" class="form-label">Razão Social</label>
                        <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Razão Social">
                    </div>
                    <div class="mb-3">
                        <label for="nome_fantasia" class="form-label">Nome Fantasia</label>
                        <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Nome Fantasia">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereco</label>
                        <textarea class="form-control" id="endereco" name="endereco" rows="3"></textarea>
                    </div>
                    <div class="col-auto float-right">
                        <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                        <input type="reset" class="btn btn-warning mr-2 mb-3" value="Limpar">
                        <button type="button" class="btn btn-danger ml-6 mb-3" onClick="history.go(-1)">Cancelar</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
