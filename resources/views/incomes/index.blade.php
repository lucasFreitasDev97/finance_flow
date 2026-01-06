@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">💰 Ganhos do mês</h4>

        <a href="{{ route('incomes.create') }}" class="btn btn-success">
            ➕ Novo Ganho
        </a>
    </div>

    <form class="row g-2 mb-4">
        <div class="col-md-2">
            <label class="form-label">Mês</label>
            <input type="number" class="form-control" name="month" value="{{ $month }}">
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

    <div class="card shadow-sm mb-4 border-success">
        <div class="card-body text-success">
            <h5>Total recebido</h5>
            <h3>R$ {{ number_format($total, 2, ',', '.') }}</h3>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th class="text-end">Valor</th>
                </tr>
                </thead>
                <tbody>
                @forelse($incomes as $income)
                    <tr>
                        <td>{{ $income->income_date->format('d/m/Y') }}</td>
                        <td>{{ $income->description ?? '-' }}</td>
                        <td class="text-end text-success">
                            R$ {{ number_format($income->amount, 2, ',', '.') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">
                            Nenhum ganho registrado
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

