<x-layout>
    <section class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4 text-blue-700">Nova Categoria</h2>
        <form action="{{route('categories.store')}}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" id="name" name="name" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Tipo</label>
                <select id="type" name="type" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Selecione o Tipo</option>
                        @foreach($categoryTypes as $index => $categoryType)
                        <option value="{{$index}}">{{$categoryType}}</option>
                        @endforeach
                </select>
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

