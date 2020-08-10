<?php

namespace App\Http\Controllers;
use DB;
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
        // return redirect('asset-sys-movein');
        return redirect('asset-sys-movein')->with([
            'move_message' => '資料移交成功 !!'
        ]);
        }
        public function index()
        {
            $type = DB::select("SELECT `type` FROM `asset_categories_2`");
            $bigtype = DB::select("SELECT `bigtype` FROM `asset_categories`");
            $arr=array( 'bigtype'=>$bigtype,'type'=> $type);
            return view('page-view.AssetSysMoveIn', $arr);
           
        }
     
}
