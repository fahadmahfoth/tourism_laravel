<?php


namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\placeCategory;
use  Validator ;


class CategoreisApiController extends BaseController  
{

public function index()
{
    # code...
    $place_category = placeCategory::with('places')->get();
    return $this->sendResponse($place_category->toArray(), 'place Category read succesfully');
}






    
}
