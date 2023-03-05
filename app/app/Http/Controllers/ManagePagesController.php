<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\SubMenu;

class ManagePagesController extends Controller
{
    //


    public function Index(){

        return view('admin.pages.index', [
            'pages' => Page::get()
        ])
        ->with('bheading', 'Manage pages')
        ->with('breadcrumb', 'Pages Index');
    }


    public function PagesCreate(){
        return view('admin.pages.create', [
            'Pagesmenu' => Menu::get()
        ])
        ->with('bheading', 'Manage pages')
        ->with('breadcrumb', 'Create Page');
    }

    public function GetSubMenus($id){
        $subMenu = SubMenu::where(['menu_id' => $id])->get();
        return response()->json($subMenu);
    }

    public function PagesStore(Request $request){
        $request->validate([
            'title' => 'required',
            'contents' => 'required',
            'image' => 'required',
        ]);

        $data = [];
        $data['status'] = 1;

        try{ 
        if(is_numeric($request->subMenu_id) ){
            $data['sub_menu_id'] = $request->subMenu_id;
            $subChek = SubMenu::where(['id' => $request->subMenu_id])->first();
            if($subChek->is_active == 1){
                \Session::flash('alert', 'error');
                \Session::flash('message', 'You cannot assign a page to this Menu, a page already exit, you can delete the page to reassign');
                return back()->withInput();
            }
            $subChek->update(['is_active' => 1]);
        }else{
            $data['menu_id'] = $request->menu_id;
            $MenuChek = Menu::where(['id' => $request->menu_id])->first();
            if($MenuChek->is_active == 1){
                \Session::flash('alert', 'error');
                \Session::flash('message', 'You cannot assign a page to this Menu, a page already exit, you can delete the page to reassign');
            return back()->withInput();
            }
            $MenuChek->update(['is_active' => 1]);
        }
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
            $data['metas'] = $fileName;
        }
        
        Page::create($data);
        \Session::flash('alert', 'success');
        \Session::flash('message','Page added successfully');
        return back();
    
    }catch(\Exception $e){
        \Session::flash('alert', 'error');
        \Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
}

    public function PagesEdit($id){
        return view('admin.pages.edit', [
            'page' => Page::where('id', decrypt($id))->first()
        ])
        ->with('bheading', 'Manage pages')
        ->with('breadcrumb', 'Edit Page');

    }

    public function PagesUpdate(Request $request, $id){
      
        if($request->title){
            $data['title'] = $request->title;
        }
        if($request->contents){
            $data['contents'] = $request->contents;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $data['metas'] = $fileName;
        }
        Page::where('id', decrypt($id))
        ->update($data);
        \Session::flash('alert', 'success');
        \Session::flash('message','Page updated successfully');
        return back();
        
    }

    public function PagesDelete($id){
        $page = Page::where('id', decrypt($id))->first();
        $page->delete();
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Deleted successfully');
        return back();
    }

    public function PagesActivate($id){
        $page = Page::where('id', decrypt($id))->first();
        $page->update(['status' => 1]);
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Updated successfully');
        return back();
    }

    public function PagesDisable($id){
        $page = Page::where('id', decrypt($id))->first();
        $page->update(['status' => 0]);
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Update successfully');
        return back();
    }
}
