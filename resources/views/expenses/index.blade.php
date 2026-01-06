@extends('layouts.app')

@section('content')

    {{-- TOPO --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">➖ Gastos do mês</h4>

        <a href="{{ route('expenses.create') }}" class="btn btn-danger">
            ➕ Novo Gasto
        </a>
    </div>

    {{-- FILTRO --}}
    <form class="row g-2 mb-4">
        <div class="col-md-2">
            <label class="form-label">Mês</label>
            <input type="number" class="form-control" name="month" value="{{ $month }}" min="1" max="12">
        </div>

        <div class="col-md-2">
            <label class="form-label">Ano</label>
            <input type="number" class="form-control" name="year" value="{{ $year }}">
        </div>

        <div class="col-md-2 d-flex align-items-end">
            <button class="btn btn-primary w-100">
                Filtrar
            </button>
        </div>
    </form>

    {{-- TOTAL --}}
    <div class="card shadow-sm mb-4 border-danger">
        <div class="card-body text-danger">
            <h5 class="mb-1">Total gasto no mês</h5>
            <h3 class="mb-0">
                R$ {{ number_format($total, 2, ',', '.') }}
            </h3>
        </div>
    </div>

    {{-- TABELA --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header fw-bold">
            Lista de gastos
        </div>

        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                <tr>
                    <th>Data</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th class="text-end">Valor</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($expenses as $expense)
                    <tr>
                        <td>{{ $expense->expense_date->format('d/m/Y') }}</td>
                        <td>{{ $expense->category->name }}</td>
                        <td>{{ $expense->description ?? '-' }}</td>
                        <td class="text-end text-danger">
                            R$ {{ number_format($expense->amount, 2, ',', '.') }}
                        </td>
                        <td class="text-center">
                            <a href="{{ route('expenses.edit', $expense) }}"
                               class="btn btn-sm btn-outline-primary">
                                ✏️
                            </a>

                            <form method="POST"
                                  action="{{ route('expenses.destroy', $expense) }}"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button
                                    onclick="return confirm('Deseja excluir este gasto?')"
                                    class="btn btn-sm btn-outline-danger">
                                    🗑️
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            Nenhum gasto registrado neste mês
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- RESUMO POR CATEGORIA --}}
    <div class="card shadow-sm">
        <div class="card-header fw-bold">
            Gastos por categoria
        </div>

        <ul class="list-group list-group-flush">
            @foreach($byCategory as $category => $value)
                <li class="list-group-item d-flex justify-content-between">
                    {{ $category }}
                    <strong>R$ {{ number_format($value, 2, ',', '.') }}</strong>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
