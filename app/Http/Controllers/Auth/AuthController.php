<?php

namespace  App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;



class AuthController extends Controller
{
	public function authenticate(){
		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			// Authentication passed...
			$redirectTo = '/home'; //aqui redireciona
			return redirect('/home');
		}
	}
	
    public function getLogout(){
        //echo "auth:" . Auth::user();
        Auth::logout();
        
        return redirect("/");
    }
}