<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordRequest;

use App\User;
use Hash;
use Auth;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getRegister(){
        //dd('ici');
        return view('auth.register');
    }

    /**
     * @param RegisterRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postRegister(RegisterRequest $request){
        // validation
        // on a cree avec "php artisan make:request RegisterRequest"
        // une class etendue dans le dossier "Requests"
        // on entrera pas ici tant que RegisterRequest ne sera pas satisfait
        
        // enregistrement
        $user = new User;

        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // autre façon d'écrire
        //$user->password = Hash::make($request->password);
        $user->is_admin = 0;

        $user->save();

        Auth::login($user);

        //return redirect('compte');
        return redirect('/');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(LoginRequest $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1], $request->remember)) {
            return redirect()->intended('admin');
        }
        elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended('/');
        }
        else {
            return redirect('connexion')->withErrors('Identifiants erronés')->withInput();
        }
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAccount(){
    //$user = Auth::user();
        return view('Compte.compte');
        //echo $user->email;
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(){
        Auth::logout();

        //return redirect('connexion');
        return redirect('/');
    }

}
