<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\suggest ;
class SuggestsAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:admin']);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    public function index()
    {
        
        $suggests = suggest::paginate(10);
        return view('admin.suggests.index',([

            'suggests'=> $suggests

        ]));
    }


    public function show($id){

        return view('admin.suggests.show')->with(
            'suggest',  suggest::find($id)  

        );
    }




    public function destroy($id)
    {
        $item =   suggest::find($id);


 
        
        
        
                $item->delete() ;   
               
                return redirect('/suggests')->with('success', 'Delete successfully');
    }
}
