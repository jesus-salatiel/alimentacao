<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>
</head>
<body class="bg-slate-900">
    <header class="text-gray-100">
        <div class="container mx-auto flex justify-between items-center p-5 items-center">
            <a href="{{route('dashboard')}}" class="flex title-font font-medium items-center text-gray-100">
                <span class="ml-3 text-xl">Painel de Controle</span>
            </a>

            </div>
        </div>
    </header>

    @yield('content')


    {{-- <footer class="text-gray-600">

        <div class="bg-gray-100 abs">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">Informática Educativa
                    <a href="#" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">@informaticaeducativa</a>
                </p>
                <span class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">Secreataria de Municipal de Educação de Caraguatatuba - SP</span>
            </div>
        </div>
    </footer> --}}

</body>
</html>
