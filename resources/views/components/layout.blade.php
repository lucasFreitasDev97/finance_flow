<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Flow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">
<!-- Cabeçalho -->
<header class="bg-blue-700 text-white p-4 flex items-center justify-between shadow-md">
    <h1 class="text-2xl font-bold"><a href="/">💰 Finance Flow</a></h1>
    <nav class="space-x-4">
        <a href="{{route('categories.index')}}" class="hover:underline">Categorias</a>
        <a href="#" class="hover:underline">Transações</a>
    </nav>
</header>

<!-- Conteúdo principal -->
<main class="flex-1 p-6 overflow-x-auto">
    @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 dark:text-green-400" role="alert">
            <span class="font-medium">{{session('success')}}</span>
        </div>
    @endif
    @if(session('error'))
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:text-red-400" role="alert">
            <span class="font-medium">{{session('error')}}</span>
        </div>
    @endif
    {{ $slot }}
</main>

<!-- Rodapé -->
<footer class="bg-blue-700 text-white p-4 text-center mt-auto">
    <p>&copy; 2025 Finance Flow. Todos os direitos reservados.</p>
</footer>
</body>
</html>
