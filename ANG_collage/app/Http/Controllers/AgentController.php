<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent=Agent::where('delete_status',0)->get();
        return view('backend.Agents.index',compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Agents.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agent = new Agent;
        $agent->Name=$request->fname;
        $agent->email=$request->email;
        $agent->contact=$request->phone;
        $agent->designation=$request->designation;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$file_photo);
            $agent->images=$file_photo;
    }
    $agent->save();
    return redirect()->route('agent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        return view('backend.Agents.edit',compact('agent'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        $agent->Name=$request->fname;
        $agent->email=$request->email;
        $agent->contact=$request->phone;
        $agent->designation=$request->designation;
        if($request->image!=null){
            $file_photo=time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$file_photo);
            $agent->images=$file_photo;
    }
    $agent->status=$request->status;
    $agent->save();
    return redirect()->route('agent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        $agent->delete_status=1;
        $agent->save();
        return redirect()->route('agent.index')->with('success','website deleted sucessfully');
    }
}
