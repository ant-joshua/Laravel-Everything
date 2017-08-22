<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Mail;
use Illuminate\Support\Facades\Redirect;
use App\Jobs\SendVerificationEmail;


class Verify
{


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         if (!Auth::guest() && Auth::user()->verified) {
            
            return $next($request);
        }
        else{
            $user = Auth::user();

            dispatch(new SendVerificationEmail($user));

            Auth::logout();
           return redirect('login')->with('warning', 'You Are Not Logged in or Not Verified Please Confirm First');
        }
        
    }
}