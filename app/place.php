<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{


    public function getImageAttribute($image){
        return asset($image);
        }
    

    protected $fillable = [
     'category_id','name','contente','phone_number','city', 'time_up','time_down','days','image','map_lng','map_lat',
    ];


}
