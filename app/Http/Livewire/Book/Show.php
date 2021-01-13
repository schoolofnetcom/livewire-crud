<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;

class Show extends Component
{
    public $book;

    public function mount($book) {
        $this->book = $book;
    }

    public function render()
    {
        return view('livewire.book.show');
    }
}
