<?php

namespace App\Http\Controllers\Auth;

use Illuminate\http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = '/tarefas';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('auth.login');
    }

    public function authenticate(Request $r){
        $creds = $r->only(['email', 'password']);
        print_r($creds);
        exit;

        if(Auth::attempt(['email' => $creds['email'], 'password' => $creds['password']])){
            return redirect()->route('tarefas.list');
        }else{
            return redirect()->route('login')->with(
                'warning', 'E-mail e ou senha invalidos.'
            );
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
