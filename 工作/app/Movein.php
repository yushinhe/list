<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoveIn extends Model
{
    protected $fillable = [
        'person', 'bigtype', 'type','brand','time'
    ];

}
