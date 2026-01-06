@extends('layouts.app')

@section('content')

    {{-- FILTRO + AÇÕES --}}
    <div class="row align-items-end mb-4">
        <div class="col-md-6">
            <form class="row g-2">
                <div class="col-md-4">
                    <input type="number" class="form-control" name="month" value="{{ $month }}" min="1" max="12">
                </div>
                <div class="col-md-4">
                    <input type="number" class="form-control" name="year" value="{{ $year }}">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary w-100">
                        Filtrar
                    </button>
                </div>
            </form>
        </div>

        <div class="col-md-6 text-end mt-3 mt-md-0">
            <a href="{{ route('incomes.create') }}" class="btn btn-success me-2">
                ➕ Novo Ganho
            </a>

            <a href="{{ route('expenses.create') }}" class="btn btn-danger">
                ➖ Novo Gasto
            </a>

            <a href="{{ route('categories.index') }}" class="btn btn-primary">
                🗂️ Categorias
            </a>
        </div>
    </div>

    {{-- CARDS --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-success">
                <div class="card-body text-success">
                    <h5>Receitas</h5>
                    <h3>R$ {{ number_format($totalIncomes, 2, ',', '.') }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-danger">
                <div class="card-body text-danger">
                    <h5>Despesas</h5>
                    <h3>R$ {{ number_format($totalExpenses, 2, ',', '.') }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm {{ $balance >= 0 ? 'border-success' : 'border-danger' }}">
                <div class="card-body {{ $balance >= 0 ? 'text-success' : 'text-danger' }}">
                    <h5>Saldo</h5>
                    <h3>R$ {{ number_format($balance, 2, ',', '.') }}</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- GASTOS POR CATEGORIA --}}
    <div class="card shadow-sm">
        <div class="card-header fw-bold">
            Gastos por categoria
        </div>
        <ul class="list-group list-group-flush">
            @forelse($expensesByCategory as $category => $value)
                <li class="list-group-item d-flex justify-content-between">
                    {{ $category }}
                    <strong>R$ {{ number_format($value, 2, ',', '.') }}</strong>
                </li>
            @empty
                <li class="list-group-item text-center text-muted">
                    Nenhum gasto registrado neste mês
                </li>
            @endforelse
        </ul>
    </div>

@endsection
