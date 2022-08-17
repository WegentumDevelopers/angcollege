<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expert=Expert::where('status',1)->where('delete_status',0)->get();
        return view('backend.OurExperts.index',compact('expert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.OurExperts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expert = new Expert;
        $expert->Name=$request->fname;
        $expert->email=$request->email;
        $expert->contact=$request->phone;
        $expert->designation=$request->designation;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$file_photo);
            $expert->images=$file_photo;
    }
    $expert->save();
    return redirect()->route('expert.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function show(Expert $expert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function edit(Expert $expert)
    {
        return view('backend.OurExperts.edit',compact('expert'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expert $expert)
    {
        $expert->Name=$request->fname;
        $expert->email=$request->email;
        $expert->contact=$request->phone;
        $expert->designation=$request->designation;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$file_photo);
            $expert->images=$file_photo;
    }
    $expert->status=$request->status;
    $expert->save();
    return redirect()->route('expert.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expert $expert)
    {
        $expert->delete_status=1;
        $expert->save();
        return redirect()->route('expert.index')->with('success','website deleted sucessfully');
    
    }
}
