<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
     protected $auth;

        /**
        * Create a new filter instance.
        *
        * @param Guard $auth
        * @return void
        */
        public function __construct(Guard $auth){
            $this->auth = $auth;
        }

        /**
       * Handle an incoming request.
       *
       * @param \Illuminate\Http\Request $request
       * @param \Closure $next
       * @return mixed
       */

       public function handle($request, Closure $next){
            if ($this->auth->guest()) {
                 if ($request->ajax()) {
                      return response('Unauthorized.', 401);
                 } else {
                      return redirect()->guest('admin/login');
                 }
            }
            return $next($request);
       }

}
