<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{ 
    protected $fillable = [
        'user_id','bigtype', 'type','object','borrowtime', 'person','way',
    'sendtime','borrowed','senddated','backtime','status'
];
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
}
