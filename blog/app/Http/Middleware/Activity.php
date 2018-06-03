<?php

namespace App\Http\Middleware;
use Closure;

class Activity
{

	public function handle($request, Closure $next)
	{
		if ( time() <strtotime('2018-06-06') ) {
			return redirect('activity0');
		}

		return $next($request);
	}
	
}