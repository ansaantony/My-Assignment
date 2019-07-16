<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class icecream extends Model
{
    protected $table = 'tbl_icecreams';
    public $fillable = ['pid','rid','sid','szid','filename','pstatus',];
}
