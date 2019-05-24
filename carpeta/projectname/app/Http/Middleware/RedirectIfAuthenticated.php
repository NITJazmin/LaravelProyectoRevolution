<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            $user = Auth::user();
            switch ($user->rol) {
                case 'coordinador':
                    return redirect()->route('coordinador');
                case 'analista':
                    return redirect()->route('analista');
                case 'empleado':
                    return redirect()->route('cliente');
                case 'empleado':
                    $this->redirectTo = '/revolution/empresa/';
                    break;
            }            
        }

        return $next($request);
    }
}
