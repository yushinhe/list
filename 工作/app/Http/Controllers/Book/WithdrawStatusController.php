<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\User;

class WithdrawStatusController extends Controller
{

    public function index()
    {
        $page_title='領用狀態';
        $withdraw = auth()->user()->book_withdraws;
        return view('book.WithdrawStatus', compact('withdraw','page_title'));
    }

}
