<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactsale;
class ContactsaleController extends Controller
{
    public function store(Request $request){
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
return redirect()->back()->with('success','For Contact us!');
    }
}
