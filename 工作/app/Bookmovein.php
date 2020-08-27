<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmovein extends Model
{
    protected $fillable = [
        'number','position','date' ,'type', 'object','issue','cost'
    ];

}
