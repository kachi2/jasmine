<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    //

    public function Index(){

        return view('admin.category.index', 
        [
            'category' => Industry::latest()->get()
        ])
        ->with('bheading', 'Manage Jobs Industry')
        ->with('breadcrumb', 'Jobs Industry');
    }

    public function Create(){
        return view('admin.category.create')
        ->with('bheading', 'Create Jobs Industry')
        ->with('breadcrumb', 'Create Jobs Industry');
    }

    public function Store(Request $request){

        $request->validate([
             'name' => 'required'
         ]);
         $check = Industry::where('name', $request->name)->first();
         if($check){
             \Session::flash('alert', 'error');
             \Session::flash('message','Industry already exist');
             return back()->withInput();
         }
 
         $menu = Industry::create([
             'name' => $request->name,
         ]);
         if($menu){
             \Session::flash('alert', 'success');
             \Session::flash('message','Industry added successfully');
             return back();
         }
     }
 
     public function Edit($id = null){
         return view('admin.category.edit', ['category' => Industry::where('id', decrypt($id))->first()])
         ->with('bheading', 'Industry Edit')
         ->with('breadcrumb', 'Job Industry');
     }
 
     public function Update(Request $request, $id){
         $menu = Industry::findorfail(decrypt($id));

         Industry::where('id', $menu->id)->update(['name' => $request->name]);
         \Session::flash('alert', 'success');
         \Session::flash('message',' Industry Updated successfully');
         return back();
     }
 
  
 
     public function Delete($id){
         $menu = Industry::findorfail(decrypt($id));
         $menu->delete();
         \Session::flash('alert', 'success');
         \Session::flash('message','Industry Deleted successfully');
         return back();
     }
}
