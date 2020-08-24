<?php

namespace App\Http\Livewire;

use App\AssetCategory;
use DB;
use Livewire\Component;

class Withdraw extends Component
{
    public $steps = [];
    public $cates;

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
        $cates=$this->cates;
        $object = DB::table('move_ins')->where('bigtype', '=', $cates)->get();
        // $object = MoveIn::all();
        $bigtype = AssetCategory::all();
        return view('livewire.withdraw', compact('object', 'bigtype'));
    }

}
