<?php

namespace App\Http\Controllers;
use App\Borrow;
use DB;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index(){
        $borrow =Borrow::all();
     return view('page-view.AssetSysReturn', [
         'borrow' => $borrow
     ]);
     // echo $borrow;
    }
    public function index1($id){
        // $where= "AND `sid` = {$_GET['sid']}";
        // $borrow  = DB::select("SELECT * FROM `borrows` $where");
        $borrow=Borrow::find($id);
        return view('page-view.AssetSysReturn-1', [
         'borrow' => $borrow
        ]);}
}