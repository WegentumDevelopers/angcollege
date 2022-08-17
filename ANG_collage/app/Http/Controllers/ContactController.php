<?php

namespace App\Http\Controllers;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function store(Request $request){
$contact= new Enquiry;
$contact->Name=$request->name;
$contact->email=$request->email;
$contact->contact=$request->contact;
// $contact->subject=$request->subject;
$contact->message=$request->msg;
$contact->save();
return redirect()->back()->with('success','Your Message reached Us');
   }
}
