@extends('layouts.default')

@section('content')

    <body class="bg-slate-800">

        <div class="flex justify-center">
            <div class="block p-6 rounded-lg shadow-lg bg-gray-900 ">
                <h1 class="text-gray-100 text-3xl text-center leading-tight font-medium mb-2">REFEIÇÕES SERVIDAS</h1>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="flex items-center justify-between pb-4">
                        <div>
                            <form action="{{ route('escolas.meals.create') }}">
                                @csrf
                                <button
                                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    type="submit">Inserir Refeições Diárias</button>
                            </form>


                        </div>

                    </div>
                    <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    DIA DA REFEIÇÃO
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    LANCHE DA MANHÃ
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ALMOÇO
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    REPETIÇÃO DO ALMOÇO
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ESTUDANTES PELA MANHÃ
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    LANCHA DA TARDE
                                </th>
                                <th scope="col" class="px-6 py-3 ">
                                    JANTA
                                </th>
                                <th scope="col" class="px-6 py-3 ">
                                    REPETIÇÃO DA JANTA
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ESTUDANTES A TARDE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    TOTAL DE ESTUDANTES DO DIA
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    AÇÕES
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($meals as $meal)

                             <tr
                                 class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                 <th scope="row"
                                     class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                     {{ $meal->days_meal }}
                                 </th>
                                 <td class="px-6 py-4">
                                     {{ $meal->snack_mornig}}
                                 </td>
                                 <td class="px-6 py-4">
                                     {{ $meal->lunch }}
                                 </td>
                                <td class="px-6 py-4">
                                     {{ $meal->lunch_repeat }}
                                </td>
                                 <td class="px-6 py-4">
                                     {{ $meal->number_students_mornig }}
                                 </td>
                                 <td class="px-6 py-4">
                                     {{ $meal->snack_afternoon}}
                                 </td>
                                 <td class="px-6 py-4">
                                     {{ $meal->dinner}}
                                 </td>
                                 <td class="px-6 py-4 uppercase">
                                     {{ $meal->dinner_repeat}}
                                 </td>
                                <td class="px-6 py-4 uppercase">
                                    {{ $meal->number_students_afternoon}}
                                </td>
                                <td class="px-6 py-4 uppercase">
                                    {{ $meal->number_students_afternoon}}
                                </td>
                                 <td class="px-6 py-4">
                                     <a href="{{ route('escolas.meals.edit', $meal->id) }}"
                                         class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                     <form action="{{ route('escolas.meals.destroy', $meal->id) }}" method="POST">
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
                                         não há refeições lançadas</h5>
                                 </div>
                             </div>

                         @endforelse

                        </tbody>
                    </table>
                </div>




            </div>
        </div>



    </body>
@endsection

</html>
