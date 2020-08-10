<?php

namespace App\Http\Controllers;
use App\Borrow;
use Illuminate\Http\Request;
use DB;
class BorrowController extends Controller
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
   public function index(){
       $borrow =Borrow::all();
    return view('page-view.AssetSysBorrowOut', [
        'borrow' => $borrow
    ]);
    // echo $borrow;
   }
    public function update(Request $request)
    {
        $borrow= New Borrow();
        // return $request->all();
        $borrow = Borrow::create($request->all());
        $borrow->save();
        return redirect('asset-sys-borrow')->with([
            'flash_message' => '借出申請成功 !!'
        ]);
     
    
    }
    public function index1()
    {
        $object= DB::select("SELECT `object` FROM `move_ins`");
        $bigtype = DB::select("SELECT `bigtype` FROM `asset_categories`");
        // $object1= DB::select("SELECT `move_ins`.*,`asset_categories`.`categories_id` FROM `move_ins` JOIN `asset_categories` ON `move_ins`.`bigtype`=`asset_categories`.`bigtype` WHERE `categories_id` IN(5)");     
        $arr=array('bigtype' => $bigtype,'object'=>$object);
        return view('page-view.AssetSysBorrow', $arr);
      
    }
    //
}
