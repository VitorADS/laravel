<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    public function index(Request $r){
        $tries = $r->session()->get('login_tries', 0);

        $data = [
            'tries' => $tries,
            'frase' => __('messages.teste')
        ];
        return view('auth.login', $data);
    }

    public function authenticate(Request $r){
        $creds = $r->only(['email', 'password']);

        //$r->session()->forget('login_tries');
        //get-put-forget

        if(Auth::attempt(['email' => $creds['email'], 'password' => $creds['password']])){
            $r->session()->put('login_tries', 0);
            return redirect()->route('tarefas.list');
        }else{
            $tries = intval($r->session()->get('login_tries', 0));
            $r->session()->put('login_tries', ++$tries);
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
