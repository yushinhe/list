<?php

namespace App\Http\Controllers;

use App\Borrow;
use App\User;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index()
    {
        $borrows = auth()->user()->borrows;
        return view('page-view.AssetSysReturn', compact('borrows'));
    }
    public function index1($id)
    {
        $borrow = Borrow::find($id);
        return view('page-view.AssetSysReturn-1', compact('borrow'));
    }
    public function edit(Request $request, $id)
    {
      
        $borrow = Borrow::find($id);
        $borrow->senddated = $request->input('senddated');
        $borrow->save();
        return redirect('asset-sys-return')->with('message','歸還申請成功');

    }
}
