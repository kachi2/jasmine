<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function Index(){
        return view('admin.settings.sliders', [
            'sliders' => Slider::latest()->get()
        ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }
    public function CreateSlider(){
        return view('admin.settings.create_sliders')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function StoreSlider(Request $request){
        $request->validate([
            'image' => 'required',
            'content' => 'required',
            'title' => 'required',
        ]);

       //dd(request()->file('images'));

        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
        
    }
        $data = [
            'image' =>   $fileName,
            'content' => $request->content,
            'title' =>  $request->title,
            'status' => 1
        ];

      //  dd($data);
        Slider::create($data);
        \Session::flash('alert', 'success');
        \Session::flash('alert', 'Slider Added Successfully');
        return back();
    }

    public function EditSlider($id){
        $slider = Slider::where('id', decrypt($id))->first();
        return view('admin.settings.edit_sliders')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function UpdateSlider(Request $request, $id){
        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = pathinfo($image, PATHINFO_FILENAME);
            $fileName = $name.time().'.'.$ext;
            $image->move('images',$fileName);
    }
        $data = [
            'image' =>  $fileName,
            'content' => $request->content,
            'title' =>  $request->title,
        ];

        $sl = Slider::where('id', decrypt($id))->first();
         $sl->fill($data)->save();
        \Session::flash('alert', 'success');
        \Session::flash('alert', 'Slider Updated Successfully');
    }

    public function DeleteSlider($id){
        $slider = Slider::where('id', decrypt($id))->first();
        if($slider){
            $slider->delete();
            \Session::flash('alert', 'error');
            \Session::flash('alert', 'Slider Deleted Successfully');
            return back();
        }
        \Session::flash('alert', 'error');
        \Session::flash('alert', 'Somthing went wrong');
        return back();
    }

    public function ActivateSlider($id){
        $slid = Slider::where('id', decrypt($id))->first();
        $slid->update(['status' => 1]);
        \Session::flash('alert', 'success');
        \Session::flash('alert', 'Slider Activated Successfully');
        return back();
    }
    
    public function DeactivateSlider($id){
        $slid = Slider::where('id', decrypt($id))->first();
        $slid->update(['status' => null]);
        \Session::flash('alert', 'error');
        \Session::flash('alert', 'Slider Deactivated Successfully');
        return back();
    }
   

}
