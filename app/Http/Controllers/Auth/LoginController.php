<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
    
        $superadmin = Admin::where('email', $request->email)->first();
        $user = User::where('email', $request->email)->first();
       
        $remember_me = (!empty($request->remember)) ? TRUE : FALSE;
    
        if ($user) {
        
            if (!Hash::check($request->password, $user->password)) {
        
                return back()->withInput($request->input())->with('passwordError', 'Oops! You have entered an invalid password');
            } else {
                auth()->guard()->login($user, $remember_me);
        
                return redirect('/');
            }
        
        }elseif($superadmin){
            if (!Hash::check($request->password, $superadmin->password)) {
        
                return back()->withInput($request->input())->with('passwordError', 'Oops! You have entered an invalid password');
            } else {
                Auth::guard('admin')->login($superadmin, $remember_me);
        
                return redirect('/admin/home');
            }
        }
        
        else {
            return back()
                ->withInput($request->input())
        
                ->with('emailError', 'Oops! You have entered an invalid username. Please try again.');
        }
       
    }
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        Auth::guard()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}