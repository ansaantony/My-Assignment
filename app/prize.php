<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prize extends Model
{
    protected $table = 'tbl_prizes';
    public $fillable = ['prid','pid','prize',]; 
}
