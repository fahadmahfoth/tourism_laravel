<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\place;
class placeCategory extends Model
{
    public function places(){


        return $this->hasMany(place::class, 'category_id');
    }


        public function getImageAttribute($image){
        return asset($image);
        }
        public function getIconAttribute($icon){
        return asset($icon);
        }

        protected $fillable = [
            'icon', 'name', 'image',
        ];
    
}
