<x-layout>
    <div>
        <h1 class="text-2xl font-bold text-center mb-5">📅 Transações Mensais</h1>
    </div>
    <form action="" method="POST">
        <div class="flex flex-row items-center justify-center space-x-4 mb-5">
            <div>
                <label for="year" class="block mb-2 text-sm font-medium text-gray-900">Ano</label>
                <input type="number" id="year" placeholder="Ex: 2024"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5"
                       required/>
            </div>
            <div>
                <label for="month" class="block mb-2 text-sm font-medium text-gray-900">Mês</label>
                <select id="month"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5">
                    <option value="">Selecione o mês</option>
                    @foreach($months as $key => $month)
                        <option value="{{$key}}">{{$month}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex flex-row items-center justify-center space-x-4 mb-5">
            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">Despesas</label>
            <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">Entradas</label>
        </div>
        <div class="flex flex-row items-center justify-center space-x-4 mb-5">
            <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Exibir
            </button>
        </div>
    </form>
    <div class="flex flex-col space-y-4">
        <div class="overflow-auto rounded shadow border border-gray-200">
            <table class="min-w-full table-auto text-sm text-left">
                <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 border">Categoria</th>
                    <th class="px-4 py-2 border">Tipo</th>
                    <th class="px-4 py-2 border">Valor</th>
                    <th class="px-4 py-2 border">Data</th>
                    <th class="px-4 py-2 border">Ações</th>
                </tr>
                </thead>
                <tbody class="text-gray-600">
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">Alimentação</td>
                    <td class="px-4 py-2 border text-red-700">Despesa</td>
                    <td class="px-4 py-2 border text-red-700">- R$ 500,00</td>
                    <td class="px-4 py-2 border">14/04/2025</td>
                    <td class="px-4 py-2 border">
                        <a href="#" class="text-blue-700"><strong>Visualizar</strong></a> |
                        <a href="#" class="text-yellow-400"><strong>Editar</strong></a> |
                        <a href="#" class="text-red-700"><strong>Remover</strong></a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">Alimentação</td>
                    <td class="px-4 py-2 border text-red-700">Despesa</td>
                    <td class="px-4 py-2 border text-red-700">- R$ 500,00</td>
                    <td class="px-4 py-2 border">14/04/2025</td>
                    <td class="px-4 py-2 border">
                        <a href="#" class="text-blue-700"><strong>Visualizar</strong></a> |
                        <a href="#" class="text-yellow-400"><strong>Editar</strong></a> |
                        <a href="#" class="text-red-700"><strong>Remover</strong></a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">Alimentação</td>
                    <td class="px-4 py-2 border text-green-500">Entrada</td>
                    <td class="px-4 py-2 border text-green-500">R$ 500,00</td>
                    <td class="px-4 py-2 border">14/04/2025</td>
                    <td class="px-4 py-2 border">
                        <a href="#" class="text-blue-700"><strong>Visualizar</strong></a> |
                        <a href="#" class="text-yellow-400"><strong>Editar</strong></a> |
                        <a href="#" class="text-red-700"><strong>Remover</strong></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
</x-layout>
