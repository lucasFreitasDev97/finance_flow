@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-3">➖ Novo Gasto</h4>

                    <form method="POST" action="{{ route('expenses.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <select name="category_id" class="form-select" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            <div class="form-text">
                                Não achou a categoria?
                                <a href="{{ route('categories.create') }}">Criar nova</a>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Data</label>
                            <input type="date" name="expense_date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Valor</label>
                            <input type="number" step="0.01" name="amount" class="form-control" placeholder="Ex: 35.90" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input type="text" name="description" class="form-control" placeholder="Opcional">
                        </div>

                        <button class="btn btn-danger w-100">
                            Salvar Gasto
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
