<?php

namespace App\Http\Livewire;

use App\AssetCategory;
use App\MoveIn;
use Livewire\Component;

class Withdraw extends Component
{
    public $steps = [];
    public function increment()
    {
        $this->steps[] = count($this->steps);
    }
    public function remove($index)
    {
        unset($this->steps[$index]);
    }
    public function render()
    {
        $object = MoveIn::all();
        $bigtype = AssetCategory::all();
        return view('livewire.withdraw', compact('object', 'bigtype'));
    }

}
