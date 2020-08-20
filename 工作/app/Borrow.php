<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'user_id', 'borrowtime', 'person', 'way',
        'sendtime', 'borrowedcheck', 'borrowed', 'senddated', 'backtime', 'status',
    ];
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function borrowdetail()
    {
        return $this->hasMany('App\BorrowDetail');
    }
}
