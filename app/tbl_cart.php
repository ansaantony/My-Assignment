<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_cart extends Model
{
protected $table = 'tbl_cart';
    public $fillable = ['pid','id','quantity','total','status',]; 
    
}
