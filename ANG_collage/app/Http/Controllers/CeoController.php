<?php

namespace App\Http\Controllers;

use App\Models\Ceo;
use Illuminate\Http\Request;

class CeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ceo=Ceo::where('delete_status',0)->get();
        return view('backend.CEO.index',compact('ceo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.CEO.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ceo = new Ceo;
        $ceo->Name=$request->fname;
        $ceo->email=$request->email;
        $ceo->contact=$request->phone;
        $ceo->designation=$request->designation;
        $ceo->address=$request->address;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(('images'),$file_photo);
            $ceo->images=$file_photo;
    }
    $ceo->save();
    return redirect()->route('ceo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function show(Ceo $ceo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ceo $ceo)
    {
        return view('backend.CEO.edit',compact('ceo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ceo $ceo)
    {
        $ceo->Name=$request->fname;
        $ceo->email=$request->email;
        $ceo->contact=$request->phone;
        $ceo->designation=$request->designation;
        $ceo->address=$request->address;
        $ceo->status=$request->status;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(('images'),$file_photo);
            $ceo->images=$file_photo;
    }

    $ceo->save();
    return redirect()->route('ceo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ceo $ceo)
    {
        $ceo->delete_status=1;
        $ceo->save();
        return redirect()->route('ceo.index')->with('success','website deleted sucessfully');
    }
}
