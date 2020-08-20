<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MoveIn;

class AssetDetailController extends Controller
{
    public function index(Request $request, $id){
        $list =Movein::find($id);
        // dd( $list);
     return view('page-view.AssetSysAsset-detail',compact('list'));    
    }
    
}
