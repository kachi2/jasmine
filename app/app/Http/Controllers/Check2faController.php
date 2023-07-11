<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Check2faMail;
use Illuminate\Support\Facades\Session;

class Check2faController extends Controller
{
    //

    public function Index(){

        $user = User::where('id', auth()->user()->id)->first();
        $data['otp'] = rand(111111,999999);
        $data['subject'] = 'Login Code';
        $user->update(['new_login' => $data['otp']]);
        Mail::to('mikkynoble@gmail.com')->send(new Check2faMail($data));
        return view('auth.2fa');
    }

    public function VerifyCode($code){
        $user = User::where('id', auth()->user()->id)->first();
        if($user->new_login == $code){
            return redirect()->route('admin.index');
        }else{
            Session::flash('alert', 'error');
            Session::flash('msg', 'The code you entered is invalid or Expired');
            Session::flash('resend');
        }
    }

}
