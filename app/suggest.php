<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggest extends Model
{

    
    protected $fillable = [
        'name','email','message'
       ];
}
