<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Fluxo Financeiro</title>
</head>
<body>
    @include('layouts.header')
    @include('layouts.nav')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
    <script>
        @yield('scripts')
    </script>
</body>
</html>
