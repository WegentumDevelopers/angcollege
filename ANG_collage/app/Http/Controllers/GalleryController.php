<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $image= Gallery::where('delete_status',0)->get();
        return view('backend.Gallery.index',compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Gallery.create');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery=New Gallery;
        $gallery->title=$request->title;
        
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(('galleries'),$file_photo);
            $gallery->images=$file_photo;
    }
    $gallery->lab=$request->lab;
         $gallery->save();
    return redirect()->route('gallery.index'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.Gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $gallery->title=$request->title;
        $gallery->status=$request->status;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(('galleries'),$file_photo);
            $gallery->images=$file_photo;
    }
    $gallery->lab=$request->lab;
         $gallery->save();
    return redirect()->route('gallery.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete_status=1;
        $gallery->save();
        return redirect()->route('gallery.index')->with('success','website deleted sucessfully');
    }
}