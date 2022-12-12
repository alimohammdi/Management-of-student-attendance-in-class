<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }


    public function user_login(Request $request){
        $user_name = $request->username;
        $password = md5($request->password);
        if(!empty($user_name) && !empty($password)){
            $user_name = User::where('user_name', $user_name)->first();
            if($user_name){
                $pass = $user_name->password;
                if($password === $pass){
                    session()->flash('login.user.success','خوش آمدید');
                    $user = User::where('user_name', $user_name->user_name)->first();
                    Auth::login($user);
                    return redirect('/dashboard');
                }else{
                    session()->flash('login.user.error','رمز عبور وارد شده نادرست می باشد');
                    return redirect()->route('login');
                }
            }else{
                session()->flash('login.user.error','نام کاربری وارد شده نادرست می باشد');
                return redirect()->route('login');
            }
        }else{
            session()->flash('login.user.error','لطفا تمامی فیلد ها را به درستی کامل کنید');
            return redirect()->route('login');

        }

    }
}
