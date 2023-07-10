<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Image;
class BlogController extends Controller
{
    
    public function Index(){
        return view('admin.blogs.index', [
            'blogs' => Blog::latest()->get()
        ])
        ->with('bheading', 'Manage Blogs')
        ->with('breadcrumb', 'Blog Post');
    }

    public function BlogsCreate(){
        return view('admin.blogs.create')
        ->with('bheading', 'Manage Blogs')
        ->with('breadcrumb', 'Post Blogs');
    }

    public function BlogsStore(Request $request){
        $request->validate([
            'title' => 'required',
            'contents' => 'required',
            'image' => 'required',
        ]);

        //dd($request->all());

        $data = [];
        $data['status'] = 1;
       try{ 
        if($request->contents){
            $data['contents'] = $request->contents;
        }
        if($request->title) {
            $data['title'] = $request->title;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            \Image::make(request()->file('image'))->resize(400,250)->save('images/'.$fileName);
            $data['image'] = $fileName;
        }
         Blog::create($data);
        \Session::flash('alert', 'success');
        \Session::flash('message','Page added successfully');
        return back();
    
   }catch(\Exception $e){
        \Session::flash('alert', 'error');
        \Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
    }

    public function BlogsEdit($id){
        return view('admin.blogs.edit', [
            'blog' => Blog::where('id', decrypt($id))->first(),
            'latest' => Blog::latest()->take(5)->get()
        ])
        ->with('bheading', 'Manage Blogs')
        ->with('breadcrumb', 'Edit Blog Post');
    }

    public function BlogsUpdate(Request $request, $id){
        $blog = Blog::whereId(decrypt($id))->first();
        try{ 
        if($request->contents){
            $blog->contents = $request->contents;
        }
        if($request->title) {
            $blog->title = $request->title;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            \Image::make(request()->file('image'))->resize(400,250)->save('images/'.$fileName);
            $blog->image = $fileName;
        }
        $blog->save();
        \Session::flash('alert', 'success');
        \Session::flash('message','Blog added successfully');
        return back();
    
    }catch(\Exception $e){
        \Session::flash('alert', 'error');
        \Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
    }

    public function BlogsDelete($id){
        $blog = Blog::whereId(decrypt($id))->first();
        $blog->delete();
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Deleted successfully');
        return back();
    }

    public function BlogsActivate($id){
        $blog = Blog::whereId(decrypt($id))->first();
        $blog->update(['status' => 1]);
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Updated successfully');
        return back();
    }

    public function BlogsDisable($id){
        $blog = Blog::whereId(decrypt($id))->first();
        $blog->update(['status' => 0]);
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Update successfully');
        return back();
}

}
