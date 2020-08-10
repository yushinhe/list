<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{ 
    protected $fillable = [
    'bigtype', 'type','object','borrowtime', 'person','way',
    'sendtime','borrowed','senddated','backtime','status'
];
    //
}
