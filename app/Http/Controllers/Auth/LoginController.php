<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Auth;
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
    protected $redirectTo = '/main';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $requst){
       $userinfo = $this->validate($requst, [
                        'email' => 'required',
                        'password' => 'required',
                   ]);

       if (Auth::Attempt(['email'=>$requst->get('email'), 'password' => $requst->get('password')])){
            return Redirect::to('main')->with('success', 'Successfully Logined'); 
       }else
            return Redirect::to('login')->with('error', "Login Failed");                    
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }

}
