<?php

namespace App\Http\Controllers;
use App\AssetCategory;
use DB;
use App\Borrow;
use Illuminate\Http\Request;
use App\BorrowDetail;
class BorrowController extends Controller
{

    public function index()
    {
        $borrow = Borrow::all();
        return view('page-view.AssetSysBorrowOut',compact('borrow'));

    }
    public function update(Request $request)
    {
        $borrow = new Borrow();
        $borrow = Borrow::create($request->all());
        $borrow->user_id = auth()->user()->id;        
        foreach ($request->steps as $step) {
            $borrow->BorrowDetail()->create(['object' => $step]);
        }
        $borrow->save();

        return redirect()->back()->with('message', '借出成功');

    }
    public function index1(Request $request)
    {
        $bigtype = AssetCategory::all();
       
        return view('page-view.AssetSysBorrow');
    }
    //
}
