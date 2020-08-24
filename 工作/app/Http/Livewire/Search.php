<?php

namespace App\Http\Livewire;

use App\MoveIn;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public function render()
    {
        $search = '%' . $this->search . '%';
    // $movein = Movein::paginate(12);

        $movein = Movein::where('object', 'like', $search)->get();
        return view('livewire.search' ,compact('movein'));
    }
}
