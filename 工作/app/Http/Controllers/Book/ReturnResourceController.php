<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\BookBorrow;
use App\Http\Controllers\Controller;
use App\User;

class ReturnResourceController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $page_title='書籍借用狀態';
        $borrows = auth()->user()->book_borrows;
        return view('book.Return', compact('borrows','page_title'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $page_title='書籍歸還';
        $borrow = BookBorrow::find($id);
        return view('book.Return-1', compact('borrow','page_title'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $borrow = BookBorrow::find($id);
        $borrow->senddated = $request->input('senddated');
        $borrow->save();
        return redirect('books/b-return')->with('message', '歸還申請成功');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        //
    }
}
