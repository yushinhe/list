<?php

namespace App\Http\Controllers\Asset;

use App\AssetCategory;
use App\Http\Controllers\Controller;
use App\MoveIn;
use Illuminate\Http\Request;

class AssetResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title='資產列表';
        $assetCategory = AssetCategory::all();
        return view('page-view.AssetSysAsset',compact('page_title'));
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
    public function show(Request $request, $id)
    {
        $page_title='資產修改';
        $list = Movein::find($id);
        $bigtype = AssetCategory::all();
        return view('page-view.AssetSysAsset-edit', compact('list', 'bigtype','page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $page_title='詳細資料';
        $list = Movein::find($id);
        return view('page-view.AssetSysAsset-detail', compact('list','page_title'));
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
        $movein = Movein::find($id);
        $movein->position = $request->input('position');
        $movein->date = $request->input('date');
        $movein->brand = $request->input('brand');
        $movein->bigtype = $request->input('bigtype');
        $movein->object = $request->input('object');
        $movein->save();
        return redirect('/asset-sys/asset')->with('message', '修改完成');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MoveIn $movein, $id)
    {
        $movein = Movein::find($id);
        $movein->delete();
        return redirect()->back()->with('message', '刪除成功');
    }
}
