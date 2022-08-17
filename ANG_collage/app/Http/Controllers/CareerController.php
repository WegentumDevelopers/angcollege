<?php

namespace App\Http\Controllers;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        $res=Career::where('delete_status',0)->where('status',1)->get();
return view('backend.Career.index',compact('res'));


    }
    public function store(Request $request)
    {
$res=new Career;
         
          if ($request->file != null) {
            $file = time() . '.' . request()->file->getClientOriginalExtension();
            $request->file->move(public_path('files'), $file);
            $res->filename = $file;
        }
        $res->save();
          $res->save();
          return redirect()->route('career');

    }
}
