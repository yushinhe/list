<?php

namespace App\Http\Controllers;

use App\Borrow;
use Illuminate\Http\Request;

class ReturnbackController extends Controller
{
    public function index()
    {
       

    }
    public function index1($id)
    {
        // $where= "AND `sid` = {$_GET['sid']}";
        // $borrow  = DB::select("SELECT * FROM `borrows` $where");
     
    public function edit(Request $request, $id)
    {
      
    }
    // public function destroy(Request $request, Borrow $borrow)
    // {
    //     $borrow->delete();

    //     return redirect('asset-sys-returnback');

    // }
}
