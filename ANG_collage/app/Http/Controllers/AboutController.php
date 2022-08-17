<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people=About::where('delete_status',0)->get();
        return view('backend.about_us.index',compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about_us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $people = new About;
        if ($request->fimage != null) {
            $file_photo = time() . 'f.' . request()->fimage->getClientOriginalExtension();
            $request->fimage->move('images', $file_photo);
            $people->fimage = $file_photo;
        }
        $people->fname = $request->fname;
        $people->fmsg = $request->fmsg;

        if ($request->dimage != null) {
            $file_photo1 = time() . 'd.' . request()->dimage->getClientOriginalExtension();
            $request->dimage->move('images', $file_photo1);
            $people->dimage = $file_photo1;
        }
        $people->dname = $request->dname;
        $people->dmsg = $request->dmsg;

        if ($request->mdimage != null) {
            $file_photo2 = time() . 'md.' . request()->mdimage->getClientOriginalExtension();
            $request->mdimage->move('images', $file_photo2);
            $people->mdimage = $file_photo2;
        }
        $people->mdname = $request->mdname;
        $people->mdmsg = $request->mdmsg;


        if ($request->about_img != null) {
            $file_photo3 = time() . 'a.' . request()->about_img->getClientOriginalExtension();
            $request->about_img->move('images', $file_photo3);
            $people->about_img = $file_photo3;
        }
        // $people->mdname = $request->mdname;
        $people->about = $request->aboutmsg;


// trust form
        if ($request->trust_img != null) {
            $file_photo4 = time() . 't.' . request()->trust_img->getClientOriginalExtension();
            $request->trust_img->move('images', $file_photo4);
            $people->trust_img = $file_photo4;
        }
        // $people->mdname = $request->mdname;
        $people->trust = $request->trustmsg;

        $people->save();
        return redirect()->route('about_us.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($about)
    {
        // $feedback=Feedback::where('id',$feedback)->first();

        $about=About::where('id',$about)->first();
        return view('backend.about_us.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $about)
    {
        $about=About::where('id',$about)->first();
        // return $request;
        if ($request->fimage != null) {
            $file_photo = time() . 'f.' . request()->fimage->getClientOriginalExtension();
            $request->fimage->move('images', $file_photo);
            $about->fimage = $file_photo;
        }
        $about->fname = $request->fname;
        $about->fmsg = $request->fmsg;

        if ($request->dimage != null) {
            $file_photo1 = time() . 'd.' . request()->dimage->getClientOriginalExtension();
            $request->dimage->move('images', $file_photo1);
            $about->dimage = $file_photo1;
        }
        $about->dname = $request->dname;
        $about->dmsg = $request->dmsg;

        if ($request->mdimage != null) {
            $file_photo2 = time() . 'md.' . request()->mdimage->getClientOriginalExtension();
            $request->mdimage->move('images', $file_photo2);
            $about->mdimage = $file_photo2;
        }
        $about->mdname = $request->mdname;
        $about->mdmsg = $request->mdmsg;


        if ($request->about_img != null) {
            $file_photo3 = time() . 'a.' . request()->about_img->getClientOriginalExtension();
            $request->about_img->move('images', $file_photo3);
            $about->about_img = $file_photo3;
        }
        // $about->mdname = $request->mdname;
        $about->about = $request->aboutmsg;


// trust form
        if ($request->trust_img != null) {
            $file_photo4 = time() . 't.' . request()->trust_img->getClientOriginalExtension();
            $request->trust_img->move('images', $file_photo4);
            $about->trust_img = $file_photo4;
        }
        // $about->mdname = $request->mdname;
        $about->trust = $request->trustmsg;

        $about->save();
        return redirect()->route('about_us.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
