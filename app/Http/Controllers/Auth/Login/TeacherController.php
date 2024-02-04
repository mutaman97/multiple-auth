<?php

namespace App\Http\Controllers\Auth\Login;

use App\Models\Order;
use App\Models\Student;
//use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;
use Illuminate\Support\Facades\Hash;

class TeacherController extends DefaultLoginController
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/teacher';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:teacher')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login.teacher');
    }

    public function username()
    {
        return 'parent_code';
    }

    protected function guard()
    {
        return Auth::guard('teacher');
    }

    protected function attemptLogin(Request $request)
    {
        // Customize your login logic here
        $credentials = $this->credentials($request);
        $credentials['user_type'] = 2; // Add any additional conditions you need

        return $this->guard('teacher')->attempt(
            $credentials,
            $request->filled('remember')
        );
    }

}
