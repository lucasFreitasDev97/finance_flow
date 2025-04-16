<x-layout>
    <section class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4 text-blue-700">Nova Transação</h2>
        <form action="{{ route('transactions.store') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Nome -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" id="name" name="name" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Valor -->
            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700">Valor (R$)</label>
                <input type="number" step="0.01" id="amount" name="amount" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Tipo -->
            <div>
                <label for="type" class="block text-sm font-medium text-gray-700">Tipo</label>
                <select id="type" name="type" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Selecione</option>
                    <option value="income">Receita</option>
                    <option value="expense">Despesa</option>
                </select>
            </div>

            <!-- Categoria -->
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Categoria</label>
                <select id="category_id" name="category_id" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Data -->
            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Data</label>
                <input type="date" id="date" name="date" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Observações -->
            <div>
                <label for="notes" class="block text-sm font-medium text-gray-700">Observações</label>
                <textarea id="notes" name="notes" rows="3"
                          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <!-- Botões -->
            <div class="flex justify-end space-x-2">
                <button type="reset"
                        class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Cancelar</button>
                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Salvar</button>
            </div>
        </form>
    </section>
</x-layout>

