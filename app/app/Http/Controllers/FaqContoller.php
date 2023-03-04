<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqContoller extends Controller
{
    //

    public function Index(){
        return view('admin.faq.index', [
            'faqs' => Faq::latest()->get()
        ])
        ->with('bheading', 'Manage Faq')
        ->with('breadcrumb', 'Manage Faq');
    }
    public function Create(){
        return view('admin.faq.create')
        ->with('bheading', 'Manage Faqs')
        ->with('breadcrumb', 'Manage Faq');
    }

    public function Store(Request $request){
        $request->validate([
            'contents' => 'required',
            'title' => 'required',
        ]);

        $data = [
            'content' => $request->contents,
            'title' =>  $request->title,
        ];

        Faq::create($data);
        \Session::flash('alert', 'success');
        \Session::flash('alert', 'Faq Added Successfully');
        return back();
    }

    public function Edit($id){
        return view('admin.faq.edit', [
            'faq' => Faq::where('id', decrypt($id))->first()
        ])
        ->with('bheading', 'Manage Faqs')
        ->with('breadcrumb', 'Manage Faqs');
    }

    public function Update(Request $request, $id){
        $data = [
            'content' => $request->contents,
            'title' =>  $request->title,
        ];

        $faq = Faq::where('id', decrypt($id))->first();
        $faq->fill($data)->save();
        \Session::flash('alert', 'success');
        \Session::flash('alert', 'FAQ Updated Successfully');
        return back();
    }

    public function Delete($id){
        $data = Faq::where('id', decrypt($id))->first();
        if($data){
            $data->delete();
            \Session::flash('alert', 'error');
            \Session::flash('alert', 'FAQ Deleted Successfully');
            return back();
        }
        \Session::flash('alert', 'error');
        \Session::flash('alert', 'Somthing went wrong');
        return back();
    }
}
