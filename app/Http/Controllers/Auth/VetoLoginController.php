<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Route;

class VetoLoginController extends Controller {
    public function __construct() {
        $this -> middleware('guest') -> except('logout');
        $this -> middleware('guest:veto', ['except' => ['logout']]);
    }
    
    public function showLoginForm() {
      return view('auth.veto_login');
    }
    
    public function login(Request $request) {
      // Validate the form data
      $this -> validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);
      
      // Attempt to log the user in
      if (Auth::guard('veto') -> attempt(['email' => $request -> email, 'password' => $request -> password], $request -> remember)) {
        // if successful, then redirect to their intended location
        return redirect() -> intended(route('veto.dashboard'));
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return view('auth.veto_login') -> withInput($request -> only('email', 'password', 'remember')) -> withMessage('Identifiants incorrect');
      // return redirect() -> back() -> withInput($request -> only('email', 'remember'));
      // return redirect() -> back() -> withInput($request -> only('email', 'remember')) -> withMessage('Identifiants incorrect');
    }
    
    public function logout() {
      Auth::guard('veto') -> logout();
      return redirect('/');
    }
}
