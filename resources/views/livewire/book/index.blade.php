<div class="flex flex-col">
    @if(session()->has('message'))
        <div class="w-auto py-4 px-4 mb-4 pointer-events-none bg-green-100">
            <p class="text-sm leading-5 font-medium text-green-700 text-2xl">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            #
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Nome
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Páginas
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Autor
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse($books as $book)
                    <tr wire:key="{{ $book->id }}">
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $book->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $book->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $book->pages }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            {{ $book->author }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <a href="{{ route('books.edit', ['book' => $book->id]) }}" class="">
                                Editar
                            </a>
                            <a href="{{ route('books.show', ['book' => $book->id]) }}" class="">
                                Ver
                            </a>
                            <a href="#">Apagar</a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                Nenhum item encontrado ...
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $books->links() }}
        </div>
    </div>
</div>
