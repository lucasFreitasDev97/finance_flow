@extends('layouts.default')
@section('content')
    {{--Contents here--}}
    <div class="items-center">
        <h1>Finance Flow</h1>
        <smal>v.1</smal>
        <p>
            <em>
                <strong>Tenha o controle do seu dinheiro</strong>
            </em>
        </p>
    </div>
    <nav>
        <div>
            <ul>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Transações</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div>
            <div class="items-center">
                <h2>Transações Anuais</h2>
            </div>
            <div class="items-center">
                <form action="#">
                    <div class="input-separate">
                        <label for="year">Ano</label>
                        <input type="number" name="year" id="year">
                        <button type="submit">Exibir</button>
                    </div>

                </form>
            </div>
            <table>
                <thead>
                    <th>#</th>
                    <th>Transação</th>
                    <th>Tipo</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                    <th>Ano</th>
                    @foreach($months as $index => $month)
                        <th>{{$month}}</th>
                    @endforeach
                </thead>
            </table>
        </div>
    </main>
@endsection
@section('scripts')
    {{--Scripts here--}}
@endsection
