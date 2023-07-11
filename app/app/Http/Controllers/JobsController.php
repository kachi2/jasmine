<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\AppliedJob;
use App\Models\ClientJob;
use App\Models\Industry;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;

class JobsController extends Controller
{

    public function Index(){
        return view('admin.jobs.index', [
            'jobs' => ClientJob::latest()->get()
        ])
        ->with('bheading', 'Manage Jobs')
        ->with('breadcrumb', 'Post Jobs');
    }

    public function JobsCreate(){
        return view('admin.jobs.create', [
            'industries' => Industry::get()
        ])
        ->with('bheading', 'Manage Jobs')
        ->with('breadcrumb', 'Post Jobs');
    }

    public function JobsStore(Request $request){
     
        if($request->title){
            $data['title'] = $request->title;
        }
        if($request->contents){
            $data['job_details'] = $request->contents;
        }
        if($request->company){
            $data['company'] = $request->company;
        }
        if($request->industry_id){
            $data['industries_id'] = $request->industry_id;
        }
        if($request->location){
            $data['location'] = $request->location;
        }
        if($request->daterangepicker){
            $data['salary_range'] = $request->daterangepicker;
        }
        if($request->job_type){
            $data['job_type'] = $request->job_type;
        }
        $data['status'] = 1;

        $checkIndustries = Industry::where('name', 'LIKE', "%$request->industry_id%")->first();
        if($checkIndustries){
            $data['industries_id'] = $checkIndustries->id;
        }else{
            $crt = Industry::create([
                'name' =>  $request->industry_id
            ]);
            sleep(1);
            $checkIndustries = Industry::where('name', '%like', $request->industry_id)->first();
            if($crt){
            $data['industries_id'] = $checkIndustries->id;
            }
        }

        // $data = [
        //     'title' => $request->title,
        //     'job_details' => $request->contents,
        //     'company' => $request->company,
        //     'industries_id' => $request->industry_id,
        //     'location' => $request->location,
        //     'deadline' => $request->daterangepicker,
        //     'salary_range' => $request->salary_range,
        //     'job_type' => $request->job_type,
        //     'status' => 1
        // ];
      // try{ 
        // if($request->image){
        //     $image = $request->file('image');
        //     $ext = $image->getClientOriginalExtension();
        //     $fileName = time().'.'.$ext;
        //     $image->move('images',$fileName);
        //     $data['logo'] = $fileName;
        // }
         ClientJob::create($data);
       
        \Session::flash('alert', 'success');
        \Session::flash('message','Job Posted successfully');
        return back();
    
   //}catch(\Exception $e){
        \Session::flash('alert', 'error');
        \Session::flash('message','Request Failed, try again');
        return back()->withInput();
  //  }
    }

    public function JobsEdit($id){
        return view('admin.jobs.edit', [
            'job' => ClientJob::where('id', decrypt($id))->first(),
            'industries' => Industry::get()
        ])
        ->with('bheading', 'Manage Jobs')
        ->with('breadcrumb', 'Edit Jobs');
    }

    public function JobsUpdate(Request $request, $id){
        $jobs = ClientJob::whereId(decrypt($id))->first();
    try{
        // $data = [
        //     'title' => $request->title,
        //     'job_details' => $request->contents,
        //     'company' => $request->company,
        //     'industries_id' => $request->industry_id,
        //     'location' => $request->location,
        //     'deadline' => $request->daterangepicker,
        //     'salary_range' => $request->salary_range,
        //     'job_type' => $request->job_type,
        //     'status' => 1
        // ];
        // if($request->image){
        //     $image = $request->file('image');
        //     $ext = $image->getClientOriginalExtension();
        //     $fileName = time().'.'.$ext;
        //     $image->move('images',$fileName);
        //     $data['logo'] = $fileName;
        // }

        if($request->title){
            $data['title'] = $request->title;
        }
        if($request->contents){
            $data['job_details'] = $request->contents;
        }
        if($request->company){
            $data['company'] = $request->company;
        }
        if($request->industry_id){
            $data['industries_id'] = $request->industry_id;
        }
        if($request->location){
            $data['location'] = $request->location;
        }
        if($request->daterangepicker){
            $data['salary_range'] = $request->daterangepicker;
        }
        if($request->job_type){
            $data['job_type'] = $request->job_type;
        }
        $data['status'] = 1;
        
        $jobs->fill($data)->save();
        \Session::flash('alert', 'success');
        \Session::flash('message','Job updated successfully');
        return back();
    }catch(\Exception $e){
        \Session::flash('alert', 'error');
        \Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
    }


    public function JobsDelete($id){
        $job = ClientJob::whereId(decrypt($id))->first();
        if($job->applicants){
            \Session::flash('alert', 'error');
            \Session::flash('message','You cannot delete this job, Candidates already applied');
            return back();
        }
      //  dd($job->Applicants);
        $job->delete();
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Deleted successfully');
        return back();
    }

    public function JobsActivate($id){
        $job = ClientJob::whereId(decrypt($id))->first();
        $job->update(['status' => 1]);
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Updated successfully');
        return back();
    }

    public function JobsDisable($id){
        $job = ClientJob::whereId(decrypt($id))->first();
        $job->update(['status' => 0]);
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Update successfully');
        return back();
}

    public function JobsApplied($id){
        return view('admin.jobs.applicants', [
        'applicants' => AppliedJob::where('client_jobs_id', decrypt($id))->get()
        ])
        ->with('bheading', 'Manage Jobs')
        ->with('breadcrumb', 'Applicants');
    }

}
