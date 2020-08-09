<?php

namespace App\Http\Controllers;
use App\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
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
    //
}
