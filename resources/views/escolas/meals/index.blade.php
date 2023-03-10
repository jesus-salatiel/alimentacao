@extends('layouts.default')

 @section('content')

 <body class="bg-slate-800">

     <div class="flex justify-center">
         <div class="block p-6 rounded-lg shadow-lg bg-gray-900 ">
             <h1 class="text-gray-100 text-2xl text-center leading-tight font-medium mb-2">Lista de Produtos</h1>


             <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                 <div class="flex items-center justify-between pb-4">
                     <div>
                         <form action="{{ route('escolas.produtos.create') }}">
                             @csrf
                             <button
                                 class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                 type="submit">Inserir Produtos</button>
                         </form>


                     </div>
                     <label for="table-search" class="sr-only">Search</label>
                     <div class="relative">
                         <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                             <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                     clip-rule="evenodd"></path>
                             </svg>
                         </div>
                         <input type="text" id="table-search"
                             class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                             placeholder="Search for items">

                     </div>
                 </div>
                 <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                     <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                         <tr>
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
                                 ESCOLA
                             </th>
                             <th scope="col" class="px-6 py-3 ">
                                 USUARIO
                             </th>
                             <th scope="col" class="px-6 py-3">
                                 AÇÃO
                             </th>
                         </tr>
                     </thead>
                     <tbody>

                         {{-- @forelse ($escolaProduto as $produto)

                             <tr
                                 class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                 <th scope="row"
                                     class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                     {{ $produto->produto }}
                                 </th>
                                 <td class="px-6 py-4">
                                     {{ $produto->quantidade }}
                                 </td>
                                 <td class="px-6 py-4">
                                     {{ $produto->categoria }}
                                 </td>
                                 <td class="px-6 py-4">
                                     {{ $produto->fornecedor }}
                                 </td>
                                 <td class="px-6 py-4">
                                     {{ $produto->descricao }}
                                 </td>
                                 <td class="px-6 py-4">
                                     {{ $produto->escola_sede_id }}
                                 </td>
                                 <td class="px-6 py-4 uppercase">
                                     {{ $produto->usuario }}
                                 </td>
                                 <td class="px-6 py-4">
                                     <a href="{{ route('escolas.produtos.edit', $produto->id) }}"
                                         class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                     <form action="{{ route('escolas.produtos.destroy', $produto->id) }}" method="POST">
                                         @method('DELETE')
                                         @csrf
                                         <button type="button" data-modal-toggle="deleteModal" id="deleteButton"
                                             class=" block font-medium text-red-600 dark:text-red-500 hover:underline ">Deletar</button>
                                     </form>
                                 </td>
                             </tr>

                         @empty

                             <div class="w-full flex items-center justify-center">
                                 <div
                                     class="w-full flex items-center justify-center max-w-sm p-6 mb-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                                     <h5
                                         class="mb-2 text-2xl font-bold uppercase text-center text-gray-900 dark:text-white">
                                         não há produtos cadastrados</h5>
                                 </div>
                             </div>

                         @endforelse --}}

                     </tbody>
                 </table>
             </div>




         </div>
     </div>



 </body>
 @endsection

</html>
