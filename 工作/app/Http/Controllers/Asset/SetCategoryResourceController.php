<?php

namespace App\Http\Controllers\Asset;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\AssetCategory;

class SetCategoryResourceController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $bigtype = AssetCategory::all();       
        return view('page-view.AssetSysSetCategory', compact('bigtype' ) );
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
        $bigtype = AssetCategory::create( $request->all() );
        $bigtype->save();
        return redirect()->back()->with( 'message', '類別新增成功' );
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        //
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
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $bigtype  =  AssetCategory::find($id);
        $bigtype ->delete();
        return redirect()->back()->with('message', '刪除成功');
    }
}
