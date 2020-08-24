<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetCategory extends Model
{
    protected $fillable = [
     'bigtype'
];
public function borrowdetail()
{
    return $this->hasMany('App\Movein');
}
}
