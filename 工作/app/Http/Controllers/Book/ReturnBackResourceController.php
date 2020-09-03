<?php

namespace App\Http\Controllers\Book;

use App\BookBorrow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReturnBackResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrow = BookBorrow::paginate(12);
        $page_title='資產入庫';
        return view('book.ReturnBack', compact('borrow','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title='入庫確認';
        $borrow = BookBorrow::find($id);
        return view('book.ReturnBack-2', compact('borrow','page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $borrow = BookBorrow::find($id);
        $borrow->backtime = $request->input('backtime');
        $borrow->status = $request->input('status');
        $borrow->save();
        return redirect('books/b-returnback')->with('message','資產入庫成功');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
