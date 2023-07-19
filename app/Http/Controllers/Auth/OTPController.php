<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\sendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class OTPController extends Controller
{
    public function create(): View
    {
        return view('auth.otp');
    }

    public function generateOTP(Request $request){
        $otp = mt_rand(100000,999999);
        Auth::user()->update([
            'otp' => $request->otp,
            'expire' => now()->addMinutes(1),
        ]);
        Mail::to(Auth::user()->email)->send(new sendMail(Auth::user()->otp));

        return redirect('otp-verification');
        
        
    }

    public function validateOtp(Request $request){
        
        if (  Auth::user()->otp == $request->otp && (Auth::user()->expire > now())) {
            Auth::user()->update([
                'otp' => null,
            ]);
            return redirect()->route('dashboard');

        }
        else{
            return redirect()->route('login');
        }

        
    }

    public function otpResend(){

        Auth::user()->update([
          'otp' =>rand(100000,999999),
          'expire' => now()->addMinutes(1),
        ]);
        
        Mail::to(Auth::user()->email)->send(new sendMail(Auth::user()->otp));
    
        return redirect('otp-verification');
      }

  
}
