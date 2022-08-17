<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=Service::where('delete_status',0)->get();
        return view('backend.Services.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new  Service;
        $service->title=$request->title;
        $service->short_description=$request->s_desc;
        $service->tags=$request->tag;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$file_photo);
            $service->images=$file_photo;
    }
    $service->save();
    return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backend.Services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->title=$request->title;
        $service->short_description=$request->s_desc;
        $service->tags=$request->tag;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$file_photo);
            $service->images=$file_photo;
    }
    $service->status=$request->status;
    $service->save();
    return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete_status=1;
        $service->save();
        return redirect()->route('service.index');
    }
}
