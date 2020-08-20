<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [
       'user_id', 'bigtype', 'object','person','time', 'way','checked','checkman'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function withdrawdetail()
    {
        return $this->hasMany('App\WithdrawDetail');
    }
}
