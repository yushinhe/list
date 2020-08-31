<?php

namespace App\Http\Controllers\Book;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\BookWithdraw;

class WithdrawCheckResourceController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $withdraw = BookWithdraw::paginate( 15 );
        return view( 'book.WithdrawCheck', compact( 'withdraw' ) );
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

    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $withdraw = BookWithdraw::find( $id );
        return view( 'book.WithdrawCheck-1', compact( 'withdraw' ) );

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
        $withdraw = BookWithdraw::find( $id );
        $withdraw->checked = $request->input( 'checked' );
        $withdraw->checkman = $request->input( 'checkman' );
        $withdraw->save();
        return redirect( 'books/withdraw-check' )->with( 'message', '批准成功' );
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
