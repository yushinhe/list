<?php

namespace App\Http\Controllers;

use App\Borrow;
use DB;
use Illuminate\Http\Request;

class ReturnbackController extends Controller
{
    public function index(){
        $borrow =Borrow::all();
        
     return view('page-view.AssetSysReturnBack', [
         'borrow' => $borrow
     ]);
     // echo $borrow;
    }
    public function index1($id){
        // $where= "AND `sid` = {$_GET['sid']}";
        // $borrow  = DB::select("SELECT * FROM `borrows` $where");
        $borrow=Borrow::find($id);
        return view('page-view.AssetSysReturnBack-2', [
         'borrow' => $borrow
        ]);}
        public function edit(Request $request, $id)
        {
            $borrow= New Borrow();
            // return $request->all();
            $borrow = Borrow::find($id);
            $borrow->backtime =$request->input('backtime');
            $borrow->status =$request->input('status');
    
            $borrow ->save();
    return redirect('asset-sys-returnback');           
         
            }
            // public function destroy(Request $request, Borrow $borrow)
            // {
            //     $borrow->delete();
      
        
            //     return redirect('asset-sys-returnback');
        
            // }
}