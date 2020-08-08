<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\placeCategory ;
class PlaceCategoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categoreis.index')->with(
            [
                'categoreis'  =>  placeCategory::with('places')->paginate(15)
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
        return view('admin.categoreis.create');
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

            
            'name' => 'required|max:255',
            'image' => "required|image",
            'icon' => "required|image",
        ],[
            'name.required'=>             'الاسم مطلوب' ,
            'name.max'=>                  'الاسم تجاوز الحد الاقصى للاحرف 255' ,
           
            'image.required'=>            ' الصورة النوع مطلوبة' ,
            'image.image'=>               ' صورة النوع يجب ان تكون ملف صورة' ,

            'icon.required'=>            ' ايقونة النوع مطلوبة' ,
            'icon.image'=>               ' ايقونة النوع يجب ان تكون ملف صورة' ,

            ]);




            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/category/image',$image_new_name);
           
            $icon = $request->icon;
            $icon_new_name = time().$icon->getClientOriginalName();
            $icon->move('uploads/category/icon',$icon_new_name);
            
            $placeCategory=placeCategory::create([
               'name'          =>$request->name,
               'image'         =>'uploads/category/image/'.$image_new_name ,
               'icon'         =>'uploads/category/icon/'.$icon_new_name
               ]);


            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.categoreis.show')->with(
            'category', placeCategory::with('places')->find($id)   

        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.categoreis.edit')->with(
            'category', placeCategory::with('places')->find($id)   

        );
        
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
        
$placeCategory=placeCategory::find($id);

     

$this->validate($request,[


    'name' => 'required|max:255',
    'image' => "nullable|image",
    'icon' => "nullable|image"
],[
    

    'name.required'=>             'الاسم مطلوب' ,
    'name.max'=>                  'الاسم تجاوز الحد الاقصى للاحرف 255' ,
   
    'image.image'=>               ' صورة النوع يجب ان تكون ملف صورة' ,

    'icon.image'=>               ' ايقونة النوع يجب ان تكون ملف صورة' ,


    ]);


    if ($request->hasFile('image') ) {
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/category/image',$image_new_name);
       
    
    $placeCategory->image = 'uploads/category/image/'.$image_new_name;
    }


    if ($request->hasFile('icon') ) {
        $icon = $request->icon;
        $icon_new_name = time().$icon->getClientOriginalName();
        $icon->move('uploads/category/icon',$icon_new_name);
       
    
    $placeCategory->icon = 'uploads/category/icon/'.$icon_new_name;
    }

    $placeCategory->name = $request->name;
    $placeCategory->save();
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

        $placeCategory=placeCategory::find($id);
        $placeCategory->delete($id);
        return redirect()->back();
    }
}
