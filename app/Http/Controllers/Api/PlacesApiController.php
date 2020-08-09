<?php


namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\place;
use  Validator ;


class PlacesApiController extends BaseController  
{

public function index()
{
    # code...
    $places = place::all();
    return $this->sendResponse($places->toArray(), 'places read succesfully');
}






    
}
