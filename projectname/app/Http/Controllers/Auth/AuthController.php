<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{   
    protected $redirectTo = '/revolution/';
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function authenticated(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        $credenciales = $request->only($this->loginUsername(), 'password');
        if ($request->has('remember')) {
            if (Auth::attempt($credenciales,$request->has('remember'))) {
                $this->redireccion($credenciales);
            }
        }
        else{
            if (Auth::attempt($credenciales)) {
                return $this->redireccion($credenciales);
                $this->redireccion($credenciales);
            }
        }
        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);

    }

    protected function redireccion($credenciales){

        $user = User::where('email', $credenciales['email'])->first();
        switch ($user->rol) {
            case 'coordinador':
                $this->redirectTo = '/layouts/perfil/';
                break;
            case 'analista':
                $this->redirectTo = '/revolution/analista/';
                break;
            case 'empleado':
                $this->redirectTo = '/revolution/empleado/';
                break;
            case 'empleado':
                $this->redirectTo = '/revolution/empresa/';
                break;
        }
        return redirect()->intended($this->redirectPath());

    }
}
