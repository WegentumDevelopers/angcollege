<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Feedback;
use App\Models\Blog ;
use App\Models\Gallery ;
use App\Models\About ;
use App\Models\Course ;
class FrontendController extends Controller
{
    public function index(){
        return view('frontend.comming');
    }

    public function header(){
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.include.header',compact('setting'));
    }
    public function footer(){
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.include.footer',compact('setting'));
    }

    public function home(){
        $about=About::where('delete_status',0)->get();
        $gallery=Gallery::where('status',1)->where('delete_status',0)->get()->take(12);
        $feedback=Feedback::where('status',1)->where('delete_status',0)->get();
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.index',compact('setting','feedback','gallery','about'));
    }
    public function about(){
        $about=About::where('delete_status',0)->get();
        $feedback=Feedback::where('status',1)->where('delete_status',0)->get();
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.about_us',compact('setting','feedback','about'));
    }

    public function contact(){
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.contact',compact('setting'));
    }

    public function blogs(){
        $blogs=Blog::where('delete_status',0)->where('status',1)->get();
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.blogs',compact('setting','blogs'));
    }

    public function blog($id){
        $blog=Blog::find($id);
        $bloggs=Blog::where('delete_status',0)->where('status',1)->get();
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.single-blog',compact('setting','blog','bloggs'));
    }




    public function course($id){
        $cos=Course::find($id);
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.course-details',compact('setting','cos'));
    }

    public function law(){
        return view('frontend.law');
    }

    public function engineering(){
        return view('frontend.engineering_courses');
    }

    public function managements(){
        return view('frontend.management_courses');
    }

    public function medical(){
        return view('frontend.medical_courses');
    }

    public function computer(){
        return view('frontend.computer_science');
    }

    public function labs(){
        $gallery=Gallery::where('status',1)->where('delete_status',0)->where('lab','on')->get()->take(12);
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.labs',compact('setting','gallery'));
    }
    public function library(){
        $gallery=Gallery::where('status',1)->where('delete_status',0)->where('lab', )->get()->take(12);
        $setting=Setting::where('status',1)->where('delete_status',0)->get();
        return view('frontend.library',compact('setting','gallery'));
    }
    public function Btech(){
        return view('frontend.btech');
    }
    public function bba(){
        return view('frontend.bba');
    }
    public function llb(){
        return view('frontend.llb');
    }
    public function mba(){
        return view('frontend.mba');
    }
    public function bca(){
        return view('frontend.bca');
    }
    public function mca(){
        return view('frontend.mca');
    }
    public function mcom(){
        return view('frontend.mcom');
    }
    public function ploytechnic(){
        return view('frontend.polytechnic');
    }
    public function dpharma_al(){
        return view('frontend.dpharma_al');
    }
    public function dpharma_ay(){
        return view('frontend.dpharma_ay');
    }
    public function dnys(){
        return view('frontend.dnys');
    }
    public function gnm(){
        return view('frontend.gnm');
    }
}
