<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Withdraw;

class WithdrawController extends Controller{ 
    public function update(Request $request)
    {
    $withdraw= New Withdraw();
        // return $request->all();
        $withdraw = Withdraw::create($request->all());
        $withdraw->save();
        return redirect('asset-sys-withdraw');
    }
    public function index()
    {
        $object= DB::select("SELECT `object` FROM `move_ins`");
        $bigtype = DB::select("SELECT `bigtype` FROM `asset_categories`");
        // $object1= DB::select("SELECT `move_ins`.*,`asset_categories`.`categories_id` FROM `move_ins` JOIN `asset_categories` ON `move_ins`.`bigtype`=`asset_categories`.`bigtype` WHERE `categories_id` IN(5)");     
        $arr=array('bigtype' => $bigtype,'object'=>$object);
        return view('page-view.AssetSysWithdraw', $arr);
      
    }

   
}
