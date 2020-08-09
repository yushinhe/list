<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [
        'bigtype', 'object','person','time', 'way'
    ];
}
