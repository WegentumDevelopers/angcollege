<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner=Partner::where('delete_status',0)->get();
        return view('backend.Partners.index',compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Partners.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = new Partner;
        $partner->name=$request->name;
        $partner->url=$request->url;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$file_photo);
            $partner->images=$file_photo;
    }
    $partner->save();
    return redirect()->route('partner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('backend.Partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $partner->name=$request->name;
        $partner->url=$request->url;
        $partner->status=$request->status;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$file_photo);
            $partner->images=$file_photo;
    }
    $partner->save();
    return redirect()->route('partner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete_status=1;
        $partner->save();
        return redirect()->route('partner.index')->with('success','website deleted sucessfully');
    }
}
