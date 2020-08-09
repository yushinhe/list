<?php

namespace App\Http\Controllers;
use App\Borrow;

use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index(){
        $borrow =Borrow::all();
     return view('page-view.AssetSysBorrowOut', [
         'borrow' => $borrow
     ]);
}
}