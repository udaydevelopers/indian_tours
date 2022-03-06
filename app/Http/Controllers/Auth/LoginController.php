<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Spatie\Permission\Models\Role;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        $id = Auth::user()->id;
        $roleArr = Role::where('id', $id)->get();
        $role = $roleArr[0]->name;

        switch ($role) {
            case 'Super Admin':
                return $redirectTo = route('admin.dashboard');
            break;
            case 'Admin':
            case 'Editor':
                return $redirectTo = route('admin.dashboard');
            break;

            default:
                return $redirectTo = route('home');
            break;
        }
    }
}
