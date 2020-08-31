<?php

namespace App\Http\Livewire;
use App\Bookmovein;

use Livewire\Component;

class Bookborrow extends Component {
    public $search;
    public $steps = [];

    public function increment() {
        $this->steps[] = count( $this->steps );
    }

    public function remove( $index ) {

        unset( $this->steps[$index] );
    }

    public function render() {
        $search = '%' . $this->search . '%';
        $book = Bookmovein::where('object', 'like', $search
        )->orWhere(function ($query) {
            $search = '%' . $this->search . '%';
            $query->where('issue', 'like', $search)
                ->orWhere('number', 'like', $search);
        })->get();

        return view( 'livewire.bookborrow', compact('book') );
    }
}
