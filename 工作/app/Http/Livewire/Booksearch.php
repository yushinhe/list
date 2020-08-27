<?php

namespace App\Http\Livewire;

use App\Bookmovein;
use Livewire\Component;

class Booksearch extends Component
{
    public $search;

    public function render()
    {
        $search = '%' . $this->search . '%';
        $book = Bookmovein::where('object', 'like', $search
        )->orWhere(function ($query) {
        $search = '%' . $this->search . '%';
            
            $query->where('issue', 'like', $search)
                ->orWhere('number', 'like', $search);
        })->get();

        return view('livewire.booksearch', compact('book'));
    }
}
