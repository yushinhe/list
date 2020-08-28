<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookWithdraw extends Model
{
    protected $fillable = [
        'user_id', 'type', 'object','person','time', 'way','checked','checkman'
     ];
     public function user(){
         return $this->belongsTo('App\User');
     }
     public function borrowdetail()
     {
         return $this->hasMany('App\BookWithdrawsDetails');
     }
}
