<?php

namespace App\Http\Controllers\Asset;

use App\AssetCategory;
use App\Http\Controllers\Controller;
use App\MoveIn;
use App\User;
use App\Withdraw;
use App\WithdrawDetail;
use Illuminate\Http\Request;

class WithdrawResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $object = MoveIn::all();
        $bigtype = AssetCategory::all();
        return view('page-view.AssetSysWithdraw', compact('object', 'bigtype'));

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
    public function store(Request $request, WithdrawDetail $withdrawdetail)
    {
        $withdraw = Withdraw::create($request->all());
        $withdraw->user_id = auth()->user()->id;
        foreach ($request->steps as $step) {
            $withdraw->WithdrawDetail()->create(['object' => $step]);
        }
        $withdraw->save();
        return redirect()->back()->with('message', '領用申請成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
