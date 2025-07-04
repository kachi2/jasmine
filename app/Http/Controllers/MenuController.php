<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use App\Models\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MenuController extends Controller
{
    public function Index(){
        return view('admin.menu.index', [
            'Pagemenus' => Menu::get(),
        ])
        ->with('bheading', 'Website Menu')
        ->with('breadcrumb', 'Website Menu');
    }

    public function Create(){
        return view('admin.menu.create')
        ->with('bheading', 'Website Menu')
        ->with('breadcrumb', 'Website Menu');
    }

    public function Store(Request $request){

       $request->validate([
            'name' => 'required'
        ]);
        $check = Menu::where('name', $request->name)->first();
        if($check){
            \Session::flash('alert', 'error');
            \Session::flash('message','Menu already exist');
            return back()->withInput();
        }

        $menu = Menu::create([
            'name' => $request->name,
            'slug' => trim($request->name),
            'status' => 1,
        ]);

        if($menu){
            \Session::flash('alert', 'success');
            \Session::flash('message','Menu added successfully');
            return back();
        }
    }

    public function Edit($id = null){
        return view('admin.menu.edit', ['menu' => Menu::where('id', decrypt($id))->first()])
        ->with('bheading', 'Menu Edit')
        ->with('breadcrumb', 'Website Menu');
    }

    public function Update(Request $request, $id){
        $menu = Menu::findorfail(decrypt($id));
        Menu::where('id', $menu->id)->update(['name' => $request->name]);
        \Session::flash('alert', 'success');
        \Session::flash('message','Menu updated successfully');
        return back();
    }

    public function Disable($id){
       // dd($id);
        $menu = Menu::findorfail(decrypt($id));
        Menu::where('id', $menu->id)->update(['status' => 0]);
        \Session::flash('alert', 'error');
        \Session::flash('message','Menu disabled successfully');
        return back();
    }

    public function Enable($id){
        $menu = Menu::findorfail(decrypt($id));
        Menu::where('id', $menu->id)->update(['status' => 1]);
        \Session::flash('alert', 'success');
        \Session::flash('message','Menu Enabled successfully');
        return back();
    }


    public function SubMenuCreate($id){
        $menu =  Menu::where('id', decrypt($id))->first();
        return view('admin.sub_menu.create', ['menu' => $menu])
        ->with('bheading', 'Create sub Menu for '. $menu->name)
        ->with('breadcrumb', 'SubMenu');
    } 

    public function SubMenuStore(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'image' => 'file|required',
            'title' => 'max:245 | required',
        ]);

        $menu = Menu::where('id', decrypt($id))->first();
        if(!$menu){
            return back();
        }
        Menu::where('id', $menu->id)->update(['has_child' => 1, 'is_active' => 1]);

        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $fileName = time().'.'.$ext;
        $image->move('images',$fileName);
        $sub = SubMenu::create([
            'menu_id' => $menu->id,
            'name' => $request->name,
            'title' => $request->title,
            'image' => $fileName
        ]);
        if($sub){
        \Session::flash('alert', 'success');
        \Session::flash('message','Sub Menu created successfully');
        return redirect()->back();
        }else{
            \Session::flash('alert', 'error');
            \Session::flash('message','Something went wrong, try again');
            return back();
        }
    }

    public function SubMenuDelete($id){
        $sub = SubMenu::where('id', decrypt($id))->first();
        //delete all related posts 
        $post = Page::where('sub_menu_id', $sub->id)->get();
        if($post){
            foreach($post as $pp){
                $pp->delete();
            };
        }
        $sub->delete();
        sleep(1);
        $menu = SubMenu::where('menu_id', $sub->menu_id)->first();
    // dd($menu);
        if(!$menu){
            Menu::where('id', $sub->menu_id)->update(['has_child' => null]);
        }
        //dd($menu);
        \Session::flash('alert', 'error');
        \Session::flash('message','Sub Menu Deleted Successfully');
        return back();

    }

    public function SubMenuEdit($id){
        $men = SubMenu::where('id', decrypt($id))->pluck('name');
        return view('admin.sub_menu.edit', [
            'submenu' => SubMenu::where('id', decrypt($id))->first()
        ])
        ->with('bheading', 'Edit '.$men[0] )
        ->with('breadcrumb', 'SubMenu');

    }

    public function SubMenuUpdate(Request $request, $id){
        $data = [];
        $sub = SubMenu::findorfail(decrypt($id));
        if($request->title){
            $data['title'] = $request->title;
        }
        if($request->name){
            $data['name'] = $request->name;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $data['image'] = $fileName;
        }
        $sub = $sub->fill($data);
        if($sub->save()){
            \Session::flash('alert', 'success');
            \Session::flash('message','Sub Menu Updated Successfully');
            return back();
        }else{
            \Session::flash('alert', 'error');
            \Session::flash('message','Something went wrong, tty again');
            return back();
        }
    }


}
