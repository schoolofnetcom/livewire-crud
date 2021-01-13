<div>
    <table class="table-auto w-full">
        <tbody>
            <tr>
                <td class="border px-4 py-2"><strong>Nome</strong></td>
                <td class="border px-4 py-2">{{ $book->name }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2"><strong>Número de páginas</strong></td>
                <td class="border px-4 py-2">{{ $book->pages }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2"><strong>Autor</strong></td>
                <td class="border px-4 py-2">{{ $book->author }}</td>
            </tr>
        </tbody>
    </table>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
        <a href="{{ route('books.index') }}"
            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Voltar
        </a>
    </div>
</div>
