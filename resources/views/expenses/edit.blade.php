@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-3">✏️ Editar Gasto</h4>

                    <form method="POST" action="{{ route('expenses.update', $expense) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <select name="category_id" class="form-select">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @selected($expense->category_id == $category->id)>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Data</label>
                            <input type="date" name="expense_date" class="form-control"
                                   value="{{ $expense->expense_date->format('Y-m-d') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Valor</label>
                            <input type="number" step="0.01" name="amount"
                                   class="form-control" value="{{ $expense->amount }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input type="text" name="description"
                                   class="form-control" value="{{ $expense->description }}">
                        </div>

                        <button class="btn btn-primary w-100">
                            Salvar Alterações
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection

