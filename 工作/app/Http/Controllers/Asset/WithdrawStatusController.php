<?php

namespace App\Http\Controllers\Asset;

use App\Http\Controllers\Controller;
use App\User;

class WithdrawStatusController extends Controller
{

    public function index()
    {
        $withdraw = auth()->user()->withdraws;
        return view('page-view.AssetSysWithdrawStatus', compact('withdraw'));
    }

}
