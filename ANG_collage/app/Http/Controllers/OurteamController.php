<?php

namespace App\Http\Controllers;

use App\Models\Ourteam;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team=Ourteam::where('delete_status',0)->get();
        return view('backend.OurTeam.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.OurTeam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ourteam = new Ourteam;
        $ourteam->Name=$request->fname;
        $ourteam->email=$request->email;
        $ourteam->contact=$request->phone;
        $ourteam->designation=$request->designation;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(('images'),$file_photo);
            $ourteam->images=$file_photo;
    }
    $ourteam->save();
    return redirect()->route('ourteam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ourteam  $ourteam
     * @return \Illuminate\Http\Response
     */
    public function show(Ourteam $ourteam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ourteam  $ourteam
     * @return \Illuminate\Http\Response
     */
    public function edit(Ourteam $ourteam)
    {
        return view('backend.OurTeam.edit',compact('ourteam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ourteam  $ourteam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ourteam $ourteam)
    {
        $ourteam->Name=$request->fname;
        $ourteam->email=$request->email;
        $ourteam->contact=$request->phone;
        $ourteam->designation=$request->designation;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(('images'),$file_photo);
            $ourteam->images=$file_photo;
    }
    $ourteam->status=$request->status;
    $ourteam->save();
    return redirect()->route('ourteam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ourteam  $ourteam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ourteam $ourteam)
    {
        $ourteam->delete_status=1;
        $ourteam->save();
        return redirect()->route('ourteam.index')->with('success','website deleted sucessfully');
    }
}
