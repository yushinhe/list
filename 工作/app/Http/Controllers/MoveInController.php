<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MoveIn;
use PhpParser\Node\Expr\New_;

class MoveInController extends Controller
{
    public function update(Request $request)
    {
        $movein= New MoveIn();
        // return $request->all();
        $movein = MoveIn::create($request->all());
        $movein->save();
        return redirect('asset-sys-movein');
     
    
    }
}
