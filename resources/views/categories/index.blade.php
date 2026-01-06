@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="d-flex justify-content-between mb-3">
                <h4>Categorias</h4>
                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                    ➕ Nova Categoria
                </a>
            </div>

            <div class="card shadow-sm">
                <ul class="list-group list-group-flush">
                    @forelse($categories as $category)
                        <li class="list-group-item">
                            {{ $category->name }}
                        </li>
                    @empty
                        <li class="list-group-item text-muted text-center">
                            Nenhuma categoria cadastrada
                        </li>
                    @endforelse
                </ul>
            </div>

        </div>
    </div>

@endsection

