<?php

namespace App\Http\Controllers;

use App\User;
use App\Withdraw;
use Illuminate\Http\Request;

class WithdrawStatusController extends Controller
{
    
    public function index()
    {
        $withdraw = auth()->user()->withdraws;
        return view('page-view.AssetSysWithdrawStatus', compact('withdraw'));
    }
   
}
