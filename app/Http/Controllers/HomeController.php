<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\place ;
use App\User ;
use App\suggest ;
use App\placeCategory ;
// use Spatie\Permission\Models\Role;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //   $role3 = Role::create(['name' => 'super-admin']);
        //   $role1 = Role::create(['name' => 'admin']);

        $places_count = place::all()->count();
        $categoreis_count = placeCategory::all()->count();
        $suggests_count = suggest::all()->count();
        $users_count = User::all()->count();
        return view('home')->with(
            [
                'place_count'        => $places_count,
                'categoreis_count'   => $categoreis_count,
                'suggests_count'     => $suggests_count,
                'users_count'        => $users_count
            ]
        );
    }
}
