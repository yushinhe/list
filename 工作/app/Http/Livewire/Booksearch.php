<?php

namespace App\Http\Livewire;
use App\Bookmovein;
use Livewire\Component;

class Booksearch extends Component {
    public $search;

    public function render() {
        $search = '%' . $this->search . '%';
        $book = Bookmovein::where( 'object', 'like', $search )->get();

        return view( 'livewire.booksearch', compact( 'book' ) );
    }
}
