<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course=Course::where('delete_Status',0)->get();
        return view('backend.courses.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course=Course::where('delete_status',0)->get();
        return view('backend.courses.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course=new Course;
        $course->c_name=$request->cname;
        if($request->c_image!=null){
            $file_photo=time().'.'.request()->c_image->getClientOriginalExtension();
            $request->c_image->move(('images'),$file_photo);
            $course->c_image=$file_photo;
    }
    $course->parent_course=$request->p_course;
    $course->description=$request->description;
    $course->save();
    return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $course1=Course::where('delete_status',0)->get();
        return view('backend.courses.edit',compact('course1','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->c_name=$request->cname;
        if($request->c_image!=null){
            $file_photo=time().'.'.request()->c_image->getClientOriginalExtension();
            $request->c_image->move(('images'),$file_photo);
            $course->c_image=$file_photo;
    }
    $course->parent_course=$request->p_course;
    $course->description=$request->description;
    // $course->status=$request->status;
    $course->save();
    return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete_status=1;
        $course->save();
        return redirect()->route('course.index');
    }
}
