@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-3">➕ Nova Categoria</h4>

                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nome da categoria</label>
                            <input type="text" name="name" class="form-control" placeholder="Ex: Mercado" required>
                        </div>

                        <button class="btn btn-primary w-100">
                            Salvar Categoria
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection

