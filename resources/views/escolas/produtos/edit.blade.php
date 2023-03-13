@extends('layouts.default')

@section('content')

{{-- {{dd($adminproduto)}} --}}

    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-100">Editar produto</h1>
                </div>

                <form
                    method="POST"
                    enctype="multipart/form-data"
                    action="{{ route('escolas.produtos.update', $escolaProduto->id) }}"
                >
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Nome do produto</label>
                                <input
                                    value="{{ old('produto', $escolaProduto->produto) }}"
                                    type="text" id="produto" name="produto" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('name')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Quantidade</label>
                                <input
                                    value="{{ old('quantidade', $escolaProduto->quantidade) }}"
                                    type="text" id="quantidade" name="quantidade"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>
                            @error('quantidade')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Categoria</label>
                                <select input type="text" id="categoria" name="categoria"
                                       value="{{ old('categoria') }}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-['15px'] outline-none text-gray-700 py-2.5 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option selected>{{$escolaProduto->categoria}}</option>
                                <option value="BANDEJA">BANDEJA</option>
                                <option value="FRASCO">FRASCO</option>
                                <option value="LITRO">LITRO</option>
                                <option value="PACOTE">PACOTE</option>
                                <option value="QUILO">QUILO</option>
                                <option value="UNIDADE">UNIDADE</option>

                                </select>
                                </div>
                            @error('categoria')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Fornecedor</label>
                                <input
                                    value="{{ old('fornecedor', $escolaProduto->fornecedor) }}"
                                    type="text" id="fornecedor" name="fornecedor"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('fornecedor')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                         <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Escola</label>
                                <input type="text" id="escola_sede_id" name="escola_sede_id"
                                       value="{{ old('escola_sede_id', $escolaProduto->escola_sede_id) }}"
                                       readonly
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('escola')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Usuário</label>
                                <input type="text" id="usuario" name="usuario"
                                       value="{{old('usuario', $escolaProduto->usuario)}}"
                                       readonly
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('usuario')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Descrição</label>
                                <textarea
                                    id="descricao" name="descricao"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ old('descricao', $escolaProduto->descricao) }}</textarea>
                            </div>
                            @error('descricao')
                            <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-full">
                            <button type="submit" class="flex ml-auto text-white bg-indigo-700 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Editar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
