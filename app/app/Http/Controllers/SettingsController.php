<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;

class SettingsController extends Controller
{
    //

    public function Index(){
       
        return view('admin.settings.index')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function Testimonials(){
       
        return view('admin.settings.testimonials', [
            'testimony' => Testimonial::latest()->get()
        ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function Socials(){
       
        return view('admin.settings.socials')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function Abouts(){
       
        return view('admin.settings.abouts');
       
    }

    // public function Index(){
       
    //     return view('admin.settings.index')
    //     ->with('bheading', 'Website Settings')
    //     ->with('breadcrumb', 'EWebsite Settings');
    // }

    public function CreateTestimonial(){
        return view('admin.settings.add_testimony')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function StoreTestimonial(Request $request){
        $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);
        $req = [
            'name' => $request->name,
            'content' => $request->content
        ];

        $ttm = Testimonial::create($req);
        if($ttm){
            \Session::flash('alert', 'success');
            \Session::flash('message', 'Testimonial Added Successfully');
            return back();
        }else{
            \Session::flash('alert', 'error');
            \Session::flash('message', 'Request failed, try again later');
            return back();
        }
    }
    

    public function EditTestimonial($id){
        return view('admin.settings.edit_testimony', [
            'testimonial' => Testimonial::where('id', decrypt($id))->first()
        ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function UpdateTestimonial(Request $request, $id){
        $data = [
            'name' => $request->name,
            'content' => $request->content
        ];
        $testim = Testimonial::where('id', decrypt($id))->first();
        $testim->fill($data)->save();
        \Session::flash('alert', 'success');
        \Session::flash('message', 'Testimonial updated Successfully');
        return back();
    }

    public function DeleteTestimonial($id){
        $testim = Testimonial::where('id', decrypt($id))->first();
        if($testim){
            $testim->delete();
            \Session::flash('alert', 'error');
            \Session::flash('message', 'Testimonial deleted Successfully');
            return back();
        }
        \Session::flash('alert', 'error');
        \Session::flash('message', 'Something went wrong, try again');
        return back();
    
    }

    public function UpdateSocials(Request $request){

        $data = [
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedIn' => $request->linkedIn,
        ];
        $testim = Setting::first();
        $testim->fill($data)->save();
        \Session::flash('alert', 'success');
        \Session::flash('message', 'Testimonial updated Successfully');
        return back();
    }

    public function UpdateSettings(Request $request){

      
        $data = [
            'site_name' => $request->site_name,
            'site_phone' => $request->site_phone,
            'site_email' => $request->site_email,
            'address' => $request->address,
            'opening_hours' => $request->opening_hours,
            'about' => $request->about_us
        ];

        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = 'logo'.'.'.$ext;
            $image->move('assets',$fileName);
            $data['logo'] = $fileName;
        }
        $testim = Setting::first();
        $testim->fill($data)->save();
        \Session::flash('alert', 'success');
        \Session::flash('message', 'Testimonial updated Successfully');
        return back();
    }

    public function UserAccount(){
        $user = User::where('id', auth()->user()->id)->first();
        return view('admin.settings.account', ['user' => $user])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function UpdateAccount(Request $request){
        $data = [];
        if($request->name){
            $data['name'] = $request->name;
        }
        if($request->email){
            $data['email'] = $request->email;
        }
          if($request->phone){
            $data['phone'] = $request->phone;
        }
        if($request->password){
            $data['password'] = bcrypt($request->password);
        } 
        $user = User::where('id', auth()->user()->id)->first();
      $ss =   $user->fill($data)->save();
      if($ss){
        \Session::flash('alert', 'success');
        \Session::flash('message', 'Details Updated Successfully');
        return back();
      }else{
        \Session::flash('alert', 'error');
        \Session::flash('message', 'Request not completed, Nothing changed ');
        return back();

      }
    }
}
