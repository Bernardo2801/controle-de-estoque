<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página não encontrada</title>

    <!-- Tailwind -->
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 h-screen flex flex-col justify-between">

    <div class="container mx-auto text-center px-8 py-8">
        <img class="rounded-xl mx-auto mb-8 w-[500px]" src="/img/stock-404.png" alt="Logo Sis Emendas">
        <h1 class="text-5xl font-bold text-gray-800 mb-4">404 - Página não encontrada</h1>
        <div class="p-4 mb-4 text-md text-red-800 rounded-lg" role="alert">
            <span class="font-medium">Oops!</span> A página que você está procurando não foi encontrada.
        </div>
        <a href="{{ route('welcome') }}">
            <button class="items-center px-4 py-2 bg-[#209D5C] border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#17693e] hover:scale-105 focus:bg-[#209D5C] active:bg-[#114d2d] focus:outline-none transition ease-in-out duration-300">Voltar</button>
        </a>
    </div>

</body>
</html>
