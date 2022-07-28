<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use lluminate\Support\Facade\Storage;
use lluminate\Support\Facade\File;
use Auth;
class checkUser
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
        $userName = $request->userName;
        $pass = $request->pass;

        $result = DB::select("SELECT * FROM laravel_iig.register_users where user_name = '$userName' and  passwords = password('$pass') order by date_time desc limit 1;");

        $request->result = json_encode($result);

        if (count($result) == 1) {
            session()->put('userName', $userName);

            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
