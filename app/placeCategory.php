<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class placeCategory extends Model
{
    public function places(){


        return $this->hasMany(place::class, 'category_id');
    }
}
