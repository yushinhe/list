<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookBorrow extends Model
{
    protected $fillable = [
        'user_id','borrowtime', 'person','time', 'way', 'sendtime','checked','checkman'
     ];
     public function user(){
         return $this->belongsTo('App\User');
     }
     public function BookBorrowDetails()
     {
         return $this->hasMany('App\BookBorrowDetails');
     }
}
