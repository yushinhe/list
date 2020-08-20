<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawDetail extends Model
{
  protected $fillable =['object','withdraw_id'];
  public function user(){
    return $this->belongsTo('App\Withdraw');
}
}
