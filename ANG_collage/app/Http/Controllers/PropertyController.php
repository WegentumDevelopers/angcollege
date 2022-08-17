<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property=Property::where('delete_status',0)->get();
        return view('backend.Property.index',compact('property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $property = new Property;
       $property->title=$request->title;
       $property->location=$request->address;
    //    $property->running_p=$request->r_property;
    //    $property->upcomming_p=$request->u_property;
       if($request->r_property== 'on'){
            $property->t_status="running";
       }
       else{
        $property->t_status="upcomming";
       }
       $property->h_show=$request->show_home;
       $property->property_type=$request->p_type;
       $property->description=$request->description;
       $property->special=$request->special;
       if($request->image!=null){
        $file_photo=time().'.'.request()->image->getClientOriginalExtension();
        $request->image->move(public_path('images'),$file_photo);
        $property->images=$file_photo;
}
$property->save();
return redirect()->route('property.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('backend.Property.edit',compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $property->title=$request->title;
        $property->location=$request->address;
     //    $property->running_p=$request->r_property;
     //    $property->upcomming_p=$request->u_property;
        if($request->r_property== 'on'){
             $property->t_status="running";
        }
        else{
         $property->t_status="upcomming";
        }
        $property->h_show=$request->show_home;
        $property->property_type=$request->p_type;
        $property->description=$request->description;
       $property->special=$request->special;
        if($request->image!=null){
         $file_photo=time().'.'.request()->image->getClientOriginalExtension();
         $request->image->move(public_path('images'),$file_photo);
         $property->images=$file_photo;
 }
 $property->save();
 return redirect()->route('property.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
       $property->delete_status=1;
       $property->save();
        return redirect()->route('property.index');
    }
}
