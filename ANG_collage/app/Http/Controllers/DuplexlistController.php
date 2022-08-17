<?php

namespace App\Http\Controllers;

use App\Models\Contactsale;
use Illuminate\Http\Request;

class DuplexlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duplex=Contactsale::where('status',1)->get();
        return view('backend.duplex.index',compact('duplex'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.duplex.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact=new Contactsale;
$contact->Name=$request->name;
$contact->email=$request->email;
// $contact->contact=$request->contact;
if ($request->image != null) {
    $file_photo = time() . '.' . request()->image->getClientOriginalExtension();
    $request->image->move(('images'), $file_photo);
    $contact->images = $file_photo;
}
$contact->address=$request->address;
$contact->area=$request->area;
$contact->price=$request->Price;
$contact->beds=$request->bed;
$contact->bathroom=$request->bathroom;
$contact->message=$request->msg;
$contact->save();
return redirect()->route('duplexs.index')->with('success','For Contact us!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duplexlist  $duplexlist
     * @return \Illuminate\Http\Response
     */
    public function show(Duplexlist $duplexlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duplexlist  $duplexlist
     * @return \Illuminate\Http\Response
     */
    public function edit($duplexlist)
    {
        $duplexlist=Contactsale::find($duplexlist);
        return view('backend.duplex.edit',compact('duplexlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Duplexlist  $duplexlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$duplexlist)
    {
        $duplexlist=Contactsale::find($duplexlist);
        $duplexlist->Name=$request->name;
$duplexlist->email=$request->email;
// $duplexlist->duplexlist=$request->duplexlist;
if ($request->image != null) {
    $file_photo = time() . '.' . request()->image->getClientOriginalExtension();
    $request->image->move(('images'), $file_photo);
    $duplexlist->images = $file_photo;
}
$duplexlist->address=$request->address;
$duplexlist->area=$request->area;
$duplexlist->price=$request->Price;
$duplexlist->beds=$request->bed;
$duplexlist->bathroom=$request->bathroom;
$duplexlist->message=$request->msg;
$duplexlist->save();
return redirect()->route('duplexs.index')->with('success','For Contact us!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duplexlist  $duplexlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($duplexlist)
    {
        $duplexlist=Contactsale::find($duplexlist);
        $duplexlist->status=0;
        $duplexlist->save();
         return redirect()->route('duplexs.index');
    }
}
