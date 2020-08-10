<?php

namespace App\Http\Controllers;
Use App\Borrow;
use Illuminate\Http\Request;
use DB;
class BorrowOutController extends Controller
{
    public function index($id){
        // $where= "AND `sid` = {$_GET['sid']}";
        // $borrow  = DB::select("SELECT * FROM `borrows` $where");
        $borrow=Borrow::find($id);
        return view('page-view.AssetSysBorrowOut-2', [
         'borrow' => $borrow
        ]);
   
}  
   public function edit(Request $request, $id)
{
    $borrow= New Borrow();
    // return $request->all();
    $borrow = Borrow::find($id);
    $borrow->borrowed =$request->input('borrowed');

    $borrow ->save();
    return redirect('asset-sys-borrow-out');
 
    }
}