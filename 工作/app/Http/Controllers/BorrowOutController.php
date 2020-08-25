<?php

namespace App\Http\Controllers;

use App\Borrow;
use Illuminate\Http\Request;

class BorrowOutController extends Controller
{
    public function index($id)
    {
        // $borrow = Borrow::find($id);
        // return view('page-view.AssetSysBorrowOut-2', compact('borrow'));

    }
    public function edit(Request $request, $id)
    {
        $borrow = Borrow::find($id);
        $borrow->borrowed = $request->input('borrowed');
        $borrow->borrowedcheck = $request->input('borrowedcheck');
        $borrow->save();
        return redirect('asset-sys-borrow-out')->with('message', '批准完成');

    }
}
