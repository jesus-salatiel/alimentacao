@extends('layouts.default')

@section('title', 'Número de Refeições')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-5 mx-auto">
            <div class="lg:w-3/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-1">
                    <h1 class="text-3xl font-medium title-font mb-1 text-gray-100">Quantidade de Refeições</h1>
                </div>

                <form enctype="multipart/form-data" method="POST" action="{{ route('escolas.meals.store') }}">
                    @csrf
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/3">
                            <div class="flex">
                                <label for="name" class="leading-7 text-2xl text-gray-100">Data da Refeição</label>
                                <input value="{{('meals') }}"
                                type="text"
                                id="days_meal"
                                name="days_meal"
                                datepicker
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                >
                            </div>
                            @error('days_meal')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="p-2 w-1/12">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Lanche da manhã</label>
                                <input type="text" id="snack_mornig" name="snack_mornig" value="{{ old('snack_mornig') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>
                            @error('snack_mornig')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/12">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Almoço</label>
                                <input type="text" id="lunch" name="lunch" value="{{ old('lunch') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('lunch')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/12">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Repetição Almoço</label>
                                <input type="text" id="lunch_repeat" name="lunch_repeat" value="{{ old('lunch_repeat') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('lunch_repeat')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/12">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Nº de Estudantes pela
                                    Manhã</label>
                                <input type="text" id="number_students_mornig" name="number_students_mornig" value="{{ old('number_students_mornig') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('number_students_mornig')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/12">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Lanche Da Tarde</label>
                                <input type="text" id="snack_afternoon" name="snack_afternoon" value="{{ old('snack_afternoon') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('snack_afternoon')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/12">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Janta</label>
                                <input type="text" id="dinner" name="dinner" value="{{ old('dinner') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('dinner')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/12">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Repetição da Janta</label>
                                <input type="text" id="dinner_repeat" name="dinner_repeat" value="{{ old('dinner_repeat') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('dinner_repeat')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/12">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Estudantes a Tarde</label>
                                <input type="text" id="number_students_afternoon" name="number_students_afternoon" value="{{ old('number_students_afternoon') }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('number_students_afternoon')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="p-2 w-1/12">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-100">Total Estudantes</label>
                                <input type="text" id="fornecedor" name="fornecedor" value="{{() }}"
                                    readonly
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('fornecedor')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div> --}}


                        <div class="p-2 w-full">
                            <button type="submit"
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                                Adicionar
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
