<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Book;
class Index extends Component
{
    use WithPagination;

    public function deleteBook($id) {
        Book::whereId($id)->first()->delete();
        // $this->books = Book::all();
        // $this->books = $this->books->filter(function($item) use ($id) {
        //     return $item->id != $id;
        // });
    }

    public function render()
    {
        return view('livewire.book.index', ["books" => Book::paginate()]);
    }
}
