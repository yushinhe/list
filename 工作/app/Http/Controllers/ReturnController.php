<?php

namespace App\Http\Controllers;
use App\Borrow;
use App\User;
use DB;
use Illuminate\Http\Request;

class ReturnController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        // $borrow =Borrow::all();
     return view('page-view.AssetSysReturn')->with('borrows' , $user->borrows);
 
    }
    public function index1($id){
        // $where= "AND `sid` = {$_GET['sid']}";
        // $borrow  = DB::select("SELECT * FROM `borrows` $where");
        $borrow=Borrow::find($id);
        return view('page-view.AssetSysReturn-1', [
         'borrow' => $borrow
        ]);}
        public function edit(Request $request, $id)
        {
            $borrow= New Borrow();
            // return $request->all();
            $borrow = Borrow::find($id);
            $borrow->senddated =$request->input('senddated');
        
            $borrow ->save();
    return redirect('asset-sys-return');
            
         
            }
}