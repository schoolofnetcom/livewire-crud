<div>
    <form wire:submit.prevent="save" class="w-full">
	    <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Nome
            </label>
            <input wire:model="book.name" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" id="name" />
    	</div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pages">
                Quantidade de Páginas
            </label>
            <input wire:model="book.pages" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" id="pages" />
    	</div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="author">
                Autor
            </label>
            <input wire:model="book.author" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" id="author" />
    	</div>
        <button type="submit">Cadastrar</button>
    </form>
</div>
