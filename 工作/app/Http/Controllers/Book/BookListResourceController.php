<?php

namespace App\Http\Controllers\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bookmovein;
use App\Book_Category;
class BookListResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title='圖書列表';
        $book=Bookmovein::all();
        return view('book.List',compact('book','page_title'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book =Bookmovein::find($id); 
        $type =Book_Category::all();
        return view('book.ListEdit', compact('book','type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book =Bookmovein::find($id);
    
        return view('book.ListDetail',compact('book'));   
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
        $book =Bookmovein::find($id);
        $book->position = $request->input('position');
        $book->date = $request->input('date');
        $book->number = $request->input('number');
        $book->type = $request->input('type');
        $book->object = $request->input('object');
        $book->issue = $request->input('issue');
        $book->cost = $request->input('cost');
        $book->save();
        return redirect('/books/b-list')->with('message', '修改完成');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Bookmovein::find($id);
        $book->delete();
        return redirect()->back()->with('message', '刪除成功');
    }
}
