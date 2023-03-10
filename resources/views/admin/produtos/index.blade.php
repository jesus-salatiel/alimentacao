@extends('layouts.default')

@section('content')

<body class="bg-slate-800">
<div class="flex justify-center">
    <div class="block p-6 rounded-lg shadow-lg bg-gray-900 ">
        <h1 class="text-gray-100 text-2xl text-center leading-tight font-medium mb-2">Lista de Produtos</h1>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex items-center justify-between pb-4">
        <div>
            <form
            action="{{ route('admin.produtos.create') }}">
                @csrf
                 <button class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="submit">Inserir Produtos</button>
            </form>


        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">

        </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">

                <th scope="col" class="px-6 py-3">
                    NOME DO PRODUTO
                </th>
                <th scope="col" class="px-6 py-3">
                    QUANTIDADE
                </th>
                <th scope="col" class="px-6 py-3">
                    CATEGORIA
                </th>
                <th scope="col" class="px-6 py-3">
                    FORNECEDOR
                </th>
                <th scope="col" class="px-6 py-3">
                    DESCRIÇÃO
                </th>
                <th scope="col" class="px-6 py-3">
                    escola
                </th>
                 <th scope="col" class="px-6 py-3">
                    AÇÃO
                </th>
            </tr>
        </thead>
        <tbody>

                @forelse ($adminproduto as $produto )
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                    <div class="flex items-center">
                        {{-- <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> --}}
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                    {{-- <td class="px-6 py-4 font-bold text-gray-200">
                        {{$produto->id}}
                    </td> --}}
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$produto->produto}}
                    </th>
                    <td class="px-6 py-4">
                        {{$produto->quantidade}}
                    </td>
                    <td class="px-6 py-4">
                        {{$produto->categoria}}
                    </td>
                    <td class="px-6 py-4">
                        {{$produto->fornecedor}}
                    </td>
                    <td class="px-6 py-4">
                        {{$produto->descricao}}
                    </td>
                    <td class="px-6 py-4">
                        {{$produto->escola_sede_id}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.produtos.edit', $produto->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        <form
                            action="{{ route('admin.produtos.destroy', $produto->id)  }}"
                            method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="button" data-modal-toggle="deleteModal" id="deleteButton" class=" block font-medium text-red-600 dark:text-red-500 hover:underline ">Deletar</button>
                        </form>
                        <!-- Main modal -->
                            <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                        <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
                                        <div class="flex justify-center items-center space-x-4">
                                            <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                No, cancel
                                            </button>
                                            <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                Yes, I'm sure
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </td>
                </tr>

                @empty

                <h1>Não existem produtos cadastros</h1>

                @endforelse

        </tbody>
    </table>
</div>




    </div>
</div>


</body>
@endsection

</html>
