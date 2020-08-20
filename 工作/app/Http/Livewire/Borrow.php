<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\AssetCategory;
use App\MoveIn;
class Borrow extends Component
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
        return view('livewire.borrow',compact('object', 'bigtype'));
    }
}
