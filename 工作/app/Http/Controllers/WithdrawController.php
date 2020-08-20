<?php

namespace App\Http\Controllers;
use DB;
use App\AssetCategory;
use App\MoveIn;
use App\User;
use App\Withdraw;
use App\WithdrawDetail;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function update(Request $request,WithdrawDetail  $withdrawdetail)
    {

        $withdraw = new Withdraw();
        // return $request->all();
        $withdraw = Withdraw::create($request->all());
        $withdraw->user_id = auth()->user()->id;
       
        foreach($request->steps as $step){
            $withdraw->WithdrawDetail()->create(['object'=>$step]);
        }
        $withdraw->save();
        return redirect('asset-sys-withdraw')->with('message', '領用申請成功');
    }
    public function index()
    {
        $object = MoveIn::all();
        $bigtype = AssetCategory::all();     
        return view('page-view.AssetSysWithdraw',compact('object','bigtype'));

    }
    public function index1()
    {
        $withdraw = Withdraw::all();
        return view('page-view.AssetSysWithdrawCheck', compact('withdraw'));
    }
    public function index2($id)
    {
        $withdraw = Withdraw::find($id);
    //  dd($withdraw->step);

//  DB::select("SELECT *FROM `withdraw_details` JOIN `withdraws` ON `withdraw_details`.`withdraw_id`= `withdraws`.`id` WHERE `withdraws`.`id` ")
        return view('page-view.AssetSysWithdrawCheck-1', compact('withdraw'));
    

    }
    public function index3()
    {
        $withdraw = auth()->user()->withdraws;
        return view('page-view.AssetSysWithdrawStatus', compact('withdraw'));
    }
    public function edit(Request $request, $id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->checked = $request->input('checked');
        $withdraw->checkman = $request->input('checkman');
        $withdraw->save();
        return redirect('asset-sys-withdraw-check')->with('message', '批准成功');
    }
}
