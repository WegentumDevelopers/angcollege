<?php

namespace App\Http\Controllers;

use App\Models\Plotmodel;
use Illuminate\Http\Request;

class PlotlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plot=Plotmodel::where('status',1)->get();
        return view('backend.plots/index',compact('plot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.plots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plot = new Plotmodel;
        $plot->Name = $request->name;
        $plot->email = $request->email;
        // $plot->contact=$request->contact;
        if ($request->image != null) {
            $file_photo = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('images'), $file_photo);
            $plot->images = $file_photo;
        }
        $plot->address = $request->address;
        $plot->area = $request->area;
        $plot->price = $request->Price;
        $plot->message = $request->msg;
        $plot->save();
        return redirect()
            ->route('plots.index')
            ->with('success', 'For Contact us!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plotlist  $plotlist
     * @return \Illuminate\Http\Response
     */
    public function show(Plotlist $plotlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plotlist  $plotlist
     * @return \Illuminate\Http\Response
     */
    public function edit($plotlist)
    {
        $plotlist=Plotmodel::find($plotlist);
        return view('backend.plots.edit',compact('plotlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plotlist  $plotlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $plotlist)
    {
        $plotlist=Plotmodel::find($plotlist);
        // $plotlist->update()->all();
        $plotlist->Name = $request->name;
        $plotlist->email = $request->email;
        // $plotlist->contact=$request->contact;
        if ($request->image != null) {
            $file_photo = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('images'), $file_photo);
            $plotlist->images = $file_photo;
        }
        $plotlist->address = $request->address;
        $plotlist->area = $request->area;
        $plotlist->price = $request->Price;
        $plotlist->message = $request->msg;
        $plotlist->save();
        return redirect()
            ->route('plots.index')
            ->with('success', 'For Contact us!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plotlist  $plotlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($plotlist)
    {
        $plotlist=Plotmodel::find($plotlist);
        $plotlist->status=0;
        $plotlist->save();
         return redirect()->route('plots.index');
    }
}
