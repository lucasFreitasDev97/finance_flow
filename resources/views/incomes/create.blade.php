@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-3">💰 Novo Ganho</h4>

                    <form method="POST" action="{{ route('incomes.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Data</label>
                            <input type="date" name="income_date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Valor</label>
                            <input type="number" step="0.01" name="amount" class="form-control" placeholder="Ex: 2500.00" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input type="text" name="description" class="form-control" placeholder="Salário, Extra, Freelance...">
                        </div>

                        <button class="btn btn-success w-100">
                            Salvar Ganho
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

