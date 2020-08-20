<?php

namespace App\Http\Controllers;

use App\AssetCategory;
use App\MoveIn;

class Assetcontroller extends Controller
{public function index()
    {
    $movein = Movein::paginate(12);
    $assetCategory = AssetCategory::all();
    return view('page-view.AssetSysAsset', compact('movein','assetCategory'));
}
    public function destroy(MoveIn $id)
    {
        $id->delete();
        return redirect()->back()->with('message', '刪除成功');
    }
}
