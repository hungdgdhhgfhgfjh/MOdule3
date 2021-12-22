<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckStaffs
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
        // return $next($request);
        $user = Auth::user();

        if (!$user) {
            $user = Auth::guard('staffs')->user();
        }
        if (!$user) {
            Session::flash("news", "bạn chưa đăng nhập");
            return redirect()->back();
        } else {
            if ($user->position === "nhân viên") {
                return $next($request);
            } else {
                Session::flash("news", "bạn không phải là giám đốc");
                return redirect()->back();
            }
        }
    }
}
