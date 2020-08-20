<?php

namespace App\Http\Controllers;

use App\AssetCategory;
use App\MoveIn;
use Illuminate\Http\Request;

class MoveInController extends Controller
{
    public function update(Request $request)
    {
        $movein = new MoveIn();

        // return $request->all();
        $movein = MoveIn::create($request->all());
        $movein->save();
        // return redirect('asset-sys-movein');
        return redirect()->back()->with('message','資料移交成功');
    }
    public function index()
    {

     $assetcategory=AssetCategory::all();
  
        return view('page-view.AssetSysMoveIn', compact('assetcategory'));

    }

}
