<h1>Gastos do mês</h1>

<form>
    <input type="number" name="month" value="{{ $month }}" min="1" max="12">
    <input type="number" name="year" value="{{ $year }}">
    <button>Filtrar</button>
</form>

<h2>Total do mês: R$ {{ number_format($total, 2, ',', '.') }}</h2>

<h3>Por categoria</h3>
<ul>
    @foreach($byCategory as $category => $value)
        <li>{{ $category }}: R$ {{ number_format($value, 2, ',', '.') }}</li>
    @endforeach
</ul>

<a href="{{ route('expenses.create') }}">Novo gasto</a>
