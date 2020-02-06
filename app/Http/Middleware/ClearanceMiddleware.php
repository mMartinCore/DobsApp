<?php

namespace App\Http\Middleware;
use Redirect;
use Closure;
use Illuminate\Support\Facades\Auth;

class ClearanceMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
          //check here if the user is authenticated
    if ( !Auth::check())
    {
      return redirect()->route('login');
    }


        if ($request->is('corpses/create'))//If user is creating a  corpses
         {
            if (!Auth::user()->hasPermissionTo('write'))
         {
                abort('401');
            }
         else {
                return $next($request);
            }
        }

        if ($request->is('corpses/*/edit')) //If user is editing a  corpses
         {
            if (!Auth::user()->hasPermissionTo('write')) {
                abort('401');
            } else {
                return $next($request);
            }
        }


        if ($request->is('users')) //If user is editing a  corpses
        {
           if (!Auth::user()->hasPermissionTo('Administer roles & permissions')) {

                        if ($request->is('users/create')) //If user is editing a  corpses
                        {
                        if (!Auth::user()->hasPermissionTo('create division user')) {
                            abort('401');
                        } else {
                            return $next($request);
                        }
                    }


           } else {
               return $next($request);
           }
       }

       if ($request->is('users/*/edit')) //If user is editing a  corpses
       {
          if (!Auth::user()->hasPermissionTo('Administer roles & permissions')) {
              abort('401');
          } else {
              return $next($request);
          }
      }



        if ($request->is('corpses')) //If user is editing a  corpses
        {
           if (!Auth::user()->hasPermissionTo('view')) {
               abort('401');
           } else {
               return $next($request);
           }
       }


       if ($request->is('thirtyDaylist')) //If user is editing a  corpses
       {
          if (!Auth::user()->hasPermissionTo('view')) {
              abort('401');
          } else {
              return $next($request);
          }
      }


      if ($request->is('noRequest')) //If user is editing a  corpses
      {
         if (!Auth::user()->hasPermissionTo('view')) {
             abort('401');
         } else {
             return $next($request);
         }
     }



     if ($request->is('approve')) //If user is editing a  corpses
     {
        if (!Auth::user()->hasPermissionTo('view')) {
            abort('401');
        } else {
            return $next($request);
        }
    }


    if ($request->is('notApprove')) //If user is editing a  corpses
    {
       if (!Auth::user()->hasPermissionTo('view')) {
           abort('401');
       } else {
           return $next($request);
       }
   }

   if ($request->is('/allReadCorpseNofication')) //If user is editing a  corpses
   {
      if (!Auth::user()->hasPermissionTo('view')) {
          abort('401');
      } else {
          return $next($request);
      }
  }


//   if ($request->is('/readNewCorpseNotify')) //If user is editing a  corpses
//   {
//      if (!Auth::user()->hasPermissionTo('view')) {
//          abort('401');
//      } else {
//          return $next($request);
//      }
//  }




        if ($request->isMethod('Delete')) //If user is deleting a  corpses
         {
            if (!Auth::user()->hasPermissionTo('Delete')) {
                abort('401');
            }
         else
         {
                return $next($request);
            }
        }

        return $next($request);
    }
}
