<?php


namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\suggest;
use  Validator ;


class SuggestsApiController extends BaseController  
{

    public function store(Request $request)
    {
        # code...
        $input = $request->all();
        $validator =    Validator::make($input, [
        'name'=> 'required',
        'email'=> 'required',
        'message'=> 'required' 
        ] );
    
        if ($validator -> fails()) {
            # code...
            return $this->sendError('error validation', $validator->errors());
        }
    
        $suggest = suggest::create($input);
        return $this->sendResponse($suggest->toArray(), 'Suggest created succesfully');
        
    }






    
}