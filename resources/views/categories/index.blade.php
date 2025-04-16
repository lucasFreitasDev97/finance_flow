<x-layout>
    <div>
        <a href="{{route('categories.form')}}" class="px-4 py-2 border text-sm">+ Nova Categoria</a>
    </div>
    <br>
    <div class="overflow-auto rounded shadow border border-gray-200">
        <table class="min-w-full table-auto text-sm text-left">
            <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="px-4 py-2 border">Categoria</th>
                <th class="px-4 py-2 border">Tipo</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 ">
            @foreach($categories as $category)
                <tr class="@if($category->type == 'expense') hover:bg-red-50 text-red-700 @else hover:bg-green-50 text-green-700 @endif">
                    <td class="px-4 py-2 border">{{$category->name}}</td>
                    <td class="px-4 py-2 border">
                        {{ \App\Enums\CategoryTypeEnum::getDescriptiveValues()[$category->type] ?? 'Tipo indefinido' }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
