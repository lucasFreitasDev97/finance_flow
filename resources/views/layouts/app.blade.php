<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão Financeira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            💰 Gestão Financeira
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('expenses.index') }}">
                        Gastos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('incomes.index') }}">
                        Ganhos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">
                        Categorias
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<div class="container">
    @yield('content')
</div>

</body>
</html>

