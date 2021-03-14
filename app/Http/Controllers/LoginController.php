<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{


    public function login(){
        return view('site.auth.login');
    }

    public function register(){
        return view('site.auth.register');
    }

    public function create(Request $request){
        return $request->input();
    }

    public function check(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('LoggedUser', $user->id);
                return redirect('profile');
            }else{

                return back()->with('fail', 'Erro no email ou senha');

            }
        }else{
            return back()->with('fail', 'Dont have any user');
        }
       // dd($user);
    }

    public function profile(){
        if(session()->has('LoggedUser')){
            $user = User::where('id', session('LoggedUser'))->first();
            $data = ['LoggedUserInfo'=>$user];
        }
        return view('site.dashboard', compact('user'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
        //Auth::logout();

       // $request->session()->invalidate();

       // $request->session()->regenerateToken();

        return redirect('/login');
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {

        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => 1], $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    
}
