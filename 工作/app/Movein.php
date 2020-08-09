<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoveIn extends Model
{
    protected $fillable = [
        'position','date','brand' ,'bigtype', 'type','object','lab','borrowed'
    ];

}
