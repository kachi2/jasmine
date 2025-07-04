<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Check2faMail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class Check2faController extends Controller
{
    //

      public function Index(){

        $user = User::where('id', auth()->user()->id)->first();
        $data['otp'] = rand(111111,999999);
        $data['subject'] = 'Login Code';
        $user->update(['new_login' => $data['otp'], 'last_login' => Carbon::now()->addMinute(10)]);
        Mail::to('c.okoli@greatjasmine.com.ng')->send(new Check2faMail($data));
        return view('auth.2fa');
    }

    public function VerifyCode(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        if($user->new_login == $request->code  && $user->last_login >= Carbon::now()){
            
            $user->update(['is_verified' => 1]);
            return redirect()->route('admin.index');
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'The code you entered is invalid or Expired');
            return back();
        }
    }

}
