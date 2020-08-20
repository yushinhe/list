<?php

namespace App\Http\Controllers;
use App\AssetCategory;

use App\MoveIn;
use DB;
use Illuminate\Http\Request;

class AssetEditController extends Controller
{
    public function index(Request $request, $id)
    {
        $list = Movein::find($id);
        $bigtype =AssetCategory::all();
        return view('page-view.AssetSysAsset-edit', compact('list', 'bigtype'));
    }
    public function edit(Request $request, $id)
    {
        $movein = Movein::find($id);
        $movein->position = $request->input('position');
        $movein->date = $request->input('date');
        $movein->brand = $request->input('brand');
        $movein->bigtype = $request->input('bigtype');
        $movein->object = $request->input('object');
        $movein->save();
        // return redirect('asset-sys-movein');
        return redirect('/asset-sys-asset')->with('message','修改完成');
    }
}
