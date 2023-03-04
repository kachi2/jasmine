<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Slider;
use App\Models\SubMenu;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function Index(){
        return view('frontend.dashboard', [
            'sliders' => Slider::where('status', 1)->latest()->get(),
            'blogs' => Blog::where('status', 1)->latest()->get(),
            'services' => SubMenu::where('menu_id', 2)->get(),
            'testimonials' => Testimonial::latest()->get()
        ]);
    }
}
