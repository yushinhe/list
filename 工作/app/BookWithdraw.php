<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookWithdraw extends Model
{
    protected $fillable = [
        'user_id', 'person','time', 'way','checked','checkman'
     ];
     public function user(){
         return $this->belongsTo('App\User');
     }
     public function BookWithdrawsDetails()
     {
         return $this->hasMany('App\BookWithdrawsDetails');
     }
}
