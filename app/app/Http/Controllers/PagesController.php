<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Support\Facades\Mail;
use App\Models\Page;
use App\Models\Faq;
use Illuminate\Support\Facades\Session;
use App\Models\ClientJob;
use App\Mail\ContactUs;
use App\Models\Industry;

class PagesController extends Controller
{
    public function Pages($id){
        $id = decrypt($id);
        $menuId = Menu::where('id', $id)->first();
        //dd( $menuId);
        if($menuId->slug == 'Blog'){
            return view('frontend.blogs', ['blogs' => Blog::latest()->get(), 'popular' => Blog::where('views', '>', 0)->get()]);
           }
        if($menuId->slug == 'jobs'){
            return view('frontend.jobs',[
                'jobs' => ClientJob::where('status', '=', 1)->latest()->get(),
                'industries' => Industry::get(),
            ]);
        }

        if($menuId->slug == "FAQ"){
            return view('frontend.faq', [
                'faqs' => Faq::latest()->get()
            ]);
        }
        if($menuId->slug == 'contact'){
            return view('frontend.contact', [
                'key' => rand(999,1111).substr(base64_encode('sdsjkdsdsd'), 0, 10),
            ]);
        }
        if($menuId->slug == 'quote'){
            return view('frontend.quotation', [
                'services' => SubMenu::where('menu_id', 2)->get(),
                'key' => rand(999,1111).substr(base64_encode('sdsjkdsdsd'), 0, 10),
            ]);
        }
        if($menuId->has_child){
            $pages['pages'] = SubMenu::where(['menu_id' => $menuId->id, 'is_active' => 1])->get();
            $pages['breadcrums'] = $pages['pages'][0]->Menu->name;
            return view('frontend.pages', $pages);
        }else{
            $pages = Page::where('menu_id', $menuId->id)->first();
        if(!$pages){
            return back();
        }
            $pages['pages'] = Page::where('menu_id', $menuId->id)->first();
            $pages['breadcrums'] =  $menuId->name;
            $pages['sidebar'] = Menu::get();
            return view('frontend.subpages', $pages);
        }
    }


    public function Subpages($id){
        $id = decrypt($id);
        $id = SubMenu::where('id', $id)->first();
        $pages = Page::where('sub_menu_id', $id->id)->first();
        if(!$pages){
            return back();
        }
        $pages['pages'] = $pages;
        $pages['breadcrums'] =  $id->name;
        $pages['sidebar'] = SubMenu::where(['is_active' =>1, 'menu_id' =>$id->menu_id])->get();
        return view('frontend.subpages', $pages);
    }

    public function BlogDetails($id){
        $id = decrypt($id);
        return view('frontend.blog_details', [
            'blogs' => Blog::where('id', $id)->first(),
            'popular' => Blog::where('views', '>', '10')->get(),
        ]);
    }

    public function JobCategory($id){
        $id = explode('-', $id);
        $jobs = ClientJob::where('industries_id', $id)->get();
        if(count($jobs)> 0){
        return view('frontend.jobs', [
            'jobs' => ClientJob::where('industries_id', $id)->get(),
            'industries' => Industry::get()
        ]);
    }else{
        return back();
    }
    }

    public function ContactEmails(Request $request){

        if(!$request->key){
            return back();
        }
       $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'captcha' => 'required',
            
        ]);

       $capt = captcha_check($request->captcha);
        if(!$capt){
            Session::flash('message', 'Captcha does not match, try again');
            Session::flash('alert', 'danger');
            return back()->withInput($request->all());
           
        }
        $data = [
            'name' =>  $request->name,
            'phone' => $request->phone,
            'email' =>  $request->email,
            'message' => $request->message
        ];

        Mail::to('jesmikky@gmail.com')->send(new ContactUs($data));
        return back();
    }
}
