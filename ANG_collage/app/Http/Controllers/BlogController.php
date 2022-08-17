<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::where('status',1)->where('delete_status',0)->get();
        return view('backend.Blogs.index', compact('blog'));
    }
    public function create()
    {
        return view('backend.Blogs.create');
    }
    public function store(Request $request)
    {
        // $blog=Blog::find($id);
        $blog = new Blog();
        $blog->auther = $request->auther;
        $blog->date = $request->p_date;
        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->tags = $request->tags;
        $blog->short_description = $request->s_desc;
        $blog->long_description = $request->l_desc;
        if ($request->image != null) {
            $blog_photo = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(public_path('blogs'), $blog_photo);
            $blog->images = $blog_photo;
        }
        $blog->save();
        return redirect()->route('blog.list');
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.Blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        // $blog=$request->all();
        // Blog::find($id)->update($blog);
        $blog=Blog::find($id);
        $blog->auther = $request->auther;
        $blog->date = $request->p_date;
        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->tags = $request->tags;
        $blog->short_description = $request->s_desc;
        $blog->long_description = $request->l_desc;
        if ($request->image != null) {
            $blog_photo = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(public_path('blogs'), $blog_photo);
            $blog->images = $blog_photo;
        }
        $blog->status=$request->status;
        $blog->save();
        return redirect()->route('blog.list');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete_status = 1;
        $blog->save();
        return redirect()->route('blog.list')
            ->with('success', 'website deleted sucessfully');
    }
}
