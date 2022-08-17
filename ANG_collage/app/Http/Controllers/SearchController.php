<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\Property;
use search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        if($request->has('p_type')){
            // $pro=Property::search($request->p_type)->get();
        }
        else{
            $pro=Property::get(); 
        }
        $setting = Setting::where('delete_status', 0)->where('status', 1)->get();
        $property = Property::where('delete_status', 0)->where('status', 1)->get();
        return view('frontend.properties',compact('setting','property'));
    }
}
