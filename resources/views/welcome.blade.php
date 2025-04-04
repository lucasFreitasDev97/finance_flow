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
                <li>Despesas</li>
                <li>Recebidos</li>
            </ul>
        </div>
    </nav>
    <main>
        <div>
            <div class="items-center">
                <h2>Transações Anuais</h2>
            </div>
            <table>
                <thead>
                    <th>Transação</th>
                    <th>Categoria</th>
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
