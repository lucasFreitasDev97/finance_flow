@extends('layouts.default')
@section('content')
    {{--Contents here--}}
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
