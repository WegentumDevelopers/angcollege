<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plotmodel;
class PlotsaleController extends Controller
{
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
            ->back()
            ->with('success', 'For Contact us!');
    }
}
