<h1>Novo gasto</h1>

<form method="POST" action="{{ route('expenses.store') }}">
    @csrf

    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <input type="date" name="expense_date">
    <input type="number" step="0.01" name="amount" placeholder="Valor">
    <input type="text" name="description" placeholder="Descrição">

    <button>Salvar</button>
</form>

