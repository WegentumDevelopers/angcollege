<?php

namespace App\Http\Controllers;
use App\Models\Ceo;
use App\Models\Expert;
use App\Models\Property;
use App\Models\Setting;
use App\Models\Feedback;
use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function coomingsoon()
    {
        return view('index');
    }
    public function frontpage()
    {
        // $ceo = Ceo::where('delete_status', 0)
        //     ->where('status', 1)
        //     ->get();
        $expert = Expert::where('status', 1)
            ->where('delete_status', 0)
            ->get();
            $gallery = Gallery::where('status', 1)
            ->where('delete_status', 0)
            ->get();
        $property = Property::where('delete_status', 0)->where('t_status','running')
             ->where('h_show','on')
            ->get()
            ->take(4);
            $property2 = Property::where('delete_status', 0)->where('t_status','upcomming')
             ->where('h_show','on')
            ->get()
            ->take(4);
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        $feed = Feedback::where('delete_status', 0)
            ->where('status', 1)
            ->get()
            ->take(4);
        return view('frontend.index', compact( 'expert', 'property','property2', 'setting', 'feed','gallery'));
    }



    public function header()
    {
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        return view('frontend.layout.header', compact('setting'));
    }

    public function footer()
    {
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        return view('frontend.layout.footer', compact('setting'));
    }

    public function properties()
    {
        // $por=Property::all();
        // if('upcomming_p' != null){
            
        // }
        $property = Property::where('delete_status',0) 
            ->get();
          
           
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        return view('frontend.properties', compact('setting','property'));
    }

    public function property($id)
    {
        $property = Property::find($id);
        // $property=Property::where('delete_status',0)->where('status',1)->get();
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        return view('frontend.property', compact('setting', 'property'));
    }

    public function planner()
    {
        $expert = Expert::where('status', 1)
            ->where('delete_status', 0)
            ->get();
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        return view('frontend.agent', compact('setting', 'expert'));
    }

    public function blog($id)
    {
        $blogg = Blog::find($id);
        $blogss = Blog::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        return view('frontend.blog', compact('setting', 'blogg', 'blogss'));
    }

    public function blogs()
    {
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        $blog = Blog::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        return view('frontend.blogs', compact('setting', 'blog'));
    }
    public function career()
    {
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        return view('frontend.career', compact('setting'));
    }
    public function contact()
    {
        $feed = Feedback::where('delete_status', 0)
            ->where('status', 1)
            ->get()
            ->take(4);
        $setting = Setting::where('delete_status', 0)
            ->where('status', 1)
            ->get();
        return view('frontend.contact', compact('setting', 'feed'));
    }

    Public function search(Request $request)
    {
    
    } 
}
