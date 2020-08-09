<?php

namespace App\Http\Controllers;
Use App\Borrow;
use Illuminate\Http\Request;
use DB;
class BorrowOutController extends Controller
{
    public function index(){
        $where= "AND `sid` = {$_GET['sid']}";
        $borrow  = DB::select("SELECT * FROM `borrows` $where");

        // $borrow = DB::table('borrows')->where('sid', '=','?')->get();
     return view('page-view.AssetSysBorrowOut-2', [
         'borrow' => $borrow
     ]);
}
}