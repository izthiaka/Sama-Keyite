<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username = $this->findUserLogin();
    }

    /**
     * Get the login username to be used by the controller
     *
     * @return string
    */
    public function findUserLogin(){
        $identifiant = request()->input('identifiant');
        $fieldType = filter_var($identifiant, FILTER_VALIDATE_EMAIL) ? 'email' : 'telephone';
        request()->merge([$fieldType => $identifiant]);

        return $fieldType;
    }

    /**
     * Get a validator for an incoming login request.
     *
     * @param array $data
     * @return \Illuminate\contracts\Validation\Validator
    */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'exists:users,' . $this->username() . ',status,1',
            'password' => 'required|string',
        ]);
    }

    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['status' => true]);
    }

    protected function redirectTo()
    {
        $user = Auth::user();
        $admin = Role::where('code_role', 'AD')->first();
        $client = Role::where('code_role', 'DM')->first();

        if ($user->role_id == $client->id) {
            return route('dashboard.client');
        }

        if ($user->role_id == $admin->id) {
            return route('dashboard.admin');
        }

    }
}
