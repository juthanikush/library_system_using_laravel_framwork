<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admincheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('ADMIN_LOGIN')){

        }else{
            $request->session()->flash('error','Access Denied');
            return redirect('admin_login');
        }
        return $next($request);
    }
}
