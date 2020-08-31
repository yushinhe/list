<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\User;

class WithdrawStatusController extends Controller
{

    public function index()
    {
        $withdraw = auth()->user()->book_withdraws;
        return view('book.WithdrawStatus', compact('withdraw'));
    }

}
