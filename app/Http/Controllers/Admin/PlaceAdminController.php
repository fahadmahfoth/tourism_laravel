<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\place;
use App\placeCategory ;
class PlaceAdminController extends Controller
{



    public function __construct()
    {
        $this->middleware(['role:admin']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('admin.places.index')->with(
            [
                'places'  =>  place::paginate(15)
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.places.create')->with(
            [
                'categoreis'  =>  placeCategory::all()
            ]
        );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $this->validate($request,[
            'category_id' => 'required',
            'name' => 'required|max:255',
            'contente' => 'required',
            'phone_number' => 'nullable|digits:11|numeric',
            'city' => 'required|max:255',
            'time_up' =>'nullable|max:255',
            'time_down' =>'nullable|max:255',
            'days' =>'nullable|max:255',
            'image' => "required|image",
            'map_lat' =>'nullable',
            'map_lng' =>'nullable',
        ],[
            'category_id.required'=> 'الفئة مطلوب' ,
           
            'name.required'=>             'الاسم مطلوب' ,
            'name.max'=>                  'الاسم تجاوز الحد الاقصى للاحرف 255' ,
            
            'contente.required'=>         'المحتوى مطلوب' ,
           
            'phone_number.numeric'=>      'رقم الهاتف يجب ان يكون ارقام فقط' ,
            'phone_number.digits'=>          'رقم الهاتف يجب ان يكون مكون من 11 رقم' ,


            'city.required'=>             'الحي مطلوب' ,
            'city.max'=>                  'الحي تجاوز الحد الاقصى للاحرف 255' ,
           
            'time_up.max'=>                  'وقت الدخول تجاوز الحد الاقصى للاحرف 255'  ,
            'time_down.max'=>                  'وقت الخروج تجاوز الحد الاقصى للاحرف 255'  ,

            'image.required'=>            ' الصورة مطلوبة' ,
            'image.image'=>               ' صورة المنشور يجب ان تكون على شكل صورة' ,
            ]);

            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/place/image',$image_new_name);


            

$place=place::create([
'category_id'      =>$request->category_id,
'name'          =>$request->name,
'city'          =>$request->city,
'contente'      =>$request->contente,
'phone_number'  =>$request->phone_number,
'time_up' =>$request->time_up,
'time_down' =>$request->time_down,
'days' =>$request->days,
'map_lat' =>$request->map_lat,
'map_lng' =>$request->map_lng,

'image'         =>'uploads/place/image/'.$image_new_name ,

]);

return redirect()->back()->with('success','تمت الاضافة بنجاح');
            
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $place = place::find($id);
        $category = placeCategory::find($place->category_id);
        return view('admin.places.show')->with([
            'place'  =>  $place,
            'category'  => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = place::find($id);
        $categories = placeCategory::all();
        return view('admin.places.edit')->with([
            'place'  =>  $place,
            'categories'  => $categories
        ]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $place=place::find($id);

        $this->validate($request,[

            'category_id' => 'required',
            'name' => 'required|max:255',
            'contente' => 'required',
            'phone_number' => 'nullable|digits:11|numeric',
            'city' => 'required|max:255',
            'time_up' =>'nullable|max:255',
            'time_down' =>'nullable|max:255',
            'days' =>'nullable|max:255',
            'image' => "nullable|image",
            'map_lat' =>'nullable',
            'map_lng' =>'nullable',
            
        ],[
            'category_id.required'=> 'الفئة مطلوب' ,
            'name.required'=>             'الاسم مطلوب' ,
            'name.max'=>                  'الاسم تجاوز الحد الاقصى للاحرف 255' ,
            'contente.required'=>         'المحتوى مطلوب' ,
            'phone_number.numeric'=>      'رقم الهاتف يجب ان يكون ارقام فقط' ,
            'phone_number.digits'=>          'رقم الهاتف يجب ان يكون مكون من 11 رقم' ,
            'city.required'=>             'الحي مطلوب' ,
            'city.max'=>                  'الحي تجاوز الحد الاقصى للاحرف 255' ,
            'time_up.max'=>                  'وقت الدخول تجاوز الحد الاقصى للاحرف 255'  ,
            'time_down.max'=>                  'وقت الخروج تجاوز الحد الاقصى للاحرف 255'  ,
            'image.image'=>               ' صورة المنشور يجب ان تكون على شكل صورة' ,
            ]);


            if ($request->hasFile('image') ) {
                $image = $request->image;
                $image_new_name = time().$image->getClientOriginalName();
                $image->move('uploads/place/image',$image_new_name);
               
            
            $place->image = 'uploads/place/image/'.$image_new_name;
            }
    

            $place->category_id = $request->category_id;
            $place->name = $request->name;
            $place->contente = $request->contente;
            $place->phone_number = $request->phone_number;
            $place->city = $request->city;
            $place->time_up = $request->time_up;
            $place->time_down = $request->time_down;
            $place->days = $request->days;
            $place->map_lat = $request->map_lat;
            $place->map_lng = $request->map_lng;
            $place->save();
            return redirect()->back();
            //->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place=place::find($id);
        $place->delete($id);
        return redirect()->back();   
     }
}
