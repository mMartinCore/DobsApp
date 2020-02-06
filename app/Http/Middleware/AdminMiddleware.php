<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminMiddleware
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

         //check here if the user is authenticated
         if ( !Auth::check())
         {
           return redirect()->route('login');
         }



        $user = User::all()->count();
        if (!($user == 1)) {
            if (!Auth::user()->hasPermissionTo('Administer roles & permissions')) //If user does //not have this permission
        {


                        if ($request->is('users/create')) //If user is editing a  corpses
                        {
                        if (!Auth::user()->hasPermissionTo('create division user')) {
                            abort('401');
                        } else {
                            return $next($request);
                        }
                    }



            }
        }




        return $next($request);
    }
}
