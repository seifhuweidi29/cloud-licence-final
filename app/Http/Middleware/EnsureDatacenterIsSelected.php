<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureDatacenterIsSelected
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('datacenter')) {
            return redirect()->route('datacenter.selection');
        }

        return $next($request);
    }
}
