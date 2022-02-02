<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        
        // if(Auth::user()->getRoles->id === 1 OR Auth::user()->getRoles->id === 2 ){
        //     return view('admin.main.index');
        // }

        if(Auth::check() && Auth::user()->role_id === Null){
            return redirect()->route('home')->with('status', 'You can\'t use Admin Panel');
        }

        return $next($request);
}

}