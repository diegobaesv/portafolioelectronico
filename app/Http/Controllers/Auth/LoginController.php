<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function login()
    {
        return view('auth.login');
    }


    public function __construct()
    {
         $this->middleware('guest')->except('logout');
         
    }



    
    public function store(){
        $this->validate(request(), [
            'nombre_usuario' => 'required',
            'password' => 'required'
        ]);
        if (! auth()->attempt(request(['nombre_usuario', 'password'])) ) {
            return back()->withErrors([
                'message' => 'usuario o contraseña incorrecta.'
            ]);
        }
        return redirect('/');
    }
    
    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }
   



}
