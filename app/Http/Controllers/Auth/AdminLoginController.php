<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm() 
    {
        return view('auth.admin-login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request) 
    {
        //valiadate the form data

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        
        //if unsuccessful, then redirect back to login with login data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
